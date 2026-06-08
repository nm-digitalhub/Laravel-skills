# Laravel 13 Skill Set

This project uses a bundled set of Claude Code Agent Skills for Laravel 13
development. This file tells Claude what is installed and how to use it, and
gives a human a one-time setup checklist.

<!--
  Maintainer note (stripped from Claude's context, visible only on Read):
  Source package = laravel-skills/. Ship this CLAUDE.md at the project root or
  in .claude/. Re-run the test harness (run-tests.py) after editing any skill.
-->

## Stack

- Laravel 13 (PHP 8.3+), Eloquent, Artisan.
- Livewire 4 (single-file components) + Flux UI v2 + Alpine.js.
- Pest (preferred) or PHPUnit. Pint for formatting.
- Spatie Permission (teams), Pennant (feature flags), Saloon (HTTP clients).

## Available skills

| Skill | Triggers on | Manual command |
| --- | --- | --- |
| `laravel-dev` | Any Laravel work or "how do I X in Laravel" question. Auto-loads by description. | — (knowledge hub) |
| `laravel-test` | "run tests", "are tests green", verify a change. | `/laravel-test [filter]` |
| `laravel-scaffold` | "create a model / CRUD / feature". | `/laravel-scaffold <Name>` |
| `laravel-review` | "review my diff / changes before commit". Manual only. | `/laravel-review` |

`laravel-dev` grounds answers in the official Laravel 13.x API reference and the
project's real code — never in guesses. The complete API (1,519 classes,
Laravel 13.14.0 snapshot) lives in `laravel-dev/references/api/generated/`.

## Standing rules

- Prefer the skills above over ad-hoc commands. Use `laravel-scaffold` for new
  features so generated files match project conventions.
- Run `/laravel-test` (or `php artisan test`) and confirm green **before**
  reporting a task done or committing.
- Run `/laravel-review` on the diff before any commit.
- Match existing conventions; do not introduce a new pattern when one exists.
- Never run destructive DB commands (`migrate:fresh`, `migrate:refresh`,
  `migrate:reset`, `db:wipe`) against a real database — the guard hook blocks
  them; do not try to bypass it.

## Hooks (enforced, not advisory)

Wired via `.claude/settings.json` (see `settings.snippet.json`):

- **guard-migrations.sh** (`PreToolUse` Bash) — denies destructive migration /
  `db:wipe` commands. This is a hard block, independent of Claude's judgment.
- **pint-on-write.sh** (`PostToolUse` Edit|Write|MultiEdit) — runs
  `./vendor/bin/pint` on every `.php` file Claude writes, so formatting is
  automatic. Do not hand-format PHP.

## Setup (one-time)

Run from the project root. Use `.claude/` for a team-shared install, or
`~/.claude/` for a personal install across all projects.

```bash
# 1. Skills
mkdir -p .claude/skills
cp -R laravel-skills/laravel-dev .claude/skills/
cp -R laravel-skills/laravel-test .claude/skills/
cp -R laravel-skills/laravel-scaffold .claude/skills/
cp -R laravel-skills/laravel-review .claude/skills/

# 2. Hooks
mkdir -p .claude/hooks
cp laravel-skills/hooks/*.sh .claude/hooks/
chmod +x .claude/hooks/*.sh

# 3. Settings — merge settings.snippet.json into .claude/settings.json
#    (it wires the two hooks above). Merge by hand if the file already exists.
cp laravel-skills/settings.snippet.json .claude/settings.snippet.json
```

Then verify inside a Claude Code session:

- `/memory` — confirm this CLAUDE.md is listed (loaded).
- `/laravel-test` — confirm the test skill is available.
- Edit any `.php` file — Pint should reformat it automatically.

## Match the API reference to your installed version

The bundled API snapshot is Laravel 13.14.0. Regenerate it for the exact
version in `vendor/` so signatures always match the running code:

```bash
php .claude/skills/laravel-dev/scripts/generate-api-reference.php \
  --out=.claude/skills/laravel-dev/references/api/generated
```

Resolution order Claude uses for API facts: installed source in
`vendor/laravel/framework/src/...` → the `generated/` snapshot → the online
docs at `https://api.laravel.com/docs/13.x/`.

## Notes

- CLAUDE.md is loaded as context every session; it is not enforced config. The
  hard guarantees come from the hooks above, not from these rules.
- Keep this file under ~200 lines. Put task-specific procedures in skills, and
  path-scoped conventions in `.claude/rules/`, rather than growing this file.
