# Illuminate\Console\Concerns

Version: 13.14.0

## trait CallsCommands
`Illuminate\Console\Concerns\CallsCommands`

```php
function call($command, array $arguments = []);
function callSilent($command, array $arguments = []);
function callSilently($command, array $arguments = []);
```

## trait ConfiguresPrompts
`Illuminate\Console\Concerns\ConfiguresPrompts`

## trait CreatesMatchingTest
`Illuminate\Console\Concerns\CreatesMatchingTest`

## trait FindsAvailableModels
`Illuminate\Console\Concerns\FindsAvailableModels`

## trait HasParameters
`Illuminate\Console\Concerns\HasParameters`

## trait InteractsWithIO
`Illuminate\Console\Concerns\InteractsWithIO`

```php
function alert($string, $verbosity = null);
function anticipate($question, $choices, $default = null);
function argument($key = null);
function arguments();
function ask($question, $default = null);
function askWithCompletion($question, $choices, $default = null);
function choice($question, array $choices, $default = null, $attempts = null, $multiple = false);
function comment($string, $verbosity = null);
function confirm($question, $default = false);
function error($string, $verbosity = null);
function getOutput();
function hasArgument($name);
function hasOption($name);
function info($string, $verbosity = null);
function line($string, $style = null, $verbosity = null);
function newLine($count = 1);
function option($key = null);
function options();
function outputComponents();
function question($string, $verbosity = null);
function secret($question, $fallback = true);
function setInput(Symfony\Component\Console\Input\InputInterface $input);
function setOutput(Illuminate\Console\OutputStyle $output);
function table($headers, $rows, $tableStyle = 'default', array $columnStyles = []);
function warn($string, $verbosity = null);
function withProgressBar($totalSteps, Closure $callback);
```

## trait InteractsWithSignals
`Illuminate\Console\Concerns\InteractsWithSignals`

```php
function trap($signals, $callback);
function untrap();
```

## trait PromptsForMissingInput
`Illuminate\Console\Concerns\PromptsForMissingInput`

