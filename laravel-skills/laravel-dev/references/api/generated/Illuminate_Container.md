# Illuminate\Container

Version: 13.14.0

## class BoundMethod
`Illuminate\Container\BoundMethod`

```php
static function call($container, $callback, array $parameters = [], $defaultMethod = null);
```

## class Container
`Illuminate\Container\Container` implements ArrayAccess, Illuminate\Contracts\Container\Container, Psr\Container\ContainerInterface

```php
function __get($key);
function __set($key, $value);
function addContextualBinding($concrete, $abstract, $implementation);
function afterResolving($abstract, ?Closure $callback = null);
function afterResolvingAttribute(string $attribute, Closure $callback);
function alias($abstract, $alias);
function beforeResolving($abstract, ?Closure $callback = null);
function bind($abstract, $concrete = null, $shared = false);
function bindIf($abstract, $concrete = null, $shared = false);
function bindMethod($method, $callback);
function bound($abstract);
function build($concrete);
function call($callback, array $parameters = [], $defaultMethod = null);
function callMethodBinding($method, $instance);
function currentEnvironmentIs($environments);
function currentlyResolving();
function extend($abstract, Closure $closure);
function factory($abstract);
function fireAfterResolvingAttributeCallbacks(array $attributes, $object);
function flush();
function forgetExtenders($abstract);
function forgetInstance($abstract);
function forgetInstances();
function forgetScopedInstances();
function get(string $id);
function getAlias($abstract);
function getBindings();
function has(string $id): bool;
function hasMethodBinding($method);
function instance($abstract, $instance);
function isAlias($name);
function isShared($abstract);
function make($abstract, array $parameters = []);
function makeWith($abstract, array $parameters = []);
function offsetExists($offset): bool;
function offsetGet($offset): mixed;
function offsetSet($offset, $value): void;
function offsetUnset($offset): void;
function rebinding($abstract, Closure $callback);
function refresh($abstract, $target, $method);
function resolveEnvironmentUsing(?callable $callback);
function resolveFromAttribute(ReflectionAttribute $attribute);
function resolved($abstract);
function resolving($abstract, ?Closure $callback = null);
function scoped($abstract, $concrete = null);
function scopedIf($abstract, $concrete = null);
function singleton($abstract, $concrete = null);
function singletonIf($abstract, $concrete = null);
function tag($abstracts, $tags);
function tagged($tag);
function when($concrete);
function whenHasAttribute(string $attribute, Closure $handler);
function wrap(Closure $callback, array $parameters = []);
static function getInstance();
static function setInstance(?Illuminate\Contracts\Container\Container $container = null);
```

## class ContextualBindingBuilder
`Illuminate\Container\ContextualBindingBuilder` implements Illuminate\Contracts\Container\ContextualBindingBuilder

```php
function __construct(Illuminate\Contracts\Container\Container $container, $concrete);
function give($implementation);
function giveConfig($key, $default = null);
function giveTagged($tag);
function needs($abstract);
```

## class EntryNotFoundException
`Illuminate\Container\EntryNotFoundException` extends Exception implements Stringable, Throwable, Psr\Container\NotFoundExceptionInterface, Psr\Container\ContainerExceptionInterface

```php
final function getCode();
final function getFile(): string;
final function getLine(): int;
final function getMessage(): string;
final function getPrevious(): ?Throwable;
final function getTrace(): array;
final function getTraceAsString(): string;
function __construct(string $message = '', int $code = 0, ?Throwable $previous = null);
function __toString(): string;
function __wakeup();
```

## class RewindableGenerator
`Illuminate\Container\RewindableGenerator` implements Countable, IteratorAggregate, Traversable

```php
function __construct(callable $generator, $count);
function count(): int;
function getIterator(): Traversable;
```

## class Util
`Illuminate\Container\Util`

```php
static function arrayWrap($value);
static function getContextualAttributeFromDependency($dependency);
static function getParameterClassName($parameter);
static function unwrapIfClosure($value, ...$args);
```

