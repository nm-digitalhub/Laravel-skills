# Illuminate\Database\Eloquent\Concerns

Version: 13.14.0

## trait GuardsAttributes
`Illuminate\Database\Eloquent\Concerns\GuardsAttributes`

```php
function fillable(array $fillable);
function getFillable();
function getGuarded();
function guard(array $guarded);
function initializeGuardsAttributes();
function isFillable($key);
function isGuarded($key);
function mergeFillable(array $fillable);
function mergeGuarded(array $guarded);
function totallyGuarded();
static function isUnguarded();
static function reguard();
static function unguard($state = true);
static function unguarded(callable $callback);
```

## trait HasAttributes
`Illuminate\Database\Eloquent\Concerns\HasAttributes`

```php
function append($attributes);
function attributesToArray();
function discardChanges();
function except($attributes);
function fillJsonAttribute($key, $value);
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
function getDateFormat();
function getDates();
function getDirty();
function getMutatedAttributes();
function getOriginal($key = null, $default = null);
function getPrevious();
function getRawOriginal($key = null, $default = null);
function getRelationValue($key);
function hasAnyGetMutator($key);
function hasAppended($attribute);
function hasAttribute($key);
function hasAttributeGetMutator($key);
function hasAttributeMutator($key);
function hasAttributeSetMutator($key);
function hasCast($key, $types = null);
function hasGetMutator($key);
function hasSetMutator($key);
function isClean($attributes = null);
function isDirty($attributes = null);
function isRelation($key);
function mergeAppends(array $appends);
function mergeCasts($casts);
function only($attributes);
function originalIsEquivalent($key);
function relationsToArray();
function setAppends(array $appends);
function setAttribute($key, $value);
function setDateFormat($format);
function setRawAttributes(array $attributes, $sync = false);
function syncChanges();
function syncOriginal();
function syncOriginalAttribute($attribute);
function syncOriginalAttributes($attributes);
function wasChanged($attributes = null);
function withoutAppends();
static function cacheMutatedAttributes($classOrInstance);
static function currentEncrypter();
static function encryptUsing($encrypter);
```

## trait HasEvents
`Illuminate\Database\Eloquent\Concerns\HasEvents`

```php
function addObservableEvents($observables);
function dispatchesEvents();
function getObservableEvents();
function removeObservableEvents($observables);
function setObservableEvents(array $observables);
static function bootHasEvents();
static function created($callback);
static function creating($callback);
static function deleted($callback);
static function deleting($callback);
static function flushEventListeners();
static function getEventDispatcher();
static function observe($classes);
static function replicating($callback);
static function resolveObserveAttributes();
static function retrieved($callback);
static function saved($callback);
static function saving($callback);
static function setEventDispatcher(Illuminate\Contracts\Events\Dispatcher $dispatcher);
static function unsetEventDispatcher();
static function updated($callback);
static function updating($callback);
static function withoutEvents(callable $callback);
```

## trait HasGlobalScopes
`Illuminate\Database\Eloquent\Concerns\HasGlobalScopes`

```php
function getGlobalScopes();
static function addGlobalScope($scope, $implementation = null);
static function addGlobalScopes(array $scopes);
static function bootHasGlobalScopes();
static function getAllGlobalScopes();
static function getGlobalScope($scope);
static function hasGlobalScope($scope);
static function resolveGlobalScopeAttributes();
static function setAllGlobalScopes($scopes);
```

## trait HasRelationships
`Illuminate\Database\Eloquent\Concerns\HasRelationships`

```php
function autoloadRelationsUsing(Closure $callback, $context = null);
function belongsTo($related, $foreignKey = null, $ownerKey = null, $relation = null);
function belongsToMany($related, $table = null, $foreignPivotKey = null, $relatedPivotKey = null, $parentKey = null, $relatedKey = null, $relation = null);
function getMorphClass();
function getRelation($relation);
function getRelations();
function getTouchedRelations();
function hasMany($related, $foreignKey = null, $localKey = null);
function hasManyThrough($related, $through, $firstKey = null, $secondKey = null, $localKey = null, $secondLocalKey = null);
function hasOne($related, $foreignKey = null, $localKey = null);
function hasOneThrough($related, $through, $firstKey = null, $secondKey = null, $localKey = null, $secondLocalKey = null);
function hasRelationAutoloadCallback();
function initializeHasRelationships();
function joiningTable($related, $instance = null);
function joiningTableSegment();
function morphMany($related, $name, $type = null, $id = null, $localKey = null);
function morphOne($related, $name, $type = null, $id = null, $localKey = null);
function morphTo($name = null, $type = null, $id = null, $ownerKey = null);
function morphToMany($related, $name, $table = null, $foreignPivotKey = null, $relatedPivotKey = null, $parentKey = null, $relatedKey = null, $relation = null, $inverse = false);
function morphedByMany($related, $name, $table = null, $foreignPivotKey = null, $relatedPivotKey = null, $parentKey = null, $relatedKey = null, $relation = null);
function relationLoaded($key);
function relationResolver($class, $key);
function setRelation($relation, $value);
function setRelations(array $relations);
function setTouchedRelations(array $touches);
function through($relationship);
function touchOwners();
function touches($relation);
function unsetRelation($relation);
function unsetRelations();
function withRelationshipAutoloading();
function withoutRelation($relations);
function withoutRelations();
static function getActualClassNameForMorph($class);
static function resolveRelationUsing($name, Closure $callback);
```

## trait HasTimestamps
`Illuminate\Database\Eloquent\Concerns\HasTimestamps`

```php
function freshTimestamp();
function freshTimestampString();
function getCreatedAtColumn();
function getQualifiedCreatedAtColumn();
function getQualifiedUpdatedAtColumn();
function getUpdatedAtColumn();
function initializeHasTimestamps();
function setCreatedAt($value);
function setUpdatedAt($value);
function touch($attribute = null);
function touchQuietly($attribute = null);
function updateTimestamps();
function usesTimestamps();
static function isIgnoringTimestamps($class = null);
static function withoutTimestamps(callable $callback);
static function withoutTimestampsOn($models, $callback);
```

## trait HasUlids
`Illuminate\Database\Eloquent\Concerns\HasUlids`

```php
function getIncrementing();
function getKeyType();
function initializeHasUniqueStringIds();
function newUniqueId();
function resolveRouteBindingQuery($query, $value, $field = null);
function uniqueIds();
```

## trait HasUniqueIds
`Illuminate\Database\Eloquent\Concerns\HasUniqueIds`

```php
function newUniqueId();
function setUniqueIds();
function uniqueIds();
function usesUniqueIds();
```

## trait HasUniqueStringIds
`Illuminate\Database\Eloquent\Concerns\HasUniqueStringIds`

```php
abstract function newUniqueId();
function getIncrementing();
function getKeyType();
function initializeHasUniqueStringIds();
function resolveRouteBindingQuery($query, $value, $field = null);
function uniqueIds();
```

## trait HasUuids
`Illuminate\Database\Eloquent\Concerns\HasUuids`

```php
function getIncrementing();
function getKeyType();
function initializeHasUniqueStringIds();
function newUniqueId();
function resolveRouteBindingQuery($query, $value, $field = null);
function uniqueIds();
```

## trait HasVersion4Uuids
`Illuminate\Database\Eloquent\Concerns\HasVersion4Uuids`

```php
function getIncrementing();
function getKeyType();
function initializeHasUniqueStringIds();
function newUniqueId();
function resolveRouteBindingQuery($query, $value, $field = null);
function uniqueIds();
```

## trait HidesAttributes
`Illuminate\Database\Eloquent\Concerns\HidesAttributes`

```php
function getHidden();
function getVisible();
function initializeHidesAttributes();
function makeHidden($attributes);
function makeHiddenIf($condition, $attributes);
function makeVisible($attributes);
function makeVisibleIf($condition, $attributes);
function mergeHidden(array $hidden);
function mergeVisible(array $visible);
function setHidden(array $hidden);
function setVisible(array $visible);
```

## trait PreventsCircularRecursion
`Illuminate\Database\Eloquent\Concerns\PreventsCircularRecursion`

## trait QueriesRelationships
`Illuminate\Database\Eloquent\Concerns\QueriesRelationships`

```php
function doesntHave($relation, $boolean = 'and', ?Closure $callback = null);
function doesntHaveMorph($relation, $types, $boolean = 'and', ?Closure $callback = null);
function has($relation, $operator = '>=', $count = 1, $boolean = 'and', ?Closure $callback = null);
function hasMorph($relation, $types, $operator = '>=', $count = 1, $boolean = 'and', ?Closure $callback = null);
function mergeConstraintsFrom(Illuminate\Database\Eloquent\Builder $from);
function orDoesntHave($relation);
function orDoesntHaveMorph($relation, $types);
function orHas($relation, $operator = '>=', $count = 1);
function orHasMorph($relation, $types, $operator = '>=', $count = 1);
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
function orWhereNotMorphedTo($relation, $model);
function orWhereRelation($relation, $column, $operator = null, $value = null);
function whereAttachedTo($related, $relationshipName = null, $boolean = 'and');
function whereBelongsTo($related, $relationshipName = null, $boolean = 'and');
function whereDoesntHave($relation, ?Closure $callback = null);
function whereDoesntHaveMorph($relation, $types, ?Closure $callback = null);
function whereDoesntHaveRelation($relation, $column, $operator = null, $value = null);
function whereHas($relation, ?Closure $callback = null, $operator = '>=', $count = 1);
function whereHasMorph($relation, $types, ?Closure $callback = null, $operator = '>=', $count = 1);
function whereMorphDoesntHaveRelation($relation, $types, $column, $operator = null, $value = null);
function whereMorphRelation($relation, $types, $column, $operator = null, $value = null);
function whereMorphedTo($relation, $model, $boolean = 'and');
function whereNotMorphedTo($relation, $model, $boolean = 'and');
function whereRelation($relation, $column, $operator = null, $value = null);
function withAggregate($relations, $column, $function = null);
function withAvg($relation, $column);
function withCount($relations);
function withExists($relation);
function withMax($relation, $column);
function withMin($relation, $column);
function withSum($relation, $column);
function withWhereHas($relation, ?Closure $callback = null, $operator = '>=', $count = 1);
function withWhereRelation($relation, $column, $operator = null, $value = null);
```

## trait TransformsToResource
`Illuminate\Database\Eloquent\Concerns\TransformsToResource`

```php
function toResource(?string $resourceClass = null): Illuminate\Http\Resources\Json\JsonResource;
static function guessResourceName(): array;
```

