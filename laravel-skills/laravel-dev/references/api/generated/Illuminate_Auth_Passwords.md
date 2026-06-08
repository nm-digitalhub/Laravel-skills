# Illuminate\Auth\Passwords

Version: 13.14.0

## class CacheTokenRepository
`Illuminate\Auth\Passwords\CacheTokenRepository` implements Illuminate\Auth\Passwords\TokenRepositoryInterface

```php
function __construct(Illuminate\Cache\Repository $cache, Illuminate\Contracts\Hashing\Hasher $hasher, string $hashKey, int $expires = 3600, int $throttle = 60);
function cacheKey(Illuminate\Contracts\Auth\CanResetPassword $user): string;
function create(Illuminate\Contracts\Auth\CanResetPassword $user);
function delete(Illuminate\Contracts\Auth\CanResetPassword $user);
function deleteExpired();
function exists(Illuminate\Contracts\Auth\CanResetPassword $user, $token);
function recentlyCreatedToken(Illuminate\Contracts\Auth\CanResetPassword $user);
```

## trait CanResetPassword
`Illuminate\Auth\Passwords\CanResetPassword`

```php
function getEmailForPasswordReset();
function sendPasswordResetNotification($token);
```

## class DatabaseTokenRepository
`Illuminate\Auth\Passwords\DatabaseTokenRepository` implements Illuminate\Auth\Passwords\TokenRepositoryInterface

```php
function __construct(Illuminate\Database\ConnectionInterface $connection, Illuminate\Contracts\Hashing\Hasher $hasher, string $table, string $hashKey, int $expires = 3600, int $throttle = 60);
function create(Illuminate\Contracts\Auth\CanResetPassword $user);
function createNewToken();
function delete(Illuminate\Contracts\Auth\CanResetPassword $user);
function deleteExpired();
function exists(Illuminate\Contracts\Auth\CanResetPassword $user, $token);
function getConnection();
function getHasher();
function recentlyCreatedToken(Illuminate\Contracts\Auth\CanResetPassword $user);
```

## class PasswordBroker
`Illuminate\Auth\Passwords\PasswordBroker` implements Illuminate\Contracts\Auth\PasswordBroker

```php
function __construct(Illuminate\Auth\Passwords\TokenRepositoryInterface $tokens, Illuminate\Contracts\Auth\UserProvider $users, ?Illuminate\Contracts\Events\Dispatcher $dispatcher = null, ?Illuminate\Support\Timebox $timebox = null, int $timeboxDuration = 200000);
function createToken(Illuminate\Contracts\Auth\CanResetPassword $user);
function deleteToken(Illuminate\Contracts\Auth\CanResetPassword $user);
function getRepository();
function getTimebox();
function getUser(array $credentials);
function reset(array $credentials, Closure $callback);
function sendResetLink(array $credentials, ?Closure $callback = null);
function tokenExists(Illuminate\Contracts\Auth\CanResetPassword $user, $token);
```

## class PasswordBrokerManager
`Illuminate\Auth\Passwords\PasswordBrokerManager` implements Illuminate\Contracts\Auth\PasswordBrokerFactory

```php
function __call($method, $parameters);
function __construct($app);
function broker($name = null);
function getDefaultDriver();
function setDefaultDriver($name);
```

## class PasswordResetServiceProvider
`Illuminate\Auth\Passwords\PasswordResetServiceProvider` extends Illuminate\Support\ServiceProvider implements Illuminate\Contracts\Support\DeferrableProvider

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

## interface TokenRepositoryInterface
`Illuminate\Auth\Passwords\TokenRepositoryInterface`

```php
abstract function create(Illuminate\Contracts\Auth\CanResetPassword $user);
abstract function delete(Illuminate\Contracts\Auth\CanResetPassword $user);
abstract function deleteExpired();
abstract function exists(Illuminate\Contracts\Auth\CanResetPassword $user, $token);
abstract function recentlyCreatedToken(Illuminate\Contracts\Auth\CanResetPassword $user);
```

