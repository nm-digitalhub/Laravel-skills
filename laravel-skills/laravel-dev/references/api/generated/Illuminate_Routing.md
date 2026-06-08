# Illuminate\Routing

Version: 13.14.0

## class AbstractRouteCollection
`Illuminate\Routing\AbstractRouteCollection` implements Countable, IteratorAggregate, Illuminate\Routing\RouteCollectionInterface, Traversable

```php
abstract function add(Illuminate\Routing\Route $route);
abstract function get($method = null);
abstract function getByAction($action);
abstract function getByName($name);
abstract function getRoutes();
abstract function getRoutesByMethod();
abstract function getRoutesByName();
abstract function hasNamedRoute($name);
abstract function match(Illuminate\Http\Request $request);
abstract function refreshActionLookups();
abstract function refreshNameLookups();
function compile();
function count(): int;
function dumper();
function getIterator(): Traversable;
function toSymfonyRouteCollection();
```

## class CallableDispatcher
`Illuminate\Routing\CallableDispatcher` implements Illuminate\Routing\Contracts\CallableDispatcher

```php
function __construct(Illuminate\Container\Container $container);
function dispatch(Illuminate\Routing\Route $route, $callable);
function resolveMethodDependencies(array $parameters, ReflectionFunctionAbstract $reflector);
```

## class CompiledRouteCollection
`Illuminate\Routing\CompiledRouteCollection` extends Illuminate\Routing\AbstractRouteCollection implements Traversable, Illuminate\Routing\RouteCollectionInterface, IteratorAggregate, Countable

```php
function __construct(array $compiled, array $attributes);
function add(Illuminate\Routing\Route $route);
function compile();
function count(): int;
function dumper();
function get($method = null);
function getByAction($action);
function getByName($name);
function getIterator(): Traversable;
function getRoutes();
function getRoutesByMethod();
function getRoutesByName();
function hasNamedRoute($name);
function match(Illuminate\Http\Request $request);
function refreshActionLookups();
function refreshNameLookups();
function setContainer(Illuminate\Container\Container $container);
function setRouter(Illuminate\Routing\Router $router);
function toSymfonyRouteCollection();
```

## class Controller
`Illuminate\Routing\Controller`

```php
function __call($method, $parameters);
function callAction($method, $parameters);
function getMiddleware();
function middleware($middleware, array $options = []);
```

## class ControllerDispatcher
`Illuminate\Routing\ControllerDispatcher` implements Illuminate\Routing\Contracts\ControllerDispatcher

```php
function __construct(Illuminate\Container\Container $container);
function dispatch(Illuminate\Routing\Route $route, $controller, $method);
function getMiddleware($controller, $method);
function resolveMethodDependencies(array $parameters, ReflectionFunctionAbstract $reflector);
static function methodExcludedByOptions($method, array $options);
```

## class ControllerMiddlewareOptions
`Illuminate\Routing\ControllerMiddlewareOptions`

```php
function __construct(array &$options);
function except($methods);
function only($methods);
```

## trait CreatesRegularExpressionRouteConstraints
`Illuminate\Routing\CreatesRegularExpressionRouteConstraints`

```php
function whereAlpha($parameters);
function whereAlphaNumeric($parameters);
function whereIn($parameters, array $values);
function whereNumber($parameters);
function whereUlid($parameters);
function whereUuid($parameters);
```

## trait FiltersControllerMiddleware
`Illuminate\Routing\FiltersControllerMiddleware`

```php
static function methodExcludedByOptions($method, array $options);
```

## class ImplicitRouteBinding
`Illuminate\Routing\ImplicitRouteBinding`

```php
static function resolveForRoute($container, $route);
```

## class MiddlewareNameResolver
`Illuminate\Routing\MiddlewareNameResolver`

```php
static function resolve($name, $map, $middlewareGroups);
```

## class PendingResourceRegistration
`Illuminate\Routing\PendingResourceRegistration`

```php
function __call($method, $parameters);
function __construct(Illuminate\Routing\ResourceRegistrar $registrar, $name, $controller, array $options);
function __destruct();
function except($methods);
function middleware($middleware);
function middlewareFor($methods, $middleware);
function missing($callback);
function name($method, $name);
function names($names);
function only($methods);
function parameter($previous, $new);
function parameters($parameters);
function register();
function scoped(array $fields = []);
function shallow($shallow = true);
function where($wheres);
function whereAlpha($parameters);
function whereAlphaNumeric($parameters);
function whereIn($parameters, array $values);
function whereNumber($parameters);
function whereUlid($parameters);
function whereUuid($parameters);
function withTrashed(array $methods = []);
function withoutMiddleware($middleware);
function withoutMiddlewareFor($methods, $middleware);
static function __callStatic($method, $parameters);
static function flushMacros();
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
```

## class PendingSingletonResourceRegistration
`Illuminate\Routing\PendingSingletonResourceRegistration`

```php
function __call($method, $parameters);
function __construct(Illuminate\Routing\ResourceRegistrar $registrar, $name, $controller, array $options);
function __destruct();
function creatable();
function destroyable();
function except($methods);
function middleware($middleware);
function middlewareFor($methods, $middleware);
function name($method, $name);
function names($names);
function only($methods);
function parameter($previous, $new);
function parameters($parameters);
function register();
function where($wheres);
function whereAlpha($parameters);
function whereAlphaNumeric($parameters);
function whereIn($parameters, array $values);
function whereNumber($parameters);
function whereUlid($parameters);
function whereUuid($parameters);
function withoutMiddleware($middleware);
function withoutMiddlewareFor($methods, $middleware);
static function __callStatic($method, $parameters);
static function flushMacros();
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
```

## class Pipeline
`Illuminate\Routing\Pipeline` extends Illuminate\Pipeline\Pipeline implements Illuminate\Contracts\Pipeline\Pipeline

```php
function __call($method, $parameters);
function __construct(?Illuminate\Contracts\Container\Container $container = null);
function finally(Closure $callback);
function pipe($pipes);
function send($passable);
function setContainer(Illuminate\Contracts\Container\Container $container);
function then(Closure $destination);
function thenReturn();
function through($pipes);
function unless($value = null, ?callable $callback = null, ?callable $default = null);
function via($method);
function when($value = null, ?callable $callback = null, ?callable $default = null);
function withinTransaction($withinTransaction = null);
static function __callStatic($method, $parameters);
static function flushMacros();
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
```

## class RedirectController
`Illuminate\Routing\RedirectController` extends Illuminate\Routing\Controller

```php
function __call($method, $parameters);
function __invoke(Illuminate\Http\Request $request, Illuminate\Routing\UrlGenerator $url);
function callAction($method, $parameters);
function getMiddleware();
function middleware($middleware, array $options = []);
```

## class Redirector
`Illuminate\Routing\Redirector`

```php
function __call($method, $parameters);
function __construct(Illuminate\Routing\UrlGenerator $generator);
function action($action, $parameters = [], $status = 302, $headers = []);
function away($path, $status = 302, $headers = []);
function back($status = 302, $headers = [], $fallback = false);
function getIntendedUrl();
function getUrlGenerator();
function guest($path, $status = 302, $headers = [], $secure = null);
function intended($default = '/', $status = 302, $headers = [], $secure = null);
function refresh($status = 302, $headers = []);
function route($route, $parameters = [], $status = 302, $headers = []);
function secure($path, $status = 302, $headers = []);
function setIntendedUrl($url);
function setSession(Illuminate\Session\Store $session);
function signedRoute($route, $parameters = [], $expiration = null, $status = 302, $headers = []);
function temporarySignedRoute($route, $expiration, $parameters = [], $status = 302, $headers = []);
function to($path, $status = 302, $headers = [], $secure = null);
static function __callStatic($method, $parameters);
static function flushMacros();
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
```

## trait ResolvesRouteDependencies
`Illuminate\Routing\ResolvesRouteDependencies`

```php
function resolveMethodDependencies(array $parameters, ReflectionFunctionAbstract $reflector);
```

## class ResourceRegistrar
`Illuminate\Routing\ResourceRegistrar`

```php
function __construct(Illuminate\Routing\Router $router);
function getResourceUri($resource);
function getResourceWildcard($value);
function register($name, $controller, array $options = []);
function singleton($name, $controller, array $options = []);
static function getParameters();
static function setParameters(array $parameters = []);
static function singularParameters($singular = true);
static function verbs(array $verbs = []);
```

## class ResponseFactory
`Illuminate\Routing\ResponseFactory` implements Illuminate\Contracts\Routing\ResponseFactory

```php
function __call($method, $parameters);
function __construct(Illuminate\Contracts\View\Factory $view, Illuminate\Routing\Redirector $redirector);
function download($file, $name = null, array $headers = [], $disposition = 'attachment');
function eventStream(Closure $callback, array $headers = [], Illuminate\Http\StreamedEvent|string|null $endStreamWith = '</stream>');
function file($file, array $headers = []);
function json($data = [], $status = 200, array $headers = [], $options = 0);
function jsonp($callback, $data = [], $status = 200, array $headers = [], $options = 0);
function make($content = '', $status = 200, array $headers = []);
function noContent($status = 204, array $headers = []);
function redirectGuest($path, $status = 302, $headers = [], $secure = null);
function redirectTo($path, $status = 302, $headers = [], $secure = null);
function redirectToAction($action, $parameters = [], $status = 302, $headers = []);
function redirectToIntended($default = '/', $status = 302, $headers = [], $secure = null);
function redirectToRoute($route, $parameters = [], $status = 302, $headers = []);
function stream($callback, $status = 200, array $headers = []);
function streamDownload($callback, $name = null, array $headers = [], $disposition = 'attachment');
function streamJson($data, $status = 200, $headers = [], $encodingOptions = 15);
function view($view, $data = [], $status = 200, array $headers = []);
static function __callStatic($method, $parameters);
static function flushMacros();
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
```

## class Route
`Illuminate\Routing\Route`

```php
function __call($method, $parameters);
function __construct($methods, $uri, $action);
function __get($key);
function allowsTrashedBindings();
function bind(Illuminate\Http\Request $request);
function bindingFieldFor($parameter);
function bindingFields();
function block($lockSeconds = 10, $waitSeconds = 10);
function can($ability, $models = []);
function controllerDispatcher();
function controllerMiddleware();
function defaults($key, $value);
function domain($domain = null);
function enforcesScopedBindings();
function excludedMiddleware();
function fallback();
function flushController();
function forgetParameter($name);
function gatherMiddleware();
function getAction($key = null);
function getActionMethod();
function getActionName();
function getCompiled();
function getController();
function getControllerClass();
function getDomain();
function getMissing();
function getName();
function getOptionalParameterNames();
function getPrefix();
function hasParameter($name);
function hasParameters();
function httpOnly();
function httpsOnly();
function locksFor();
function matches(Illuminate\Http\Request $request, $includingMethod = true);
function methods();
function middleware($middleware = null);
function missing($missing);
function name($name);
function named(...$patterns);
function originalParameter($name, $default = null);
function originalParameters();
function parameter($name, $default = null);
function parameterNames();
function parameters();
function parametersWithoutNulls();
function parentOfParameter($parameter);
function prefix($prefix);
function prepareForSerialization();
function preventsScopedBindings();
function resolveMethodDependencies(array $parameters, ReflectionFunctionAbstract $reflector);
function run();
function scopeBindings();
function secure();
function setAction(array $action);
function setBindingFields(array $bindingFields);
function setContainer(Illuminate\Container\Container $container);
function setDefaults(array $defaults);
function setFallback($isFallback);
function setParameter($name, $value);
function setRouter(Illuminate\Routing\Router $router);
function setUri($uri);
function setWheres(array $wheres);
function signatureParameters($conditions = []);
function toSymfonyRoute();
function unless($value = null, ?callable $callback = null, ?callable $default = null);
function uri();
function uses($action);
function waitsFor();
function when($value = null, ?callable $callback = null, ?callable $default = null);
function where($name, $expression = null);
function whereAlpha($parameters);
function whereAlphaNumeric($parameters);
function whereIn($parameters, array $values);
function whereNumber($parameters);
function whereUlid($parameters);
function whereUuid($parameters);
function withTrashed($withTrashed = true);
function withoutBlocking();
function withoutMiddleware($middleware);
function withoutScopedBindings();
static function __callStatic($method, $parameters);
static function flushMacros();
static function getValidators();
static function hasMacro($name);
static function macro($name, $macro);
static function methodExcludedByOptions($method, array $options);
static function mixin($mixin, $replace = true);
```

## class RouteAction
`Illuminate\Routing\RouteAction`

```php
static function containsSerializedClosure(array $action);
static function parse($uri, $action);
```

## class RouteBinding
`Illuminate\Routing\RouteBinding`

```php
static function forCallback($container, $binder);
static function forModel($container, $class, $callback = null);
```

## class RouteCollection
`Illuminate\Routing\RouteCollection` extends Illuminate\Routing\AbstractRouteCollection implements Traversable, Illuminate\Routing\RouteCollectionInterface, IteratorAggregate, Countable

```php
function add(Illuminate\Routing\Route $route);
function compile();
function count(): int;
function dumper();
function get($method = null);
function getByAction($action);
function getByName($name);
function getIterator(): Traversable;
function getRoutes();
function getRoutesByMethod();
function getRoutesByName();
function hasNamedRoute($name);
function match(Illuminate\Http\Request $request);
function refreshActionLookups();
function refreshNameLookups();
function toCompiledRouteCollection(Illuminate\Routing\Router $router, Illuminate\Container\Container $container);
function toSymfonyRouteCollection();
```

## interface RouteCollectionInterface
`Illuminate\Routing\RouteCollectionInterface`

```php
abstract function add(Illuminate\Routing\Route $route);
abstract function get($method = null);
abstract function getByAction($action);
abstract function getByName($name);
abstract function getRoutes();
abstract function getRoutesByMethod();
abstract function getRoutesByName();
abstract function hasNamedRoute($name);
abstract function match(Illuminate\Http\Request $request);
abstract function refreshActionLookups();
abstract function refreshNameLookups();
```

## trait RouteDependencyResolverTrait
`Illuminate\Routing\RouteDependencyResolverTrait`

```php
function resolveMethodDependencies(array $parameters, ReflectionFunctionAbstract $reflector);
```

## class RouteFileRegistrar
`Illuminate\Routing\RouteFileRegistrar`

```php
function __construct(Illuminate\Routing\Router $router);
function register($routes);
```

## class RouteGroup
`Illuminate\Routing\RouteGroup`

```php
static function merge($new, $old, $prependExistingPrefix = true);
```

## class RouteParameterBinder
`Illuminate\Routing\RouteParameterBinder`

```php
function __construct($route);
function parameters($request);
```

## class RouteRegistrar
`Illuminate\Routing\RouteRegistrar`

```php
function __call($method, $parameters);
function __construct(Illuminate\Routing\Router $router);
function apiResource($name, $controller, array $options = []);
function apiSingleton($name, $controller, array $options = []);
function attribute($key, $value);
function group($callback);
function macroCall($method, $parameters);
function match($methods, $uri, $action = null);
function resource($name, $controller, array $options = []);
function singleton($name, $controller, array $options = []);
function whereAlpha($parameters);
function whereAlphaNumeric($parameters);
function whereIn($parameters, array $values);
function whereNumber($parameters);
function whereUlid($parameters);
function whereUuid($parameters);
static function __callStatic($method, $parameters);
static function flushMacros();
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
```

## class RouteSignatureParameters
`Illuminate\Routing\RouteSignatureParameters`

```php
static function fromAction(array $action, $conditions = []);
```

## class RouteUri
`Illuminate\Routing\RouteUri`

```php
function __construct(string $uri, array $bindingFields = []);
static function parse($uri);
```

## class RouteUrlGenerator
`Illuminate\Routing\RouteUrlGenerator`

```php
function __construct($url, $request);
function defaults(array $defaults);
function to($route, $parameters = [], $absolute = false);
```

## class Router
`Illuminate\Routing\Router` implements Illuminate\Contracts\Routing\BindingRegistrar, Illuminate\Contracts\Routing\Registrar

```php
function __call($method, $parameters);
function __construct(Illuminate\Contracts\Events\Dispatcher $events, ?Illuminate\Container\Container $container = null);
function addRoute($methods, $uri, $action);
function aliasMiddleware($name, $class);
function any($uri, $action = null);
function apiResource($name, $controller, array $options = []);
function apiResources(array $resources, array $options = []);
function apiSingleton($name, $controller, array $options = []);
function apiSingletons(array $singletons, array $options = []);
function bind($key, $binder);
function current();
function currentRouteAction();
function currentRouteName();
function currentRouteNamed(...$patterns);
function currentRouteUses($action);
function delete($uri, $action = null);
function dispatch(Illuminate\Http\Request $request);
function dispatchToRoute(Illuminate\Http\Request $request);
function fallback($action);
function flushMiddlewareGroups();
function gatherRouteMiddleware(Illuminate\Routing\Route $route);
function get($uri, $action = null);
function getBindingCallback($key);
function getCurrentRequest();
function getCurrentRoute();
function getGroupStack();
function getLastGroupPrefix();
function getMiddleware();
function getMiddlewareGroups();
function getPatterns();
function getRoutes();
function group(array $attributes, $routes);
function has($name);
function hasGroupStack();
function hasMiddlewareGroup($name);
function input($key, $default = null);
function is(...$patterns);
function macroCall($method, $parameters);
function match($methods, $uri, $action = null);
function matched($callback);
function mergeWithLastGroup($new, $prependExistingPrefix = true);
function middlewareGroup($name, array $middleware);
function model($key, $class, ?Closure $callback = null);
function newRoute($methods, $uri, $action);
function options($uri, $action = null);
function patch($uri, $action = null);
function pattern($key, $pattern);
function patterns($patterns);
function permanentRedirect($uri, $destination);
function post($uri, $action = null);
function prepareResponse($request, $response);
function prependMiddlewareToGroup($group, $middleware);
function pushMiddlewareToGroup($group, $middleware);
function put($uri, $action = null);
function redirect($uri, $destination, $status = 302);
function removeMiddlewareFromGroup($group, $middleware);
function resolveMiddleware(array $middleware, array $excluded = []);
function resource($name, $controller, array $options = []);
function resourceParameters(array $parameters = []);
function resourceVerbs(array $verbs = []);
function resources(array $resources, array $options = []);
function respondWithRoute($name);
function setCompiledRoutes(array $routes);
function setContainer(Illuminate\Container\Container $container);
function setRoutes(Illuminate\Routing\RouteCollection $routes);
function singleton($name, $controller, array $options = []);
function singletons(array $singletons, array $options = []);
function singularResourceParameters($singular = true);
function softDeletableResources(array $resources, array $options = []);
function substituteBindings($route);
function substituteImplicitBindings($route);
function substituteImplicitBindingsUsing($callback);
function tap($callback = null);
function uses(...$patterns);
function view($uri, $view, $data = [], $status = 200, array $headers = []);
static function __callStatic($method, $parameters);
static function flushMacros();
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
static function toResponse($request, $response);
static function uniqueMiddleware(array $middleware);
```

## class RoutingServiceProvider
`Illuminate\Routing\RoutingServiceProvider` extends Illuminate\Support\ServiceProvider

```php
function __construct($app);
function booted(Closure $callback);
function booting(Closure $callback);
function callBootedCallbacks();
function callBootingCallbacks();
function commands($commands);
function isDeferred();
function provides();
function register();
function when();
static function addProviderToBootstrapFile(string $provider, ?string $path = null);
static function defaultProviders();
static function pathsToPublish($provider = null, $group = null);
static function publishableGroups();
static function publishableMigrationPaths();
static function publishableProviders();
static function removeProviderFromBootstrapFile(array|string $providersToRemove, ?string $path = null, bool $strict = false);
```

## class SortedMiddleware
`Illuminate\Routing\SortedMiddleware` extends Illuminate\Support\Collection implements Illuminate\Contracts\Support\Arrayable, Countable, IteratorAggregate, Illuminate\Contracts\Support\Jsonable, JsonSerializable, Stringable, Traversable, Illuminate\Support\Enumerable, Illuminate\Contracts\Support\CanBeEscapedWhenCastToString, ArrayAccess

```php
function __call($method, $parameters);
function __construct(array $priorityMap, $middlewares);
function __get($key);
function __toString(): string;
function add($item);
function after($value, $strict = false);
function all();
function average($callback = null);
function avg($callback = null);
function before($value, $strict = false);
function chunk($size, $preserveKeys = true);
function chunkWhile(callable $callback);
function collapse();
function collapseWithKeys();
function collect();
function combine($values);
function concat($source);
function contains($key, $operator = null, $value = null);
function containsManyItems(?callable $callback = null): bool;
function containsOneItem(?callable $callback = null): bool;
function containsStrict($key, $value = null);
function count(): int;
function countBy($countBy = null);
function crossJoin(...$lists);
function dd(...$args);
function diff($items);
function diffAssoc($items);
function diffAssocUsing($items, callable $callback);
function diffKeys($items);
function diffKeysUsing($items, callable $callback);
function diffUsing($items, callable $callback);
function doesntContain($key, $operator = null, $value = null);
function doesntContainStrict($key, $operator = null, $value = null);
function dot($depth = INF);
function dump(...$args);
function duplicates($callback = null, $strict = false);
function duplicatesStrict($callback = null);
function each(callable $callback);
function eachSpread(callable $callback);
function ensure($type);
function escapeWhenCastingToString($escape = true);
function every($key, $operator = null, $value = null);
function except($keys);
function filter(?callable $callback = null);
function first(?callable $callback = null, $default = null);
function firstOrFail($key = null, $operator = null, $value = null);
function firstWhere($key, $operator = null, $value = null);
function flatMap(callable $callback);
function flatten($depth = INF);
function flip();
function forPage($page, $perPage);
function forget($keys);
function get($key, $default = null);
function getCachingIterator($flags = 1);
function getIterator(): Traversable;
function getOrPut($key, $value);
function groupBy($groupBy, $preserveKeys = false);
function has($key);
function hasAny($key);
function hasMany($key = null, $operator = null, $value = null): bool;
function hasSole($key = null, $operator = null, $value = null): bool;
function implode($value, $glue = null);
function intersect($items);
function intersectAssoc($items);
function intersectAssocUsing($items, callable $callback);
function intersectByKeys($items);
function intersectUsing($items, callable $callback);
function isEmpty();
function isNotEmpty();
function join($glue, $finalGlue = '');
function jsonSerialize(): array;
function keyBy($keyBy);
function keys();
function last(?callable $callback = null, $default = null);
function lazy();
function map(callable $callback);
function mapInto($class);
function mapSpread(callable $callback);
function mapToDictionary(callable $callback);
function mapToGroups(callable $callback);
function mapWithKeys(callable $callback);
function max($callback = null);
function median($key = null);
function merge($items);
function mergeRecursive($items);
function min($callback = null);
function mode($key = null);
function multiply(int $multiplier);
function nth($step, $offset = 0);
function offsetExists($offset): bool;
function offsetGet($offset): mixed;
function offsetSet($offset, $value): void;
function offsetUnset($offset): void;
function only($keys);
function pad($size, $value);
function partition($key, $operator = null, $value = null);
function percentage(callable $callback, int $precision = 2);
function pipe(callable $callback);
function pipeInto($class);
function pipeThrough($callbacks);
function pluck($value, $key = null);
function pop($count = 1);
function prepend($value, $key = null);
function pull($key, $default = null);
function push(...$values);
function put($key, $value);
function random($number = null, $preserveKeys = false);
function reduce(callable $callback, $initial = null);
function reduceSpread(callable $callback, ...$initial);
function reduceWithKeys(callable $callback, $initial = null);
function reject($callback = true);
function replace($items);
function replaceRecursive($items);
function reverse();
function search($value, $strict = false);
function select($keys);
function shift($count = 1);
function shuffle();
function skip($count);
function skipUntil($value);
function skipWhile($value);
function slice($offset, $length = null);
function sliding($size = 2, $step = 1);
function sole($key = null, $operator = null, $value = null);
function some($key, $operator = null, $value = null);
function sort($callback = null);
function sortBy($callback, $options = 0, $descending = false);
function sortByDesc($callback, $options = 0);
function sortDesc($options = 0);
function sortKeys($options = 0, $descending = false);
function sortKeysDesc($options = 0);
function sortKeysUsing(callable $callback);
function splice($offset, $length = null, $replacement = []);
function split($numberOfGroups);
function splitIn($numberOfGroups);
function sum($callback = null);
function take($limit);
function takeUntil($value);
function takeWhile($value);
function tap(callable $callback);
function toArray();
function toBase();
function toJson($options = 0);
function toPrettyJson(int $options = 0);
function toResourceCollection(?string $resourceClass = null): Illuminate\Http\Resources\Json\ResourceCollection;
function transform(callable $callback);
function undot();
function union($items);
function unique($key = null, $strict = false);
function uniqueStrict($key = null);
function unless($value = null, ?callable $callback = null, ?callable $default = null);
function unlessEmpty(callable $callback, ?callable $default = null);
function unlessNotEmpty(callable $callback, ?callable $default = null);
function unshift(...$values);
function value($key, $default = null);
function values();
function when($value = null, ?callable $callback = null, ?callable $default = null);
function whenEmpty(callable $callback, ?callable $default = null);
function whenNotEmpty(callable $callback, ?callable $default = null);
function where($key, $operator = null, $value = null);
function whereBetween($key, $values);
function whereIn($key, $values, $strict = false);
function whereInStrict($key, $values);
function whereInstanceOf($type);
function whereNotBetween($key, $values);
function whereNotIn($key, $values, $strict = false);
function whereNotInStrict($key, $values);
function whereNotNull($key = null);
function whereNull($key = null);
function whereStrict($key, $value);
function zip($items);
static function __callStatic($method, $parameters);
static function empty(...$args);
static function flushMacros();
static function fromJson($json, $depth = 512, $flags = 0, ...$args);
static function hasMacro($name);
static function macro($name, $macro);
static function make($items = [], ...$args);
static function mixin($mixin, $replace = true);
static function proxy($method);
static function range($from, $to, $step = 1, ...$args);
static function times($number, ?callable $callback = null, ...$args);
static function unwrap($value);
static function wrap($value, ...$args);
```

## class UrlGenerator
`Illuminate\Routing\UrlGenerator` implements Illuminate\Contracts\Routing\UrlGenerator

```php
function __call($method, $parameters);
function __construct(Illuminate\Routing\RouteCollectionInterface $routes, Illuminate\Http\Request $request, $assetRoot = null);
function action($action, $parameters = [], $absolute = true);
function asset($path, $secure = null);
function assetFrom($root, $path, $secure = null);
function current();
function defaults(array $defaults);
function forceHttps($force = true);
function forceRootUrl($root);
function forceScheme($scheme);
function format($root, $path, $route = null);
function formatHostUsing(Closure $callback);
function formatParameters($parameters);
function formatPathUsing(Closure $callback);
function formatRoot($scheme, $root = null);
function formatScheme($secure = null);
function full();
function getDefaultParameters();
function getRequest();
function getRootControllerNamespace();
function hasCorrectSignature(Illuminate\Http\Request $request, $absolute = true, Closure|array $ignoreQuery = []);
function hasValidRelativeSignature(Illuminate\Http\Request $request, Closure|array $ignoreQuery = []);
function hasValidSignature(Illuminate\Http\Request $request, $absolute = true, Closure|array $ignoreQuery = []);
function isValidUrl($path);
function pathFormatter();
function previous($fallback = false);
function previousPath($fallback = false);
function query($path, $query = [], $extra = [], $secure = null);
function resolveMissingNamedRoutesUsing(callable $missingNamedRouteResolver);
function route($name, $parameters = [], $absolute = true);
function secure($path, $parameters = []);
function secureAsset($path);
function setKeyResolver(callable $keyResolver);
function setRequest(Illuminate\Http\Request $request);
function setRootControllerNamespace($rootNamespace);
function setRoutes(Illuminate\Routing\RouteCollectionInterface $routes);
function setSessionResolver(callable $sessionResolver);
function signatureHasNotExpired(Illuminate\Http\Request $request);
function signedRoute($name, $parameters = [], $expiration = null, $absolute = true);
function temporarySignedRoute($name, $expiration, $parameters = [], $absolute = true);
function to($path, $extra = [], $secure = null);
function toRoute($route, $parameters, $absolute);
function useAssetOrigin(?string $root);
function useOrigin(?string $root);
function withKeyResolver(callable $keyResolver);
static function __callStatic($method, $parameters);
static function flushMacros();
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
```

## class ViewController
`Illuminate\Routing\ViewController` extends Illuminate\Routing\Controller

```php
function __call($method, $parameters);
function __construct(Illuminate\Contracts\Routing\ResponseFactory $response);
function __invoke(...$args);
function callAction($method, $parameters);
function getMiddleware();
function middleware($middleware, array $options = []);
```

