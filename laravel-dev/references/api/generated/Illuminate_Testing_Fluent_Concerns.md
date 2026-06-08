# Illuminate\Testing\Fluent\Concerns

Version: 13.14.0

## trait Debugging
`Illuminate\Testing\Fluent\Concerns\Debugging`

```php
function dd(...$args);
function dump(?string $prop = null): static;
```

## trait Has
`Illuminate\Testing\Fluent\Concerns\Has`

```php
abstract function etc();
abstract function first(Closure $callback);
function count($key, ?int $length = null): static;
function countBetween(string|int $min, string|int $max): static;
function has($key, $length = null, ?Closure $callback = null): static;
function hasAll($key): static;
function hasAny($key): static;
function missing(string $key): static;
function missingAll($key): static;
```

## trait Interaction
`Illuminate\Testing\Fluent\Concerns\Interaction`

```php
function etc(): static;
function interacted(): void;
```

## trait Matching
`Illuminate\Testing\Fluent\Concerns\Matching`

```php
abstract function has(string $key, $value = null, ?Closure $scope = null);
function where(string $key, $expected): static;
function whereAll(array $bindings): static;
function whereAllType(array $bindings): static;
function whereContains(string $key, $expected);
function whereNot(string $key, $expected): static;
function whereNotNull(string $key): static;
function whereNull(string $key): static;
function whereType(string $key, $expected): static;
```

