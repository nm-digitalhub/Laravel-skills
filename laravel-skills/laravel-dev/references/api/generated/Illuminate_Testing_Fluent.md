# Illuminate\Testing\Fluent

Version: 13.14.0

## class AssertableJson
`Illuminate\Testing\Fluent\AssertableJson` implements Illuminate\Contracts\Support\Arrayable

```php
function __call($method, $parameters);
function count($key, ?int $length = null): static;
function countBetween(string|int $min, string|int $max): static;
function dd(...$args);
function dump(?string $prop = null): static;
function each(Closure $callback): static;
function etc(): static;
function first(Closure $callback): static;
function has($key, $length = null, ?Closure $callback = null): static;
function hasAll($key): static;
function hasAny($key): static;
function interacted(): void;
function missing(string $key): static;
function missingAll($key): static;
function tap($callback = null);
function toArray();
function unless($value = null, ?callable $callback = null, ?callable $default = null);
function when($value = null, ?callable $callback = null, ?callable $default = null);
function where(string $key, $expected): static;
function whereAll(array $bindings): static;
function whereAllType(array $bindings): static;
function whereContains(string $key, $expected);
function whereNot(string $key, $expected): static;
function whereNotNull(string $key): static;
function whereNull(string $key): static;
function whereType(string $key, $expected): static;
static function __callStatic($method, $parameters);
static function flushMacros();
static function fromArray(array $data): static;
static function fromAssertableJsonString(Illuminate\Testing\AssertableJsonString $json): static;
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
```

