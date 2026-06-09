# Illuminate\Redis

Version: 13.14.0

## class RedisManager
`Illuminate\Redis\RedisManager` implements Illuminate\Contracts\Redis\Factory

```php
function __call($method, $parameters);
function __construct($app, $driver, array $config);
function connection($name = null);
function connections();
function disableEvents();
function enableEvents();
function extend($driver, Closure $callback);
function purge($name = null);
function resolve($name = null);
function setDriver($driver);
```

## class RedisServiceProvider
`Illuminate\Redis\RedisServiceProvider` extends Illuminate\Support\ServiceProvider implements Illuminate\Contracts\Support\DeferrableProvider

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

