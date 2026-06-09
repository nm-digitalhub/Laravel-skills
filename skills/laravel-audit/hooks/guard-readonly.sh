#!/usr/bin/env bash
# PreToolUse(Bash) guard for laravel-audit — keeps the audit strictly read-only,
# including commands tunneled over SSH. Denies mutating/destructive commands and
# allows read-only ones. This is a deterministic backstop on top of the skill's
# read-only tool set; it is not the primary control.
# No-op (never blocks) if jq is unavailable.
set -euo pipefail
command -v jq >/dev/null 2>&1 || exit 0

CMD="$(jq -r '.tool_input.command // empty')"
[ -n "$CMD" ] || exit 0

deny() {
  jq -n --arg r "$1" '{
    hookSpecificOutput: {
      hookEventName: "PreToolUse",
      permissionDecision: "deny",
      permissionDecisionReason: $r
    }
  }'
  exit 0
}

# Normalize: drop harmless redirections, and strip quotes so commands tunneled
# inside ssh "..." / '...' are tokenized and matched like local ones.
SCAN="$(printf '%s' "$CMD" | sed -E 's#2>/dev/null##g; s#>/dev/null##g; s#2>&1##g' | tr -d '\042\047')"

# 1) File mutation / shell writes
printf '%s' "$SCAN" | grep -Eqi '(^|[;&|( ])(rm|rmdir|mv|dd|truncate|shred|chmod|chown|ln)([ ]|$)' \
  && deny "Read-only audit: file-mutating command blocked."
printf '%s' "$SCAN" | grep -Eq 'sed -i|>>|[^0-9&] *> ' \
  && deny "Read-only audit: output redirection or in-place edit blocked."

# 2) Laravel / artisan mutations (allowed: about, --version, route:list)
printf '%s' "$SCAN" | grep -Eqi 'artisan +(migrate|db:|tinker|down|up|optimize|make:|key:|storage:link|queue:|schedule:|horizon|reverb|vendor:publish|[a-z-]+:(clear|cache|flush|prune|forget|install|table))' \
  && deny "Read-only audit: state-changing artisan command blocked. Allowed: about, --version, route:list."

# 3) Package managers / builders
printf '%s' "$SCAN" | grep -Eqi '(composer +(install|require|update|remove|dump|create-project)|npm +(i|ci|install|update|run)|pnpm +|yarn +|pip +install)' \
  && deny "Read-only audit: package/build command blocked."

# 4) Database clients (audit reads source, not data)
printf '%s' "$SCAN" | grep -Eqi '(^|[;&|( ])(mysql|mariadb|psql|sqlite3|redis-cli|mongo|mongosh)([ ]|$)' \
  && deny "Read-only audit: database client blocked."

# 5) git write / state subcommands (allowed: diff, log, blame, status, show, ls-files, rev-parse)
printf '%s' "$SCAN" | grep -Eqi 'git +(commit|push|pull|fetch|checkout|switch|reset|rebase|merge|cherry-pick|stash|clean|add|rm|mv|tag|branch|init|remote|apply|restore|am|revert|gc)' \
  && deny "Read-only audit: git write/state command blocked. Allowed: diff, log, blame, status, show, ls-files, rev-parse."

# 6) rsync/scp PUSH to a remote destination (pull is fine: remote appears as source, not last arg)
printf '%s' "$SCAN" | grep -Eqi '(rsync|scp)\b[^|;&]*[[:alnum:]_.-]+:[^ :]*$' \
  && deny "Read-only audit: pushing to a remote (rsync/scp write) blocked. Pull only."
printf '%s' "$SCAN" | grep -Eqi 'rsync\b[^|;&]*--delete' \
  && deny "Read-only audit: rsync --delete blocked."

exit 0
