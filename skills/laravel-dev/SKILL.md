---
name: laravel-dev
license: MIT
description: Expert guidance for developing, debugging, and reviewing Laravel 13 applications. Use this skill whenever working in a Laravel codebase — writing or editing models, migrations, controllers, jobs, commands, events, mail, notifications, policies, Eloquent queries, Livewire components, Pest/PHPUnit tests, API resources, or service providers; running artisan; designing application architecture (Actions, Services, Form Requests, API Resources, multi-tenancy, feature flags); or answering "how do I do X in Laravel". Trigger this even when the user only mentions a Laravel concept (Eloquent, Blade, Livewire, Flux, Filament, queue, Horizon, Sanctum, Pennant, Pest) without saying the word "Laravel". Grounds all answers in the official Laravel 13.x API reference and the project's actual code instead of guessing.
metadata:
  version: "1.0"
  stack: "Laravel 13 / Livewire 4 / Flux UI v2 / Pest"
---

# Laravel 13 Development

Guidance for building and maintaining Laravel **13.x** applications (released March 2026, PHP 8.3 minimum). The goal is correct, idiomatic, convention-following code — verified against the real API and the project's own conventions, never invented.

## Core operating principle: verify, don't guess

Laravel has a large, fast-moving surface area. The single biggest failure mode is confidently writing a method signature, attribute, config key, or helper that doesn't exist or changed between versions. To avoid that:

1. **Read the project first.** Before writing a model/controller/test, open 1–2 existing siblings in the same directory and match their style (naming, return types, traits, test framework, formatting). The repo's own conventions outrank any default in this skill.
2. **Confirm the framework version.** Check `composer.json` (`laravel/framework`) and `php -v`. Don't assume 13.x — a repo may still be on 11.x or 12.x, which changes available APIs. If unsure, run `php artisan about`.
3. **Ground unfamiliar APIs in the bundled complete API reference.** This skill ships the entire Laravel 13 API so you never have to guess a class, method, attribute, or signature:
   - **Complete API index** (every namespace + every class, with the URL pattern to resolve any of them): `references/api/index.md`. Read it to find the right class/namespace, then get the exact signature from one of the next two sources.
   - **Authoritative source in this repo** (best — version-exact): read `vendor/laravel/framework/src/<FQCN with / for \>.php` with Read/Grep. The installed source always wins over any doc.
   - **Generated per-class signatures** for the installed version: if `references/api/generated/` exists, read the namespace file there (e.g. `Database_Eloquent.md`). To create/refresh it, run the generator (see "Complete API" below).
   - **Online API reference** (version-pinned): `https://api.laravel.com/docs/13.x/<FQCN with / for \>.html`, e.g. `…/Illuminate/Database/Eloquent/Model.html`. Prose guides: `https://laravel.com/docs/13.x`. If the Context7 MCP server is available it's a fast way to pull current docs.
4. **Prefer existing tools over new code.** Before building a helper, check whether Laravel, a first-party package (Sanctum, Horizon, Pennant, Reverb, Scout, Telescope), or an installed composer package already solves it.

If a fact can't be verified, say so explicitly rather than presenting a guess as fact.

## Workflow for a typical task

1. **Locate** the relevant files (`app/Models`, `app/Http`, `app/Actions`, `routes/`, `database/migrations`, `tests/`). Use the existing folder layout — don't impose a new one.
2. **Match conventions** from neighboring files: PHP version features (typed properties, enums, readonly, constructor promotion), strict types if used, return types, naming.
3. **Implement** the smallest correct change. Wire up DI through the container; type-hint dependencies.
4. **Validate at the boundary** (Form Request or `$request->validate()`), keep controllers thin, push logic into Actions/Services/models.
5. **Write/adjust tests** in the project's framework (detect Pest vs PHPUnit — see `references/testing.md`).
6. **Run the checks the project uses**: `php artisan test` (or `./vendor/bin/pest`), `./vendor/bin/pint` (formatting), `./vendor/bin/phpstan` / Larastan if present. Never claim something passes without running it.
7. **Migrations**: create with `php artisan make:migration`, keep `up()`/`down()` reversible, never edit a migration that's already run in shared environments — add a new one.

## Companion action skills

This is the knowledge hub. For specific actions, these sibling skills compose automatically (Claude can use several skills together):
- **`laravel-test`** — run the suite (Pest/PHPUnit), iterate to green. Invoke via `/laravel-test [filter]`.
- **`laravel-scaffold`** — generate a feature (model/migration/factory/policy/request/resource/test) following project conventions.
- **`laravel-review`** — read-only review of a diff for Laravel anti-patterns (runs in an isolated Explore context). Invoke via `/laravel-review`.

When a task is "build/change code," apply this hub's conventions; when it's "run/scaffold/review," prefer the matching action skill.

## Deterministic guardrails (hooks)

Conventions in this skill are guidance; hooks are enforcement. For rules that must hold every time, the set ships project-wide hooks (see `settings.snippet.json` + `hooks/`):
- **PostToolUse** on `Edit|Write|MultiEdit` → auto-formats changed `.php` files with Pint, so style is never a review topic.
- **PreToolUse** on `Bash` → blocks destructive DB commands (`migrate:fresh|refresh|reset`, `db:wipe`) that drop data.

Install: copy `hooks/*.sh` into the project's `.claude/hooks/` (keep them executable), then merge `settings.snippet.json` into `.claude/settings.json`. `laravel-scaffold` also carries the Pint hook in its own frontmatter as a skill-scoped example (active only while that skill runs). Prefer hooks over prose when a rule is non-negotiable.

## Complete API — the whole Laravel 13 surface

The full API is bundled so any class/method can be resolved without guessing:

- **`references/api/index.md`** — navigation layer: every namespace and class in Laravel 13, plus the URL pattern (`https://api.laravel.com/docs/13.x/<FQCN with />.html`) to open any of them. Start here to locate a class.
- **`references/api/generated/`** — a **bundled snapshot of Laravel 13.14.0**: one `Namespace.md` per namespace with exact signatures of all 1519 classes (31k+ methods) + `manifest.json`. Read the relevant file directly for an authoritative signature. **Regenerate for your installed version** (or after `composer update`) with:
  ```
  php <skill-dir>/scripts/generate-api-reference.php --out=.claude/skills/laravel-dev/references/api/generated
  ```
  (`<skill-dir>` = wherever this skill is installed; `--only=Database\\Eloquent` scopes it; re-run after `composer update`.) Output: one `Namespace.md` per namespace + `manifest.json`.

Resolution order when you need an API detail: **installed source** (`vendor/laravel/framework/src/...`) → bundled/regenerated **generated/** file → **online API URL**. The index tells you where each class lives.

## Reference files — read the relevant one before writing code

This skill is organized by domain. Read the file that matches the task; don't load all of them.

| When the task involves… | Read |
|---|---|
| What's new/changed in 13.x, PHP-attribute config, AI SDK, JSON:API, Queue::route, Cache::touch, Reverb DB driver, passkeys, upgrade questions | `references/laravel-13.md` |
| Models, relationships, casts, scopes, query building, N+1, mass assignment, factories | `references/eloquent.md` |
| Where logic should live: Actions, Services, Form Requests, API Resources, DTOs, events, jobs, multi-tenancy, Spatie Permission teams, Pennant feature flags | `references/architecture.md` |
| Livewire 4 (single-file components), Flux UI v2, Alpine, Blade, Hebrew/RTL UI | `references/livewire-flux.md` |
| Writing tests — Pest or PHPUnit, HTTP/feature tests, factories, fakes, datasets | `references/testing.md` |
| Which artisan command to run, make:* generators, tinker, queue/horizon, optimize | `references/artisan-cheatsheet.md` |
| Any class/method/attribute signature — "does X exist in 13.x?", full namespace map | `references/api/index.md` (+ run `scripts/generate-api-reference.php` for exact signatures) |

When a task spans domains (e.g. a Livewire component backed by an Action that queries Eloquent and has a Pest test), read each relevant file.

## Stack assumptions (adjust to the actual repo)

These references are tuned for a modern Israeli-market SaaS stack: **Laravel 13 + Livewire 4 (SFC) + Flux UI v2 + Alpine**, **Pest** for tests, **Spatie Permission (teams)** for multi-tenant authorization, **Laravel Pennant** for feature flags, **Saloon** for third-party API integrations, Hebrew/RTL frontends. If the repo uses a different stack (Inertia+Vue, Filament, Blade-only, PHPUnit), follow the repo — the conventions in the references are defaults, not mandates. Detect, then conform.

## Things that reliably go wrong — guard against them

- **Mass assignment**: respect `$fillable`/`$guarded` (or the 13.x `#[Fillable]`/`#[Guarded]` attributes); never blindly `Model::create($request->all())`.
- **N+1 queries**: eager-load relations (`with()`, `load()`); in tests, assert query counts where it matters.
- **Tenant scoping**: in multi-tenant apps, every query must be scoped to the current tenant/team. Confirm the scoping mechanism (global scope, `team_id` column, Spatie team context) before writing a query that touches tenant data.
- **Validation gaps**: never trust request input; validate and authorize (`authorize()` in Form Request or a Policy) at the boundary.
- **Editing run migrations**: add a new migration instead of mutating an applied one.
- **Inventing config keys / facade methods**: verify against `config/*.php` in the repo and the API reference.
- **Secrets**: never hardcode keys; read from `config()` backed by `.env`. Don't print `.env` contents.
