---
name: laravel-scaffold
license: MIT
description: Scaffolds a complete Laravel feature (model, migration, factory, policy, controller/action, Form Request, resource, and test) using artisan generators, matching the project's existing conventions. Use when the user wants to create a new model, resource, CRUD feature, or set of related Laravel files.
compatibility: Designed for Claude Code (uses skill-scoped hooks). Requires php artisan generators and Pint.
argument-hint: "[EntityName] [brief description of fields/behavior]"
allowed-tools: Bash(php artisan make:*), Bash(php artisan about*), Read, Grep, Glob, Edit
hooks:
  PostToolUse:
    - matcher: "Edit|Write|MultiEdit"
      hooks:
        - type: command
          command: "${CLAUDE_SKILL_DIR}/hooks/pint-on-write.sh"
---

# Scaffold a Laravel feature

Target: **$ARGUMENTS**

## Conventions in this project (read before generating)

Existing models (mirror their style — casts vs attributes, fillable, return types):
```!
ls app/Models 2>/dev/null | head -20 || echo "no app/Models"
```

Test framework:
```!
grep -m1 -E '"(pestphp/pest|phpunit/phpunit)"' composer.json 2>/dev/null || echo "unknown"
```

## Instructions

1. **Read one or two existing models** (and their migration + test) from the list above before writing anything. Match their conventions exactly: strict types, `casts()` method vs `$casts`/attributes, `$fillable`, typed relationship return types, naming. The repo's style wins over any default.
2. **Confirm scope.** From `$ARGUMENTS`, infer the entity and fields. If the fields or relationships are ambiguous and it materially affects the schema, ask one concise clarifying question before generating — a wrong migration is costly to undo.
3. **Generate with artisan**, not by hand-writing boilerplate:
   - `php artisan make:model {Name} -mf` (model + migration + factory). Add `-p` for a policy, `--api`/`--resource` controller as appropriate.
   - `php artisan make:request Store{Name}Request` and `Update{Name}Request` for validation at the boundary.
   - `php artisan make:resource {Name}Resource` if it's exposed via API.
   - `php artisan make:test {Name}Test` (matches the configured framework).
4. **Fill in the generated files** following `references/architecture.md` and `references/eloquent.md` of the `laravel-dev` skill (read them if available): thin controller → Action/Service, validation in the Form Request, `$fillable` set, relationships typed, casts defined, migration columns + indexes + reversible `down()`.
5. **Multi-tenancy:** if the project is multi-tenant, add the tenant/`team_id` column and the scoping mechanism the project uses (global scope / Spatie team context). Never leave tenant data unscoped.
6. **Write a real test** (at least a feature test for the happy path + an authorization/tenant-isolation test) and run it via the `laravel-test` skill.
7. **Do not run migrations automatically** against a shared DB. Tell the user the migration is ready and let them run `php artisan migrate` when they choose (or run it only against the local/test DB if that's clearly the context).

Report the files created and the next command for the user to run.
