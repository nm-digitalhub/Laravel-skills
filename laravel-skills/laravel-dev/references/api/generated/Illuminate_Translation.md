# Illuminate\Translation

Version: 13.14.0

## class ArrayLoader
`Illuminate\Translation\ArrayLoader` implements Illuminate\Contracts\Translation\Loader

```php
function addJsonPath($path);
function addMessages($locale, $group, array $messages, $namespace = null);
function addNamespace($namespace, $hint);
function load($locale, $group, $namespace = null);
function namespaces();
```

## trait CreatesPotentiallyTranslatedStrings
`Illuminate\Translation\CreatesPotentiallyTranslatedStrings`

## class FileLoader
`Illuminate\Translation\FileLoader` implements Illuminate\Contracts\Translation\Loader

```php
function __construct(Illuminate\Filesystem\Filesystem $files, array|string $path);
function addJsonPath($path);
function addNamespace($namespace, $hint);
function addPath($path);
function jsonPaths();
function load($locale, $group, $namespace = null);
function namespaces();
function paths();
```

## class MessageSelector
`Illuminate\Translation\MessageSelector`

```php
function choose($line, $number, $locale);
function getPluralIndex($locale, $number);
```

## class PotentiallyTranslatedString
`Illuminate\Translation\PotentiallyTranslatedString` implements Stringable

```php
function __construct($string, $translator);
function __toString(): string;
function original();
function toString();
function translate($replace = [], $locale = null);
function translateChoice($number, array $replace = [], $locale = null);
```

## class TranslationServiceProvider
`Illuminate\Translation\TranslationServiceProvider` extends Illuminate\Support\ServiceProvider implements Illuminate\Contracts\Support\DeferrableProvider

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
function when();
static function addProviderToBootstrapFile(string $provider, ?string $path = null);
static function defaultProviders();
static function pathsToPublish($provider = null, $group = null);
static function publishableGroups();
static function publishableMigrationPaths();
static function publishableProviders();
static function removeProviderFromBootstrapFile(array|string $providersToRemove, ?string $path = null, bool $strict = false);
```

## class Translator
`Illuminate\Translation\Translator` extends Illuminate\Support\NamespacedItemResolver implements Illuminate\Contracts\Translation\Translator

```php
function __call($method, $parameters);
function __construct(Illuminate\Contracts\Translation\Loader $loader, $locale);
function addJsonPath($path);
function addLines(array $lines, $locale, $namespace = '*');
function addNamespace($namespace, $hint);
function addPath($path);
function choice($key, $number, array $replace = [], $locale = null);
function determineLocalesUsing($callback);
function flushParsedKeys();
function get($key, array $replace = [], $locale = null, $fallback = true);
function getFallback();
function getLoader();
function getLocale();
function getSelector();
function handleMissingKeysUsing(?callable $callback);
function has($key, $locale = null, $fallback = true);
function hasForLocale($key, $locale = null);
function load($namespace, $group, $locale);
function locale();
function parseKey($key);
function setFallback($fallback);
function setLoaded(array $loaded);
function setLocale($locale);
function setParsedKey($key, $parsed);
function setSelector(Illuminate\Translation\MessageSelector $selector);
function stringable($class, $handler = null);
static function __callStatic($method, $parameters);
static function flushMacros();
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
```

