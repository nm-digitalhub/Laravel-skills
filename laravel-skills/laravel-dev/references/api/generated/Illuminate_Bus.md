# Illuminate\Bus

Version: 13.14.0

## class Batch
`Illuminate\Bus\Batch` implements Illuminate\Contracts\Support\Arrayable, JsonSerializable

```php
function __construct(Illuminate\Contracts\Queue\Factory $queue, Illuminate\Bus\BatchRepository $repository, string $id, string $name, int $totalJobs, int $pendingJobs, int $failedJobs, array $failedJobIds, array $options, Carbon\CarbonImmutable $createdAt, ?Carbon\CarbonImmutable $cancelledAt = null, ?Carbon\CarbonImmutable $finishedAt = null);
function __get($key);
function add($jobs);
function allowsFailures();
function cancel(?Throwable $exception = null);
function canceled();
function cancelled();
function decrementPendingJobs(string $jobId);
function delete();
function finished();
function fresh();
function hasCatchCallbacks();
function hasFailureCallbacks(): bool;
function hasFailures();
function hasFinallyCallbacks();
function hasProgressCallbacks();
function hasThenCallbacks();
function incrementFailedJobs(string $jobId);
function jsonSerialize(): array;
function processedJobs();
function progress();
function recordFailedJob(string $jobId, $e);
function recordSuccessfulJob(string $jobId);
function toArray();
```

## class BatchFactory
`Illuminate\Bus\BatchFactory`

```php
function __construct(Illuminate\Contracts\Queue\Factory $queue);
function make(Illuminate\Bus\BatchRepository $repository, string $id, string $name, int $totalJobs, int $pendingJobs, int $failedJobs, array $failedJobIds, array $options, Carbon\CarbonImmutable $createdAt, ?Carbon\CarbonImmutable $cancelledAt, ?Carbon\CarbonImmutable $finishedAt);
```

## interface BatchRepository
`Illuminate\Bus\BatchRepository`

```php
abstract function cancel(string $batchId);
abstract function decrementPendingJobs(string $batchId, string $jobId);
abstract function delete(string $batchId);
abstract function find(string $batchId);
abstract function get($limit, $before);
abstract function incrementFailedJobs(string $batchId, string $jobId);
abstract function incrementTotalJobs(string $batchId, int $amount);
abstract function markAsFinished(string $batchId);
abstract function rollBack();
abstract function store(Illuminate\Bus\PendingBatch $batch);
abstract function transaction(Closure $callback);
```

## trait Batchable
`Illuminate\Bus\Batchable`

```php
function batch();
function batching();
function withBatchId(string $batchId);
function withFakeBatch(string $id = '', string $name = '', int $totalJobs = 0, int $pendingJobs = 0, int $failedJobs = 0, array $failedJobIds = [], array $options = [], ?Carbon\CarbonImmutable $createdAt = null, ?Carbon\CarbonImmutable $cancelledAt = null, ?Carbon\CarbonImmutable $finishedAt = null);
```

## class BusServiceProvider
`Illuminate\Bus\BusServiceProvider` extends Illuminate\Support\ServiceProvider implements Illuminate\Contracts\Support\DeferrableProvider

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

## class ChainedBatch
`Illuminate\Bus\ChainedBatch` implements Illuminate\Contracts\Queue\ShouldQueue

```php
function __construct(Illuminate\Bus\PendingBatch $batch);
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
function fail($exception = null);
function handle();
function invokeChainCatchCallbacks($e);
function onConnection($connection);
function onGroup($group);
function onQueue($queue);
function prependToChain($job);
function release($delay = 0);
function setJob(Illuminate\Contracts\Queue\Job $job);
function through($middleware);
function toPendingBatch();
function withBatchId(string $batchId);
function withDeduplicator($deduplicator);
function withFakeBatch(string $id = '', string $name = '', int $totalJobs = 0, int $pendingJobs = 0, int $failedJobs = 0, array $failedJobIds = [], array $options = [], ?Carbon\CarbonImmutable $createdAt = null, ?Carbon\CarbonImmutable $cancelledAt = null, ?Carbon\CarbonImmutable $finishedAt = null);
function withFakeQueueInteractions();
function withoutDelay();
static function dispatch(...$arguments);
static function dispatchAfterResponse(...$arguments);
static function dispatchIf($boolean, ...$arguments);
static function dispatchSync(...$arguments);
static function dispatchUnless($boolean, ...$arguments);
static function prepareNestedBatches(Illuminate\Support\Collection $jobs): Illuminate\Support\Collection;
static function withChain($chain);
```

## class DatabaseBatchRepository
`Illuminate\Bus\DatabaseBatchRepository` implements Illuminate\Bus\PrunableBatchRepository, Illuminate\Bus\BatchRepository

```php
function __construct(Illuminate\Bus\BatchFactory $factory, Illuminate\Database\Connection $connection, string $table);
function cancel(string $batchId);
function decrementPendingJobs(string $batchId, string $jobId);
function delete(string $batchId);
function find(string $batchId);
function get($limit = 50, $before = null);
function getConnection();
function incrementFailedJobs(string $batchId, string $jobId);
function incrementTotalJobs(string $batchId, int $amount);
function markAsFinished(string $batchId);
function prune(DateTimeInterface $before);
function pruneCancelled(DateTimeInterface $before);
function pruneUnfinished(DateTimeInterface $before);
function rollBack();
function setConnection(Illuminate\Database\Connection $connection);
function store(Illuminate\Bus\PendingBatch $batch);
function transaction(Closure $callback);
```

## class DebounceLock
`Illuminate\Bus\DebounceLock`

```php
function __construct(Illuminate\Contracts\Cache\Repository $cache);
function acquire($job, $debounceFor = null, $maxWait = null);
function getDebounceDelay($job);
function getMaxDebounceWait($job);
function isCurrentOwner($job, string $owner);
function lockExists($job);
function release($job, string $owner = '');
static function getKey($job);
```

## class Dispatcher
`Illuminate\Bus\Dispatcher` implements Illuminate\Contracts\Bus\QueueingDispatcher, Illuminate\Contracts\Bus\Dispatcher

```php
function __construct(Illuminate\Contracts\Container\Container $container, ?Closure $queueResolver = null);
function batch($jobs);
function bulk($jobs);
function chain($jobs = null);
function dispatch($command);
function dispatchAfterResponse($command, $handler = null);
function dispatchNow($command, $handler = null);
function dispatchSync($command, $handler = null);
function dispatchToQueue($command);
function findBatch(string $batchId);
function getCommandHandler($command);
function hasCommandHandler($command);
function map(array $map);
function pipeThrough(array $pipes);
function resolveConnectionFromQueueRoute($queueable);
function resolveQueueFromQueueRoute($queueable);
function withDispatchingAfterResponses();
function withoutDispatchingAfterResponses();
```

## class DynamoBatchRepository
`Illuminate\Bus\DynamoBatchRepository` implements Illuminate\Bus\BatchRepository

```php
function __construct(Illuminate\Bus\BatchFactory $factory, Aws\DynamoDb\DynamoDbClient $dynamoDbClient, string $applicationName, string $table, ?int $ttl, ?string $ttlAttribute);
function cancel(string $batchId);
function createAwsDynamoTable(): void;
function decrementPendingJobs(string $batchId, string $jobId);
function delete(string $batchId);
function deleteAwsDynamoTable(): void;
function find(string $batchId);
function get($limit = 50, $before = null);
function getDynamoClient(): Aws\DynamoDb\DynamoDbClient;
function getTable(): string;
function incrementFailedJobs(string $batchId, string $jobId);
function incrementTotalJobs(string $batchId, int $amount);
function markAsFinished(string $batchId);
function rollBack();
function store(Illuminate\Bus\PendingBatch $batch);
function transaction(Closure $callback);
```

## class PendingBatch
`Illuminate\Bus\PendingBatch`

```php
function __construct(Illuminate\Contracts\Container\Container $container, Illuminate\Support\Collection $jobs);
function add($jobs);
function allowFailures($param = true);
function allowsFailures();
function before($callback);
function beforeCallbacks();
function catch($callback);
function catchCallbacks();
function connection();
function dispatch();
function dispatchAfterResponse();
function dispatchIf($boolean);
function dispatchUnless($boolean);
function failureCallbacks(): array;
function finally($callback);
function finallyCallbacks();
function name(string $name);
function onConnection(UnitEnum|string $connection);
function onQueue($queue);
function progress($callback);
function progressCallbacks();
function queue();
function then($callback);
function thenCallbacks();
function unless($value = null, ?callable $callback = null, ?callable $default = null);
function when($value = null, ?callable $callback = null, ?callable $default = null);
function withOption(string $key, $value);
```

## interface PrunableBatchRepository
`Illuminate\Bus\PrunableBatchRepository` implements Illuminate\Bus\BatchRepository

```php
abstract function cancel(string $batchId);
abstract function decrementPendingJobs(string $batchId, string $jobId);
abstract function delete(string $batchId);
abstract function find(string $batchId);
abstract function get($limit, $before);
abstract function incrementFailedJobs(string $batchId, string $jobId);
abstract function incrementTotalJobs(string $batchId, int $amount);
abstract function markAsFinished(string $batchId);
abstract function prune(DateTimeInterface $before);
abstract function rollBack();
abstract function store(Illuminate\Bus\PendingBatch $batch);
abstract function transaction(Closure $callback);
```

## trait Queueable
`Illuminate\Bus\Queueable`

```php
function afterCommit();
function allOnConnection($connection);
function allOnQueue($queue);
function appendToChain($job);
function assertDoesntHaveChain();
function assertHasChain($expectedChain);
function beforeCommit();
function chain($chain);
function delay($delay);
function dispatchNextJobInChain();
function invokeChainCatchCallbacks($e);
function onConnection($connection);
function onGroup($group);
function onQueue($queue);
function prependToChain($job);
function through($middleware);
function withDeduplicator($deduplicator);
function withoutDelay();
```

## class UniqueLock
`Illuminate\Bus\UniqueLock`

```php
function __construct(Illuminate\Contracts\Cache\Repository $cache);
function acquire($job);
function release($job);
static function getKey($job);
```

## class UpdatedBatchJobCounts
`Illuminate\Bus\UpdatedBatchJobCounts`

```php
function __construct(int $pendingJobs = 0, int $failedJobs = 0);
function allJobsHaveRanExactlyOnce();
```

