# Illuminate\Http\Resources\JsonApi\Exceptions

Version: 13.14.0

## class ResourceIdentificationException
`Illuminate\Http\Resources\JsonApi\Exceptions\ResourceIdentificationException` extends RuntimeException implements Stringable, Throwable

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
static function attemptingToDetermineIdFor($resource);
static function attemptingToDetermineTypeFor($resource);
```

