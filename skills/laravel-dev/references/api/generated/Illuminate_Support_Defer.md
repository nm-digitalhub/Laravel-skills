# Illuminate\Support\Defer

Version: 13.14.0

## class DeferredCallback
`Illuminate\Support\Defer\DeferredCallback`

```php
function __construct($callback, ?string $name = null, bool $always = false);
function __invoke(): void;
function always(bool $always = true): static;
function name(string $name): static;
```

## class DeferredCallbackCollection
`Illuminate\Support\Defer\DeferredCallbackCollection` implements ArrayAccess, Countable

```php
function count(): int;
function first();
function forget(string $name): void;
function invoke(): void;
function invokeWhen(?Closure $when = null): void;
function offsetExists(mixed $offset): bool;
function offsetGet(mixed $offset): mixed;
function offsetSet(mixed $offset, mixed $value): void;
function offsetUnset(mixed $offset): void;
```

