# Illuminate\Http\Resources\Json

Version: 13.14.0

## class AnonymousResourceCollection
`Illuminate\Http\Resources\Json\AnonymousResourceCollection` extends Illuminate\Http\Resources\Json\ResourceCollection implements Traversable, IteratorAggregate, Countable, Illuminate\Contracts\Routing\UrlRoutable, Illuminate\Contracts\Support\Responsable, JsonSerializable, ArrayAccess

```php
function __call($method, $parameters);
function __construct($resource, $collects);
function __get($key);
function __isset($key);
function __unset($key);
function additional(array $data);
function count(): int;
function getIterator(): Traversable;
function getRouteKey();
function getRouteKeyName();
function jsonOptions();
function jsonSerialize(): array;
function macroCall($method, $parameters);
function offsetExists($offset): bool;
function offsetGet($offset): mixed;
function offsetSet($offset, $value): void;
function offsetUnset($offset): void;
function preserveKeys(bool $value = true): static;
function preserveQuery();
function resolve($request = null);
function resolveChildRouteBinding($childType, $value, $field = null);
function resolveResourceData(Illuminate\Http\Request $request);
function resolveRouteBinding($value, $field = null);
function response($request = null);
function toArray(Illuminate\Http\Request $request);
function toAttributes(Illuminate\Http\Request $request);
function toJson($options = 0);
function toPrettyJson(int $options = 0);
function toResponse($request);
function unless($condition, $value, $default = ?);
function whenAggregated($relationship, $column, $aggregate, $value = null, $default = ?);
function whenCounted($relationship, $value = null, $default = ?);
function whenExistsLoaded($relationship, $value = null, $default = ?);
function whenHas($attribute, $value = null, $default = ?);
function with(Illuminate\Http\Request $request);
function withQuery(array $query);
function withResponse(Illuminate\Http\Request $request, Illuminate\Http\JsonResponse $response);
static function __callStatic($method, $parameters);
static function collection($resource);
static function flushMacros();
static function flushState();
static function hasMacro($name);
static function macro($name, $macro);
static function make(...$parameters);
static function mixin($mixin, $replace = true);
static function withoutWrapping();
static function wrap($value);
```

## class JsonResource
`Illuminate\Http\Resources\Json\JsonResource` implements ArrayAccess, JsonSerializable, Illuminate\Contracts\Support\Responsable, Illuminate\Contracts\Routing\UrlRoutable

```php
function __call($method, $parameters);
function __construct($resource);
function __get($key);
function __isset($key);
function __unset($key);
function additional(array $data);
function getRouteKey();
function getRouteKeyName();
function jsonOptions();
function jsonSerialize(): array;
function macroCall($method, $parameters);
function offsetExists($offset): bool;
function offsetGet($offset): mixed;
function offsetSet($offset, $value): void;
function offsetUnset($offset): void;
function resolve($request = null);
function resolveChildRouteBinding($childType, $value, $field = null);
function resolveResourceData(Illuminate\Http\Request $request);
function resolveRouteBinding($value, $field = null);
function response($request = null);
function toArray(Illuminate\Http\Request $request);
function toAttributes(Illuminate\Http\Request $request);
function toJson($options = 0);
function toPrettyJson(int $options = 0);
function toResponse($request);
function unless($condition, $value, $default = ?);
function whenAggregated($relationship, $column, $aggregate, $value = null, $default = ?);
function whenCounted($relationship, $value = null, $default = ?);
function whenExistsLoaded($relationship, $value = null, $default = ?);
function whenHas($attribute, $value = null, $default = ?);
function with(Illuminate\Http\Request $request);
function withResponse(Illuminate\Http\Request $request, Illuminate\Http\JsonResponse $response);
static function __callStatic($method, $parameters);
static function collection($resource);
static function flushMacros();
static function flushState();
static function hasMacro($name);
static function macro($name, $macro);
static function make(...$parameters);
static function mixin($mixin, $replace = true);
static function withoutWrapping();
static function wrap($value);
```

## class PaginatedResourceResponse
`Illuminate\Http\Resources\Json\PaginatedResourceResponse` extends Illuminate\Http\Resources\Json\ResourceResponse implements Illuminate\Contracts\Support\Responsable

```php
function __construct($resource);
function toResponse($request);
```

## class ResourceCollection
`Illuminate\Http\Resources\Json\ResourceCollection` extends Illuminate\Http\Resources\Json\JsonResource implements ArrayAccess, JsonSerializable, Illuminate\Contracts\Support\Responsable, Illuminate\Contracts\Routing\UrlRoutable, Countable, IteratorAggregate, Traversable

```php
function __call($method, $parameters);
function __construct($resource);
function __get($key);
function __isset($key);
function __unset($key);
function additional(array $data);
function count(): int;
function getIterator(): Traversable;
function getRouteKey();
function getRouteKeyName();
function jsonOptions();
function jsonSerialize(): array;
function macroCall($method, $parameters);
function offsetExists($offset): bool;
function offsetGet($offset): mixed;
function offsetSet($offset, $value): void;
function offsetUnset($offset): void;
function preserveQuery();
function resolve($request = null);
function resolveChildRouteBinding($childType, $value, $field = null);
function resolveResourceData(Illuminate\Http\Request $request);
function resolveRouteBinding($value, $field = null);
function response($request = null);
function toArray(Illuminate\Http\Request $request);
function toAttributes(Illuminate\Http\Request $request);
function toJson($options = 0);
function toPrettyJson(int $options = 0);
function toResponse($request);
function unless($condition, $value, $default = ?);
function whenAggregated($relationship, $column, $aggregate, $value = null, $default = ?);
function whenCounted($relationship, $value = null, $default = ?);
function whenExistsLoaded($relationship, $value = null, $default = ?);
function whenHas($attribute, $value = null, $default = ?);
function with(Illuminate\Http\Request $request);
function withQuery(array $query);
function withResponse(Illuminate\Http\Request $request, Illuminate\Http\JsonResponse $response);
static function __callStatic($method, $parameters);
static function collection($resource);
static function flushMacros();
static function flushState();
static function hasMacro($name);
static function macro($name, $macro);
static function make(...$parameters);
static function mixin($mixin, $replace = true);
static function withoutWrapping();
static function wrap($value);
```

## class ResourceResponse
`Illuminate\Http\Resources\Json\ResourceResponse` implements Illuminate\Contracts\Support\Responsable

```php
function __construct($resource);
function toResponse($request);
```

