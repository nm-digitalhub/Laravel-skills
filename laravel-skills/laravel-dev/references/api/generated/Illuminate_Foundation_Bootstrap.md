# Illuminate\Foundation\Bootstrap

Version: 13.14.0

## class BootProviders
`Illuminate\Foundation\Bootstrap\BootProviders`

```php
function bootstrap(Illuminate\Contracts\Foundation\Application $app);
```

## class HandleExceptions
`Illuminate\Foundation\Bootstrap\HandleExceptions`

```php
function bootstrap(Illuminate\Contracts\Foundation\Application $app);
function handleDeprecationError($message, $file, $line, $level = 8192);
function handleError($level, $message, $file = '', $line = 0);
function handleException(Throwable $e);
function handleShutdown();
static function flushHandlersState(?PHPUnit\Framework\TestCase $testCase = null);
static function flushState(?PHPUnit\Framework\TestCase $testCase = null);
static function forgetApp();
```

## class LoadConfiguration
`Illuminate\Foundation\Bootstrap\LoadConfiguration`

```php
function bootstrap(Illuminate\Contracts\Foundation\Application $app);
static function alwaysUse(?Closure $alwaysUseConfig): void;
```

## class LoadEnvironmentVariables
`Illuminate\Foundation\Bootstrap\LoadEnvironmentVariables`

```php
function bootstrap(Illuminate\Contracts\Foundation\Application $app);
```

## class RegisterFacades
`Illuminate\Foundation\Bootstrap\RegisterFacades`

```php
function bootstrap(Illuminate\Contracts\Foundation\Application $app);
```

## class RegisterProviders
`Illuminate\Foundation\Bootstrap\RegisterProviders`

```php
function bootstrap(Illuminate\Contracts\Foundation\Application $app);
static function flushState();
static function merge(array $providers, ?string $bootstrapProviderPath = null);
```

## class SetRequestForConsole
`Illuminate\Foundation\Bootstrap\SetRequestForConsole`

```php
function bootstrap(Illuminate\Contracts\Foundation\Application $app);
```

