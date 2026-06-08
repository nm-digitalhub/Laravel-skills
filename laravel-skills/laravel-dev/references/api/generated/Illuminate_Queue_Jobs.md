# Illuminate\Queue\Jobs

Version: 13.14.0

## class BeanstalkdJob
`Illuminate\Queue\Jobs\BeanstalkdJob` extends Illuminate\Queue\Jobs\Job implements Illuminate\Contracts\Queue\Job

```php
function __construct(Illuminate\Container\Container $container, $pheanstalk, Pheanstalk\Contract\JobIdInterface $job, $connectionName, $queue);
function attempts();
function backoff();
function bury();
function delete();
function fail($e = null);
function fire();
function getConnectionName();
function getContainer();
function getJobId();
function getName();
function getPheanstalk();
function getPheanstalkJob();
function getQueue();
function getRawBody();
function getResolvedJob();
function hasFailed();
function isDeleted();
function isDeletedOrReleased();
function isReleased();
function markAsFailed();
function maxExceptions();
function maxTries();
function payload();
function release($delay = 0);
function resolveName();
function resolveQueuedJobClass();
function retryUntil();
function shouldFailOnTimeout();
function timeout();
function uuid();
```

## class DatabaseJob
`Illuminate\Queue\Jobs\DatabaseJob` extends Illuminate\Queue\Jobs\Job implements Illuminate\Contracts\Queue\Job

```php
function __construct(Illuminate\Container\Container $container, Illuminate\Queue\DatabaseQueue $database, $job, $connectionName, $queue);
function attempts();
function backoff();
function delete();
function fail($e = null);
function fire();
function getConnectionName();
function getContainer();
function getJobId();
function getJobRecord();
function getName();
function getQueue();
function getRawBody();
function getResolvedJob();
function hasFailed();
function isDeleted();
function isDeletedOrReleased();
function isReleased();
function markAsFailed();
function maxExceptions();
function maxTries();
function payload();
function release($delay = 0);
function resolveName();
function resolveQueuedJobClass();
function retryUntil();
function shouldFailOnTimeout();
function timeout();
function uuid();
```

## class DatabaseJobRecord
`Illuminate\Queue\Jobs\DatabaseJobRecord`

```php
function __construct($record);
function __get($key);
function increment();
function touch();
```

## class FakeJob
`Illuminate\Queue\Jobs\FakeJob` extends Illuminate\Queue\Jobs\Job implements Illuminate\Contracts\Queue\Job

```php
function attempts();
function backoff();
function delete();
function fail($e = null);
function fire();
function getConnectionName();
function getContainer();
function getJobId();
function getName();
function getQueue();
function getRawBody();
function getResolvedJob();
function hasFailed();
function isDeleted();
function isDeletedOrReleased();
function isReleased();
function markAsFailed();
function maxExceptions();
function maxTries();
function payload();
function release($delay = 0);
function resolveName();
function resolveQueuedJobClass();
function retryUntil();
function shouldFailOnTimeout();
function timeout();
function uuid();
```

## class InspectedJob
`Illuminate\Queue\Jobs\InspectedJob`

```php
function __construct(?string $uuid, ?string $queue, ?string $name, int $attempts, array $payload = [], ?Illuminate\Support\Carbon $createdAt = null);
static function fromPayload(string $payload, ?int $attempts = null, ?string $queue = null): static;
```

## class Job
`Illuminate\Queue\Jobs\Job`

```php
abstract function getJobId();
abstract function getRawBody();
function backoff();
function delete();
function fail($e = null);
function fire();
function getConnectionName();
function getContainer();
function getName();
function getQueue();
function getResolvedJob();
function hasFailed();
function isDeleted();
function isDeletedOrReleased();
function isReleased();
function markAsFailed();
function maxExceptions();
function maxTries();
function payload();
function release($delay = 0);
function resolveName();
function resolveQueuedJobClass();
function retryUntil();
function shouldFailOnTimeout();
function timeout();
function uuid();
```

## class JobName
`Illuminate\Queue\Jobs\JobName`

```php
static function parse($job);
static function resolve($name, $payload);
static function resolveClassName($name, $payload);
```

## class RedisJob
`Illuminate\Queue\Jobs\RedisJob` extends Illuminate\Queue\Jobs\Job implements Illuminate\Contracts\Queue\Job

```php
function __construct(Illuminate\Container\Container $container, Illuminate\Queue\RedisQueue $redis, $job, $reserved, $connectionName, $queue);
function attempts();
function backoff();
function delete();
function fail($e = null);
function fire();
function getConnectionName();
function getContainer();
function getJobId();
function getName();
function getQueue();
function getRawBody();
function getRedisQueue();
function getReservedJob();
function getResolvedJob();
function hasFailed();
function isDeleted();
function isDeletedOrReleased();
function isReleased();
function markAsFailed();
function maxExceptions();
function maxTries();
function payload();
function release($delay = 0);
function resolveName();
function resolveQueuedJobClass();
function retryUntil();
function shouldFailOnTimeout();
function timeout();
function uuid();
```

## class SqsJob
`Illuminate\Queue\Jobs\SqsJob` extends Illuminate\Queue\Jobs\Job implements Illuminate\Contracts\Queue\Job

```php
function __construct(Illuminate\Container\Container $container, Aws\Sqs\SqsClient $sqs, array $job, $connectionName, $queue, array $overflowStorage = []);
function attempts();
function backoff();
function delete();
function fail($e = null);
function fire();
function getConnectionName();
function getContainer();
function getJobId();
function getName();
function getQueue();
function getRawBody();
function getResolvedJob();
function getSqs();
function getSqsJob();
function hasFailed();
function isDeleted();
function isDeletedOrReleased();
function isReleased();
function markAsFailed();
function maxExceptions();
function maxTries();
function payload();
function release($delay = 0);
function resolveName();
function resolveQueuedJobClass();
function retryUntil();
function shouldFailOnTimeout();
function timeout();
function uuid();
```

## class SyncJob
`Illuminate\Queue\Jobs\SyncJob` extends Illuminate\Queue\Jobs\Job implements Illuminate\Contracts\Queue\Job

```php
function __construct(Illuminate\Container\Container $container, $payload, $connectionName, $queue);
function attempts();
function backoff();
function delete();
function fail($e = null);
function fire();
function getConnectionName();
function getContainer();
function getJobId();
function getName();
function getQueue();
function getRawBody();
function getResolvedJob();
function hasFailed();
function isDeleted();
function isDeletedOrReleased();
function isReleased();
function markAsFailed();
function maxExceptions();
function maxTries();
function payload();
function release($delay = 0);
function resolveName();
function resolveQueuedJobClass();
function retryUntil();
function shouldFailOnTimeout();
function timeout();
function uuid();
```

