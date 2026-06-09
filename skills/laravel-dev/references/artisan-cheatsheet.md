# Artisan cheat sheet

Run `php artisan list` to see everything available in *this* project (packages add commands). `php artisan help <command>` for exact options. `php artisan about` shows framework version, PHP version, drivers, and cache state — run it first when orienting in an unfamiliar repo.

## Generators (`make:*`)

| Need | Command |
|---|---|
| Model (+ migration/factory/seeder/policy/controller) | `make:model Order -mfsc` (add `-p` for policy, `--all`) |
| Migration | `make:migration create_orders_table` |
| Controller (resource / invokable / API) | `make:controller OrderController --resource` / `--invokable` / `--api` |
| Form Request | `make:request StoreOrderRequest` |
| API Resource / Collection | `make:resource OrderResource` / `--collection` |
| Policy | `make:policy OrderPolicy --model=Order` |
| Job | `make:job ProcessReport` (`--sync` for non-queued) |
| Event / Listener | `make:event OrderPaid` / `make:listener SendReceipt --event=OrderPaid` |
| Mailable / Notification | `make:mail OrderReceipt` / `make:notification InvoiceReady` |
| Middleware | `make:middleware EnsureTeamContext` |
| Command | `make:command SyncSumitReports` |
| Cast / Rule / Scope / Observer | `make:cast`, `make:rule`, `make:scope`, `make:observer` |
| Enum (via package) / Action (via package) | depends on installed packages — check first |
| Test (Pest/PHPUnit per config) | `make:test OrderTest` (`--unit` for unit) |
| Livewire component | `php artisan make:livewire CreateOrder` (Livewire 4 — confirm SFC vs two-file output) |

Pass `--no-interaction` in scripts. Many generators accept `--force` (overwrite) — avoid on existing files unless intended.

## Database

- `migrate` / `migrate:rollback` / `migrate:refresh` / `migrate:fresh --seed`
- `migrate:status` — see what's applied.
- **Never** `migrate:fresh`/`migrate:refresh` against a shared/prod DB — it drops data. Use only on local/test.
- `db:seed` / `db:seed --class=XSeeder`
- `db:show`, `db:table orders` — inspect schema without leaving the terminal.

## Inspecting the app

- `route:list` (`--path=`, `--method=`, `--except-vendor`) — find/verify routes.
- `config:show services` — view resolved config.
- `tinker` — REPL to probe models/queries quickly (read-only exploration; be careful with writes).
- `model:show Order` — columns, relations, observers for a model.
- `schedule:list` — scheduled tasks.

## Queues & background

- `queue:work` / `queue:listen` (dev); production uses a supervisor or **Horizon** (`horizon`, `horizon:status`, `horizon:terminate` to reload after deploy).
- `queue:retry all` / `queue:failed` / `queue:flush` for failed jobs.
- `schedule:run` (cron entry) / `schedule:work` (dev).

## Caching & optimization

- Dev: keep caches off. If config seems stale, `config:clear`, `route:clear`, `view:clear`, `cache:clear`, `optimize:clear`.
- Deploy: `config:cache`, `route:cache`, `view:cache`, `event:cache` (or `optimize`). Remember: once `config:cache` runs, `env()` outside config files returns null — read via `config()`.

## Quality gates (if installed)

- `php artisan test` — runs Pest or PHPUnit.
- `./vendor/bin/pint` — code style (Laravel's formatter). `--test` to check without changing.
- `./vendor/bin/phpstan analyse` / Larastan — static analysis.
- `./vendor/bin/rector` — automated refactors (only if the project uses it).

## First-party tooling you may see

Sanctum (`sanctum:*`), Passport, Scout (`scout:import`), Telescope, Pulse, Pennant (`pennant:purge`), Reverb (`reverb:start`), Pail (`pail` — tail logs). Confirm a package is installed before invoking its commands.

When you don't know a command's exact name or flags, run `php artisan list` / `php artisan help <cmd>` instead of guessing — the available set is project-specific.
