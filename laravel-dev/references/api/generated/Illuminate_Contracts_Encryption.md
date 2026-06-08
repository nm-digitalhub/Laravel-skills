# Illuminate\Contracts\Encryption

Version: 13.14.0

## class DecryptException
`Illuminate\Contracts\Encryption\DecryptException` extends RuntimeException implements Stringable, Throwable

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

## class EncryptException
`Illuminate\Contracts\Encryption\EncryptException` extends RuntimeException implements Stringable, Throwable

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

## interface Encrypter
`Illuminate\Contracts\Encryption\Encrypter`

```php
abstract function decrypt($payload, $unserialize = true);
abstract function encrypt($value, $serialize = true);
abstract function getAllKeys();
abstract function getKey();
abstract function getPreviousKeys();
```

## interface StringEncrypter
`Illuminate\Contracts\Encryption\StringEncrypter`

```php
abstract function decryptString($payload);
abstract function encryptString($value);
```

