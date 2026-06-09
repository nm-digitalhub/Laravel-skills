# Illuminate\Foundation\Events

Version: 13.14.0

## class DiagnosingHealth
`Illuminate\Foundation\Events\DiagnosingHealth`

## class DiscoverEvents
`Illuminate\Foundation\Events\DiscoverEvents`

```php
static function guessClassNamesUsing(callable $callback);
static function within($listenerPath, $basePath);
```

## trait Dispatchable
`Illuminate\Foundation\Events\Dispatchable`

```php
static function broadcast(...$arguments);
static function dispatch(...$arguments);
static function dispatchIf($boolean, ...$arguments);
static function dispatchUnless($boolean, ...$arguments);
```

## class LocaleUpdated
`Illuminate\Foundation\Events\LocaleUpdated`

```php
function __construct($locale, $previousLocale = null);
```

## class MaintenanceModeDisabled
`Illuminate\Foundation\Events\MaintenanceModeDisabled`

## class MaintenanceModeEnabled
`Illuminate\Foundation\Events\MaintenanceModeEnabled`

## class PublishingStubs
`Illuminate\Foundation\Events\PublishingStubs`

```php
function __construct(array $stubs);
function add(string $path, string $name);
static function broadcast(...$arguments);
static function dispatch(...$arguments);
static function dispatchIf($boolean, ...$arguments);
static function dispatchUnless($boolean, ...$arguments);
```

## class Terminating
`Illuminate\Foundation\Events\Terminating`

## class VendorTagPublished
`Illuminate\Foundation\Events\VendorTagPublished`

```php
function __construct($tag, $paths);
```

