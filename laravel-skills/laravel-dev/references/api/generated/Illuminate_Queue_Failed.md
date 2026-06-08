# Illuminate\Queue\Failed

Version: 13.14.0

## interface CountableFailedJobProvider
`Illuminate\Queue\Failed\CountableFailedJobProvider`

```php
abstract function count($connection = null, $queue = null);
```

## class DatabaseFailedJobProvider
`Illuminate\Queue\Failed\DatabaseFailedJobProvider` implements Illuminate\Queue\Failed\CountableFailedJobProvider, Illuminate\Queue\Failed\FailedJobProviderInterface, Illuminate\Queue\Failed\PrunableFailedJobProvider

```php
function __construct(Illuminate\Database\ConnectionResolverInterface $resolver, $database, $table);
function all();
function count($connection = null, $queue = null);
function find($id);
function flush($hours = null);
function forget($id);
function getTable();
function ids($queue = null);
function log($connection, $queue, $payload, $exception);
function prune(DateTimeInterface $before);
```

## class DatabaseUuidFailedJobProvider
`Illuminate\Queue\Failed\DatabaseUuidFailedJobProvider` implements Illuminate\Queue\Failed\CountableFailedJobProvider, Illuminate\Queue\Failed\FailedJobProviderInterface, Illuminate\Queue\Failed\PrunableFailedJobProvider

```php
function __construct(Illuminate\Database\ConnectionResolverInterface $resolver, $database, $table);
function all();
function count($connection = null, $queue = null);
function find($id);
function flush($hours = null);
function forget($id);
function getTable();
function ids($queue = null);
function log($connection, $queue, $payload, $exception);
function prune(DateTimeInterface $before);
```

## class DynamoDbFailedJobProvider
`Illuminate\Queue\Failed\DynamoDbFailedJobProvider` implements Illuminate\Queue\Failed\FailedJobProviderInterface

```php
function __construct(Aws\DynamoDb\DynamoDbClient $dynamo, $applicationName, $table);
function all();
function find($id);
function flush($hours = null);
function forget($id);
function ids($queue = null);
function log($connection, $queue, $payload, $exception);
```

## interface FailedJobProviderInterface
`Illuminate\Queue\Failed\FailedJobProviderInterface`

```php
abstract function all();
abstract function find($id);
abstract function flush($hours = null);
abstract function forget($id);
abstract function ids($queue = null);
abstract function log($connection, $queue, $payload, $exception);
```

## class FileFailedJobProvider
`Illuminate\Queue\Failed\FileFailedJobProvider` implements Illuminate\Queue\Failed\CountableFailedJobProvider, Illuminate\Queue\Failed\FailedJobProviderInterface, Illuminate\Queue\Failed\PrunableFailedJobProvider

```php
function __construct($path, $limit = 100, ?Closure $lockProviderResolver = null);
function all();
function count($connection = null, $queue = null);
function find($id);
function flush($hours = null);
function forget($id);
function ids($queue = null);
function log($connection, $queue, $payload, $exception);
function prune(DateTimeInterface $before);
```

## class NullFailedJobProvider
`Illuminate\Queue\Failed\NullFailedJobProvider` implements Illuminate\Queue\Failed\CountableFailedJobProvider, Illuminate\Queue\Failed\FailedJobProviderInterface

```php
function all();
function count($connection = null, $queue = null);
function find($id);
function flush($hours = null);
function forget($id);
function ids($queue = null);
function log($connection, $queue, $payload, $exception);
```

## interface PrunableFailedJobProvider
`Illuminate\Queue\Failed\PrunableFailedJobProvider`

```php
abstract function prune(DateTimeInterface $before);
```

