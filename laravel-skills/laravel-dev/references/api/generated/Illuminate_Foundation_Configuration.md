# Illuminate\Foundation\Configuration

Version: 13.14.0

## class ApplicationBuilder
`Illuminate\Foundation\Configuration\ApplicationBuilder`

```php
function __construct(Illuminate\Foundation\Application $app);
function booted(callable $callback);
function booting(callable $callback);
function create();
function prefersJsonResponses(bool $prefer = true);
function registered(callable $callback);
function withBindings(array $bindings);
function withBroadcasting(string $channels, array $attributes = []);
function withCommands(array $commands = []);
function withEvents(Traversable|array|bool $discover = true);
function withExceptions(?callable $using = null);
function withKernels();
function withMiddleware(?callable $callback = null);
function withProviders(array $providers = [], bool $withBootstrapProviders = true);
function withRouting(?Closure $using = null, array|string|null $web = null, array|string|null $api = null, ?string $commands = null, ?string $channels = null, ?string $pages = null, ?string $health = null, string $apiPrefix = 'api', ?callable $then = null);
function withSchedule(callable $callback);
function withScopedSingletons(array $scopedSingletons);
function withSingletons(array $singletons);
```

## class Exceptions
`Illuminate\Foundation\Configuration\Exceptions`

```php
function __construct(Illuminate\Foundation\Exceptions\Handler $handler);
function context(Closure $contextCallback);
function dontFlash(array|string $attributes);
function dontReport(array|string $class);
function dontReportDuplicates();
function dontReportWhen(Closure $dontReportWhen);
function dontTruncateRequestExceptions();
function level(string $type, string $level);
function map($from, $to = null);
function render(callable $using);
function renderable(callable $renderUsing);
function report(callable $using);
function reportable(callable $reportUsing);
function respond(callable $using);
function shouldRenderJsonWhen(callable $callback);
function stopIgnoring(array|string $class);
function throttle(callable $throttleUsing);
function truncateRequestExceptionsAt(int $length);
```

## class Middleware
`Illuminate\Foundation\Configuration\Middleware`

```php
function alias(array $aliases);
function api(array|string $append = [], array|string $prepend = [], array|string $remove = [], array $replace = []);
function append(array|string $middleware);
function appendToGroup(string $group, array|string $middleware);
function appendToPriorityList($after, $append);
function authenticateSessions();
function convertEmptyStringsToNull(array $except = []);
function encryptCookies(array $except = []);
function getGlobalMiddleware();
function getMiddlewareAliases();
function getMiddlewareGroups();
function getMiddlewarePriority();
function getMiddlewarePriorityAppends();
function getMiddlewarePriorityPrepends();
function getPageMiddleware();
function group(string $group, array $middleware);
function pages(array $middleware);
function prepend(array|string $middleware);
function prependToGroup(string $group, array|string $middleware);
function prependToPriorityList($before, $prepend);
function preventRequestForgery(array $except = [], bool $originOnly = false, bool $allowSameSite = false);
function preventRequestsDuringMaintenance(array $except = []);
function priority(array $priority);
function redirectGuestsTo(callable|string|null $redirect);
function redirectTo(callable|string|null $guests = null, callable|string|null $users = null);
function redirectUsersTo(callable|string $redirect);
function remove(array|string $middleware);
function removeFromGroup(string $group, array|string $middleware);
function replace(string $search, string $replace);
function replaceInGroup(string $group, string $search, string $replace);
function statefulApi();
function throttleApi($limiter = 'api', $redis = false);
function throttleWithRedis();
function trimStrings(array $except = []);
function trustHosts(callable|array|null $at = null, bool $subdomains = true);
function trustProxies(array|string|null $at = null, ?int $headers = null);
function use(array $middleware);
function validateCsrfTokens(array $except = []);
function validateSignatures(array $except = []);
function web(array|string $append = [], array|string $prepend = [], array|string $remove = [], array $replace = []);
```

