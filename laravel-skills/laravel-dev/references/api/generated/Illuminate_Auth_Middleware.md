# Illuminate\Auth\Middleware

Version: 13.14.0

## class Authenticate
`Illuminate\Auth\Middleware\Authenticate` implements Illuminate\Contracts\Auth\Middleware\AuthenticatesRequests

```php
function __construct(Illuminate\Contracts\Auth\Factory $auth);
function handle($request, Closure $next, ...$guards);
static function redirectUsing(callable $redirectToCallback);
static function using($guard, ...$others);
```

## class AuthenticateWithBasicAuth
`Illuminate\Auth\Middleware\AuthenticateWithBasicAuth`

```php
function __construct(Illuminate\Contracts\Auth\Factory $auth);
function handle($request, Closure $next, $guard = null, $field = null);
static function using($guard = null, $field = null);
```

## class Authorize
`Illuminate\Auth\Middleware\Authorize`

```php
function __construct(Illuminate\Contracts\Auth\Access\Gate $gate);
function handle($request, Closure $next, $ability, ...$models);
static function using($ability, ...$models);
```

## class EnsureEmailIsVerified
`Illuminate\Auth\Middleware\EnsureEmailIsVerified`

```php
function handle($request, Closure $next, $redirectToRoute = null);
static function redirectTo($route);
```

## class RedirectIfAuthenticated
`Illuminate\Auth\Middleware\RedirectIfAuthenticated`

```php
function handle(Illuminate\Http\Request $request, Closure $next, string ...$guards): Symfony\Component\HttpFoundation\Response;
static function redirectUsing(callable $redirectToCallback);
static function using($guard, ...$others);
```

## class RequirePassword
`Illuminate\Auth\Middleware\RequirePassword`

```php
function __construct(Illuminate\Contracts\Routing\ResponseFactory $responseFactory, Illuminate\Contracts\Routing\UrlGenerator $urlGenerator, $passwordTimeout = null);
function handle($request, Closure $next, $redirectToRoute = null, $passwordTimeoutSeconds = null);
static function using($redirectToRoute = null, $passwordTimeoutSeconds = null);
```

