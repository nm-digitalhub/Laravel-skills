# Illuminate\Foundation

Version: 13.14.0

## class AliasLoader
`Illuminate\Foundation\AliasLoader`

```php
function alias($alias, $class);
function getAliases();
function isRegistered();
function load($alias);
function register();
function setAliases(array $aliases);
function setRegistered($value);
static function getInstance(array $aliases = []);
static function setFacadeNamespace($namespace);
static function setInstance($loader);
```

## class Application
`Illuminate\Foundation\Application` extends Illuminate\Container\Container implements ArrayAccess, Illuminate\Contracts\Container\Container, Psr\Container\ContainerInterface, Illuminate\Contracts\Foundation\Application, Illuminate\Contracts\Foundation\CachesConfiguration, Illuminate\Contracts\Foundation\CachesRoutes, Symfony\Component\HttpKernel\HttpKernelInterface

```php
function __call($method, $parameters);
function __construct($basePath = null);
function __get($key);
function __set($key, $value);
function abort($code, $message = '', array $headers = []);
function addAbsoluteCachePathPrefix($prefix);
function addContextualBinding($concrete, $abstract, $implementation);
function addDeferredServices(array $services);
function afterBootstrapping($bootstrapper, Closure $callback);
function afterLoadingEnvironment(Closure $callback);
function afterResolving($abstract, ?Closure $callback = null);
function afterResolvingAttribute(string $attribute, Closure $callback);
function alias($abstract, $alias);
function basePath($path = '');
function beforeBootstrapping($bootstrapper, Closure $callback);
function beforeResolving($abstract, ?Closure $callback = null);
function bind($abstract, $concrete = null, $shared = false);
function bindIf($abstract, $concrete = null, $shared = false);
function bindMethod($method, $callback);
function boot();
function booted($callback);
function booting($callback);
function bootstrapPath($path = '');
function bootstrapWith(array $bootstrappers);
function bound($abstract);
function build($concrete);
function call($callback, array $parameters = [], $defaultMethod = null);
function callMethodBinding($method, $instance);
function configPath($path = '');
function configurationIsCached();
function currentEnvironmentIs($environments);
function currentLocale();
function currentlyResolving();
function databasePath($path = '');
function detectEnvironment(Closure $callback);
function dontMergeFrameworkConfiguration();
function environment(...$environments);
function environmentFile();
function environmentFilePath();
function environmentPath();
function eventsAreCached();
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
function getBootstrapProvidersPath();
function getCachedConfigPath();
function getCachedEventsPath();
function getCachedPackagesPath();
function getCachedRoutesPath();
function getCachedServicesPath();
function getDeferredServices();
function getFallbackLocale();
function getLoadedProviders();
function getLocale();
function getNamespace();
function getProvider($provider);
function getProviders($provider);
function handle(Symfony\Component\HttpFoundation\Request $request, int $type = 1, bool $catch = true): Symfony\Component\HttpFoundation\Response;
function handleCommand(Symfony\Component\Console\Input\InputInterface $input);
function handleRequest(Illuminate\Http\Request $request);
function has(string $id): bool;
function hasBeenBootstrapped();
function hasDebugModeEnabled();
function hasMethodBinding($method);
function instance($abstract, $instance);
function isAlias($name);
function isBooted();
function isDeferredService($service);
function isDownForMaintenance();
function isLocal();
function isLocale($locale);
function isProduction();
function isShared($abstract);
function joinPaths($basePath, $path = '');
function langPath($path = '');
function loadDeferredProvider($service);
function loadDeferredProviders();
function loadEnvironmentFrom($file);
function maintenanceMode();
function make($abstract, array $parameters = []);
function makeWith($abstract, array $parameters = []);
function offsetExists($offset): bool;
function offsetGet($offset): mixed;
function offsetSet($offset, $value): void;
function offsetUnset($offset): void;
function path($path = '');
function provideFacades($namespace);
function providerIsLoaded(string $provider);
function publicPath($path = '');
function rebinding($abstract, Closure $callback);
function refresh($abstract, $target, $method);
function register($provider, $force = false);
function registerConfiguredProviders();
function registerCoreContainerAliases();
function registerDeferredProvider($provider, $service = null);
function registered($callback);
function removeDeferredServices(array $services);
function resolveEnvironmentUsing(?callable $callback);
function resolveFromAttribute(ReflectionAttribute $attribute);
function resolveProvider($provider);
function resolved($abstract);
function resolving($abstract, ?Closure $callback = null);
function resourcePath($path = '');
function routesAreCached();
function runningConsoleCommand(...$commands);
function runningInConsole();
function runningUnitTests();
function scoped($abstract, $concrete = null);
function scopedIf($abstract, $concrete = null);
function setBasePath($basePath);
function setDeferredServices(array $services);
function setFallbackLocale($fallbackLocale);
function setLocale($locale);
function shouldMergeFrameworkConfiguration();
function shouldSkipMiddleware();
function singleton($abstract, $concrete = null);
function singletonIf($abstract, $concrete = null);
function storagePath($path = '');
function tag($abstracts, $tags);
function tagged($tag);
function terminate();
function terminating($callback);
function useAppPath($path);
function useBootstrapPath($path);
function useConfigPath($path);
function useDatabasePath($path);
function useEnvironmentPath($path);
function useLangPath($path);
function usePublicPath($path);
function useStoragePath($path);
function version();
function viewPath($path = '');
function when($concrete);
function whenHasAttribute(string $attribute, Closure $handler);
function wrap(Closure $callback, array $parameters = []);
static function __callStatic($method, $parameters);
static function configure(?string $basePath = null);
static function flushMacros();
static function getInstance();
static function hasMacro($name);
static function inferBasePath();
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
static function setInstance(?Illuminate\Contracts\Container\Container $container = null);
```

## class CacheBasedMaintenanceMode
`Illuminate\Foundation\CacheBasedMaintenanceMode` implements Illuminate\Contracts\Foundation\MaintenanceMode

```php
function __construct(Illuminate\Contracts\Cache\Factory $cache, string $store, string $key);
function activate(array $payload): void;
function active(): bool;
function data(): array;
function deactivate(): void;
```

## class Cloud
`Illuminate\Foundation\Cloud`

```php
static function bootManagedQueues(Illuminate\Foundation\Application $app): void;
static function bootstrapperBootstrapped(Illuminate\Foundation\Application $app, string $bootstrapper): void;
static function bootstrapperBootstrapping(Illuminate\Foundation\Application $app, string $bootstrapper): void;
static function configureCloudLogging(Illuminate\Foundation\Application $app): void;
static function configureDisks(Illuminate\Foundation\Application $app): void;
static function configureManagedQueues(Illuminate\Foundation\Application $app): void;
static function configureUnpooledPostgresConnection(Illuminate\Foundation\Application $app): void;
static function ensureMigrationsUseUnpooledConnection(Illuminate\Foundation\Application $app): void;
```

## class ComposerScripts
`Illuminate\Foundation\ComposerScripts`

```php
static function postAutoloadDump(Composer\Script\Event $event);
static function postInstall(Composer\Script\Event $event);
static function postUpdate(Composer\Script\Event $event);
static function prePackageUninstall(Composer\Installer\PackageEvent $event);
```

## class EnvironmentDetector
`Illuminate\Foundation\EnvironmentDetector`

```php
function detect(Closure $callback, $consoleArgs = null);
```

## class FileBasedMaintenanceMode
`Illuminate\Foundation\FileBasedMaintenanceMode` implements Illuminate\Contracts\Foundation\MaintenanceMode

```php
function activate(array $payload): void;
function active(): bool;
function data(): array;
function deactivate(): void;
```

## class Inspiring
`Illuminate\Foundation\Inspiring`

```php
static function quote();
static function quotes();
```

## class MaintenanceModeManager
`Illuminate\Foundation\MaintenanceModeManager` extends Illuminate\Support\Manager

```php
function __call($method, $parameters);
function __construct(Illuminate\Contracts\Container\Container $container);
function driver($driver = null);
function extend($driver, Closure $callback);
function forgetDrivers();
function getContainer();
function getDefaultDriver(): string;
function getDrivers();
function setContainer(Illuminate\Contracts\Container\Container $container);
```

## class Mix
`Illuminate\Foundation\Mix`

```php
function __invoke($path, $manifestDirectory = '');
```

## class MixFileNotFoundException
`Illuminate\Foundation\MixFileNotFoundException` extends Exception implements Throwable, Stringable

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

## class MixManifestNotFoundException
`Illuminate\Foundation\MixManifestNotFoundException` extends Exception implements Throwable, Stringable

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

## class PackageManifest
`Illuminate\Foundation\PackageManifest`

```php
function __construct(Illuminate\Filesystem\Filesystem $files, $basePath, $manifestPath);
function aliases();
function build();
function config($key);
function providers();
```

## class Precognition
`Illuminate\Foundation\Precognition`

```php
static function afterValidationHook($request);
```

## class ProviderRepository
`Illuminate\Foundation\ProviderRepository`

```php
function __construct(Illuminate\Contracts\Foundation\Application $app, Illuminate\Filesystem\Filesystem $files, $manifestPath);
function createProvider($provider);
function load(array $providers);
function loadManifest();
function shouldRecompile($manifest, $providers);
function writeManifest($manifest);
```

## class Vite
`Illuminate\Foundation\Vite` implements Illuminate\Contracts\Support\Htmlable

```php
function __call($method, $parameters);
function __invoke($entrypoints, $buildDirectory = null);
function asset($asset, $buildDirectory = null);
function content($asset, $buildDirectory = null);
function createAssetPathsUsing($resolver);
function cspNonce();
function flush();
function fonts($aliases = null);
function hotFile();
function isRunningHot();
function manifestHash($buildDirectory = null);
function mergeEntryPoints($entryPoints);
function prefetch($concurrency = null, $event = 'load');
function preloadedAssets();
function reactRefresh();
function toHtml();
function useAggressivePrefetching();
function useBuildDirectory($path);
function useCspNonce($nonce = null);
function useFontsManifestFilename($filename);
function useHotFile($path);
function useIntegrityKey($key);
function useManifestFilename($filename);
function usePrefetchStrategy($strategy, $config = []);
function usePreloadTagAttributes($attributes);
function useScriptTagAttributes($attributes);
function useStyleTagAttributes($attributes);
function useWaterfallPrefetching(?int $concurrency = null);
function withEntryPoints($entryPoints);
static function __callStatic($method, $parameters);
static function flushMacros();
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
```

## class ViteException
`Illuminate\Foundation\ViteException` extends Exception implements Throwable, Stringable

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

## class ViteFonts
`Illuminate\Foundation\ViteFonts`

```php
function ensureValidFamilies(array $aliases, array $manifest);
function ensureValidManifest(array $manifest);
function ensureValidPreloads(array $preloads, bool $isHot);
function flush();
function manifest(bool $isHot, string $buildDirectory, string $manifestFilename, string $hotFile);
function resolveStyleContent(array $manifest, ?array $aliases, string $buildDirectory);
```

## class ViteManifestNotFoundException
`Illuminate\Foundation\ViteManifestNotFoundException` extends Illuminate\Foundation\ViteException implements Stringable, Throwable

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

