# Illuminate\Events

Version: 13.14.0

## class CallQueuedListener
`Illuminate\Events\CallQueuedListener` implements Illuminate\Contracts\Queue\ShouldQueue

```php
function __clone();
function __construct($class, $method, $data);
function afterCommit();
function allOnConnection($connection);
function allOnQueue($queue);
function appendToChain($job);
function assertDeleted();
function assertDoesntHaveChain();
function assertFailed();
function assertFailedWith($exception);
function assertHasChain($expectedChain);
function assertNotDeleted();
function assertNotFailed();
function assertNotReleased();
function assertReleased($delay = null);
function attempts();
function beforeCommit();
function chain($chain);
function delay($delay);
function delete();
function dispatchNextJobInChain();
function displayName();
function fail($exception = null);
function failed($e);
function handle(Illuminate\Container\Container $container);
function invokeChainCatchCallbacks($e);
function onConnection($connection);
function onGroup($group);
function onQueue($queue);
function prependToChain($job);
function release($delay = 0);
function setJob(Illuminate\Contracts\Queue\Job $job);
function shouldBeUnique(): bool;
function shouldBeUniqueUntilProcessing(): bool;
function through($middleware);
function uniqueFor(): ?int;
function uniqueId(): mixed;
function uniqueVia(): ?Illuminate\Contracts\Cache\Repository;
function withDeduplicator($deduplicator);
function withFakeQueueInteractions();
function withoutDelay();
```

## class Dispatcher
`Illuminate\Events\Dispatcher` implements Illuminate\Contracts\Events\Dispatcher

```php
function __call($method, $parameters);
function __construct(?Illuminate\Contracts\Container\Container $container = null);
function createClassListener($listener, $wildcard = false);
function defer(callable $callback, ?array $events = null);
function dispatch($event, $payload = [], $halt = false);
function flush($event);
function forget($event);
function forgetPushed();
function getListeners($eventName);
function getRawListeners();
function hasListeners($eventName);
function hasWildcardListeners($eventName);
function listen($events, $listener = null);
function makeListener($listener, $wildcard = false);
function push($event, $payload = []);
function resolveConnectionFromQueueRoute($queueable);
function resolveQueueFromQueueRoute($queueable);
function setQueueResolver(callable $resolver);
function setTransactionManagerResolver(callable $resolver);
function subscribe($subscriber);
function until($event, $payload = []);
static function __callStatic($method, $parameters);
static function flushMacros();
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
```

## class EventServiceProvider
`Illuminate\Events\EventServiceProvider` extends Illuminate\Support\ServiceProvider

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

## class InvokeQueuedClosure
`Illuminate\Events\InvokeQueuedClosure`

```php
function failed($closure, array $arguments, array $catchCallbacks, $exception);
function handle($closure, array $arguments);
```

## class NullDispatcher
`Illuminate\Events\NullDispatcher` implements Illuminate\Contracts\Events\Dispatcher

```php
function __call($method, $parameters);
function __construct(Illuminate\Contracts\Events\Dispatcher $dispatcher);
function dispatch($event, $payload = [], $halt = false);
function flush($event);
function forget($event);
function forgetPushed();
function hasListeners($eventName);
function listen($events, $listener = null);
function push($event, $payload = []);
function subscribe($subscriber);
function until($event, $payload = []);
```

## class QueuedClosure
`Illuminate\Events\QueuedClosure`

```php
function __construct(Closure $closure);
function catch(Closure $closure);
function delay($delay);
function onConnection($connection);
function onGroup($group);
function onQueue($queue);
function resolve();
function withDeduplicator($deduplicator);
```

