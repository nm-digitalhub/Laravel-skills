# Illuminate\Contracts\Events

Version: 13.14.0

## interface Dispatcher
`Illuminate\Contracts\Events\Dispatcher`

```php
abstract function dispatch($event, $payload = [], $halt = false);
abstract function flush($event);
abstract function forget($event);
abstract function forgetPushed();
abstract function hasListeners($eventName);
abstract function listen($events, $listener = null);
abstract function push($event, $payload = []);
abstract function subscribe($subscriber);
abstract function until($event, $payload = []);
```

## interface ShouldBeDiscovered
`Illuminate\Contracts\Events\ShouldBeDiscovered`

```php
static abstract function shouldBeDiscovered(): bool;
```

## interface ShouldDispatchAfterCommit
`Illuminate\Contracts\Events\ShouldDispatchAfterCommit`

## interface ShouldHandleEventsAfterCommit
`Illuminate\Contracts\Events\ShouldHandleEventsAfterCommit`

