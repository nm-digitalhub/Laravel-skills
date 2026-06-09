# Illuminate\Mail\Transport

Version: 13.14.0

## class ArrayTransport
`Illuminate\Mail\Transport\ArrayTransport` implements Stringable, Symfony\Component\Mailer\Transport\TransportInterface

```php
function __construct();
function __toString(): string;
function flush();
function messages();
function send(Symfony\Component\Mime\RawMessage $message, ?Symfony\Component\Mailer\Envelope $envelope = null): ?Symfony\Component\Mailer\SentMessage;
```

## class CloudflareTransport
`Illuminate\Mail\Transport\CloudflareTransport` extends Symfony\Component\Mailer\Transport\AbstractTransport implements Symfony\Component\Mailer\Transport\TransportInterface, Stringable

```php
function __construct(string $accountId, string $key, ?Symfony\Contracts\HttpClient\HttpClientInterface $client = null);
function __toString(): string;
function send(Symfony\Component\Mime\RawMessage $message, ?Symfony\Component\Mailer\Envelope $envelope = null): ?Symfony\Component\Mailer\SentMessage;
function setMaxPerSecond(float $rate): static;
```

## class LogTransport
`Illuminate\Mail\Transport\LogTransport` implements Stringable, Symfony\Component\Mailer\Transport\TransportInterface

```php
function __construct(Psr\Log\LoggerInterface $logger);
function __toString(): string;
function logger();
function send(Symfony\Component\Mime\RawMessage $message, ?Symfony\Component\Mailer\Envelope $envelope = null): ?Symfony\Component\Mailer\SentMessage;
```

## class ResendTransport
`Illuminate\Mail\Transport\ResendTransport` extends Symfony\Component\Mailer\Transport\AbstractTransport implements Symfony\Component\Mailer\Transport\TransportInterface, Stringable

```php
function __construct(Resend\Contracts\Client $resend);
function __toString(): string;
function send(Symfony\Component\Mime\RawMessage $message, ?Symfony\Component\Mailer\Envelope $envelope = null): ?Symfony\Component\Mailer\SentMessage;
function setMaxPerSecond(float $rate): static;
```

## class SesTransport
`Illuminate\Mail\Transport\SesTransport` extends Symfony\Component\Mailer\Transport\AbstractTransport implements Symfony\Component\Mailer\Transport\TransportInterface, Stringable

```php
function __construct(Aws\Ses\SesClient $ses, $options = []);
function __toString(): string;
function getOptions();
function send(Symfony\Component\Mime\RawMessage $message, ?Symfony\Component\Mailer\Envelope $envelope = null): ?Symfony\Component\Mailer\SentMessage;
function ses();
function setMaxPerSecond(float $rate): static;
function setOptions(array $options);
```

## class SesV2Transport
`Illuminate\Mail\Transport\SesV2Transport` extends Symfony\Component\Mailer\Transport\AbstractTransport implements Symfony\Component\Mailer\Transport\TransportInterface, Stringable

```php
function __construct(Aws\SesV2\SesV2Client $ses, $options = []);
function __toString(): string;
function getOptions();
function send(Symfony\Component\Mime\RawMessage $message, ?Symfony\Component\Mailer\Envelope $envelope = null): ?Symfony\Component\Mailer\SentMessage;
function ses();
function setMaxPerSecond(float $rate): static;
function setOptions(array $options);
```

