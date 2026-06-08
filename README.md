# Laravel skills for Claude Code

A composable set of Claude Code skills for Laravel 13 development, plus deterministic hook guardrails.

## What's inside

| Skill | Type | Invocation | Notes |
|---|---|---|---|
| `laravel-dev` | Knowledge hub | Auto (Claude loads when relevant) | Conventions + routes to `references/`. Standard-compliant, portable. |
| `laravel-test` | Action | `/laravel-test [filter]` or auto | Detects Pest/PHPUnit, runs, iterates to green. Injects `php artisan about`. |
| `laravel-scaffold` | Action | `/laravel-scaffold [Entity] [fields]` or auto | Generates a feature via artisan, matching project conventions. Carries a skill-scoped Pint hook. |
| `laravel-review` | Action | `/laravel-review` | Read-only diff review in a forked Explore agent. |
| `hooks/` + `settings.snippet.json` | Guardrails | Project hooks | Auto-Pint on PHP writes; block destructive DB commands. |

## Install (Claude Code)

Copy the skill directories to either location:
- Personal (all projects): `~/.claude/skills/`
- Project (commit to share): `<repo>/.claude/skills/`

```bash
cp -r laravel-dev laravel-test laravel-scaffold laravel-review ~/.claude/skills/
```

Skills hot-reload — they're available without restarting (a brand-new top-level skills dir needs a restart). Verify with `What skills are available?` or `/laravel-test`.

### Enable the hook guardrails (recommended)

```bash
mkdir -p .claude/hooks
cp hooks/*.sh .claude/hooks/ && chmod +x .claude/hooks/*.sh
# then merge settings.snippet.json into .claude/settings.json
```

Project skills/hooks require accepting the workspace trust dialog. Review the scripts before trusting.

## Standard vs Claude Code extensions

`laravel-dev` uses only the open [Agent Skills](https://agentskills.io) frontmatter (`name`, `description`, `allowed-tools`) — portable to other tools. The action skills intentionally use Claude Code extensions (`disable-model-invocation`, `context: fork`, `agent`, `argument-hint`, `hooks`, dynamic `` !`cmd` `` injection), which are honored by Claude Code CLI.

## Tune for your stack

References default to Livewire 4 SFC + Flux v2 + Pest + Spatie teams + Pennant. They instruct Claude to detect and follow the actual repo first, so they're safe on other stacks — but edit `laravel-dev/references/*.md` to match your conventions exactly.
