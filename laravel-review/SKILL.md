---
name: laravel-review
description: Reviews uncommitted or staged Laravel changes for framework-specific bugs and anti-patterns (mass assignment, N+1, unscoped tenant queries, fat controllers, missing validation/authorization, secrets, irreversible migrations). Use when the user asks to review their Laravel diff, check changes before committing, or audit recent work.
compatibility: Designed for Claude Code (uses context:fork with the Explore agent). Requires git.
disable-model-invocation: true
context: fork
agent: Explore
allowed-tools: Bash(git diff*), Bash(git status*), Bash(git log*), Read, Grep, Glob
---

# Laravel change review

This runs as a read-only review in an isolated context. Do not modify files — report findings only.

## Changes to review

Staged:
```!
git diff --staged
```

Unstaged:
```!
git diff
```

If both diffs are empty, state that there are no changes to review and stop.

## Review checklist (Laravel 13)

Go through each changed file and flag concrete issues with file:line references. Prioritize correctness and security over style.

**Security & data safety**
- Mass assignment: `Model::create($request->all())` or unguarded fill — should use validated data against `$fillable`/`#[Fillable]`.
- Tenant scoping: any query on tenant-owned tables that isn't scoped to the current tenant/team (global scope, `team_id`, Spatie team context). Cross-tenant leakage is critical.
- Missing validation or authorization at the boundary (no Form Request rules/`authorize()`, no Policy/`$this->authorize()` on a state-changing action).
- Hardcoded secrets/keys; `env()` called outside config files (returns null once config is cached).
- Unescaped output (`{!! !!}`) with user-controlled data.

**Correctness**
- N+1 queries: relations accessed in a loop without `with()`/`load()`/`withCount()`.
- External side effects (API calls, queue dispatch, mail) inside an uncommitted DB transaction without `afterCommit`.
- Non-idempotent writes where retries can double-apply (esp. payment/reconciliation paths) — should use `updateOrCreate`/`upsert`/idempotency keys.
- Migrations: editing an already-applied migration instead of adding a new one; missing or non-reversible `down()`; missing indexes on filtered/joined columns.

**Structure**
- Business logic in controllers or Livewire `mount()`/`render()` instead of an Action/Service.
- Fat model accumulating unrelated logic.
- Duplicated validation instead of a shared Form Request.
- Raw models returned from API endpoints instead of a Resource.
- New helper duplicating a first-party/package capability.

**Tests**
- Behavior changed without a corresponding test; faking missing for external calls; tenant-isolation untested for multi-tenant changes.

## Output format

```
## Review summary
[1–2 sentences on overall risk]

## Blocking issues
- file:line — issue — why it matters — suggested fix

## Suggestions (non-blocking)
- file:line — note

## Looks good
- [what's solid]
```

If there are no blocking issues, say so clearly.
