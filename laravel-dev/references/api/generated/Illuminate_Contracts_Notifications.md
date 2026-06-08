# Illuminate\Contracts\Notifications

Version: 13.14.0

## interface Dispatcher
`Illuminate\Contracts\Notifications\Dispatcher`

```php
abstract function send($notifiables, $notification);
abstract function sendNow($notifiables, $notification, ?array $channels = null);
```

## interface Factory
`Illuminate\Contracts\Notifications\Factory`

```php
abstract function channel($name = null);
abstract function send($notifiables, $notification);
abstract function sendNow($notifiables, $notification);
```

