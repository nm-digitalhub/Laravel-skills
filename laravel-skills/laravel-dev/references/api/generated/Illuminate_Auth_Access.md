# Illuminate\Auth\Access

Version: 13.14.0

## class AuthorizationException
`Illuminate\Auth\Access\AuthorizationException` extends Exception implements Throwable, Stringable

```php
final function getCode();
final function getFile(): string;
final function getLine(): int;
final function getMessage(): string;
final function getPrevious(): ?Throwable;
final function getTrace(): array;
final function getTraceAsString(): string;
function __construct($message = null, $code = null, ?Throwable $previous = null);
function __toString(): string;
function __wakeup();
function asNotFound();
function hasStatus();
function response();
function setResponse($response);
function status();
function toResponse();
function withStatus($status);
```

## class Gate
`Illuminate\Auth\Access\Gate` implements Illuminate\Contracts\Auth\Access\Gate

```php
function __construct(Illuminate\Contracts\Container\Container $container, callable $userResolver, array $abilities = [], array $policies = [], array $beforeCallbacks = [], array $afterCallbacks = [], ?callable $guessPolicyNamesUsingCallback = null);
function abilities();
function after(callable $callback);
function allowIf($condition, $message = null, $code = null);
function allows($ability, $arguments = []);
function any($abilities, $arguments = []);
function authorize($ability, $arguments = []);
function before(callable $callback);
function check($abilities, $arguments = []);
function defaultDenialResponse(Illuminate\Auth\Access\Response $response);
function define($ability, $callback);
function denies($ability, $arguments = []);
function denyAsNotFound($message = null, $code = null);
function denyIf($condition, $message = null, $code = null);
function denyWithStatus($status, $message = null, $code = null);
function forUser($user);
function getPolicyFor($class);
function guessPolicyNamesUsing(callable $callback);
function has($ability);
function inspect($ability, $arguments = []);
function none($abilities, $arguments = []);
function policies();
function policy($class, $policy);
function raw($ability, $arguments = []);
function resolvePolicy($class);
function resource($name, $class, ?array $abilities = null);
function setContainer(Illuminate\Contracts\Container\Container $container);
```

## trait HandlesAuthorization
`Illuminate\Auth\Access\HandlesAuthorization`

```php
function denyAsNotFound($message = null, $code = null);
function denyWithStatus($status, $message = null, $code = null);
```

## class Response
`Illuminate\Auth\Access\Response` implements Illuminate\Contracts\Support\Arrayable, Stringable

```php
function __construct($allowed, $message = '', $code = null);
function __toString(): string;
function allowed();
function asNotFound();
function authorize();
function code();
function denied();
function message();
function status();
function toArray();
function withStatus($status);
static function allow($message = null, $code = null);
static function deny($message = null, $code = null);
static function denyAsNotFound($message = null, $code = null);
static function denyWithStatus($status, $message = null, $code = null);
```

