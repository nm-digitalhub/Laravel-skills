# Illuminate\Foundation\Support\Providers

Version: 13.14.0

## class AuthServiceProvider
`Illuminate\Foundation\Support\Providers\AuthServiceProvider` extends Illuminate\Support\ServiceProvider

```php
function __construct($app);
function booted(Closure $callback);
function booting(Closure $callback);
function callBootedCallbacks();
function callBootingCallbacks();
function commands($commands);
function isDeferred();
function policies();
function provides();
function register();
function registerPolicies();
function when();
static function addProviderToBootstrapFile(string $provider, ?string $path = null);
static function defaultProviders();
static function pathsToPublish($provider = null, $group = null);
static function publishableGroups();
static function publishableMigrationPaths();
static function publishableProviders();
static function removeProviderFromBootstrapFile(array|string $providersToRemove, ?string $path = null, bool $strict = false);
```

## class EventServiceProvider
`Illuminate\Foundation\Support\Providers\EventServiceProvider` extends Illuminate\Support\ServiceProvider

```php
function __construct($app);
function boot();
function booted(Closure $callback);
function booting(Closure $callback);
function callBootedCallbacks();
function callBootingCallbacks();
function commands($commands);
function discoverEvents();
function getEvents();
function isDeferred();
function listens();
function provides();
function register();
function shouldDiscoverEvents();
function when();
static function addEventDiscoveryPaths(Traversable|array|string $paths);
static function addProviderToBootstrapFile(string $provider, ?string $path = null);
static function defaultProviders();
static function disableEventDiscovery();
static function pathsToPublish($provider = null, $group = null);
static function publishableGroups();
static function publishableMigrationPaths();
static function publishableProviders();
static function removeProviderFromBootstrapFile(array|string $providersToRemove, ?string $path = null, bool $strict = false);
static function setEventDiscoveryPaths(iterable $paths);
```

## class RouteServiceProvider
`Illuminate\Foundation\Support\Providers\RouteServiceProvider` extends Illuminate\Support\ServiceProvider

```php
function __call($method, $parameters);
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
static function loadCachedRoutesUsing(?Closure $routesCallback);
static function loadRoutesUsing(?Closure $routesCallback);
static function pathsToPublish($provider = null, $group = null);
static function publishableGroups();
static function publishableMigrationPaths();
static function publishableProviders();
static function removeProviderFromBootstrapFile(array|string $providersToRemove, ?string $path = null, bool $strict = false);
```

