# Illuminate\Process

Version: 13.14.0

## class Factory
`Illuminate\Process\Factory`

```php
function __call($method, $parameters);
function assertDidntRun(Closure|string $callback);
function assertNotRan(Closure|string $callback);
function assertNothingRan();
function assertRan(Closure|string $callback);
function assertRanTimes(Closure|string $callback, int $times = 1);
function concurrently(callable $callback, ?callable $output = null);
function describe();
function fake(Closure|array|null $callback = null);
function isRecording();
function macroCall($method, $parameters);
function newPendingProcess();
function pipe(callable|array $callback, ?callable $output = null);
function pool(callable $callback);
function preventStrayProcesses(bool $prevent = true);
function preventingStrayProcesses();
function record(Illuminate\Process\PendingProcess $process, Illuminate\Contracts\Process\ProcessResult $result);
function recordIfRecording(Illuminate\Process\PendingProcess $process, Illuminate\Contracts\Process\ProcessResult $result);
function result(array|string $output = '', array|string $errorOutput = '', int $exitCode = 0);
function sequence(array $processes = []);
static function __callStatic($method, $parameters);
static function flushMacros();
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
```

## class FakeInvokedProcess
`Illuminate\Process\FakeInvokedProcess` implements Illuminate\Contracts\Process\InvokedProcess

```php
function __construct(string $command, Illuminate\Process\FakeProcessDescription $process);
function command();
function errorOutput();
function hasReceivedSignal(int $signal);
function id();
function latestErrorOutput();
function latestOutput();
function output();
function predictProcessResult();
function running();
function signal(int $signal);
function wait(?callable $output = null);
function waitUntil(?callable $output = null);
function withOutputHandler(?callable $outputHandler);
```

## class FakeProcessDescription
`Illuminate\Process\FakeProcessDescription`

```php
function errorOutput(array|string $output);
function exitCode(int $exitCode);
function id(int $processId);
function iterations(int $iterations);
function output(array|string $output);
function replaceErrorOutput(string $output);
function replaceOutput(string $output);
function runsFor(int $iterations);
function toProcessResult(string $command);
function toSymfonyProcess(string $command);
```

## class FakeProcessResult
`Illuminate\Process\FakeProcessResult` implements Illuminate\Contracts\Process\ProcessResult

```php
function __construct(string $command = '', int $exitCode = 0, array|string $output = '', array|string $errorOutput = '');
function command();
function errorOutput();
function exitCode();
function failed();
function output();
function seeInErrorOutput(string $output);
function seeInOutput(string $output);
function successful();
function throw(?callable $callback = null);
function throwIf(bool $condition, ?callable $callback = null);
function withCommand(string $command);
```

## class FakeProcessSequence
`Illuminate\Process\FakeProcessSequence`

```php
function __construct(array $processes = []);
function __invoke();
function dontFailWhenEmpty();
function isEmpty();
function push(Illuminate\Contracts\Process\ProcessResult|Illuminate\Process\FakeProcessDescription|array|string $process);
function whenEmpty(Illuminate\Contracts\Process\ProcessResult|Illuminate\Process\FakeProcessDescription|array|string $process);
```

## class InvokedProcess
`Illuminate\Process\InvokedProcess` implements Illuminate\Contracts\Process\InvokedProcess

```php
function __construct(Symfony\Component\Process\Process $process);
function command();
function ensureNotTimedOut();
function errorOutput();
function id();
function latestErrorOutput();
function latestOutput();
function output();
function running();
function signal(int $signal);
function stop(float $timeout = 10, ?int $signal = null);
function wait(?callable $output = null);
function waitUntil(?callable $output = null);
```

## class InvokedProcessPool
`Illuminate\Process\InvokedProcessPool` implements Countable

```php
function __construct(array $invokedProcesses);
function count(): int;
function running();
function signal(int $signal);
function stop(float $timeout = 10, ?int $signal = null);
function wait();
```

## class PendingProcess
`Illuminate\Process\PendingProcess`

```php
function __construct(Illuminate\Process\Factory $factory);
function command(array|string $command);
function env(array $environment);
function forever();
function idleTimeout(Carbon\CarbonInterval|int $timeout);
function input($input);
function options(array $options);
function path(string $path);
function quietly();
function run(array|string|null $command = null, ?callable $output = null);
function start(array|string|null $command = null, ?callable $output = null);
function supportsTty();
function timeout(Carbon\CarbonInterval|int $timeout);
function tty(bool $tty = true);
function unless($value = null, ?callable $callback = null, ?callable $default = null);
function when($value = null, ?callable $callback = null, ?callable $default = null);
function withFakeHandlers(array $fakeHandlers);
```

## class Pipe
`Illuminate\Process\Pipe`

```php
function __call($method, $parameters);
function __construct(Illuminate\Process\Factory $factory, callable $callback);
function as(string $key);
function run(?callable $output = null);
```

## class Pool
`Illuminate\Process\Pool`

```php
function __call($method, $parameters);
function __construct(Illuminate\Process\Factory $factory, callable $callback);
function as(string $key);
function run();
function start(?callable $output = null);
function wait();
```

## class ProcessPoolResults
`Illuminate\Process\ProcessPoolResults` implements ArrayAccess

```php
function __construct(array $results);
function collect();
function failed();
function offsetExists($offset): bool;
function offsetGet($offset): mixed;
function offsetSet($offset, $value): void;
function offsetUnset($offset): void;
function successful();
```

## class ProcessResult
`Illuminate\Process\ProcessResult` implements Illuminate\Contracts\Process\ProcessResult

```php
function __construct(Symfony\Component\Process\Process $process);
function command();
function errorOutput();
function exitCode();
function failed();
function output();
function seeInErrorOutput(string $output);
function seeInOutput(string $output);
function successful();
function throw(?callable $callback = null);
function throwIf(bool $condition, ?callable $callback = null);
```

