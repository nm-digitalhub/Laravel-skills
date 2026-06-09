# Illuminate\Foundation\Http\Middleware

Version: 13.14.0

## class CheckForMaintenanceMode
`Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode` extends Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance

```php
function __construct(Illuminate\Contracts\Foundation\Application $app);
function getExcludedPaths();
function handle($request, Closure $next);
static function except($uris);
static function flushState();
```

## class ConvertEmptyStringsToNull
`Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull` extends Illuminate\Foundation\Http\Middleware\TransformsRequest

```php
function handle($request, Closure $next);
static function flushState();
static function skipWhen(Closure $callback);
```

## class HandlePrecognitiveRequests
`Illuminate\Foundation\Http\Middleware\HandlePrecognitiveRequests`

```php
function __construct(Illuminate\Container\Container $container);
function handle($request, $next);
```

## class InvokeDeferredCallbacks
`Illuminate\Foundation\Http\Middleware\InvokeDeferredCallbacks`

```php
function handle(Illuminate\Http\Request $request, Closure $next);
function terminate(Illuminate\Http\Request $request, Symfony\Component\HttpFoundation\Response $response);
```

## class PreventRequestForgery
`Illuminate\Foundation\Http\Middleware\PreventRequestForgery`

```php
function __construct(Illuminate\Contracts\Foundation\Application $app, Illuminate\Contracts\Encryption\Encrypter $encrypter);
function getExcludedPaths();
function handle($request, Closure $next);
function shouldAddXsrfTokenCookie();
static function allowSameSite($allow = true);
static function except($uris);
static function flushState();
static function serialized();
static function useOriginOnly($originOnly = true);
```

## class PreventRequestsDuringMaintenance
`Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance`

```php
function __construct(Illuminate\Contracts\Foundation\Application $app);
function getExcludedPaths();
function handle($request, Closure $next);
static function except($uris);
static function flushState();
```

## class TransformsRequest
`Illuminate\Foundation\Http\Middleware\TransformsRequest`

```php
function handle($request, Closure $next);
```

## class TrimStrings
`Illuminate\Foundation\Http\Middleware\TrimStrings` extends Illuminate\Foundation\Http\Middleware\TransformsRequest

```php
function handle($request, Closure $next);
static function except($attributes);
static function flushState();
static function skipWhen(Closure $callback);
```

## class ValidateCsrfToken
`Illuminate\Foundation\Http\Middleware\ValidateCsrfToken` extends Illuminate\Foundation\Http\Middleware\PreventRequestForgery

```php
function __construct(Illuminate\Contracts\Foundation\Application $app, Illuminate\Contracts\Encryption\Encrypter $encrypter);
function getExcludedPaths();
function handle($request, Closure $next);
function shouldAddXsrfTokenCookie();
static function allowSameSite($allow = true);
static function except($uris);
static function flushState();
static function serialized();
static function useOriginOnly($originOnly = true);
```

## class ValidatePostSize
`Illuminate\Foundation\Http\Middleware\ValidatePostSize` extends Illuminate\Http\Middleware\ValidatePostSize

```php
function handle($request, Closure $next);
```

## class VerifyCsrfToken
`Illuminate\Foundation\Http\Middleware\VerifyCsrfToken` extends Illuminate\Foundation\Http\Middleware\PreventRequestForgery

```php
function __construct(Illuminate\Contracts\Foundation\Application $app, Illuminate\Contracts\Encryption\Encrypter $encrypter);
function getExcludedPaths();
function handle($request, Closure $next);
function shouldAddXsrfTokenCookie();
static function allowSameSite($allow = true);
static function except($uris);
static function flushState();
static function serialized();
static function useOriginOnly($originOnly = true);
```

