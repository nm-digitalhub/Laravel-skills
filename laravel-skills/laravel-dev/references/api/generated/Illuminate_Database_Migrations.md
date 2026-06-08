# Illuminate\Database\Migrations

Version: 13.14.0

## class DatabaseMigrationRepository
`Illuminate\Database\Migrations\DatabaseMigrationRepository` implements Illuminate\Database\Migrations\MigrationRepositoryInterface

```php
function __construct(Illuminate\Database\ConnectionResolverInterface $resolver, $table);
function createRepository();
function delete($migration);
function deleteRepository();
function getConnection();
function getConnectionResolver();
function getLast();
function getLastBatchNumber();
function getMigrationBatches();
function getMigrations($steps);
function getMigrationsByBatch($batch);
function getNextBatchNumber();
function getRan();
function log($file, $batch);
function repositoryExists();
function setSource($name);
```

## class Migration
`Illuminate\Database\Migrations\Migration`

```php
function getConnection();
function shouldRun(): bool;
```

## class MigrationCreator
`Illuminate\Database\Migrations\MigrationCreator`

```php
function __construct(Illuminate\Filesystem\Filesystem $files, $customStubPath);
function afterCreate(Closure $callback);
function create($name, $path, $table = null, $create = false);
function getFilesystem();
function stubPath();
```

## interface MigrationRepositoryInterface
`Illuminate\Database\Migrations\MigrationRepositoryInterface`

```php
abstract function createRepository();
abstract function delete($migration);
abstract function deleteRepository();
abstract function getLast();
abstract function getMigrationBatches();
abstract function getMigrations($steps);
abstract function getMigrationsByBatch($batch);
abstract function getNextBatchNumber();
abstract function getRan();
abstract function log($file, $batch);
abstract function repositoryExists();
abstract function setSource($name);
```

## enum MigrationResult
`Illuminate\Database\Migrations\MigrationResult` implements UnitEnum, BackedEnum

```php
static function cases(): array;
static function from(string|int $value): static;
static function tryFrom(string|int $value): ?static;
```

## class Migrator
`Illuminate\Database\Migrations\Migrator`

```php
function __construct(Illuminate\Database\Migrations\MigrationRepositoryInterface $repository, Illuminate\Database\ConnectionResolverInterface $resolver, Illuminate\Filesystem\Filesystem $files, ?Illuminate\Contracts\Events\Dispatcher $dispatcher = null);
function deleteRepository();
function fireMigrationEvent($event);
function getConnection();
function getFilesystem();
function getMigrationFiles($paths);
function getMigrationName($path);
function getRepository();
function hasRunAnyMigrations();
function path($path);
function paths();
function repositoryExists();
function requireFiles(array $files);
function reset($paths = [], $pretend = false);
function resolve($file);
function resolveConnection($connection);
function rollback($paths = [], array $options = []);
function run($paths = [], array $options = []);
function runPending(array $migrations, array $options = []);
function setConnection($name);
function setOutput(Symfony\Component\Console\Output\OutputInterface $output);
function usingConnection($name, callable $callback);
static function resolveConnectionsUsing(Closure $callback);
static function withoutMigrations(array $migrations);
```

