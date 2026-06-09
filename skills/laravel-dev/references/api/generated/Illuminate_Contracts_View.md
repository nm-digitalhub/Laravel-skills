# Illuminate\Contracts\View

Version: 13.14.0

## interface Engine
`Illuminate\Contracts\View\Engine`

```php
abstract function get($path, array $data = []);
```

## interface Factory
`Illuminate\Contracts\View\Factory`

```php
abstract function addNamespace($namespace, $hints);
abstract function composer($views, $callback);
abstract function creator($views, $callback);
abstract function exists($view);
abstract function file($path, $data = [], $mergeData = []);
abstract function make($view, $data = [], $mergeData = []);
abstract function replaceNamespace($namespace, $hints);
abstract function share($key, $value = null);
```

## interface View
`Illuminate\Contracts\View\View` implements Illuminate\Contracts\Support\Renderable

```php
abstract function getData();
abstract function name();
abstract function render();
abstract function with($key, $value = null);
```

## class ViewCompilationException
`Illuminate\Contracts\View\ViewCompilationException` extends Exception implements Throwable, Stringable

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

