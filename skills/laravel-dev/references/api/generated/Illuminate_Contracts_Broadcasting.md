# Illuminate\Contracts\Broadcasting

Version: 13.14.0

## interface Broadcaster
`Illuminate\Contracts\Broadcasting\Broadcaster`

```php
abstract function auth($request);
abstract function broadcast(array $channels, $event, array $payload = []);
abstract function validAuthenticationResponse($request, $result);
```

## interface Factory
`Illuminate\Contracts\Broadcasting\Factory`

```php
abstract function connection($name = null);
```

## interface HasBroadcastChannel
`Illuminate\Contracts\Broadcasting\HasBroadcastChannel`

```php
abstract function broadcastChannel();
abstract function broadcastChannelRoute();
```

## interface ShouldBeUnique
`Illuminate\Contracts\Broadcasting\ShouldBeUnique`

## interface ShouldBroadcast
`Illuminate\Contracts\Broadcasting\ShouldBroadcast`

```php
abstract function broadcastOn();
```

## interface ShouldBroadcastNow
`Illuminate\Contracts\Broadcasting\ShouldBroadcastNow` implements Illuminate\Contracts\Broadcasting\ShouldBroadcast

```php
abstract function broadcastOn();
```

## interface ShouldRescue
`Illuminate\Contracts\Broadcasting\ShouldRescue`

