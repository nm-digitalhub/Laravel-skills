# Illuminate\Database\Eloquent\Factories

Version: 13.14.0

## class BelongsToManyRelationship
`Illuminate\Database\Eloquent\Factories\BelongsToManyRelationship`

```php
function __construct($factory, $pivot, $relationship);
function createFor(Illuminate\Database\Eloquent\Model $model);
function recycle($recycle);
```

## class BelongsToRelationship
`Illuminate\Database\Eloquent\Factories\BelongsToRelationship`

```php
function __construct($factory, $relationship);
function attributesFor(Illuminate\Database\Eloquent\Model $model);
function recycle($recycle);
```

## class CrossJoinSequence
`Illuminate\Database\Eloquent\Factories\CrossJoinSequence` extends Illuminate\Database\Eloquent\Factories\Sequence implements Countable

```php
function __construct(...$sequences);
function __invoke($attributes = [], $parent = null);
function count(): int;
```

## class Factory
`Illuminate\Database\Eloquent\Factories\Factory`

```php
abstract function definition();
function __call($method, $parameters);
function __construct($count = null, ?Illuminate\Support\Collection $states = null, ?Illuminate\Support\Collection $has = null, ?Illuminate\Support\Collection $for = null, ?Illuminate\Support\Collection $afterMaking = null, ?Illuminate\Support\Collection $afterCreating = null, $connection = null, ?Illuminate\Support\Collection $recycle = null, ?bool $expandRelationships = null, array $excludeRelationships = []);
function afterCreating(Closure $callback);
function afterMaking(Closure $callback);
function configure();
function connection(UnitEnum|string|null $connection);
function count(?int $count);
function create($attributes = [], ?Illuminate\Database\Eloquent\Model $parent = null);
function createMany(Traversable|array|int|null $records = null);
function createManyQuietly(Traversable|array|int|null $records = null);
function createOne($attributes = []);
function createOneQuietly($attributes = []);
function createQuietly($attributes = [], ?Illuminate\Database\Eloquent\Model $parent = null);
function crossJoinSequence(...$sequence);
function for($factory, $relationship = null);
function forEachSequence(...$sequence);
function getConnectionName();
function getRandomRecycledModel($modelClassName);
function has(self $factory, $relationship = null);
function hasAttached($factory, $pivot = [], $relationship = null);
function insert(array $attributes = [], ?Illuminate\Database\Eloquent\Model $parent = null): void;
function lazy(array $attributes = [], ?Illuminate\Database\Eloquent\Model $parent = null);
function macroCall($method, $parameters);
function make($attributes = [], ?Illuminate\Database\Eloquent\Model $parent = null);
function makeMany(Traversable|array|int|null $records = null);
function makeOne($attributes = []);
function modelName();
function newModel(array $attributes = []);
function prependState($state);
function raw($attributes = [], ?Illuminate\Database\Eloquent\Model $parent = null);
function recycle($model);
function sequence(...$sequence);
function set($key, $value);
function state($state);
function unless($value = null, ?callable $callback = null, ?callable $default = null);
function when($value = null, ?callable $callback = null, ?callable $default = null);
function withoutAfterCreating();
function withoutAfterMaking();
function withoutParents($parents = []);
static function __callStatic($method, $parameters);
static function dontExpandRelationshipsByDefault();
static function expandRelationshipsByDefault();
static function factoryForModel(string $modelName);
static function flushMacros();
static function flushState();
static function guessFactoryNamesUsing(callable $callback);
static function guessModelNamesUsing(callable $callback);
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
static function new($attributes = []);
static function resolveFactoryName(string $modelName);
static function times(int $count);
static function useNamespace(string $namespace);
```

## trait HasFactory
`Illuminate\Database\Eloquent\Factories\HasFactory`

```php
static function factory($count = null, $state = []);
```

## class Relationship
`Illuminate\Database\Eloquent\Factories\Relationship`

```php
function __construct(Illuminate\Database\Eloquent\Factories\Factory $factory, $relationship);
function createFor(Illuminate\Database\Eloquent\Model $parent);
function recycle($recycle);
```

## class Sequence
`Illuminate\Database\Eloquent\Factories\Sequence` implements Countable

```php
function __construct(...$sequence);
function __invoke($attributes = [], $parent = null);
function count(): int;
```

