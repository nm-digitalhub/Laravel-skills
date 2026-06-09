# Illuminate\Database\Query\Processors

Version: 13.14.0

## class MariaDbProcessor
`Illuminate\Database\Query\Processors\MariaDbProcessor` extends Illuminate\Database\Query\Processors\MySqlProcessor

```php
function processColumnListing($results);
function processColumns($results);
function processForeignKeys($results);
function processIndexes($results);
function processInsertGetId(Illuminate\Database\Query\Builder $query, $sql, $values, $sequence = null);
function processSchemas($results);
function processSelect(Illuminate\Database\Query\Builder $query, $results);
function processTables($results);
function processTypes($results);
function processViews($results);
```

## class MySqlProcessor
`Illuminate\Database\Query\Processors\MySqlProcessor` extends Illuminate\Database\Query\Processors\Processor

```php
function processColumnListing($results);
function processColumns($results);
function processForeignKeys($results);
function processIndexes($results);
function processInsertGetId(Illuminate\Database\Query\Builder $query, $sql, $values, $sequence = null);
function processSchemas($results);
function processSelect(Illuminate\Database\Query\Builder $query, $results);
function processTables($results);
function processTypes($results);
function processViews($results);
```

## class PostgresProcessor
`Illuminate\Database\Query\Processors\PostgresProcessor` extends Illuminate\Database\Query\Processors\Processor

```php
function processColumns($results);
function processForeignKeys($results);
function processIndexes($results);
function processInsertGetId(Illuminate\Database\Query\Builder $query, $sql, $values, $sequence = null);
function processSchemas($results);
function processSelect(Illuminate\Database\Query\Builder $query, $results);
function processTables($results);
function processTypes($results);
function processViews($results);
```

## class Processor
`Illuminate\Database\Query\Processors\Processor`

```php
function processColumns($results);
function processForeignKeys($results);
function processIndexes($results);
function processInsertGetId(Illuminate\Database\Query\Builder $query, $sql, $values, $sequence = null);
function processSchemas($results);
function processSelect(Illuminate\Database\Query\Builder $query, $results);
function processTables($results);
function processTypes($results);
function processViews($results);
```

## class SQLiteProcessor
`Illuminate\Database\Query\Processors\SQLiteProcessor` extends Illuminate\Database\Query\Processors\Processor

```php
function processColumns($results, $sql = '');
function processForeignKeys($results);
function processIndexes($results);
function processInsertGetId(Illuminate\Database\Query\Builder $query, $sql, $values, $sequence = null);
function processSchemas($results);
function processSelect(Illuminate\Database\Query\Builder $query, $results);
function processTables($results);
function processTypes($results);
function processViews($results);
```

## class SqlServerProcessor
`Illuminate\Database\Query\Processors\SqlServerProcessor` extends Illuminate\Database\Query\Processors\Processor

```php
function processColumns($results);
function processForeignKeys($results);
function processIndexes($results);
function processInsertGetId(Illuminate\Database\Query\Builder $query, $sql, $values, $sequence = null);
function processSchemas($results);
function processSelect(Illuminate\Database\Query\Builder $query, $results);
function processTables($results);
function processTypes($results);
function processViews($results);
```

