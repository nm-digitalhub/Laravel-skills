# Illuminate\Database\Query\Grammars

Version: 13.14.0

## class Grammar
`Illuminate\Database\Query\Grammars\Grammar` extends Illuminate\Database\Grammar

```php
function __call($method, $parameters);
function __construct(Illuminate\Database\Connection $connection);
function columnize(array $columns);
function compileDelete(Illuminate\Database\Query\Builder $query);
function compileExists(Illuminate\Database\Query\Builder $query);
function compileInsert(Illuminate\Database\Query\Builder $query, array $values);
function compileInsertGetId(Illuminate\Database\Query\Builder $query, $values, $sequence);
function compileInsertOrIgnore(Illuminate\Database\Query\Builder $query, array $values);
function compileInsertOrIgnoreReturning(Illuminate\Database\Query\Builder $query, array $values, array $returning, ?array $uniqueBy);
function compileInsertOrIgnoreUsing(Illuminate\Database\Query\Builder $query, array $columns, string $sql);
function compileInsertUsing(Illuminate\Database\Query\Builder $query, array $columns, string $sql);
function compileJoinLateral(Illuminate\Database\Query\JoinLateralClause $join, string $expression): string;
function compileJsonValueCast($value);
function compileRandom($seed);
function compileSavepoint($name);
function compileSavepointRollBack($name);
function compileSelect(Illuminate\Database\Query\Builder $query);
function compileThreadCount();
function compileTruncate(Illuminate\Database\Query\Builder $query);
function compileUpdate(Illuminate\Database\Query\Builder $query, array $values);
function compileUpsert(Illuminate\Database\Query\Builder $query, array $values, array $uniqueBy, array $update);
function compileWheres(Illuminate\Database\Query\Builder $query);
function escape($value, $binary = false);
function getBitwiseOperators();
function getDateFormat();
function getOperators();
function getTablePrefix();
function getValue($expression);
function isExpression($value);
function parameter($value);
function parameterize(array $values);
function prepareBindingForJsonContains($binding);
function prepareBindingsForDelete(array $bindings);
function prepareBindingsForUpdate(array $bindings, array $values);
function quoteString($value);
function setTablePrefix($prefix);
function substituteBindingsIntoRawSql($sql, $bindings);
function supportsSavepoints();
function whereExpression(Illuminate\Database\Query\Builder $query, $where);
function whereFullText(Illuminate\Database\Query\Builder $query, $where);
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
`Illuminate\Database\Query\Grammars\MariaDbGrammar` extends Illuminate\Database\Query\Grammars\MySqlGrammar

```php
function __call($method, $parameters);
function __construct(Illuminate\Database\Connection $connection);
function columnize(array $columns);
function compileDelete(Illuminate\Database\Query\Builder $query);
function compileExists(Illuminate\Database\Query\Builder $query);
function compileInsert(Illuminate\Database\Query\Builder $query, array $values);
function compileInsertGetId(Illuminate\Database\Query\Builder $query, $values, $sequence);
function compileInsertOrIgnore(Illuminate\Database\Query\Builder $query, array $values);
function compileInsertOrIgnoreReturning(Illuminate\Database\Query\Builder $query, array $values, array $returning, ?array $uniqueBy);
function compileInsertOrIgnoreUsing(Illuminate\Database\Query\Builder $query, array $columns, string $sql);
function compileInsertUsing(Illuminate\Database\Query\Builder $query, array $columns, string $sql);
function compileJoinLateral(Illuminate\Database\Query\JoinLateralClause $join, string $expression): string;
function compileJsonValueCast($value);
function compileRandom($seed);
function compileSavepoint($name);
function compileSavepointRollBack($name);
function compileSelect(Illuminate\Database\Query\Builder $query);
function compileThreadCount();
function compileTruncate(Illuminate\Database\Query\Builder $query);
function compileUpdate(Illuminate\Database\Query\Builder $query, array $values);
function compileUpsert(Illuminate\Database\Query\Builder $query, array $values, array $uniqueBy, array $update);
function compileWheres(Illuminate\Database\Query\Builder $query);
function escape($value, $binary = false);
function getBitwiseOperators();
function getDateFormat();
function getOperators();
function getTablePrefix();
function getValue($expression);
function isExpression($value);
function parameter($value);
function parameterize(array $values);
function prepareBindingForJsonContains($binding);
function prepareBindingsForDelete(array $bindings);
function prepareBindingsForUpdate(array $bindings, array $values);
function quoteString($value);
function setTablePrefix($prefix);
function substituteBindingsIntoRawSql($sql, $bindings);
function supportsSavepoints();
function useLegacyGroupLimit(Illuminate\Database\Query\Builder $query);
function whereExpression(Illuminate\Database\Query\Builder $query, $where);
function whereFullText(Illuminate\Database\Query\Builder $query, $where);
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
`Illuminate\Database\Query\Grammars\MySqlGrammar` extends Illuminate\Database\Query\Grammars\Grammar

```php
function __call($method, $parameters);
function __construct(Illuminate\Database\Connection $connection);
function columnize(array $columns);
function compileDelete(Illuminate\Database\Query\Builder $query);
function compileExists(Illuminate\Database\Query\Builder $query);
function compileInsert(Illuminate\Database\Query\Builder $query, array $values);
function compileInsertGetId(Illuminate\Database\Query\Builder $query, $values, $sequence);
function compileInsertOrIgnore(Illuminate\Database\Query\Builder $query, array $values);
function compileInsertOrIgnoreReturning(Illuminate\Database\Query\Builder $query, array $values, array $returning, ?array $uniqueBy);
function compileInsertOrIgnoreUsing(Illuminate\Database\Query\Builder $query, array $columns, string $sql);
function compileInsertUsing(Illuminate\Database\Query\Builder $query, array $columns, string $sql);
function compileJoinLateral(Illuminate\Database\Query\JoinLateralClause $join, string $expression): string;
function compileJsonValueCast($value);
function compileRandom($seed);
function compileSavepoint($name);
function compileSavepointRollBack($name);
function compileSelect(Illuminate\Database\Query\Builder $query);
function compileThreadCount();
function compileTruncate(Illuminate\Database\Query\Builder $query);
function compileUpdate(Illuminate\Database\Query\Builder $query, array $values);
function compileUpsert(Illuminate\Database\Query\Builder $query, array $values, array $uniqueBy, array $update);
function compileWheres(Illuminate\Database\Query\Builder $query);
function escape($value, $binary = false);
function getBitwiseOperators();
function getDateFormat();
function getOperators();
function getTablePrefix();
function getValue($expression);
function isExpression($value);
function parameter($value);
function parameterize(array $values);
function prepareBindingForJsonContains($binding);
function prepareBindingsForDelete(array $bindings);
function prepareBindingsForUpdate(array $bindings, array $values);
function quoteString($value);
function setTablePrefix($prefix);
function substituteBindingsIntoRawSql($sql, $bindings);
function supportsSavepoints();
function useLegacyGroupLimit(Illuminate\Database\Query\Builder $query);
function whereExpression(Illuminate\Database\Query\Builder $query, $where);
function whereFullText(Illuminate\Database\Query\Builder $query, $where);
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
`Illuminate\Database\Query\Grammars\PostgresGrammar` extends Illuminate\Database\Query\Grammars\Grammar

```php
function __call($method, $parameters);
function __construct(Illuminate\Database\Connection $connection);
function columnize(array $columns);
function compileDelete(Illuminate\Database\Query\Builder $query);
function compileExists(Illuminate\Database\Query\Builder $query);
function compileInsert(Illuminate\Database\Query\Builder $query, array $values);
function compileInsertGetId(Illuminate\Database\Query\Builder $query, $values, $sequence);
function compileInsertOrIgnore(Illuminate\Database\Query\Builder $query, array $values);
function compileInsertOrIgnoreReturning(Illuminate\Database\Query\Builder $query, array $values, array $returning, ?array $uniqueBy);
function compileInsertOrIgnoreUsing(Illuminate\Database\Query\Builder $query, array $columns, string $sql);
function compileInsertUsing(Illuminate\Database\Query\Builder $query, array $columns, string $sql);
function compileJoinLateral(Illuminate\Database\Query\JoinLateralClause $join, string $expression): string;
function compileJsonValueCast($value);
function compileRandom($seed);
function compileSavepoint($name);
function compileSavepointRollBack($name);
function compileSelect(Illuminate\Database\Query\Builder $query);
function compileThreadCount();
function compileTruncate(Illuminate\Database\Query\Builder $query);
function compileUpdate(Illuminate\Database\Query\Builder $query, array $values);
function compileUpdateFrom(Illuminate\Database\Query\Builder $query, $values);
function compileUpsert(Illuminate\Database\Query\Builder $query, array $values, array $uniqueBy, array $update);
function compileWheres(Illuminate\Database\Query\Builder $query);
function escape($value, $binary = false);
function getBitwiseOperators();
function getDateFormat();
function getOperators();
function getTablePrefix();
function getValue($expression);
function isExpression($value);
function parameter($value);
function parameterize(array $values);
function prepareBindingForJsonContains($binding);
function prepareBindingsForDelete(array $bindings);
function prepareBindingsForUpdate(array $bindings, array $values);
function prepareBindingsForUpdateFrom(array $bindings, array $values);
function quoteString($value);
function setTablePrefix($prefix);
function substituteBindingsIntoRawSql($sql, $bindings);
function supportsSavepoints();
function whereExpression(Illuminate\Database\Query\Builder $query, $where);
function whereFullText(Illuminate\Database\Query\Builder $query, $where);
function wrap($value);
function wrapArray(array $values);
function wrapTable($table, $prefix = null);
static function __callStatic($method, $parameters);
static function cascadeOnTrucate(bool $value = true);
static function cascadeOnTruncate(bool $value = true);
static function customOperators(array $operators);
static function flushMacros();
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
```

## class SQLiteGrammar
`Illuminate\Database\Query\Grammars\SQLiteGrammar` extends Illuminate\Database\Query\Grammars\Grammar

```php
function __call($method, $parameters);
function __construct(Illuminate\Database\Connection $connection);
function columnize(array $columns);
function compileDelete(Illuminate\Database\Query\Builder $query);
function compileExists(Illuminate\Database\Query\Builder $query);
function compileInsert(Illuminate\Database\Query\Builder $query, array $values);
function compileInsertGetId(Illuminate\Database\Query\Builder $query, $values, $sequence);
function compileInsertOrIgnore(Illuminate\Database\Query\Builder $query, array $values);
function compileInsertOrIgnoreReturning(Illuminate\Database\Query\Builder $query, array $values, array $returning, ?array $uniqueBy);
function compileInsertOrIgnoreUsing(Illuminate\Database\Query\Builder $query, array $columns, string $sql);
function compileInsertUsing(Illuminate\Database\Query\Builder $query, array $columns, string $sql);
function compileJoinLateral(Illuminate\Database\Query\JoinLateralClause $join, string $expression): string;
function compileJsonValueCast($value);
function compileRandom($seed);
function compileSavepoint($name);
function compileSavepointRollBack($name);
function compileSelect(Illuminate\Database\Query\Builder $query);
function compileThreadCount();
function compileTruncate(Illuminate\Database\Query\Builder $query);
function compileUpdate(Illuminate\Database\Query\Builder $query, array $values);
function compileUpsert(Illuminate\Database\Query\Builder $query, array $values, array $uniqueBy, array $update);
function compileWheres(Illuminate\Database\Query\Builder $query);
function escape($value, $binary = false);
function getBitwiseOperators();
function getDateFormat();
function getOperators();
function getTablePrefix();
function getValue($expression);
function isExpression($value);
function parameter($value);
function parameterize(array $values);
function prepareBindingForJsonContains($binding);
function prepareBindingsForDelete(array $bindings);
function prepareBindingsForUpdate(array $bindings, array $values);
function prepareWhereLikeBinding($value, $caseSensitive);
function quoteString($value);
function setTablePrefix($prefix);
function substituteBindingsIntoRawSql($sql, $bindings);
function supportsSavepoints();
function whereExpression(Illuminate\Database\Query\Builder $query, $where);
function whereFullText(Illuminate\Database\Query\Builder $query, $where);
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
`Illuminate\Database\Query\Grammars\SqlServerGrammar` extends Illuminate\Database\Query\Grammars\Grammar

```php
function __call($method, $parameters);
function __construct(Illuminate\Database\Connection $connection);
function columnize(array $columns);
function compileDelete(Illuminate\Database\Query\Builder $query);
function compileExists(Illuminate\Database\Query\Builder $query);
function compileInsert(Illuminate\Database\Query\Builder $query, array $values);
function compileInsertGetId(Illuminate\Database\Query\Builder $query, $values, $sequence);
function compileInsertOrIgnore(Illuminate\Database\Query\Builder $query, array $values);
function compileInsertOrIgnoreReturning(Illuminate\Database\Query\Builder $query, array $values, array $returning, ?array $uniqueBy);
function compileInsertOrIgnoreUsing(Illuminate\Database\Query\Builder $query, array $columns, string $sql);
function compileInsertUsing(Illuminate\Database\Query\Builder $query, array $columns, string $sql);
function compileJoinLateral(Illuminate\Database\Query\JoinLateralClause $join, string $expression): string;
function compileJsonValueCast($value);
function compileRandom($seed);
function compileSavepoint($name);
function compileSavepointRollBack($name);
function compileSelect(Illuminate\Database\Query\Builder $query);
function compileThreadCount();
function compileTruncate(Illuminate\Database\Query\Builder $query);
function compileUpdate(Illuminate\Database\Query\Builder $query, array $values);
function compileUpsert(Illuminate\Database\Query\Builder $query, array $values, array $uniqueBy, array $update);
function compileWheres(Illuminate\Database\Query\Builder $query);
function escape($value, $binary = false);
function getBitwiseOperators();
function getDateFormat();
function getOperators();
function getTablePrefix();
function getValue($expression);
function isExpression($value);
function parameter($value);
function parameterize(array $values);
function prepareBindingForJsonContains($binding);
function prepareBindingsForDelete(array $bindings);
function prepareBindingsForUpdate(array $bindings, array $values);
function quoteString($value);
function setTablePrefix($prefix);
function substituteBindingsIntoRawSql($sql, $bindings);
function supportsSavepoints();
function whereExpression(Illuminate\Database\Query\Builder $query, $where);
function whereFullText(Illuminate\Database\Query\Builder $query, $where);
function wrap($value);
function wrapArray(array $values);
function wrapTable($table, $prefix = null);
static function __callStatic($method, $parameters);
static function flushMacros();
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
```

