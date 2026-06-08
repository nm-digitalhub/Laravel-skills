# Illuminate\Contracts\Debug

Version: 13.14.0

## interface ExceptionHandler
`Illuminate\Contracts\Debug\ExceptionHandler`

```php
abstract function render($request, Throwable $e);
abstract function renderForConsole($output, Throwable $e);
abstract function report(Throwable $e);
abstract function shouldReport(Throwable $e);
```

## interface ShouldntReport
`Illuminate\Contracts\Debug\ShouldntReport`

