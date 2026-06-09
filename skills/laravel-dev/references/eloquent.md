# Eloquent — models, relationships, queries

Match the patterns already used in `app/Models`. The defaults below are idiomatic Laravel 13; the repo's existing models win where they differ.

## Model definition

- Use `casts()` method (return array) over the legacy `$casts` property on modern code. Cast enums to PHP backed enums, JSON to `array`/`AsCollection`, money/dates appropriately.
- Set `$fillable` (allowlist) — prefer it to `$guarded = []`. In 13.x the `#[Fillable(...)]` / `#[Guarded(...)]` attributes are equivalent; follow the file's existing style.
- Type relationship methods with their return type (`: HasMany`, `: BelongsTo`, …). This is both documentation and IDE/static-analysis support.
- Prefer `protected function casts(): array` for attribute casting and accessors/mutators via `Illuminate\Database\Eloquent\Casts\Attribute`:

```php
protected function name(): Attribute
{
    return Attribute::make(
        get: fn (string $value) => ucfirst($value),
        set: fn (string $value) => strtolower($value),
    );
}
```

## Relationships

Standard set: `hasOne`, `hasMany`, `belongsTo`, `belongsToMany`, `hasManyThrough`, `morphTo`, `morphMany`, `morphToMany`. For each, declare the inverse. Use `withTimestamps()` on pivots that need them, and a dedicated Pivot model when the pivot has behavior.

## Querying — correctness checklist

- **Avoid N+1.** Eager-load with `with(['relation', 'relation.nested'])`; lazy eager-load with `load()`. Use `withCount()` for counts. In hot paths, prevent lazy loading with `Model::preventLazyLoading()` in a non-production service provider.
- **Mass assignment**: `Model::create($validated)` using *validated* data only — never `$request->all()`.
- **Chunking** large sets: `chunkById()` / `lazy()` / `cursor()` instead of loading everything.
- **Scopes**: prefer query scopes (`scopeActive`) or the 13.x `#[Scope]` attribute on a method for reusable constraints; keep controllers free of raw query conditions.
- **Pagination**: `paginate()` / `simplePaginate()` / `cursorPaginate()` (cursor is best for infinite scroll and large tables).
- **Reads vs writes**: use `DB::transaction(fn () => ...)` for multi-step writes that must be atomic. For external side effects inside a transaction (API calls, queue dispatch), dispatch *after* commit (`DB::afterCommit()` or `dispatch()->afterCommit()`).

## Multi-tenant scoping (critical)

In multi-tenant apps, **every** query against tenant-owned tables must be scoped. Before writing one, confirm the mechanism:
- Global scope on the model (auto-applies a `where team_id = ...`), or
- An explicit `team_id`/`tenant_id` column filtered everywhere, or
- Spatie Permission team context (`setPermissionsTeamId()`).

Never write a bare `Model::all()` / `Model::find()` on tenant data without confirming scoping is enforced — leaking another tenant's rows is the worst class of bug here.

## Factories & seeders

- Keep a `Factory` per model; use states for variations. Tests should build data through factories, not hand-built arrays.
- Seeders for reference/lookup data; factories for test/dev volume.

## Performance & safety

- Add DB indexes for columns used in `where`/`orderBy`/joins; verify in the migration.
- Use `select()` to avoid pulling unused columns on wide tables.
- For aggregate dashboards, prefer a single grouped query over per-row queries.
- `firstOrCreate` / `updateOrCreate` / `upsert()` for idempotent writes (important when reconciling external systems like a payment gateway).

When unsure whether a query-builder method exists or its signature, check `Illuminate\Database\Eloquent\Builder` / `Illuminate\Database\Query\Builder` in the API reference.
