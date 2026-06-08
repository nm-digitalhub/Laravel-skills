# Illuminate\Console

Version: 13.14.0

## class Application
`Illuminate\Console\Application` extends Symfony\Component\Console\Application implements Symfony\Contracts\Service\ResetInterface, Illuminate\Contracts\Console\Application

```php
function __construct(Illuminate\Contracts\Container\Container $laravel, Illuminate\Contracts\Events\Dispatcher $events, $version);
function add(Symfony\Component\Console\Command\Command $command): ?Symfony\Component\Console\Command\Command;
function addCommand(Symfony\Component\Console\Command\Command|callable $command): ?Symfony\Component\Console\Command\Command;
function addCommands(array $commands): void;
function all(?string $namespace = null): array;
function areExceptionsCaught(): bool;
function call($command, array $parameters = [], $outputBuffer = null);
function complete(Symfony\Component\Console\Completion\CompletionInput $input, Symfony\Component\Console\Completion\CompletionSuggestions $suggestions): void;
function doRun(Symfony\Component\Console\Input\InputInterface $input, Symfony\Component\Console\Output\OutputInterface $output): int;
function extractNamespace(string $name, ?int $limit = null): string;
function find(string $name): Symfony\Component\Console\Command\Command;
function findNamespace(string $namespace): string;
function get(string $name): Symfony\Component\Console\Command\Command;
function getAlarmInterval(): ?int;
function getDefinition(): Symfony\Component\Console\Input\InputDefinition;
function getHelp(): string;
function getHelperSet(): Symfony\Component\Console\Helper\HelperSet;
function getLaravel();
function getLongVersion(): string;
function getName(): string;
function getNamespaces(): array;
function getSignalRegistry(): Symfony\Component\Console\SignalRegistry\SignalRegistry;
function getVersion(): string;
function has(string $name): bool;
function isAutoExitEnabled(): bool;
function isSingleCommand(): bool;
function output();
function register(string $name): Symfony\Component\Console\Command\Command;
function renderThrowable(Throwable $e, Symfony\Component\Console\Output\OutputInterface $output): void;
function reset(): void;
function resolve($command);
function resolveCommands($commands);
function run(?Symfony\Component\Console\Input\InputInterface $input = null, ?Symfony\Component\Console\Output\OutputInterface $output = null): int;
function setAlarmInterval(?int $seconds): void;
function setAutoExit(bool $boolean): void;
function setCatchErrors(bool $catchErrors = true): void;
function setCatchExceptions(bool $boolean): void;
function setCommandLoader(Symfony\Component\Console\CommandLoader\CommandLoaderInterface $commandLoader): void;
function setContainerCommandLoader();
function setDefaultCommand(string $commandName, bool $isSingleCommand = false): static;
function setDefinition(Symfony\Component\Console\Input\InputDefinition $definition): void;
function setDispatcher(Symfony\Contracts\EventDispatcher\EventDispatcherInterface $dispatcher): void;
function setHelperSet(Symfony\Component\Console\Helper\HelperSet $helperSet): void;
function setName(string $name): void;
function setSignalsToDispatchEvent(int ...$signalsToDispatchEvent): void;
function setVersion(string $version): void;
static function artisanBinary();
static function forgetBootstrappers();
static function formatCommandString($string);
static function getAbbreviations(array $names): array;
static function phpBinary();
static function starting(Closure $callback);
```

## class BufferedConsoleOutput
`Illuminate\Console\BufferedConsoleOutput` extends Symfony\Component\Console\Output\ConsoleOutput implements Symfony\Component\Console\Output\ConsoleOutputInterface, Symfony\Component\Console\Output\OutputInterface

```php
function __construct(int $verbosity = 32, ?bool $decorated = null, ?Symfony\Component\Console\Formatter\OutputFormatterInterface $formatter = null);
function fetch();
function getErrorOutput(): Symfony\Component\Console\Output\OutputInterface;
function getFormatter(): Symfony\Component\Console\Formatter\OutputFormatterInterface;
function getStream();
function getVerbosity(): int;
function isDebug(): bool;
function isDecorated(): bool;
function isQuiet(): bool;
function isSilent(): bool;
function isVerbose(): bool;
function isVeryVerbose(): bool;
function section(): Symfony\Component\Console\Output\ConsoleSectionOutput;
function setDecorated(bool $decorated): void;
function setErrorOutput(Symfony\Component\Console\Output\OutputInterface $error): void;
function setFormatter(Symfony\Component\Console\Formatter\OutputFormatterInterface $formatter): void;
function setVerbosity(int $level): void;
function write(Traversable|array|string $messages, bool $newline = false, int $options = 1): void;
function writeln(Traversable|array|string $messages, int $options = 1): void;
```

## class CacheCommandMutex
`Illuminate\Console\CacheCommandMutex` implements Illuminate\Console\CommandMutex

```php
function __construct(Illuminate\Contracts\Cache\Factory $cache);
function create($command);
function exists($command);
function forget($command);
function useStore($store);
```

## class Command
`Illuminate\Console\Command` extends Symfony\Component\Console\Command\Command implements Symfony\Component\Console\Command\SignalableCommandInterface

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

## interface CommandMutex
`Illuminate\Console\CommandMutex`

```php
abstract function create($command);
abstract function exists($command);
abstract function forget($command);
```

## trait ConfirmableTrait
`Illuminate\Console\ConfirmableTrait`

```php
function confirmToProceed($warning = 'Application In Pr...', $callback = null);
```

## class ContainerCommandLoader
`Illuminate\Console\ContainerCommandLoader` implements Symfony\Component\Console\CommandLoader\CommandLoaderInterface

```php
function __construct(Psr\Container\ContainerInterface $container, array $commandMap);
function get(string $name): Symfony\Component\Console\Command\Command;
function getNames(): array;
function has(string $name): bool;
```

## class GeneratorCommand
`Illuminate\Console\GeneratorCommand` extends Illuminate\Console\Command implements Symfony\Component\Console\Command\SignalableCommandInterface, Illuminate\Contracts\Console\PromptsForMissingInput

```php
function __call($method, $parameters);
function __construct(Illuminate\Filesystem\Filesystem $files);
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

## class ManuallyFailedException
`Illuminate\Console\ManuallyFailedException` extends RuntimeException implements Stringable, Throwable

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

## class MigrationGeneratorCommand
`Illuminate\Console\MigrationGeneratorCommand` extends Illuminate\Console\Command implements Symfony\Component\Console\Command\SignalableCommandInterface

```php
function __call($method, $parameters);
function __construct(Illuminate\Filesystem\Filesystem $files);
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

## class OutputStyle
`Illuminate\Console\OutputStyle` extends Symfony\Component\Console\Style\SymfonyStyle implements Symfony\Component\Console\Style\StyleInterface, Symfony\Component\Console\Output\OutputInterface, Illuminate\Console\Contracts\NewLineAware

```php
function __construct(Symfony\Component\Console\Input\InputInterface $input, Symfony\Component\Console\Output\OutputInterface $output);
function ask(string $question, ?string $default = null, ?callable $validator = null): mixed;
function askHidden(string $question, ?callable $validator = null): mixed;
function askQuestion(Symfony\Component\Console\Question\Question $question): mixed;
function block(array|string $messages, ?string $type = null, ?string $style = null, string $prefix = ' ', bool $padding = false, bool $escape = true): void;
function caution(array|string $message): void;
function choice(string $question, array $choices, mixed $default = null, bool $multiSelect = false): mixed;
function comment(array|string $message): void;
function confirm(string $question, bool $default = true): bool;
function createProgressBar(int $max = 0): Symfony\Component\Console\Helper\ProgressBar;
function createTable(): Symfony\Component\Console\Helper\Table;
function createTree(iterable $nodes, string $root = ''): Symfony\Component\Console\Helper\TreeHelper;
function definitionList(Symfony\Component\Console\Helper\TableSeparator|array|string ...$list): void;
function error(array|string $message): void;
function getErrorStyle(): self;
function getFormatter(): Symfony\Component\Console\Formatter\OutputFormatterInterface;
function getOutput();
function getVerbosity(): int;
function horizontalTable(array $headers, array $rows): void;
function info(array|string $message): void;
function isDebug(): bool;
function isDecorated(): bool;
function isQuiet(): bool;
function isSilent(): bool;
function isVerbose(): bool;
function isVeryVerbose(): bool;
function listing(array $elements): void;
function newLine(int $count = 1): void;
function newLineWritten();
function newLinesWritten();
function note(array|string $message): void;
function progressAdvance(int $step = 1): void;
function progressFinish(): void;
function progressIterate(iterable $iterable, ?int $max = null): iterable;
function progressStart(int $max = 0): void;
function section(string $message): void;
function setDecorated(bool $decorated): void;
function setFormatter(Symfony\Component\Console\Formatter\OutputFormatterInterface $formatter): void;
function setVerbosity(int $level): void;
function success(array|string $message): void;
function table(array $headers, array $rows): void;
function text(array|string $message): void;
function title(string $message): void;
function tree(iterable $nodes, string $root = ''): void;
function warning(array|string $message): void;
function write(Traversable|array|string $messages, bool $newline = false, int $options = 0): void;
function writeln(Traversable|array|string $messages, int $type = 1): void;
```

## class Parser
`Illuminate\Console\Parser`

```php
static function parse(string $expression);
```

## trait Prohibitable
`Illuminate\Console\Prohibitable`

```php
static function prohibit($prohibit = true);
```

## class PromptValidationException
`Illuminate\Console\PromptValidationException` extends RuntimeException implements Stringable, Throwable

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

## class QuestionHelper
`Illuminate\Console\QuestionHelper` extends Symfony\Component\Console\Helper\SymfonyQuestionHelper implements Symfony\Component\Console\Helper\HelperInterface

```php
function ask(Symfony\Component\Console\Input\InputInterface $input, Symfony\Component\Console\Output\OutputInterface $output, Symfony\Component\Console\Question\Question $question): mixed;
function getHelperSet(): ?Symfony\Component\Console\Helper\HelperSet;
function getName(): string;
function setHelperSet(?Symfony\Component\Console\Helper\HelperSet $helperSet): void;
static function disableStty(): void;
static function formatMemory(int $memory): string;
static function formatTime(int|float $secs, int $precision = 1): string;
static function length(?string $string): int;
static function removeDecoration(Symfony\Component\Console\Formatter\OutputFormatterInterface $formatter, ?string $string): string;
static function substr(?string $string, int $from, ?int $length = null): string;
static function width(?string $string): int;
```

## class Signals
`Illuminate\Console\Signals`

```php
function __construct($registry);
function register($signal, $callback);
function unregister();
static function resolveAvailabilityUsing($resolver);
static function whenAvailable($callback);
```

