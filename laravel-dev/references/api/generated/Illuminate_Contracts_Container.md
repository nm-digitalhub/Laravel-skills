# Illuminate\Contracts\Container

Version: 13.14.0

## class BindingResolutionException
`Illuminate\Contracts\Container\BindingResolutionException` extends Exception implements Stringable, Throwable, Psr\Container\ContainerExceptionInterface

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

## class CircularDependencyException
`Illuminate\Contracts\Container\CircularDependencyException` extends Exception implements Stringable, Throwable, Psr\Container\ContainerExceptionInterface

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

## interface Container
`Illuminate\Contracts\Container\Container` implements Psr\Container\ContainerInterface

```php
abstract function addContextualBinding($concrete, $abstract, $implementation);
abstract function afterResolving($abstract, ?Closure $callback = null);
abstract function alias($abstract, $alias);
abstract function beforeResolving($abstract, ?Closure $callback = null);
abstract function bind($abstract, $concrete = null, $shared = false);
abstract function bindIf($abstract, $concrete = null, $shared = false);
abstract function bindMethod($method, $callback);
abstract function bound($abstract);
abstract function call($callback, array $parameters = [], $defaultMethod = null);
abstract function extend($abstract, Closure $closure);
abstract function factory($abstract);
abstract function flush();
abstract function get(string $id);
abstract function has(string $id): bool;
abstract function instance($abstract, $instance);
abstract function make($abstract, array $parameters = []);
abstract function resolved($abstract);
abstract function resolving($abstract, ?Closure $callback = null);
abstract function scoped($abstract, $concrete = null);
abstract function scopedIf($abstract, $concrete = null);
abstract function singleton($abstract, $concrete = null);
abstract function singletonIf($abstract, $concrete = null);
abstract function tag($abstracts, $tags);
abstract function tagged($tag);
abstract function when($concrete);
```

## interface ContextualAttribute
`Illuminate\Contracts\Container\ContextualAttribute`

## interface ContextualBindingBuilder
`Illuminate\Contracts\Container\ContextualBindingBuilder`

```php
abstract function give($implementation);
abstract function giveConfig($key, $default = null);
abstract function giveTagged($tag);
abstract function needs($abstract);
```

## interface SelfBuilding
`Illuminate\Contracts\Container\SelfBuilding`

