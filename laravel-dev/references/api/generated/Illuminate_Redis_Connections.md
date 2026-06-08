# Illuminate\Redis\Connections

Version: 13.14.0

## class Connection
`Illuminate\Redis\Connections\Connection`

```php
abstract function createSubscription($channels, Closure $callback, $method = 'subscribe');
function __call($method, $parameters);
function client();
function command($method, array $parameters = []);
function funnel($name);
function getEventDispatcher();
function getName();
function isCluster();
function listen(Closure $callback);
function listenForFailures(Closure $callback);
function macroCall($method, $parameters);
function psubscribe($channels, Closure $callback);
function setEventDispatcher(Illuminate\Contracts\Events\Dispatcher $events);
function setName($name);
function subscribe($channels, Closure $callback);
function throttle($name);
function unsetEventDispatcher();
static function __callStatic($method, $parameters);
static function flushMacros();
static function hasHashTag(string $key): bool;
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
```

## trait PacksPhpRedisValues
`Illuminate\Redis\Connections\PacksPhpRedisValues`

```php
function compressed(): bool;
function lz4Compressed(): bool;
function lzfCompressed(): bool;
function pack(array $values): array;
function serialized(): bool;
function withoutSerializationOrCompression(callable $callback);
function zstdCompressed(): bool;
```

## class PhpRedisClusterConnection
`Illuminate\Redis\Connections\PhpRedisClusterConnection` extends Illuminate\Redis\Connections\PhpRedisConnection implements Illuminate\Contracts\Redis\Connection

```php
function __call($method, $parameters);
function __construct($client, ?callable $connector = null, array $config = []);
function blpop(...$arguments);
function brpop(...$arguments);
function client();
function command($method, array $parameters = []);
function compressed(): bool;
function createSubscription($channels, Closure $callback, $method = 'subscribe');
function disconnect();
function eval($script, $numberOfKeys, ...$arguments);
function evalsha($script, $numkeys, ...$arguments);
function executeRaw(array $parameters);
function flushdb();
function funnel($name);
function get($key);
function getEventDispatcher();
function getName();
function hmget($key, ...$dictionary);
function hmset($key, ...$dictionary);
function hscan($key, $cursor, $options = []);
function hsetnx($hash, $key, $value);
function isCluster();
function listen(Closure $callback);
function listenForFailures(Closure $callback);
function lrem($key, $count, $value);
function lz4Compressed(): bool;
function lzfCompressed(): bool;
function macroCall($method, $parameters);
function mget(array $keys);
function pack(array $values): array;
function pipeline(?callable $callback = null);
function psubscribe($channels, Closure $callback);
function scan($cursor, $options = []);
function serialized(): bool;
function set($key, $value, $expireResolution = null, $expireTTL = null, $flag = null);
function setEventDispatcher(Illuminate\Contracts\Events\Dispatcher $events);
function setName($name);
function setnx($key, $value);
function spop($key, $count = 1);
function sscan($key, $cursor, $options = []);
function subscribe($channels, Closure $callback);
function throttle($name);
function transaction(?callable $callback = null);
function unsetEventDispatcher();
function withoutSerializationOrCompression(callable $callback);
function zadd($key, ...$dictionary);
function zinterstore($output, $keys, $options = []);
function zrangebyscore($key, $min, $max, $options = []);
function zrevrangebyscore($key, $min, $max, $options = []);
function zscan($key, $cursor, $options = []);
function zstdCompressed(): bool;
function zunionstore($output, $keys, $options = []);
static function __callStatic($method, $parameters);
static function flushMacros();
static function hasHashTag(string $key): bool;
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
```

## class PhpRedisConnection
`Illuminate\Redis\Connections\PhpRedisConnection` extends Illuminate\Redis\Connections\Connection implements Illuminate\Contracts\Redis\Connection

```php
function __call($method, $parameters);
function __construct($client, ?callable $connector = null, array $config = []);
function blpop(...$arguments);
function brpop(...$arguments);
function client();
function command($method, array $parameters = []);
function compressed(): bool;
function createSubscription($channels, Closure $callback, $method = 'subscribe');
function disconnect();
function eval($script, $numberOfKeys, ...$arguments);
function evalsha($script, $numkeys, ...$arguments);
function executeRaw(array $parameters);
function flushdb();
function funnel($name);
function get($key);
function getEventDispatcher();
function getName();
function hmget($key, ...$dictionary);
function hmset($key, ...$dictionary);
function hscan($key, $cursor, $options = []);
function hsetnx($hash, $key, $value);
function isCluster();
function listen(Closure $callback);
function listenForFailures(Closure $callback);
function lrem($key, $count, $value);
function lz4Compressed(): bool;
function lzfCompressed(): bool;
function macroCall($method, $parameters);
function mget(array $keys);
function pack(array $values): array;
function pipeline(?callable $callback = null);
function psubscribe($channels, Closure $callback);
function scan($cursor, $options = []);
function serialized(): bool;
function set($key, $value, $expireResolution = null, $expireTTL = null, $flag = null);
function setEventDispatcher(Illuminate\Contracts\Events\Dispatcher $events);
function setName($name);
function setnx($key, $value);
function spop($key, $count = 1);
function sscan($key, $cursor, $options = []);
function subscribe($channels, Closure $callback);
function throttle($name);
function transaction(?callable $callback = null);
function unsetEventDispatcher();
function withoutSerializationOrCompression(callable $callback);
function zadd($key, ...$dictionary);
function zinterstore($output, $keys, $options = []);
function zrangebyscore($key, $min, $max, $options = []);
function zrevrangebyscore($key, $min, $max, $options = []);
function zscan($key, $cursor, $options = []);
function zstdCompressed(): bool;
function zunionstore($output, $keys, $options = []);
static function __callStatic($method, $parameters);
static function flushMacros();
static function hasHashTag(string $key): bool;
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
```

## class PredisClusterConnection
`Illuminate\Redis\Connections\PredisClusterConnection` extends Illuminate\Redis\Connections\PredisConnection implements Illuminate\Contracts\Redis\Connection

```php
function __call($method, $parameters);
function __construct($client);
function client();
function command($method, array $parameters = []);
function createSubscription($channels, Closure $callback, $method = 'subscribe');
function flushdb();
function funnel($name);
function getEventDispatcher();
function getName();
function isCluster();
function keys(string $pattern);
function listen(Closure $callback);
function listenForFailures(Closure $callback);
function macroCall($method, $parameters);
function psubscribe($channels, Closure $callback);
function setEventDispatcher(Illuminate\Contracts\Events\Dispatcher $events);
function setName($name);
function subscribe($channels, Closure $callback);
function throttle($name);
function unsetEventDispatcher();
static function __callStatic($method, $parameters);
static function flushMacros();
static function hasHashTag(string $key): bool;
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
```

## class PredisConnection
`Illuminate\Redis\Connections\PredisConnection` extends Illuminate\Redis\Connections\Connection implements Illuminate\Contracts\Redis\Connection

```php
function __call($method, $parameters);
function __construct($client);
function client();
function command($method, array $parameters = []);
function createSubscription($channels, Closure $callback, $method = 'subscribe');
function funnel($name);
function getEventDispatcher();
function getName();
function isCluster();
function listen(Closure $callback);
function listenForFailures(Closure $callback);
function macroCall($method, $parameters);
function psubscribe($channels, Closure $callback);
function setEventDispatcher(Illuminate\Contracts\Events\Dispatcher $events);
function setName($name);
function subscribe($channels, Closure $callback);
function throttle($name);
function unsetEventDispatcher();
static function __callStatic($method, $parameters);
static function flushMacros();
static function hasHashTag(string $key): bool;
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
```

