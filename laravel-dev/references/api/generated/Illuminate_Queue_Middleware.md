# Illuminate\Queue\Middleware

Version: 13.14.0

## class FailOnException
`Illuminate\Queue\Middleware\FailOnException`

```php
function __construct($callback);
function handle($job, callable $next);
```

## class RateLimited
`Illuminate\Queue\Middleware\RateLimited`

```php
function __construct($limiterName);
function __sleep();
function __wakeup();
function dontRelease();
function handle($job, $next);
function releaseAfter($releaseAfter);
```

## class RateLimitedWithRedis
`Illuminate\Queue\Middleware\RateLimitedWithRedis` extends Illuminate\Queue\Middleware\RateLimited

```php
function __construct($limiterName, ?string $connection = null);
function __sleep();
function __wakeup();
function connection(string $name);
function dontRelease();
function handle($job, $next);
function releaseAfter($releaseAfter);
```

## class Skip
`Illuminate\Queue\Middleware\Skip`

```php
function __construct(bool $skip = false);
function handle(mixed $job, callable $next): mixed;
static function unless(Closure|bool $condition): static;
static function when(Closure|bool $condition): static;
```

## class SkipIfBatchCancelled
`Illuminate\Queue\Middleware\SkipIfBatchCancelled`

```php
function handle($job, $next);
```

## class ThrottlesExceptions
`Illuminate\Queue\Middleware\ThrottlesExceptions`

```php
function __construct($maxAttempts = 10, $decaySeconds = 600);
function backoff($backoff);
function by($key);
function byJob();
function deleteWhen(callable|string $callback);
function failWhen(callable|string $callback);
function handle($job, $next);
function report(?callable $callback = null);
function when(callable $callback);
function withPrefix(string $prefix);
```

## class ThrottlesExceptionsWithRedis
`Illuminate\Queue\Middleware\ThrottlesExceptionsWithRedis` extends Illuminate\Queue\Middleware\ThrottlesExceptions

```php
function __construct($maxAttempts = 10, $decaySeconds = 600);
function backoff($backoff);
function by($key);
function byJob();
function connection(string $name);
function deleteWhen(callable|string $callback);
function failWhen(callable|string $callback);
function handle($job, $next);
function report(?callable $callback = null);
function when(callable $callback);
function withPrefix(string $prefix);
```

## class WithoutOverlapping
`Illuminate\Queue\Middleware\WithoutOverlapping`

```php
function __construct($key = '', $releaseAfter = 0, $expiresAfter = 0);
function dontRelease();
function expireAfter($expiresAfter);
function getLockKey($job);
function handle($job, $next);
function releaseAfter($releaseAfter);
function shared();
function withPrefix(string $prefix);
```

