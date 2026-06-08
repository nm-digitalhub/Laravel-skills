# Illuminate\Concurrency

Version: 13.14.0

## class ConcurrencyManager
`Illuminate\Concurrency\ConcurrencyManager` extends Illuminate\Support\MultipleInstanceManager

```php
function __call($method, $parameters);
function __construct($app);
function createForkDriver();
function createProcessDriver();
function createSyncDriver();
function driver($name = null);
function extend($name, Closure $callback);
function forgetInstance($name = null);
function getDefaultInstance();
function getInstanceConfig($name);
function instance($name = null);
function purge($name = null);
function setApplication($app);
function setDefaultInstance($name);
```

## class ConcurrencyServiceProvider
`Illuminate\Concurrency\ConcurrencyServiceProvider` extends Illuminate\Support\ServiceProvider implements Illuminate\Contracts\Support\DeferrableProvider

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

## class ForkDriver
`Illuminate\Concurrency\ForkDriver` implements Illuminate\Contracts\Concurrency\Driver

```php
function defer(Closure|array $tasks): Illuminate\Support\Defer\DeferredCallback;
function run(Closure|array $tasks, Carbon\CarbonInterval|int|null $timeout = null): array;
```

## class ProcessDriver
`Illuminate\Concurrency\ProcessDriver` implements Illuminate\Contracts\Concurrency\Driver

```php
function __construct(Illuminate\Process\Factory $processFactory);
function defer(Closure|array $tasks): Illuminate\Support\Defer\DeferredCallback;
function run(Closure|array $tasks, Carbon\CarbonInterval|int|null $timeout = null): array;
```

## class SyncDriver
`Illuminate\Concurrency\SyncDriver` implements Illuminate\Contracts\Concurrency\Driver

```php
function defer(Closure|array $tasks): Illuminate\Support\Defer\DeferredCallback;
function run(Closure|array $tasks, Carbon\CarbonInterval|int|null $timeout = null): array;
```

