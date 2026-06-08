# Illuminate\Database\Concerns

Version: 13.14.0

## trait BuildsQueries
`Illuminate\Database\Concerns\BuildsQueries`

```php
function chunk($count, callable $callback);
function chunkById($count, callable $callback, $column = null, $alias = null);
function chunkByIdDesc($count, callable $callback, $column = null, $alias = null);
function chunkMap(callable $callback, $count = 1000);
function each(callable $callback, $count = 1000);
function eachById(callable $callback, $count = 1000, $column = null, $alias = null);
function first($columns = []);
function firstOrFail($columns = [], $message = null);
function lazy($chunkSize = 1000);
function lazyById($chunkSize = 1000, $column = null, $alias = null);
function lazyByIdDesc($chunkSize = 1000, $column = null, $alias = null);
function orderedChunkById($count, callable $callback, $column = null, $alias = null, $descending = false);
function pipe($callback);
function sole($columns = []);
function tap($callback);
function unless($value = null, ?callable $callback = null, ?callable $default = null);
function when($value = null, ?callable $callback = null, ?callable $default = null);
```

## trait BuildsWhereDateClauses
`Illuminate\Database\Concerns\BuildsWhereDateClauses`

```php
function orWhereAfterToday($columns);
function orWhereBeforeToday($columns);
function orWhereFuture($columns);
function orWhereNowOrFuture($columns);
function orWhereNowOrPast($columns);
function orWherePast($columns);
function orWhereToday($columns);
function orWhereTodayOrAfter($columns);
function orWhereTodayOrBefore($columns);
function whereAfterToday($columns);
function whereBeforeToday($columns);
function whereFuture($columns);
function whereNowOrFuture($columns);
function whereNowOrPast($columns);
function wherePast($columns);
function whereToday($columns, $boolean = 'and');
function whereTodayOrAfter($columns);
function whereTodayOrBefore($columns);
```

## trait CompilesJsonPaths
`Illuminate\Database\Concerns\CompilesJsonPaths`

## trait ExplainsQueries
`Illuminate\Database\Concerns\ExplainsQueries`

```php
function explain();
```

## trait ManagesTransactions
`Illuminate\Database\Concerns\ManagesTransactions`

```php
function afterCommit($callback);
function afterRollBack($callback);
function beginTransaction();
function commit();
function rollBack($toLevel = null);
function transaction(Closure $callback, $attempts = 1);
function transactionLevel();
```

## trait ParsesSearchPath
`Illuminate\Database\Concerns\ParsesSearchPath`

