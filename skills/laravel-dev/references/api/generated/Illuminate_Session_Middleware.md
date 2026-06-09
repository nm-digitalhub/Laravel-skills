# Illuminate\Session\Middleware

Version: 13.14.0

## class AuthenticateSession
`Illuminate\Session\Middleware\AuthenticateSession` implements Illuminate\Contracts\Session\Middleware\AuthenticatesSessions

```php
function __construct(Illuminate\Contracts\Auth\Factory $auth);
function handle($request, Closure $next);
static function redirectUsing(callable $redirectToCallback);
```

## class StartSession
`Illuminate\Session\Middleware\StartSession`

```php
function __construct(Illuminate\Session\SessionManager $manager, ?callable $cacheFactoryResolver = null);
function getSession(Illuminate\Http\Request $request);
function handle($request, Closure $next);
```

