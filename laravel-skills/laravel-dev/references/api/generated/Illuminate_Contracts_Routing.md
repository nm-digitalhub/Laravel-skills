# Illuminate\Contracts\Routing

Version: 13.14.0

## interface BindingRegistrar
`Illuminate\Contracts\Routing\BindingRegistrar`

```php
abstract function bind($key, $binder);
abstract function getBindingCallback($key);
```

## interface Registrar
`Illuminate\Contracts\Routing\Registrar`

```php
abstract function delete($uri, $action);
abstract function get($uri, $action);
abstract function group(array $attributes, $routes);
abstract function match($methods, $uri, $action);
abstract function options($uri, $action);
abstract function patch($uri, $action);
abstract function post($uri, $action);
abstract function put($uri, $action);
abstract function resource($name, $controller, array $options = []);
abstract function substituteBindings($route);
abstract function substituteImplicitBindings($route);
```

## interface ResponseFactory
`Illuminate\Contracts\Routing\ResponseFactory`

```php
abstract function download($file, $name = null, array $headers = [], $disposition = 'attachment');
abstract function eventStream(Closure $callback, array $headers = [], Illuminate\Http\StreamedEvent|string|null $endStreamWith = '</stream>');
abstract function file($file, array $headers = []);
abstract function json($data = [], $status = 200, array $headers = [], $options = 0);
abstract function jsonp($callback, $data = [], $status = 200, array $headers = [], $options = 0);
abstract function make($content = '', $status = 200, array $headers = []);
abstract function noContent($status = 204, array $headers = []);
abstract function redirectGuest($path, $status = 302, $headers = [], $secure = null);
abstract function redirectTo($path, $status = 302, $headers = [], $secure = null);
abstract function redirectToAction($action, $parameters = [], $status = 302, $headers = []);
abstract function redirectToIntended($default = '/', $status = 302, $headers = [], $secure = null);
abstract function redirectToRoute($route, $parameters = [], $status = 302, $headers = []);
abstract function stream($callback, $status = 200, array $headers = []);
abstract function streamDownload($callback, $name = null, array $headers = [], $disposition = 'attachment');
abstract function streamJson($data, $status = 200, $headers = [], $encodingOptions = 15);
abstract function view($view, $data = [], $status = 200, array $headers = []);
```

## interface UrlGenerator
`Illuminate\Contracts\Routing\UrlGenerator`

```php
abstract function action($action, $parameters = [], $absolute = true);
abstract function asset($path, $secure = null);
abstract function current();
abstract function getRootControllerNamespace();
abstract function previous($fallback = false);
abstract function query($path, $query = [], $extra = [], $secure = null);
abstract function route($name, $parameters = [], $absolute = true);
abstract function secure($path, $parameters = []);
abstract function setRootControllerNamespace($rootNamespace);
abstract function signedRoute($name, $parameters = [], $expiration = null, $absolute = true);
abstract function temporarySignedRoute($name, $expiration, $parameters = [], $absolute = true);
abstract function to($path, $extra = [], $secure = null);
```

## interface UrlRoutable
`Illuminate\Contracts\Routing\UrlRoutable`

```php
abstract function getRouteKey();
abstract function getRouteKeyName();
abstract function resolveChildRouteBinding($childType, $value, $field);
abstract function resolveRouteBinding($value, $field = null);
```

