# Architecture — where logic should live

The recurring question is "where does this code go?" Keep controllers/components thin; push behavior into focused, testable units. Follow the layering the repo already uses; the guidance below is a sane default.

## Layering at a glance

```
HTTP/Livewire (thin)  →  validate + authorize  →  Action/Service (logic)  →  Model/Repository (data)
                                                          ↓
                                              Events / Jobs (side effects, async)
```

- **Controllers / Livewire components**: receive input, validate, authorize, call one Action/Service, return a response/view. No business logic, no raw queries beyond trivial reads.
- **Form Requests**: validation + authorization at the boundary. `rules()` + `authorize()`. Prefer these over inline `$request->validate()` once a rule set is non-trivial or reused.
- **Actions** (single-purpose invokable classes, often `lara-actions/laravel-actions` or a plain `__invoke`/`handle`): one verb each (`CreateOrder`, `ReconcileSumitPayment`). Easy to test and queue. Default home for a use-case.
- **Services**: stateful or multi-step coordinators that orchestrate several Actions/integrations. Use when an Action would get too broad.
- **Models**: data + relationships + small domain accessors/scopes. Not a dumping ground for unrelated logic ("God model" smell — split behavior into traits or Actions).
- **DTOs**: pass typed data between layers instead of loose arrays when shape matters (e.g. `spatie/laravel-data`).

### Action vs Form Request vs API Resource — quick split
- **Form Request** = "is this input valid and allowed?" (in)
- **Action/Service** = "do the thing" (process)
- **API Resource** = "shape the output" (out)
Don't merge these responsibilities.

## API responses

- Use `JsonResource` / `ResourceCollection` to shape output; never return raw models from APIs (leaks columns, couples API to schema).
- For **JSON:API spec** compliance, use the 13.x first-party `Illuminate\Http\Resources\JsonApi` classes (relationship includes, sparse fieldsets, links) — see `references/laravel-13.md`.
- Version APIs via route prefix; keep resources per version if shapes diverge.

## Events, jobs, queues

- **Events/Listeners**: decouple side effects ("OrderPaid" → send receipt, notify, update stats). Keep listeners small; queue heavy ones (`ShouldQueue`).
- **Jobs**: anything slow or external (emails, third-party API calls, report generation). Make them **idempotent** and safe to retry; set `$tries`, `$backoff`, and unique constraints (`ShouldBeUnique`) where double-processing is harmful.
- **Dispatch after commit** for jobs/events triggered inside a DB transaction.
- Queue routing can be centralized with 13.x `Queue::route()`.
- For at-least-once external calls (payment gateways), use **idempotency keys** and a reconciliation job so retries don't double-charge or double-record.

## Multi-tenancy & authorization

- **Spatie Permission with teams**: set the team context per request (middleware → `setPermissionsTeamId($teamId)`), then roles/permissions resolve within that team. Confirm the team context is set before any permission check.
- Authorize through **Policies** (`$this->authorize('update', $order)`) or gates — not ad-hoc `if` checks scattered in controllers.
- Every tenant-data query must be scoped (see `references/eloquent.md`). Treat cross-tenant leakage as a security bug.

## Feature flags — Laravel Pennant

- Define features with `Feature::define('new-billing', fn (User $u) => ...)`.
- Check with `Feature::active('new-billing')` (or the Blade/`@feature` directive, or middleware).
- Scope flags to the user/team as appropriate. Use flags to ship dark and ramp; remove the flag + dead branch once fully rolled out.

## Third-party integrations — Saloon

- Model each external API as a Saloon **Connector** + **Request** classes; keep auth, base URL, retries, and rate limits in the connector.
- Wrap responses into DTOs; don't leak raw HTTP arrays into the app.
- Add response caching and circuit-breaking where the upstream is flaky.
- Fake Saloon in tests (`MockClient`) — never hit live APIs in the suite.

## Configuration & secrets

- All tunables via `config/*.php` reading from `.env`; reference `config('services.x.key')`, never `env()` outside config files (env() returns null once config is cached).
- Never hardcode or print secrets.

## Smells to flag during review

- Business logic in controllers/Livewire mount/render.
- Fat models accumulating unrelated methods.
- Raw `$request->all()` into `create()`.
- Queries unscoped in multi-tenant tables.
- External side effects inside an uncommitted transaction.
- Duplicated validation instead of a shared Form Request.
- New helper that duplicates a first-party/package capability.
