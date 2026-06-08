# Illuminate\Queue\Events

Version: 13.14.0

## class JobAttempted
`Illuminate\Queue\Events\JobAttempted`

```php
function __construct($connectionName, $job, $exception = null);
function successful(): bool;
```

## class JobDebounced
`Illuminate\Queue\Events\JobDebounced`

```php
function __construct($connectionName, $job, $command);
```

## class JobExceptionOccurred
`Illuminate\Queue\Events\JobExceptionOccurred`

```php
function __construct($connectionName, $job, $exception);
```

## class JobFailed
`Illuminate\Queue\Events\JobFailed`

```php
function __construct($connectionName, $job, $exception);
```

## class JobPopped
`Illuminate\Queue\Events\JobPopped`

```php
function __construct($connectionName, $job);
```

## class JobPopping
`Illuminate\Queue\Events\JobPopping`

```php
function __construct($connectionName, $queue = null);
```

## class JobProcessed
`Illuminate\Queue\Events\JobProcessed`

```php
function __construct($connectionName, $job);
```

## class JobProcessing
`Illuminate\Queue\Events\JobProcessing`

```php
function __construct($connectionName, $job);
```

## class JobQueued
`Illuminate\Queue\Events\JobQueued`

```php
function __construct($connectionName, $queue, $id, $job, $payload, $delay);
function payload();
```

## class JobQueueing
`Illuminate\Queue\Events\JobQueueing`

```php
function __construct($connectionName, $queue, $job, $payload, $delay);
function payload();
```

## class JobReleasedAfterException
`Illuminate\Queue\Events\JobReleasedAfterException`

```php
function __construct($connectionName, $job, $backoff = null);
```

## class JobRetryRequested
`Illuminate\Queue\Events\JobRetryRequested`

```php
function __construct($job);
function payload();
```

## class JobTimedOut
`Illuminate\Queue\Events\JobTimedOut`

```php
function __construct($connectionName, $job);
```

## class Looping
`Illuminate\Queue\Events\Looping`

```php
function __construct($connectionName, $queue, $workerOptions = null);
```

## class QueueBusy
`Illuminate\Queue\Events\QueueBusy`

```php
function __construct($connectionName, $queue, $size);
```

## class QueueFailedOver
`Illuminate\Queue\Events\QueueFailedOver`

```php
function __construct(?string $connectionName, mixed $command, Throwable $exception);
```

## class QueuePaused
`Illuminate\Queue\Events\QueuePaused`

```php
function __construct($connection, $queue, $ttl = null);
```

## class QueueResumed
`Illuminate\Queue\Events\QueueResumed`

```php
function __construct($connection, $queue);
```

## class WorkerIdle
`Illuminate\Queue\Events\WorkerIdle`

```php
function __construct($connectionName, $queue, $workerOptions);
```

## class WorkerInterrupted
`Illuminate\Queue\Events\WorkerInterrupted`

```php
function __construct(int $signal, ?string $connectionName = null, ?string $queue = null, ?Illuminate\Queue\WorkerOptions $workerOptions = null);
```

## class WorkerPausing
`Illuminate\Queue\Events\WorkerPausing`

```php
function __construct(?string $connectionName = null, ?string $queue = null, ?Illuminate\Queue\WorkerOptions $workerOptions = null);
```

## class WorkerResuming
`Illuminate\Queue\Events\WorkerResuming`

```php
function __construct(?string $connectionName = null, ?string $queue = null, ?Illuminate\Queue\WorkerOptions $workerOptions = null);
```

## class WorkerStarting
`Illuminate\Queue\Events\WorkerStarting`

```php
function __construct($connectionName, $queue, $workerOptions);
```

## class WorkerStopping
`Illuminate\Queue\Events\WorkerStopping`

```php
function __construct($status = 0, $workerOptions = null, $reason = null);
```

