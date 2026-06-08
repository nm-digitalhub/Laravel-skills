# Illuminate\Contracts\Bus

Version: 13.14.0

## interface Dispatcher
`Illuminate\Contracts\Bus\Dispatcher`

```php
abstract function chain($jobs = null);
abstract function dispatch($command);
abstract function dispatchAfterResponse($command, $handler = null);
abstract function dispatchNow($command, $handler = null);
abstract function dispatchSync($command, $handler = null);
abstract function getCommandHandler($command);
abstract function hasCommandHandler($command);
abstract function map(array $map);
abstract function pipeThrough(array $pipes);
```

## interface QueueingDispatcher
`Illuminate\Contracts\Bus\QueueingDispatcher` implements Illuminate\Contracts\Bus\Dispatcher

```php
abstract function batch($jobs);
abstract function chain($jobs = null);
abstract function dispatch($command);
abstract function dispatchAfterResponse($command, $handler = null);
abstract function dispatchNow($command, $handler = null);
abstract function dispatchSync($command, $handler = null);
abstract function dispatchToQueue($command);
abstract function findBatch(string $batchId);
abstract function getCommandHandler($command);
abstract function hasCommandHandler($command);
abstract function map(array $map);
abstract function pipeThrough(array $pipes);
```

