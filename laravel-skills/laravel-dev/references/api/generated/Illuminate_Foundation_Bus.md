# Illuminate\Foundation\Bus

Version: 13.14.0

## trait Dispatchable
`Illuminate\Foundation\Bus\Dispatchable`

```php
static function dispatch(...$arguments);
static function dispatchAfterResponse(...$arguments);
static function dispatchIf($boolean, ...$arguments);
static function dispatchSync(...$arguments);
static function dispatchUnless($boolean, ...$arguments);
static function withChain($chain);
```

## trait DispatchesJobs
`Illuminate\Foundation\Bus\DispatchesJobs`

```php
function dispatchSync($job);
```

## class PendingChain
`Illuminate\Foundation\Bus\PendingChain`

```php
function __construct($job, $chain);
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

## class PendingClosureDispatch
`Illuminate\Foundation\Bus\PendingClosureDispatch` extends Illuminate\Foundation\Bus\PendingDispatch

```php
function __call($method, $parameters);
function __construct($job);
function __destruct();
function addUniqueJobInformationToContext($job): void;
function afterCommit();
function afterResponse($afterResponse = true);
function allOnConnection($connection);
function allOnQueue($queue);
function beforeCommit();
function catch(Closure $callback);
function chain($chain);
function delay($delay);
function getJob();
function onConnection($connection);
function onGroup($group);
function onQueue($queue);
function removeUniqueJobInformationFromContext($job): void;
function unless($value = null, ?callable $callback = null, ?callable $default = null);
function when($value = null, ?callable $callback = null, ?callable $default = null);
function withDeduplicator($deduplicator);
function withoutDelay();
```

## class PendingDispatch
`Illuminate\Foundation\Bus\PendingDispatch`

```php
function __call($method, $parameters);
function __construct($job);
function __destruct();
function addUniqueJobInformationToContext($job): void;
function afterCommit();
function afterResponse($afterResponse = true);
function allOnConnection($connection);
function allOnQueue($queue);
function beforeCommit();
function chain($chain);
function delay($delay);
function getJob();
function onConnection($connection);
function onGroup($group);
function onQueue($queue);
function removeUniqueJobInformationFromContext($job): void;
function unless($value = null, ?callable $callback = null, ?callable $default = null);
function when($value = null, ?callable $callback = null, ?callable $default = null);
function withDeduplicator($deduplicator);
function withoutDelay();
```

