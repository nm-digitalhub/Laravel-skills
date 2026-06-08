# Illuminate\Mail\Events

Version: 13.14.0

## class MessageSending
`Illuminate\Mail\Events\MessageSending`

```php
function __construct(Symfony\Component\Mime\Email $message, array $data = []);
```

## class MessageSent
`Illuminate\Mail\Events\MessageSent`

```php
function __construct(Illuminate\Mail\SentMessage $sent, array $data = []);
function __get($key);
function __serialize();
function __unserialize(array $data);
```

