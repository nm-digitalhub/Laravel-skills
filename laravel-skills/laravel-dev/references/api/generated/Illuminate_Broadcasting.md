# Illuminate\Broadcasting

Version: 13.14.0

## class AnonymousEvent
`Illuminate\Broadcasting\AnonymousEvent` implements Illuminate\Contracts\Broadcasting\ShouldBroadcast

```php
function __construct(Illuminate\Broadcasting\Channel|array|string $channels);
function as(string $name): static;
function broadcastAs(): string;
function broadcastConnections();
function broadcastOn(): Illuminate\Broadcasting\Channel|array;
function broadcastToEveryone();
function broadcastVia($connection = null);
function broadcastWith(): array;
function dontBroadcastToCurrentUser();
function send(): void;
function sendNow(): void;
function shouldBroadcastNow(): bool;
function toOthers(): static;
function via(string $connection): static;
function with(Illuminate\Contracts\Support\Arrayable|array $payload): static;
static function broadcast(...$arguments);
static function dispatch(...$arguments);
static function dispatchIf($boolean, ...$arguments);
static function dispatchUnless($boolean, ...$arguments);
```

## class BroadcastController
`Illuminate\Broadcasting\BroadcastController` extends Illuminate\Routing\Controller

```php
function __call($method, $parameters);
function authenticate(Illuminate\Http\Request $request);
function authenticateUser(Illuminate\Http\Request $request);
function callAction($method, $parameters);
function getMiddleware();
function middleware($middleware, array $options = []);
```

## class BroadcastEvent
`Illuminate\Broadcasting\BroadcastEvent` implements Illuminate\Contracts\Queue\ShouldQueue

```php
function __clone();
function __construct($event);
function afterCommit();
function allOnConnection($connection);
function allOnQueue($queue);
function appendToChain($job);
function assertDoesntHaveChain();
function assertHasChain($expectedChain);
function beforeCommit();
function chain($chain);
function delay($delay);
function dispatchNextJobInChain();
function displayName();
function failed(?Throwable $e = null): void;
function handle(Illuminate\Contracts\Broadcasting\Factory $manager);
function invokeChainCatchCallbacks($e);
function middleware(): array;
function onConnection($connection);
function onGroup($group);
function onQueue($queue);
function prependToChain($job);
function through($middleware);
function withDeduplicator($deduplicator);
function withoutDelay();
```

## class BroadcastException
`Illuminate\Broadcasting\BroadcastException` extends RuntimeException implements Stringable, Throwable

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

## class BroadcastManager
`Illuminate\Broadcasting\BroadcastManager` implements Illuminate\Contracts\Broadcasting\Factory

```php
function __call($method, $parameters);
function __construct($app);
function ably(array $config);
function channelRoutes(?array $attributes = null);
function connection($name = null);
function driver($name = null);
function event($event = null);
function extend($driver, Closure $callback);
function forgetDrivers();
function getApplication();
function getDefaultDriver();
function on(Illuminate\Broadcasting\Channel|array|string $channels): Illuminate\Broadcasting\AnonymousEvent;
function presence(string $channel): Illuminate\Broadcasting\AnonymousEvent;
function private(string $channel): Illuminate\Broadcasting\AnonymousEvent;
function purge($name = null);
function pusher(array $config);
function queue($event);
function resolveConnectionFromQueueRoute($queueable);
function resolveQueueFromQueueRoute($queueable);
function routes(?array $attributes = null);
function setApplication($app);
function setDefaultDriver($name);
function socket($request = null);
function userRoutes(?array $attributes = null);
```

## class BroadcastServiceProvider
`Illuminate\Broadcasting\BroadcastServiceProvider` extends Illuminate\Support\ServiceProvider implements Illuminate\Contracts\Support\DeferrableProvider

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

## class Channel
`Illuminate\Broadcasting\Channel` implements Stringable

```php
function __construct($name);
function __toString(): string;
```

## class EncryptedPrivateChannel
`Illuminate\Broadcasting\EncryptedPrivateChannel` extends Illuminate\Broadcasting\Channel implements Stringable

```php
function __construct($name);
function __toString(): string;
```

## class FakePendingBroadcast
`Illuminate\Broadcasting\FakePendingBroadcast` extends Illuminate\Broadcasting\PendingBroadcast

```php
function __construct();
function __destruct();
function toOthers();
function via($connection = null);
```

## trait InteractsWithBroadcasting
`Illuminate\Broadcasting\InteractsWithBroadcasting`

```php
function broadcastConnections();
function broadcastVia($connection = null);
```

## trait InteractsWithSockets
`Illuminate\Broadcasting\InteractsWithSockets`

```php
function broadcastToEveryone();
function dontBroadcastToCurrentUser();
```

## class PendingBroadcast
`Illuminate\Broadcasting\PendingBroadcast`

```php
function __construct(Illuminate\Contracts\Events\Dispatcher $events, $event);
function __destruct();
function toOthers();
function via($connection = null);
```

## class PresenceChannel
`Illuminate\Broadcasting\PresenceChannel` extends Illuminate\Broadcasting\Channel implements Stringable

```php
function __construct($name);
function __toString(): string;
```

## class PrivateChannel
`Illuminate\Broadcasting\PrivateChannel` extends Illuminate\Broadcasting\Channel implements Stringable

```php
function __construct($name);
function __toString(): string;
```

## class UniqueBroadcastEvent
`Illuminate\Broadcasting\UniqueBroadcastEvent` extends Illuminate\Broadcasting\BroadcastEvent implements Illuminate\Contracts\Queue\ShouldQueue, Illuminate\Contracts\Queue\ShouldBeUnique

```php
function __clone();
function __construct($event);
function afterCommit();
function allOnConnection($connection);
function allOnQueue($queue);
function appendToChain($job);
function assertDoesntHaveChain();
function assertHasChain($expectedChain);
function beforeCommit();
function chain($chain);
function delay($delay);
function dispatchNextJobInChain();
function displayName();
function failed(?Throwable $e = null): void;
function handle(Illuminate\Contracts\Broadcasting\Factory $manager);
function invokeChainCatchCallbacks($e);
function middleware(): array;
function onConnection($connection);
function onGroup($group);
function onQueue($queue);
function prependToChain($job);
function through($middleware);
function uniqueVia();
function withDeduplicator($deduplicator);
function withoutDelay();
```

