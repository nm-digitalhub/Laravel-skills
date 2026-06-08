# Illuminate\Database\Schema

Version: 13.14.0

## class Blueprint
`Illuminate\Database\Schema\Blueprint`

```php
function __call($method, $parameters);
function __construct(Illuminate\Database\Connection $connection, $table, ?Closure $callback = null);
function addAlterCommands();
function addColumn($type, $name, array $parameters = []);
function addFluentCommands();
function after($column, Closure $callback);
function bigIncrements($column);
function bigInteger($column, $autoIncrement = false, $unsigned = false);
function binary($column, $length = null, $fixed = false);
function boolean($column);
function build();
function char($column, $length = null);
function charset($charset);
function collation($collation);
function comment($comment);
function computed($column, $expression);
function create();
function creating();
function date($column);
function dateTime($column, $precision = null);
function dateTimeTz($column, $precision = null);
function datetimes($precision = null);
function decimal($column, $total = 8, $places = 2);
function double($column);
function drop();
function dropColumn($columns);
function dropConstrainedForeignId($column);
function dropConstrainedForeignIdFor($model, $column = null);
function dropForeign($index);
function dropForeignIdFor($model, $column = null);
function dropFullText($index);
function dropIfExists();
function dropIndex($index);
function dropMorphs($name, $indexName = null);
function dropPrimary($index = null);
function dropRememberToken();
function dropSoftDeletes($column = 'deleted_at');
function dropSoftDeletesTz($column = 'deleted_at');
function dropSpatialIndex($index);
function dropTimestamps();
function dropTimestampsTz();
function dropUnique($index);
function engine($engine);
function enum($column, array $allowed);
function float($column, $precision = 53);
function foreign($columns, $name = null);
function foreignId($column);
function foreignIdFor($model, $column = null);
function foreignUlid($column, $length = 26);
function foreignUuid($column);
function foreignUuidFor($model, $column = null);
function fullText($columns, $name = null, $algorithm = null);
function geography($column, $subtype = null, $srid = 4326);
function geometry($column, $subtype = null, $srid = 0);
function getAddedColumns();
function getChangedColumns();
function getColumns();
function getCommands();
function getPrefix();
function getState();
function getTable();
function id($column = 'id');
function increments($column);
function index($columns, $name = null, $algorithm = null);
function innoDb();
function integer($column, $autoIncrement = false, $unsigned = false);
function integerIncrements($column);
function ipAddress($column = 'ip_address');
function json($column);
function jsonb($column);
function longText($column);
function macAddress($column = 'mac_address');
function mediumIncrements($column);
function mediumInteger($column, $autoIncrement = false, $unsigned = false);
function mediumText($column);
function morphs($name, $indexName = null, $after = null);
function nullableMorphs($name, $indexName = null, $after = null);
function nullableNumericMorphs($name, $indexName = null, $after = null);
function nullableTimestamps($precision = null);
function nullableTimestampsTz($precision = null);
function nullableUlidMorphs($name, $indexName = null, $after = null);
function nullableUuidMorphs($name, $indexName = null, $after = null);
function numericMorphs($name, $indexName = null, $after = null);
function primary($columns, $name = null, $algorithm = null);
function rawColumn($column, $definition);
function rawIndex($expression, $name);
function rememberToken();
function removeColumn($name);
function rename($to);
function renameColumn($from, $to);
function renameIndex($from, $to);
function set($column, array $allowed);
function smallIncrements($column);
function smallInteger($column, $autoIncrement = false, $unsigned = false);
function softDeletes($column = 'deleted_at', $precision = null);
function softDeletesDatetime($column = 'deleted_at', $precision = null);
function softDeletesTz($column = 'deleted_at', $precision = null);
function spatialIndex($columns, $name = null, $operatorClass = null);
function string($column, $length = null);
function temporary();
function text($column);
function time($column, $precision = null);
function timeTz($column, $precision = null);
function timestamp($column, $precision = null);
function timestampTz($column, $precision = null);
function timestamps($precision = null);
function timestampsTz($precision = null);
function tinyIncrements($column);
function tinyInteger($column, $autoIncrement = false, $unsigned = false);
function tinyText($column);
function toSql();
function tsvector($column);
function ulid($column = 'ulid', $length = 26);
function ulidMorphs($name, $indexName = null, $after = null);
function unique($columns, $name = null, $algorithm = null);
function unsignedBigInteger($column, $autoIncrement = false);
function unsignedInteger($column, $autoIncrement = false);
function unsignedMediumInteger($column, $autoIncrement = false);
function unsignedSmallInteger($column, $autoIncrement = false);
function unsignedTinyInteger($column, $autoIncrement = false);
function uuid($column = 'uuid');
function uuidMorphs($name, $indexName = null, $after = null);
function vector($column, $dimensions = null);
function vectorIndex($column, $name = null);
function year($column);
static function __callStatic($method, $parameters);
static function flushMacros();
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
```

## class BlueprintState
`Illuminate\Database\Schema\BlueprintState`

```php
function __construct(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Database\Connection $connection);
function getColumns();
function getForeignKeys();
function getIndexes();
function getPrimaryKey();
function update(Illuminate\Support\Fluent $command);
```

## class Builder
`Illuminate\Database\Schema\Builder`

```php
function __call($method, $parameters);
function __construct(Illuminate\Database\Connection $connection);
function blueprintResolver(Closure $resolver);
function create($table, Closure $callback);
function createDatabase($name);
function disableForeignKeyConstraints();
function drop($table);
function dropAllTables();
function dropAllTypes();
function dropAllViews();
function dropColumns($table, $columns);
function dropDatabaseIfExists($name);
function dropIfExists($table);
function enableForeignKeyConstraints();
function ensureExtensionExists($name, $schema = null);
function ensureVectorExtensionExists($schema = null);
function getColumnListing($table);
function getColumnType($table, $column, $fullDefinition = false);
function getColumns($table);
function getConnection();
function getCurrentSchemaListing();
function getCurrentSchemaName();
function getForeignKeys($table);
function getIndexListing($table);
function getIndexes($table);
function getSchemas();
function getTableListing($schema = null, $schemaQualified = true);
function getTables($schema = null);
function getTypes($schema = null);
function getViews($schema = null);
function hasColumn($table, $column);
function hasColumns($table, array $columns);
function hasForeignKey($table, $foreignKey);
function hasIndex($table, $index, $type = null);
function hasTable($table);
function hasView($view);
function parseSchemaAndTable($reference, $withDefaultSchema = null);
function rename($from, $to);
function table($table, Closure $callback);
function whenTableDoesntHaveColumn(string $table, string $column, Closure $callback);
function whenTableDoesntHaveIndex(string $table, array|string $index, Closure $callback, ?string $type = null);
function whenTableHasColumn(string $table, string $column, Closure $callback);
function whenTableHasIndex(string $table, array|string $index, Closure $callback, ?string $type = null);
function withoutForeignKeyConstraints(Closure $callback);
static function __callStatic($method, $parameters);
static function defaultMorphKeyType(string $type);
static function defaultStringLength($length);
static function defaultTimePrecision(?int $precision): void;
static function flushMacros();
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
static function morphUsingUlids();
static function morphUsingUuids();
```

## class ColumnDefinition
`Illuminate\Database\Schema\ColumnDefinition` extends Illuminate\Support\Fluent implements Traversable, JsonSerializable, Illuminate\Contracts\Support\Jsonable, IteratorAggregate, ArrayAccess, Illuminate\Contracts\Support\Arrayable

```php
function __call($method, $parameters);
function __construct($attributes = []);
function __get($key);
function __isset($key);
function __set($key, $value);
function __unset($key);
function all($keys = null);
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
function fill($attributes);
function filled($key);
function float($key, $default = 0);
function get($key, $default = null);
function getAttributes();
function getIterator(): Traversable;
function has($key);
function hasAny($keys);
function integer($key, $default = 0);
function interval($key, $unit = null);
function isEmpty(): bool;
function isNotEmpty(): bool;
function isNotFilled($key);
function jsonSerialize(): array;
function macroCall($method, $parameters);
function missing($key);
function offsetExists($offset): bool;
function offsetGet($offset): mixed;
function offsetSet($offset, $value): void;
function offsetUnset($offset): void;
function only($keys);
function scope($key, $default = null);
function set($key, $value);
function str($key, $default = null);
function string($key, $default = null);
function toArray();
function toJson($options = 0);
function toPrettyJson(int $options = 0);
function unless($value = null, ?callable $callback = null, ?callable $default = null);
function value($key, $default = null);
function when($value = null, ?callable $callback = null, ?callable $default = null);
function whenFilled($key, callable $callback, ?callable $default = null);
function whenHas($key, callable $callback, ?callable $default = null);
function whenMissing($key, callable $callback, ?callable $default = null);
static function __callStatic($method, $parameters);
static function flushMacros();
static function hasMacro($name);
static function macro($name, $macro);
static function make($attributes = []);
static function mixin($mixin, $replace = true);
```

## class ForeignIdColumnDefinition
`Illuminate\Database\Schema\ForeignIdColumnDefinition` extends Illuminate\Database\Schema\ColumnDefinition implements Illuminate\Contracts\Support\Arrayable, ArrayAccess, IteratorAggregate, Illuminate\Contracts\Support\Jsonable, JsonSerializable, Traversable

```php
function __call($method, $parameters);
function __construct(Illuminate\Database\Schema\Blueprint $blueprint, $attributes = []);
function __get($key);
function __isset($key);
function __set($key, $value);
function __unset($key);
function all($keys = null);
function anyFilled($keys);
function array($key = null);
function boolean($key = null, $default = false);
function clamp($key, $min, $max, $default = 0);
function collect($key = null);
function constrained($table = null, $column = null, $indexName = null);
function date($key, $format = null, $tz = null);
function enum($key, $enumClass, $default = null);
function enums($key, $enumClass);
function except($keys);
function exists($key);
function fill($attributes);
function filled($key);
function float($key, $default = 0);
function get($key, $default = null);
function getAttributes();
function getIterator(): Traversable;
function has($key);
function hasAny($keys);
function integer($key, $default = 0);
function interval($key, $unit = null);
function isEmpty(): bool;
function isNotEmpty(): bool;
function isNotFilled($key);
function jsonSerialize(): array;
function macroCall($method, $parameters);
function missing($key);
function offsetExists($offset): bool;
function offsetGet($offset): mixed;
function offsetSet($offset, $value): void;
function offsetUnset($offset): void;
function only($keys);
function references($column, $indexName = null);
function scope($key, $default = null);
function set($key, $value);
function str($key, $default = null);
function string($key, $default = null);
function toArray();
function toJson($options = 0);
function toPrettyJson(int $options = 0);
function unless($value = null, ?callable $callback = null, ?callable $default = null);
function value($key, $default = null);
function when($value = null, ?callable $callback = null, ?callable $default = null);
function whenFilled($key, callable $callback, ?callable $default = null);
function whenHas($key, callable $callback, ?callable $default = null);
function whenMissing($key, callable $callback, ?callable $default = null);
static function __callStatic($method, $parameters);
static function flushMacros();
static function hasMacro($name);
static function macro($name, $macro);
static function make($attributes = []);
static function mixin($mixin, $replace = true);
```

## class ForeignKeyDefinition
`Illuminate\Database\Schema\ForeignKeyDefinition` extends Illuminate\Support\Fluent implements Traversable, JsonSerializable, Illuminate\Contracts\Support\Jsonable, IteratorAggregate, ArrayAccess, Illuminate\Contracts\Support\Arrayable

```php
function __call($method, $parameters);
function __construct($attributes = []);
function __get($key);
function __isset($key);
function __set($key, $value);
function __unset($key);
function all($keys = null);
function anyFilled($keys);
function array($key = null);
function boolean($key = null, $default = false);
function cascadeOnDelete();
function cascadeOnUpdate();
function clamp($key, $min, $max, $default = 0);
function collect($key = null);
function date($key, $format = null, $tz = null);
function enum($key, $enumClass, $default = null);
function enums($key, $enumClass);
function except($keys);
function exists($key);
function fill($attributes);
function filled($key);
function float($key, $default = 0);
function get($key, $default = null);
function getAttributes();
function getIterator(): Traversable;
function has($key);
function hasAny($keys);
function integer($key, $default = 0);
function interval($key, $unit = null);
function isEmpty(): bool;
function isNotEmpty(): bool;
function isNotFilled($key);
function jsonSerialize(): array;
function macroCall($method, $parameters);
function missing($key);
function noActionOnDelete();
function noActionOnUpdate();
function nullOnDelete();
function nullOnUpdate();
function offsetExists($offset): bool;
function offsetGet($offset): mixed;
function offsetSet($offset, $value): void;
function offsetUnset($offset): void;
function only($keys);
function restrictOnDelete();
function restrictOnUpdate();
function scope($key, $default = null);
function set($key, $value);
function str($key, $default = null);
function string($key, $default = null);
function toArray();
function toJson($options = 0);
function toPrettyJson(int $options = 0);
function unless($value = null, ?callable $callback = null, ?callable $default = null);
function value($key, $default = null);
function when($value = null, ?callable $callback = null, ?callable $default = null);
function whenFilled($key, callable $callback, ?callable $default = null);
function whenHas($key, callable $callback, ?callable $default = null);
function whenMissing($key, callable $callback, ?callable $default = null);
static function __callStatic($method, $parameters);
static function flushMacros();
static function hasMacro($name);
static function macro($name, $macro);
static function make($attributes = []);
static function mixin($mixin, $replace = true);
```

## class IndexDefinition
`Illuminate\Database\Schema\IndexDefinition` extends Illuminate\Support\Fluent implements Traversable, JsonSerializable, Illuminate\Contracts\Support\Jsonable, IteratorAggregate, ArrayAccess, Illuminate\Contracts\Support\Arrayable

```php
function __call($method, $parameters);
function __construct($attributes = []);
function __get($key);
function __isset($key);
function __set($key, $value);
function __unset($key);
function all($keys = null);
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
function fill($attributes);
function filled($key);
function float($key, $default = 0);
function get($key, $default = null);
function getAttributes();
function getIterator(): Traversable;
function has($key);
function hasAny($keys);
function integer($key, $default = 0);
function interval($key, $unit = null);
function isEmpty(): bool;
function isNotEmpty(): bool;
function isNotFilled($key);
function jsonSerialize(): array;
function macroCall($method, $parameters);
function missing($key);
function offsetExists($offset): bool;
function offsetGet($offset): mixed;
function offsetSet($offset, $value): void;
function offsetUnset($offset): void;
function only($keys);
function scope($key, $default = null);
function set($key, $value);
function str($key, $default = null);
function string($key, $default = null);
function toArray();
function toJson($options = 0);
function toPrettyJson(int $options = 0);
function unless($value = null, ?callable $callback = null, ?callable $default = null);
function value($key, $default = null);
function when($value = null, ?callable $callback = null, ?callable $default = null);
function whenFilled($key, callable $callback, ?callable $default = null);
function whenHas($key, callable $callback, ?callable $default = null);
function whenMissing($key, callable $callback, ?callable $default = null);
static function __callStatic($method, $parameters);
static function flushMacros();
static function hasMacro($name);
static function macro($name, $macro);
static function make($attributes = []);
static function mixin($mixin, $replace = true);
```

## class MariaDbBuilder
`Illuminate\Database\Schema\MariaDbBuilder` extends Illuminate\Database\Schema\MySqlBuilder

```php
function __call($method, $parameters);
function __construct(Illuminate\Database\Connection $connection);
function blueprintResolver(Closure $resolver);
function create($table, Closure $callback);
function createDatabase($name);
function disableForeignKeyConstraints();
function drop($table);
function dropAllTables();
function dropAllTypes();
function dropAllViews();
function dropColumns($table, $columns);
function dropDatabaseIfExists($name);
function dropIfExists($table);
function enableForeignKeyConstraints();
function ensureExtensionExists($name, $schema = null);
function ensureVectorExtensionExists($schema = null);
function getColumnListing($table);
function getColumnType($table, $column, $fullDefinition = false);
function getColumns($table);
function getConnection();
function getCurrentSchemaListing();
function getCurrentSchemaName();
function getForeignKeys($table);
function getIndexListing($table);
function getIndexes($table);
function getSchemas();
function getTableListing($schema = null, $schemaQualified = true);
function getTables($schema = null);
function getTypes($schema = null);
function getViews($schema = null);
function hasColumn($table, $column);
function hasColumns($table, array $columns);
function hasForeignKey($table, $foreignKey);
function hasIndex($table, $index, $type = null);
function hasTable($table);
function hasView($view);
function parseSchemaAndTable($reference, $withDefaultSchema = null);
function rename($from, $to);
function table($table, Closure $callback);
function whenTableDoesntHaveColumn(string $table, string $column, Closure $callback);
function whenTableDoesntHaveIndex(string $table, array|string $index, Closure $callback, ?string $type = null);
function whenTableHasColumn(string $table, string $column, Closure $callback);
function whenTableHasIndex(string $table, array|string $index, Closure $callback, ?string $type = null);
function withoutForeignKeyConstraints(Closure $callback);
static function __callStatic($method, $parameters);
static function defaultMorphKeyType(string $type);
static function defaultStringLength($length);
static function defaultTimePrecision(?int $precision): void;
static function flushMacros();
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
static function morphUsingUlids();
static function morphUsingUuids();
```

## class MariaDbSchemaState
`Illuminate\Database\Schema\MariaDbSchemaState` extends Illuminate\Database\Schema\MySqlSchemaState

```php
function __construct(Illuminate\Database\Connection $connection, ?Illuminate\Filesystem\Filesystem $files = null, ?callable $processFactory = null);
function dump(Illuminate\Database\Connection $connection, $path);
function handleOutputUsing(callable $output);
function hasMigrationTable(): bool;
function load($path);
function makeProcess(...$arguments);
function withMigrationTable(string $table);
```

## class MySqlBuilder
`Illuminate\Database\Schema\MySqlBuilder` extends Illuminate\Database\Schema\Builder

```php
function __call($method, $parameters);
function __construct(Illuminate\Database\Connection $connection);
function blueprintResolver(Closure $resolver);
function create($table, Closure $callback);
function createDatabase($name);
function disableForeignKeyConstraints();
function drop($table);
function dropAllTables();
function dropAllTypes();
function dropAllViews();
function dropColumns($table, $columns);
function dropDatabaseIfExists($name);
function dropIfExists($table);
function enableForeignKeyConstraints();
function ensureExtensionExists($name, $schema = null);
function ensureVectorExtensionExists($schema = null);
function getColumnListing($table);
function getColumnType($table, $column, $fullDefinition = false);
function getColumns($table);
function getConnection();
function getCurrentSchemaListing();
function getCurrentSchemaName();
function getForeignKeys($table);
function getIndexListing($table);
function getIndexes($table);
function getSchemas();
function getTableListing($schema = null, $schemaQualified = true);
function getTables($schema = null);
function getTypes($schema = null);
function getViews($schema = null);
function hasColumn($table, $column);
function hasColumns($table, array $columns);
function hasForeignKey($table, $foreignKey);
function hasIndex($table, $index, $type = null);
function hasTable($table);
function hasView($view);
function parseSchemaAndTable($reference, $withDefaultSchema = null);
function rename($from, $to);
function table($table, Closure $callback);
function whenTableDoesntHaveColumn(string $table, string $column, Closure $callback);
function whenTableDoesntHaveIndex(string $table, array|string $index, Closure $callback, ?string $type = null);
function whenTableHasColumn(string $table, string $column, Closure $callback);
function whenTableHasIndex(string $table, array|string $index, Closure $callback, ?string $type = null);
function withoutForeignKeyConstraints(Closure $callback);
static function __callStatic($method, $parameters);
static function defaultMorphKeyType(string $type);
static function defaultStringLength($length);
static function defaultTimePrecision(?int $precision): void;
static function flushMacros();
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
static function morphUsingUlids();
static function morphUsingUuids();
```

## class MySqlSchemaState
`Illuminate\Database\Schema\MySqlSchemaState` extends Illuminate\Database\Schema\SchemaState

```php
function __construct(Illuminate\Database\Connection $connection, ?Illuminate\Filesystem\Filesystem $files = null, ?callable $processFactory = null);
function dump(Illuminate\Database\Connection $connection, $path);
function handleOutputUsing(callable $output);
function hasMigrationTable(): bool;
function load($path);
function makeProcess(...$arguments);
function withMigrationTable(string $table);
```

## class PostgresBuilder
`Illuminate\Database\Schema\PostgresBuilder` extends Illuminate\Database\Schema\Builder

```php
function __call($method, $parameters);
function __construct(Illuminate\Database\Connection $connection);
function blueprintResolver(Closure $resolver);
function create($table, Closure $callback);
function createDatabase($name);
function disableForeignKeyConstraints();
function drop($table);
function dropAllTables();
function dropAllTypes();
function dropAllViews();
function dropColumns($table, $columns);
function dropDatabaseIfExists($name);
function dropIfExists($table);
function enableForeignKeyConstraints();
function ensureExtensionExists($name, $schema = null);
function ensureVectorExtensionExists($schema = null);
function getColumnListing($table);
function getColumnType($table, $column, $fullDefinition = false);
function getColumns($table);
function getConnection();
function getCurrentSchemaListing();
function getCurrentSchemaName();
function getForeignKeys($table);
function getIndexListing($table);
function getIndexes($table);
function getSchemas();
function getTableListing($schema = null, $schemaQualified = true);
function getTables($schema = null);
function getTypes($schema = null);
function getViews($schema = null);
function hasColumn($table, $column);
function hasColumns($table, array $columns);
function hasForeignKey($table, $foreignKey);
function hasIndex($table, $index, $type = null);
function hasTable($table);
function hasView($view);
function parseSchemaAndTable($reference, $withDefaultSchema = null);
function rename($from, $to);
function table($table, Closure $callback);
function whenTableDoesntHaveColumn(string $table, string $column, Closure $callback);
function whenTableDoesntHaveIndex(string $table, array|string $index, Closure $callback, ?string $type = null);
function whenTableHasColumn(string $table, string $column, Closure $callback);
function whenTableHasIndex(string $table, array|string $index, Closure $callback, ?string $type = null);
function withoutForeignKeyConstraints(Closure $callback);
static function __callStatic($method, $parameters);
static function defaultMorphKeyType(string $type);
static function defaultStringLength($length);
static function defaultTimePrecision(?int $precision): void;
static function flushMacros();
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
static function morphUsingUlids();
static function morphUsingUuids();
```

## class PostgresSchemaState
`Illuminate\Database\Schema\PostgresSchemaState` extends Illuminate\Database\Schema\SchemaState

```php
function __construct(Illuminate\Database\Connection $connection, ?Illuminate\Filesystem\Filesystem $files = null, ?callable $processFactory = null);
function dump(Illuminate\Database\Connection $connection, $path);
function handleOutputUsing(callable $output);
function hasMigrationTable(): bool;
function load($path);
function makeProcess(...$arguments);
function withMigrationTable(string $table);
```

## class SQLiteBuilder
`Illuminate\Database\Schema\SQLiteBuilder` extends Illuminate\Database\Schema\Builder

```php
function __call($method, $parameters);
function __construct(Illuminate\Database\Connection $connection);
function blueprintResolver(Closure $resolver);
function create($table, Closure $callback);
function createDatabase($name);
function disableForeignKeyConstraints();
function drop($table);
function dropAllTables();
function dropAllTypes();
function dropAllViews();
function dropColumns($table, $columns);
function dropDatabaseIfExists($name);
function dropIfExists($table);
function enableForeignKeyConstraints();
function ensureExtensionExists($name, $schema = null);
function ensureVectorExtensionExists($schema = null);
function getColumnListing($table);
function getColumnType($table, $column, $fullDefinition = false);
function getColumns($table);
function getConnection();
function getCurrentSchemaListing();
function getCurrentSchemaName();
function getForeignKeys($table);
function getIndexListing($table);
function getIndexes($table);
function getSchemas();
function getTableListing($schema = null, $schemaQualified = true);
function getTables($schema = null);
function getTypes($schema = null);
function getViews($schema = null);
function hasColumn($table, $column);
function hasColumns($table, array $columns);
function hasForeignKey($table, $foreignKey);
function hasIndex($table, $index, $type = null);
function hasTable($table);
function hasView($view);
function parseSchemaAndTable($reference, $withDefaultSchema = null);
function pragma($key, $value = null);
function refreshDatabaseFile($path = null);
function rename($from, $to);
function table($table, Closure $callback);
function whenTableDoesntHaveColumn(string $table, string $column, Closure $callback);
function whenTableDoesntHaveIndex(string $table, array|string $index, Closure $callback, ?string $type = null);
function whenTableHasColumn(string $table, string $column, Closure $callback);
function whenTableHasIndex(string $table, array|string $index, Closure $callback, ?string $type = null);
function withoutForeignKeyConstraints(Closure $callback);
static function __callStatic($method, $parameters);
static function defaultMorphKeyType(string $type);
static function defaultStringLength($length);
static function defaultTimePrecision(?int $precision): void;
static function flushMacros();
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
static function morphUsingUlids();
static function morphUsingUuids();
```

## class SchemaState
`Illuminate\Database\Schema\SchemaState`

```php
abstract function dump(Illuminate\Database\Connection $connection, $path);
abstract function load($path);
function __construct(Illuminate\Database\Connection $connection, ?Illuminate\Filesystem\Filesystem $files = null, ?callable $processFactory = null);
function handleOutputUsing(callable $output);
function hasMigrationTable(): bool;
function makeProcess(...$arguments);
function withMigrationTable(string $table);
```

## class SqlServerBuilder
`Illuminate\Database\Schema\SqlServerBuilder` extends Illuminate\Database\Schema\Builder

```php
function __call($method, $parameters);
function __construct(Illuminate\Database\Connection $connection);
function blueprintResolver(Closure $resolver);
function create($table, Closure $callback);
function createDatabase($name);
function disableForeignKeyConstraints();
function drop($table);
function dropAllTables();
function dropAllTypes();
function dropAllViews();
function dropColumns($table, $columns);
function dropDatabaseIfExists($name);
function dropIfExists($table);
function enableForeignKeyConstraints();
function ensureExtensionExists($name, $schema = null);
function ensureVectorExtensionExists($schema = null);
function getColumnListing($table);
function getColumnType($table, $column, $fullDefinition = false);
function getColumns($table);
function getConnection();
function getCurrentSchemaListing();
function getCurrentSchemaName();
function getForeignKeys($table);
function getIndexListing($table);
function getIndexes($table);
function getSchemas();
function getTableListing($schema = null, $schemaQualified = true);
function getTables($schema = null);
function getTypes($schema = null);
function getViews($schema = null);
function hasColumn($table, $column);
function hasColumns($table, array $columns);
function hasForeignKey($table, $foreignKey);
function hasIndex($table, $index, $type = null);
function hasTable($table);
function hasView($view);
function parseSchemaAndTable($reference, $withDefaultSchema = null);
function rename($from, $to);
function table($table, Closure $callback);
function whenTableDoesntHaveColumn(string $table, string $column, Closure $callback);
function whenTableDoesntHaveIndex(string $table, array|string $index, Closure $callback, ?string $type = null);
function whenTableHasColumn(string $table, string $column, Closure $callback);
function whenTableHasIndex(string $table, array|string $index, Closure $callback, ?string $type = null);
function withoutForeignKeyConstraints(Closure $callback);
static function __callStatic($method, $parameters);
static function defaultMorphKeyType(string $type);
static function defaultStringLength($length);
static function defaultTimePrecision(?int $precision): void;
static function flushMacros();
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
static function morphUsingUlids();
static function morphUsingUuids();
```

## class SqliteSchemaState
`Illuminate\Database\Schema\SqliteSchemaState` extends Illuminate\Database\Schema\SchemaState

```php
function __construct(Illuminate\Database\Connection $connection, ?Illuminate\Filesystem\Filesystem $files = null, ?callable $processFactory = null);
function dump(Illuminate\Database\Connection $connection, $path);
function handleOutputUsing(callable $output);
function hasMigrationTable(): bool;
function load($path);
function makeProcess(...$arguments);
function withMigrationTable(string $table);
```

