# Illuminate\Database\Schema\Grammars

Version: 13.14.0

## class Grammar
`Illuminate\Database\Schema\Grammars\Grammar` extends Illuminate\Database\Grammar

```php
function __call($method, $parameters);
function __construct(Illuminate\Database\Connection $connection);
function columnize(array $columns);
function compileChange(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileColumns($schema, $table);
function compileCreateDatabase($name);
function compileDropDatabaseIfExists($name);
function compileDropForeign(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileDropFullText(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileForeign(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileForeignKeys($schema, $table);
function compileFulltext(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileIndexes($schema, $table);
function compileRenameColumn(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileSchemas();
function compileTableExists($schema, $table);
function compileTables($schema);
function compileTypes($schema);
function compileVectorIndex(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileViews($schema);
function escape($value, $binary = false);
function getDateFormat();
function getFluentCommands();
function getTablePrefix();
function getValue($expression);
function isExpression($value);
function parameter($value);
function parameterize(array $values);
function prefixArray($prefix, array $values);
function quoteString($value);
function setTablePrefix($prefix);
function supportsSchemaTransactions();
function wrap($value);
function wrapArray(array $values);
function wrapTable($table, $prefix = null);
static function __callStatic($method, $parameters);
static function flushMacros();
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
```

## class MariaDbGrammar
`Illuminate\Database\Schema\Grammars\MariaDbGrammar` extends Illuminate\Database\Schema\Grammars\MySqlGrammar

```php
function __call($method, $parameters);
function __construct(Illuminate\Database\Connection $connection);
function columnize(array $columns);
function compileAdd(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileAutoIncrementStartingValues(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileChange(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileColumns($schema, $table);
function compileCreate(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileCreateDatabase($name);
function compileDisableForeignKeyConstraints();
function compileDrop(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileDropAllTables($tables);
function compileDropAllViews($views);
function compileDropColumn(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileDropDatabaseIfExists($name);
function compileDropForeign(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileDropFullText(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileDropIfExists(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileDropIndex(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileDropPrimary(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileDropSpatialIndex(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileDropUnique(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileEnableForeignKeyConstraints();
function compileForeign(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileForeignKeys($schema, $table);
function compileFullText(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileIndex(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileIndexes($schema, $table);
function compilePrimary(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileRename(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileRenameColumn(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileRenameIndex(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileSchemas();
function compileSpatialIndex(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileTableComment(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileTableExists($schema, $table);
function compileTables($schema);
function compileTypes($schema);
function compileUnique(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileVectorIndex(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileViews($schema);
function escape($value, $binary = false);
function escapeNames($names);
function getDateFormat();
function getFluentCommands();
function getTablePrefix();
function getValue($expression);
function isExpression($value);
function parameter($value);
function parameterize(array $values);
function prefixArray($prefix, array $values);
function quoteString($value);
function setTablePrefix($prefix);
function supportsSchemaTransactions();
function wrap($value);
function wrapArray(array $values);
function wrapTable($table, $prefix = null);
static function __callStatic($method, $parameters);
static function flushMacros();
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
```

## class MySqlGrammar
`Illuminate\Database\Schema\Grammars\MySqlGrammar` extends Illuminate\Database\Schema\Grammars\Grammar

```php
function __call($method, $parameters);
function __construct(Illuminate\Database\Connection $connection);
function columnize(array $columns);
function compileAdd(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileAutoIncrementStartingValues(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileChange(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileColumns($schema, $table);
function compileCreate(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileCreateDatabase($name);
function compileDisableForeignKeyConstraints();
function compileDrop(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileDropAllTables($tables);
function compileDropAllViews($views);
function compileDropColumn(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileDropDatabaseIfExists($name);
function compileDropForeign(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileDropFullText(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileDropIfExists(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileDropIndex(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileDropPrimary(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileDropSpatialIndex(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileDropUnique(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileEnableForeignKeyConstraints();
function compileForeign(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileForeignKeys($schema, $table);
function compileFullText(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileIndex(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileIndexes($schema, $table);
function compilePrimary(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileRename(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileRenameColumn(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileRenameIndex(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileSchemas();
function compileSpatialIndex(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileTableComment(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileTableExists($schema, $table);
function compileTables($schema);
function compileTypes($schema);
function compileUnique(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileVectorIndex(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileViews($schema);
function escape($value, $binary = false);
function escapeNames($names);
function getDateFormat();
function getFluentCommands();
function getTablePrefix();
function getValue($expression);
function isExpression($value);
function parameter($value);
function parameterize(array $values);
function prefixArray($prefix, array $values);
function quoteString($value);
function setTablePrefix($prefix);
function supportsSchemaTransactions();
function wrap($value);
function wrapArray(array $values);
function wrapTable($table, $prefix = null);
static function __callStatic($method, $parameters);
static function flushMacros();
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
```

## class PostgresGrammar
`Illuminate\Database\Schema\Grammars\PostgresGrammar` extends Illuminate\Database\Schema\Grammars\Grammar

```php
function __call($method, $parameters);
function __construct(Illuminate\Database\Connection $connection);
function columnize(array $columns);
function compileAdd(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileAutoIncrementStartingValues(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileChange(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileColumns($schema, $table);
function compileComment(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileCreate(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileCreateDatabase($name);
function compileDisableForeignKeyConstraints();
function compileDrop(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileDropAllDomains($domains);
function compileDropAllTables($tables);
function compileDropAllTypes($types);
function compileDropAllViews($views);
function compileDropColumn(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileDropDatabaseIfExists($name);
function compileDropForeign(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileDropFullText(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileDropIfExists(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileDropIndex(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileDropPrimary(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileDropSpatialIndex(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileDropUnique(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileEnableForeignKeyConstraints();
function compileForeign(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileForeignKeys($schema, $table);
function compileFulltext(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileIndex(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileIndexes($schema, $table);
function compilePrimary(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileRename(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileRenameColumn(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileRenameIndex(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileSchemas();
function compileSpatialIndex(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileTableComment(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileTableExists($schema, $table);
function compileTables($schema);
function compileTypes($schema);
function compileUnique(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileVectorIndex(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileViews($schema);
function escape($value, $binary = false);
function escapeNames($names);
function getDateFormat();
function getFluentCommands();
function getTablePrefix();
function getValue($expression);
function isExpression($value);
function parameter($value);
function parameterize(array $values);
function prefixArray($prefix, array $values);
function quoteString($value);
function setTablePrefix($prefix);
function supportsSchemaTransactions();
function wrap($value);
function wrapArray(array $values);
function wrapTable($table, $prefix = null);
static function __callStatic($method, $parameters);
static function flushMacros();
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
```

## class SQLiteGrammar
`Illuminate\Database\Schema\Grammars\SQLiteGrammar` extends Illuminate\Database\Schema\Grammars\Grammar

```php
function __call($method, $parameters);
function __construct(Illuminate\Database\Connection $connection);
function columnize(array $columns);
function compileAdd(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileAlter(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileChange(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileColumns($schema, $table);
function compileCreate(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileCreateDatabase($name);
function compileDbstatExists();
function compileDisableForeignKeyConstraints();
function compileDrop(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileDropAllTables($schema = null);
function compileDropAllViews($schema = null);
function compileDropColumn(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileDropDatabaseIfExists($name);
function compileDropForeign(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileDropFullText(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileDropIfExists(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileDropIndex(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileDropPrimary(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileDropSpatialIndex(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileDropUnique(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileEnableForeignKeyConstraints();
function compileForeign(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileForeignKeys($schema, $table);
function compileFulltext(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileIndex(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileIndexes($schema, $table);
function compileLegacyTables($schema, $withSize = false);
function compilePrimary(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileRebuild($schema = null);
function compileRename(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileRenameColumn(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileRenameIndex(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileSchemas();
function compileSpatialIndex(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileSqlCreateStatement($schema, $name, $type = 'table');
function compileTableExists($schema, $table);
function compileTables($schema, $withSize = false);
function compileTypes($schema);
function compileUnique(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileVectorIndex(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileViews($schema);
function escape($value, $binary = false);
function getAlterCommands();
function getDateFormat();
function getFluentCommands();
function getTablePrefix();
function getValue($expression);
function isExpression($value);
function parameter($value);
function parameterize(array $values);
function pragma(string $key, mixed $value = null): string;
function prefixArray($prefix, array $values);
function quoteString($value);
function setTablePrefix($prefix);
function supportsSchemaTransactions();
function wrap($value);
function wrapArray(array $values);
function wrapTable($table, $prefix = null);
static function __callStatic($method, $parameters);
static function flushMacros();
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
```

## class SqlServerGrammar
`Illuminate\Database\Schema\Grammars\SqlServerGrammar` extends Illuminate\Database\Schema\Grammars\Grammar

```php
function __call($method, $parameters);
function __construct(Illuminate\Database\Connection $connection);
function columnize(array $columns);
function compileAdd(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileChange(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileColumns($schema, $table);
function compileCreate(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileCreateDatabase($name);
function compileDefault(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileDisableForeignKeyConstraints();
function compileDrop(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileDropAllForeignKeys();
function compileDropAllTables();
function compileDropAllViews();
function compileDropColumn(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileDropDatabaseIfExists($name);
function compileDropDefaultConstraint(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileDropForeign(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileDropFullText(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileDropIfExists(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileDropIndex(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileDropPrimary(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileDropSpatialIndex(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileDropUnique(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileEnableForeignKeyConstraints();
function compileForeign(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileForeignKeys($schema, $table);
function compileFulltext(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileIndex(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileIndexes($schema, $table);
function compilePrimary(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileRename(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileRenameColumn(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileRenameIndex(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileSchemas();
function compileSpatialIndex(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileTableExists($schema, $table);
function compileTables($schema);
function compileTypes($schema);
function compileUnique(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileVectorIndex(Illuminate\Database\Schema\Blueprint $blueprint, Illuminate\Support\Fluent $command);
function compileViews($schema);
function escape($value, $binary = false);
function getDateFormat();
function getFluentCommands();
function getTablePrefix();
function getValue($expression);
function isExpression($value);
function parameter($value);
function parameterize(array $values);
function prefixArray($prefix, array $values);
function quoteString($value);
function setTablePrefix($prefix);
function supportsSchemaTransactions();
function wrap($value);
function wrapArray(array $values);
function wrapTable($table, $prefix = null);
static function __callStatic($method, $parameters);
static function flushMacros();
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
```

