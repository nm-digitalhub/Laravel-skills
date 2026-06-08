# Illuminate\Contracts\Translation

Version: 13.14.0

## interface HasLocalePreference
`Illuminate\Contracts\Translation\HasLocalePreference`

```php
abstract function preferredLocale();
```

## interface Loader
`Illuminate\Contracts\Translation\Loader`

```php
abstract function addJsonPath($path);
abstract function addNamespace($namespace, $hint);
abstract function load($locale, $group, $namespace = null);
abstract function namespaces();
```

## interface Translator
`Illuminate\Contracts\Translation\Translator`

```php
abstract function choice($key, $number, array $replace = [], $locale = null);
abstract function get($key, array $replace = [], $locale = null);
abstract function getLocale();
abstract function setLocale($locale);
```

