# Illuminate\Filesystem

Version: 13.14.0

## class AwsS3V3Adapter
`Illuminate\Filesystem\AwsS3V3Adapter` extends Illuminate\Filesystem\FilesystemAdapter implements Illuminate\Contracts\Filesystem\Filesystem, Illuminate\Contracts\Filesystem\Cloud

```php
function __call($method, $parameters);
function __construct(League\Flysystem\FilesystemOperator $driver, League\Flysystem\FilesystemAdapter $adapter, array $config, Aws\S3\S3Client $client);
function allDirectories($directory = null);
function allFiles($directory = null);
function append($path, $data, $separator = '
');
function assertCount($path, $count, $recursive = false);
function assertDirectoryEmpty($path);
function assertExists($path, $content = null);
function assertMissing($path);
function buildTemporaryUploadUrlsUsing(Closure $callback);
function buildTemporaryUrlsUsing(Closure $callback);
function checksum(string $path, array $options = []);
function copy($from, $to);
function delete($paths);
function deleteDirectory($directory);
function directories($directory = null, $recursive = false);
function directoryExists($path);
function directoryMissing($path);
function download($path, $name = null, array $headers = []);
function exists($path);
function fileExists($path);
function fileMissing($path);
function files($directory = null, $recursive = false);
function get($path);
function getAdapter();
function getClient();
function getConfig();
function getDriver();
function getVisibility($path);
function json($path, $flags = 0);
function lastModified($path);
function macroCall($method, $parameters);
function makeDirectory($path);
function mimeType($path);
function missing($path);
function move($from, $to);
function path($path);
function prepend($path, $data, $separator = '
');
function providesTemporaryUploadUrls();
function providesTemporaryUrls();
function put($path, $contents, $options = []);
function putFile($path, $file = null, $options = []);
function putFileAs($path, $file, $name = null, $options = []);
function readStream($path);
function response($path, $name = null, array $headers = [], $disposition = 'inline');
function serve(Illuminate\Http\Request $request, $path, $name = null, array $headers = []);
function serveUsing(Closure $callback);
function setVisibility($path, $visibility);
function size($path);
function temporaryUploadUrl($path, $expiration, array $options = []);
function temporaryUrl($path, $expiration, array $options = []);
function unless($value = null, ?callable $callback = null, ?callable $default = null);
function url($path);
function when($value = null, ?callable $callback = null, ?callable $default = null);
function writeStream($path, $resource, array $options = []);
static function __callStatic($method, $parameters);
static function flushMacros();
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
```

## class Filesystem
`Illuminate\Filesystem\Filesystem`

```php
function __call($method, $parameters);
function allDirectories(string $directory): array;
function allFiles($directory, $hidden = false);
function append($path, $data, $lock = false);
function basename($path);
function chmod($path, $mode = null);
function cleanDirectory($directory);
function copy($path, $target);
function copyDirectory($directory, $destination, $options = null);
function delete($paths);
function deleteDirectories($directory);
function deleteDirectory($directory, $preserve = false);
function directories($directory, array|string|int $depth = 0);
function dirname($path);
function ensureDirectoryExists($path, $mode = 493, $recursive = true);
function exists($path);
function extension($path);
function files($directory, $hidden = false, array|string|int $depth = 0);
function get($path, $lock = false);
function getRequire($path, array $data = []);
function glob($pattern, $flags = 0);
function guessExtension($path);
function hasSameHash($firstFile, $secondFile);
function hash($path, $algorithm = 'md5');
function isDirectory($directory);
function isEmptyDirectory($directory, $ignoreDotFiles = false);
function isFile($file);
function isReadable($path);
function isWritable($path);
function json($path, $flags = 0, $lock = false);
function lastModified($path);
function lines($path);
function link($target, $link);
function makeDirectory($path, $mode = 493, $recursive = false, $force = false);
function mimeType($path);
function missing($path);
function move($path, $target);
function moveDirectory($from, $to, $overwrite = false);
function name($path);
function prepend($path, $data);
function put($path, $contents, $lock = false);
function relativeLink($target, $link);
function replace($path, $content, $mode = null);
function replaceInFile($search, $replace, $path);
function requireOnce($path, array $data = []);
function sharedGet($path);
function size($path);
function type($path);
function unless($value = null, ?callable $callback = null, ?callable $default = null);
function when($value = null, ?callable $callback = null, ?callable $default = null);
static function __callStatic($method, $parameters);
static function flushMacros();
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
```

## class FilesystemAdapter
`Illuminate\Filesystem\FilesystemAdapter` implements Illuminate\Contracts\Filesystem\Cloud, Illuminate\Contracts\Filesystem\Filesystem

```php
function __call($method, $parameters);
function __construct(League\Flysystem\FilesystemOperator $driver, League\Flysystem\FilesystemAdapter $adapter, array $config = []);
function allDirectories($directory = null);
function allFiles($directory = null);
function append($path, $data, $separator = '
');
function assertCount($path, $count, $recursive = false);
function assertDirectoryEmpty($path);
function assertExists($path, $content = null);
function assertMissing($path);
function buildTemporaryUploadUrlsUsing(Closure $callback);
function buildTemporaryUrlsUsing(Closure $callback);
function checksum(string $path, array $options = []);
function copy($from, $to);
function delete($paths);
function deleteDirectory($directory);
function directories($directory = null, $recursive = false);
function directoryExists($path);
function directoryMissing($path);
function download($path, $name = null, array $headers = []);
function exists($path);
function fileExists($path);
function fileMissing($path);
function files($directory = null, $recursive = false);
function get($path);
function getAdapter();
function getConfig();
function getDriver();
function getVisibility($path);
function json($path, $flags = 0);
function lastModified($path);
function macroCall($method, $parameters);
function makeDirectory($path);
function mimeType($path);
function missing($path);
function move($from, $to);
function path($path);
function prepend($path, $data, $separator = '
');
function providesTemporaryUploadUrls();
function providesTemporaryUrls();
function put($path, $contents, $options = []);
function putFile($path, $file = null, $options = []);
function putFileAs($path, $file, $name = null, $options = []);
function readStream($path);
function response($path, $name = null, array $headers = [], $disposition = 'inline');
function serve(Illuminate\Http\Request $request, $path, $name = null, array $headers = []);
function serveUsing(Closure $callback);
function setVisibility($path, $visibility);
function size($path);
function temporaryUploadUrl($path, $expiration, array $options = []);
function temporaryUrl($path, $expiration, array $options = []);
function unless($value = null, ?callable $callback = null, ?callable $default = null);
function url($path);
function when($value = null, ?callable $callback = null, ?callable $default = null);
function writeStream($path, $resource, array $options = []);
static function __callStatic($method, $parameters);
static function flushMacros();
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
```

## class FilesystemManager
`Illuminate\Filesystem\FilesystemManager` implements Illuminate\Contracts\Filesystem\Factory

```php
function __call($method, $parameters);
function __construct($app);
function build($config);
function cloud();
function createFtpDriver(array $config);
function createLocalDriver(array $config, string $name = 'local');
function createS3Driver(array $config);
function createScopedDriver(array $config);
function createSftpDriver(array $config);
function disk($name = null);
function drive($name = null);
function extend($driver, Closure $callback);
function forgetDisk($disk);
function getDefaultCloudDriver();
function getDefaultDriver();
function purge($name = null);
function set($name, $disk);
function setApplication($app);
```

## class FilesystemServiceProvider
`Illuminate\Filesystem\FilesystemServiceProvider` extends Illuminate\Support\ServiceProvider

```php
function __construct($app);
function boot();
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

## class LocalFilesystemAdapter
`Illuminate\Filesystem\LocalFilesystemAdapter` extends Illuminate\Filesystem\FilesystemAdapter implements Illuminate\Contracts\Filesystem\Filesystem, Illuminate\Contracts\Filesystem\Cloud

```php
function __call($method, $parameters);
function __construct(League\Flysystem\FilesystemOperator $driver, League\Flysystem\FilesystemAdapter $adapter, array $config = []);
function allDirectories($directory = null);
function allFiles($directory = null);
function append($path, $data, $separator = '
');
function assertCount($path, $count, $recursive = false);
function assertDirectoryEmpty($path);
function assertExists($path, $content = null);
function assertMissing($path);
function buildTemporaryUploadUrlsUsing(Closure $callback);
function buildTemporaryUrlsUsing(Closure $callback);
function checksum(string $path, array $options = []);
function copy($from, $to);
function delete($paths);
function deleteDirectory($directory);
function directories($directory = null, $recursive = false);
function directoryExists($path);
function directoryMissing($path);
function diskName(string $disk);
function download($path, $name = null, array $headers = []);
function exists($path);
function fileExists($path);
function fileMissing($path);
function files($directory = null, $recursive = false);
function get($path);
function getAdapter();
function getConfig();
function getDriver();
function getVisibility($path);
function json($path, $flags = 0);
function lastModified($path);
function macroCall($method, $parameters);
function makeDirectory($path);
function mimeType($path);
function missing($path);
function move($from, $to);
function path($path);
function prepend($path, $data, $separator = '
');
function providesTemporaryUploadUrls();
function providesTemporaryUrls();
function put($path, $contents, $options = []);
function putFile($path, $file = null, $options = []);
function putFileAs($path, $file, $name = null, $options = []);
function readStream($path);
function response($path, $name = null, array $headers = [], $disposition = 'inline');
function serve(Illuminate\Http\Request $request, $path, $name = null, array $headers = []);
function serveUsing(Closure $callback);
function setVisibility($path, $visibility);
function shouldServeSignedUrls(bool $serve = true, ?Closure $urlGeneratorResolver = null);
function size($path);
function temporaryUploadUrl($path, $expiration, array $options = []);
function temporaryUrl($path, $expiration, array $options = []);
function unless($value = null, ?callable $callback = null, ?callable $default = null);
function url($path);
function when($value = null, ?callable $callback = null, ?callable $default = null);
function writeStream($path, $resource, array $options = []);
static function __callStatic($method, $parameters);
static function flushMacros();
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
```

## class LockableFile
`Illuminate\Filesystem\LockableFile`

```php
function __construct($path, $mode);
function close();
function getExclusiveLock($block = false);
function getSharedLock($block = false);
function read($length = null);
function releaseLock();
function size();
function truncate();
function write($contents);
```

## class ReceiveFile
`Illuminate\Filesystem\ReceiveFile`

```php
function __construct(string $disk, array $config, bool $isProduction);
function __invoke(Illuminate\Http\Request $request, string $path): Illuminate\Http\Response;
```

## class ServeFile
`Illuminate\Filesystem\ServeFile`

```php
function __construct(string $disk, array $config, bool $isProduction);
function __invoke(Illuminate\Http\Request $request, string $path);
```

