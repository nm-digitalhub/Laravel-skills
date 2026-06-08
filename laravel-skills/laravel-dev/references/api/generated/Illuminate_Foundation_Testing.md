# Illuminate\Foundation\Testing

Version: 13.14.0

## class CachedState
`Illuminate\Foundation\Testing\CachedState`

## trait DatabaseMigrations
`Illuminate\Foundation\Testing\DatabaseMigrations`

```php
function runDatabaseMigrations();
```

## trait DatabaseTransactions
`Illuminate\Foundation\Testing\DatabaseTransactions`

```php
function beginDatabaseTransaction();
```

## class DatabaseTransactionsManager
`Illuminate\Foundation\Testing\DatabaseTransactionsManager` extends Illuminate\Database\DatabaseTransactionsManager

```php
function __construct(array $connectionsTransacting);
function addCallback($callback);
function addCallbackForRollback($callback);
function afterCommitCallbacksShouldBeExecuted($level);
function begin($connection, $level);
function callbackApplicableTransactions();
function commit($connection, $levelBeingCommitted, $newTransactionLevel);
function getCommittedTransactions();
function getPendingTransactions();
function rollback($connection, $newTransactionLevel);
function stageTransactions($connection, $levelBeingCommitted);
```

## trait DatabaseTruncation
`Illuminate\Foundation\Testing\DatabaseTruncation`

## trait LazilyRefreshDatabase
`Illuminate\Foundation\Testing\LazilyRefreshDatabase`

```php
function baseRefreshDatabase();
function beginDatabaseTransaction();
function refreshDatabase();
```

## trait RefreshDatabase
`Illuminate\Foundation\Testing\RefreshDatabase`

```php
function beginDatabaseTransaction();
function refreshDatabase();
```

## class RefreshDatabaseState
`Illuminate\Foundation\Testing\RefreshDatabaseState`

## trait WithCachedConfig
`Illuminate\Foundation\Testing\WithCachedConfig`

## trait WithCachedRoutes
`Illuminate\Foundation\Testing\WithCachedRoutes`

## trait WithConsoleEvents
`Illuminate\Foundation\Testing\WithConsoleEvents`

## trait WithFaker
`Illuminate\Foundation\Testing\WithFaker`

## trait WithoutMiddleware
`Illuminate\Foundation\Testing\WithoutMiddleware`

```php
function disableMiddlewareForAllTests();
```

## class Wormhole
`Illuminate\Foundation\Testing\Wormhole`

```php
function __construct($value);
function day($callback = null);
function days($callback = null);
function hour($callback = null);
function hours($callback = null);
function microsecond($callback = null);
function microseconds($callback = null);
function millisecond($callback = null);
function milliseconds($callback = null);
function minute($callback = null);
function minutes($callback = null);
function month($callback = null);
function months($callback = null);
function second($callback = null);
function seconds($callback = null);
function week($callback = null);
function weeks($callback = null);
function year($callback = null);
function years($callback = null);
static function back();
```

