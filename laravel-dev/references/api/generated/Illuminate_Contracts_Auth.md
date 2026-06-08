# Illuminate\Contracts\Auth

Version: 13.14.0

## interface Authenticatable
`Illuminate\Contracts\Auth\Authenticatable`

```php
abstract function getAuthIdentifier();
abstract function getAuthIdentifierName();
abstract function getAuthPassword();
abstract function getAuthPasswordName();
abstract function getRememberToken();
abstract function getRememberTokenName();
abstract function setRememberToken($value);
```

## interface CanResetPassword
`Illuminate\Contracts\Auth\CanResetPassword`

```php
abstract function getEmailForPasswordReset();
abstract function sendPasswordResetNotification($token);
```

## interface Factory
`Illuminate\Contracts\Auth\Factory`

```php
abstract function guard($name = null);
abstract function shouldUse($name);
```

## interface Guard
`Illuminate\Contracts\Auth\Guard`

```php
abstract function check();
abstract function guest();
abstract function hasUser();
abstract function id();
abstract function setUser(Illuminate\Contracts\Auth\Authenticatable $user);
abstract function user();
abstract function validate(array $credentials = []);
```

## interface MustVerifyEmail
`Illuminate\Contracts\Auth\MustVerifyEmail`

```php
abstract function getEmailForVerification();
abstract function hasVerifiedEmail();
abstract function markEmailAsUnverified();
abstract function markEmailAsVerified();
abstract function sendEmailVerificationNotification();
```

## interface PasswordBroker
`Illuminate\Contracts\Auth\PasswordBroker`

```php
abstract function reset(array $credentials, Closure $callback);
abstract function sendResetLink(array $credentials, ?Closure $callback = null);
```

## interface PasswordBrokerFactory
`Illuminate\Contracts\Auth\PasswordBrokerFactory`

```php
abstract function broker($name = null);
```

## interface StatefulGuard
`Illuminate\Contracts\Auth\StatefulGuard` implements Illuminate\Contracts\Auth\Guard

```php
abstract function attempt(array $credentials = [], $remember = false);
abstract function check();
abstract function guest();
abstract function hasUser();
abstract function id();
abstract function login(Illuminate\Contracts\Auth\Authenticatable $user, $remember = false);
abstract function loginUsingId($id, $remember = false);
abstract function logout();
abstract function once(array $credentials = []);
abstract function onceUsingId($id);
abstract function setUser(Illuminate\Contracts\Auth\Authenticatable $user);
abstract function user();
abstract function validate(array $credentials = []);
abstract function viaRemember();
```

## interface SupportsBasicAuth
`Illuminate\Contracts\Auth\SupportsBasicAuth`

```php
abstract function basic($field = 'email', $extraConditions = []);
abstract function onceBasic($field = 'email', $extraConditions = []);
```

## interface UserProvider
`Illuminate\Contracts\Auth\UserProvider`

```php
abstract function rehashPasswordIfRequired(Illuminate\Contracts\Auth\Authenticatable $user, array $credentials, bool $force = false);
abstract function retrieveByCredentials(array $credentials);
abstract function retrieveById($identifier);
abstract function retrieveByToken($identifier, $token);
abstract function updateRememberToken(Illuminate\Contracts\Auth\Authenticatable $user, $token);
abstract function validateCredentials(Illuminate\Contracts\Auth\Authenticatable $user, array $credentials);
```

