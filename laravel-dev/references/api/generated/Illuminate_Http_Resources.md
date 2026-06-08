# Illuminate\Http\Resources

Version: 13.14.0

## trait CollectsResources
`Illuminate\Http\Resources\CollectsResources`

```php
function getIterator(): Traversable;
function jsonOptions();
```

## trait ConditionallyLoadsAttributes
`Illuminate\Http\Resources\ConditionallyLoadsAttributes`

```php
function unless($condition, $value, $default = ?);
function whenAggregated($relationship, $column, $aggregate, $value = null, $default = ?);
function whenCounted($relationship, $value = null, $default = ?);
function whenExistsLoaded($relationship, $value = null, $default = ?);
function whenHas($attribute, $value = null, $default = ?);
```

## trait DelegatesToResource
`Illuminate\Http\Resources\DelegatesToResource`

```php
function __call($method, $parameters);
function __get($key);
function __isset($key);
function __unset($key);
function getRouteKey();
function getRouteKeyName();
function macroCall($method, $parameters);
function offsetExists($offset): bool;
function offsetGet($offset): mixed;
function offsetSet($offset, $value): void;
function offsetUnset($offset): void;
function resolveChildRouteBinding($childType, $value, $field = null);
function resolveRouteBinding($value, $field = null);
static function __callStatic($method, $parameters);
static function flushMacros();
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
```

## class MergeValue
`Illuminate\Http\Resources\MergeValue`

```php
function __construct($data);
```

## class MissingValue
`Illuminate\Http\Resources\MissingValue` implements Illuminate\Http\Resources\PotentiallyMissing

```php
function isMissing();
```

## interface PotentiallyMissing
`Illuminate\Http\Resources\PotentiallyMissing`

```php
abstract function isMissing();
```

