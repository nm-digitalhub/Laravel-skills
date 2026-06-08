# Illuminate\Support\Traits

Version: 13.14.0

## trait CapsuleManagerTrait
`Illuminate\Support\Traits\CapsuleManagerTrait`

```php
function getContainer();
function setAsGlobal();
function setContainer(Illuminate\Contracts\Container\Container $container);
```

## trait Conditionable
`Illuminate\Support\Traits\Conditionable`

```php
function unless($value = null, ?callable $callback = null, ?callable $default = null);
function when($value = null, ?callable $callback = null, ?callable $default = null);
```

## trait Dumpable
`Illuminate\Support\Traits\Dumpable`

```php
function dd(...$args);
function dump(...$args);
```

## trait EnumeratesValues
`Illuminate\Support\Traits\EnumeratesValues`

```php
function __get($key);
function __toString(): string;
function average($callback = null);
function avg($callback = null);
function collect();
function dd(...$args);
function dump(...$args);
function each(callable $callback);
function eachSpread(callable $callback);
function ensure($type);
function escapeWhenCastingToString($escape = true);
function every($key, $operator = null, $value = null);
function firstWhere($key, $operator = null, $value = null);
function flatMap(callable $callback);
function forPage($page, $perPage);
function getCachingIterator($flags = 1);
function hasMany($key = null, $operator = null, $value = null): bool;
function isNotEmpty();
function jsonSerialize(): array;
function mapInto($class);
function mapSpread(callable $callback);
function mapToGroups(callable $callback);
function max($callback = null);
function min($callback = null);
function partition($key, $operator = null, $value = null);
function percentage(callable $callback, int $precision = 2);
function pipe(callable $callback);
function pipeInto($class);
function pipeThrough($callbacks);
function reduce(callable $callback, $initial = null);
function reduceSpread(callable $callback, ...$initial);
function reduceWithKeys(callable $callback, $initial = null);
function reject($callback = true);
function some($key, $operator = null, $value = null);
function sum($callback = null);
function tap(callable $callback);
function toArray();
function toJson($options = 0);
function toPrettyJson(int $options = 0);
function unique($key = null, $strict = false);
function uniqueStrict($key = null);
function unless($value = null, ?callable $callback = null, ?callable $default = null);
function unlessEmpty(callable $callback, ?callable $default = null);
function unlessNotEmpty(callable $callback, ?callable $default = null);
function value($key, $default = null);
function when($value = null, ?callable $callback = null, ?callable $default = null);
function whenEmpty(callable $callback, ?callable $default = null);
function whenNotEmpty(callable $callback, ?callable $default = null);
function where($key, $operator = null, $value = null);
function whereBetween($key, $values);
function whereIn($key, $values, $strict = false);
function whereInStrict($key, $values);
function whereInstanceOf($type);
function whereNotBetween($key, $values);
function whereNotIn($key, $values, $strict = false);
function whereNotInStrict($key, $values);
function whereNotNull($key = null);
function whereNull($key = null);
function whereStrict($key, $value);
static function empty(...$args);
static function fromJson($json, $depth = 512, $flags = 0, ...$args);
static function make($items = [], ...$args);
static function proxy($method);
static function times($number, ?callable $callback = null, ...$args);
static function unwrap($value);
static function wrap($value, ...$args);
```

## trait ForwardsCalls
`Illuminate\Support\Traits\ForwardsCalls`

## trait InteractsWithData
`Illuminate\Support\Traits\InteractsWithData`

```php
abstract function all($keys = null);
function anyFilled($keys);
function array($key = null);
function boolean($key = null, $default = false);
function clamp($key, $min, $max, $default = 0);
function collect($key = null);
function date($key, $format = null, $tz = null);
function enum($key, $enumClass, $default = null);
function enums($key, $enumClass);
function except($keys);
function exists($key);
function filled($key);
function float($key, $default = 0);
function has($key);
function hasAny($keys);
function integer($key, $default = 0);
function interval($key, $unit = null);
function isNotFilled($key);
function missing($key);
function only($keys);
function str($key, $default = null);
function string($key, $default = null);
function whenFilled($key, callable $callback, ?callable $default = null);
function whenHas($key, callable $callback, ?callable $default = null);
function whenMissing($key, callable $callback, ?callable $default = null);
```

## trait Localizable
`Illuminate\Support\Traits\Localizable`

```php
function withLocale($locale, $callback);
```

## trait Macroable
`Illuminate\Support\Traits\Macroable`

```php
function __call($method, $parameters);
static function __callStatic($method, $parameters);
static function flushMacros();
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
```

## trait ReadsClassAttributes
`Illuminate\Support\Traits\ReadsClassAttributes`

## trait ReflectsClosures
`Illuminate\Support\Traits\ReflectsClosures`

## trait Tappable
`Illuminate\Support\Traits\Tappable`

```php
function tap($callback = null);
```

## trait TransformsToResourceCollection
`Illuminate\Support\Traits\TransformsToResourceCollection`

```php
function toResourceCollection(?string $resourceClass = null): Illuminate\Http\Resources\Json\ResourceCollection;
```

