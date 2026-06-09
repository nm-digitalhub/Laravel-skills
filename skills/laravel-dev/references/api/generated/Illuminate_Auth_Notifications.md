# Illuminate\Auth\Notifications

Version: 13.14.0

## class ResetPassword
`Illuminate\Auth\Notifications\ResetPassword` extends Illuminate\Notifications\Notification

```php
function __construct($token);
function __serialize();
function __unserialize(array $values);
function broadcastOn();
function locale($locale);
function restoreModel($value);
function toMail($notifiable);
function via($notifiable);
static function createUrlUsing($callback);
static function toMailUsing($callback);
```

## class VerifyEmail
`Illuminate\Auth\Notifications\VerifyEmail` extends Illuminate\Notifications\Notification

```php
function __serialize();
function __unserialize(array $values);
function broadcastOn();
function locale($locale);
function restoreModel($value);
function toMail($notifiable);
function via($notifiable);
static function createUrlUsing($callback);
static function toMailUsing($callback);
```

