# Illuminate\Notifications\Channels

Version: 13.14.0

## class BroadcastChannel
`Illuminate\Notifications\Channels\BroadcastChannel`

```php
function __construct(Illuminate\Contracts\Events\Dispatcher $events);
function send($notifiable, Illuminate\Notifications\Notification $notification);
```

## class DatabaseChannel
`Illuminate\Notifications\Channels\DatabaseChannel`

```php
function send($notifiable, Illuminate\Notifications\Notification $notification);
```

## class MailChannel
`Illuminate\Notifications\Channels\MailChannel`

```php
function __construct(Illuminate\Contracts\Mail\Factory $mailer, Illuminate\Mail\Markdown $markdown);
function send($notifiable, Illuminate\Notifications\Notification $notification);
```

