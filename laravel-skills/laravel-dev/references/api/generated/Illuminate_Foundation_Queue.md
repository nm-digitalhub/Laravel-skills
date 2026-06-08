# Illuminate\Foundation\Queue

Version: 13.14.0

## trait InteractsWithUniqueJobs
`Illuminate\Foundation\Queue\InteractsWithUniqueJobs`

```php
function addUniqueJobInformationToContext($job): void;
function removeUniqueJobInformationFromContext($job): void;
```

## trait Queueable
`Illuminate\Foundation\Queue\Queueable`

```php
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
function beforeCommit();
function chain($chain);
function delay($delay);
function delete();
function dispatchNextJobInChain();
function fail($exception = null);
function invokeChainCatchCallbacks($e);
function onConnection($connection);
function onGroup($group);
function onQueue($queue);
function prependToChain($job);
function release($delay = 0);
function restoreModel($value);
function setJob(Illuminate\Contracts\Queue\Job $job);
function through($middleware);
function withDeduplicator($deduplicator);
function withFakeQueueInteractions();
function withoutDelay();
static function dispatch(...$arguments);
static function dispatchAfterResponse(...$arguments);
static function dispatchIf($boolean, ...$arguments);
static function dispatchSync(...$arguments);
static function dispatchUnless($boolean, ...$arguments);
static function withChain($chain);
```

