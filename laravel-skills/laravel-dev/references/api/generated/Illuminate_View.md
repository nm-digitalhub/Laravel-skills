# Illuminate\View

Version: 13.14.0

## class AnonymousComponent
`Illuminate\View\AnonymousComponent` extends Illuminate\View\Component

```php
function __construct($view, $data);
function data();
function render();
function resolveView();
function shouldRender();
function view($view, $data = [], $mergeData = []);
function withAttributes(array $attributes);
function withName($name);
static function flushCache();
static function forgetComponentsResolver();
static function forgetFactory();
static function ignoredParameterNames();
static function resolve($data);
static function resolveComponentsUsing($resolver);
```

## class AppendableAttributeValue
`Illuminate\View\AppendableAttributeValue` implements Stringable

```php
function __construct($value);
function __toString(): string;
```

## class Component
`Illuminate\View\Component`

```php
abstract function render();
function data();
function resolveView();
function shouldRender();
function view($view, $data = [], $mergeData = []);
function withAttributes(array $attributes);
function withName($name);
static function flushCache();
static function forgetComponentsResolver();
static function forgetFactory();
static function ignoredParameterNames();
static function resolve($data);
static function resolveComponentsUsing($resolver);
```

## class ComponentAttributeBag
`Illuminate\View\ComponentAttributeBag` implements Illuminate\Contracts\Support\Arrayable, ArrayAccess, IteratorAggregate, JsonSerializable, Illuminate\Contracts\Support\Htmlable, Stringable, Traversable

```php
function __call($method, $parameters);
function __construct(array $attributes = []);
function __invoke(array $attributeDefaults = []);
function __toString(): string;
function all($keys = null);
function anyFilled($keys);
function array($key = null);
function boolean($key = null, $default = false);
function clamp($key, $min, $max, $default = 0);
function class($classList);
function collect($key = null);
function date($key, $format = null, $tz = null);
function enum($key, $enumClass, $default = null);
function enums($key, $enumClass);
function except($keys);
function exceptProps($keys);
function exists($key);
function filled($key);
function filter($callback);
function first($default = null);
function float($key, $default = 0);
function get($key, $default = null);
function getAttributes();
function getIterator(): Traversable;
function has($key);
function hasAny($keys);
function integer($key, $default = 0);
function interval($key, $unit = null);
function isEmpty();
function isNotEmpty();
function isNotFilled($key);
function jsonSerialize(): mixed;
function merge(array $attributeDefaults = [], $escape = true);
function missing($key);
function offsetExists($offset): bool;
function offsetGet($offset): mixed;
function offsetSet($offset, $value): void;
function offsetUnset($offset): void;
function only($keys);
function onlyProps($keys);
function prepends($value);
function setAttributes(array $attributes);
function str($key, $default = null);
function string($key, $default = null);
function style($styleList);
function thatStartWith($needles);
function toArray();
function toHtml();
function unless($value = null, ?callable $callback = null, ?callable $default = null);
function when($value = null, ?callable $callback = null, ?callable $default = null);
function whenFilled($key, callable $callback, ?callable $default = null);
function whenHas($key, callable $callback, ?callable $default = null);
function whenMissing($key, callable $callback, ?callable $default = null);
function whereDoesntStartWith($needles);
function whereStartsWith($needles);
static function __callStatic($method, $parameters);
static function extractPropNames(array $keys);
static function flushMacros();
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
```

## class ComponentSlot
`Illuminate\View\ComponentSlot` implements Illuminate\Contracts\Support\Htmlable, Stringable

```php
function __construct($contents = '', $attributes = []);
function __toString(): string;
function hasActualContent(callable|string|null $callable = null);
function isEmpty();
function isNotEmpty();
function toHtml();
function withAttributes(array $attributes);
```

## class DynamicComponent
`Illuminate\View\DynamicComponent` extends Illuminate\View\Component

```php
function __construct(BackedEnum|string $component);
function data();
function render();
function resolveView();
function shouldRender();
function view($view, $data = [], $mergeData = []);
function withAttributes(array $attributes);
function withName($name);
static function flushCache();
static function forgetComponentsResolver();
static function forgetFactory();
static function ignoredParameterNames();
static function resolve($data);
static function resolveComponentsUsing($resolver);
```

## class Factory
`Illuminate\View\Factory` implements Illuminate\Contracts\View\Factory

```php
function __call($method, $parameters);
function __construct(Illuminate\View\Engines\EngineResolver $engines, Illuminate\View\ViewFinderInterface $finder, Illuminate\Contracts\Events\Dispatcher $events);
function addExtension($extension, $engine, $resolver = null);
function addLocation($location);
function addLoop($data);
function addNamespace($namespace, $hints);
function appendSection();
function callComposer(Illuminate\Contracts\View\View $view);
function callCreator(Illuminate\Contracts\View\View $view);
function composer($views, $callback);
function composers(array $composers);
function creator($views, $callback);
function decrementRender();
function doneRendering();
function endSlot();
function exists($view);
function file($path, $data = [], $mergeData = []);
function first(array $views, $data = [], $mergeData = []);
function flushFinderCache();
function flushFragments();
function flushSections();
function flushStacks();
function flushState();
function flushStateIfDoneRendering();
function getConsumableComponentData($key, $default = null);
function getContainer();
function getDispatcher();
function getEngineFromPath($path);
function getEngineResolver();
function getExtensions();
function getFinder();
function getFragment($name, $default = null);
function getFragments();
function getLastLoop();
function getLoopStack();
function getSection($name, $default = null);
function getSections();
function getShared();
function hasRenderedOnce(string $id);
function hasSection($name);
function incrementLoopIndices();
function incrementRender();
function inject($section, $content);
function isStackEmpty(string $section): bool;
function make($view, $data = [], $mergeData = []);
function markAsRenderedOnce(string $id);
function popLoop();
function prependLocation($location);
function prependNamespace($namespace, $hints);
function renderComponent();
function renderEach($view, $data, $iterator, $empty = 'raw|');
function renderTranslation();
function renderUnless($condition, $view, $data = [], $mergeData = []);
function renderWhen($condition, $view, $data = [], $mergeData = []);
function replaceNamespace($namespace, $hints);
function sectionMissing($name);
function setContainer(Illuminate\Contracts\Container\Container $container);
function setDispatcher(Illuminate\Contracts\Events\Dispatcher $events);
function setFinder(Illuminate\View\ViewFinderInterface $finder);
function share($key, $value = null);
function shared($key, $default = null);
function slot($name, $content = null, $attributes = []);
function startComponent($view, array $data = []);
function startComponentFirst(array $names, array $data = []);
function startFragment($fragment);
function startPrepend($section, $content = '');
function startPush($section, $content = '');
function startSection($section, $content = null);
function startTranslation($replacements = []);
function stopFragment();
function stopPrepend();
function stopPush();
function stopSection($overwrite = false);
function yieldContent($section, $default = '');
function yieldPushContent($section, $default = '');
function yieldSection();
static function __callStatic($method, $parameters);
static function flushMacros();
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
static function parentPlaceholder($section = '');
```

## class FileViewFinder
`Illuminate\View\FileViewFinder` implements Illuminate\View\ViewFinderInterface

```php
function __construct(Illuminate\Filesystem\Filesystem $files, array $paths, ?array $extensions = null);
function addExtension($extension);
function addLocation($location);
function addNamespace($namespace, $hints);
function find($view);
function flush();
function getExtensions();
function getFilesystem();
function getHints();
function getPaths();
function getViews();
function hasHintInformation($name);
function prependLocation($location);
function prependNamespace($namespace, $hints);
function replaceNamespace($namespace, $hints);
function setPaths($paths);
```

## class InvokableComponentVariable
`Illuminate\View\InvokableComponentVariable` implements Illuminate\Contracts\Support\DeferringDisplayableValue, IteratorAggregate, Stringable, Traversable

```php
function __call($method, $parameters);
function __construct(Closure $callable);
function __get($key);
function __invoke();
function __toString(): string;
function getIterator(): Traversable;
function resolveDisplayableValue();
```

## class View
`Illuminate\View\View` implements ArrayAccess, Illuminate\Contracts\Support\Htmlable, Stringable, Illuminate\Contracts\View\View, Illuminate\Contracts\Support\Renderable

```php
function __call($method, $parameters);
function __construct(Illuminate\View\Factory $factory, Illuminate\Contracts\View\Engine $engine, $view, $path, $data = []);
function __get($key);
function __isset($key);
function __set($key, $value);
function __toString(): string;
function __unset($key);
function fragment($fragment);
function fragmentIf($boolean, $fragment);
function fragments(?array $fragments = null);
function fragmentsIf($boolean, ?array $fragments = null);
function gatherData();
function getData();
function getEngine();
function getFactory();
function getName();
function getPath();
function macroCall($method, $parameters);
function name();
function nest($key, $view, array $data = []);
function offsetExists($offset): bool;
function offsetGet($offset): mixed;
function offsetSet($offset, $value): void;
function offsetUnset($offset): void;
function render(?callable $callback = null);
function renderSections();
function setPath($path);
function toHtml();
function with($key, $value = null);
function withErrors($provider, $bag = 'default');
static function __callStatic($method, $parameters);
static function flushMacros();
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
```

## class ViewException
`Illuminate\View\ViewException` extends ErrorException implements Stringable, Throwable

```php
final function getCode();
final function getFile(): string;
final function getLine(): int;
final function getMessage(): string;
final function getPrevious(): ?Throwable;
final function getSeverity(): int;
final function getTrace(): array;
final function getTraceAsString(): string;
function __construct(string $message = '', int $code = 0, int $severity = 1, ?string $filename = null, ?int $line = null, ?Throwable $previous = null);
function __toString(): string;
function __wakeup();
function render($request);
function report();
```

## interface ViewFinderInterface
`Illuminate\View\ViewFinderInterface`

```php
abstract function addExtension($extension);
abstract function addLocation($location);
abstract function addNamespace($namespace, $hints);
abstract function find($view);
abstract function flush();
abstract function prependNamespace($namespace, $hints);
abstract function replaceNamespace($namespace, $hints);
```

## class ViewName
`Illuminate\View\ViewName`

```php
static function normalize($name);
```

## class ViewServiceProvider
`Illuminate\View\ViewServiceProvider` extends Illuminate\Support\ServiceProvider

```php
function __construct($app);
function booted(Closure $callback);
function booting(Closure $callback);
function callBootedCallbacks();
function callBootingCallbacks();
function commands($commands);
function isDeferred();
function provides();
function register();
function registerBladeCompiler();
function registerBladeEngine($resolver);
function registerEngineResolver();
function registerFactory();
function registerFileEngine($resolver);
function registerPhpEngine($resolver);
function registerViewFinder();
function when();
static function addProviderToBootstrapFile(string $provider, ?string $path = null);
static function defaultProviders();
static function pathsToPublish($provider = null, $group = null);
static function publishableGroups();
static function publishableMigrationPaths();
static function publishableProviders();
static function removeProviderFromBootstrapFile(array|string $providersToRemove, ?string $path = null, bool $strict = false);
```

