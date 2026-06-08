# Illuminate\Cache\Events

Version: 13.14.0

## class CacheEvent
`Illuminate\Cache\Events\CacheEvent`

```php
function __construct($storeName, $key, array $tags = []);
function setTags($tags);
```

## class CacheFailedOver
`Illuminate\Cache\Events\CacheFailedOver`

```php
function __construct(?string $storeName, Throwable $exception);
```

## class CacheFlushFailed
`Illuminate\Cache\Events\CacheFlushFailed`

```php
function __construct($storeName, array $tags = []);
function setTags($tags);
```

## class CacheFlushed
`Illuminate\Cache\Events\CacheFlushed`

```php
function __construct($storeName, array $tags = []);
function setTags($tags);
```

## class CacheFlushing
`Illuminate\Cache\Events\CacheFlushing`

```php
function __construct($storeName, array $tags = []);
function setTags($tags);
```

## class CacheHit
`Illuminate\Cache\Events\CacheHit` extends Illuminate\Cache\Events\CacheEvent

```php
function __construct($storeName, $key, $value, array $tags = []);
function setTags($tags);
```

## class CacheLocksFlushFailed
`Illuminate\Cache\Events\CacheLocksFlushFailed`

```php
function __construct(?string $storeName);
```

## class CacheLocksFlushed
`Illuminate\Cache\Events\CacheLocksFlushed`

```php
function __construct(?string $storeName);
```

## class CacheLocksFlushing
`Illuminate\Cache\Events\CacheLocksFlushing`

```php
function __construct(?string $storeName);
```

## class CacheMissed
`Illuminate\Cache\Events\CacheMissed` extends Illuminate\Cache\Events\CacheEvent

```php
function __construct($storeName, $key, array $tags = []);
function setTags($tags);
```

## class ForgettingKey
`Illuminate\Cache\Events\ForgettingKey` extends Illuminate\Cache\Events\CacheEvent

```php
function __construct($storeName, $key, array $tags = []);
function setTags($tags);
```

## class KeyForgetFailed
`Illuminate\Cache\Events\KeyForgetFailed` extends Illuminate\Cache\Events\CacheEvent

```php
function __construct($storeName, $key, array $tags = []);
function setTags($tags);
```

## class KeyForgotten
`Illuminate\Cache\Events\KeyForgotten` extends Illuminate\Cache\Events\CacheEvent

```php
function __construct($storeName, $key, array $tags = []);
function setTags($tags);
```

## class KeyWriteFailed
`Illuminate\Cache\Events\KeyWriteFailed` extends Illuminate\Cache\Events\CacheEvent

```php
function __construct($storeName, $key, $value, $seconds = null, $tags = []);
function setTags($tags);
```

## class KeyWritten
`Illuminate\Cache\Events\KeyWritten` extends Illuminate\Cache\Events\CacheEvent

```php
function __construct($storeName, $key, $value, $seconds = null, $tags = []);
function setTags($tags);
```

## class RetrievingKey
`Illuminate\Cache\Events\RetrievingKey` extends Illuminate\Cache\Events\CacheEvent

```php
function __construct($storeName, $key, array $tags = []);
function setTags($tags);
```

## class RetrievingManyKeys
`Illuminate\Cache\Events\RetrievingManyKeys` extends Illuminate\Cache\Events\CacheEvent

```php
function __construct($storeName, $keys, array $tags = []);
function setTags($tags);
```

## class WritingKey
`Illuminate\Cache\Events\WritingKey` extends Illuminate\Cache\Events\CacheEvent

```php
function __construct($storeName, $key, $value, $seconds = null, $tags = []);
function setTags($tags);
```

## class WritingManyKeys
`Illuminate\Cache\Events\WritingManyKeys` extends Illuminate\Cache\Events\CacheEvent

```php
function __construct($storeName, $keys, $values, $seconds = null, $tags = []);
function setTags($tags);
```

