# Illuminate\Routing\Contracts

Version: 13.14.0

## interface CallableDispatcher
`Illuminate\Routing\Contracts\CallableDispatcher`

```php
abstract function dispatch(Illuminate\Routing\Route $route, $callable);
```

## interface ControllerDispatcher
`Illuminate\Routing\Contracts\ControllerDispatcher`

```php
abstract function dispatch(Illuminate\Routing\Route $route, $controller, $method);
abstract function getMiddleware($controller, $method);
```

