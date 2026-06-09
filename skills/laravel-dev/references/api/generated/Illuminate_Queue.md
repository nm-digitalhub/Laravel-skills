# Illuminate\Queue

Version: 13.14.0

## class BackgroundQueue
`Illuminate\Queue\BackgroundQueue` extends Illuminate\Queue\SyncQueue implements Illuminate\Contracts\Queue\Queue

```php
function __construct($dispatchAfterCommit = false);
function allDelayedJobs(): Illuminate\Support\Collection;
function allPendingJobs(): Illuminate\Support\Collection;
function allReservedJobs(): Illuminate\Support\Collection;
function bulk($jobs, $data = '', $queue = null);
function creationTimeOfOldestPendingJob($queue = null);
function delayedJobs($queue = null): Illuminate\Support\Collection;
function delayedSize($queue = null);
function getConfig();
function getConnectionName();
function getContainer();
function getJobBackoff($job);
function getJobExpiration($job);
function getJobTries($job);
function later($delay, $job, $data = '', $queue = null);
function laterOn($queue, $delay, $job, $data = '');
function pendingJobs($queue = null): Illuminate\Support\Collection;
function pendingSize($queue = null);
function pop($queue = null);
function push($job, $data = '', $queue = null);
function pushOn($queue, $job, $data = '');
function pushRaw($payload, $queue = null, array $options = []);
function reservedJobs($queue = null): Illuminate\Support\Collection;
function reservedSize($queue = null);
function setConfig(array $config);
function setConnectionName($name);
function setContainer(Illuminate\Container\Container $container);
function size($queue = null);
static function createPayloadUsing($callback);
```

## class BeanstalkdQueue
`Illuminate\Queue\BeanstalkdQueue` extends Illuminate\Queue\Queue implements Illuminate\Contracts\Queue\Queue

```php
function __construct($pheanstalk, $default, $timeToRun, $blockFor = 0, $dispatchAfterCommit = false);
function allDelayedJobs(): Illuminate\Support\Collection;
function allPendingJobs(): Illuminate\Support\Collection;
function allReservedJobs(): Illuminate\Support\Collection;
function bulk($jobs, $data = '', $queue = null);
function creationTimeOfOldestPendingJob($queue = null);
function delayedJobs($queue = null): Illuminate\Support\Collection;
function delayedSize($queue = null);
function deleteMessage($queue, $id);
function getConfig();
function getConnectionName();
function getContainer();
function getJobBackoff($job);
function getJobExpiration($job);
function getJobTries($job);
function getPheanstalk();
function getQueue($queue);
function later($delay, $job, $data = '', $queue = null);
function laterOn($queue, $delay, $job, $data = '');
function pendingJobs($queue = null): Illuminate\Support\Collection;
function pendingSize($queue = null);
function pop($queue = null);
function push($job, $data = '', $queue = null);
function pushOn($queue, $job, $data = '');
function pushRaw($payload, $queue = null, array $options = []);
function reservedJobs($queue = null): Illuminate\Support\Collection;
function reservedSize($queue = null);
function setConfig(array $config);
function setConnectionName($name);
function setContainer(Illuminate\Container\Container $container);
function size($queue = null);
static function createPayloadUsing($callback);
```

## class CallQueuedClosure
`Illuminate\Queue\CallQueuedClosure` implements Illuminate\Contracts\Queue\ShouldQueue

```php
function __construct($closure);
function __serialize();
function __unserialize(array $values);
function afterCommit();
function allOnConnection($connection);
function allOnQueue($queue);
function appendToChain($job);
function assertDeleted();
function assertDoesntHaveChain();
function assertFailed();
function assertFailedWith($exception);
function assertHasChain($expectedChain);
function assertNotDeleted();
function assertNotFailed();
function assertNotReleased();
function assertReleased($delay = null);
function attempts();
function batch();
function batching();
function beforeCommit();
function chain($chain);
function delay($delay);
function delete();
function dispatchNextJobInChain();
function displayName();
function fail($exception = null);
function failed($e);
function handle(Illuminate\Contracts\Container\Container $container);
function invokeChainCatchCallbacks($e);
function name($name);
function onConnection($connection);
function onFailure($callback);
function onGroup($group);
function onQueue($queue);
function prependToChain($job);
function release($delay = 0);
function restoreModel($value);
function setJob(Illuminate\Contracts\Queue\Job $job);
function through($middleware);
function withBatchId(string $batchId);
function withDeduplicator($deduplicator);
function withFakeBatch(string $id = '', string $name = '', int $totalJobs = 0, int $pendingJobs = 0, int $failedJobs = 0, array $failedJobIds = [], array $options = [], ?Carbon\CarbonImmutable $createdAt = null, ?Carbon\CarbonImmutable $cancelledAt = null, ?Carbon\CarbonImmutable $finishedAt = null);
function withFakeQueueInteractions();
function withoutDelay();
static function create(Closure $job);
static function dispatch(...$arguments);
static function dispatchAfterResponse(...$arguments);
static function dispatchIf($boolean, ...$arguments);
static function dispatchSync(...$arguments);
static function dispatchUnless($boolean, ...$arguments);
static function withChain($chain);
```

## class CallQueuedHandler
`Illuminate\Queue\CallQueuedHandler`

```php
function __construct(Illuminate\Contracts\Bus\Dispatcher $dispatcher, Illuminate\Contracts\Container\Container $container);
function call(Illuminate\Contracts\Queue\Job $job, array $data);
function failed(array $data, $e, string $uuid, ?Illuminate\Contracts\Queue\Job $job = null);
function getRunningCommand();
```

## class DatabaseQueue
`Illuminate\Queue\DatabaseQueue` extends Illuminate\Queue\Queue implements Illuminate\Contracts\Queue\Queue, Illuminate\Contracts\Queue\ClearableQueue

```php
function __construct(Illuminate\Database\Connection $database, $table, $default = 'default', $retryAfter = 60, $dispatchAfterCommit = false);
function allDelayedJobs(): Illuminate\Support\Collection;
function allPendingJobs(): Illuminate\Support\Collection;
function allReservedJobs(): Illuminate\Support\Collection;
function bulk($jobs, $data = '', $queue = null);
function clear($queue = null);
function creationTimeOfOldestPendingJob($queue = null);
function delayedJobs($queue = null): Illuminate\Support\Collection;
function delayedSize($queue = null);
function deleteAndRelease($queue, $job, $delay);
function deleteReserved($queue, $id);
function getConfig();
function getConnectionName();
function getContainer();
function getDatabase();
function getJobBackoff($job);
function getJobExpiration($job);
function getJobTries($job);
function getQueue($queue);
function later($delay, $job, $data = '', $queue = null);
function laterOn($queue, $delay, $job, $data = '');
function pendingJobs($queue = null): Illuminate\Support\Collection;
function pendingSize($queue = null);
function pop($queue = null);
function push($job, $data = '', $queue = null);
function pushOn($queue, $job, $data = '');
function pushRaw($payload, $queue = null, array $options = []);
function release($queue, $job, $delay);
function reservedJobs($queue = null): Illuminate\Support\Collection;
function reservedSize($queue = null);
function setConfig(array $config);
function setConnectionName($name);
function setContainer(Illuminate\Container\Container $container);
function size($queue = null);
static function createPayloadUsing($callback);
```

## class DeferredQueue
`Illuminate\Queue\DeferredQueue` extends Illuminate\Queue\SyncQueue implements Illuminate\Contracts\Queue\Queue

```php
function __construct($dispatchAfterCommit = false);
function allDelayedJobs(): Illuminate\Support\Collection;
function allPendingJobs(): Illuminate\Support\Collection;
function allReservedJobs(): Illuminate\Support\Collection;
function bulk($jobs, $data = '', $queue = null);
function creationTimeOfOldestPendingJob($queue = null);
function delayedJobs($queue = null): Illuminate\Support\Collection;
function delayedSize($queue = null);
function getConfig();
function getConnectionName();
function getContainer();
function getJobBackoff($job);
function getJobExpiration($job);
function getJobTries($job);
function later($delay, $job, $data = '', $queue = null);
function laterOn($queue, $delay, $job, $data = '');
function pendingJobs($queue = null): Illuminate\Support\Collection;
function pendingSize($queue = null);
function pop($queue = null);
function push($job, $data = '', $queue = null);
function pushOn($queue, $job, $data = '');
function pushRaw($payload, $queue = null, array $options = []);
function reservedJobs($queue = null): Illuminate\Support\Collection;
function reservedSize($queue = null);
function setConfig(array $config);
function setConnectionName($name);
function setContainer(Illuminate\Container\Container $container);
function size($queue = null);
static function createPayloadUsing($callback);
```

## class FailoverQueue
`Illuminate\Queue\FailoverQueue` extends Illuminate\Queue\Queue implements Illuminate\Contracts\Queue\Queue

```php
function __construct(Illuminate\Queue\QueueManager $manager, Illuminate\Contracts\Events\Dispatcher $events, array $connections);
function allDelayedJobs(): Illuminate\Support\Collection;
function allPendingJobs(): Illuminate\Support\Collection;
function allReservedJobs(): Illuminate\Support\Collection;
function bulk($jobs, $data = '', $queue = null);
function creationTimeOfOldestPendingJob($queue = null);
function delayedJobs($queue = null): Illuminate\Support\Collection;
function delayedSize($queue = null);
function getConfig();
function getConnectionName();
function getContainer();
function getJobBackoff($job);
function getJobExpiration($job);
function getJobTries($job);
function later($delay, $job, $data = '', $queue = null);
function laterOn($queue, $delay, $job, $data = '');
function pendingJobs($queue = null): Illuminate\Support\Collection;
function pendingSize($queue = null);
function pop($queue = null);
function push($job, $data = '', $queue = null);
function pushOn($queue, $job, $data = '');
function pushRaw($payload, $queue = null, array $options = []);
function reservedJobs($queue = null): Illuminate\Support\Collection;
function reservedSize($queue = null);
function setConfig(array $config);
function setConnectionName($name);
function setContainer(Illuminate\Container\Container $container);
function size($queue = null);
static function createPayloadUsing($callback);
```

## trait InteractsWithQueue
`Illuminate\Queue\InteractsWithQueue`

```php
function assertDeleted();
function assertFailed();
function assertFailedWith($exception);
function assertNotDeleted();
function assertNotFailed();
function assertNotReleased();
function assertReleased($delay = null);
function attempts();
function delete();
function fail($exception = null);
function release($delay = 0);
function setJob(Illuminate\Contracts\Queue\Job $job);
function withFakeQueueInteractions();
```

## class InvalidPayloadException
`Illuminate\Queue\InvalidPayloadException` extends InvalidArgumentException implements Throwable, Stringable

```php
final function getCode();
final function getFile(): string;
final function getLine(): int;
final function getMessage(): string;
final function getPrevious(): ?Throwable;
final function getTrace(): array;
final function getTraceAsString(): string;
function __construct($message = null, $value = null);
function __toString(): string;
function __wakeup();
```

## class Listener
`Illuminate\Queue\Listener`

```php
function __construct($commandPath);
function listen($connection, $queue, Illuminate\Queue\ListenerOptions $options);
function makeProcess($connection, $queue, Illuminate\Queue\ListenerOptions $options);
function memoryExceeded($memoryLimit);
function runProcess(Symfony\Component\Process\Process $process, $memory);
function setOutputHandler(Closure $outputHandler);
function stop();
```

## class ListenerOptions
`Illuminate\Queue\ListenerOptions` extends Illuminate\Queue\WorkerOptions

```php
function __construct($name = 'default', $environment = null, $backoff = 0, $memory = 128, $timeout = 60, $sleep = 3, $maxTries = 1, $force = false, $rest = 0);
```

## class LuaScripts
`Illuminate\Queue\LuaScripts`

```php
static function clear();
static function later();
static function migrateExpiredJobs();
static function pop();
static function push();
static function release();
static function size();
```

## class ManuallyFailedException
`Illuminate\Queue\ManuallyFailedException` extends RuntimeException implements Stringable, Throwable

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

## class MaxAttemptsExceededException
`Illuminate\Queue\MaxAttemptsExceededException` extends RuntimeException implements Stringable, Throwable

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
static function forJob($job);
```

## class NullQueue
`Illuminate\Queue\NullQueue` extends Illuminate\Queue\Queue implements Illuminate\Contracts\Queue\Queue

```php
function allDelayedJobs(): Illuminate\Support\Collection;
function allPendingJobs(): Illuminate\Support\Collection;
function allReservedJobs(): Illuminate\Support\Collection;
function bulk($jobs, $data = '', $queue = null);
function creationTimeOfOldestPendingJob($queue = null);
function delayedJobs($queue = null): Illuminate\Support\Collection;
function delayedSize($queue = null);
function getConfig();
function getConnectionName();
function getContainer();
function getJobBackoff($job);
function getJobExpiration($job);
function getJobTries($job);
function later($delay, $job, $data = '', $queue = null);
function laterOn($queue, $delay, $job, $data = '');
function pendingJobs($queue = null): Illuminate\Support\Collection;
function pendingSize($queue = null);
function pop($queue = null);
function push($job, $data = '', $queue = null);
function pushOn($queue, $job, $data = '');
function pushRaw($payload, $queue = null, array $options = []);
function reservedJobs($queue = null): Illuminate\Support\Collection;
function reservedSize($queue = null);
function setConfig(array $config);
function setConnectionName($name);
function setContainer(Illuminate\Container\Container $container);
function size($queue = null);
static function createPayloadUsing($callback);
```

## class Queue
`Illuminate\Queue\Queue`

```php
function bulk($jobs, $data = '', $queue = null);
function getConfig();
function getConnectionName();
function getContainer();
function getJobBackoff($job);
function getJobExpiration($job);
function getJobTries($job);
function laterOn($queue, $delay, $job, $data = '');
function pushOn($queue, $job, $data = '');
function setConfig(array $config);
function setConnectionName($name);
function setContainer(Illuminate\Container\Container $container);
static function createPayloadUsing($callback);
```

## class QueueManager
`Illuminate\Queue\QueueManager` implements Illuminate\Contracts\Queue\Factory, Illuminate\Contracts\Queue\Monitor

```php
function __call($method, $parameters);
function __construct($app);
function addConnector($driver, Closure $resolver);
function after($callback);
function before($callback);
function connected($name = null);
function connection($name = null);
function exceptionOccurred($callback);
function extend($driver, Closure $resolver);
function failing($callback);
function getApplication();
function getDefaultDriver();
function getName($connection = null);
function getPausedQueues($connection, $queues);
function isPaused($connection, $queue);
function looping($callback);
function pause($connection, $queue);
function pauseFor($connection, $queue, $ttl);
function resolveConnectionFromQueueRoute($queueable);
function resolveQueueFromQueueRoute($queueable);
function resume($connection, $queue);
function route(array|string $class, $queue = null, $connection = null);
function setApplication($app);
function setDefaultDriver($name);
function starting($callback);
function stopping($callback);
function withoutInterruptionPolling();
```

## class QueueRoutes
`Illuminate\Queue\QueueRoutes`

```php
function all();
function getConnection($queueable);
function getQueue($queueable);
function getRoute($queueable);
function set(array|string $class, $queue = null, $connection = null);
```

## class QueueServiceProvider
`Illuminate\Queue\QueueServiceProvider` extends Illuminate\Support\ServiceProvider implements Illuminate\Contracts\Support\DeferrableProvider

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
function registerConnectors($manager);
function restoreModel($value);
function when();
static function addProviderToBootstrapFile(string $provider, ?string $path = null);
static function defaultProviders();
static function pathsToPublish($provider = null, $group = null);
static function publishableGroups();
static function publishableMigrationPaths();
static function publishableProviders();
static function removeProviderFromBootstrapFile(array|string $providersToRemove, ?string $path = null, bool $strict = false);
```

## class RedisQueue
`Illuminate\Queue\RedisQueue` extends Illuminate\Queue\Queue implements Illuminate\Contracts\Queue\Queue, Illuminate\Contracts\Queue\ClearableQueue

```php
function __construct(Illuminate\Contracts\Redis\Factory $redis, $default = 'default', $connection = null, $retryAfter = 60, $blockFor = null, $dispatchAfterCommit = false, $migrationBatchSize = -1);
function allDelayedJobs(): Illuminate\Support\Collection;
function allPendingJobs(): Illuminate\Support\Collection;
function allReservedJobs(): Illuminate\Support\Collection;
function bulk($jobs, $data = '', $queue = null);
function clear($queue = null);
function creationTimeOfOldestPendingJob($queue = null);
function delayedJobs($queue = null): Illuminate\Support\Collection;
function delayedSize($queue = null);
function deleteAndRelease($queue, $job, $delay);
function deleteReserved($queue, $job);
function getConfig();
function getConnection();
function getConnectionName();
function getContainer();
function getJobBackoff($job);
function getJobExpiration($job);
function getJobTries($job);
function getQueue($queue);
function getRedis();
function later($delay, $job, $data = '', $queue = null);
function laterOn($queue, $delay, $job, $data = '');
function migrateExpiredJobs($from, $to);
function pendingJobs($queue = null): Illuminate\Support\Collection;
function pendingSize($queue = null);
function pop($queue = null, $index = 0);
function push($job, $data = '', $queue = null);
function pushOn($queue, $job, $data = '');
function pushRaw($payload, $queue = null, array $options = []);
function reservedJobs($queue = null): Illuminate\Support\Collection;
function reservedSize($queue = null);
function setConfig(array $config);
function setConnectionName($name);
function setContainer(Illuminate\Container\Container $container);
function size($queue = null);
static function createPayloadUsing($callback);
```

## trait SerializesAndRestoresModelIdentifiers
`Illuminate\Queue\SerializesAndRestoresModelIdentifiers`

```php
function restoreModel($value);
```

## trait SerializesModels
`Illuminate\Queue\SerializesModels`

```php
function __serialize();
function __unserialize(array $values);
function restoreModel($value);
```

## class SqsQueue
`Illuminate\Queue\SqsQueue` extends Illuminate\Queue\Queue implements Illuminate\Contracts\Queue\Queue, Illuminate\Contracts\Queue\ClearableQueue

```php
function __construct(Aws\Sqs\SqsClient $sqs, $default, $prefix = '', $suffix = '', $dispatchAfterCommit = false, array $overflowStorage = []);
function allDelayedJobs(): Illuminate\Support\Collection;
function allPendingJobs(): Illuminate\Support\Collection;
function allReservedJobs(): Illuminate\Support\Collection;
function bulk($jobs, $data = '', $queue = null);
function clear($queue = null);
function creationTimeOfOldestPendingJob($queue = null);
function delayedJobs($queue = null): Illuminate\Support\Collection;
function delayedSize($queue = null);
function getConfig();
function getConnectionName();
function getContainer();
function getJobBackoff($job);
function getJobExpiration($job);
function getJobTries($job);
function getQueue($queue);
function getQueueableOptions($job, $queue, $payload, $delay = null): array;
function getSqs();
function later($delay, $job, $data = '', $queue = null);
function laterOn($queue, $delay, $job, $data = '');
function pendingJobs($queue = null): Illuminate\Support\Collection;
function pendingSize($queue = null);
function pop($queue = null);
function push($job, $data = '', $queue = null);
function pushOn($queue, $job, $data = '');
function pushRaw($payload, $queue = null, array $options = []);
function reservedJobs($queue = null): Illuminate\Support\Collection;
function reservedSize($queue = null);
function setConfig(array $config);
function setConnectionName($name);
function setContainer(Illuminate\Container\Container $container);
function size($queue = null);
static function createPayloadUsing($callback);
```

## class SyncQueue
`Illuminate\Queue\SyncQueue` extends Illuminate\Queue\Queue implements Illuminate\Contracts\Queue\Queue

```php
function __construct($dispatchAfterCommit = false);
function allDelayedJobs(): Illuminate\Support\Collection;
function allPendingJobs(): Illuminate\Support\Collection;
function allReservedJobs(): Illuminate\Support\Collection;
function bulk($jobs, $data = '', $queue = null);
function creationTimeOfOldestPendingJob($queue = null);
function delayedJobs($queue = null): Illuminate\Support\Collection;
function delayedSize($queue = null);
function getConfig();
function getConnectionName();
function getContainer();
function getJobBackoff($job);
function getJobExpiration($job);
function getJobTries($job);
function later($delay, $job, $data = '', $queue = null);
function laterOn($queue, $delay, $job, $data = '');
function pendingJobs($queue = null): Illuminate\Support\Collection;
function pendingSize($queue = null);
function pop($queue = null);
function push($job, $data = '', $queue = null);
function pushOn($queue, $job, $data = '');
function pushRaw($payload, $queue = null, array $options = []);
function reservedJobs($queue = null): Illuminate\Support\Collection;
function reservedSize($queue = null);
function setConfig(array $config);
function setConnectionName($name);
function setContainer(Illuminate\Container\Container $container);
function size($queue = null);
static function createPayloadUsing($callback);
```

## class TimeoutExceededException
`Illuminate\Queue\TimeoutExceededException` extends Illuminate\Queue\MaxAttemptsExceededException implements Throwable, Stringable

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
static function forJob($job);
```

## class Worker
`Illuminate\Queue\Worker`

```php
function __construct(Illuminate\Contracts\Queue\Factory $manager, Illuminate\Contracts\Events\Dispatcher $events, Illuminate\Contracts\Debug\ExceptionHandler $exceptions, callable $isDownForMaintenance, ?callable $resetScope = null);
function daemon($connectionName, $queue, Illuminate\Queue\WorkerOptions $options);
function getManager();
function kill($status = 0, $options = null, $reason = null);
function memoryExceeded($memoryLimit);
function process($connectionName, $job, Illuminate\Queue\WorkerOptions $options);
function runNextJob($connectionName, $queue, Illuminate\Queue\WorkerOptions $options);
function setCache(Illuminate\Contracts\Cache\Repository $cache);
function setManager(Illuminate\Contracts\Queue\Factory $manager);
function setName($name);
function sleep($seconds);
function stop($status = 0, $options = null, $reason = null);
static function popUsing($workerName, $callback);
```

## class WorkerOptions
`Illuminate\Queue\WorkerOptions`

```php
function __construct($name = 'default', $backoff = 0, $memory = 128, $timeout = 60, $sleep = 3, $maxTries = 1, $force = false, $stopWhenEmpty = false, $maxJobs = 0, $maxTime = 0, $rest = 0, $stopWhenEmptyFor = 0);
```

## enum WorkerStopReason
`Illuminate\Queue\WorkerStopReason` implements UnitEnum, BackedEnum

```php
static function cases(): array;
static function from(string|int $value): static;
static function tryFrom(string|int $value): ?static;
```

