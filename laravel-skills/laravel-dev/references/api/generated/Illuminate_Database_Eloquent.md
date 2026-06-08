# Illuminate\Database\Eloquent

Version: 13.14.0

## class BroadcastableModelEventOccurred
`Illuminate\Database\Eloquent\BroadcastableModelEventOccurred` implements Illuminate\Contracts\Broadcasting\ShouldBroadcast

```php
function __construct($model, $event);
function __serialize();
function __unserialize(array $values);
function broadcastAs();
function broadcastOn();
function broadcastToEveryone();
function broadcastWith();
function dontBroadcastToCurrentUser();
function event();
function onChannels(array $channels);
function restoreModel($value);
function shouldBroadcastNow();
```

## trait BroadcastsEvents
`Illuminate\Database\Eloquent\BroadcastsEvents`

```php
function broadcastAfterCommit();
function broadcastConnection();
function broadcastCreated($channels = null);
function broadcastDeleted($channels = null);
function broadcastOn($event);
function broadcastQueue();
function broadcastRestored($channels = null);
function broadcastTrashed($channels = null);
function broadcastUpdated($channels = null);
function newBroadcastableModelEvent($event);
static function bootBroadcastsEvents();
```

## trait BroadcastsEventsAfterCommit
`Illuminate\Database\Eloquent\BroadcastsEventsAfterCommit`

```php
function broadcastAfterCommit();
function broadcastConnection();
function broadcastCreated($channels = null);
function broadcastDeleted($channels = null);
function broadcastOn($event);
function broadcastQueue();
function broadcastRestored($channels = null);
function broadcastTrashed($channels = null);
function broadcastUpdated($channels = null);
function newBroadcastableModelEvent($event);
static function bootBroadcastsEvents();
```

## class Builder
`Illuminate\Database\Eloquent\Builder` implements Illuminate\Contracts\Database\Eloquent\Builder, Illuminate\Contracts\Database\Query\Builder

```php
function __call($method, $parameters);
function __clone();
function __construct(Illuminate\Database\Query\Builder $query);
function __get($key);
function afterQuery(Closure $callback);
function applyAfterQueryCallbacks($result);
function applyScopes();
function baseSole($columns = []);
function chunk($count, callable $callback);
function chunkById($count, callable $callback, $column = null, $alias = null);
function chunkByIdDesc($count, callable $callback, $column = null, $alias = null);
function chunkMap(callable $callback, $count = 1000);
function clone();
function create(array $attributes = []);
function createOrFirst(array $attributes = [], Closure|array $values = []);
function createQuietly(array $attributes = []);
function cursor();
function cursorPaginate($perPage = null, $columns = [], $cursorName = 'cursor', $cursor = null);
function decrement($column, $amount = 1, array $extra = []);
function decrementEach(array $columns, array $extra = []);
function delete();
function doesntHave($relation, $boolean = 'and', ?Closure $callback = null);
function doesntHaveMorph($relation, $types, $boolean = 'and', ?Closure $callback = null);
function each(callable $callback, $count = 1000);
function eachById(callable $callback, $count = 1000, $column = null, $alias = null);
function eagerLoadRelations(array $models);
function except($models);
function fillAndInsert(array $values);
function fillAndInsertGetId(array $values);
function fillAndInsertOrIgnore(array $values);
function fillForInsert(array $values);
function find($id, $columns = []);
function findMany($ids, $columns = []);
function findOr($id, $columns = [], ?Closure $callback = null);
function findOrFail($id, $columns = []);
function findOrNew($id, $columns = []);
function findSole($id, $columns = []);
function first($columns = []);
function firstOr($columns = [], ?Closure $callback = null);
function firstOrCreate(array $attributes = [], Closure|array $values = []);
function firstOrFail($columns = []);
function firstOrNew(array $attributes = [], Closure|array $values = []);
function firstWhere($column, $operator = null, $value = null, $boolean = 'and');
function forceCreate(array $attributes);
function forceCreateQuietly(array $attributes = []);
function forceDelete();
function fromQuery($query, $bindings = []);
function get($columns = []);
function getEagerLoads();
function getLimit();
function getMacro($name);
function getModel();
function getModels($columns = []);
function getOffset();
function getQuery();
function getRelation($name);
function has($relation, $operator = '>=', $count = 1, $boolean = 'and', ?Closure $callback = null);
function hasMacro($name);
function hasMorph($relation, $types, $operator = '>=', $count = 1, $boolean = 'and', ?Closure $callback = null);
function hasNamedScope($scope);
function hydrate(array $items);
function increment($column, $amount = 1, array $extra = []);
function incrementEach(array $columns, array $extra = []);
function incrementOrCreate(array $attributes, string $column = 'count', $default = 1, $step = 1, array $extra = []);
function latest($column = null);
function lazy($chunkSize = 1000);
function lazyById($chunkSize = 1000, $column = null, $alias = null);
function lazyByIdDesc($chunkSize = 1000, $column = null, $alias = null);
function make(array $attributes = []);
function mergeConstraintsFrom(Illuminate\Database\Eloquent\Builder $from);
function newModelInstance($attributes = []);
function oldest($column = null);
function onClone(Closure $callback);
function onDelete(Closure $callback);
function orDoesntHave($relation);
function orDoesntHaveMorph($relation, $types);
function orHas($relation, $operator = '>=', $count = 1);
function orHasMorph($relation, $types, $operator = '>=', $count = 1);
function orWhere($column, $operator = null, $value = null);
function orWhereAttachedTo($related, $relationshipName = null);
function orWhereBelongsTo($related, $relationshipName = null);
function orWhereDoesntHave($relation, ?Closure $callback = null);
function orWhereDoesntHaveMorph($relation, $types, ?Closure $callback = null);
function orWhereDoesntHaveRelation($relation, $column, $operator = null, $value = null);
function orWhereHas($relation, ?Closure $callback = null, $operator = '>=', $count = 1);
function orWhereHasMorph($relation, $types, ?Closure $callback = null, $operator = '>=', $count = 1);
function orWhereMorphDoesntHaveRelation($relation, $types, $column, $operator = null, $value = null);
function orWhereMorphRelation($relation, $types, $column, $operator = null, $value = null);
function orWhereMorphedTo($relation, $model);
function orWhereNot($column, $operator = null, $value = null);
function orWhereNotMorphedTo($relation, $model);
function orWhereRelation($relation, $column, $operator = null, $value = null);
function orderedChunkById($count, callable $callback, $column = null, $alias = null, $descending = false);
function paginate($perPage = null, $columns = [], $pageName = 'page', $page = null, $total = null);
function pipe($callback);
function pluck($column, $key = null);
function qualifyColumn($column);
function qualifyColumns($columns);
function removedScopes();
function scopes($scopes);
function setEagerLoads(array $eagerLoad);
function setModel(Illuminate\Database\Eloquent\Model $model);
function setQuery($query);
function simplePaginate($perPage = null, $columns = [], $pageName = 'page', $page = null);
function sole($columns = []);
function soleValue($column);
function tap($callback);
function toBase();
function touch($column = null);
function unless($value = null, ?callable $callback = null, ?callable $default = null);
function update(array $values);
function updateOrCreate(array $attributes, Closure|array $values = []);
function upsert(array $values, $uniqueBy, $update = null);
function value($column);
function valueOrFail($column);
function when($value = null, ?callable $callback = null, ?callable $default = null);
function where($column, $operator = null, $value = null, $boolean = 'and');
function whereAttachedTo($related, $relationshipName = null, $boolean = 'and');
function whereBelongsTo($related, $relationshipName = null, $boolean = 'and');
function whereDoesntHave($relation, ?Closure $callback = null);
function whereDoesntHaveMorph($relation, $types, ?Closure $callback = null);
function whereDoesntHaveRelation($relation, $column, $operator = null, $value = null);
function whereHas($relation, ?Closure $callback = null, $operator = '>=', $count = 1);
function whereHasMorph($relation, $types, ?Closure $callback = null, $operator = '>=', $count = 1);
function whereKey($id);
function whereKeyNot($id);
function whereMorphDoesntHaveRelation($relation, $types, $column, $operator = null, $value = null);
function whereMorphRelation($relation, $types, $column, $operator = null, $value = null);
function whereMorphedTo($relation, $model, $boolean = 'and');
function whereNot($column, $operator = null, $value = null, $boolean = 'and');
function whereNotMorphedTo($relation, $model, $boolean = 'and');
function whereRelation($relation, $column, $operator = null, $value = null);
function with($relations, $callback = null);
function withAggregate($relations, $column, $function = null);
function withAttributes(Illuminate\Contracts\Database\Query\Expression|array|string $attributes, $value = null, $asConditions = true);
function withAvg($relation, $column);
function withCasts($casts);
function withCount($relations);
function withExists($relation);
function withGlobalScope($identifier, $scope);
function withMax($relation, $column);
function withMin($relation, $column);
function withOnly($relations);
function withSavepointIfNeeded(Closure $scope): mixed;
function withSum($relation, $column);
function withWhereHas($relation, ?Closure $callback = null, $operator = '>=', $count = 1);
function withWhereRelation($relation, $column, $operator = null, $value = null);
function without($relations);
function withoutEagerLoad(array $relations);
function withoutEagerLoads();
function withoutGlobalScope($scope);
function withoutGlobalScopes(?array $scopes = null);
function withoutGlobalScopesExcept(array $scopes = []);
static function __callStatic($method, $parameters);
static function getGlobalMacro($name);
static function hasGlobalMacro($name);
```

## class Collection
`Illuminate\Database\Eloquent\Collection` extends Illuminate\Support\Collection implements ArrayAccess, Illuminate\Contracts\Support\CanBeEscapedWhenCastToString, Illuminate\Support\Enumerable, Traversable, Stringable, JsonSerializable, Illuminate\Contracts\Support\Jsonable, IteratorAggregate, Countable, Illuminate\Contracts\Support\Arrayable, Illuminate\Contracts\Queue\QueueableCollection

```php
function __call($method, $parameters);
function __construct($items = []);
function __get($key);
function __toString(): string;
function add($item);
function after($value, $strict = false);
function all();
function append($attributes);
function average($callback = null);
function avg($callback = null);
function before($value, $strict = false);
function chunk($size, $preserveKeys = true);
function chunkWhile(callable $callback);
function collapse();
function collapseWithKeys();
function collect();
function combine($values);
function concat($source);
function contains($key, $operator = null, $value = null);
function containsManyItems(?callable $callback = null): bool;
function containsOneItem(?callable $callback = null): bool;
function containsStrict($key, $value = null);
function count(): int;
function countBy($countBy = null);
function crossJoin(...$lists);
function dd(...$args);
function diff($items);
function diffAssoc($items);
function diffAssocUsing($items, callable $callback);
function diffKeys($items);
function diffKeysUsing($items, callable $callback);
function diffUsing($items, callable $callback);
function doesntContain($key, $operator = null, $value = null);
function doesntContainStrict($key, $operator = null, $value = null);
function dot($depth = INF);
function dump(...$args);
function duplicates($callback = null, $strict = false);
function duplicatesStrict($callback = null);
function each(callable $callback);
function eachSpread(callable $callback);
function ensure($type);
function escapeWhenCastingToString($escape = true);
function every($key, $operator = null, $value = null);
function except($keys);
function filter(?callable $callback = null);
function find($key, $default = null);
function findOrFail($key);
function first(?callable $callback = null, $default = null);
function firstOrFail($key = null, $operator = null, $value = null);
function firstWhere($key, $operator = null, $value = null);
function flatMap(callable $callback);
function flatten($depth = INF);
function flip();
function forPage($page, $perPage);
function forget($keys);
function fresh($with = []);
function get($key, $default = null);
function getCachingIterator($flags = 1);
function getDictionary($items = null);
function getIterator(): Traversable;
function getOrPut($key, $value);
function getQueueableClass();
function getQueueableConnection();
function getQueueableIds();
function getQueueableRelations();
function groupBy($groupBy, $preserveKeys = false);
function has($key);
function hasAny($key);
function hasMany($key = null, $operator = null, $value = null): bool;
function hasSole($key = null, $operator = null, $value = null): bool;
function implode($value, $glue = null);
function intersect($items);
function intersectAssoc($items);
function intersectAssocUsing($items, callable $callback);
function intersectByKeys($items);
function intersectUsing($items, callable $callback);
function isEmpty();
function isNotEmpty();
function join($glue, $finalGlue = '');
function jsonSerialize(): array;
function keyBy($keyBy);
function keys();
function last(?callable $callback = null, $default = null);
function lazy();
function load($relations);
function loadAggregate($relations, $column, $function = null);
function loadAvg($relations, $column);
function loadCount($relations);
function loadExists($relations);
function loadMax($relations, $column);
function loadMin($relations, $column);
function loadMissing($relations);
function loadMissingRelationshipChain(array $tuples);
function loadMorph($relation, $relations);
function loadMorphCount($relation, $relations);
function loadSum($relations, $column);
function makeHidden($attributes);
function makeVisible($attributes);
function map(callable $callback);
function mapInto($class);
function mapSpread(callable $callback);
function mapToDictionary(callable $callback);
function mapToGroups(callable $callback);
function mapWithKeys(callable $callback);
function max($callback = null);
function median($key = null);
function merge($items);
function mergeHidden($attributes);
function mergeRecursive($items);
function mergeVisible($attributes);
function min($callback = null);
function mode($key = null);
function modelKeys();
function multiply(int $multiplier);
function nth($step, $offset = 0);
function offsetExists($offset): bool;
function offsetGet($offset): mixed;
function offsetSet($offset, $value): void;
function offsetUnset($offset): void;
function only($keys);
function pad($size, $value);
function partition($key, $operator = null, $value = null);
function percentage(callable $callback, int $precision = 2);
function pipe(callable $callback);
function pipeInto($class);
function pipeThrough($callbacks);
function pluck($value, $key = null);
function pop($count = 1);
function prepend($value, $key = null);
function pull($key, $default = null);
function push(...$values);
function put($key, $value);
function random($number = null, $preserveKeys = false);
function reduce(callable $callback, $initial = null);
function reduceSpread(callable $callback, ...$initial);
function reduceWithKeys(callable $callback, $initial = null);
function reject($callback = true);
function replace($items);
function replaceRecursive($items);
function reverse();
function search($value, $strict = false);
function select($keys);
function setAppends(array $appends);
function setHidden($hidden);
function setVisible($visible);
function shift($count = 1);
function shuffle();
function skip($count);
function skipUntil($value);
function skipWhile($value);
function slice($offset, $length = null);
function sliding($size = 2, $step = 1);
function sole($key = null, $operator = null, $value = null);
function some($key, $operator = null, $value = null);
function sort($callback = null);
function sortBy($callback, $options = 0, $descending = false);
function sortByDesc($callback, $options = 0);
function sortDesc($options = 0);
function sortKeys($options = 0, $descending = false);
function sortKeysDesc($options = 0);
function sortKeysUsing(callable $callback);
function splice($offset, $length = null, $replacement = []);
function split($numberOfGroups);
function splitIn($numberOfGroups);
function sum($callback = null);
function take($limit);
function takeUntil($value);
function takeWhile($value);
function tap(callable $callback);
function toArray();
function toBase();
function toJson($options = 0);
function toPrettyJson(int $options = 0);
function toQuery();
function toResourceCollection(?string $resourceClass = null): Illuminate\Http\Resources\Json\ResourceCollection;
function transform(callable $callback);
function undot();
function union($items);
function unique($key = null, $strict = false);
function uniqueStrict($key = null);
function unless($value = null, ?callable $callback = null, ?callable $default = null);
function unlessEmpty(callable $callback, ?callable $default = null);
function unlessNotEmpty(callable $callback, ?callable $default = null);
function unshift(...$values);
function value($key, $default = null);
function values();
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
function withRelationshipAutoloading();
function withoutAppends();
function zip($items);
static function __callStatic($method, $parameters);
static function empty(...$args);
static function flushMacros();
static function fromJson($json, $depth = 512, $flags = 0, ...$args);
static function hasMacro($name);
static function macro($name, $macro);
static function make($items = [], ...$args);
static function mixin($mixin, $replace = true);
static function proxy($method);
static function range($from, $to, $step = 1, ...$args);
static function times($number, ?callable $callback = null, ...$args);
static function unwrap($value);
static function wrap($value, ...$args);
```

## trait HasBuilder
`Illuminate\Database\Eloquent\HasBuilder`

```php
function newEloquentBuilder($query);
function newModelQuery();
function newQuery();
function newQueryForRestoration($ids);
function newQueryWithoutRelationships();
function newQueryWithoutScope($scope);
function newQueryWithoutScopes();
static function on($connection = null);
static function onWriteConnection();
static function query();
static function with($relations);
```

## trait HasCollection
`Illuminate\Database\Eloquent\HasCollection`

```php
function newCollection(array $models = []);
function resolveCollectionFromAttribute();
```

## class HigherOrderBuilderProxy
`Illuminate\Database\Eloquent\HigherOrderBuilderProxy`

```php
function __call($method, $parameters);
function __construct(Illuminate\Database\Eloquent\Builder $builder, $method);
```

## class InvalidCastException
`Illuminate\Database\Eloquent\InvalidCastException` extends RuntimeException implements Stringable, Throwable

```php
final function getCode();
final function getFile(): string;
final function getLine(): int;
final function getMessage(): string;
final function getPrevious(): ?Throwable;
final function getTrace(): array;
final function getTraceAsString(): string;
function __construct($model, $column, $castType);
function __toString(): string;
function __wakeup();
```

## class JsonEncodingException
`Illuminate\Database\Eloquent\JsonEncodingException` extends RuntimeException implements Stringable, Throwable

```php
final function getCode();
final function getFile(): string;
final function getLine(): int;
final function getMessage(): string;
final function getPrevious(): ?Throwable;
final function getTrace(): array;
final function getTraceAsString(): string;
function __construct(string $message = '', int $code = 0, ?Throwable $previous = null);
function __toString(): string;
function __wakeup();
static function forAttribute($model, $key, $message);
static function forModel($model, $message);
static function forResource($resource, $message);
```

## class MassAssignmentException
`Illuminate\Database\Eloquent\MassAssignmentException` extends RuntimeException implements Stringable, Throwable

```php
final function getCode();
final function getFile(): string;
final function getLine(): int;
final function getMessage(): string;
final function getPrevious(): ?Throwable;
final function getTrace(): array;
final function getTraceAsString(): string;
function __construct(string $message = '', int $code = 0, ?Throwable $previous = null);
function __toString(): string;
function __wakeup();
```

## trait MassPrunable
`Illuminate\Database\Eloquent\MassPrunable`

```php
function prunable();
function pruneAll(int $chunkSize = 1000);
```

## class MissingAttributeException
`Illuminate\Database\Eloquent\MissingAttributeException` extends OutOfBoundsException implements Throwable, Stringable

```php
final function getCode();
final function getFile(): string;
final function getLine(): int;
final function getMessage(): string;
final function getPrevious(): ?Throwable;
final function getTrace(): array;
final function getTraceAsString(): string;
function __construct($model, $key);
function __toString(): string;
function __wakeup();
```

## class Model
`Illuminate\Database\Eloquent\Model` implements Illuminate\Contracts\Support\Arrayable, ArrayAccess, Illuminate\Contracts\Support\CanBeEscapedWhenCastToString, Illuminate\Contracts\Broadcasting\HasBroadcastChannel, Illuminate\Contracts\Support\Jsonable, JsonSerializable, Illuminate\Contracts\Queue\QueueableEntity, Stringable, Illuminate\Contracts\Routing\UrlRoutable

```php
function __call($method, $parameters);
function __construct(array $attributes = []);
function __get($key);
function __isset($key);
function __set($key, $value);
function __sleep();
function __toString(): string;
function __unset($key);
function __wakeup();
function addObservableEvents($observables);
function append($attributes);
function attributesToArray();
function autoloadRelationsUsing(Closure $callback, $context = null);
function belongsTo($related, $foreignKey = null, $ownerKey = null, $relation = null);
function belongsToMany($related, $table = null, $foreignPivotKey = null, $relatedPivotKey = null, $parentKey = null, $relatedKey = null, $relation = null);
function broadcastChannel();
function broadcastChannelRoute();
function callNamedScope($scope, array $parameters = []);
function delete();
function deleteOrFail();
function deleteQuietly();
function discardChanges();
function dispatchesEvents();
function escapeWhenCastingToString($escape = true);
function except($attributes);
function fill(array $attributes);
function fillJsonAttribute($key, $value);
function fillable(array $fillable);
function forceDelete();
function forceFill(array $attributes);
function fresh($with = []);
function freshTimestamp();
function freshTimestampString();
function fromDateTime($value);
function fromEncryptedString($value);
function fromFloat($value);
function fromJson($value, $asObject = false);
function getAppends();
function getAttribute($key);
function getAttributeValue($key);
function getAttributes();
function getCasts();
function getChanges();
function getConnection();
function getConnectionName();
function getCreatedAtColumn();
function getDateFormat();
function getDates();
function getDirty();
function getFillable();
function getForeignKey();
function getGlobalScopes();
function getGuarded();
function getHidden();
function getIncrementing();
function getKey();
function getKeyName();
function getKeyType();
function getMorphClass();
function getMutatedAttributes();
function getObservableEvents();
function getOriginal($key = null, $default = null);
function getPerPage();
function getPrevious();
function getQualifiedCreatedAtColumn();
function getQualifiedKeyName();
function getQualifiedUpdatedAtColumn();
function getQueueableConnection();
function getQueueableId();
function getQueueableRelations();
function getRawOriginal($key = null, $default = null);
function getRelation($relation);
function getRelationValue($key);
function getRelations();
function getRouteKey();
function getRouteKeyName();
function getTable();
function getTouchedRelations();
function getUpdatedAtColumn();
function getVisible();
function guard(array $guarded);
function hasAnyGetMutator($key);
function hasAppended($attribute);
function hasAttribute($key);
function hasAttributeGetMutator($key);
function hasAttributeMutator($key);
function hasAttributeSetMutator($key);
function hasCast($key, $types = null);
function hasGetMutator($key);
function hasMany($related, $foreignKey = null, $localKey = null);
function hasManyThrough($related, $through, $firstKey = null, $secondKey = null, $localKey = null, $secondLocalKey = null);
function hasNamedScope($scope);
function hasOne($related, $foreignKey = null, $localKey = null);
function hasOneThrough($related, $through, $firstKey = null, $secondKey = null, $localKey = null, $secondLocalKey = null);
function hasRelationAutoloadCallback();
function hasSetMutator($key);
function initializeGuardsAttributes();
function initializeHasRelationships();
function initializeHasTimestamps();
function initializeHidesAttributes();
function initializeModelAttributes();
function is($model);
function isClean($attributes = null);
function isDirty($attributes = null);
function isFillable($key);
function isGuarded($key);
function isNot($model);
function isRelation($key);
function joiningTable($related, $instance = null);
function joiningTableSegment();
function jsonSerialize(): mixed;
function load($relations);
function loadAggregate($relations, $column, $function = null);
function loadAvg($relations, $column);
function loadCount($relations);
function loadExists($relations);
function loadMax($relations, $column);
function loadMin($relations, $column);
function loadMissing($relations);
function loadMorph($relation, $relations);
function loadMorphAggregate($relation, $relations, $column, $function = null);
function loadMorphAvg($relation, $relations, $column);
function loadMorphCount($relation, $relations);
function loadMorphMax($relation, $relations, $column);
function loadMorphMin($relation, $relations, $column);
function loadMorphSum($relation, $relations, $column);
function loadSum($relations, $column);
function makeHidden($attributes);
function makeHiddenIf($condition, $attributes);
function makeVisible($attributes);
function makeVisibleIf($condition, $attributes);
function mergeAppends(array $appends);
function mergeCasts($casts);
function mergeFillable(array $fillable);
function mergeGuarded(array $guarded);
function mergeHidden(array $hidden);
function mergeVisible(array $visible);
function morphMany($related, $name, $type = null, $id = null, $localKey = null);
function morphOne($related, $name, $type = null, $id = null, $localKey = null);
function morphTo($name = null, $type = null, $id = null, $ownerKey = null);
function morphToMany($related, $name, $table = null, $foreignPivotKey = null, $relatedPivotKey = null, $parentKey = null, $relatedKey = null, $relation = null, $inverse = false);
function morphedByMany($related, $name, $table = null, $foreignPivotKey = null, $relatedPivotKey = null, $parentKey = null, $relatedKey = null, $relation = null);
function newCollection(array $models = []);
function newEloquentBuilder($query);
function newFromBuilder($attributes = [], $connection = null);
function newInstance($attributes = [], $exists = false);
function newModelQuery();
function newPivot(self $parent, array $attributes, $table, $exists, $using = null);
function newQuery();
function newQueryForRestoration($ids);
function newQueryWithoutRelationships();
function newQueryWithoutScope($scope);
function newQueryWithoutScopes();
function newUniqueId();
function offsetExists($offset): bool;
function offsetGet($offset): mixed;
function offsetSet($offset, $value): void;
function offsetUnset($offset): void;
function only($attributes);
function originalIsEquivalent($key);
function push();
function pushQuietly();
function qualifyColumn($column);
function qualifyColumns($columns);
function refresh();
function registerGlobalScopes($builder);
function relationLoaded($key);
function relationResolver($class, $key);
function relationsToArray();
function removeObservableEvents($observables);
function replicate(?array $except = null);
function replicateQuietly(?array $except = null);
function resolveChildRouteBinding($childType, $value, $field);
function resolveCollectionFromAttribute();
function resolveRouteBinding($value, $field = null);
function resolveRouteBindingQuery($query, $value, $field = null);
function resolveSoftDeletableChildRouteBinding($childType, $value, $field);
function resolveSoftDeletableRouteBinding($value, $field = null);
function save(array $options = []);
function saveOrFail(array $options = []);
function saveOrIgnore(array $options = [], array|string|null $uniqueBy = null);
function saveQuietly(array $options = []);
function setAppends(array $appends);
function setAttribute($key, $value);
function setConnection($name);
function setCreatedAt($value);
function setDateFormat($format);
function setHidden(array $hidden);
function setIncrementing($value);
function setKeyName($key);
function setKeyType($type);
function setObservableEvents(array $observables);
function setPerPage($perPage);
function setRawAttributes(array $attributes, $sync = false);
function setRelation($relation, $value);
function setRelations(array $relations);
function setTable($table);
function setTouchedRelations(array $touches);
function setUniqueIds();
function setUpdatedAt($value);
function setVisible(array $visible);
function syncChanges();
function syncOriginal();
function syncOriginalAttribute($attribute);
function syncOriginalAttributes($attributes);
function through($relationship);
function toArray();
function toJson($options = 0);
function toPrettyJson(int $options = 0);
function toResource(?string $resourceClass = null): Illuminate\Http\Resources\Json\JsonResource;
function totallyGuarded();
function touch($attribute = null);
function touchOwners();
function touchQuietly($attribute = null);
function touches($relation);
function uniqueIds();
function unsetRelation($relation);
function unsetRelations();
function update(array $attributes = [], array $options = []);
function updateOrFail(array $attributes = [], array $options = []);
function updateQuietly(array $attributes = [], array $options = []);
function updateTimestamps();
function usesTimestamps();
function usesUniqueIds();
function wasChanged($attributes = null);
function withRelationshipAutoloading();
function withoutAppends();
function withoutRelation($relations);
function withoutRelations();
static function __callStatic($method, $parameters);
static function addGlobalScope($scope, $implementation = null);
static function addGlobalScopes(array $scopes);
static function all($columns = []);
static function automaticallyEagerLoadRelationships($value = true);
static function bootHasEvents();
static function bootHasGlobalScopes();
static function cacheMutatedAttributes($classOrInstance);
static function clearBootedModels();
static function created($callback);
static function creating($callback);
static function currentEncrypter();
static function deleted($callback);
static function deleting($callback);
static function destroy($ids);
static function encryptUsing($encrypter);
static function flushEventListeners();
static function forceDestroy($ids);
static function getActualClassNameForMorph($class);
static function getAllGlobalScopes();
static function getConnectionResolver();
static function getEventDispatcher();
static function getGlobalScope($scope);
static function guessResourceName(): array;
static function handleDiscardedAttributeViolationUsing(?callable $callback);
static function handleLazyLoadingViolationUsing(?callable $callback);
static function handleMissingAttributeViolationUsing(?callable $callback);
static function hasGlobalScope($scope);
static function isAutomaticallyEagerLoadingRelationships();
static function isIgnoringTimestamps($class = null);
static function isIgnoringTouch($class = null);
static function isSoftDeletable(): bool;
static function isUnguarded();
static function observe($classes);
static function on($connection = null);
static function onWriteConnection();
static function preventAccessingMissingAttributes($value = true);
static function preventLazyLoading($value = true);
static function preventSilentlyDiscardingAttributes($value = true);
static function preventsAccessingMissingAttributes();
static function preventsLazyLoading();
static function preventsSilentlyDiscardingAttributes();
static function query();
static function reguard();
static function replicating($callback);
static function resolveConnection($connection = null);
static function resolveGlobalScopeAttributes();
static function resolveObserveAttributes();
static function resolveRelationUsing($name, Closure $callback);
static function retrieved($callback);
static function saved($callback);
static function saving($callback);
static function setAllGlobalScopes($scopes);
static function setConnectionResolver(Illuminate\Database\ConnectionResolverInterface $resolver);
static function setEventDispatcher(Illuminate\Contracts\Events\Dispatcher $dispatcher);
static function shouldBeStrict(bool $shouldBeStrict = true);
static function unguard($state = true);
static function unguarded(callable $callback);
static function unsetConnectionResolver();
static function unsetEventDispatcher();
static function updated($callback);
static function updating($callback);
static function with($relations);
static function withoutBroadcasting(callable $callback);
static function withoutEvents(callable $callback);
static function withoutTimestamps(callable $callback);
static function withoutTimestampsOn($models, $callback);
static function withoutTouching(callable $callback);
static function withoutTouchingOn(array $models, callable $callback);
```

## class ModelInfo
`Illuminate\Database\Eloquent\ModelInfo` implements Illuminate\Contracts\Support\Arrayable, ArrayAccess

```php
function __construct($class, $database, $table, $policy, $attributes, $relations, $events, $observers, $collection, $builder, $resource);
function offsetExists(mixed $offset): bool;
function offsetGet(mixed $offset): mixed;
function offsetSet(mixed $offset, mixed $value): void;
function offsetUnset(mixed $offset): void;
function toArray();
```

## class ModelInspector
`Illuminate\Database\Eloquent\ModelInspector`

```php
function __construct(Illuminate\Contracts\Foundation\Application $app);
function inspect($model, $connection = null);
```

## class ModelNotFoundException
`Illuminate\Database\Eloquent\ModelNotFoundException` extends Illuminate\Database\RecordsNotFoundException implements Throwable, Stringable

```php
final function getCode();
final function getFile(): string;
final function getLine(): int;
final function getMessage(): string;
final function getPrevious(): ?Throwable;
final function getTrace(): array;
final function getTraceAsString(): string;
function __construct(string $message = '', int $code = 0, ?Throwable $previous = null);
function __toString(): string;
function __wakeup();
function getIds();
function getModel();
function setModel($model, $ids = []);
```

## class PendingHasThroughRelationship
`Illuminate\Database\Eloquent\PendingHasThroughRelationship`

```php
function __call($method, $parameters);
function __construct($rootModel, $localRelationship);
function has($callback);
```

## trait Prunable
`Illuminate\Database\Eloquent\Prunable`

```php
function prunable();
function prune();
function pruneAll(int $chunkSize = 1000);
```

## class QueueEntityResolver
`Illuminate\Database\Eloquent\QueueEntityResolver` implements Illuminate\Contracts\Queue\EntityResolver

```php
function resolve($type, $id);
```

## class RelationNotFoundException
`Illuminate\Database\Eloquent\RelationNotFoundException` extends RuntimeException implements Stringable, Throwable

```php
final function getCode();
final function getFile(): string;
final function getLine(): int;
final function getMessage(): string;
final function getPrevious(): ?Throwable;
final function getTrace(): array;
final function getTraceAsString(): string;
function __construct(string $message = '', int $code = 0, ?Throwable $previous = null);
function __toString(): string;
function __wakeup();
static function make($model, $relation, $type = null);
```

## interface Scope
`Illuminate\Database\Eloquent\Scope`

```php
abstract function apply(Illuminate\Database\Eloquent\Builder $builder, Illuminate\Database\Eloquent\Model $model);
```

## trait SoftDeletes
`Illuminate\Database\Eloquent\SoftDeletes`

```php
function forceDelete();
function forceDeleteQuietly();
function getDeletedAtColumn();
function getQualifiedDeletedAtColumn();
function initializeSoftDeletes();
function isForceDeleting();
function restore();
function restoreQuietly();
function trashed();
static function bootSoftDeletes();
static function forceDeleted($callback);
static function forceDeleting($callback);
static function forceDestroy($ids);
static function restored($callback);
static function restoring($callback);
static function softDeleted($callback);
```

## class SoftDeletingScope
`Illuminate\Database\Eloquent\SoftDeletingScope` implements Illuminate\Database\Eloquent\Scope

```php
function apply(Illuminate\Database\Eloquent\Builder $builder, Illuminate\Database\Eloquent\Model $model);
function extend(Illuminate\Database\Eloquent\Builder $builder);
```

