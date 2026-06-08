# Illuminate\Redis\Limiters

Version: 13.14.0

## class ConcurrencyLimiter
`Illuminate\Redis\Limiters\ConcurrencyLimiter`

```php
function __construct($redis, $name, $maxLocks, $releaseAfter);
function block($timeout, $callback = null, $sleep = 250);
```

## class ConcurrencyLimiterBuilder
`Illuminate\Redis\Limiters\ConcurrencyLimiterBuilder`

```php
function __construct($connection, $name);
function block($timeout);
function limit($maxLocks);
function releaseAfter($releaseAfter);
function sleep($sleep);
function then(callable $callback, ?callable $failure = null);
```

## class DurationLimiter
`Illuminate\Redis\Limiters\DurationLimiter`

```php
function __construct($redis, $name, $maxLocks, $decay);
function acquire();
function block($timeout, $callback = null, $sleep = 750);
function clear();
function tooManyAttempts();
```

## class DurationLimiterBuilder
`Illuminate\Redis\Limiters\DurationLimiterBuilder`

```php
function __construct($connection, $name);
function allow($maxLocks);
function block($timeout);
function every($decay);
function sleep($sleep);
function then(callable $callback, ?callable $failure = null);
```

