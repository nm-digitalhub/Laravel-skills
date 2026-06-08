# Testing — Pest & PHPUnit

## First: detect the framework

Check `composer.json` and the `tests/` folder:
- `pestphp/pest` present and tests written as `it('...', function () {...})` → **Pest**. Run `./vendor/bin/pest` or `php artisan test`.
- Classes extending `TestCase` with `public function test_*()` → **PHPUnit**. Run `php artisan test`.

**Write new tests in the framework already in use.** Don't introduce Pest into a PHPUnit suite (or vice-versa) without being asked.

## Pest essentials (default for this stack)

```php
use function Pest\Laravel\{get, post, actingAs};

it('creates an order for an authenticated user', function () {
    $user = User::factory()->create();

    actingAs($user)
        ->post('/orders', ['amount' => 100])
        ->assertRedirect('/orders');

    expect($user->orders()->count())->toBe(1);
});
```

- Use `beforeEach()` for shared setup; `describe()` to group.
- `dataset()` / inline arrays for parameterized cases.
- Higher-order expectations (`expect($x)->toBe()->and(...)`).
- Pest plugins: `pest-plugin-laravel` (helpers above), `pest-plugin-livewire` if installed.

## What to test (priority order)

1. **Feature/HTTP tests** — the most valuable. Hit routes, assert status, redirects, DB state, JSON shape. These catch real regressions.
2. **Livewire component tests** — `Livewire::test(...)` for state, actions, events, validation, authorization.
3. **Unit tests** — pure logic in Actions/Services/value objects.
4. **Policy/authorization tests** — especially in multi-tenant apps: assert a user from team A **cannot** touch team B's data.

## Database

- Use `RefreshDatabase` (transactions) or `DatabaseTruncation` per the project's base `TestCase`. Don't switch the strategy mid-suite.
- Build data via **factories + states**, not hand-rolled arrays.
- Use a fast test DB (SQLite in-memory or a dedicated MySQL test schema) — match `phpunit.xml`/`.env.testing`.

## Fakes — never hit the outside world

- `Mail::fake()`, `Notification::fake()`, `Queue::fake()`, `Bus::fake()`, `Event::fake()`, `Storage::fake()`, `Http::fake()` for the Laravel HTTP client.
- For **Saloon** integrations, use Saloon's `MockClient`.
- After faking, assert the interaction (`Queue::assertPushed(...)`, `Mail::assertSent(...)`, `Http::assertSent(...)`).
- Freeze time with `travelTo()` / `Carbon::setTestNow()` for time-dependent logic.

## Multi-tenant test discipline

- Create at least two teams/tenants in tests that touch tenant data and assert isolation in both directions.
- Set the team/permission context the same way the app does (middleware-equivalent setup in `beforeEach`).

## Assertions worth using

- `assertDatabaseHas` / `assertDatabaseMissing` / `assertDatabaseCount`.
- `assertModelExists` / `assertModelMissing`.
- JSON: `assertJson`, `assertJsonStructure`, fluent `assertJson(fn (AssertableJson $j) => ...)`.
- Authorization: `assertForbidden`, `assertUnauthorized`.
- Validation: `assertInvalid(['field'])` / Livewire `assertHasErrors`.

## Running & gating

- Run the **specific** test/file while iterating (`php artisan test --filter=OrderTest`), full suite before declaring done.
- Also run the project's static analysis (Larastan/PHPStan) and formatter (`./vendor/bin/pint`) if present.
- **Never report a test as passing without actually running it.** Paste the relevant pass/fail output.

When unsure about a testing helper's name/signature, check `Illuminate\Foundation\Testing` and `Illuminate\Testing` in the API reference (or the Pest docs), rather than guessing.
