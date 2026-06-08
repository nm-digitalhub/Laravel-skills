# Illuminate\Foundation\Cloud

Version: 13.14.0

## class Events
`Illuminate\Foundation\Cloud\Events`

```php
function __construct(string $address);
function emit(array $payload): void;
function emitMany(array $payloads): void;
```

## class FailedJobProvider
`Illuminate\Foundation\Cloud\FailedJobProvider` implements Illuminate\Queue\Failed\FailedJobProviderInterface, Illuminate\Queue\Failed\CountableFailedJobProvider, Illuminate\Queue\Failed\PrunableFailedJobProvider

```php
function __construct(Illuminate\Queue\Failed\FailedJobProviderInterface $failer, Illuminate\Foundation\Cloud\Events $events, Illuminate\Contracts\Encryption\StringEncrypter $encrypter);
function all();
function count($connection = null, $queue = null);
function find($id);
function flush($hours = null);
function forget($id);
function ids($queue = null);
function log($connection, $queue, $payload, $exception);
function prune(DateTimeInterface $before);
function setQueue($queue);
```

## class JsonFormatter
`Illuminate\Foundation\Cloud\JsonFormatter` extends Monolog\Formatter\JsonFormatter implements Monolog\Formatter\FormatterInterface

```php
function __construct(int $batchMode = 1, bool $appendNewline = true, bool $ignoreEmptyContextAndExtra = false, bool $includeStacktraces = false);
function addJsonEncodeOption(int $option): self;
function format(Monolog\LogRecord $record): string;
function formatBatch(array $records): string;
function getBatchMode(): int;
function getDateFormat(): string;
function getMaxNormalizeDepth(): int;
function getMaxNormalizeItemCount(): int;
function includeStacktraces(bool $include = true): self;
function isAppendingNewlines(): bool;
function normalizeValue(mixed $data): mixed;
function removeJsonEncodeOption(int $option): self;
function setBasePath(string $path = ''): self;
function setDateFormat(string $dateFormat): self;
function setJsonPrettyPrint(bool $enable): self;
function setMaxNormalizeDepth(int $maxNormalizeDepth): self;
function setMaxNormalizeItemCount(int $maxNormalizeItemCount): self;
```

## class ManagedQueueNotFoundException
`Illuminate\Foundation\Cloud\ManagedQueueNotFoundException` extends RuntimeException implements Stringable, Throwable

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

## class Queue
`Illuminate\Foundation\Cloud\Queue` implements Illuminate\Contracts\Queue\Queue, Illuminate\Contracts\Queue\ClearableQueue

```php
function __call($method, $parameters);
function __construct(Illuminate\Contracts\Queue\Queue $queue, Illuminate\Foundation\Cloud\Events $events, array $config);
function bulk($jobs, $data = '', $queue = null);
function clear($queue);
function creationTimeOfOldestPendingJob($queue = null);
function delayedSize($queue = null);
function finishProcessingJob($default = 'processed', $timestamp = null);
function finishQueueingJob($queue);
function getConnectionName();
function getQueueableOptions($job, $queue, $payload, $delay = null): array;
function later($delay, $job, $data = '', $queue = null);
function laterOn($queue, $delay, $job, $data = '');
function normalizeQueue($queue);
function pendingSize($queue = null);
function pop($queue = null);
function processingJobDetails();
function push($job, $data = '', $queue = null);
function pushOn($queue, $job, $data = '');
function pushRaw($payload, $queue = null, array $options = []);
function reservedSize($queue = null);
function setConfig($config);
function setConnectionName($name);
function size($queue = null);
```

## class QueueConnector
`Illuminate\Foundation\Cloud\QueueConnector` implements Illuminate\Queue\Connectors\ConnectorInterface

```php
function __construct(Illuminate\Queue\Connectors\ConnectorInterface $connector, Illuminate\Foundation\Application $app);
function connect(array $config): Illuminate\Foundation\Cloud\Queue;
```

