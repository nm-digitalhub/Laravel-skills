# Illuminate\Contracts\Process

Version: 13.14.0

## interface InvokedProcess
`Illuminate\Contracts\Process\InvokedProcess`

```php
abstract function command();
abstract function errorOutput();
abstract function id();
abstract function latestErrorOutput();
abstract function latestOutput();
abstract function output();
abstract function running();
abstract function signal(int $signal);
abstract function wait(?callable $output = null);
abstract function waitUntil(?callable $output = null);
```

## interface ProcessResult
`Illuminate\Contracts\Process\ProcessResult`

```php
abstract function command();
abstract function errorOutput();
abstract function exitCode();
abstract function failed();
abstract function output();
abstract function seeInErrorOutput(string $output);
abstract function seeInOutput(string $output);
abstract function successful();
abstract function throw(?callable $callback = null);
abstract function throwIf(bool $condition, ?callable $callback = null);
```

