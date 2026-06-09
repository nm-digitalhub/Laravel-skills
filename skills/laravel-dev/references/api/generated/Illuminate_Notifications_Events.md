# Illuminate\Notifications\Events

Version: 13.14.0

## class BroadcastNotificationCreated
`Illuminate\Notifications\Events\BroadcastNotificationCreated` implements Illuminate\Contracts\Broadcasting\ShouldBroadcast

```php
function __construct($notifiable, $notification, $data = []);
function __serialize();
function __unserialize(array $values);
function afterCommit();
function allOnConnection($connection);
function allOnQueue($queue);
function appendToChain($job);
function assertDoesntHaveChain();
function assertHasChain($expectedChain);
function beforeCommit();
function broadcastAs();
function broadcastOn();
function broadcastType();
function broadcastWith();
function chain($chain);
function delay($delay);
function dispatchNextJobInChain();
function invokeChainCatchCallbacks($e);
function onConnection($connection);
function onGroup($group);
function onQueue($queue);
function prependToChain($job);
function restoreModel($value);
function through($middleware);
function withDeduplicator($deduplicator);
function withoutDelay();
```

## class NotificationFailed
`Illuminate\Notifications\Events\NotificationFailed`

```php
function __construct($notifiable, $notification, $channel, $data = []);
function __serialize();
function __unserialize(array $values);
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
function invokeChainCatchCallbacks($e);
function onConnection($connection);
function onGroup($group);
function onQueue($queue);
function prependToChain($job);
function restoreModel($value);
function through($middleware);
function withDeduplicator($deduplicator);
function withoutDelay();
```

## class NotificationSending
`Illuminate\Notifications\Events\NotificationSending`

```php
function __construct($notifiable, $notification, $channel);
function __serialize();
function __unserialize(array $values);
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
function invokeChainCatchCallbacks($e);
function onConnection($connection);
function onGroup($group);
function onQueue($queue);
function prependToChain($job);
function restoreModel($value);
function through($middleware);
function withDeduplicator($deduplicator);
function withoutDelay();
```

## class NotificationSent
`Illuminate\Notifications\Events\NotificationSent`

```php
function __construct($notifiable, $notification, $channel, $response = null);
function __serialize();
function __unserialize(array $values);
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
function invokeChainCatchCallbacks($e);
function onConnection($connection);
function onGroup($group);
function onQueue($queue);
function prependToChain($job);
function restoreModel($value);
function through($middleware);
function withDeduplicator($deduplicator);
function withoutDelay();
```

