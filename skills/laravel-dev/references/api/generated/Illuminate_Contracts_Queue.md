# Illuminate\Contracts\Queue

Version: 13.14.0

## interface ClearableQueue
`Illuminate\Contracts\Queue\ClearableQueue`

```php
abstract function clear($queue);
```

## class EntityNotFoundException
`Illuminate\Contracts\Queue\EntityNotFoundException` extends InvalidArgumentException implements Throwable, Stringable

```php
final function getCode();
final function getFile(): string;
final function getLine(): int;
final function getMessage(): string;
final function getPrevious(): ?Throwable;
final function getTrace(): array;
final function getTraceAsString(): string;
function __construct($type, $id);
function __toString(): string;
function __wakeup();
```

## interface EntityResolver
`Illuminate\Contracts\Queue\EntityResolver`

```php
abstract function resolve($type, $id);
```

## interface Factory
`Illuminate\Contracts\Queue\Factory`

```php
abstract function connection($name = null);
```

## interface Interruptible
`Illuminate\Contracts\Queue\Interruptible`

```php
abstract function interrupted(int $signal): void;
```

## interface Job
`Illuminate\Contracts\Queue\Job`

```php
abstract function attempts();
abstract function delete();
abstract function fail($e = null);
abstract function fire();
abstract function getConnectionName();
abstract function getJobId();
abstract function getName();
abstract function getQueue();
abstract function getRawBody();
abstract function hasFailed();
abstract function isDeleted();
abstract function isDeletedOrReleased();
abstract function isReleased();
abstract function markAsFailed();
abstract function maxExceptions();
abstract function maxTries();
abstract function payload();
abstract function release($delay = 0);
abstract function resolveName();
abstract function resolveQueuedJobClass();
abstract function retryUntil();
abstract function timeout();
abstract function uuid();
```

## interface Monitor
`Illuminate\Contracts\Queue\Monitor`

```php
abstract function failing($callback);
abstract function looping($callback);
abstract function starting($callback);
abstract function stopping($callback);
```

## interface PreparesForDispatch
`Illuminate\Contracts\Queue\PreparesForDispatch`

```php
abstract function prepareForDispatch();
```

## interface Queue
`Illuminate\Contracts\Queue\Queue`

```php
abstract function bulk($jobs, $data = '', $queue = null);
abstract function creationTimeOfOldestPendingJob($queue = null);
abstract function delayedSize($queue = null);
abstract function getConnectionName();
abstract function later($delay, $job, $data = '', $queue = null);
abstract function laterOn($queue, $delay, $job, $data = '');
abstract function pendingSize($queue = null);
abstract function pop($queue = null);
abstract function push($job, $data = '', $queue = null);
abstract function pushOn($queue, $job, $data = '');
abstract function pushRaw($payload, $queue = null, array $options = []);
abstract function reservedSize($queue = null);
abstract function setConnectionName($name);
abstract function size($queue = null);
```

## interface QueueableCollection
`Illuminate\Contracts\Queue\QueueableCollection`

```php
abstract function getQueueableClass();
abstract function getQueueableConnection();
abstract function getQueueableIds();
abstract function getQueueableRelations();
```

## interface QueueableEntity
`Illuminate\Contracts\Queue\QueueableEntity`

```php
abstract function getQueueableConnection();
abstract function getQueueableId();
abstract function getQueueableRelations();
```

## interface ShouldBeEncrypted
`Illuminate\Contracts\Queue\ShouldBeEncrypted`

## interface ShouldBeUnique
`Illuminate\Contracts\Queue\ShouldBeUnique`

## interface ShouldBeUniqueUntilProcessing
`Illuminate\Contracts\Queue\ShouldBeUniqueUntilProcessing` implements Illuminate\Contracts\Queue\ShouldBeUnique

## interface ShouldQueue
`Illuminate\Contracts\Queue\ShouldQueue`

## interface ShouldQueueAfterCommit
`Illuminate\Contracts\Queue\ShouldQueueAfterCommit` implements Illuminate\Contracts\Queue\ShouldQueue

