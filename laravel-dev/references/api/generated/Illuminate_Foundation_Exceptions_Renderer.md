# Illuminate\Foundation\Exceptions\Renderer

Version: 13.14.0

## class Exception
`Illuminate\Foundation\Exceptions\Renderer\Exception`

```php
function __construct(Symfony\Component\ErrorHandler\Exception\FlattenException $exception, Illuminate\Http\Request $request, Illuminate\Foundation\Exceptions\Renderer\Listener $listener, string $basePath);
function applicationQueries();
function applicationRouteContext();
function applicationRouteParametersContext();
function class();
function code();
function frameGroups();
function frames();
function httpStatusCode();
function message();
function previousExceptions();
function request();
function requestBody();
function requestHeaders();
function title();
```

## class Frame
`Illuminate\Foundation\Exceptions\Renderer\Frame`

```php
function __construct(Symfony\Component\ErrorHandler\Exception\FlattenException $exception, array $classMap, array $frame, string $basePath, ?Illuminate\Foundation\Exceptions\Renderer\Frame $previous = null);
function args();
function callable();
function class();
function editorHref();
function file();
function isFromVendor();
function isMain();
function line();
function markAsMain();
function operator();
function previous();
function resolveDumpSource();
function snippet();
function source();
static function dontIncludeSource();
static function resolveDumpSourceUsing($callable);
```

## class Listener
`Illuminate\Foundation\Exceptions\Renderer\Listener`

```php
function onQueryExecuted(Illuminate\Database\Events\QueryExecuted $event);
function queries();
function registerListeners(Illuminate\Contracts\Events\Dispatcher $events);
```

## class Renderer
`Illuminate\Foundation\Exceptions\Renderer\Renderer`

```php
function __construct(Illuminate\Contracts\View\Factory $viewFactory, Illuminate\Foundation\Exceptions\Renderer\Listener $listener, Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer $htmlErrorRenderer, Illuminate\Foundation\Exceptions\Renderer\Mappers\BladeMapper $bladeMapper, string $basePath);
function render(Illuminate\Http\Request $request, Throwable $throwable);
static function css();
static function js();
```

