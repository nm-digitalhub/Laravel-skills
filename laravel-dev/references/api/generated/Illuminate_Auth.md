# Illuminate\Auth

Version: 13.14.0

## class AuthManager
`Illuminate\Auth\AuthManager` implements Illuminate\Contracts\Auth\Factory

```php
function __call($method, $parameters);
function __construct($app);
function createSessionDriver($name, $config);
function createTokenDriver($name, $config);
function createUserProvider($provider = null);
function extend($driver, Closure $callback);
function forgetGuards();
function getDefaultDriver();
function getDefaultUserProvider();
function guard($name = null);
function hasResolvedGuards();
function provider($name, Closure $callback);
function resolveUsersUsing(Closure $userResolver);
function setApplication($app);
function setDefaultDriver($name);
function shouldUse($name);
function userResolver();
function viaRequest($driver, callable $callback);
```

## class AuthServiceProvider
`Illuminate\Auth\AuthServiceProvider` extends Illuminate\Support\ServiceProvider

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

## trait Authenticatable
`Illuminate\Auth\Authenticatable`

```php
function getAuthIdentifier();
function getAuthIdentifierForBroadcasting();
function getAuthIdentifierName();
function getAuthPassword();
function getAuthPasswordName();
function getRememberToken();
function getRememberTokenName();
function setRememberToken($value);
```

## class AuthenticationException
`Illuminate\Auth\AuthenticationException` extends Exception implements Throwable, Stringable

```php
final function getCode();
final function getFile(): string;
final function getLine(): int;
final function getMessage(): string;
final function getPrevious(): ?Throwable;
final function getTrace(): array;
final function getTraceAsString(): string;
function __construct($message = 'Unauthenticated.', array $guards = [], $redirectTo = null);
function __toString(): string;
function __wakeup();
function guards();
function redirectTo(Illuminate\Http\Request $request);
static function redirectUsing(callable $redirectToCallback);
```

## trait CreatesUserProviders
`Illuminate\Auth\CreatesUserProviders`

```php
function createUserProvider($provider = null);
function getDefaultUserProvider();
```

## class DatabaseUserProvider
`Illuminate\Auth\DatabaseUserProvider` implements Illuminate\Contracts\Auth\UserProvider

```php
function __construct(Illuminate\Database\ConnectionInterface $connection, Illuminate\Contracts\Hashing\Hasher $hasher, $table);
function rehashPasswordIfRequired(Illuminate\Contracts\Auth\Authenticatable $user, array $credentials, bool $force = false);
function retrieveByCredentials(array $credentials);
function retrieveById($identifier);
function retrieveByToken($identifier, $token);
function updateRememberToken(Illuminate\Contracts\Auth\Authenticatable $user, $token);
function validateCredentials(Illuminate\Contracts\Auth\Authenticatable $user, array $credentials);
```

## class EloquentUserProvider
`Illuminate\Auth\EloquentUserProvider` implements Illuminate\Contracts\Auth\UserProvider

```php
function __construct(Illuminate\Contracts\Hashing\Hasher $hasher, $model);
function createModel();
function getHasher();
function getModel();
function getQueryCallback();
function rehashPasswordIfRequired(Illuminate\Contracts\Auth\Authenticatable $user, array $credentials, bool $force = false);
function retrieveByCredentials(array $credentials);
function retrieveById($identifier);
function retrieveByToken($identifier, $token);
function setHasher(Illuminate\Contracts\Hashing\Hasher $hasher);
function setModel($model);
function updateRememberToken(Illuminate\Contracts\Auth\Authenticatable $user, $token);
function validateCredentials(Illuminate\Contracts\Auth\Authenticatable $user, array $credentials);
function withQuery($queryCallback = null);
```

## class GenericUser
`Illuminate\Auth\GenericUser` implements Illuminate\Contracts\Auth\Authenticatable

```php
function __construct(array $attributes);
function __get($key);
function __isset($key);
function __set($key, $value);
function __unset($key);
function getAuthIdentifier();
function getAuthIdentifierName();
function getAuthPassword();
function getAuthPasswordName();
function getRememberToken();
function getRememberTokenName();
function setRememberToken($value);
```

## trait GuardHelpers
`Illuminate\Auth\GuardHelpers`

```php
function authenticate();
function check();
function forgetUser();
function getProvider();
function guest();
function hasUser();
function id();
function setProvider(Illuminate\Contracts\Auth\UserProvider $provider);
function setUser(Illuminate\Contracts\Auth\Authenticatable $user);
```

## trait MustVerifyEmail
`Illuminate\Auth\MustVerifyEmail`

```php
function getEmailForVerification();
function hasVerifiedEmail();
function markEmailAsUnverified();
function markEmailAsVerified();
function sendEmailVerificationNotification();
```

## class Recaller
`Illuminate\Auth\Recaller`

```php
function __construct($recaller);
function hash();
function id();
function segments();
function token();
function valid();
```

## class RequestGuard
`Illuminate\Auth\RequestGuard` implements Illuminate\Contracts\Auth\Guard

```php
function __call($method, $parameters);
function __construct(callable $callback, Illuminate\Http\Request $request, ?Illuminate\Contracts\Auth\UserProvider $provider = null);
function authenticate();
function check();
function forgetUser();
function getProvider();
function guest();
function hasUser();
function id();
function setProvider(Illuminate\Contracts\Auth\UserProvider $provider);
function setRequest(Illuminate\Http\Request $request);
function setUser(Illuminate\Contracts\Auth\Authenticatable $user);
function user();
function validate(array $credentials = []);
static function __callStatic($method, $parameters);
static function flushMacros();
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
```

## class SessionGuard
`Illuminate\Auth\SessionGuard` implements Illuminate\Contracts\Auth\StatefulGuard, Illuminate\Contracts\Auth\SupportsBasicAuth, Illuminate\Contracts\Auth\Guard

```php
function __call($method, $parameters);
function __construct($name, Illuminate\Contracts\Auth\UserProvider $provider, Illuminate\Contracts\Session\Session $session, ?Symfony\Component\HttpFoundation\Request $request = null, ?Illuminate\Support\Timebox $timebox = null, bool $rehashOnLogin = true, int $timeboxDuration = 200000, ?string $hashKey = null);
function attempt(array $credentials = [], $remember = false);
function attemptWhen(array $credentials = [], $callbacks = null, $remember = false);
function attempting($callback);
function authenticate();
function basic($field = 'email', $extraConditions = []);
function check();
function forgetUser();
function getCookieJar();
function getDispatcher();
function getLastAttempted();
function getName();
function getProvider();
function getRecallerName();
function getRequest();
function getSession();
function getTimebox();
function getUser();
function guest();
function hasUser();
function hashPasswordForCookie($passwordHash);
function id();
function login(Illuminate\Contracts\Auth\Authenticatable $user, $remember = false);
function loginUsingId($id, $remember = false);
function logout();
function logoutCurrentDevice();
function logoutOtherDevices($password);
function once(array $credentials = []);
function onceBasic($field = 'email', $extraConditions = []);
function onceUsingId($id);
function setCookieJar(Illuminate\Contracts\Cookie\QueueingFactory $cookie);
function setDispatcher(Illuminate\Contracts\Events\Dispatcher $events);
function setProvider(Illuminate\Contracts\Auth\UserProvider $provider);
function setRememberDuration($minutes);
function setRequest(Symfony\Component\HttpFoundation\Request $request);
function setUser(Illuminate\Contracts\Auth\Authenticatable $user);
function user();
function validate(array $credentials = []);
function viaRemember();
static function __callStatic($method, $parameters);
static function flushMacros();
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
```

## class TokenGuard
`Illuminate\Auth\TokenGuard` implements Illuminate\Contracts\Auth\Guard

```php
function __call($method, $parameters);
function __construct(Illuminate\Contracts\Auth\UserProvider $provider, Illuminate\Http\Request $request, $inputKey = 'api_token', $storageKey = 'api_token', $hash = false);
function authenticate();
function check();
function forgetUser();
function getProvider();
function getTokenForRequest();
function guest();
function hasUser();
function id();
function setProvider(Illuminate\Contracts\Auth\UserProvider $provider);
function setRequest(Illuminate\Http\Request $request);
function setUser(Illuminate\Contracts\Auth\Authenticatable $user);
function user();
function validate(array $credentials = []);
static function __callStatic($method, $parameters);
static function flushMacros();
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
```

