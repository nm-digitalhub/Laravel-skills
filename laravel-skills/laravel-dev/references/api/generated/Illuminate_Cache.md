# Illuminate\Cache

Version: 13.14.0

## class ApcStore
`Illuminate\Cache\ApcStore` extends Illuminate\Cache\TaggableStore implements Illuminate\Contracts\Cache\Store

```php
function __construct(Illuminate\Cache\ApcWrapper $apc, $prefix = '');
function decrement($key, $value = 1);
function flush();
function forever($key, $value);
function forget($key);
function get($key);
function getPrefix();
function increment($key, $value = 1);
function many(array $keys);
function put($key, $value, $seconds);
function putMany(array $values, $seconds);
function setPrefix($prefix);
function tags($names);
function touch($key, $seconds);
```

## class ApcWrapper
`Illuminate\Cache\ApcWrapper`

```php
function decrement($key, $value);
function delete($key);
function flush();
function get($key);
function increment($key, $value);
function put($key, $value, $seconds);
```

## class ArrayLock
`Illuminate\Cache\ArrayLock` extends Illuminate\Cache\Lock implements Illuminate\Contracts\Cache\Lock

```php
function __construct($store, $name, $seconds, $owner = null);
function acquire();
function betweenBlockedAttemptsSleepFor($milliseconds);
function block($seconds, $callback = null);
function forceRelease();
function get($callback = null);
function isLocked(): bool;
function isOwnedBy($owner);
function isOwnedByCurrentProcess();
function owner();
function release();
```

## class ArrayStore
`Illuminate\Cache\ArrayStore` extends Illuminate\Cache\TaggableStore implements Illuminate\Contracts\Cache\Store, Illuminate\Contracts\Cache\CanFlushLocks, Illuminate\Contracts\Cache\LockProvider

```php
function __construct($serializesValues = false, $serializableClasses = null);
function all($unserialize = true);
function decrement($key, $value = 1);
function flush();
function flushLocks(): bool;
function forever($key, $value);
function forget($key);
function get($key);
function getPrefix();
function hasSeparateLockStore(): bool;
function increment($key, $value = 1);
function lock($name, $seconds = 0, $owner = null);
function many(array $keys);
function put($key, $value, $seconds);
function putMany(array $values, $seconds);
function restoreLock($name, $owner);
function tags($names);
function touch($key, $seconds);
```

## class CacheLock
`Illuminate\Cache\CacheLock` extends Illuminate\Cache\Lock implements Illuminate\Contracts\Cache\Lock

```php
function __construct($store, $name, $seconds, $owner = null);
function acquire();
function betweenBlockedAttemptsSleepFor($milliseconds);
function block($seconds, $callback = null);
function forceRelease();
function get($callback = null);
function isLocked(): bool;
function isOwnedBy($owner);
function isOwnedByCurrentProcess();
function owner();
function release();
```

## class CacheManager
`Illuminate\Cache\CacheManager` implements Illuminate\Contracts\Cache\Factory

```php
function __call($method, $parameters);
function __construct($app);
function build(array $config);
function driver($driver = null);
function extend($driver, Closure $callback);
function forgetDriver($name = null);
function getDefaultDriver();
function handleUnserializableClassUsing(?callable $callback): void;
function memo($driver = null);
function purge($name = null);
function refreshEventDispatcher();
function repository(Illuminate\Contracts\Cache\Store $store, array $config = []);
function resolve($name);
function setApplication($app);
function setDefaultDriver($name);
function store($name = null);
```

## class CacheServiceProvider
`Illuminate\Cache\CacheServiceProvider` extends Illuminate\Support\ServiceProvider implements Illuminate\Contracts\Support\DeferrableProvider

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

## class DatabaseLock
`Illuminate\Cache\DatabaseLock` extends Illuminate\Cache\Lock implements Illuminate\Contracts\Cache\Lock

```php
function __construct(Illuminate\Database\Connection $connection, $table, $name, $seconds, $owner = null, $lottery = [], $defaultTimeoutInSeconds = 86400);
function acquire();
function betweenBlockedAttemptsSleepFor($milliseconds);
function block($seconds, $callback = null);
function forceRelease();
function get($callback = null);
function getConnectionName();
function isLocked(): bool;
function isOwnedBy($owner);
function isOwnedByCurrentProcess();
function owner();
function pruneExpiredLocks();
function release();
```

## class DatabaseStore
`Illuminate\Cache\DatabaseStore` implements Illuminate\Contracts\Cache\CanFlushLocks, Illuminate\Contracts\Cache\LockProvider, Illuminate\Contracts\Cache\Store

```php
function __construct(Illuminate\Database\ConnectionInterface $connection, $table, $prefix = '', $lockTable = 'cache_locks', $lockLottery = [], $defaultLockTimeoutInSeconds = 86400, $serializableClasses = null);
function add($key, $value, $seconds);
function decrement($key, $value = 1);
function flush();
function flushLocks(): bool;
function forever($key, $value);
function forget($key);
function forgetIfExpired($key);
function get($key);
function getConnection();
function getLockConnection();
function getPrefix();
function hasSeparateLockStore(): bool;
function increment($key, $value = 1);
function lock($name, $seconds = 0, $owner = null);
function many(array $keys);
function put($key, $value, $seconds);
function putMany(array $values, $seconds);
function restoreLock($name, $owner);
function setConnection($connection);
function setLockConnection($connection);
function setPrefix($prefix);
function touch($key, $seconds);
```

## class DynamoDbLock
`Illuminate\Cache\DynamoDbLock` extends Illuminate\Cache\Lock implements Illuminate\Contracts\Cache\Lock

```php
function __construct(Illuminate\Cache\DynamoDbStore $dynamo, $name, $seconds, $owner = null);
function acquire();
function betweenBlockedAttemptsSleepFor($milliseconds);
function block($seconds, $callback = null);
function forceRelease();
function get($callback = null);
function isLocked(): bool;
function isOwnedBy($owner);
function isOwnedByCurrentProcess();
function owner();
function release();
```

## class DynamoDbStore
`Illuminate\Cache\DynamoDbStore` implements Illuminate\Contracts\Cache\LockProvider, Illuminate\Contracts\Cache\Store

```php
function __construct(Aws\DynamoDb\DynamoDbClient $dynamo, $table, $keyAttribute = 'key', $valueAttribute = 'value', $expirationAttribute = 'expires_at', $prefix = '', $serializableClasses = null);
function add($key, $value, $seconds);
function decrement($key, $value = 1);
function flush();
function forever($key, $value);
function forget($key);
function get($key);
function getClient();
function getPrefix();
function increment($key, $value = 1);
function lock($name, $seconds = 0, $owner = null);
function many(array $keys);
function put($key, $value, $seconds);
function putMany(array $values, $seconds);
function restoreLock($name, $owner);
function setPrefix($prefix);
function touch($key, $seconds);
```

## class FailoverStore
`Illuminate\Cache\FailoverStore` extends Illuminate\Cache\TaggableStore implements Illuminate\Contracts\Cache\Store, Illuminate\Contracts\Cache\CanFlushLocks, Illuminate\Contracts\Cache\LockProvider

```php
function __construct(Illuminate\Cache\CacheManager $cache, Illuminate\Contracts\Events\Dispatcher $events, array $stores);
function add($key, $value, $seconds);
function decrement($key, $value = 1);
function flush();
function flushLocks(): bool;
function flushStaleTags();
function forever($key, $value);
function forget($key);
function get($key);
function getPrefix();
function hasSeparateLockStore(): bool;
function increment($key, $value = 1);
function lock($name, $seconds = 0, $owner = null);
function many(array $keys);
function put($key, $value, $seconds);
function putMany(array $values, $seconds);
function restoreLock($name, $owner);
function tags($names);
function touch($key, $seconds);
```

## class FileLock
`Illuminate\Cache\FileLock` extends Illuminate\Cache\CacheLock implements Illuminate\Contracts\Cache\Lock

```php
function __construct($store, $name, $seconds, $owner = null);
function acquire();
function betweenBlockedAttemptsSleepFor($milliseconds);
function block($seconds, $callback = null);
function forceRelease();
function get($callback = null);
function isLocked(): bool;
function isOwnedBy($owner);
function isOwnedByCurrentProcess();
function owner();
function release();
```

## class FileStore
`Illuminate\Cache\FileStore` implements Illuminate\Contracts\Cache\CanFlushLocks, Illuminate\Contracts\Cache\LockProvider, Illuminate\Contracts\Cache\Store

```php
function __construct(Illuminate\Filesystem\Filesystem $files, $directory, $filePermission = null, $serializableClasses = null);
function add($key, $value, $seconds);
function decrement($key, $value = 1);
function flush();
function flushLocks(): bool;
function forever($key, $value);
function forget($key);
function get($key);
function getDirectory();
function getFilesystem();
function getPrefix();
function hasSeparateLockStore(): bool;
function increment($key, $value = 1);
function lock($name, $seconds = 0, $owner = null);
function many(array $keys);
function path($key);
function put($key, $value, $seconds);
function putMany(array $values, $seconds);
function restoreLock($name, $owner);
function setDirectory($directory);
function setLockDirectory($lockDirectory);
function touch($key, $seconds);
```

## trait HasCacheLock
`Illuminate\Cache\HasCacheLock`

```php
function lock($name, $seconds = 0, $owner = null);
function restoreLock($name, $owner);
```

## class Lock
`Illuminate\Cache\Lock` implements Illuminate\Contracts\Cache\Lock

```php
abstract function acquire();
abstract function forceRelease();
abstract function release();
function __construct($name, $seconds, $owner = null);
function betweenBlockedAttemptsSleepFor($milliseconds);
function block($seconds, $callback = null);
function get($callback = null);
function isLocked(): bool;
function isOwnedBy($owner);
function isOwnedByCurrentProcess();
function owner();
```

## class LuaScripts
`Illuminate\Cache\LuaScripts`

```php
static function add();
static function releaseLock();
```

## class MemcachedConnector
`Illuminate\Cache\MemcachedConnector`

```php
function connect(array $servers, $connectionId = null, array $options = [], array $credentials = []);
```

## class MemcachedLock
`Illuminate\Cache\MemcachedLock` extends Illuminate\Cache\Lock implements Illuminate\Contracts\Cache\Lock

```php
function __construct($memcached, $name, $seconds, $owner = null);
function acquire();
function betweenBlockedAttemptsSleepFor($milliseconds);
function block($seconds, $callback = null);
function forceRelease();
function get($callback = null);
function isLocked(): bool;
function isOwnedBy($owner);
function isOwnedByCurrentProcess();
function owner();
function release();
```

## class MemcachedStore
`Illuminate\Cache\MemcachedStore` extends Illuminate\Cache\TaggableStore implements Illuminate\Contracts\Cache\Store, Illuminate\Contracts\Cache\LockProvider

```php
function __construct($memcached, $prefix = '');
function add($key, $value, $seconds);
function decrement($key, $value = 1);
function flush();
function forever($key, $value);
function forget($key);
function get($key);
function getMemcached();
function getPrefix();
function increment($key, $value = 1);
function lock($name, $seconds = 0, $owner = null);
function many(array $keys);
function put($key, $value, $seconds);
function putMany(array $values, $seconds);
function restoreLock($name, $owner);
function setPrefix($prefix);
function tags($names);
function touch($key, $seconds);
```

## class MemoizedStore
`Illuminate\Cache\MemoizedStore` implements Illuminate\Contracts\Cache\CanFlushLocks, Illuminate\Contracts\Cache\LockProvider, Illuminate\Contracts\Cache\Store

```php
function __construct($name, $repository);
function decrement($key, $value = 1);
function flush();
function flushLocks(): bool;
function forever($key, $value);
function forget($key);
function get($key);
function getPrefix();
function hasSeparateLockStore(): bool;
function increment($key, $value = 1);
function lock($name, $seconds = 0, $owner = null);
function many(array $keys);
function put($key, $value, $seconds);
function putMany(array $values, $seconds);
function restoreLock($name, $owner);
function touch($key, $seconds);
```

## class NoLock
`Illuminate\Cache\NoLock` extends Illuminate\Cache\Lock implements Illuminate\Contracts\Cache\Lock

```php
function __construct($name, $seconds, $owner = null);
function acquire();
function betweenBlockedAttemptsSleepFor($milliseconds);
function block($seconds, $callback = null);
function forceRelease();
function get($callback = null);
function isLocked(): bool;
function isOwnedBy($owner);
function isOwnedByCurrentProcess();
function owner();
function release();
```

## class NullStore
`Illuminate\Cache\NullStore` extends Illuminate\Cache\TaggableStore implements Illuminate\Contracts\Cache\Store, Illuminate\Contracts\Cache\CanFlushLocks, Illuminate\Contracts\Cache\LockProvider

```php
function decrement($key, $value = 1);
function flush();
function flushLocks(): bool;
function forever($key, $value);
function forget($key);
function get($key);
function getPrefix();
function hasSeparateLockStore(): bool;
function increment($key, $value = 1);
function lock($name, $seconds = 0, $owner = null);
function many(array $keys);
function put($key, $value, $seconds);
function putMany(array $values, $seconds);
function restoreLock($name, $owner);
function tags($names);
function touch($key, $seconds);
```

## class PhpRedisLock
`Illuminate\Cache\PhpRedisLock` extends Illuminate\Cache\RedisLock implements Illuminate\Contracts\Cache\Lock

```php
function __construct(Illuminate\Redis\Connections\PhpRedisConnection $redis, string $name, int $seconds, ?string $owner = null);
function acquire();
function betweenBlockedAttemptsSleepFor($milliseconds);
function block($seconds, $callback = null);
function forceRelease();
function get($callback = null);
function getConnectionName();
function isLocked(): bool;
function isOwnedBy($owner);
function isOwnedByCurrentProcess();
function owner();
function release();
```

## class RateLimiter
`Illuminate\Cache\RateLimiter`

```php
function __construct(Illuminate\Contracts\Cache\Repository $cache);
function attempt($key, $maxAttempts, Closure $callback, $decaySeconds = 60);
function attempts($key);
function availableIn($key);
function cleanRateLimiterKey($key);
function clear($key);
function decrement($key, $decaySeconds = 60, $amount = 1);
function for($name, Closure $callback);
function hit($key, $decaySeconds = 60);
function increment($key, $decaySeconds = 60, $amount = 1);
function limiter($name);
function remaining($key, $maxAttempts);
function resetAttempts($key);
function retriesLeft($key, $maxAttempts);
function tooManyAttempts($key, $maxAttempts);
```

## class RedisLock
`Illuminate\Cache\RedisLock` extends Illuminate\Cache\Lock implements Illuminate\Contracts\Cache\Lock

```php
function __construct($redis, $name, $seconds, $owner = null);
function acquire();
function betweenBlockedAttemptsSleepFor($milliseconds);
function block($seconds, $callback = null);
function forceRelease();
function get($callback = null);
function getConnectionName();
function isLocked(): bool;
function isOwnedBy($owner);
function isOwnedByCurrentProcess();
function owner();
function release();
```

## class RedisStore
`Illuminate\Cache\RedisStore` extends Illuminate\Cache\TaggableStore implements Illuminate\Contracts\Cache\Store, Illuminate\Contracts\Cache\CanFlushLocks, Illuminate\Contracts\Cache\LockProvider

```php
function __construct(Illuminate\Contracts\Redis\Factory $redis, $prefix = '', $connection = 'default', $serializableClasses = null);
function add($key, $value, $seconds);
function connection();
function decrement($key, $value = 1);
function flush();
function flushLocks(): bool;
function flushStaleTags();
function forever($key, $value);
function forget($key);
function get($key);
function getPrefix();
function getRedis();
function hasSeparateLockStore(): bool;
function increment($key, $value = 1);
function lock($name, $seconds = 0, $owner = null);
function lockConnection();
function many(array $keys);
function put($key, $value, $seconds);
function putMany(array $values, $seconds);
function restoreLock($name, $owner);
function setConnection($connection);
function setLockConnection($connection);
function setPrefix($prefix);
function tags($names);
function touch($key, $seconds);
```

## class RedisTagSet
`Illuminate\Cache\RedisTagSet` extends Illuminate\Cache\TagSet

```php
function __construct(Illuminate\Contracts\Cache\Store $store, array $names = []);
function addEntry(string $key, ?int $ttl = null, $updateWhen = null);
function entries();
function flush();
function flushStaleEntries();
function flushTag($name);
function getNames();
function getNamespace();
function reset();
function resetTag($name);
function tagId($name);
function tagKey($name);
```

## class RedisTaggedCache
`Illuminate\Cache\RedisTaggedCache` extends Illuminate\Cache\TaggedCache implements ArrayAccess, Illuminate\Contracts\Cache\Repository, Psr\SimpleCache\CacheInterface

```php
function __call($method, $parameters);
function __clone();
function __construct(Illuminate\Contracts\Cache\Store $store, Illuminate\Cache\TagSet $tags);
function add($key, $value, $ttl = null);
function array($key, $default = null): array;
function boolean($key, $default = null): bool;
function clear(): bool;
function decrement($key, $value = 1);
function delete($key): bool;
function deleteMultiple($keys): bool;
function flexible($key, $ttl, $callback, $lock = null, $alwaysDefer = false);
function float($key, $default = null): float;
function flush();
function flushLocks(): bool;
function flushStale();
function forever($key, $value);
function forget($key);
function funnel($name);
function get($key, $default = null): mixed;
function getDefaultCacheTime();
function getEventDispatcher();
function getMultiple($keys, $default = null): iterable;
function getName();
function getStore();
function getTags();
function has($key): bool;
function increment($key, $value = 1);
function integer($key, $default = null): int;
function macroCall($method, $parameters);
function many(array $keys);
function missing($key);
function offsetExists($offset): bool;
function offsetGet($offset): mixed;
function offsetSet($offset, $value): void;
function offsetUnset($offset): void;
function pull($key, $default = null);
function put($key, $value, $ttl = null);
function putMany(array $values, $ttl = null);
function putManyAlias(array $values, $seconds);
function remember($key, $ttl, Closure $callback);
function rememberForever($key, Closure $callback);
function sear($key, Closure $callback);
function set($key, $value, $ttl = null): bool;
function setDefaultCacheTime($seconds);
function setEventDispatcher(Illuminate\Contracts\Events\Dispatcher $events);
function setMultiple($values, $ttl = null): bool;
function setStore($store);
function string($key, $default = null): string;
function supportsFlushingLocks(): bool;
function supportsTags();
function taggedItemKey($key);
function tags($names);
function touch($key, $ttl);
function withoutOverlapping($key, callable $callback, $lockFor = 0, $waitFor = 10, $owner = null);
static function __callStatic($method, $parameters);
static function flushMacros();
static function handleUnserializableClassUsing(?callable $callback): void;
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
```

## class Repository
`Illuminate\Cache\Repository` implements ArrayAccess, Illuminate\Contracts\Cache\Repository, Psr\SimpleCache\CacheInterface

```php
function __call($method, $parameters);
function __clone();
function __construct(Illuminate\Contracts\Cache\Store $store, array $config = []);
function add($key, $value, $ttl = null);
function array($key, $default = null): array;
function boolean($key, $default = null): bool;
function clear(): bool;
function decrement($key, $value = 1);
function delete($key): bool;
function deleteMultiple($keys): bool;
function flexible($key, $ttl, $callback, $lock = null, $alwaysDefer = false);
function float($key, $default = null): float;
function flushLocks(): bool;
function forever($key, $value);
function forget($key);
function funnel($name);
function get($key, $default = null): mixed;
function getDefaultCacheTime();
function getEventDispatcher();
function getMultiple($keys, $default = null): iterable;
function getName();
function getStore();
function has($key): bool;
function increment($key, $value = 1);
function integer($key, $default = null): int;
function macroCall($method, $parameters);
function many(array $keys);
function missing($key);
function offsetExists($offset): bool;
function offsetGet($offset): mixed;
function offsetSet($offset, $value): void;
function offsetUnset($offset): void;
function pull($key, $default = null);
function put($key, $value, $ttl = null);
function putMany(array $values, $ttl = null);
function remember($key, $ttl, Closure $callback);
function rememberForever($key, Closure $callback);
function sear($key, Closure $callback);
function set($key, $value, $ttl = null): bool;
function setDefaultCacheTime($seconds);
function setEventDispatcher(Illuminate\Contracts\Events\Dispatcher $events);
function setMultiple($values, $ttl = null): bool;
function setStore($store);
function string($key, $default = null): string;
function supportsFlushingLocks(): bool;
function supportsTags();
function tags($names);
function touch($key, $ttl);
function withoutOverlapping($key, callable $callback, $lockFor = 0, $waitFor = 10, $owner = null);
static function __callStatic($method, $parameters);
static function flushMacros();
static function handleUnserializableClassUsing(?callable $callback): void;
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
```

## trait RetrievesMultipleKeys
`Illuminate\Cache\RetrievesMultipleKeys`

```php
function many(array $keys);
function putMany(array $values, $seconds);
```

## class SessionStore
`Illuminate\Cache\SessionStore` implements Illuminate\Contracts\Cache\Store

```php
function __construct($session, $key = '_cache');
function all();
function decrement($key, $value = 1);
function flush();
function forever($key, $value);
function forget($key);
function get($key);
function getPrefix();
function increment($key, $value = 1);
function itemKey($key);
function many(array $keys);
function put($key, $value, $seconds);
function putMany(array $values, $seconds);
function touch($key, $seconds);
```

## class StorageStore
`Illuminate\Cache\StorageStore` implements Illuminate\Contracts\Cache\Store

```php
function __construct(Illuminate\Contracts\Filesystem\Filesystem $disk, $directory = '', $prefix = '', $serializableClasses = null);
function add($key, $value, $seconds);
function decrement($key, $value = 1);
function flush();
function forever($key, $value);
function forget($key);
function get($key);
function getDirectory();
function getDisk();
function getPrefix();
function increment($key, $value = 1);
function many(array $keys);
function path($key);
function put($key, $value, $seconds);
function putMany(array $values, $seconds);
function setPrefix($prefix);
function touch($key, $seconds);
```

## class TagSet
`Illuminate\Cache\TagSet`

```php
function __construct(Illuminate\Contracts\Cache\Store $store, array $names = []);
function flush();
function flushTag($name);
function getNames();
function getNamespace();
function reset();
function resetTag($name);
function tagId($name);
function tagKey($name);
```

## class TaggableStore
`Illuminate\Cache\TaggableStore` implements Illuminate\Contracts\Cache\Store

```php
abstract function decrement($key, $value = 1);
abstract function flush();
abstract function forever($key, $value);
abstract function forget($key);
abstract function get($key);
abstract function getPrefix();
abstract function increment($key, $value = 1);
abstract function many(array $keys);
abstract function put($key, $value, $seconds);
abstract function putMany(array $values, $seconds);
abstract function touch($key, $seconds);
function tags($names);
```

## class TaggedCache
`Illuminate\Cache\TaggedCache` extends Illuminate\Cache\Repository implements Psr\SimpleCache\CacheInterface, Illuminate\Contracts\Cache\Repository, ArrayAccess

```php
function __call($method, $parameters);
function __clone();
function __construct(Illuminate\Contracts\Cache\Store $store, Illuminate\Cache\TagSet $tags);
function add($key, $value, $ttl = null);
function array($key, $default = null): array;
function boolean($key, $default = null): bool;
function clear(): bool;
function decrement($key, $value = 1);
function delete($key): bool;
function deleteMultiple($keys): bool;
function flexible($key, $ttl, $callback, $lock = null, $alwaysDefer = false);
function float($key, $default = null): float;
function flush();
function flushLocks(): bool;
function forever($key, $value);
function forget($key);
function funnel($name);
function get($key, $default = null): mixed;
function getDefaultCacheTime();
function getEventDispatcher();
function getMultiple($keys, $default = null): iterable;
function getName();
function getStore();
function getTags();
function has($key): bool;
function increment($key, $value = 1);
function integer($key, $default = null): int;
function macroCall($method, $parameters);
function many(array $keys);
function missing($key);
function offsetExists($offset): bool;
function offsetGet($offset): mixed;
function offsetSet($offset, $value): void;
function offsetUnset($offset): void;
function pull($key, $default = null);
function put($key, $value, $ttl = null);
function putMany(array $values, $ttl = null);
function putManyAlias(array $values, $seconds);
function remember($key, $ttl, Closure $callback);
function rememberForever($key, Closure $callback);
function sear($key, Closure $callback);
function set($key, $value, $ttl = null): bool;
function setDefaultCacheTime($seconds);
function setEventDispatcher(Illuminate\Contracts\Events\Dispatcher $events);
function setMultiple($values, $ttl = null): bool;
function setStore($store);
function string($key, $default = null): string;
function supportsFlushingLocks(): bool;
function supportsTags();
function taggedItemKey($key);
function tags($names);
function touch($key, $ttl);
function withoutOverlapping($key, callable $callback, $lockFor = 0, $waitFor = 10, $owner = null);
static function __callStatic($method, $parameters);
static function flushMacros();
static function handleUnserializableClassUsing(?callable $callback): void;
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
```

