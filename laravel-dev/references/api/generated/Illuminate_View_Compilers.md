# Illuminate\View\Compilers

Version: 13.14.0

## class BladeCompiler
`Illuminate\View\Compilers\BladeCompiler` extends Illuminate\View\Compilers\Compiler implements Illuminate\View\Compilers\CompilerInterface

```php
function __construct(Illuminate\Filesystem\Filesystem $files, $cachePath, $basePath = '', $shouldCache = true, $compiledExtension = 'php', $shouldCheckTimestamps = true);
function aliasComponent($path, $alias = null);
function aliasInclude($path, $alias = null);
function anonymousComponentNamespace(string $directory, ?string $prefix = null);
function anonymousComponentPath(string $path, ?string $prefix = null);
function applyEchoHandler($value);
function bindDirective($name, callable $handler);
function check($name, ...$parameters);
function compile($path = null);
function compileEchos($value);
function compileEndComponentClass();
function compileEndOnce();
function compileString($value);
function component($class, $alias = null, $prefix = '');
function componentNamespace($namespace, $prefix);
function components(array $components, $prefix = '');
function directive($name, callable $handler, bool $bind = false);
function extend(callable $compiler);
function getAnonymousComponentNamespaces();
function getAnonymousComponentPaths();
function getClassComponentAliases();
function getClassComponentNamespaces();
function getCompiledPath($path);
function getCustomDirectives();
function getExtensions();
function getPath();
function if($name, callable $callback);
function include($path, $alias = null);
function isExpired($path);
function precompiler(callable $precompiler);
function prepareStringsForCompilationUsing(callable $callback);
function setEchoFormat($format);
function setPath($path);
function stringable($class, $handler = null);
function stripParentheses($expression);
function usingEchoFormat($format, callable $callback);
function withDoubleEncoding();
function withoutComponentTags();
function withoutDoubleEncoding();
static function compileClassComponentOpening(string $component, string $alias, string $data, string $hash);
static function newComponentHash(string $component);
static function render($string, $data = [], $deleteCachedView = false);
static function renderComponent(Illuminate\View\Component $component);
static function sanitizeComponentAttribute($value);
```

## class Compiler
`Illuminate\View\Compilers\Compiler`

```php
function __construct(Illuminate\Filesystem\Filesystem $files, $cachePath, $basePath = '', $shouldCache = true, $compiledExtension = 'php', $shouldCheckTimestamps = true);
function getCompiledPath($path);
function isExpired($path);
```

## interface CompilerInterface
`Illuminate\View\Compilers\CompilerInterface`

```php
abstract function compile($path);
abstract function getCompiledPath($path);
abstract function isExpired($path);
```

## class ComponentTagCompiler
`Illuminate\View\Compilers\ComponentTagCompiler`

```php
function __construct(array $aliases = [], array $namespaces = [], ?Illuminate\View\Compilers\BladeCompiler $blade = null);
function compile(string $value);
function compileSlots(string $value);
function compileTags(string $value);
function componentClass(string $component);
function findClassByComponent(string $component);
function formatClassName(string $component);
function guessClassName(string $component);
function guessViewName($name, $prefix = 'components.');
function partitionDataAndAttributes($class, array $attributes);
function stripQuotes(string $value);
```

