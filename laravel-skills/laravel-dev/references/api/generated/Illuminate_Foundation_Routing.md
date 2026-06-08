# Illuminate\Foundation\Routing

Version: 13.14.0

## class PrecognitionCallableDispatcher
`Illuminate\Foundation\Routing\PrecognitionCallableDispatcher` extends Illuminate\Routing\CallableDispatcher implements Illuminate\Routing\Contracts\CallableDispatcher

```php
function __construct(Illuminate\Container\Container $container);
function dispatch(Illuminate\Routing\Route $route, $callable);
function resolveMethodDependencies(array $parameters, ReflectionFunctionAbstract $reflector);
```

## class PrecognitionControllerDispatcher
`Illuminate\Foundation\Routing\PrecognitionControllerDispatcher` extends Illuminate\Routing\ControllerDispatcher implements Illuminate\Routing\Contracts\ControllerDispatcher

```php
function __construct(Illuminate\Container\Container $container);
function dispatch(Illuminate\Routing\Route $route, $controller, $method);
function getMiddleware($controller, $method);
function resolveMethodDependencies(array $parameters, ReflectionFunctionAbstract $reflector);
static function methodExcludedByOptions($method, array $options);
```

