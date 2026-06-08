#!/usr/bin/env bash
# PreToolUse(Bash) guard — blocks destructive Laravel DB commands that drop data.
# Receives the tool-call JSON on stdin; denies via permissionDecision when matched.
# No-op (never blocks the workflow) if jq is unavailable.
set -euo pipefail
command -v jq >/dev/null 2>&1 || exit 0

CMD="$(jq -r '.tool_input.command // empty')"
[ -n "$CMD" ] || exit 0

# Destructive artisan commands: drop tables / wipe the database.
if printf '%s' "$CMD" | grep -Eq 'artisan +(migrate:fresh|migrate:refresh|migrate:reset|db:wipe)'; then
  jq -n '{
    hookSpecificOutput: {
      hookEventName: "PreToolUse",
      permissionDecision: "deny",
      permissionDecisionReason: "Blocked: this artisan command drops data. If you really intend to reset the LOCAL/TEST database, run it yourself in the terminal."
    }
  }'
  exit 0
fi

exit 0
