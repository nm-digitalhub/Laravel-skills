# Illuminate\Http\Middleware

Version: 13.14.0

## class AddLinkHeadersForPreloadedAssets
`Illuminate\Http\Middleware\AddLinkHeadersForPreloadedAssets`

```php
function handle($request, $next, $limit = null);
static function using($limit);
```

## class CheckResponseForModifications
`Illuminate\Http\Middleware\CheckResponseForModifications`

```php
function handle($request, Closure $next);
```

## class FrameGuard
`Illuminate\Http\Middleware\FrameGuard`

```php
function handle($request, Closure $next);
```

## class HandleCors
`Illuminate\Http\Middleware\HandleCors`

```php
function __construct(Illuminate\Contracts\Container\Container $container, Fruitcake\Cors\CorsService $cors);
function handle($request, Closure $next);
static function flushState();
static function skipWhen(Closure $callback);
```

## class PrefersJsonResponses
`Illuminate\Http\Middleware\PrefersJsonResponses`

```php
function handle($request, Closure $next);
```

## class SetCacheHeaders
`Illuminate\Http\Middleware\SetCacheHeaders`

```php
function handle($request, Closure $next, $options = []);
static function using($options);
```

## class TrustHosts
`Illuminate\Http\Middleware\TrustHosts`

```php
function __construct(Illuminate\Contracts\Foundation\Application $app);
function handle(Illuminate\Http\Request $request, $next);
function hosts();
static function at(callable|array $hosts, bool $subdomains = true);
static function flushState();
```

## class TrustProxies
`Illuminate\Http\Middleware\TrustProxies`

```php
function handle(Illuminate\Http\Request $request, Closure $next);
static function at(array|string $proxies);
static function flushState();
static function withHeaders(int $headers);
```

## class ValidatePathEncoding
`Illuminate\Http\Middleware\ValidatePathEncoding`

```php
function handle(Illuminate\Http\Request $request, Closure $next);
```

## class ValidatePostSize
`Illuminate\Http\Middleware\ValidatePostSize`

```php
function handle($request, Closure $next);
```

