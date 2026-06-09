# Illuminate\Http\Client

Version: 13.14.0

## class Batch
`Illuminate\Http\Client\Batch`

```php
function __call(string $method, array $parameters);
function __construct(?Illuminate\Http\Client\Factory $factory = null);
function as(string $key);
function before(Closure $callback): self;
function catch(Closure $callback): self;
function concurrency(int $limit): self;
function defer(): Illuminate\Support\Defer\DeferredCallback;
function finally(Closure $callback): self;
function finished(): bool;
function getRequests(): array;
function hasFailures(): bool;
function newRequest();
function processedRequests(): int;
function progress(Closure $callback): self;
function send(): array;
function then(Closure $callback): self;
```

## class BatchInProgressException
`Illuminate\Http\Client\BatchInProgressException` extends Illuminate\Http\Client\HttpClientException implements Stringable, Throwable

```php
final function getCode();
final function getFile(): string;
final function getLine(): int;
final function getMessage(): string;
final function getPrevious(): ?Throwable;
final function getTrace(): array;
final function getTraceAsString(): string;
function __construct();
function __toString(): string;
function __wakeup();
```

## class ConnectionException
`Illuminate\Http\Client\ConnectionException` extends Illuminate\Http\Client\HttpClientException implements Stringable, Throwable

```php
final function getCode();
final function getFile(): string;
final function getLine(): int;
final function getMessage(): string;
final function getPrevious(): ?Throwable;
final function getTrace(): array;
final function getTraceAsString(): string;
function __construct(string $message = '', int $code = 0, ?Throwable $previous = null);
function __toString(): string;
function __wakeup();
```

## class Factory
`Illuminate\Http\Client\Factory`

```php
function __call($method, $parameters);
function __construct(?Illuminate\Contracts\Events\Dispatcher $dispatcher = null);
function allowStrayRequests(?array $only = null);
function assertNotSent($callback);
function assertNothingSent();
function assertSent($callback);
function assertSentCount($count);
function assertSentInOrder($callbacks);
function assertSequencesAreEmpty();
function createPendingRequest();
function fake($callback = null);
function fakeSequence($url = '*');
function getDispatcher();
function getGlobalMiddleware();
function globalMiddleware($middleware);
function globalOptions($options);
function globalRequestMiddleware($middleware);
function globalResponseMiddleware($middleware);
function macroCall($method, $parameters);
function preventStrayRequests($prevent = true);
function preventingStrayRequests();
function record();
function recordRequestResponsePair($request, $response);
function recorded($callback = null);
function sequence(array $responses = []);
function stubUrl($url, $callback);
static function __callStatic($method, $parameters);
static function failedConnection($message = null);
static function failedRequest($body = null, $status = 200, $headers = []);
static function flushMacros();
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
static function psr7Response($body = null, $status = 200, $headers = []);
static function response($body = null, $status = 200, $headers = []);
```

## class HttpClientException
`Illuminate\Http\Client\HttpClientException` extends Exception implements Throwable, Stringable

```php
final function getCode();
final function getFile(): string;
final function getLine(): int;
final function getMessage(): string;
final function getPrevious(): ?Throwable;
final function getTrace(): array;
final function getTraceAsString(): string;
function __construct(string $message = '', int $code = 0, ?Throwable $previous = null);
function __toString(): string;
function __wakeup();
```

## class PendingRequest
`Illuminate\Http\Client\PendingRequest`

```php
function __call($method, $parameters);
function __construct(?Illuminate\Http\Client\Factory $factory = null, $middleware = []);
function accept($contentType);
function acceptJson();
function afterResponse(callable $callback);
function allowStrayRequests(array $only);
function asForm();
function asJson();
function asMultipart();
function async(bool $async = true);
function attach($name, $contents = '', $filename = null, array $headers = []);
function baseUrl(string $url);
function batch(callable $callback): Illuminate\Http\Client\Batch;
function beforeSending($callback);
function bodyFormat(string $format);
function buildBeforeSendingHandler();
function buildClient();
function buildHandlerStack();
function buildRecorderHandler();
function buildStubHandler();
function connectTimeout(int|float $seconds);
function contentType(string $contentType);
function createClient($handlerStack);
function dd();
function delete(string $url, $data = []);
function dontTruncateExceptions();
function dump();
function get(string $url, $query = null);
function getOptions();
function getPromise();
function head(string $url, $query = null);
function isAllowedRequestUrl($url);
function maxRedirects(int $max);
function mergeOptions(...$options);
function patch(string $url, $data = []);
function pool(callable $callback, ?int $concurrency = 0);
function post(string $url, $data = []);
function preventStrayRequests($prevent = true);
function pushHandlers($handlerStack);
function put(string $url, $data = []);
function replaceHeaders(array $headers);
function retry(array|int $times, Closure|int $sleepMilliseconds = 0, ?callable $when = null, bool $throw = true);
function runBeforeSendingCallbacks($request, array $options);
function send(string $method, string $url, array $options = []);
function setClient(GuzzleHttp\Client $client);
function setHandler($handler);
function sink($to);
function stub($callback);
function throw(?callable $callback = null);
function throwIf($condition);
function throwUnless($condition);
function timeout(int|float $seconds);
function truncateExceptionsAt(int $length);
function unless($value = null, ?callable $callback = null, ?callable $default = null);
function when($value = null, ?callable $callback = null, ?callable $default = null);
function withAttributes($attributes);
function withBasicAuth(string $username, string $password);
function withBody($content, $contentType = 'application/json');
function withCookies(array $cookies, string $domain);
function withDigestAuth($username, $password);
function withHeader($name, $value);
function withHeaders(array $headers);
function withMiddleware(callable $middleware);
function withNtlmAuth($username, $password);
function withOptions(array $options);
function withQueryParameters(array $parameters);
function withRequestMiddleware(callable $middleware);
function withResponseMiddleware(callable $middleware);
function withToken($token, $type = 'Bearer');
function withUrlParameters(array $parameters = []);
function withUserAgent($userAgent);
function withoutRedirecting();
function withoutVerifying();
static function __callStatic($method, $parameters);
static function flushMacros();
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
```

## class Pool
`Illuminate\Http\Client\Pool`

```php
function __call($method, $parameters);
function __construct(?Illuminate\Http\Client\Factory $factory = null);
function as(string $key);
function getRequests();
function newRequest();
```

## class Request
`Illuminate\Http\Client\Request` implements ArrayAccess

```php
function __call($method, $parameters);
function __construct($request);
function attributes();
function body();
function data();
function hasFile($name, $value = null, $filename = null);
function hasHeader($key, $value = null);
function hasHeaders($headers);
function header($key);
function headers();
function isForm();
function isJson();
function isMultipart();
function method();
function offsetExists($offset): bool;
function offsetGet($offset): mixed;
function offsetSet($offset, $value): void;
function offsetUnset($offset): void;
function setRequestAttributes($attributes);
function toPsrRequest();
function uri();
function url();
function withData(array $data);
static function __callStatic($method, $parameters);
static function flushMacros();
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
```

## class RequestException
`Illuminate\Http\Client\RequestException` extends Illuminate\Http\Client\HttpClientException implements Stringable, Throwable

```php
final function getCode();
final function getFile(): string;
final function getLine(): int;
final function getMessage(): string;
final function getPrevious(): ?Throwable;
final function getTrace(): array;
final function getTraceAsString(): string;
function __construct(Illuminate\Http\Client\Response $response, $truncateExceptionsAt = null);
function __toString(): string;
function __wakeup();
function report();
static function dontTruncate();
static function truncate();
static function truncateAt(int $length);
```

## class Response
`Illuminate\Http\Client\Response` implements ArrayAccess, Stringable

```php
function __call($method, $parameters);
function __construct($response);
function __toString(): string;
function accepted();
function badRequest();
function body();
function clientError();
function close();
function collect($key = null, $flags = null);
function conflict();
function cookies();
function created();
function dd($key = null);
function ddHeaders();
function dontTruncateExceptions();
function dump($key = null);
function dumpHeaders();
function effectiveUri();
function failed();
function fluent($key = null, $flags = null);
function forbidden();
function found();
function handlerStats();
function header(string $header);
function headers();
function json($key = null, $default = null, $flags = null);
function macroCall($method, $parameters);
function movedPermanently();
function noContent($status = 204);
function notFound();
function notModified();
function object($flags = null);
function offsetExists($offset): bool;
function offsetGet($offset): mixed;
function offsetSet($offset, $value): void;
function offsetUnset($offset): void;
function ok();
function onError(callable $callback);
function paymentRequired();
function reason();
function redirect();
function requestTimeout();
function resource();
function serverError();
function status();
function successful();
function tap($callback = null);
function throw($callback = null);
function throwIf($condition, $callback = null);
function throwIfClientError();
function throwIfServerError();
function throwIfStatus($statusCode);
function throwUnless($condition);
function throwUnlessStatus($statusCode);
function toException();
function toPsrResponse();
function tooManyRequests();
function truncateExceptionsAt(int $length);
function unauthorized();
function unprocessableContent();
function unprocessableEntity();
static function __callStatic($method, $parameters);
static function flushMacros();
static function flushState(): void;
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
```

## class ResponseSequence
`Illuminate\Http\Client\ResponseSequence`

```php
function __call($method, $parameters);
function __construct(array $responses);
function __invoke($request);
function dontFailWhenEmpty();
function isEmpty();
function push($body = null, int $status = 200, array $headers = []);
function pushFailedConnection($message = null);
function pushFile(string $filePath, int $status = 200, array $headers = []);
function pushResponse($response);
function pushStatus(int $status, array $headers = []);
function whenEmpty($response);
static function __callStatic($method, $parameters);
static function flushMacros();
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
```

## class StrayRequestException
`Illuminate\Http\Client\StrayRequestException` extends RuntimeException implements Stringable, Throwable

```php
final function getCode();
final function getFile(): string;
final function getLine(): int;
final function getMessage(): string;
final function getPrevious(): ?Throwable;
final function getTrace(): array;
final function getTraceAsString(): string;
function __construct(string $uri);
function __toString(): string;
function __wakeup();
```

