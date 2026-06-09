# Illuminate\Console\Scheduling

Version: 13.14.0

## interface CacheAware
`Illuminate\Console\Scheduling\CacheAware`

```php
abstract function useStore($store);
```

## class CacheEventMutex
`Illuminate\Console\Scheduling\CacheEventMutex` implements Illuminate\Console\Scheduling\EventMutex, Illuminate\Console\Scheduling\CacheAware

```php
function __construct(Illuminate\Contracts\Cache\Factory $cache);
function create(Illuminate\Console\Scheduling\Event $event);
function exists(Illuminate\Console\Scheduling\Event $event);
function forget(Illuminate\Console\Scheduling\Event $event);
function useStore($store);
```

## class CacheSchedulingMutex
`Illuminate\Console\Scheduling\CacheSchedulingMutex` implements Illuminate\Console\Scheduling\SchedulingMutex, Illuminate\Console\Scheduling\CacheAware

```php
function __construct(Illuminate\Contracts\Cache\Factory $cache);
function create(Illuminate\Console\Scheduling\Event $event, DateTimeInterface $time);
function exists(Illuminate\Console\Scheduling\Event $event, DateTimeInterface $time);
function useStore($store);
```

## class CallbackEvent
`Illuminate\Console\Scheduling\CallbackEvent` extends Illuminate\Console\Scheduling\Event

```php
function __call($method, $parameters);
function __construct(Illuminate\Console\Scheduling\EventMutex $mutex, $callback, array $parameters = [], $timezone = null);
function after(Closure $callback);
function appendOutputTo($location);
function at($time);
function before(Closure $callback);
function between($startTime, $endTime);
function buildCommand();
function callAfterCallbacks(Illuminate\Contracts\Container\Container $container);
function callBeforeCallbacks(Illuminate\Contracts\Container\Container $container);
function createMutexNameUsing(Closure|string $mutexName);
function cron($expression);
function daily();
function dailyAt($time);
function days($days);
function daysOfMonth(...$days);
function description($description);
function emailOutputOnFailure($addresses);
function emailOutputTo($addresses, $onlyIfOutputExists = true);
function emailWrittenOutputTo($addresses);
function environments($environments);
function evenInMaintenanceMode();
function evenWhenPaused();
function everyFifteenMinutes();
function everyFifteenSeconds();
function everyFiveMinutes();
function everyFiveSeconds();
function everyFourHours($offset = 0);
function everyFourMinutes();
function everyMinute();
function everyOddHour($offset = 0);
function everySecond();
function everySixHours($offset = 0);
function everyTenMinutes();
function everyTenSeconds();
function everyThirtyMinutes();
function everyThirtySeconds();
function everyThreeHours($offset = 0);
function everyThreeMinutes();
function everyTwentySeconds();
function everyTwoHours($offset = 0);
function everyTwoMinutes();
function everyTwoSeconds();
function filtersPass($app);
function finish(Illuminate\Contracts\Container\Container $container, $exitCode);
function fridays();
function getDefaultOutput();
function getExpression();
function getSummaryForDisplay();
function hourly();
function hourlyAt($offset);
function isDue($app);
function isRepeatable();
function lastDayOfMonth($time = '0:0');
function mondays();
function monthly();
function monthlyOn($dayOfMonth = 1, $time = '0:0');
function mutexName();
function name($description);
function nextRunDate($currentTime = 'now', $nth = 0, $allowCurrentDate = false);
function onFailure(Closure $callback);
function onFailureWithOutput(Closure $callback, $onlyIfOutputExists = false);
function onOneServer();
function onSuccess(Closure $callback);
function onSuccessWithOutput(Closure $callback, $onlyIfOutputExists = false);
function pingBefore($url);
function pingBeforeIf($value, $url);
function pingOnFailure($url);
function pingOnFailureIf($value, $url);
function pingOnSuccess($url);
function pingOnSuccessIf($value, $url);
function preventOverlapsUsing(Illuminate\Console\Scheduling\EventMutex $mutex);
function quarterly();
function quarterlyOn($dayOfQuarter = 1, $time = '0:0');
function run(Illuminate\Contracts\Container\Container $container);
function runInBackground();
function runsInEnvironment($environment);
function runsInMaintenanceMode();
function runsWhenPaused();
function saturdays();
function sendOutputTo($location, $append = false);
function shouldRepeatNow();
function shouldSkipDueToOverlapping();
function skip($callback);
function storeOutput();
function sundays();
function tap($callback = null);
function then(Closure $callback);
function thenPing($url);
function thenPingIf($value, $url);
function thenWithOutput(Closure $callback, $onlyIfOutputExists = false);
function thursdays();
function timezone($timezone);
function tuesdays();
function twiceDaily($first = 1, $second = 13);
function twiceDailyAt($first = 1, $second = 13, $offset = 0);
function twiceMonthly($first = 1, $second = 16, $time = '0:0');
function unlessBetween($startTime, $endTime);
function user($user);
function wednesdays();
function weekdays();
function weekends();
function weekly();
function weeklyOn($dayOfWeek, $time = '0:0');
function when($callback);
function withAttributes($attributes);
function withoutOverlapping($expiresAt = 1440, $releaseOnTerminationSignals = true);
function yearly();
function yearlyOn($month = 1, $dayOfMonth = 1, $time = '0:0');
static function __callStatic($method, $parameters);
static function flushMacros();
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
static function normalizeCommand($command);
```

## class CommandBuilder
`Illuminate\Console\Scheduling\CommandBuilder`

```php
function buildCommand(Illuminate\Console\Scheduling\Event $event);
```

## class CronExpressionTimezoneConverter
`Illuminate\Console\Scheduling\CronExpressionTimezoneConverter`

```php
static function forEvent(Illuminate\Console\Scheduling\Event $event, DateTimeZone $timezone);
```

## class Event
`Illuminate\Console\Scheduling\Event`

```php
function __call($method, $parameters);
function __construct(Illuminate\Console\Scheduling\EventMutex $mutex, $command, $timezone = null);
function after(Closure $callback);
function appendOutputTo($location);
function at($time);
function before(Closure $callback);
function between($startTime, $endTime);
function buildCommand();
function callAfterCallbacks(Illuminate\Contracts\Container\Container $container);
function callBeforeCallbacks(Illuminate\Contracts\Container\Container $container);
function createMutexNameUsing(Closure|string $mutexName);
function cron($expression);
function daily();
function dailyAt($time);
function days($days);
function daysOfMonth(...$days);
function description($description);
function emailOutputOnFailure($addresses);
function emailOutputTo($addresses, $onlyIfOutputExists = true);
function emailWrittenOutputTo($addresses);
function environments($environments);
function evenInMaintenanceMode();
function evenWhenPaused();
function everyFifteenMinutes();
function everyFifteenSeconds();
function everyFiveMinutes();
function everyFiveSeconds();
function everyFourHours($offset = 0);
function everyFourMinutes();
function everyMinute();
function everyOddHour($offset = 0);
function everySecond();
function everySixHours($offset = 0);
function everyTenMinutes();
function everyTenSeconds();
function everyThirtyMinutes();
function everyThirtySeconds();
function everyThreeHours($offset = 0);
function everyThreeMinutes();
function everyTwentySeconds();
function everyTwoHours($offset = 0);
function everyTwoMinutes();
function everyTwoSeconds();
function filtersPass($app);
function finish(Illuminate\Contracts\Container\Container $container, $exitCode);
function fridays();
function getDefaultOutput();
function getExpression();
function getSummaryForDisplay();
function hourly();
function hourlyAt($offset);
function isDue($app);
function isRepeatable();
function lastDayOfMonth($time = '0:0');
function mondays();
function monthly();
function monthlyOn($dayOfMonth = 1, $time = '0:0');
function mutexName();
function name($description);
function nextRunDate($currentTime = 'now', $nth = 0, $allowCurrentDate = false);
function onFailure(Closure $callback);
function onFailureWithOutput(Closure $callback, $onlyIfOutputExists = false);
function onOneServer();
function onSuccess(Closure $callback);
function onSuccessWithOutput(Closure $callback, $onlyIfOutputExists = false);
function pingBefore($url);
function pingBeforeIf($value, $url);
function pingOnFailure($url);
function pingOnFailureIf($value, $url);
function pingOnSuccess($url);
function pingOnSuccessIf($value, $url);
function preventOverlapsUsing(Illuminate\Console\Scheduling\EventMutex $mutex);
function quarterly();
function quarterlyOn($dayOfQuarter = 1, $time = '0:0');
function run(Illuminate\Contracts\Container\Container $container);
function runInBackground();
function runsInEnvironment($environment);
function runsInMaintenanceMode();
function runsWhenPaused();
function saturdays();
function sendOutputTo($location, $append = false);
function shouldRepeatNow();
function shouldSkipDueToOverlapping();
function skip($callback);
function storeOutput();
function sundays();
function tap($callback = null);
function then(Closure $callback);
function thenPing($url);
function thenPingIf($value, $url);
function thenWithOutput(Closure $callback, $onlyIfOutputExists = false);
function thursdays();
function timezone($timezone);
function tuesdays();
function twiceDaily($first = 1, $second = 13);
function twiceDailyAt($first = 1, $second = 13, $offset = 0);
function twiceMonthly($first = 1, $second = 16, $time = '0:0');
function unlessBetween($startTime, $endTime);
function user($user);
function wednesdays();
function weekdays();
function weekends();
function weekly();
function weeklyOn($dayOfWeek, $time = '0:0');
function when($callback);
function withAttributes($attributes);
function withoutOverlapping($expiresAt = 1440, $releaseOnTerminationSignals = true);
function yearly();
function yearlyOn($month = 1, $dayOfMonth = 1, $time = '0:0');
static function __callStatic($method, $parameters);
static function flushMacros();
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
static function normalizeCommand($command);
```

## interface EventMutex
`Illuminate\Console\Scheduling\EventMutex`

```php
abstract function create(Illuminate\Console\Scheduling\Event $event);
abstract function exists(Illuminate\Console\Scheduling\Event $event);
abstract function forget(Illuminate\Console\Scheduling\Event $event);
```

## trait ManagesAttributes
`Illuminate\Console\Scheduling\ManagesAttributes`

```php
function description($description);
function environments($environments);
function evenInMaintenanceMode();
function evenWhenPaused();
function name($description);
function onOneServer();
function runInBackground();
function skip($callback);
function user($user);
function when($callback);
function withAttributes($attributes);
function withoutOverlapping($expiresAt = 1440, $releaseOnTerminationSignals = true);
```

## trait ManagesFrequencies
`Illuminate\Console\Scheduling\ManagesFrequencies`

```php
function at($time);
function between($startTime, $endTime);
function cron($expression);
function daily();
function dailyAt($time);
function days($days);
function daysOfMonth(...$days);
function everyFifteenMinutes();
function everyFifteenSeconds();
function everyFiveMinutes();
function everyFiveSeconds();
function everyFourHours($offset = 0);
function everyFourMinutes();
function everyMinute();
function everyOddHour($offset = 0);
function everySecond();
function everySixHours($offset = 0);
function everyTenMinutes();
function everyTenSeconds();
function everyThirtyMinutes();
function everyThirtySeconds();
function everyThreeHours($offset = 0);
function everyThreeMinutes();
function everyTwentySeconds();
function everyTwoHours($offset = 0);
function everyTwoMinutes();
function everyTwoSeconds();
function fridays();
function hourly();
function hourlyAt($offset);
function lastDayOfMonth($time = '0:0');
function mondays();
function monthly();
function monthlyOn($dayOfMonth = 1, $time = '0:0');
function quarterly();
function quarterlyOn($dayOfQuarter = 1, $time = '0:0');
function saturdays();
function sundays();
function thursdays();
function timezone($timezone);
function tuesdays();
function twiceDaily($first = 1, $second = 13);
function twiceDailyAt($first = 1, $second = 13, $offset = 0);
function twiceMonthly($first = 1, $second = 16, $time = '0:0');
function unlessBetween($startTime, $endTime);
function wednesdays();
function weekdays();
function weekends();
function weekly();
function weeklyOn($dayOfWeek, $time = '0:0');
function yearly();
function yearlyOn($month = 1, $dayOfMonth = 1, $time = '0:0');
```

## class PendingEventAttributes
`Illuminate\Console\Scheduling\PendingEventAttributes`

```php
function __call(string $method, array $parameters): mixed;
function __construct(Illuminate\Console\Scheduling\Schedule $schedule);
function at($time);
function between($startTime, $endTime);
function cron($expression);
function daily();
function dailyAt($time);
function days($days);
function daysOfMonth(...$days);
function description($description);
function environments($environments);
function evenInMaintenanceMode();
function evenWhenPaused();
function everyFifteenMinutes();
function everyFifteenSeconds();
function everyFiveMinutes();
function everyFiveSeconds();
function everyFourHours($offset = 0);
function everyFourMinutes();
function everyMinute();
function everyOddHour($offset = 0);
function everySecond();
function everySixHours($offset = 0);
function everyTenMinutes();
function everyTenSeconds();
function everyThirtyMinutes();
function everyThirtySeconds();
function everyThreeHours($offset = 0);
function everyThreeMinutes();
function everyTwentySeconds();
function everyTwoHours($offset = 0);
function everyTwoMinutes();
function everyTwoSeconds();
function fridays();
function hourly();
function hourlyAt($offset);
function lastDayOfMonth($time = '0:0');
function mergeAttributes(Illuminate\Console\Scheduling\Event $event): void;
function mondays();
function monthly();
function monthlyOn($dayOfMonth = 1, $time = '0:0');
function name($description);
function onOneServer();
function quarterly();
function quarterlyOn($dayOfQuarter = 1, $time = '0:0');
function runInBackground();
function saturdays();
function skip($callback);
function sundays();
function thursdays();
function timezone($timezone);
function tuesdays();
function twiceDaily($first = 1, $second = 13);
function twiceDailyAt($first = 1, $second = 13, $offset = 0);
function twiceMonthly($first = 1, $second = 16, $time = '0:0');
function unlessBetween($startTime, $endTime);
function user($user);
function wednesdays();
function weekdays();
function weekends();
function weekly();
function weeklyOn($dayOfWeek, $time = '0:0');
function when($callback);
function withAttributes($attributes);
function withoutOverlapping($expiresAt = 1440, $releaseOnTerminationSignals = true);
function yearly();
function yearlyOn($month = 1, $dayOfMonth = 1, $time = '0:0');
```

## class Schedule
`Illuminate\Console\Scheduling\Schedule`

```php
function __call($method, $parameters);
function __construct($timezone = null);
function call($callback, array $parameters = []);
function command($command, array $parameters = []);
function compileArrayInput($key, $value);
function dueEvents($app);
function events();
function eventsForEnvironments(array $environments): array;
function exec($command, array $parameters = []);
function group(Closure $events);
function job($job, $queue = null, $connection = null);
function macroCall($method, $parameters);
function serverShouldRun(Illuminate\Console\Scheduling\Event $event, DateTimeInterface $time);
function useCache($store);
static function __callStatic($method, $parameters);
static function flushMacros();
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
static function withoutInterruptionPolling();
```

## class ScheduleClearCacheCommand
`Illuminate\Console\Scheduling\ScheduleClearCacheCommand` extends Illuminate\Console\Command implements Symfony\Component\Console\Command\SignalableCommandInterface

```php
function __call($method, $parameters);
function __construct();
function addArgument(string $name, ?int $mode = null, string $description = '', mixed $default = null, Closure|array $suggestedValues = []): static;
function addOption(string $name, array|string|null $shortcut = null, ?int $mode = null, string $description = '', mixed $default = null, Closure|array $suggestedValues = []): static;
function addUsage(string $usage): static;
function alert($string, $verbosity = null);
function anticipate($question, $choices, $default = null);
function argument($key = null);
function arguments();
function ask($question, $default = null);
function askWithCompletion($question, $choices, $default = null);
function call($command, array $arguments = []);
function callSilent($command, array $arguments = []);
function callSilently($command, array $arguments = []);
function choice($question, array $choices, $default = null, $attempts = null, $multiple = false);
function comment($string, $verbosity = null);
function complete(Symfony\Component\Console\Completion\CompletionInput $input, Symfony\Component\Console\Completion\CompletionSuggestions $suggestions): void;
function confirm($question, $default = false);
function error($string, $verbosity = null);
function fail(Throwable|string|null $exception = null);
function getAliases(): array;
function getApplication(): ?Symfony\Component\Console\Application;
function getCode(): ?callable;
function getDefinition(): Symfony\Component\Console\Input\InputDefinition;
function getDescription(): string;
function getHelp(): string;
function getHelper(string $name): Symfony\Component\Console\Helper\HelperInterface;
function getHelperSet(): ?Symfony\Component\Console\Helper\HelperSet;
function getLaravel();
function getName(): ?string;
function getNativeDefinition(): Symfony\Component\Console\Input\InputDefinition;
function getOutput();
function getProcessedHelp(): string;
function getSubscribedSignals(): array;
function getSynopsis(bool $short = false): string;
function getUsages(): array;
function handle(Illuminate\Console\Scheduling\Schedule $schedule);
function handleSignal(int $signal, int|false $previousExitCode = 0): int|false;
function hasArgument($name);
function hasOption($name);
function ignoreValidationErrors(): void;
function info($string, $verbosity = null);
function isEnabled(): bool;
function isHidden(): bool;
function line($string, $style = null, $verbosity = null);
function mergeApplicationDefinition(bool $mergeArgs = true): void;
function newLine($count = 1);
function option($key = null);
function options();
function outputComponents();
function question($string, $verbosity = null);
function run(Symfony\Component\Console\Input\InputInterface $input, Symfony\Component\Console\Output\OutputInterface $output): int;
function secret($question, $fallback = true);
function setAliases(iterable $aliases): static;
function setApplication(?Symfony\Component\Console\Application $application): void;
function setCode(callable $code): static;
function setDefinition(Symfony\Component\Console\Input\InputDefinition|array $definition): static;
function setDescription(string $description): static;
function setHelp(string $help): static;
function setHelperSet(Symfony\Component\Console\Helper\HelperSet $helperSet): void;
function setHidden(bool $hidden = true): static;
function setInput(Symfony\Component\Console\Input\InputInterface $input);
function setLaravel($laravel);
function setName(string $name): static;
function setOutput(Illuminate\Console\OutputStyle $output);
function setProcessTitle(string $title): static;
function table($headers, $rows, $tableStyle = 'default', array $columnStyles = []);
function trap($signals, $callback);
function untrap();
function warn($string, $verbosity = null);
function withProgressBar($totalSteps, Closure $callback);
static function __callStatic($method, $parameters);
static function flushMacros();
static function getDefaultDescription(): ?string;
static function getDefaultName(): ?string;
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
```

## class ScheduleFinishCommand
`Illuminate\Console\Scheduling\ScheduleFinishCommand` extends Illuminate\Console\Command implements Symfony\Component\Console\Command\SignalableCommandInterface

```php
function __call($method, $parameters);
function __construct();
function addArgument(string $name, ?int $mode = null, string $description = '', mixed $default = null, Closure|array $suggestedValues = []): static;
function addOption(string $name, array|string|null $shortcut = null, ?int $mode = null, string $description = '', mixed $default = null, Closure|array $suggestedValues = []): static;
function addUsage(string $usage): static;
function alert($string, $verbosity = null);
function anticipate($question, $choices, $default = null);
function argument($key = null);
function arguments();
function ask($question, $default = null);
function askWithCompletion($question, $choices, $default = null);
function call($command, array $arguments = []);
function callSilent($command, array $arguments = []);
function callSilently($command, array $arguments = []);
function choice($question, array $choices, $default = null, $attempts = null, $multiple = false);
function comment($string, $verbosity = null);
function complete(Symfony\Component\Console\Completion\CompletionInput $input, Symfony\Component\Console\Completion\CompletionSuggestions $suggestions): void;
function confirm($question, $default = false);
function error($string, $verbosity = null);
function fail(Throwable|string|null $exception = null);
function getAliases(): array;
function getApplication(): ?Symfony\Component\Console\Application;
function getCode(): ?callable;
function getDefinition(): Symfony\Component\Console\Input\InputDefinition;
function getDescription(): string;
function getHelp(): string;
function getHelper(string $name): Symfony\Component\Console\Helper\HelperInterface;
function getHelperSet(): ?Symfony\Component\Console\Helper\HelperSet;
function getLaravel();
function getName(): ?string;
function getNativeDefinition(): Symfony\Component\Console\Input\InputDefinition;
function getOutput();
function getProcessedHelp(): string;
function getSubscribedSignals(): array;
function getSynopsis(bool $short = false): string;
function getUsages(): array;
function handle(Illuminate\Console\Scheduling\Schedule $schedule);
function handleSignal(int $signal, int|false $previousExitCode = 0): int|false;
function hasArgument($name);
function hasOption($name);
function ignoreValidationErrors(): void;
function info($string, $verbosity = null);
function isEnabled(): bool;
function isHidden(): bool;
function line($string, $style = null, $verbosity = null);
function mergeApplicationDefinition(bool $mergeArgs = true): void;
function newLine($count = 1);
function option($key = null);
function options();
function outputComponents();
function question($string, $verbosity = null);
function run(Symfony\Component\Console\Input\InputInterface $input, Symfony\Component\Console\Output\OutputInterface $output): int;
function secret($question, $fallback = true);
function setAliases(iterable $aliases): static;
function setApplication(?Symfony\Component\Console\Application $application): void;
function setCode(callable $code): static;
function setDefinition(Symfony\Component\Console\Input\InputDefinition|array $definition): static;
function setDescription(string $description): static;
function setHelp(string $help): static;
function setHelperSet(Symfony\Component\Console\Helper\HelperSet $helperSet): void;
function setHidden(bool $hidden = true): static;
function setInput(Symfony\Component\Console\Input\InputInterface $input);
function setLaravel($laravel);
function setName(string $name): static;
function setOutput(Illuminate\Console\OutputStyle $output);
function setProcessTitle(string $title): static;
function table($headers, $rows, $tableStyle = 'default', array $columnStyles = []);
function trap($signals, $callback);
function untrap();
function warn($string, $verbosity = null);
function withProgressBar($totalSteps, Closure $callback);
static function __callStatic($method, $parameters);
static function flushMacros();
static function getDefaultDescription(): ?string;
static function getDefaultName(): ?string;
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
```

## class ScheduleInterruptCommand
`Illuminate\Console\Scheduling\ScheduleInterruptCommand` extends Illuminate\Console\Command implements Symfony\Component\Console\Command\SignalableCommandInterface

```php
function __call($method, $parameters);
function __construct(Illuminate\Contracts\Cache\Repository $cache);
function addArgument(string $name, ?int $mode = null, string $description = '', mixed $default = null, Closure|array $suggestedValues = []): static;
function addOption(string $name, array|string|null $shortcut = null, ?int $mode = null, string $description = '', mixed $default = null, Closure|array $suggestedValues = []): static;
function addUsage(string $usage): static;
function alert($string, $verbosity = null);
function anticipate($question, $choices, $default = null);
function argument($key = null);
function arguments();
function ask($question, $default = null);
function askWithCompletion($question, $choices, $default = null);
function call($command, array $arguments = []);
function callSilent($command, array $arguments = []);
function callSilently($command, array $arguments = []);
function choice($question, array $choices, $default = null, $attempts = null, $multiple = false);
function comment($string, $verbosity = null);
function complete(Symfony\Component\Console\Completion\CompletionInput $input, Symfony\Component\Console\Completion\CompletionSuggestions $suggestions): void;
function confirm($question, $default = false);
function error($string, $verbosity = null);
function fail(Throwable|string|null $exception = null);
function getAliases(): array;
function getApplication(): ?Symfony\Component\Console\Application;
function getCode(): ?callable;
function getDefinition(): Symfony\Component\Console\Input\InputDefinition;
function getDescription(): string;
function getHelp(): string;
function getHelper(string $name): Symfony\Component\Console\Helper\HelperInterface;
function getHelperSet(): ?Symfony\Component\Console\Helper\HelperSet;
function getLaravel();
function getName(): ?string;
function getNativeDefinition(): Symfony\Component\Console\Input\InputDefinition;
function getOutput();
function getProcessedHelp(): string;
function getSubscribedSignals(): array;
function getSynopsis(bool $short = false): string;
function getUsages(): array;
function handle();
function handleSignal(int $signal, int|false $previousExitCode = 0): int|false;
function hasArgument($name);
function hasOption($name);
function ignoreValidationErrors(): void;
function info($string, $verbosity = null);
function isEnabled(): bool;
function isHidden(): bool;
function line($string, $style = null, $verbosity = null);
function mergeApplicationDefinition(bool $mergeArgs = true): void;
function newLine($count = 1);
function option($key = null);
function options();
function outputComponents();
function question($string, $verbosity = null);
function run(Symfony\Component\Console\Input\InputInterface $input, Symfony\Component\Console\Output\OutputInterface $output): int;
function secret($question, $fallback = true);
function setAliases(iterable $aliases): static;
function setApplication(?Symfony\Component\Console\Application $application): void;
function setCode(callable $code): static;
function setDefinition(Symfony\Component\Console\Input\InputDefinition|array $definition): static;
function setDescription(string $description): static;
function setHelp(string $help): static;
function setHelperSet(Symfony\Component\Console\Helper\HelperSet $helperSet): void;
function setHidden(bool $hidden = true): static;
function setInput(Symfony\Component\Console\Input\InputInterface $input);
function setLaravel($laravel);
function setName(string $name): static;
function setOutput(Illuminate\Console\OutputStyle $output);
function setProcessTitle(string $title): static;
function table($headers, $rows, $tableStyle = 'default', array $columnStyles = []);
function trap($signals, $callback);
function untrap();
function warn($string, $verbosity = null);
function withProgressBar($totalSteps, Closure $callback);
static function __callStatic($method, $parameters);
static function flushMacros();
static function getDefaultDescription(): ?string;
static function getDefaultName(): ?string;
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
```

## class ScheduleListCommand
`Illuminate\Console\Scheduling\ScheduleListCommand` extends Illuminate\Console\Command implements Symfony\Component\Console\Command\SignalableCommandInterface

```php
function __call($method, $parameters);
function __construct();
function addArgument(string $name, ?int $mode = null, string $description = '', mixed $default = null, Closure|array $suggestedValues = []): static;
function addOption(string $name, array|string|null $shortcut = null, ?int $mode = null, string $description = '', mixed $default = null, Closure|array $suggestedValues = []): static;
function addUsage(string $usage): static;
function alert($string, $verbosity = null);
function anticipate($question, $choices, $default = null);
function argument($key = null);
function arguments();
function ask($question, $default = null);
function askWithCompletion($question, $choices, $default = null);
function call($command, array $arguments = []);
function callSilent($command, array $arguments = []);
function callSilently($command, array $arguments = []);
function choice($question, array $choices, $default = null, $attempts = null, $multiple = false);
function comment($string, $verbosity = null);
function complete(Symfony\Component\Console\Completion\CompletionInput $input, Symfony\Component\Console\Completion\CompletionSuggestions $suggestions): void;
function confirm($question, $default = false);
function error($string, $verbosity = null);
function fail(Throwable|string|null $exception = null);
function getAliases(): array;
function getApplication(): ?Symfony\Component\Console\Application;
function getCode(): ?callable;
function getDefinition(): Symfony\Component\Console\Input\InputDefinition;
function getDescription(): string;
function getHelp(): string;
function getHelper(string $name): Symfony\Component\Console\Helper\HelperInterface;
function getHelperSet(): ?Symfony\Component\Console\Helper\HelperSet;
function getLaravel();
function getName(): ?string;
function getNativeDefinition(): Symfony\Component\Console\Input\InputDefinition;
function getOutput();
function getProcessedHelp(): string;
function getSubscribedSignals(): array;
function getSynopsis(bool $short = false): string;
function getUsages(): array;
function handle(Illuminate\Console\Scheduling\Schedule $schedule);
function handleSignal(int $signal, int|false $previousExitCode = 0): int|false;
function hasArgument($name);
function hasOption($name);
function ignoreValidationErrors(): void;
function info($string, $verbosity = null);
function isEnabled(): bool;
function isHidden(): bool;
function line($string, $style = null, $verbosity = null);
function mergeApplicationDefinition(bool $mergeArgs = true): void;
function newLine($count = 1);
function option($key = null);
function options();
function outputComponents();
function question($string, $verbosity = null);
function run(Symfony\Component\Console\Input\InputInterface $input, Symfony\Component\Console\Output\OutputInterface $output): int;
function secret($question, $fallback = true);
function setAliases(iterable $aliases): static;
function setApplication(?Symfony\Component\Console\Application $application): void;
function setCode(callable $code): static;
function setDefinition(Symfony\Component\Console\Input\InputDefinition|array $definition): static;
function setDescription(string $description): static;
function setHelp(string $help): static;
function setHelperSet(Symfony\Component\Console\Helper\HelperSet $helperSet): void;
function setHidden(bool $hidden = true): static;
function setInput(Symfony\Component\Console\Input\InputInterface $input);
function setLaravel($laravel);
function setName(string $name): static;
function setOutput(Illuminate\Console\OutputStyle $output);
function setProcessTitle(string $title): static;
function table($headers, $rows, $tableStyle = 'default', array $columnStyles = []);
function trap($signals, $callback);
function untrap();
function warn($string, $verbosity = null);
function withProgressBar($totalSteps, Closure $callback);
static function __callStatic($method, $parameters);
static function flushMacros();
static function getDefaultDescription(): ?string;
static function getDefaultName(): ?string;
static function getTerminalWidth();
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
static function resolveTerminalWidthUsing($resolver);
```

## class SchedulePauseCommand
`Illuminate\Console\Scheduling\SchedulePauseCommand` extends Illuminate\Console\Command implements Symfony\Component\Console\Command\SignalableCommandInterface

```php
function __call($method, $parameters);
function __construct();
function addArgument(string $name, ?int $mode = null, string $description = '', mixed $default = null, Closure|array $suggestedValues = []): static;
function addOption(string $name, array|string|null $shortcut = null, ?int $mode = null, string $description = '', mixed $default = null, Closure|array $suggestedValues = []): static;
function addUsage(string $usage): static;
function alert($string, $verbosity = null);
function anticipate($question, $choices, $default = null);
function argument($key = null);
function arguments();
function ask($question, $default = null);
function askWithCompletion($question, $choices, $default = null);
function call($command, array $arguments = []);
function callSilent($command, array $arguments = []);
function callSilently($command, array $arguments = []);
function choice($question, array $choices, $default = null, $attempts = null, $multiple = false);
function comment($string, $verbosity = null);
function complete(Symfony\Component\Console\Completion\CompletionInput $input, Symfony\Component\Console\Completion\CompletionSuggestions $suggestions): void;
function confirm($question, $default = false);
function error($string, $verbosity = null);
function fail(Throwable|string|null $exception = null);
function getAliases(): array;
function getApplication(): ?Symfony\Component\Console\Application;
function getCode(): ?callable;
function getDefinition(): Symfony\Component\Console\Input\InputDefinition;
function getDescription(): string;
function getHelp(): string;
function getHelper(string $name): Symfony\Component\Console\Helper\HelperInterface;
function getHelperSet(): ?Symfony\Component\Console\Helper\HelperSet;
function getLaravel();
function getName(): ?string;
function getNativeDefinition(): Symfony\Component\Console\Input\InputDefinition;
function getOutput();
function getProcessedHelp(): string;
function getSubscribedSignals(): array;
function getSynopsis(bool $short = false): string;
function getUsages(): array;
function handle(Illuminate\Contracts\Cache\Repository $cache, Illuminate\Contracts\Events\Dispatcher $dispatcher);
function handleSignal(int $signal, int|false $previousExitCode = 0): int|false;
function hasArgument($name);
function hasOption($name);
function ignoreValidationErrors(): void;
function info($string, $verbosity = null);
function isEnabled(): bool;
function isHidden(): bool;
function line($string, $style = null, $verbosity = null);
function mergeApplicationDefinition(bool $mergeArgs = true): void;
function newLine($count = 1);
function option($key = null);
function options();
function outputComponents();
function question($string, $verbosity = null);
function run(Symfony\Component\Console\Input\InputInterface $input, Symfony\Component\Console\Output\OutputInterface $output): int;
function secret($question, $fallback = true);
function setAliases(iterable $aliases): static;
function setApplication(?Symfony\Component\Console\Application $application): void;
function setCode(callable $code): static;
function setDefinition(Symfony\Component\Console\Input\InputDefinition|array $definition): static;
function setDescription(string $description): static;
function setHelp(string $help): static;
function setHelperSet(Symfony\Component\Console\Helper\HelperSet $helperSet): void;
function setHidden(bool $hidden = true): static;
function setInput(Symfony\Component\Console\Input\InputInterface $input);
function setLaravel($laravel);
function setName(string $name): static;
function setOutput(Illuminate\Console\OutputStyle $output);
function setProcessTitle(string $title): static;
function table($headers, $rows, $tableStyle = 'default', array $columnStyles = []);
function trap($signals, $callback);
function untrap();
function warn($string, $verbosity = null);
function withProgressBar($totalSteps, Closure $callback);
static function __callStatic($method, $parameters);
static function flushMacros();
static function getDefaultDescription(): ?string;
static function getDefaultName(): ?string;
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
```

## class ScheduleResumeCommand
`Illuminate\Console\Scheduling\ScheduleResumeCommand` extends Illuminate\Console\Command implements Symfony\Component\Console\Command\SignalableCommandInterface

```php
function __call($method, $parameters);
function __construct();
function addArgument(string $name, ?int $mode = null, string $description = '', mixed $default = null, Closure|array $suggestedValues = []): static;
function addOption(string $name, array|string|null $shortcut = null, ?int $mode = null, string $description = '', mixed $default = null, Closure|array $suggestedValues = []): static;
function addUsage(string $usage): static;
function alert($string, $verbosity = null);
function anticipate($question, $choices, $default = null);
function argument($key = null);
function arguments();
function ask($question, $default = null);
function askWithCompletion($question, $choices, $default = null);
function call($command, array $arguments = []);
function callSilent($command, array $arguments = []);
function callSilently($command, array $arguments = []);
function choice($question, array $choices, $default = null, $attempts = null, $multiple = false);
function comment($string, $verbosity = null);
function complete(Symfony\Component\Console\Completion\CompletionInput $input, Symfony\Component\Console\Completion\CompletionSuggestions $suggestions): void;
function confirm($question, $default = false);
function error($string, $verbosity = null);
function fail(Throwable|string|null $exception = null);
function getAliases(): array;
function getApplication(): ?Symfony\Component\Console\Application;
function getCode(): ?callable;
function getDefinition(): Symfony\Component\Console\Input\InputDefinition;
function getDescription(): string;
function getHelp(): string;
function getHelper(string $name): Symfony\Component\Console\Helper\HelperInterface;
function getHelperSet(): ?Symfony\Component\Console\Helper\HelperSet;
function getLaravel();
function getName(): ?string;
function getNativeDefinition(): Symfony\Component\Console\Input\InputDefinition;
function getOutput();
function getProcessedHelp(): string;
function getSubscribedSignals(): array;
function getSynopsis(bool $short = false): string;
function getUsages(): array;
function handle(Illuminate\Contracts\Cache\Repository $cache, Illuminate\Contracts\Events\Dispatcher $dispatcher);
function handleSignal(int $signal, int|false $previousExitCode = 0): int|false;
function hasArgument($name);
function hasOption($name);
function ignoreValidationErrors(): void;
function info($string, $verbosity = null);
function isEnabled(): bool;
function isHidden(): bool;
function line($string, $style = null, $verbosity = null);
function mergeApplicationDefinition(bool $mergeArgs = true): void;
function newLine($count = 1);
function option($key = null);
function options();
function outputComponents();
function question($string, $verbosity = null);
function run(Symfony\Component\Console\Input\InputInterface $input, Symfony\Component\Console\Output\OutputInterface $output): int;
function secret($question, $fallback = true);
function setAliases(iterable $aliases): static;
function setApplication(?Symfony\Component\Console\Application $application): void;
function setCode(callable $code): static;
function setDefinition(Symfony\Component\Console\Input\InputDefinition|array $definition): static;
function setDescription(string $description): static;
function setHelp(string $help): static;
function setHelperSet(Symfony\Component\Console\Helper\HelperSet $helperSet): void;
function setHidden(bool $hidden = true): static;
function setInput(Symfony\Component\Console\Input\InputInterface $input);
function setLaravel($laravel);
function setName(string $name): static;
function setOutput(Illuminate\Console\OutputStyle $output);
function setProcessTitle(string $title): static;
function table($headers, $rows, $tableStyle = 'default', array $columnStyles = []);
function trap($signals, $callback);
function untrap();
function warn($string, $verbosity = null);
function withProgressBar($totalSteps, Closure $callback);
static function __callStatic($method, $parameters);
static function flushMacros();
static function getDefaultDescription(): ?string;
static function getDefaultName(): ?string;
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
```

## class ScheduleRunCommand
`Illuminate\Console\Scheduling\ScheduleRunCommand` extends Illuminate\Console\Command implements Symfony\Component\Console\Command\SignalableCommandInterface

```php
function __call($method, $parameters);
function __construct();
function addArgument(string $name, ?int $mode = null, string $description = '', mixed $default = null, Closure|array $suggestedValues = []): static;
function addOption(string $name, array|string|null $shortcut = null, ?int $mode = null, string $description = '', mixed $default = null, Closure|array $suggestedValues = []): static;
function addUsage(string $usage): static;
function alert($string, $verbosity = null);
function anticipate($question, $choices, $default = null);
function argument($key = null);
function arguments();
function ask($question, $default = null);
function askWithCompletion($question, $choices, $default = null);
function call($command, array $arguments = []);
function callSilent($command, array $arguments = []);
function callSilently($command, array $arguments = []);
function choice($question, array $choices, $default = null, $attempts = null, $multiple = false);
function comment($string, $verbosity = null);
function complete(Symfony\Component\Console\Completion\CompletionInput $input, Symfony\Component\Console\Completion\CompletionSuggestions $suggestions): void;
function confirm($question, $default = false);
function error($string, $verbosity = null);
function fail(Throwable|string|null $exception = null);
function getAliases(): array;
function getApplication(): ?Symfony\Component\Console\Application;
function getCode(): ?callable;
function getDefinition(): Symfony\Component\Console\Input\InputDefinition;
function getDescription(): string;
function getHelp(): string;
function getHelper(string $name): Symfony\Component\Console\Helper\HelperInterface;
function getHelperSet(): ?Symfony\Component\Console\Helper\HelperSet;
function getLaravel();
function getName(): ?string;
function getNativeDefinition(): Symfony\Component\Console\Input\InputDefinition;
function getOutput();
function getProcessedHelp(): string;
function getSubscribedSignals(): array;
function getSynopsis(bool $short = false): string;
function getUsages(): array;
function handle(Illuminate\Console\Scheduling\Schedule $schedule, Illuminate\Contracts\Events\Dispatcher $dispatcher, Illuminate\Contracts\Cache\Repository $cache, Illuminate\Contracts\Debug\ExceptionHandler $handler);
function handleSignal(int $signal, int|false $previousExitCode = 0): int|false;
function hasArgument($name);
function hasOption($name);
function ignoreValidationErrors(): void;
function info($string, $verbosity = null);
function isEnabled(): bool;
function isHidden(): bool;
function line($string, $style = null, $verbosity = null);
function mergeApplicationDefinition(bool $mergeArgs = true): void;
function newLine($count = 1);
function option($key = null);
function options();
function outputComponents();
function question($string, $verbosity = null);
function run(Symfony\Component\Console\Input\InputInterface $input, Symfony\Component\Console\Output\OutputInterface $output): int;
function secret($question, $fallback = true);
function setAliases(iterable $aliases): static;
function setApplication(?Symfony\Component\Console\Application $application): void;
function setCode(callable $code): static;
function setDefinition(Symfony\Component\Console\Input\InputDefinition|array $definition): static;
function setDescription(string $description): static;
function setHelp(string $help): static;
function setHelperSet(Symfony\Component\Console\Helper\HelperSet $helperSet): void;
function setHidden(bool $hidden = true): static;
function setInput(Symfony\Component\Console\Input\InputInterface $input);
function setLaravel($laravel);
function setName(string $name): static;
function setOutput(Illuminate\Console\OutputStyle $output);
function setProcessTitle(string $title): static;
function table($headers, $rows, $tableStyle = 'default', array $columnStyles = []);
function trap($signals, $callback);
function untrap();
function warn($string, $verbosity = null);
function withProgressBar($totalSteps, Closure $callback);
static function __callStatic($method, $parameters);
static function flushMacros();
static function getDefaultDescription(): ?string;
static function getDefaultName(): ?string;
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
```

## class ScheduleTestCommand
`Illuminate\Console\Scheduling\ScheduleTestCommand` extends Illuminate\Console\Command implements Symfony\Component\Console\Command\SignalableCommandInterface

```php
function __call($method, $parameters);
function __construct();
function addArgument(string $name, ?int $mode = null, string $description = '', mixed $default = null, Closure|array $suggestedValues = []): static;
function addOption(string $name, array|string|null $shortcut = null, ?int $mode = null, string $description = '', mixed $default = null, Closure|array $suggestedValues = []): static;
function addUsage(string $usage): static;
function alert($string, $verbosity = null);
function anticipate($question, $choices, $default = null);
function argument($key = null);
function arguments();
function ask($question, $default = null);
function askWithCompletion($question, $choices, $default = null);
function call($command, array $arguments = []);
function callSilent($command, array $arguments = []);
function callSilently($command, array $arguments = []);
function choice($question, array $choices, $default = null, $attempts = null, $multiple = false);
function comment($string, $verbosity = null);
function complete(Symfony\Component\Console\Completion\CompletionInput $input, Symfony\Component\Console\Completion\CompletionSuggestions $suggestions): void;
function confirm($question, $default = false);
function error($string, $verbosity = null);
function fail(Throwable|string|null $exception = null);
function getAliases(): array;
function getApplication(): ?Symfony\Component\Console\Application;
function getCode(): ?callable;
function getDefinition(): Symfony\Component\Console\Input\InputDefinition;
function getDescription(): string;
function getHelp(): string;
function getHelper(string $name): Symfony\Component\Console\Helper\HelperInterface;
function getHelperSet(): ?Symfony\Component\Console\Helper\HelperSet;
function getLaravel();
function getName(): ?string;
function getNativeDefinition(): Symfony\Component\Console\Input\InputDefinition;
function getOutput();
function getProcessedHelp(): string;
function getSubscribedSignals(): array;
function getSynopsis(bool $short = false): string;
function getUsages(): array;
function handle(Illuminate\Console\Scheduling\Schedule $schedule);
function handleSignal(int $signal, int|false $previousExitCode = 0): int|false;
function hasArgument($name);
function hasOption($name);
function ignoreValidationErrors(): void;
function info($string, $verbosity = null);
function isEnabled(): bool;
function isHidden(): bool;
function line($string, $style = null, $verbosity = null);
function mergeApplicationDefinition(bool $mergeArgs = true): void;
function newLine($count = 1);
function option($key = null);
function options();
function outputComponents();
function question($string, $verbosity = null);
function run(Symfony\Component\Console\Input\InputInterface $input, Symfony\Component\Console\Output\OutputInterface $output): int;
function secret($question, $fallback = true);
function setAliases(iterable $aliases): static;
function setApplication(?Symfony\Component\Console\Application $application): void;
function setCode(callable $code): static;
function setDefinition(Symfony\Component\Console\Input\InputDefinition|array $definition): static;
function setDescription(string $description): static;
function setHelp(string $help): static;
function setHelperSet(Symfony\Component\Console\Helper\HelperSet $helperSet): void;
function setHidden(bool $hidden = true): static;
function setInput(Symfony\Component\Console\Input\InputInterface $input);
function setLaravel($laravel);
function setName(string $name): static;
function setOutput(Illuminate\Console\OutputStyle $output);
function setProcessTitle(string $title): static;
function table($headers, $rows, $tableStyle = 'default', array $columnStyles = []);
function trap($signals, $callback);
function untrap();
function warn($string, $verbosity = null);
function withProgressBar($totalSteps, Closure $callback);
static function __callStatic($method, $parameters);
static function flushMacros();
static function getDefaultDescription(): ?string;
static function getDefaultName(): ?string;
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
```

## class ScheduleWorkCommand
`Illuminate\Console\Scheduling\ScheduleWorkCommand` extends Illuminate\Console\Command implements Symfony\Component\Console\Command\SignalableCommandInterface

```php
function __call($method, $parameters);
function __construct();
function addArgument(string $name, ?int $mode = null, string $description = '', mixed $default = null, Closure|array $suggestedValues = []): static;
function addOption(string $name, array|string|null $shortcut = null, ?int $mode = null, string $description = '', mixed $default = null, Closure|array $suggestedValues = []): static;
function addUsage(string $usage): static;
function alert($string, $verbosity = null);
function anticipate($question, $choices, $default = null);
function argument($key = null);
function arguments();
function ask($question, $default = null);
function askWithCompletion($question, $choices, $default = null);
function call($command, array $arguments = []);
function callSilent($command, array $arguments = []);
function callSilently($command, array $arguments = []);
function choice($question, array $choices, $default = null, $attempts = null, $multiple = false);
function comment($string, $verbosity = null);
function complete(Symfony\Component\Console\Completion\CompletionInput $input, Symfony\Component\Console\Completion\CompletionSuggestions $suggestions): void;
function confirm($question, $default = false);
function error($string, $verbosity = null);
function fail(Throwable|string|null $exception = null);
function getAliases(): array;
function getApplication(): ?Symfony\Component\Console\Application;
function getCode(): ?callable;
function getDefinition(): Symfony\Component\Console\Input\InputDefinition;
function getDescription(): string;
function getHelp(): string;
function getHelper(string $name): Symfony\Component\Console\Helper\HelperInterface;
function getHelperSet(): ?Symfony\Component\Console\Helper\HelperSet;
function getLaravel();
function getName(): ?string;
function getNativeDefinition(): Symfony\Component\Console\Input\InputDefinition;
function getOutput();
function getProcessedHelp(): string;
function getSubscribedSignals(): array;
function getSynopsis(bool $short = false): string;
function getUsages(): array;
function handle();
function handleSignal(int $signal, int|false $previousExitCode = 0): int|false;
function hasArgument($name);
function hasOption($name);
function ignoreValidationErrors(): void;
function info($string, $verbosity = null);
function isEnabled(): bool;
function isHidden(): bool;
function line($string, $style = null, $verbosity = null);
function mergeApplicationDefinition(bool $mergeArgs = true): void;
function newLine($count = 1);
function option($key = null);
function options();
function outputComponents();
function question($string, $verbosity = null);
function run(Symfony\Component\Console\Input\InputInterface $input, Symfony\Component\Console\Output\OutputInterface $output): int;
function secret($question, $fallback = true);
function setAliases(iterable $aliases): static;
function setApplication(?Symfony\Component\Console\Application $application): void;
function setCode(callable $code): static;
function setDefinition(Symfony\Component\Console\Input\InputDefinition|array $definition): static;
function setDescription(string $description): static;
function setHelp(string $help): static;
function setHelperSet(Symfony\Component\Console\Helper\HelperSet $helperSet): void;
function setHidden(bool $hidden = true): static;
function setInput(Symfony\Component\Console\Input\InputInterface $input);
function setLaravel($laravel);
function setName(string $name): static;
function setOutput(Illuminate\Console\OutputStyle $output);
function setProcessTitle(string $title): static;
function table($headers, $rows, $tableStyle = 'default', array $columnStyles = []);
function trap($signals, $callback);
function untrap();
function warn($string, $verbosity = null);
function withProgressBar($totalSteps, Closure $callback);
static function __callStatic($method, $parameters);
static function flushMacros();
static function getDefaultDescription(): ?string;
static function getDefaultName(): ?string;
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
```

## interface SchedulingMutex
`Illuminate\Console\Scheduling\SchedulingMutex`

```php
abstract function create(Illuminate\Console\Scheduling\Event $event, DateTimeInterface $time);
abstract function exists(Illuminate\Console\Scheduling\Event $event, DateTimeInterface $time);
```

