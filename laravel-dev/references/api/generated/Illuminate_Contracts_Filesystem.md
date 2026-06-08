# Illuminate\Contracts\Filesystem

Version: 13.14.0

## interface Cloud
`Illuminate\Contracts\Filesystem\Cloud` implements Illuminate\Contracts\Filesystem\Filesystem

```php
abstract function allDirectories($directory = null);
abstract function allFiles($directory = null);
abstract function append($path, $data);
abstract function copy($from, $to);
abstract function delete($paths);
abstract function deleteDirectory($directory);
abstract function directories($directory = null, $recursive = false);
abstract function exists($path);
abstract function files($directory = null, $recursive = false);
abstract function get($path);
abstract function getVisibility($path);
abstract function lastModified($path);
abstract function makeDirectory($path);
abstract function move($from, $to);
abstract function path($path);
abstract function prepend($path, $data);
abstract function put($path, $contents, $options = []);
abstract function putFile($path, $file = null, $options = []);
abstract function putFileAs($path, $file, $name = null, $options = []);
abstract function readStream($path);
abstract function setVisibility($path, $visibility);
abstract function size($path);
abstract function url($path);
abstract function writeStream($path, $resource, array $options = []);
```

## interface Factory
`Illuminate\Contracts\Filesystem\Factory`

```php
abstract function disk($name = null);
```

## class FileNotFoundException
`Illuminate\Contracts\Filesystem\FileNotFoundException` extends Exception implements Throwable, Stringable

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

## interface Filesystem
`Illuminate\Contracts\Filesystem\Filesystem`

```php
abstract function allDirectories($directory = null);
abstract function allFiles($directory = null);
abstract function append($path, $data);
abstract function copy($from, $to);
abstract function delete($paths);
abstract function deleteDirectory($directory);
abstract function directories($directory = null, $recursive = false);
abstract function exists($path);
abstract function files($directory = null, $recursive = false);
abstract function get($path);
abstract function getVisibility($path);
abstract function lastModified($path);
abstract function makeDirectory($path);
abstract function move($from, $to);
abstract function path($path);
abstract function prepend($path, $data);
abstract function put($path, $contents, $options = []);
abstract function putFile($path, $file = null, $options = []);
abstract function putFileAs($path, $file, $name = null, $options = []);
abstract function readStream($path);
abstract function setVisibility($path, $visibility);
abstract function size($path);
abstract function writeStream($path, $resource, array $options = []);
```

## class LockTimeoutException
`Illuminate\Contracts\Filesystem\LockTimeoutException` extends Exception implements Throwable, Stringable

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

