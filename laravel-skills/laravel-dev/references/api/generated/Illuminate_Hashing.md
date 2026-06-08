# Illuminate\Hashing

Version: 13.14.0

## class AbstractHasher
`Illuminate\Hashing\AbstractHasher`

```php
function check($value, $hashedValue, array $options = []);
function info($hashedValue);
```

## class Argon2IdHasher
`Illuminate\Hashing\Argon2IdHasher` extends Illuminate\Hashing\ArgonHasher implements Illuminate\Contracts\Hashing\Hasher

```php
function __construct(array $options = []);
function check($value, $hashedValue, array $options = []);
function info($hashedValue);
function make($value, array $options = []);
function needsRehash($hashedValue, array $options = []);
function setMemory(int $memory);
function setThreads(int $threads);
function setTime(int $time);
function verifyConfiguration($value);
```

## class ArgonHasher
`Illuminate\Hashing\ArgonHasher` extends Illuminate\Hashing\AbstractHasher implements Illuminate\Contracts\Hashing\Hasher

```php
function __construct(array $options = []);
function check($value, $hashedValue, array $options = []);
function info($hashedValue);
function make($value, array $options = []);
function needsRehash($hashedValue, array $options = []);
function setMemory(int $memory);
function setThreads(int $threads);
function setTime(int $time);
function verifyConfiguration($value);
```

## class BcryptHasher
`Illuminate\Hashing\BcryptHasher` extends Illuminate\Hashing\AbstractHasher implements Illuminate\Contracts\Hashing\Hasher

```php
function __construct(array $options = []);
function check($value, $hashedValue, array $options = []);
function info($hashedValue);
function make($value, array $options = []);
function needsRehash($hashedValue, array $options = []);
function setRounds($rounds);
function verifyConfiguration($value);
```

## class HashManager
`Illuminate\Hashing\HashManager` extends Illuminate\Support\Manager implements Illuminate\Contracts\Hashing\Hasher

```php
function __call($method, $parameters);
function __construct(Illuminate\Contracts\Container\Container $container);
function check($value, $hashedValue, array $options = []);
function createArgon2idDriver();
function createArgonDriver();
function createBcryptDriver();
function driver($driver = null);
function extend($driver, Closure $callback);
function forgetDrivers();
function getContainer();
function getDefaultDriver();
function getDrivers();
function info($hashedValue);
function isHashed($value);
function make($value, array $options = []);
function needsRehash($hashedValue, array $options = []);
function setContainer(Illuminate\Contracts\Container\Container $container);
function verifyConfiguration($value);
```

## class HashServiceProvider
`Illuminate\Hashing\HashServiceProvider` extends Illuminate\Support\ServiceProvider implements Illuminate\Contracts\Support\DeferrableProvider

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

