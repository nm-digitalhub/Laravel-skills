# Illuminate\Log\Context

Version: 13.14.0

## class ContextLogProcessor
`Illuminate\Log\Context\ContextLogProcessor` implements Illuminate\Contracts\Log\ContextLogProcessor, Monolog\Processor\ProcessorInterface

```php
function __invoke(Monolog\LogRecord $record): Monolog\LogRecord;
```

## class ContextServiceProvider
`Illuminate\Log\Context\ContextServiceProvider` extends Illuminate\Support\ServiceProvider

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

## class Repository
`Illuminate\Log\Context\Repository`

```php
function __call($method, $parameters);
function __construct(Illuminate\Contracts\Events\Dispatcher $events);
function __serialize();
function __unserialize(array $values);
function add($key, $value = null);
function addHidden($key, $value = null);
function addHiddenIf($key, $value);
function addIf($key, $value);
function all();
function allHidden();
function decrement(string $key, int $amount = 1);
function dehydrate();
function dehydrating($callback);
function except($keys);
function exceptHidden($keys);
function flush();
function forget($key);
function forgetHidden($key);
function get($key, $default = null);
function getHidden($key, $default = null);
function handleUnserializeExceptionsUsing($callback);
function has($key);
function hasHidden($key);
function hiddenStackContains(string $key, mixed $value, bool $strict = false): bool;
function hydrate($context);
function hydrated($callback);
function increment(string $key, int $amount = 1);
function isEmpty();
function missing($key);
function missingHidden($key);
function only($keys);
function onlyHidden($keys);
function pop($key);
function popHidden($key);
function pull($key, $default = null);
function pullHidden($key, $default = null);
function push($key, ...$values);
function pushHidden($key, ...$values);
function remember($key, $value);
function rememberHidden($key, $value);
function restoreModel($value);
function scope(callable $callback, array $data = [], array $hidden = []);
function stackContains(string $key, mixed $value, bool $strict = false): bool;
function unless($value = null, ?callable $callback = null, ?callable $default = null);
function when($value = null, ?callable $callback = null, ?callable $default = null);
static function __callStatic($method, $parameters);
static function flushMacros();
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
```

