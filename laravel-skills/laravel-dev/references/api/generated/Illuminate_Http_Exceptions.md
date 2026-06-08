# Illuminate\Http\Exceptions

Version: 13.14.0

## class HttpResponseException
`Illuminate\Http\Exceptions\HttpResponseException` extends RuntimeException implements Stringable, Throwable

```php
final function getCode();
final function getFile(): string;
final function getLine(): int;
final function getMessage(): string;
final function getPrevious(): ?Throwable;
final function getTrace(): array;
final function getTraceAsString(): string;
function __construct(Symfony\Component\HttpFoundation\Response $response, ?Throwable $previous = null);
function __toString(): string;
function __wakeup();
function getResponse();
```

## class MalformedUrlException
`Illuminate\Http\Exceptions\MalformedUrlException` extends Symfony\Component\HttpKernel\Exception\HttpException implements Symfony\Component\HttpKernel\Exception\HttpExceptionInterface, Stringable, Throwable

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

## class OriginMismatchException
`Illuminate\Http\Exceptions\OriginMismatchException` extends Exception implements Throwable, Stringable

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

## class PostTooLargeException
`Illuminate\Http\Exceptions\PostTooLargeException` extends Symfony\Component\HttpKernel\Exception\HttpException implements Symfony\Component\HttpKernel\Exception\HttpExceptionInterface, Stringable, Throwable

```php
final function getCode();
final function getFile(): string;
final function getLine(): int;
final function getMessage(): string;
final function getPrevious(): ?Throwable;
final function getTrace(): array;
final function getTraceAsString(): string;
function __construct($message = '', ?Throwable $previous = null, array $headers = [], $code = 0);
function __toString(): string;
function __wakeup();
function getHeaders(): array;
function getStatusCode(): int;
function setHeaders(array $headers): void;
static function fromStatusCode(int $statusCode, string $message = '', ?Throwable $previous = null, array $headers = [], int $code = 0): self;
```

## class ThrottleRequestsException
`Illuminate\Http\Exceptions\ThrottleRequestsException` extends Symfony\Component\HttpKernel\Exception\TooManyRequestsHttpException implements Throwable, Stringable, Symfony\Component\HttpKernel\Exception\HttpExceptionInterface

```php
final function getCode();
final function getFile(): string;
final function getLine(): int;
final function getMessage(): string;
final function getPrevious(): ?Throwable;
final function getTrace(): array;
final function getTraceAsString(): string;
function __construct($message = '', ?Throwable $previous = null, array $headers = [], $code = 0);
function __toString(): string;
function __wakeup();
function getHeaders(): array;
function getStatusCode(): int;
function setHeaders(array $headers): void;
static function fromStatusCode(int $statusCode, string $message = '', ?Throwable $previous = null, array $headers = [], int $code = 0): self;
```

