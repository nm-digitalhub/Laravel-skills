# Illuminate\Contracts\Cache

Version: 13.14.0

## interface CanFlushLocks
`Illuminate\Contracts\Cache\CanFlushLocks`

```php
abstract function flushLocks(): bool;
abstract function hasSeparateLockStore(): bool;
```

## interface Factory
`Illuminate\Contracts\Cache\Factory`

```php
abstract function store($name = null);
```

## interface Lock
`Illuminate\Contracts\Cache\Lock`

```php
abstract function block($seconds, $callback = null);
abstract function forceRelease();
abstract function get($callback = null);
abstract function owner();
abstract function release();
```

## interface LockProvider
`Illuminate\Contracts\Cache\LockProvider`

```php
abstract function lock($name, $seconds = 0, $owner = null);
abstract function restoreLock($name, $owner);
```

## class LockTimeoutException
`Illuminate\Contracts\Cache\LockTimeoutException` extends Exception implements Throwable, Stringable

```php
final function getCode();
final function getFile(): string;
final function getLine(): int;
final function getMessage(): string;
final function getPrevious(): ?Throwable;
final function getTrace(): array;
final function getTraceAsString(): string;
function __construct(string $message = '', int $code = 0, ?Throwable $previous = null);
function __toString(): string;
function __wakeup();
```

## interface Repository
`Illuminate\Contracts\Cache\Repository` implements Psr\SimpleCache\CacheInterface

```php
abstract function add($key, $value, $ttl = null);
abstract function clear(): bool;
abstract function decrement($key, $value = 1);
abstract function delete(string $key): bool;
abstract function deleteMultiple(iterable $keys): bool;
abstract function forever($key, $value);
abstract function forget($key);
abstract function get(string $key, mixed $default = null): mixed;
abstract function getMultiple(iterable $keys, mixed $default = null): iterable;
abstract function getStore();
abstract function has(string $key): bool;
abstract function increment($key, $value = 1);
abstract function pull($key, $default = null);
abstract function put($key, $value, $ttl = null);
abstract function remember($key, $ttl, Closure $callback);
abstract function rememberForever($key, Closure $callback);
abstract function sear($key, Closure $callback);
abstract function set(string $key, mixed $value, DateInterval|int|null $ttl = null): bool;
abstract function setMultiple(iterable $values, DateInterval|int|null $ttl = null): bool;
abstract function touch($key, $ttl);
```

## interface Store
`Illuminate\Contracts\Cache\Store`

```php
abstract function decrement($key, $value = 1);
abstract function flush();
abstract function forever($key, $value);
abstract function forget($key);
abstract function get($key);
abstract function getPrefix();
abstract function increment($key, $value = 1);
abstract function many(array $keys);
abstract function put($key, $value, $seconds);
abstract function putMany(array $values, $seconds);
abstract function touch($key, $seconds);
```

