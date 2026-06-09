# Laravel 13 Skills for Claude Code

[![skills.sh](https://skills.sh/b/nm-digitalhub/Laravel-skills)](https://skills.sh/nm-digitalhub/Laravel-skills)
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](LICENSE)

A bundle of [Agent Skills](https://agentskills.io) for building **Laravel 13**
applications with Claude Code — grounded in the official Laravel 13.x API
reference (1,519 classes bundled) and your project's real code, not guesses.

Stack focus: Laravel 13 · Livewire 4 (SFC) · Flux UI v2 · Pest · Pint.

## Install

```bash
# Everything, into Claude Code (project scope)
npx skills add nm-digitalhub/Laravel-skills --all -a claude-code

# Or pick skills
npx skills add nm-digitalhub/Laravel-skills --list
npx skills add nm-digitalhub/Laravel-skills --skill laravel-dev -a claude-code
```

## Skills

| Skill | What it does | Manual command |
| --- | --- | --- |
| `laravel-dev` | Knowledge hub. Auto-loads on any Laravel work or "how do I X in Laravel" question. Ships the full Laravel 13.x API reference + a PHP reflection generator to regenerate it for your installed version. | — |
| `laravel-test` | Detects Pest vs PHPUnit, runs the suite, iterates to green. | `/laravel-test [filter]` |
| `laravel-scaffold` | Scaffolds a full feature via `artisan make:*`, matching project conventions. | `/laravel-scaffold <Name>` |
| `laravel-review` | Read-only diff review for Laravel anti-patterns (mass assignment, N+1, unscoped tenant queries, missing validation/authorization, irreversible migrations). | `/laravel-review` |
| `laravel-audit` | Deep, **read-only** audit of a whole module or the **live production source** (not just a diff). Verifies against the installed API and separates deliberate conventions from real bugs using consistency/docs/tests evidence. Detects prod-vs-git drift and config-cache drift. | `/laravel-audit [path\|prod\|drift]` |

## Hooks (optional, recommended)

`hooks/` + `settings.snippet.json` wire two project hooks for Claude Code:

- **guard-migrations.sh** — `PreToolUse` block on `migrate:fresh/refresh/reset`
  and `db:wipe` (hard stop, independent of model judgment).
- **pint-on-write.sh** — `PostToolUse` auto-runs `./vendor/bin/pint` on every
  `.php` file written.

Copy `hooks/*.sh` into `.claude/hooks/` (`chmod +x`) and merge
`settings.snippet.json` into `.claude/settings.json`. See `CLAUDE.md` for the
full setup checklist.

## Compatibility

- `laravel-dev` is a clean, portable [Agent Skills standard](https://agentskills.io)
  skill — works across any compliant agent.
- `laravel-test`, `laravel-scaffold`, and `laravel-review` use Claude Code
  extension fields (`argument-hint`, `hooks`, `context`, `agent`). They run
  fully in **Claude Code**; other agents ignore those fields. Each carries a
  `compatibility:` note to that effect.

## License

MIT — see [LICENSE](LICENSE). Bundled API signatures are derived from the
MIT-licensed Laravel framework.
