# Illuminate\Process\Exceptions

Version: 13.14.0

## class ProcessFailedException
`Illuminate\Process\Exceptions\ProcessFailedException` extends RuntimeException implements Stringable, Throwable

```php
final function getCode();
final function getFile(): string;
final function getLine(): int;
final function getMessage(): string;
final function getPrevious(): ?Throwable;
final function getTrace(): array;
final function getTraceAsString(): string;
function __construct(Illuminate\Contracts\Process\ProcessResult $result);
function __toString(): string;
function __wakeup();
```

## class ProcessTimedOutException
`Illuminate\Process\Exceptions\ProcessTimedOutException` extends Symfony\Component\Process\Exception\RuntimeException implements Symfony\Component\Process\Exception\ExceptionInterface, Stringable, Throwable

```php
final function getCode();
final function getFile(): string;
final function getLine(): int;
final function getMessage(): string;
final function getPrevious(): ?Throwable;
final function getTrace(): array;
final function getTraceAsString(): string;
function __construct(Symfony\Component\Process\Exception\ProcessTimedOutException $original, Illuminate\Contracts\Process\ProcessResult $result);
function __toString(): string;
function __wakeup();
```

