# Illuminate\Routing\Controllers

Version: 13.14.0

## interface HasMiddleware
`Illuminate\Routing\Controllers\HasMiddleware`

```php
static abstract function middleware();
```

## class Middleware
`Illuminate\Routing\Controllers\Middleware`

```php
function __construct(Closure|array|string $middleware, ?array $only = null, ?array $except = null);
function except(array|string $except);
function only(array|string $only);
```

