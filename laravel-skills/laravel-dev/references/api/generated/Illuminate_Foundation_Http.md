# Illuminate\Foundation\Http

Version: 13.14.0

## class FormRequest
`Illuminate\Foundation\Http\FormRequest` extends Illuminate\Http\Request implements Stringable, Illuminate\Contracts\Support\Arrayable, ArrayAccess, Illuminate\Contracts\Validation\ValidatesWhenResolved

```php
function __call($method, $parameters);
function __clone();
function __construct(array $query = [], array $request = [], array $attributes = [], array $cookies = [], array $files = [], array $server = [], $content = null);
function __get($key);
function __isset($key);
function __toString(): string;
function accepts($contentTypes);
function acceptsAnyContentType();
function acceptsHtml();
function acceptsJson();
function acceptsMarkdown();
function ajax();
function all($keys = null);
function allFiles();
function anyFilled($keys);
function array($key = null);
function attributes();
function bearerToken();
function boolean($key = null, $default = false);
function clamp($key, $min, $max, $default = 0);
function collect($key = null);
function cookie($key = null, $default = null);
function date($key, $format = null, $tz = null);
function dd(...$args);
function decodedPath();
function dump($keys = []);
function duplicate(?array $query = null, ?array $request = null, ?array $attributes = null, ?array $cookies = null, ?array $files = null, ?array $server = null): static;
function enum($key, $enumClass, $default = null);
function enums($key, $enumClass);
function except($keys);
function exists($key);
function expectsJson();
function file($key = null, $default = null);
function filled($key);
function filterPrecognitiveRules($rules);
function fingerprint();
function flash();
function flashExcept($keys);
function flashOnly($keys);
function float($key, $default = 0);
function fluent($key = null, array $default = []);
function flush();
function format($default = 'html');
function fullUrl();
function fullUrlIs(...$patterns);
function fullUrlWithQuery(array $query);
function fullUrlWithoutQuery($keys);
function get(string $key, mixed $default = null): mixed;
function getAcceptableContentTypes(): array;
function getBasePath(): string;
function getBaseUrl(): string;
function getCharsets(): array;
function getClientIp(): ?string;
function getClientIps(): array;
function getContent(bool $asResource = false);
function getContentTypeFormat(): ?string;
function getDefaultLocale(): string;
function getETags(): array;
function getEncodings(): array;
function getFormat(?string $mimeType): ?string;
function getHost(): string;
function getHttpHost(): string;
function getLanguages(): array;
function getLocale(): string;
function getMethod(): string;
function getMimeType(string $format): ?string;
function getPassword(): ?string;
function getPathInfo(): string;
function getPayload(): Symfony\Component\HttpFoundation\InputBag;
function getPort(): string|int|null;
function getPreferredFormat(?string $default = 'html'): ?string;
function getPreferredLanguage(?array $locales = null): ?string;
function getProtocolVersion(): ?string;
function getQueryString(): ?string;
function getRealMethod(): string;
function getRelativeUriForPath(string $path): string;
function getRequestFormat(?string $default = 'html'): ?string;
function getRequestUri(): string;
function getRouteResolver();
function getScheme(): string;
function getSchemeAndHttpHost(): string;
function getScriptName(): string;
function getSession(): Symfony\Component\HttpFoundation\Session\SessionInterface;
function getUri(): string;
function getUriForPath(string $path): string;
function getUser(): ?string;
function getUserInfo(): ?string;
function getUserResolver();
function has($key);
function hasAny($keys);
function hasCookie($key);
function hasFile($key);
function hasHeader($key);
function hasPreviousSession(): bool;
function hasSession(bool $skipIfUninitialized = false): bool;
function header($key = null, $default = null);
function host();
function httpHost();
function initialize(array $query = [], array $request = [], array $attributes = [], array $cookies = [], array $files = [], array $server = [], $content = null): void;
function input($key = null, $default = null);
function instance();
function integer($key, $default = 0);
function interval($key, $unit = null);
function ip();
function ips();
function is(...$patterns);
function isAttemptingPrecognition();
function isFromTrustedProxy(): bool;
function isJson();
function isMethod(string $method): bool;
function isMethodCacheable(): bool;
function isMethodIdempotent(): bool;
function isMethodSafe(): bool;
function isNoCache(): bool;
function isNotFilled($key);
function isPrecognitive();
function isSecure(): bool;
function isXmlHttpRequest(): bool;
function json($key = null, $default = null);
function keys();
function merge(array $input);
function mergeIfMissing(array $input);
function messages();
function method();
function missing($key);
function offsetExists($offset): bool;
function offsetGet($offset): mixed;
function offsetSet($offset, $value): void;
function offsetUnset($offset): void;
function old($key = null, $default = null);
function only($keys);
function overrideGlobals(): void;
function path();
function pjax();
function post($key = null, $default = null);
function preferSafeContent(): bool;
function prefers($contentTypes);
function prefetch();
function query($key = null, $default = null);
function replace(array $input);
function root();
function route($param = null, $default = null);
function routeIs(...$patterns);
function safe(?array $keys = null);
function schemeAndHttpHost();
function secure();
function segment($index, $default = null);
function segments();
function server($key = null, $default = null);
function session();
function setContainer(Illuminate\Contracts\Container\Container $container);
function setDefaultLocale(string $locale): void;
function setDefaultRequestLocale(string $locale);
function setFormat(?string $format, array|string $mimeTypes): void;
function setJson($json);
function setLaravelSession($session);
function setLocale(string $locale): void;
function setMethod(string $method): void;
function setRedirector(Illuminate\Routing\Redirector $redirector);
function setRequestFormat(?string $format): void;
function setRequestLocale(string $locale);
function setRouteResolver(Closure $callback);
function setSession(Symfony\Component\HttpFoundation\Session\SessionInterface $session): void;
function setSessionFactory(callable $factory): void;
function setUserResolver(Closure $callback);
function setValidator(Illuminate\Contracts\Validation\Validator $validator);
function str($key, $default = null);
function string($key, $default = null);
function toArray(): array;
function unless($value = null, ?callable $callback = null, ?callable $default = null);
function uri();
function url();
function user($guard = null);
function userAgent();
function validateResolved();
function validated($key = null, $default = null);
function validationData();
function wantsJson();
function wantsMarkdown();
function when($value = null, ?callable $callback = null, ?callable $default = null);
function whenFilled($key, callable $callback, ?callable $default = null);
function whenHas($key, callable $callback, ?callable $default = null);
function whenMissing($key, callable $callback, ?callable $default = null);
static function __callStatic($method, $parameters);
static function capture();
static function create(string $uri, string $method = 'GET', array $parameters = [], array $cookies = [], array $files = [], array $server = [], $content = null): static;
static function createFrom(self $from, $to = null);
static function createFromBase(Symfony\Component\HttpFoundation\Request $request);
static function createFromGlobals(): static;
static function enableHttpMethodParameterOverride(): void;
static function failOnUnknownFields(bool $value = true): void;
static function flushMacros();
static function flushState(): void;
static function getAllowedHttpMethodOverride(): ?array;
static function getHttpMethodParameterOverride(): bool;
static function getMimeTypes(string $format): array;
static function getTrustedHeaderSet(): int;
static function getTrustedHosts(): array;
static function getTrustedProxies(): array;
static function hasMacro($name);
static function macro($name, $macro);
static function matchesType($actual, $type);
static function mixin($mixin, $replace = true);
static function normalizeQueryString(?string $qs): string;
static function setAllowedHttpMethodOverride(?array $methods): void;
static function setFactory(?callable $callable): void;
static function setTrustedHosts(array $hostPatterns): void;
static function setTrustedProxies(array $proxies, int $trustedHeaderSet): void;
```

## class HtmlDumper
`Illuminate\Foundation\Http\HtmlDumper` extends Symfony\Component\VarDumper\Dumper\HtmlDumper implements Symfony\Component\VarDumper\Cloner\DumperInterface, Symfony\Component\VarDumper\Dumper\DataDumperInterface

```php
function __construct($basePath, $compiledViewPath);
function dump(Symfony\Component\VarDumper\Cloner\Data $data, $output = null, array $extraDisplayOptions = []): ?string;
function dumpScalar(Symfony\Component\VarDumper\Cloner\Cursor $cursor, string $type, string|int|float|bool|null $value): void;
function dumpString(Symfony\Component\VarDumper\Cloner\Cursor $cursor, string $str, bool $bin, int $cut): void;
function dumpWithSource(Symfony\Component\VarDumper\Cloner\Data $data);
function enterHash(Symfony\Component\VarDumper\Cloner\Cursor $cursor, int $type, string|int|null $class, bool $hasChild): void;
function leaveHash(Symfony\Component\VarDumper\Cloner\Cursor $cursor, int $type, string|int|null $class, bool $hasChild, int $cut): void;
function resolveDumpSource();
function setCharset(string $charset): string;
function setColors(bool $colors): void;
function setDisplayOptions(array $displayOptions): void;
function setDumpBoundaries(string $prefix, string $suffix): void;
function setDumpHeader(?string $header): void;
function setIndentPad(string $pad): string;
function setMaxStringWidth(int $maxStringWidth): void;
function setOutput($output);
function setStyles(array $styles): void;
function setTheme(string $themeName): void;
static function dontIncludeSource();
static function register($basePath, $compiledViewPath);
static function resolveDumpSourceUsing($callable);
```

## class Kernel
`Illuminate\Foundation\Http\Kernel` implements Illuminate\Contracts\Http\Kernel

```php
function __construct(Illuminate\Contracts\Foundation\Application $app, Illuminate\Routing\Router $router);
function addToMiddlewarePriorityAfter($after, $middleware);
function addToMiddlewarePriorityBefore($before, $middleware);
function appendMiddlewareToGroup($group, $middleware);
function appendToMiddlewarePriority($middleware);
function bootstrap();
function getApplication();
function getGlobalMiddleware();
function getMiddlewareAliases();
function getMiddlewareGroups();
function getMiddlewarePriority();
function getRouteMiddleware();
function handle($request);
function hasMiddleware($middleware);
function prependMiddleware($middleware);
function prependMiddlewareToGroup($group, $middleware);
function prependToMiddlewarePriority($middleware);
function pushMiddleware($middleware);
function requestStartedAt();
function setApplication(Illuminate\Contracts\Foundation\Application $app);
function setGlobalMiddleware(array $middleware);
function setMiddlewareAliases(array $aliases);
function setMiddlewareGroups(array $groups);
function setMiddlewarePriority(array $priority);
function terminate($request, $response);
function whenRequestLifecycleIsLongerThan($threshold, $handler);
```

## class MaintenanceModeBypassCookie
`Illuminate\Foundation\Http\MaintenanceModeBypassCookie`

```php
static function create(string $key);
static function isValid(string $cookie, string $key);
```

