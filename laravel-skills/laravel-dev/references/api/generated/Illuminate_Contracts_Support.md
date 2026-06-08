# Illuminate\Contracts\Support

Version: 13.14.0

## interface Arrayable
`Illuminate\Contracts\Support\Arrayable`

```php
abstract function toArray();
```

## interface CanBeEscapedWhenCastToString
`Illuminate\Contracts\Support\CanBeEscapedWhenCastToString`

```php
abstract function escapeWhenCastingToString($escape = true);
```

## interface DeferrableProvider
`Illuminate\Contracts\Support\DeferrableProvider`

```php
abstract function provides();
```

## interface DeferringDisplayableValue
`Illuminate\Contracts\Support\DeferringDisplayableValue`

```php
abstract function resolveDisplayableValue();
```

## interface HasOnceHash
`Illuminate\Contracts\Support\HasOnceHash`

```php
abstract function onceHash();
```

## interface Htmlable
`Illuminate\Contracts\Support\Htmlable`

```php
abstract function toHtml();
```

## interface Jsonable
`Illuminate\Contracts\Support\Jsonable`

```php
abstract function toJson($options = 0);
```

## interface MessageBag
`Illuminate\Contracts\Support\MessageBag` implements Illuminate\Contracts\Support\Arrayable, Countable

```php
abstract function add($key, $message);
abstract function all($format = null);
abstract function count();
abstract function first($key = null, $format = null);
abstract function forget($key);
abstract function get($key, $format = null);
abstract function getFormat();
abstract function getMessages();
abstract function has($key);
abstract function isEmpty();
abstract function isNotEmpty();
abstract function keys();
abstract function merge($messages);
abstract function setFormat($format = ':message');
abstract function toArray();
```

## interface MessageProvider
`Illuminate\Contracts\Support\MessageProvider`

```php
abstract function getMessageBag();
```

## interface Renderable
`Illuminate\Contracts\Support\Renderable`

```php
abstract function render();
```

## interface Responsable
`Illuminate\Contracts\Support\Responsable`

```php
abstract function toResponse($request);
```

## interface ValidatedData
`Illuminate\Contracts\Support\ValidatedData` implements Illuminate\Contracts\Support\Arrayable, ArrayAccess, IteratorAggregate, Traversable

```php
abstract function getIterator();
abstract function offsetExists(mixed $offset);
abstract function offsetGet(mixed $offset);
abstract function offsetSet(mixed $offset, mixed $value);
abstract function offsetUnset(mixed $offset);
abstract function toArray();
```

