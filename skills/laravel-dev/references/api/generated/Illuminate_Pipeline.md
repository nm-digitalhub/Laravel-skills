# Illuminate\Pipeline

Version: 13.14.0

## class Hub
`Illuminate\Pipeline\Hub` implements Illuminate\Contracts\Pipeline\Hub

```php
function __construct(?Illuminate\Contracts\Container\Container $container = null);
function defaults(Closure $callback);
function getContainer();
function pipe($object, $pipeline = null);
function pipeline($name, Closure $callback);
function setContainer(Illuminate\Contracts\Container\Container $container);
```

## class Pipeline
`Illuminate\Pipeline\Pipeline` implements Illuminate\Contracts\Pipeline\Pipeline

```php
function __call($method, $parameters);
function __construct(?Illuminate\Contracts\Container\Container $container = null);
function finally(Closure $callback);
function pipe($pipes);
function send($passable);
function setContainer(Illuminate\Contracts\Container\Container $container);
function then(Closure $destination);
function thenReturn();
function through($pipes);
function unless($value = null, ?callable $callback = null, ?callable $default = null);
function via($method);
function when($value = null, ?callable $callback = null, ?callable $default = null);
function withinTransaction($withinTransaction = null);
static function __callStatic($method, $parameters);
static function flushMacros();
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
```

## class PipelineServiceProvider
`Illuminate\Pipeline\PipelineServiceProvider` extends Illuminate\Support\ServiceProvider implements Illuminate\Contracts\Support\DeferrableProvider

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

