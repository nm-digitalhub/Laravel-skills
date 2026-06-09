# Illuminate\Auth\Events

Version: 13.14.0

## class Attempting
`Illuminate\Auth\Events\Attempting`

```php
function __construct($guard, $credentials, $remember);
```

## class Authenticated
`Illuminate\Auth\Events\Authenticated`

```php
function __construct($guard, $user);
function __serialize();
function __unserialize(array $values);
function restoreModel($value);
```

## class CurrentDeviceLogout
`Illuminate\Auth\Events\CurrentDeviceLogout`

```php
function __construct($guard, $user);
function __serialize();
function __unserialize(array $values);
function restoreModel($value);
```

## class Failed
`Illuminate\Auth\Events\Failed`

```php
function __construct($guard, $user, $credentials);
```

## class Lockout
`Illuminate\Auth\Events\Lockout`

```php
function __construct(Illuminate\Http\Request $request);
```

## class Login
`Illuminate\Auth\Events\Login`

```php
function __construct($guard, $user, $remember);
function __serialize();
function __unserialize(array $values);
function restoreModel($value);
```

## class Logout
`Illuminate\Auth\Events\Logout`

```php
function __construct($guard, $user);
function __serialize();
function __unserialize(array $values);
function restoreModel($value);
```

## class OtherDeviceLogout
`Illuminate\Auth\Events\OtherDeviceLogout`

```php
function __construct($guard, $user);
function __serialize();
function __unserialize(array $values);
function restoreModel($value);
```

## class PasswordReset
`Illuminate\Auth\Events\PasswordReset`

```php
function __construct($user);
function __serialize();
function __unserialize(array $values);
function restoreModel($value);
```

## class PasswordResetLinkSent
`Illuminate\Auth\Events\PasswordResetLinkSent`

```php
function __construct($user);
function __serialize();
function __unserialize(array $values);
function restoreModel($value);
```

## class Registered
`Illuminate\Auth\Events\Registered`

```php
function __construct($user);
function __serialize();
function __unserialize(array $values);
function restoreModel($value);
```

## class Validated
`Illuminate\Auth\Events\Validated`

```php
function __construct($guard, $user);
function __serialize();
function __unserialize(array $values);
function restoreModel($value);
```

## class Verified
`Illuminate\Auth\Events\Verified`

```php
function __construct($user);
function __serialize();
function __unserialize(array $values);
function restoreModel($value);
```

