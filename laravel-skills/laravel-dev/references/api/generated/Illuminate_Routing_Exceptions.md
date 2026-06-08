# Illuminate\Routing\Exceptions

Version: 13.14.0

## class BackedEnumCaseNotFoundException
`Illuminate\Routing\Exceptions\BackedEnumCaseNotFoundException` extends RuntimeException implements Stringable, Throwable

```php
final function getCode();
final function getFile(): string;
final function getLine(): int;
final function getMessage(): string;
final function getPrevious(): ?Throwable;
final function getTrace(): array;
final function getTraceAsString(): string;
function __construct($backedEnumClass, $case);
function __toString(): string;
function __wakeup();
```

## class InvalidSignatureException
`Illuminate\Routing\Exceptions\InvalidSignatureException` extends Symfony\Component\HttpKernel\Exception\HttpException implements Symfony\Component\HttpKernel\Exception\HttpExceptionInterface, Stringable, Throwable

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
function getHeaders(): array;
function getStatusCode(): int;
function setHeaders(array $headers): void;
static function fromStatusCode(int $statusCode, string $message = '', ?Throwable $previous = null, array $headers = [], int $code = 0): self;
```

## class MissingRateLimiterException
`Illuminate\Routing\Exceptions\MissingRateLimiterException` extends Exception implements Throwable, Stringable

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
static function forLimiter(string $limiter);
static function forLimiterAndUser(string $limiter, string $model);
```

## class StreamedResponseException
`Illuminate\Routing\Exceptions\StreamedResponseException` extends RuntimeException implements Stringable, Throwable

```php
final function getCode();
final function getFile(): string;
final function getLine(): int;
final function getMessage(): string;
final function getPrevious(): ?Throwable;
final function getTrace(): array;
final function getTraceAsString(): string;
function __construct(Throwable $originalException);
function __toString(): string;
function __wakeup();
function getInnerException();
function render();
```

## class UrlGenerationException
`Illuminate\Routing\Exceptions\UrlGenerationException` extends Exception implements Throwable, Stringable

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
static function forMissingParameters(Illuminate\Routing\Route $route, array $parameters = []);
```

