# Illuminate\Contracts\Foundation

Version: 13.14.0

## interface Application
`Illuminate\Contracts\Foundation\Application` implements Illuminate\Contracts\Container\Container, Psr\Container\ContainerInterface

```php
abstract function addContextualBinding($concrete, $abstract, $implementation);
abstract function afterResolving($abstract, ?Closure $callback = null);
abstract function alias($abstract, $alias);
abstract function basePath($path = '');
abstract function beforeResolving($abstract, ?Closure $callback = null);
abstract function bind($abstract, $concrete = null, $shared = false);
abstract function bindIf($abstract, $concrete = null, $shared = false);
abstract function bindMethod($method, $callback);
abstract function boot();
abstract function booted($callback);
abstract function booting($callback);
abstract function bootstrapPath($path = '');
abstract function bootstrapWith(array $bootstrappers);
abstract function bound($abstract);
abstract function call($callback, array $parameters = [], $defaultMethod = null);
abstract function configPath($path = '');
abstract function databasePath($path = '');
abstract function environment(...$environments);
abstract function extend($abstract, Closure $closure);
abstract function factory($abstract);
abstract function flush();
abstract function get(string $id);
abstract function getLocale();
abstract function getNamespace();
abstract function getProviders($provider);
abstract function has(string $id): bool;
abstract function hasBeenBootstrapped();
abstract function hasDebugModeEnabled();
abstract function instance($abstract, $instance);
abstract function isDownForMaintenance();
abstract function langPath($path = '');
abstract function loadDeferredProviders();
abstract function maintenanceMode();
abstract function make($abstract, array $parameters = []);
abstract function publicPath($path = '');
abstract function register($provider, $force = false);
abstract function registerConfiguredProviders();
abstract function registerDeferredProvider($provider, $service = null);
abstract function resolveProvider($provider);
abstract function resolved($abstract);
abstract function resolving($abstract, ?Closure $callback = null);
abstract function resourcePath($path = '');
abstract function runningInConsole();
abstract function runningUnitTests();
abstract function scoped($abstract, $concrete = null);
abstract function scopedIf($abstract, $concrete = null);
abstract function setLocale($locale);
abstract function shouldSkipMiddleware();
abstract function singleton($abstract, $concrete = null);
abstract function singletonIf($abstract, $concrete = null);
abstract function storagePath($path = '');
abstract function tag($abstracts, $tags);
abstract function tagged($tag);
abstract function terminate();
abstract function terminating($callback);
abstract function version();
abstract function when($concrete);
```

## interface CachesConfiguration
`Illuminate\Contracts\Foundation\CachesConfiguration`

```php
abstract function configurationIsCached();
abstract function getCachedConfigPath();
abstract function getCachedServicesPath();
```

## interface CachesRoutes
`Illuminate\Contracts\Foundation\CachesRoutes`

```php
abstract function getCachedRoutesPath();
abstract function routesAreCached();
```

## interface ExceptionRenderer
`Illuminate\Contracts\Foundation\ExceptionRenderer`

```php
abstract function render($throwable);
```

## interface MaintenanceMode
`Illuminate\Contracts\Foundation\MaintenanceMode`

```php
abstract function activate(array $payload): void;
abstract function active(): bool;
abstract function data(): array;
abstract function deactivate(): void;
```

