# Illuminate\Broadcasting\Broadcasters

Version: 13.14.0

## class AblyBroadcaster
`Illuminate\Broadcasting\Broadcasters\AblyBroadcaster` extends Illuminate\Broadcasting\Broadcasters\Broadcaster implements Illuminate\Contracts\Broadcasting\Broadcaster

```php
function __construct(Ably\AblyRest $ably);
function auth($request);
function broadcast(array $channels, $event, array $payload = []);
function channel($channel, $callback, $options = []);
function generateAblySignature($channelName, $socketId, $userData = null);
function getAbly();
function getChannels();
function isGuardedChannel($channel);
function normalizeChannelName($channel);
function resolveAuthenticatedUser($request);
function resolveAuthenticatedUserUsing(Closure $callback);
function setAbly($ably);
function validAuthenticationResponse($request, $result);
```

## class Broadcaster
`Illuminate\Broadcasting\Broadcasters\Broadcaster` implements Illuminate\Contracts\Broadcasting\Broadcaster

```php
abstract function auth($request);
abstract function broadcast(array $channels, $event, array $payload = []);
abstract function validAuthenticationResponse($request, $result);
function channel($channel, $callback, $options = []);
function getChannels();
function resolveAuthenticatedUser($request);
function resolveAuthenticatedUserUsing(Closure $callback);
```

## class LogBroadcaster
`Illuminate\Broadcasting\Broadcasters\LogBroadcaster` extends Illuminate\Broadcasting\Broadcasters\Broadcaster implements Illuminate\Contracts\Broadcasting\Broadcaster

```php
function __construct(Psr\Log\LoggerInterface $logger);
function auth($request);
function broadcast(array $channels, $event, array $payload = []);
function channel($channel, $callback, $options = []);
function getChannels();
function resolveAuthenticatedUser($request);
function resolveAuthenticatedUserUsing(Closure $callback);
function validAuthenticationResponse($request, $result);
```

## class NullBroadcaster
`Illuminate\Broadcasting\Broadcasters\NullBroadcaster` extends Illuminate\Broadcasting\Broadcasters\Broadcaster implements Illuminate\Contracts\Broadcasting\Broadcaster

```php
function auth($request);
function broadcast(array $channels, $event, array $payload = []);
function channel($channel, $callback, $options = []);
function getChannels();
function resolveAuthenticatedUser($request);
function resolveAuthenticatedUserUsing(Closure $callback);
function validAuthenticationResponse($request, $result);
```

## class PusherBroadcaster
`Illuminate\Broadcasting\Broadcasters\PusherBroadcaster` extends Illuminate\Broadcasting\Broadcasters\Broadcaster implements Illuminate\Contracts\Broadcasting\Broadcaster

```php
function __construct(Pusher\Pusher $pusher, bool $allowJsonp = false);
function auth($request);
function broadcast(array $channels, $event, array $payload = []);
function channel($channel, $callback, $options = []);
function getChannels();
function getPusher();
function isGuardedChannel($channel);
function normalizeChannelName($channel);
function resolveAuthenticatedUser($request);
function resolveAuthenticatedUserUsing(Closure $callback);
function setPusher($pusher);
function validAuthenticationResponse($request, $result);
```

## class RedisBroadcaster
`Illuminate\Broadcasting\Broadcasters\RedisBroadcaster` extends Illuminate\Broadcasting\Broadcasters\Broadcaster implements Illuminate\Contracts\Broadcasting\Broadcaster

```php
function __construct(Illuminate\Contracts\Redis\Factory $redis, $connection = null, $prefix = '');
function auth($request);
function broadcast(array $channels, $event, array $payload = []);
function channel($channel, $callback, $options = []);
function getChannels();
function isGuardedChannel($channel);
function normalizeChannelName($channel);
function resolveAuthenticatedUser($request);
function resolveAuthenticatedUserUsing(Closure $callback);
function validAuthenticationResponse($request, $result);
```

## trait UsePusherChannelConventions
`Illuminate\Broadcasting\Broadcasters\UsePusherChannelConventions`

```php
function isGuardedChannel($channel);
function normalizeChannelName($channel);
```

