# Illuminate\Database\Events

Version: 13.14.0

## class ConnectionEstablished
`Illuminate\Database\Events\ConnectionEstablished` extends Illuminate\Database\Events\ConnectionEvent

```php
function __construct($connection);
```

## class ConnectionEvent
`Illuminate\Database\Events\ConnectionEvent`

```php
function __construct($connection);
```

## class DatabaseBusy
`Illuminate\Database\Events\DatabaseBusy`

```php
function __construct($connectionName, $connections);
```

## class DatabaseRefreshed
`Illuminate\Database\Events\DatabaseRefreshed` implements Illuminate\Contracts\Database\Events\MigrationEvent

```php
function __construct(?string $database = null, bool $seeding = false);
```

## class MigrationEnded
`Illuminate\Database\Events\MigrationEnded` extends Illuminate\Database\Events\MigrationEvent implements Illuminate\Contracts\Database\Events\MigrationEvent

```php
function __construct(Illuminate\Database\Migrations\Migration $migration, $method, $name = null);
```

## class MigrationEvent
`Illuminate\Database\Events\MigrationEvent` implements Illuminate\Contracts\Database\Events\MigrationEvent

```php
function __construct(Illuminate\Database\Migrations\Migration $migration, $method, $name = null);
```

## class MigrationSkipped
`Illuminate\Database\Events\MigrationSkipped` implements Illuminate\Contracts\Database\Events\MigrationEvent

```php
function __construct($migrationName);
```

## class MigrationStarted
`Illuminate\Database\Events\MigrationStarted` extends Illuminate\Database\Events\MigrationEvent implements Illuminate\Contracts\Database\Events\MigrationEvent

```php
function __construct(Illuminate\Database\Migrations\Migration $migration, $method, $name = null);
```

## class MigrationsEnded
`Illuminate\Database\Events\MigrationsEnded` extends Illuminate\Database\Events\MigrationsEvent implements Illuminate\Contracts\Database\Events\MigrationEvent

```php
function __construct($method, array $options = []);
```

## class MigrationsEvent
`Illuminate\Database\Events\MigrationsEvent` implements Illuminate\Contracts\Database\Events\MigrationEvent

```php
function __construct($method, array $options = []);
```

## class MigrationsPruned
`Illuminate\Database\Events\MigrationsPruned`

```php
function __construct(Illuminate\Database\Connection $connection, string $path);
```

## class MigrationsStarted
`Illuminate\Database\Events\MigrationsStarted` extends Illuminate\Database\Events\MigrationsEvent implements Illuminate\Contracts\Database\Events\MigrationEvent

```php
function __construct($method, array $options = []);
```

## class ModelPruningFinished
`Illuminate\Database\Events\ModelPruningFinished`

```php
function __construct($models);
```

## class ModelPruningStarting
`Illuminate\Database\Events\ModelPruningStarting`

```php
function __construct($models);
```

## class ModelsPruned
`Illuminate\Database\Events\ModelsPruned`

```php
function __construct($model, $count);
```

## class NoPendingMigrations
`Illuminate\Database\Events\NoPendingMigrations` implements Illuminate\Contracts\Database\Events\MigrationEvent

```php
function __construct($method);
```

## class QueryExecuted
`Illuminate\Database\Events\QueryExecuted`

```php
function __construct($sql, $bindings, $time, $connection, $readWriteType = null);
function toRawSql();
```

## class SchemaDumped
`Illuminate\Database\Events\SchemaDumped`

```php
function __construct($connection, $path);
```

## class SchemaLoaded
`Illuminate\Database\Events\SchemaLoaded`

```php
function __construct($connection, $path);
```

## class StatementPrepared
`Illuminate\Database\Events\StatementPrepared`

```php
function __construct($connection, $statement);
```

## class TransactionBeginning
`Illuminate\Database\Events\TransactionBeginning` extends Illuminate\Database\Events\ConnectionEvent

```php
function __construct($connection);
```

## class TransactionCommitted
`Illuminate\Database\Events\TransactionCommitted` extends Illuminate\Database\Events\ConnectionEvent

```php
function __construct($connection);
```

## class TransactionCommitting
`Illuminate\Database\Events\TransactionCommitting` extends Illuminate\Database\Events\ConnectionEvent

```php
function __construct($connection);
```

## class TransactionRolledBack
`Illuminate\Database\Events\TransactionRolledBack` extends Illuminate\Database\Events\ConnectionEvent

```php
function __construct($connection);
```

