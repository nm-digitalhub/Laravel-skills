# Illuminate\Database\Eloquent\Relations\Concerns

Version: 13.14.0

## trait AsPivot
`Illuminate\Database\Eloquent\Relations\Concerns\AsPivot`

```php
function delete();
function getCreatedAtColumn();
function getForeignKey();
function getOtherKey();
function getQueueableId();
function getRelatedKey();
function getTable();
function getUpdatedAtColumn();
function hasTimestampAttributes($attributes = null);
function newQueryForRestoration($ids);
function setPivotKeys($foreignKey, $relatedKey);
function setRelatedModel(?Illuminate\Database\Eloquent\Model $related = null);
function unsetRelations();
static function fromAttributes(Illuminate\Database\Eloquent\Model $parent, $attributes, $table, $exists = false);
static function fromRawAttributes(Illuminate\Database\Eloquent\Model $parent, $attributes, $table, $exists = false);
```

## trait CanBeOneOfMany
`Illuminate\Database\Eloquent\Relations\Concerns\CanBeOneOfMany`

```php
abstract function addOneOfManyJoinSubQueryConstraints(Illuminate\Database\Query\JoinClause $join);
abstract function addOneOfManySubQueryConstraints(Illuminate\Database\Eloquent\Builder $query, $column = null, $aggregate = null);
abstract function getOneOfManySubQuerySelectColumns();
function getOneOfManySubQuery();
function getRelationName();
function isOneOfMany();
function latestOfMany($column = 'id', $relation = null);
function ofMany($column = 'id', $aggregate = 'MAX', $relation = null);
function oldestOfMany($column = 'id', $relation = null);
function qualifySubSelectColumn($column);
```

## trait ComparesRelatedModels
`Illuminate\Database\Eloquent\Relations\Concerns\ComparesRelatedModels`

```php
abstract function getParentKey();
function is($model);
function isNot($model);
```

## trait InteractsWithDictionary
`Illuminate\Database\Eloquent\Relations\Concerns\InteractsWithDictionary`

## trait InteractsWithPivotTable
`Illuminate\Database\Eloquent\Relations\Concerns\InteractsWithPivotTable`

```php
function attach($ids, array $attributes = [], $touch = true);
function attachOrFail($ids, array $attributes = [], $touch = true);
function detach($ids = null, $touch = true);
function detachOrFail($ids = null, $touch = true);
function hasPivotColumn($column);
function newExistingPivot(array $attributes = []);
function newPivot(array $attributes = [], $exists = false);
function newPivotQuery();
function newPivotStatement();
function newPivotStatementForId($id);
function sync($ids, $detaching = true);
function syncOrFail($ids, $detaching = true);
function syncWithPivotValues($ids, array $values, bool $detaching = true);
function syncWithPivotValuesOrFail($ids, array $values, bool $detaching = true);
function syncWithoutDetaching($ids);
function syncWithoutDetachingOrFail($ids);
function toggle($ids, $touch = true);
function toggleOrFail($ids, $touch = true);
function updateExistingPivot($id, array $attributes, $touch = true);
function updateExistingPivotOrFail($id, array $attributes, $touch = true);
function withPivot($columns);
```

## trait SupportsDefaultModels
`Illuminate\Database\Eloquent\Relations\Concerns\SupportsDefaultModels`

```php
function withDefault($callback = true);
```

## trait SupportsInverseRelations
`Illuminate\Database\Eloquent\Relations\Concerns\SupportsInverseRelations`

```php
function chaperone(?string $relation = null);
function getInverseRelationship();
function inverse(?string $relation = null);
function withoutChaperone();
function withoutInverse();
```

