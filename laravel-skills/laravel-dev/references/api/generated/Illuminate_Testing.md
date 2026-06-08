# Illuminate\Testing

Version: 13.14.0

## class AssertableJsonString
`Illuminate\Testing\AssertableJsonString` implements ArrayAccess, Countable

```php
function __construct($jsonable);
function assertCount(int $count, $key = null);
function assertExact(array $data);
function assertFragment(array $data);
function assertMissing(array $data, $exact = false);
function assertMissingExact(array $data);
function assertMissingPath($path);
function assertPath($path, $expect);
function assertPathCanonicalizing($path, $expect);
function assertSimilar(array $data);
function assertStructure(?array $structure = null, $responseData = null, bool $exact = false);
function assertSubset(array $data, $strict = false);
function count(): int;
function json($key = null);
function offsetExists($offset): bool;
function offsetGet($offset): mixed;
function offsetSet($offset, $value): void;
function offsetUnset($offset): void;
```

## class LoggedExceptionCollection
`Illuminate\Testing\LoggedExceptionCollection` extends Illuminate\Support\Collection implements Illuminate\Contracts\Support\Arrayable, Countable, IteratorAggregate, Illuminate\Contracts\Support\Jsonable, JsonSerializable, Stringable, Traversable, Illuminate\Support\Enumerable, Illuminate\Contracts\Support\CanBeEscapedWhenCastToString, ArrayAccess

```php
function __call($method, $parameters);
function __construct($items = []);
function __get($key);
function __toString(): string;
function add($item);
function after($value, $strict = false);
function all();
function average($callback = null);
function avg($callback = null);
function before($value, $strict = false);
function chunk($size, $preserveKeys = true);
function chunkWhile(callable $callback);
function collapse();
function collapseWithKeys();
function collect();
function combine($values);
function concat($source);
function contains($key, $operator = null, $value = null);
function containsManyItems(?callable $callback = null): bool;
function containsOneItem(?callable $callback = null): bool;
function containsStrict($key, $value = null);
function count(): int;
function countBy($countBy = null);
function crossJoin(...$lists);
function dd(...$args);
function diff($items);
function diffAssoc($items);
function diffAssocUsing($items, callable $callback);
function diffKeys($items);
function diffKeysUsing($items, callable $callback);
function diffUsing($items, callable $callback);
function doesntContain($key, $operator = null, $value = null);
function doesntContainStrict($key, $operator = null, $value = null);
function dot($depth = INF);
function dump(...$args);
function duplicates($callback = null, $strict = false);
function duplicatesStrict($callback = null);
function each(callable $callback);
function eachSpread(callable $callback);
function ensure($type);
function escapeWhenCastingToString($escape = true);
function every($key, $operator = null, $value = null);
function except($keys);
function filter(?callable $callback = null);
function first(?callable $callback = null, $default = null);
function firstOrFail($key = null, $operator = null, $value = null);
function firstWhere($key, $operator = null, $value = null);
function flatMap(callable $callback);
function flatten($depth = INF);
function flip();
function forPage($page, $perPage);
function forget($keys);
function get($key, $default = null);
function getCachingIterator($flags = 1);
function getIterator(): Traversable;
function getOrPut($key, $value);
function groupBy($groupBy, $preserveKeys = false);
function has($key);
function hasAny($key);
function hasMany($key = null, $operator = null, $value = null): bool;
function hasSole($key = null, $operator = null, $value = null): bool;
function implode($value, $glue = null);
function intersect($items);
function intersectAssoc($items);
function intersectAssocUsing($items, callable $callback);
function intersectByKeys($items);
function intersectUsing($items, callable $callback);
function isEmpty();
function isNotEmpty();
function join($glue, $finalGlue = '');
function jsonSerialize(): array;
function keyBy($keyBy);
function keys();
function last(?callable $callback = null, $default = null);
function lazy();
function map(callable $callback);
function mapInto($class);
function mapSpread(callable $callback);
function mapToDictionary(callable $callback);
function mapToGroups(callable $callback);
function mapWithKeys(callable $callback);
function max($callback = null);
function median($key = null);
function merge($items);
function mergeRecursive($items);
function min($callback = null);
function mode($key = null);
function multiply(int $multiplier);
function nth($step, $offset = 0);
function offsetExists($offset): bool;
function offsetGet($offset): mixed;
function offsetSet($offset, $value): void;
function offsetUnset($offset): void;
function only($keys);
function pad($size, $value);
function partition($key, $operator = null, $value = null);
function percentage(callable $callback, int $precision = 2);
function pipe(callable $callback);
function pipeInto($class);
function pipeThrough($callbacks);
function pluck($value, $key = null);
function pop($count = 1);
function prepend($value, $key = null);
function pull($key, $default = null);
function push(...$values);
function put($key, $value);
function random($number = null, $preserveKeys = false);
function reduce(callable $callback, $initial = null);
function reduceSpread(callable $callback, ...$initial);
function reduceWithKeys(callable $callback, $initial = null);
function reject($callback = true);
function replace($items);
function replaceRecursive($items);
function reverse();
function search($value, $strict = false);
function select($keys);
function shift($count = 1);
function shuffle();
function skip($count);
function skipUntil($value);
function skipWhile($value);
function slice($offset, $length = null);
function sliding($size = 2, $step = 1);
function sole($key = null, $operator = null, $value = null);
function some($key, $operator = null, $value = null);
function sort($callback = null);
function sortBy($callback, $options = 0, $descending = false);
function sortByDesc($callback, $options = 0);
function sortDesc($options = 0);
function sortKeys($options = 0, $descending = false);
function sortKeysDesc($options = 0);
function sortKeysUsing(callable $callback);
function splice($offset, $length = null, $replacement = []);
function split($numberOfGroups);
function splitIn($numberOfGroups);
function sum($callback = null);
function take($limit);
function takeUntil($value);
function takeWhile($value);
function tap(callable $callback);
function toArray();
function toBase();
function toJson($options = 0);
function toPrettyJson(int $options = 0);
function toResourceCollection(?string $resourceClass = null): Illuminate\Http\Resources\Json\ResourceCollection;
function transform(callable $callback);
function undot();
function union($items);
function unique($key = null, $strict = false);
function uniqueStrict($key = null);
function unless($value = null, ?callable $callback = null, ?callable $default = null);
function unlessEmpty(callable $callback, ?callable $default = null);
function unlessNotEmpty(callable $callback, ?callable $default = null);
function unshift(...$values);
function value($key, $default = null);
function values();
function when($value = null, ?callable $callback = null, ?callable $default = null);
function whenEmpty(callable $callback, ?callable $default = null);
function whenNotEmpty(callable $callback, ?callable $default = null);
function where($key, $operator = null, $value = null);
function whereBetween($key, $values);
function whereIn($key, $values, $strict = false);
function whereInStrict($key, $values);
function whereInstanceOf($type);
function whereNotBetween($key, $values);
function whereNotIn($key, $values, $strict = false);
function whereNotInStrict($key, $values);
function whereNotNull($key = null);
function whereNull($key = null);
function whereStrict($key, $value);
function zip($items);
static function __callStatic($method, $parameters);
static function empty(...$args);
static function flushMacros();
static function fromJson($json, $depth = 512, $flags = 0, ...$args);
static function hasMacro($name);
static function macro($name, $macro);
static function make($items = [], ...$args);
static function mixin($mixin, $replace = true);
static function proxy($method);
static function range($from, $to, $step = 1, ...$args);
static function times($number, ?callable $callback = null, ...$args);
static function unwrap($value);
static function wrap($value, ...$args);
```

## class ParallelConsoleOutput
`Illuminate\Testing\ParallelConsoleOutput` extends Symfony\Component\Console\Output\ConsoleOutput implements Symfony\Component\Console\Output\ConsoleOutputInterface, Symfony\Component\Console\Output\OutputInterface

```php
function __construct($output);
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
function write($messages, bool $newline = false, int $options = 0): void;
function writeln(Traversable|array|string $messages, int $options = 1): void;
```

## class ParallelTesting
`Illuminate\Testing\ParallelTesting`

```php
function __construct(Illuminate\Contracts\Container\Container $container);
function callSetUpProcessCallbacks();
function callSetUpTestCaseCallbacks($testCase);
function callSetUpTestDatabaseBeforeMigratingCallbacks($database);
function callSetUpTestDatabaseCallbacks($database);
function callTearDownProcessCallbacks();
function callTearDownTestCaseCallbacks($testCase);
function option($option);
function resolveOptionsUsing($resolver);
function resolveTokenUsing($resolver);
function setUpProcess($callback);
function setUpTestCase($callback);
function setUpTestDatabase($callback);
function setUpTestDatabaseBeforeMigrating($callback);
function tearDownProcess($callback);
function tearDownTestCase($callback);
function token();
```

## class ParallelTestingServiceProvider
`Illuminate\Testing\ParallelTestingServiceProvider` extends Illuminate\Support\ServiceProvider implements Illuminate\Contracts\Support\DeferrableProvider

```php
function __construct($app);
function boot();
function booted(Closure $callback);
function booting(Closure $callback);
function callBootedCallbacks();
function callBootingCallbacks();
function commands($commands);
function isDeferred();
function provides();
function register();
function when();
static function addProviderToBootstrapFile(string $provider, ?string $path = null);
static function defaultProviders();
static function pathsToPublish($provider = null, $group = null);
static function publishableGroups();
static function publishableMigrationPaths();
static function publishableProviders();
static function removeProviderFromBootstrapFile(array|string $providersToRemove, ?string $path = null, bool $strict = false);
```

## class PendingCommand
`Illuminate\Testing\PendingCommand`

```php
function __call($method, $parameters);
function __construct(PHPUnit\Framework\TestCase $test, Illuminate\Contracts\Container\Container $app, $command, $parameters);
function __destruct();
function assertExitCode($exitCode);
function assertFailed();
function assertNotExitCode($exitCode);
function assertOk();
function assertSuccessful();
function dd();
function doesntExpectOutput($output = null);
function doesntExpectOutputToContain($string);
function execute();
function expectsChoice($question, $answer, $answers, $strict = false);
function expectsConfirmation($question, $answer = 'no');
function expectsOutput($output = null);
function expectsOutputToContain($string);
function expectsPromptsAlert(string $message);
function expectsPromptsError(string $message);
function expectsPromptsInfo(string $message);
function expectsPromptsIntro(string $message);
function expectsPromptsOutro(string $message);
function expectsPromptsTable(Illuminate\Support\Collection|array $headers, Illuminate\Support\Collection|array|null $rows);
function expectsPromptsWarning(string $message);
function expectsQuestion($question, $answer);
function expectsSearch($question, $answer, $search, $answers);
function expectsTable($headers, $rows, $tableStyle = 'default', array $columnStyles = []);
function run();
function tap($callback = null);
function unless($value = null, ?callable $callback = null, ?callable $default = null);
function when($value = null, ?callable $callback = null, ?callable $default = null);
static function __callStatic($method, $parameters);
static function flushMacros();
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
```

## class TestComponent
`Illuminate\Testing\TestComponent` implements Stringable

```php
function __call($method, $parameters);
function __construct($component, $view);
function __get($attribute);
function __toString(): string;
function assertDontSee($value, $escape = true);
function assertDontSeeHtml($value);
function assertDontSeeText($value, $escape = true);
function assertSee($value, $escape = true);
function assertSeeHtml($value);
function assertSeeHtmlInOrder(array $values);
function assertSeeInOrder(array $values, $escape = true);
function assertSeeText($value, $escape = true);
function assertSeeTextInOrder(array $values, $escape = true);
function macroCall($method, $parameters);
static function __callStatic($method, $parameters);
static function flushMacros();
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
```

## class TestResponse
`Illuminate\Testing\TestResponse` implements ArrayAccess

```php
function __call($method, $args);
function __construct($response, $request = null);
function __get($key);
function __isset($key);
function assertAccepted();
function assertBadRequest();
function assertClientError();
function assertConflict();
function assertContent($value);
function assertCookie($cookieName, $value = null, $encrypted = true, $unserialize = false);
function assertCookieExpired($cookieName);
function assertCookieMissing($cookieName);
function assertCookieNotExpired($cookieName);
function assertCreated();
function assertDontSee($value, $escape = true);
function assertDontSeeHtml($value);
function assertDontSeeText($value, $escape = true);
function assertDownload($filename = null);
function assertExactJson(array $data);
function assertExactJsonStructure(?array $structure = null, ?array $responseData = null);
function assertFailedDependency();
function assertForbidden();
function assertFound();
function assertGone();
function assertHeader($headerName, $value = null);
function assertHeaderContains($headerName, $value);
function assertHeaderMissing($headerName);
function assertInternalServerError();
function assertInvalid($errors = null, $errorBag = 'default', $responseKey = 'errors');
function assertJson($value, $strict = false);
function assertJsonCount(int $count, $key = null);
function assertJsonFragment(array $data);
function assertJsonFragments(array $data);
function assertJsonIsArray($key = null);
function assertJsonIsObject($key = null);
function assertJsonMissing(array $data, $exact = false);
function assertJsonMissingExact(array $data);
function assertJsonMissingPath(string $path);
function assertJsonMissingPaths(array $paths);
function assertJsonMissingValidationErrors($keys = null, $responseKey = 'errors');
function assertJsonPath($path, $expect);
function assertJsonPathCanonicalizing($path, array $expect);
function assertJsonPaths(array $paths);
function assertJsonPathsCanonicalizing(array $paths);
function assertJsonStructure(?array $structure = null, ?array $responseData = null);
function assertJsonValidationErrorFor($key, $responseKey = 'errors');
function assertJsonValidationErrors($errors, $responseKey = 'errors');
function assertLocation($uri);
function assertMethodNotAllowed();
function assertMovedPermanently();
function assertNoContent($status = 204);
function assertNotAcceptable();
function assertNotFound();
function assertNotModified();
function assertNotStreamed();
function assertOk();
function assertOnlyInvalid($errors = null, $errorBag = 'default', $responseKey = 'errors');
function assertOnlyJsonValidationErrors($errors, $responseKey = 'errors');
function assertPaymentRequired();
function assertPermanentRedirect();
function assertPlainCookie($cookieName, $value = null);
function assertRedirect($uri = null);
function assertRedirectBack();
function assertRedirectBackWithErrors($keys = [], $format = null, $errorBag = 'default');
function assertRedirectBackWithoutErrors();
function assertRedirectContains($uri);
function assertRedirectToAction($name, $parameters = []);
function assertRedirectToRoute($name, $parameters = []);
function assertRedirectToSignedRoute($name = null, $parameters = [], $absolute = true);
function assertRequestTimeout();
function assertSee($value, $escape = true);
function assertSeeHtml($value);
function assertSeeHtmlInOrder(array $values);
function assertSeeInOrder(array $values, $escape = true);
function assertSeeText($value, $escape = true);
function assertSeeTextInOrder(array $values, $escape = true);
function assertServerError();
function assertServiceUnavailable();
function assertSessionDoesntHaveErrors($keys = [], $format = null, $errorBag = 'default');
function assertSessionHas($key, $value = null);
function assertSessionHasAll(array $bindings);
function assertSessionHasErrors($keys = [], $format = null, $errorBag = 'default');
function assertSessionHasErrorsIn($errorBag, $keys = [], $format = null);
function assertSessionHasInput($key, $value = null);
function assertSessionHasNoErrors();
function assertSessionMissing($key, $value = null);
function assertSessionMissingInput($key);
function assertSimilarJson(array $data);
function assertStatus($status);
function assertStreamed();
function assertStreamedContent($value);
function assertStreamedJsonContent($value);
function assertSuccessful();
function assertSuccessfulPrecognition();
function assertTemporaryRedirect();
function assertTooManyRequests();
function assertUnauthorized();
function assertUnprocessable();
function assertUnsupportedMediaType();
function assertValid($keys = null, $errorBag = 'default', $responseKey = 'errors');
function assertViewHas($key, $value = null);
function assertViewHasAll(array $bindings);
function assertViewIs($value);
function assertViewMissing($key);
function collect($key = null);
function dd(...$args);
function ddBody($key = null);
function ddHeaders();
function ddJson($key = null);
function ddSession($keys = []);
function decodeResponseJson();
function dump($key = null);
function dumpHeaders();
function dumpSession($keys = []);
function getCookie($cookieName, $decrypt = true, $unserialize = false);
function json($key = null);
function macroCall($method, $parameters);
function offsetExists($offset): bool;
function offsetGet($offset): mixed;
function offsetSet($offset, $value): void;
function offsetUnset($offset): void;
function streamedContent();
function tap($callback = null);
function unless($value = null, ?callable $callback = null, ?callable $default = null);
function viewData($key = null);
function when($value = null, ?callable $callback = null, ?callable $default = null);
function withExceptions(Illuminate\Support\Collection $exceptions);
static function __callStatic($method, $parameters);
static function flushMacros();
static function fromBaseResponse($response, $request = null);
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
```

## class TestResponseAssert
`Illuminate\Testing\TestResponseAssert`

```php
function __call($name, $arguments);
static function __callStatic($name, $arguments);
static function withResponse(Illuminate\Testing\TestResponse $response): static;
```

## class TestView
`Illuminate\Testing\TestView` implements Stringable

```php
function __call($method, $parameters);
function __construct(Illuminate\View\View $view);
function __toString(): string;
function assertDontSee($value, $escape = true);
function assertDontSeeHtml($value);
function assertDontSeeText($value, $escape = true);
function assertSee($value, $escape = true);
function assertSeeHtml($value);
function assertSeeHtmlInOrder(array $values);
function assertSeeInOrder(array $values, $escape = true);
function assertSeeText($value, $escape = true);
function assertSeeTextInOrder(array $values, $escape = true);
function assertViewEmpty();
function assertViewHas($key, $value = null);
function assertViewHasAll(array $bindings);
function assertViewMissing($key);
static function __callStatic($method, $parameters);
static function flushMacros();
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
```

