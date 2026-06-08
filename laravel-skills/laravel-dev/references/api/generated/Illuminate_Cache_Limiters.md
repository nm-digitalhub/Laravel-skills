# Illuminate\Cache\Limiters

Version: 13.14.0

## class ConcurrencyLimiter
`Illuminate\Cache\Limiters\ConcurrencyLimiter`

```php
function __construct($store, $name, $maxLocks, $releaseAfter);
function block($timeout, $callback = null, $sleep = 250);
```

## class ConcurrencyLimiterBuilder
`Illuminate\Cache\Limiters\ConcurrencyLimiterBuilder`

```php
function __construct($connection, $name);
function block($timeout);
function limit($maxLocks);
function releaseAfter($releaseAfter);
function sleep($sleep);
function then(callable $callback, ?callable $failure = null);
```

## class LimiterTimeoutException
`Illuminate\Cache\Limiters\LimiterTimeoutException` extends Exception implements Throwable, Stringable

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

