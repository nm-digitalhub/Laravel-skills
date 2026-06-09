# Illuminate\Log

Version: 13.14.0

## class LogManager
`Illuminate\Log\LogManager` implements Psr\Log\LoggerInterface

```php
function __call($method, $parameters);
function __construct($app);
function alert($message, array $context = []): void;
function build(array $config);
function channel($channel = null);
function critical($message, array $context = []): void;
function debug($message, array $context = []): void;
function driver($driver = null);
function emergency($message, array $context = []): void;
function error($message, array $context = []): void;
function extend($driver, Closure $callback);
function flushSharedContext();
function forgetChannel($driver = null);
function getChannels();
function getDefaultDriver();
function info($message, array $context = []): void;
function log($level, $message, array $context = []): void;
function notice($message, array $context = []): void;
function setApplication($app);
function setDefaultDriver($name);
function shareContext(array $context);
function sharedContext();
function stack(array $channels, $channel = null);
function warning($message, array $context = []): void;
function withoutContext(?array $keys = null);
```

## class LogServiceProvider
`Illuminate\Log\LogServiceProvider` extends Illuminate\Support\ServiceProvider

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

## class Logger
`Illuminate\Log\Logger` implements Psr\Log\LoggerInterface

```php
function __call($method, $parameters);
function __construct(Psr\Log\LoggerInterface $logger, ?Illuminate\Contracts\Events\Dispatcher $dispatcher = null);
function alert($message, array $context = []): void;
function critical($message, array $context = []): void;
function debug($message, array $context = []): void;
function emergency($message, array $context = []): void;
function error($message, array $context = []): void;
function getEventDispatcher();
function getLogger();
function info($message, array $context = []): void;
function listen(Closure $callback);
function log($level, $message, array $context = []): void;
function notice($message, array $context = []): void;
function setEventDispatcher(Illuminate\Contracts\Events\Dispatcher $dispatcher);
function unless($value = null, ?callable $callback = null, ?callable $default = null);
function warning($message, array $context = []): void;
function when($value = null, ?callable $callback = null, ?callable $default = null);
function withContext(array $context = []);
function withoutContext(?array $keys = null);
function write($level, $message, array $context = []): void;
```

## trait ParsesLogConfiguration
`Illuminate\Log\ParsesLogConfiguration`

