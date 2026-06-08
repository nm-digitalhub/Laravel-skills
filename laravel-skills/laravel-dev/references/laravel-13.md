# Laravel 13 — what's new and version-specific

Laravel 13 released **March 17, 2026**. Headline: *minimal breaking changes*. The only infrastructure requirement is **PHP 8.3 minimum** (up from 8.2). Almost everything else is additive and backward-compatible — property-based config still works everywhere.

**Always confirm the running version** before relying on any of this: check `composer.json` (`laravel/framework: ^13.0`) and `php artisan about`. If the repo is on 11.x/12.x, the attribute syntax and some methods below won't be available.

When you need an exact class name, method signature, or attribute argument, look it up — don't reconstruct from memory:
- API reference: `https://api.laravel.com/docs/13.x/index.html`
- New attribute classes live under these namespaces (browse them in the reference):
  - `Illuminate\Database\Eloquent\Attributes`
  - `Illuminate\Console\Attributes`
  - `Illuminate\Queue\Attributes`
  - `Illuminate\Routing\Attributes` (+ `Routing\Attributes\Controllers`)
  - `Illuminate\Foundation\Http\Attributes`
  - `Illuminate\Http\Resources\Attributes`
  - `Illuminate\Container\Attributes`
  - `Illuminate\Foundation\Testing\Attributes`

## 1. PHP 8.3 minimum

Use what 8.3 enables: typed class constants, `json_validate()`, readonly improvements, `#[\Override]`. Don't add polyfills for things now native. Don't drop below 8.3-only syntax for "compatibility" — the floor is 8.3.

## 2. PHP Attributes for component config (the flagship feature)

Across 15+ locations, class **properties** that configured framework behavior now have **attribute** equivalents. Both styles work; attributes are opt-in. Match whatever the surrounding file already uses — don't convert a property-based model to attributes unless asked.

**Eloquent model** — attributes replace `$table`, `$fillable`, `$guarded`, `$hidden`, `$casts`, key config, etc.:

```php
use Illuminate\Database\Eloquent\Attributes\Table;
// (verify exact attribute names/args in the API reference before use)

#[Table('users', key: 'user_id', keyType: 'string', incrementing: false)]
class User extends Authenticatable
{
    // ...
}
```

Attributes also apply to **commands** (signature/description), **jobs**, **listeners**, **mailables**, **notifications**, **broadcast events**, and **controllers/routes**. Before writing a specific attribute, confirm its name and constructor signature in the matching `*\Attributes` namespace in the API reference — the property→attribute mapping is not 1:1 for every property.

**Guidance:** attributes are nice for new code where they read cleanly. For existing models that already declare `$fillable`/`$casts()`, leave them as-is unless the user wants a migration to attributes. Consistency within a file beats mixing both styles.

## 3. Cache::touch()

Extend a cached item's TTL **without** re-fetching/re-computing the value:

```php
Cache::touch('report:'.$id, now()->addHour());
```

Use this for sliding-expiration patterns (keep-warm) instead of `get` + `put`.

## 4. Queue::route()

Centralize which connection/queue a job class uses, in one place (a service provider) rather than scattering `onQueue()`/`onConnection()` across dispatch sites:

```php
// in a service provider boot()
Queue::route(ProcessSumitReport::class)->onConnection('redis')->onQueue('reports');
```

Verify the fluent API shape in the reference; the intent is single-source-of-truth queue routing.

## 5. Laravel AI SDK (now stable, first-party)

Provider-agnostic interface; works with Anthropic and OpenAI out of the box, switching providers is a config change rather than a rewrite. It normalizes retries/errors and supports text, embeddings, and structured output. If a task involves calling an LLM from Laravel, prefer this SDK over hand-rolled Guzzle/Saloon clients. Confirm the package name and facade/config in the project (`config/ai.php` or similar) and the docs before wiring it.

## 6. JSON:API resources (first-party)

`Illuminate\Http\Resources\JsonApi` provides spec-compliant serialization: relationship inclusion, sparse fieldsets, links, compliant headers — handled for you. Use these instead of hand-building JSON:API envelopes. For plain (non-spec) APIs, normal `JsonResource` / `ResourceCollection` remain the default (see `references/architecture.md`).

## 7. JsonSchema

`Illuminate\JsonSchema` + `Illuminate\JsonSchema\Types` provide a fluent way to define JSON schemas (useful for structured LLM output and request/response contracts). New in 13.x — check the reference for the builder API.

## 8. Reverb database driver

Laravel Reverb (first-party WebSocket server) gained a **database driver**, so real-time features can run without a Redis dependency. For small deployments this removes Redis from the stack. For higher throughput, Redis is still the better backend. Choose based on scale.

## 9. Passkey authentication

First-party passkey (WebAuthn) support. Prefer it over rolling custom WebAuthn. Confirm the scaffolding/config in the starter kit or auth package in use.

## 10. Team-based multi-tenancy in starter kits

The official starter kits ship improved team-based multi-tenancy (better than the old Jetstream Teams; supports two team contexts in separate tabs via URL routing rather than session). If a project already uses Spatie Permission teams for tenancy, keep that — don't introduce a parallel system. See `references/architecture.md`.

## 11. Laravel Boost (for AI-agent workflows)

Laravel Boost is Laravel's tooling for AI agents (exposes a set of tools/MCP so an agent generates code that follows Laravel conventions, reads the app's actual schema/routes, etc.). If the user is running Claude Code on a Laravel repo and Boost is installed (`composer.json` / an MCP entry), prefer its tools to inspect the live application (routes, DB schema, config) rather than guessing. Mention it as an option if the user wants tighter agent grounding and it isn't set up yet.

## Upgrade notes (12 → 13)

- Get to **PHP 8.3+** everywhere first — that's the gating requirement.
- "Zero breaking changes" refers to upgrade *effort* for a well-maintained 12.x app; behavioral differences can still exist — test on staging.
- Check each major package (Livewire, Filament, Inertia, Spatie, Sanctum) for 13.x support before upgrading.
- Laravel 12 gets bug fixes until **Aug 2026** and security fixes until **Feb 2027**, so there's no emergency.
- For automated, reviewable upgrade PRs, Laravel Shift is the usual tool.

When asked about anything 13.x-specific that isn't covered here, fetch the API reference or prose docs rather than extrapolating.
