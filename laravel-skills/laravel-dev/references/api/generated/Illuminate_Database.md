# Illuminate\Database

Version: 13.14.0

## class ClassMorphViolationException
`Illuminate\Database\ClassMorphViolationException` extends RuntimeException implements Stringable, Throwable

```php
final function getCode();
final function getFile(): string;
final function getLine(): int;
final function getMessage(): string;
final function getPrevious(): ?Throwable;
final function getTrace(): array;
final function getTraceAsString(): string;
function __construct($model);
function __toString(): string;
function __wakeup();
```

## class ConcurrencyErrorDetector
`Illuminate\Database\ConcurrencyErrorDetector` implements Illuminate\Contracts\Database\ConcurrencyErrorDetector

```php
function causedByConcurrencyError(Throwable $e): bool;
```

## class ConfigurationUrlParser
`Illuminate\Database\ConfigurationUrlParser` extends Illuminate\Support\ConfigurationUrlParser

```php
function parseConfiguration($config);
static function addDriverAlias($alias, $driver);
static function getDriverAliases();
```

## class Connection
`Illuminate\Database\Connection` implements Illuminate\Database\ConnectionInterface

```php
function __call($method, $parameters);
function __clone();
function __construct($pdo, $database = '', $tablePrefix = '', array $config = []);
function affectingStatement($query, $bindings = []);
function afterCommit($callback);
function afterRollBack($callback);
function allowQueryDurationHandlersToRunAgain();
function beforeExecuting(Closure $callback);
function beforeStartingTransaction(Closure $callback);
function beginTransaction();
function bindValues($statement, $bindings);
function commit();
function cursor($query, $bindings = [], $useReadPdo = true, array $fetchUsing = []);
function delete($query, $bindings = []);
function disableQueryLog();
function disconnect();
function enableQueryLog();
function escape($value, $binary = false);
function flushQueryLog();
function forgetRecordModificationState();
function getConfig($option = null);
function getDatabaseName();
function getDriverName();
function getDriverTitle();
function getEventDispatcher();
function getName();
function getNameWithReadWriteType();
function getPdo();
function getPostProcessor();
function getQueryGrammar();
function getQueryLog();
function getRawPdo();
function getRawQueryLog();
function getRawReadPdo();
function getReadPdo();
function getSchemaBuilder();
function getSchemaGrammar();
function getServerVersion(): string;
function getTablePrefix();
function hasModifiedRecords();
function insert($query, $bindings = []);
function listen(Closure $callback);
function logQuery($query, $bindings, $time = null);
function logging();
function prepareBindings(array $bindings);
function pretend(Closure $callback);
function pretending();
function query();
function raw($value);
function reconnect();
function reconnectIfMissingConnection();
function recordsHaveBeenModified($value = true);
function resetTotalQueryDuration();
function rollBack($toLevel = null);
function scalar($query, $bindings = [], $useReadPdo = true);
function select($query, $bindings = [], $useReadPdo = true, array $fetchUsing = []);
function selectFromWriteConnection($query, $bindings = []);
function selectOne($query, $bindings = [], $useReadPdo = true);
function selectResultSets($query, $bindings = [], $useReadPdo = true, array $fetchUsing = []);
function setDatabaseName($database);
function setEventDispatcher(Illuminate\Contracts\Events\Dispatcher $events);
function setPdo($pdo);
function setPostProcessor(Illuminate\Database\Query\Processors\Processor $processor);
function setQueryGrammar(Illuminate\Database\Query\Grammars\Grammar $grammar);
function setReadPdo($pdo);
function setReadPdoConfig(array $config);
function setReadWriteType($readWriteType);
function setReconnector(callable $reconnector);
function setRecordModificationState(bool $value);
function setSchemaGrammar(Illuminate\Database\Schema\Grammars\Grammar $grammar);
function setTablePrefix($prefix);
function setTransactionManager($manager);
function statement($query, $bindings = []);
function table($table, $as = null);
function threadCount();
function totalQueryDuration();
function transaction(Closure $callback, $attempts = 1);
function transactionLevel();
function unprepared($query);
function unsetEventDispatcher();
function unsetTransactionManager();
function update($query, $bindings = []);
function useDefaultPostProcessor();
function useDefaultQueryGrammar();
function useDefaultSchemaGrammar();
function useWriteConnectionWhenReading($value = true);
function whenQueryingForLongerThan($threshold, $handler);
function withoutPretending(Closure $callback);
function withoutTablePrefix(Closure $callback): mixed;
static function __callStatic($method, $parameters);
static function flushMacros();
static function getResolver($driver);
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
static function resolverFor($driver, Closure $callback);
```

## interface ConnectionInterface
`Illuminate\Database\ConnectionInterface`

```php
abstract function affectingStatement($query, $bindings = []);
abstract function beginTransaction();
abstract function commit();
abstract function cursor($query, $bindings = [], $useReadPdo = true, array $fetchUsing = []);
abstract function delete($query, $bindings = []);
abstract function getDatabaseName();
abstract function insert($query, $bindings = []);
abstract function prepareBindings(array $bindings);
abstract function pretend(Closure $callback);
abstract function raw($value);
abstract function rollBack();
abstract function scalar($query, $bindings = [], $useReadPdo = true);
abstract function select($query, $bindings = [], $useReadPdo = true, array $fetchUsing = []);
abstract function selectOne($query, $bindings = [], $useReadPdo = true);
abstract function statement($query, $bindings = []);
abstract function table($table, $as = null);
abstract function transaction(Closure $callback, $attempts = 1);
abstract function transactionLevel();
abstract function unprepared($query);
abstract function update($query, $bindings = []);
```

## class ConnectionResolver
`Illuminate\Database\ConnectionResolver` implements Illuminate\Database\ConnectionResolverInterface

```php
function __construct(array $connections = []);
function addConnection($name, Illuminate\Database\ConnectionInterface $connection);
function connection($name = null);
function getDefaultConnection();
function hasConnection($name);
function setDefaultConnection($name);
```

## interface ConnectionResolverInterface
`Illuminate\Database\ConnectionResolverInterface`

```php
abstract function connection($name = null);
abstract function getDefaultConnection();
abstract function setDefaultConnection($name);
```

## class DatabaseManager
`Illuminate\Database\DatabaseManager` implements Illuminate\Database\ConnectionResolverInterface

```php
function __call($method, $parameters);
function __construct($app, Illuminate\Database\Connectors\ConnectionFactory $factory);
function availableDrivers();
function build(array $config);
function connectUsing(UnitEnum|string $name, array $config, bool $force = false);
function connection($name = null);
function disconnect($name = null);
function extend($name, callable $resolver);
function forgetExtension($name);
function getConnections();
function getDefaultConnection();
function macroCall($method, $parameters);
function purge($name = null);
function reconnect($name = null);
function setApplication($app);
function setDefaultConnection($name);
function setReconnector(callable $reconnector);
function supportedDrivers();
function usingConnection($name, callable $callback);
static function __callStatic($method, $parameters);
static function calculateDynamicConnectionName(array $config);
static function flushMacros();
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
```

## class DatabaseServiceProvider
`Illuminate\Database\DatabaseServiceProvider` extends Illuminate\Support\ServiceProvider

```php
function __construct($app);
function boot();
function booted(Closure $callback);
function booting(Closure $callback);
function callBootedCallbacks();
function callBootingCallbacks();
function commands($commands);
function isDeferred();
function provides();
function register();
function when();
static function addProviderToBootstrapFile(string $provider, ?string $path = null);
static function defaultProviders();
static function pathsToPublish($provider = null, $group = null);
static function publishableGroups();
static function publishableMigrationPaths();
static function publishableProviders();
static function removeProviderFromBootstrapFile(array|string $providersToRemove, ?string $path = null, bool $strict = false);
```

## class DatabaseTransactionRecord
`Illuminate\Database\DatabaseTransactionRecord`

```php
function __construct($connection, $level, ?Illuminate\Database\DatabaseTransactionRecord $parent = null);
function addCallback($callback);
function addCallbackForRollback($callback);
function executeCallbacks();
function executeCallbacksForRollback();
function getCallbacks();
function getCallbacksForRollback();
```

## class DatabaseTransactionsManager
`Illuminate\Database\DatabaseTransactionsManager`

```php
function __construct();
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

## class DeadlockException
`Illuminate\Database\DeadlockException` extends PDOException implements Throwable, Stringable

```php
final function getCode();
final function getFile(): string;
final function getLine(): int;
final function getMessage(): string;
final function getPrevious(): ?Throwable;
final function getTrace(): array;
final function getTraceAsString(): string;
function __construct(string $message = '', int $code = 0, ?Throwable $previous = null);
function __toString(): string;
function __wakeup();
```

## trait DetectsConcurrencyErrors
`Illuminate\Database\DetectsConcurrencyErrors`

## trait DetectsLostConnections
`Illuminate\Database\DetectsLostConnections`

## class Grammar
`Illuminate\Database\Grammar`

```php
function __call($method, $parameters);
function __construct(Illuminate\Database\Connection $connection);
function columnize(array $columns);
function escape($value, $binary = false);
function getDateFormat();
function getTablePrefix();
function getValue($expression);
function isExpression($value);
function parameter($value);
function parameterize(array $values);
function quoteString($value);
function setTablePrefix($prefix);
function wrap($value);
function wrapArray(array $values);
function wrapTable($table, $prefix = null);
static function __callStatic($method, $parameters);
static function flushMacros();
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
```

## class LazyLoadingViolationException
`Illuminate\Database\LazyLoadingViolationException` extends RuntimeException implements Stringable, Throwable

```php
final function getCode();
final function getFile(): string;
final function getLine(): int;
final function getMessage(): string;
final function getPrevious(): ?Throwable;
final function getTrace(): array;
final function getTraceAsString(): string;
function __construct($model, $relation);
function __toString(): string;
function __wakeup();
```

## class LostConnectionDetector
`Illuminate\Database\LostConnectionDetector` implements Illuminate\Contracts\Database\LostConnectionDetector

```php
function causedByLostConnection(Throwable $e): bool;
```

## class LostConnectionException
`Illuminate\Database\LostConnectionException` extends LogicException implements Stringable, Throwable

```php
final function getCode();
final function getFile(): string;
final function getLine(): int;
final function getMessage(): string;
final function getPrevious(): ?Throwable;
final function getTrace(): array;
final function getTraceAsString(): string;
function __construct(string $message = '', int $code = 0, ?Throwable $previous = null);
function __toString(): string;
function __wakeup();
```

## class MariaDbConnection
`Illuminate\Database\MariaDbConnection` extends Illuminate\Database\MySqlConnection implements Illuminate\Database\ConnectionInterface

```php
function __call($method, $parameters);
function __clone();
function __construct($pdo, $database = '', $tablePrefix = '', array $config = []);
function affectingStatement($query, $bindings = []);
function afterCommit($callback);
function afterRollBack($callback);
function allowQueryDurationHandlersToRunAgain();
function beforeExecuting(Closure $callback);
function beforeStartingTransaction(Closure $callback);
function beginTransaction();
function bindValues($statement, $bindings);
function commit();
function cursor($query, $bindings = [], $useReadPdo = true, array $fetchUsing = []);
function delete($query, $bindings = []);
function disableQueryLog();
function disconnect();
function enableQueryLog();
function escape($value, $binary = false);
function flushQueryLog();
function forgetRecordModificationState();
function getConfig($option = null);
function getDatabaseName();
function getDriverName();
function getDriverTitle();
function getEventDispatcher();
function getLastInsertId();
function getName();
function getNameWithReadWriteType();
function getPdo();
function getPostProcessor();
function getQueryGrammar();
function getQueryLog();
function getRawPdo();
function getRawQueryLog();
function getRawReadPdo();
function getReadPdo();
function getSchemaBuilder();
function getSchemaGrammar();
function getSchemaState(?Illuminate\Filesystem\Filesystem $files = null, ?callable $processFactory = null);
function getServerVersion(): string;
function getTablePrefix();
function hasModifiedRecords();
function insert($query, $bindings = [], $sequence = null);
function isMaria();
function listen(Closure $callback);
function logQuery($query, $bindings, $time = null);
function logging();
function prepareBindings(array $bindings);
function pretend(Closure $callback);
function pretending();
function query();
function raw($value);
function reconnect();
function reconnectIfMissingConnection();
function recordsHaveBeenModified($value = true);
function resetTotalQueryDuration();
function rollBack($toLevel = null);
function scalar($query, $bindings = [], $useReadPdo = true);
function select($query, $bindings = [], $useReadPdo = true, array $fetchUsing = []);
function selectFromWriteConnection($query, $bindings = []);
function selectOne($query, $bindings = [], $useReadPdo = true);
function selectResultSets($query, $bindings = [], $useReadPdo = true, array $fetchUsing = []);
function setDatabaseName($database);
function setEventDispatcher(Illuminate\Contracts\Events\Dispatcher $events);
function setPdo($pdo);
function setPostProcessor(Illuminate\Database\Query\Processors\Processor $processor);
function setQueryGrammar(Illuminate\Database\Query\Grammars\Grammar $grammar);
function setReadPdo($pdo);
function setReadPdoConfig(array $config);
function setReadWriteType($readWriteType);
function setReconnector(callable $reconnector);
function setRecordModificationState(bool $value);
function setSchemaGrammar(Illuminate\Database\Schema\Grammars\Grammar $grammar);
function setTablePrefix($prefix);
function setTransactionManager($manager);
function statement($query, $bindings = []);
function table($table, $as = null);
function threadCount();
function totalQueryDuration();
function transaction(Closure $callback, $attempts = 1);
function transactionLevel();
function unprepared($query);
function unsetEventDispatcher();
function unsetTransactionManager();
function update($query, $bindings = []);
function useDefaultPostProcessor();
function useDefaultQueryGrammar();
function useDefaultSchemaGrammar();
function useWriteConnectionWhenReading($value = true);
function whenQueryingForLongerThan($threshold, $handler);
function withoutPretending(Closure $callback);
function withoutTablePrefix(Closure $callback): mixed;
static function __callStatic($method, $parameters);
static function flushMacros();
static function getResolver($driver);
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
static function resolverFor($driver, Closure $callback);
```

## class MigrationServiceProvider
`Illuminate\Database\MigrationServiceProvider` extends Illuminate\Support\ServiceProvider implements Illuminate\Contracts\Support\DeferrableProvider

```php
function __construct($app);
function booted(Closure $callback);
function booting(Closure $callback);
function callBootedCallbacks();
function callBootingCallbacks();
function commands($commands);
function isDeferred();
function provides();
function register();
function when();
static function addProviderToBootstrapFile(string $provider, ?string $path = null);
static function defaultProviders();
static function pathsToPublish($provider = null, $group = null);
static function publishableGroups();
static function publishableMigrationPaths();
static function publishableProviders();
static function removeProviderFromBootstrapFile(array|string $providersToRemove, ?string $path = null, bool $strict = false);
```

## class MultipleColumnsSelectedException
`Illuminate\Database\MultipleColumnsSelectedException` extends RuntimeException implements Stringable, Throwable

```php
final function getCode();
final function getFile(): string;
final function getLine(): int;
final function getMessage(): string;
final function getPrevious(): ?Throwable;
final function getTrace(): array;
final function getTraceAsString(): string;
function __construct(string $message = '', int $code = 0, ?Throwable $previous = null);
function __toString(): string;
function __wakeup();
```

## class MultipleRecordsFoundException
`Illuminate\Database\MultipleRecordsFoundException` extends RuntimeException implements Stringable, Throwable

```php
final function getCode();
final function getFile(): string;
final function getLine(): int;
final function getMessage(): string;
final function getPrevious(): ?Throwable;
final function getTrace(): array;
final function getTraceAsString(): string;
function __construct($count, $code = 0, $previous = null);
function __toString(): string;
function __wakeup();
function getCount();
```

## class MySqlConnection
`Illuminate\Database\MySqlConnection` extends Illuminate\Database\Connection implements Illuminate\Database\ConnectionInterface

```php
function __call($method, $parameters);
function __clone();
function __construct($pdo, $database = '', $tablePrefix = '', array $config = []);
function affectingStatement($query, $bindings = []);
function afterCommit($callback);
function afterRollBack($callback);
function allowQueryDurationHandlersToRunAgain();
function beforeExecuting(Closure $callback);
function beforeStartingTransaction(Closure $callback);
function beginTransaction();
function bindValues($statement, $bindings);
function commit();
function cursor($query, $bindings = [], $useReadPdo = true, array $fetchUsing = []);
function delete($query, $bindings = []);
function disableQueryLog();
function disconnect();
function enableQueryLog();
function escape($value, $binary = false);
function flushQueryLog();
function forgetRecordModificationState();
function getConfig($option = null);
function getDatabaseName();
function getDriverName();
function getDriverTitle();
function getEventDispatcher();
function getLastInsertId();
function getName();
function getNameWithReadWriteType();
function getPdo();
function getPostProcessor();
function getQueryGrammar();
function getQueryLog();
function getRawPdo();
function getRawQueryLog();
function getRawReadPdo();
function getReadPdo();
function getSchemaBuilder();
function getSchemaGrammar();
function getSchemaState(?Illuminate\Filesystem\Filesystem $files = null, ?callable $processFactory = null);
function getServerVersion(): string;
function getTablePrefix();
function hasModifiedRecords();
function insert($query, $bindings = [], $sequence = null);
function isMaria();
function listen(Closure $callback);
function logQuery($query, $bindings, $time = null);
function logging();
function prepareBindings(array $bindings);
function pretend(Closure $callback);
function pretending();
function query();
function raw($value);
function reconnect();
function reconnectIfMissingConnection();
function recordsHaveBeenModified($value = true);
function resetTotalQueryDuration();
function rollBack($toLevel = null);
function scalar($query, $bindings = [], $useReadPdo = true);
function select($query, $bindings = [], $useReadPdo = true, array $fetchUsing = []);
function selectFromWriteConnection($query, $bindings = []);
function selectOne($query, $bindings = [], $useReadPdo = true);
function selectResultSets($query, $bindings = [], $useReadPdo = true, array $fetchUsing = []);
function setDatabaseName($database);
function setEventDispatcher(Illuminate\Contracts\Events\Dispatcher $events);
function setPdo($pdo);
function setPostProcessor(Illuminate\Database\Query\Processors\Processor $processor);
function setQueryGrammar(Illuminate\Database\Query\Grammars\Grammar $grammar);
function setReadPdo($pdo);
function setReadPdoConfig(array $config);
function setReadWriteType($readWriteType);
function setReconnector(callable $reconnector);
function setRecordModificationState(bool $value);
function setSchemaGrammar(Illuminate\Database\Schema\Grammars\Grammar $grammar);
function setTablePrefix($prefix);
function setTransactionManager($manager);
function statement($query, $bindings = []);
function table($table, $as = null);
function threadCount();
function totalQueryDuration();
function transaction(Closure $callback, $attempts = 1);
function transactionLevel();
function unprepared($query);
function unsetEventDispatcher();
function unsetTransactionManager();
function update($query, $bindings = []);
function useDefaultPostProcessor();
function useDefaultQueryGrammar();
function useDefaultSchemaGrammar();
function useWriteConnectionWhenReading($value = true);
function whenQueryingForLongerThan($threshold, $handler);
function withoutPretending(Closure $callback);
function withoutTablePrefix(Closure $callback): mixed;
static function __callStatic($method, $parameters);
static function flushMacros();
static function getResolver($driver);
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
static function resolverFor($driver, Closure $callback);
```

## class PostgresConnection
`Illuminate\Database\PostgresConnection` extends Illuminate\Database\Connection implements Illuminate\Database\ConnectionInterface

```php
function __call($method, $parameters);
function __clone();
function __construct($pdo, $database = '', $tablePrefix = '', array $config = []);
function affectingStatement($query, $bindings = []);
function afterCommit($callback);
function afterRollBack($callback);
function allowQueryDurationHandlersToRunAgain();
function beforeExecuting(Closure $callback);
function beforeStartingTransaction(Closure $callback);
function beginTransaction();
function bindValues($statement, $bindings);
function commit();
function cursor($query, $bindings = [], $useReadPdo = true, array $fetchUsing = []);
function delete($query, $bindings = []);
function disableQueryLog();
function disconnect();
function enableQueryLog();
function escape($value, $binary = false);
function flushQueryLog();
function forgetRecordModificationState();
function getConfig($option = null);
function getDatabaseName();
function getDriverName();
function getDriverTitle();
function getEventDispatcher();
function getName();
function getNameWithReadWriteType();
function getPdo();
function getPostProcessor();
function getQueryGrammar();
function getQueryLog();
function getRawPdo();
function getRawQueryLog();
function getRawReadPdo();
function getReadPdo();
function getSchemaBuilder();
function getSchemaGrammar();
function getSchemaState(?Illuminate\Filesystem\Filesystem $files = null, ?callable $processFactory = null);
function getServerVersion(): string;
function getTablePrefix();
function hasModifiedRecords();
function insert($query, $bindings = []);
function listen(Closure $callback);
function logQuery($query, $bindings, $time = null);
function logging();
function prepareBindings(array $bindings);
function pretend(Closure $callback);
function pretending();
function query();
function raw($value);
function reconnect();
function reconnectIfMissingConnection();
function recordsHaveBeenModified($value = true);
function resetTotalQueryDuration();
function rollBack($toLevel = null);
function scalar($query, $bindings = [], $useReadPdo = true);
function select($query, $bindings = [], $useReadPdo = true, array $fetchUsing = []);
function selectFromWriteConnection($query, $bindings = []);
function selectOne($query, $bindings = [], $useReadPdo = true);
function selectResultSets($query, $bindings = [], $useReadPdo = true, array $fetchUsing = []);
function setDatabaseName($database);
function setEventDispatcher(Illuminate\Contracts\Events\Dispatcher $events);
function setPdo($pdo);
function setPostProcessor(Illuminate\Database\Query\Processors\Processor $processor);
function setQueryGrammar(Illuminate\Database\Query\Grammars\Grammar $grammar);
function setReadPdo($pdo);
function setReadPdoConfig(array $config);
function setReadWriteType($readWriteType);
function setReconnector(callable $reconnector);
function setRecordModificationState(bool $value);
function setSchemaGrammar(Illuminate\Database\Schema\Grammars\Grammar $grammar);
function setTablePrefix($prefix);
function setTransactionManager($manager);
function statement($query, $bindings = []);
function table($table, $as = null);
function threadCount();
function totalQueryDuration();
function transaction(Closure $callback, $attempts = 1);
function transactionLevel();
function unprepared($query);
function unsetEventDispatcher();
function unsetTransactionManager();
function update($query, $bindings = []);
function useDefaultPostProcessor();
function useDefaultQueryGrammar();
function useDefaultSchemaGrammar();
function useWriteConnectionWhenReading($value = true);
function whenQueryingForLongerThan($threshold, $handler);
function withoutPretending(Closure $callback);
function withoutTablePrefix(Closure $callback): mixed;
static function __callStatic($method, $parameters);
static function flushMacros();
static function getResolver($driver);
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
static function resolverFor($driver, Closure $callback);
```

## class QueryException
`Illuminate\Database\QueryException` extends PDOException implements Throwable, Stringable

```php
final function getCode();
final function getFile(): string;
final function getLine(): int;
final function getMessage(): string;
final function getPrevious(): ?Throwable;
final function getTrace(): array;
final function getTraceAsString(): string;
function __construct($connectionName, $sql, array $bindings, Throwable $previous, array $connectionDetails = [], $readWriteType = null);
function __toString(): string;
function __wakeup();
function getBindings();
function getConnectionDetails();
function getConnectionName();
function getRawSql(): string;
function getSql();
```

## class RecordNotFoundException
`Illuminate\Database\RecordNotFoundException` extends RuntimeException implements Stringable, Throwable

```php
final function getCode();
final function getFile(): string;
final function getLine(): int;
final function getMessage(): string;
final function getPrevious(): ?Throwable;
final function getTrace(): array;
final function getTraceAsString(): string;
function __construct(string $message = '', int $code = 0, ?Throwable $previous = null);
function __toString(): string;
function __wakeup();
```

## class RecordsNotFoundException
`Illuminate\Database\RecordsNotFoundException` extends RuntimeException implements Stringable, Throwable

```php
final function getCode();
final function getFile(): string;
final function getLine(): int;
final function getMessage(): string;
final function getPrevious(): ?Throwable;
final function getTrace(): array;
final function getTraceAsString(): string;
function __construct(string $message = '', int $code = 0, ?Throwable $previous = null);
function __toString(): string;
function __wakeup();
```

## class SQLiteConnection
`Illuminate\Database\SQLiteConnection` extends Illuminate\Database\Connection implements Illuminate\Database\ConnectionInterface

```php
function __call($method, $parameters);
function __clone();
function __construct($pdo, $database = '', $tablePrefix = '', array $config = []);
function affectingStatement($query, $bindings = []);
function afterCommit($callback);
function afterRollBack($callback);
function allowQueryDurationHandlersToRunAgain();
function beforeExecuting(Closure $callback);
function beforeStartingTransaction(Closure $callback);
function beginTransaction();
function bindValues($statement, $bindings);
function commit();
function cursor($query, $bindings = [], $useReadPdo = true, array $fetchUsing = []);
function delete($query, $bindings = []);
function disableQueryLog();
function disconnect();
function enableQueryLog();
function escape($value, $binary = false);
function flushQueryLog();
function forgetRecordModificationState();
function getConfig($option = null);
function getDatabaseName();
function getDriverName();
function getDriverTitle();
function getEventDispatcher();
function getName();
function getNameWithReadWriteType();
function getPdo();
function getPostProcessor();
function getQueryGrammar();
function getQueryLog();
function getRawPdo();
function getRawQueryLog();
function getRawReadPdo();
function getReadPdo();
function getSchemaBuilder();
function getSchemaGrammar();
function getSchemaState(?Illuminate\Filesystem\Filesystem $files = null, ?callable $processFactory = null);
function getServerVersion(): string;
function getTablePrefix();
function hasModifiedRecords();
function insert($query, $bindings = []);
function listen(Closure $callback);
function logQuery($query, $bindings, $time = null);
function logging();
function prepareBindings(array $bindings);
function pretend(Closure $callback);
function pretending();
function query();
function raw($value);
function reconnect();
function reconnectIfMissingConnection();
function recordsHaveBeenModified($value = true);
function resetTotalQueryDuration();
function rollBack($toLevel = null);
function scalar($query, $bindings = [], $useReadPdo = true);
function select($query, $bindings = [], $useReadPdo = true, array $fetchUsing = []);
function selectFromWriteConnection($query, $bindings = []);
function selectOne($query, $bindings = [], $useReadPdo = true);
function selectResultSets($query, $bindings = [], $useReadPdo = true, array $fetchUsing = []);
function setDatabaseName($database);
function setEventDispatcher(Illuminate\Contracts\Events\Dispatcher $events);
function setPdo($pdo);
function setPostProcessor(Illuminate\Database\Query\Processors\Processor $processor);
function setQueryGrammar(Illuminate\Database\Query\Grammars\Grammar $grammar);
function setReadPdo($pdo);
function setReadPdoConfig(array $config);
function setReadWriteType($readWriteType);
function setReconnector(callable $reconnector);
function setRecordModificationState(bool $value);
function setSchemaGrammar(Illuminate\Database\Schema\Grammars\Grammar $grammar);
function setTablePrefix($prefix);
function setTransactionManager($manager);
function statement($query, $bindings = []);
function table($table, $as = null);
function threadCount();
function totalQueryDuration();
function transaction(Closure $callback, $attempts = 1);
function transactionLevel();
function unprepared($query);
function unsetEventDispatcher();
function unsetTransactionManager();
function update($query, $bindings = []);
function useDefaultPostProcessor();
function useDefaultQueryGrammar();
function useDefaultSchemaGrammar();
function useWriteConnectionWhenReading($value = true);
function whenQueryingForLongerThan($threshold, $handler);
function withoutPretending(Closure $callback);
function withoutTablePrefix(Closure $callback): mixed;
static function __callStatic($method, $parameters);
static function flushMacros();
static function getResolver($driver);
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
static function resolverFor($driver, Closure $callback);
```

## class SQLiteDatabaseDoesNotExistException
`Illuminate\Database\SQLiteDatabaseDoesNotExistException` extends InvalidArgumentException implements Throwable, Stringable

```php
final function getCode();
final function getFile(): string;
final function getLine(): int;
final function getMessage(): string;
final function getPrevious(): ?Throwable;
final function getTrace(): array;
final function getTraceAsString(): string;
function __construct($path);
function __toString(): string;
function __wakeup();
```

## class Seeder
`Illuminate\Database\Seeder`

```php
function __invoke(array $parameters = []);
function call($class, $silent = false, array $parameters = []);
function callOnce($class, $silent = false, array $parameters = []);
function callSilent($class, array $parameters = []);
function callWith($class, array $parameters = []);
function setCommand(Illuminate\Console\Command $command);
function setContainer(Illuminate\Contracts\Container\Container $container);
```

## class SqlServerConnection
`Illuminate\Database\SqlServerConnection` extends Illuminate\Database\Connection implements Illuminate\Database\ConnectionInterface

```php
function __call($method, $parameters);
function __clone();
function __construct($pdo, $database = '', $tablePrefix = '', array $config = []);
function affectingStatement($query, $bindings = []);
function afterCommit($callback);
function afterRollBack($callback);
function allowQueryDurationHandlersToRunAgain();
function beforeExecuting(Closure $callback);
function beforeStartingTransaction(Closure $callback);
function beginTransaction();
function bindValues($statement, $bindings);
function commit();
function cursor($query, $bindings = [], $useReadPdo = true, array $fetchUsing = []);
function delete($query, $bindings = []);
function disableQueryLog();
function disconnect();
function enableQueryLog();
function escape($value, $binary = false);
function flushQueryLog();
function forgetRecordModificationState();
function getConfig($option = null);
function getDatabaseName();
function getDriverName();
function getDriverTitle();
function getEventDispatcher();
function getName();
function getNameWithReadWriteType();
function getPdo();
function getPostProcessor();
function getQueryGrammar();
function getQueryLog();
function getRawPdo();
function getRawQueryLog();
function getRawReadPdo();
function getReadPdo();
function getSchemaBuilder();
function getSchemaGrammar();
function getSchemaState(?Illuminate\Filesystem\Filesystem $files = null, ?callable $processFactory = null);
function getServerVersion(): string;
function getTablePrefix();
function hasModifiedRecords();
function insert($query, $bindings = []);
function listen(Closure $callback);
function logQuery($query, $bindings, $time = null);
function logging();
function prepareBindings(array $bindings);
function pretend(Closure $callback);
function pretending();
function query();
function raw($value);
function reconnect();
function reconnectIfMissingConnection();
function recordsHaveBeenModified($value = true);
function resetTotalQueryDuration();
function rollBack($toLevel = null);
function scalar($query, $bindings = [], $useReadPdo = true);
function select($query, $bindings = [], $useReadPdo = true, array $fetchUsing = []);
function selectFromWriteConnection($query, $bindings = []);
function selectOne($query, $bindings = [], $useReadPdo = true);
function selectResultSets($query, $bindings = [], $useReadPdo = true, array $fetchUsing = []);
function setDatabaseName($database);
function setEventDispatcher(Illuminate\Contracts\Events\Dispatcher $events);
function setPdo($pdo);
function setPostProcessor(Illuminate\Database\Query\Processors\Processor $processor);
function setQueryGrammar(Illuminate\Database\Query\Grammars\Grammar $grammar);
function setReadPdo($pdo);
function setReadPdoConfig(array $config);
function setReadWriteType($readWriteType);
function setReconnector(callable $reconnector);
function setRecordModificationState(bool $value);
function setSchemaGrammar(Illuminate\Database\Schema\Grammars\Grammar $grammar);
function setTablePrefix($prefix);
function setTransactionManager($manager);
function statement($query, $bindings = []);
function table($table, $as = null);
function threadCount();
function totalQueryDuration();
function transaction(Closure $callback, $attempts = 1);
function transactionLevel();
function unprepared($query);
function unsetEventDispatcher();
function unsetTransactionManager();
function update($query, $bindings = []);
function useDefaultPostProcessor();
function useDefaultQueryGrammar();
function useDefaultSchemaGrammar();
function useWriteConnectionWhenReading($value = true);
function whenQueryingForLongerThan($threshold, $handler);
function withoutPretending(Closure $callback);
function withoutTablePrefix(Closure $callback): mixed;
static function __callStatic($method, $parameters);
static function flushMacros();
static function getResolver($driver);
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
static function resolverFor($driver, Closure $callback);
```

## class UniqueConstraintViolationException
`Illuminate\Database\UniqueConstraintViolationException` extends Illuminate\Database\QueryException implements Stringable, Throwable

```php
final function getCode();
final function getFile(): string;
final function getLine(): int;
final function getMessage(): string;
final function getPrevious(): ?Throwable;
final function getTrace(): array;
final function getTraceAsString(): string;
function __construct($connectionName, $sql, array $bindings, Throwable $previous, array $connectionDetails = [], $readWriteType = null);
function __toString(): string;
function __wakeup();
function getBindings();
function getConnectionDetails();
function getConnectionName();
function getRawSql(): string;
function getSql();
function setColumns(array $columns): self;
function setIndex(?string $index): self;
```

