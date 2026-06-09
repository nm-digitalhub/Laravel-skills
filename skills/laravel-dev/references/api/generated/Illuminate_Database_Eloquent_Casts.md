# Illuminate\Database\Eloquent\Casts

Version: 13.14.0

## class ArrayObject
`Illuminate\Database\Eloquent\Casts\ArrayObject` extends ArrayObject implements IteratorAggregate, Traversable, ArrayAccess, Serializable, Countable, Illuminate\Contracts\Support\Arrayable, JsonSerializable

```php
function __construct(object|array $array = [], int $flags = 0, string $iteratorClass = 'ArrayIterator');
function __debugInfo();
function __serialize();
function __unserialize(array $data);
function append(mixed $value);
function asort(int $flags = 0);
function collect();
function count();
function exchangeArray(object|array $array);
function getArrayCopy();
function getFlags();
function getIterator();
function getIteratorClass();
function jsonSerialize(): array;
function ksort(int $flags = 0);
function natcasesort();
function natsort();
function offsetExists(mixed $key);
function offsetGet(mixed $key);
function offsetSet(mixed $key, mixed $value);
function offsetUnset(mixed $key);
function serialize();
function setFlags(int $flags);
function setIteratorClass(string $iteratorClass);
function toArray();
function uasort(callable $callback);
function uksort(callable $callback);
function unserialize(string $data);
```

## class AsArrayObject
`Illuminate\Database\Eloquent\Casts\AsArrayObject` implements Illuminate\Contracts\Database\Eloquent\Castable

```php
static function castUsing(array $arguments);
```

## class AsBinary
`Illuminate\Database\Eloquent\Casts\AsBinary` implements Illuminate\Contracts\Database\Eloquent\Castable

```php
static function castUsing(array $arguments);
static function of(string $format): string;
static function ulid(): string;
static function uuid(): string;
```

## class AsCollection
`Illuminate\Database\Eloquent\Casts\AsCollection` implements Illuminate\Contracts\Database\Eloquent\Castable

```php
static function castUsing(array $arguments);
static function of($map);
static function using($class, $map = null);
```

## class AsEncryptedArrayObject
`Illuminate\Database\Eloquent\Casts\AsEncryptedArrayObject` implements Illuminate\Contracts\Database\Eloquent\Castable

```php
static function castUsing(array $arguments);
```

## class AsEncryptedCollection
`Illuminate\Database\Eloquent\Casts\AsEncryptedCollection` implements Illuminate\Contracts\Database\Eloquent\Castable

```php
static function castUsing(array $arguments);
static function of($map);
static function using($class, $map = null);
```

## class AsEnumArrayObject
`Illuminate\Database\Eloquent\Casts\AsEnumArrayObject` implements Illuminate\Contracts\Database\Eloquent\Castable

```php
static function castUsing(array $arguments);
static function of($class);
```

## class AsEnumCollection
`Illuminate\Database\Eloquent\Casts\AsEnumCollection` implements Illuminate\Contracts\Database\Eloquent\Castable

```php
static function castUsing(array $arguments);
static function of($class);
```

## class AsFluent
`Illuminate\Database\Eloquent\Casts\AsFluent` implements Illuminate\Contracts\Database\Eloquent\Castable

```php
static function castUsing(array $arguments);
```

## class AsHtmlString
`Illuminate\Database\Eloquent\Casts\AsHtmlString` implements Illuminate\Contracts\Database\Eloquent\Castable

```php
static function castUsing(array $arguments);
```

## class AsStringable
`Illuminate\Database\Eloquent\Casts\AsStringable` implements Illuminate\Contracts\Database\Eloquent\Castable

```php
static function castUsing(array $arguments);
```

## class AsUri
`Illuminate\Database\Eloquent\Casts\AsUri` implements Illuminate\Contracts\Database\Eloquent\Castable

```php
static function castUsing(array $arguments);
```

## class Attribute
`Illuminate\Database\Eloquent\Casts\Attribute`

```php
function __construct(?callable $get = null, ?callable $set = null);
function shouldCache();
function withoutObjectCaching();
static function get(callable $get);
static function make(?callable $get = null, ?callable $set = null): static;
static function set(callable $set);
```

## class Json
`Illuminate\Database\Eloquent\Casts\Json`

```php
static function decode(mixed $value, ?bool $associative = true): mixed;
static function decodeUsing(?callable $decoder): void;
static function encode(mixed $value, int $flags = 0): mixed;
static function encodeUsing(?callable $encoder): void;
```

