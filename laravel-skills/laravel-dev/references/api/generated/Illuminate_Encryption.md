# Illuminate\Encryption

Version: 13.14.0

## class Encrypter
`Illuminate\Encryption\Encrypter` implements Illuminate\Contracts\Encryption\Encrypter, Illuminate\Contracts\Encryption\StringEncrypter

```php
function __construct($key, $cipher = 'aes-128-cbc');
function decrypt($payload, $unserialize = true);
function decryptString($payload);
function encrypt($value, $serialize = true);
function encryptString($value);
function getAllKeys();
function getKey();
function getPreviousKeys();
function previousKeys(array $keys);
static function appearsEncrypted($value);
static function generateKey($cipher);
static function supported($key, $cipher);
```

## class EncryptionServiceProvider
`Illuminate\Encryption\EncryptionServiceProvider` extends Illuminate\Support\ServiceProvider

```php
function __construct($app);
function booted(Closure $callback);
function booting(Closure $callback);
function callBootedCallbacks();
function callBootingCallbacks();
function commands($commands);
function isDeferred();
function provides();
function register();
function when();
static function addProviderToBootstrapFile(string $provider, ?string $path = null);
static function defaultProviders();
static function pathsToPublish($provider = null, $group = null);
static function publishableGroups();
static function publishableMigrationPaths();
static function publishableProviders();
static function removeProviderFromBootstrapFile(array|string $providersToRemove, ?string $path = null, bool $strict = false);
```

## class MissingAppKeyException
`Illuminate\Encryption\MissingAppKeyException` extends RuntimeException implements Stringable, Throwable

```php
final function getCode();
final function getFile(): string;
final function getLine(): int;
final function getMessage(): string;
final function getPrevious(): ?Throwable;
final function getTrace(): array;
final function getTraceAsString(): string;
function __construct($message = 'No application en...');
function __toString(): string;
function __wakeup();
```

