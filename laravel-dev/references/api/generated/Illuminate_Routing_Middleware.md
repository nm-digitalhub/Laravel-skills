# Illuminate\Routing\Middleware

Version: 13.14.0

## class SubstituteBindings
`Illuminate\Routing\Middleware\SubstituteBindings`

```php
function __construct(Illuminate\Contracts\Routing\Registrar $router);
function handle($request, Closure $next);
```

## class ThrottleRequests
`Illuminate\Routing\Middleware\ThrottleRequests`

```php
function __construct(Illuminate\Cache\RateLimiter $limiter);
function handle($request, Closure $next, $maxAttempts = 60, $decayMinutes = 1, $prefix = '');
static function shouldHashKeys(bool $shouldHashKeys = true);
static function using($name);
static function with($maxAttempts = 60, $decayMinutes = 1, $prefix = '');
```

## class ThrottleRequestsWithRedis
`Illuminate\Routing\Middleware\ThrottleRequestsWithRedis` extends Illuminate\Routing\Middleware\ThrottleRequests

```php
function __construct(Illuminate\Cache\RateLimiter $limiter, Illuminate\Contracts\Redis\Factory $redis);
function handle($request, Closure $next, $maxAttempts = 60, $decayMinutes = 1, $prefix = '');
static function shouldHashKeys(bool $shouldHashKeys = true);
static function using($name);
static function with($maxAttempts = 60, $decayMinutes = 1, $prefix = '');
```

## class ValidateSignature
`Illuminate\Routing\Middleware\ValidateSignature`

```php
function handle($request, Closure $next, ...$args);
static function absolute($ignore = []);
static function except($parameters);
static function relative($ignore = []);
```

