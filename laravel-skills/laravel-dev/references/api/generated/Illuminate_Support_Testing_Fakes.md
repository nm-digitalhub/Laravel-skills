# Illuminate\Support\Testing\Fakes

Version: 13.14.0

## class BatchFake
`Illuminate\Support\Testing\Fakes\BatchFake` extends Illuminate\Bus\Batch implements JsonSerializable, Illuminate\Contracts\Support\Arrayable

```php
function __construct(string $id, string $name, int $totalJobs, int $pendingJobs, int $failedJobs, array $failedJobIds, array $options, Carbon\CarbonImmutable $createdAt, ?Carbon\CarbonImmutable $cancelledAt = null, ?Carbon\CarbonImmutable $finishedAt = null);
function __get($key);
function add($jobs);
function allowsFailures();
function cancel(?Throwable $exception = null);
function canceled();
function cancelled();
function decrementPendingJobs(string $jobId);
function delete();
function deleted();
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

## class BatchRepositoryFake
`Illuminate\Support\Testing\Fakes\BatchRepositoryFake` implements Illuminate\Bus\BatchRepository

```php
function cancel(string $batchId);
function decrementPendingJobs(string $batchId, string $jobId);
function delete(string $batchId);
function find(string $batchId);
function get($limit, $before);
function incrementFailedJobs(string $batchId, string $jobId);
function incrementTotalJobs(string $batchId, int $amount);
function markAsFinished(string $batchId);
function rollBack();
function store(Illuminate\Bus\PendingBatch $batch);
function transaction(Closure $callback);
```

## class BusFake
`Illuminate\Support\Testing\Fakes\BusFake` implements Illuminate\Support\Testing\Fakes\Fake, Illuminate\Contracts\Bus\QueueingDispatcher, Illuminate\Contracts\Bus\Dispatcher

```php
function __construct(Illuminate\Contracts\Bus\QueueingDispatcher $dispatcher, $jobsToFake = [], ?Illuminate\Bus\BatchRepository $batchRepository = null);
function assertBatchCount($count);
function assertBatched(callable|array $callback);
function assertChained(array $expectedChain);
function assertDispatched($command, $callback = null);
function assertDispatchedAfterResponse($command, $callback = null);
function assertDispatchedAfterResponseTimes($command, $times = 1);
function assertDispatchedOnce($command);
function assertDispatchedSync($command, $callback = null);
function assertDispatchedSyncTimes($command, $times = 1);
function assertDispatchedTimes($command, $times = 1);
function assertDispatchedWithoutChain($command, $callback = null);
function assertNotDispatched($command, $callback = null);
function assertNotDispatchedAfterResponse($command, $callback = null);
function assertNotDispatchedSync($command, $callback = null);
function assertNothingBatched();
function assertNothingChained();
function assertNothingDispatched();
function assertNothingPlaced();
function batch($jobs);
function batched(callable $callback);
function bulk($jobs);
function chain($jobs = null);
function chainedBatch(Closure $callback);
function dispatch($command);
function dispatchAfterResponse($command, $handler = null);
function dispatchFakeBatch($name = '');
function dispatchNow($command, $handler = null);
function dispatchSync($command, $handler = null);
function dispatchToQueue($command);
function dispatched($command, $callback = null);
function dispatchedAfterResponse(string $command, $callback = null);
function dispatchedBatches();
function dispatchedSync(string $command, $callback = null);
function except($jobsToDispatch);
function findBatch(string $batchId);
function getCommandHandler($command);
function hasCommandHandler($command);
function hasDispatched($command);
function hasDispatchedAfterResponse($command);
function hasDispatchedSync($command);
function map(array $map);
function pipeThrough(array $pipes);
function recordPendingBatch(Illuminate\Bus\PendingBatch $pendingBatch);
function serializeAndRestore(bool $serializeAndRestore = true);
```

## class ChainedBatchTruthTest
`Illuminate\Support\Testing\Fakes\ChainedBatchTruthTest`

```php
function __construct(Closure $callback);
function __invoke($pendingBatch);
```

## class EventFake
`Illuminate\Support\Testing\Fakes\EventFake` implements Illuminate\Contracts\Events\Dispatcher, Illuminate\Support\Testing\Fakes\Fake

```php
function __call($method, $parameters);
function __construct(Illuminate\Contracts\Events\Dispatcher $dispatcher, $eventsToFake = []);
function assertDispatched($event, $callback = null);
function assertDispatchedOnce($event);
function assertDispatchedTimes($event, $times = 1);
function assertListening($expectedEvent, $expectedListener);
function assertNotDispatched($event, $callback = null);
function assertNothingDispatched();
function dispatch($event, $payload = [], $halt = false);
function dispatched($event, $callback = null);
function dispatchedEvents();
function except($eventsToDispatch);
function flush($event);
function forget($event);
function forgetPushed();
function hasDispatched($event);
function hasListeners($eventName);
function listen($events, $listener = null);
function push($event, $payload = []);
function subscribe($subscriber);
function until($event, $payload = []);
```

## class ExceptionHandlerFake
`Illuminate\Support\Testing\Fakes\ExceptionHandlerFake` implements Illuminate\Contracts\Debug\ExceptionHandler, Illuminate\Support\Testing\Fakes\Fake

```php
function __call(string $method, array $parameters);
function __construct(Illuminate\Contracts\Debug\ExceptionHandler $handler, array $exceptions = []);
function assertNotReported(Closure|string $exception);
function assertNothingReported();
function assertReported(Closure|string $exception);
function assertReportedCount(int $count);
function handler();
function render($request, $e);
function renderForConsole($output, Throwable $e);
function report($e);
function reported();
function setHandler(Illuminate\Contracts\Debug\ExceptionHandler $handler);
function shouldReport($e);
function throwFirstReported();
function throwOnReport();
```

## interface Fake
`Illuminate\Support\Testing\Fakes\Fake`

## class MailFake
`Illuminate\Support\Testing\Fakes\MailFake` implements Illuminate\Contracts\Mail\Factory, Illuminate\Support\Testing\Fakes\Fake, Illuminate\Contracts\Mail\Mailer, Illuminate\Contracts\Mail\MailQueue

```php
function __call($method, $parameters);
function __construct(Illuminate\Mail\MailManager $manager);
function assertNotOutgoing($mailable, $callback = null);
function assertNotQueued($mailable, $callback = null);
function assertNotSent($mailable, $callback = null);
function assertNothingOutgoing();
function assertNothingQueued();
function assertNothingSent();
function assertOutgoingCount($count);
function assertQueued($mailable, $callback = null);
function assertQueuedCount($count);
function assertSent($mailable, $callback = null);
function assertSentCount($count);
function assertSentTimes($mailable, $times = 1);
function bcc($users);
function cc($users);
function driver($driver = null);
function forgetMailers();
function hasQueued($mailable);
function hasSent($mailable);
function later($delay, $view, $queue = null);
function mailer($name = null);
function queue($view, $queue = null);
function queued($mailable, $callback = null);
function raw($text, $callback);
function send($view, array $data = [], $callback = null);
function sendNow($mailable, array $data = [], $callback = null);
function sent($mailable, $callback = null);
function to($users);
```

## class NotificationFake
`Illuminate\Support\Testing\Fakes\NotificationFake` implements Illuminate\Support\Testing\Fakes\Fake, Illuminate\Contracts\Notifications\Dispatcher, Illuminate\Contracts\Notifications\Factory

```php
function __call($method, $parameters);
function assertCount($expectedCount);
function assertNotSentTo($notifiable, $notification, $callback = null);
function assertNothingSent();
function assertNothingSentTo($notifiable);
function assertSentOnDemand($notification, $callback = null);
function assertSentOnDemandTimes($notification, $times = 1);
function assertSentTimes($notification, $expectedCount);
function assertSentTo($notifiable, $notification, $callback = null);
function assertSentToTimes($notifiable, $notification, $times = 1);
function channel($name = null);
function hasSent($notifiable, $notification);
function locale($locale);
function send($notifiables, $notification);
function sendNow($notifiables, $notification, ?array $channels = null);
function sent($notifiable, $notification, $callback = null);
function sentNotifications();
function serializeAndRestore(bool $serializeAndRestore = true);
static function __callStatic($method, $parameters);
static function flushMacros();
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
```

## class PendingBatchFake
`Illuminate\Support\Testing\Fakes\PendingBatchFake` extends Illuminate\Bus\PendingBatch

```php
function __construct(Illuminate\Support\Testing\Fakes\BusFake $bus, Illuminate\Support\Collection $jobs);
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
function hasJobs(array $expectedJobs);
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

## class PendingChainFake
`Illuminate\Support\Testing\Fakes\PendingChainFake` extends Illuminate\Foundation\Bus\PendingChain

```php
function __construct(Illuminate\Support\Testing\Fakes\BusFake $bus, $job, $chain);
function append($job);
function catch($callback);
function catchCallbacks();
function delay($delay);
function dispatch();
function dispatchIf($boolean);
function dispatchUnless($boolean);
function onConnection($connection);
function onQueue($queue);
function prepend($job);
function unless($value = null, ?callable $callback = null, ?callable $default = null);
function when($value = null, ?callable $callback = null, ?callable $default = null);
```

## class PendingMailFake
`Illuminate\Support\Testing\Fakes\PendingMailFake` extends Illuminate\Mail\PendingMail

```php
function __construct($mailer);
function bcc($users);
function cc($users);
function later($delay, Illuminate\Contracts\Mail\Mailable $mailable);
function locale($locale);
function queue(Illuminate\Contracts\Mail\Mailable $mailable);
function send(Illuminate\Contracts\Mail\Mailable $mailable);
function sendNow(Illuminate\Contracts\Mail\Mailable $mailable);
function to($users);
function unless($value = null, ?callable $callback = null, ?callable $default = null);
function when($value = null, ?callable $callback = null, ?callable $default = null);
```

## class QueueFake
`Illuminate\Support\Testing\Fakes\QueueFake` extends Illuminate\Queue\QueueManager implements Illuminate\Contracts\Queue\Factory, Illuminate\Contracts\Queue\Monitor, Illuminate\Support\Testing\Fakes\Fake, Illuminate\Contracts\Queue\Queue

```php
function __call($method, $parameters);
function __construct($app, $jobsToFake = [], $queue = null);
function addConnector($driver, Closure $resolver);
function after($callback);
function allDelayedJobs(): Illuminate\Support\Collection;
function allPendingJobs(): Illuminate\Support\Collection;
function allReservedJobs(): Illuminate\Support\Collection;
function assertClosureNotPushed($callback = null);
function assertClosurePushed($callback = null);
function assertCount($expectedCount);
function assertNotPushed($job, $callback = null);
function assertNothingPushed();
function assertPushed($job, $callback = null);
function assertPushedOn($queue, $job, $callback = null);
function assertPushedOnce($job);
function assertPushedTimes($job, $times = 1);
function assertPushedWithChain($job, $expectedChain = [], $callback = null);
function assertPushedWithoutChain($job, $callback = null);
function before($callback);
function bulk($jobs, $data = '', $queue = null);
function connected($name = null);
function connection($value = null);
function creationTimeOfOldestPendingJob($queue = null);
function delayedJobs($queue = null): Illuminate\Support\Collection;
function delayedSize($queue = null);
function except($jobsToBeQueued);
function exceptionOccurred($callback);
function extend($driver, Closure $resolver);
function failing($callback);
function getApplication();
function getConnectionName();
function getDefaultDriver();
function getName($connection = null);
function getPausedQueues($connection, $queues);
function hasPushed($job);
function isPaused($connection, $queue);
function later($delay, $job, $data = '', $queue = null);
function laterOn($queue, $delay, $job, $data = '');
function listenersPushed($listenerClass, $callback = null);
function looping($callback);
function pause($connection, $queue);
function pauseFor($connection, $queue, $ttl);
function pendingJobs($queue = null): Illuminate\Support\Collection;
function pendingSize($queue = null);
function pop($queue = null);
function push($job, $data = '', $queue = null);
function pushOn($queue, $job, $data = '');
function pushRaw($payload, $queue = null, array $options = []);
function pushed($job, $callback = null);
function pushedJobs();
function pushedRaw($callback = null);
function rawPushes();
function releaseUniqueJobLocks();
function reservedJobs($queue = null): Illuminate\Support\Collection;
function reservedSize($queue = null);
function resolveConnectionFromQueueRoute($queueable);
function resolveQueueFromQueueRoute($queueable);
function resume($connection, $queue);
function route(array|string $class, $queue = null, $connection = null);
function serializeAndRestore(bool $serializeAndRestore = true);
function setApplication($app);
function setConnectionName($name);
function setDefaultDriver($name);
function shouldFakeJob($job);
function size($queue = null);
function starting($callback);
function stopping($callback);
function withoutInterruptionPolling();
```

