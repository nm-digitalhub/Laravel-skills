# Illuminate\Foundation\Exceptions

Version: 13.14.0

## class Handler
`Illuminate\Foundation\Exceptions\Handler` implements Illuminate\Contracts\Debug\ExceptionHandler

```php
function __construct(Illuminate\Contracts\Container\Container $container);
function buildContextForException(Throwable $e);
function buildContextUsing(Closure $contextCallback);
function dontFlash(array|string $attributes);
function dontReport(array|string $exceptions);
function dontReportDuplicates();
function dontReportWhen(callable $dontReportWhen);
function ignore(array|string $exceptions);
function isReporting(Throwable $e): bool;
function level($type, $level);
function map($from, $to = null);
function register();
function render($request, Throwable $e);
function renderForConsole($output, Throwable $e);
function renderable(callable $renderUsing);
function report(Throwable $e);
function reportable(callable $reportUsing);
function respondUsing($callback);
function shouldRenderJsonWhen($callback);
function shouldReport(Throwable $e);
function stopIgnoring(array|string $exceptions);
function throttleUsing(callable $throttleUsing);
```

## class RegisterErrorViewPaths
`Illuminate\Foundation\Exceptions\RegisterErrorViewPaths`

```php
function __invoke();
```

## class ReportableHandler
`Illuminate\Foundation\Exceptions\ReportableHandler`

```php
function __construct(callable $callback);
function __invoke(Throwable $e);
function handles(Throwable $e);
function stop();
```

