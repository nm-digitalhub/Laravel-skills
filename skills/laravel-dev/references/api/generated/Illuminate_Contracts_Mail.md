# Illuminate\Contracts\Mail

Version: 13.14.0

## interface Attachable
`Illuminate\Contracts\Mail\Attachable`

```php
abstract function toMailAttachment();
```

## interface Factory
`Illuminate\Contracts\Mail\Factory`

```php
abstract function mailer($name = null);
```

## interface MailQueue
`Illuminate\Contracts\Mail\MailQueue`

```php
abstract function later($delay, $view, $queue = null);
abstract function queue($view, $queue = null);
```

## interface Mailable
`Illuminate\Contracts\Mail\Mailable`

```php
abstract function bcc($address, $name = null);
abstract function cc($address, $name = null);
abstract function later($delay, Illuminate\Contracts\Queue\Factory $queue);
abstract function locale($locale);
abstract function mailer($mailer);
abstract function queue(Illuminate\Contracts\Queue\Factory $queue);
abstract function send($mailer);
abstract function to($address, $name = null);
```

## interface Mailer
`Illuminate\Contracts\Mail\Mailer`

```php
abstract function bcc($users);
abstract function cc($users);
abstract function raw($text, $callback);
abstract function send($view, array $data = [], $callback = null);
abstract function sendNow($mailable, array $data = [], $callback = null);
abstract function to($users);
```

