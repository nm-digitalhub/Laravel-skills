#!/usr/bin/env bash
# PostToolUse(Edit|Write|MultiEdit) — auto-formats a changed PHP file with Laravel Pint.
# Receives the tool-call JSON on stdin and formats only the file that was just written.
# No-op if jq or Pint is unavailable, so it never breaks the edit flow.
set -euo pipefail
command -v jq >/dev/null 2>&1 || exit 0

FILE="$(jq -r '.tool_input.file_path // .tool_input.path // empty')"
[ -n "$FILE" ] || exit 0

case "$FILE" in
  *.php) ;;
  *) exit 0 ;;
esac

if [ -x ./vendor/bin/pint ]; then
  ./vendor/bin/pint "$FILE" >/dev/null 2>&1 || true
fi

exit 0
