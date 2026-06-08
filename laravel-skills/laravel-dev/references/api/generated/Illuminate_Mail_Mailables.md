# Illuminate\Mail\Mailables

Version: 13.14.0

## class Address
`Illuminate\Mail\Mailables\Address`

```php
function __construct(string $address, ?string $name = null);
```

## class Attachment
`Illuminate\Mail\Mailables\Attachment` extends Illuminate\Mail\Attachment

```php
function __call($method, $parameters);
function as($name);
function attachTo($mail, $options = []);
function attachWith(Closure $pathStrategy, Closure $dataStrategy);
function isEquivalent(Illuminate\Mail\Attachment $attachment, $options = []);
function withMime($mime);
static function __callStatic($method, $parameters);
static function flushMacros();
static function fromCloudStorage($path);
static function fromData(Closure $data, $name = null);
static function fromPath($path);
static function fromStorage($path);
static function fromStorageDisk($disk, $path);
static function fromUploadedFile(Illuminate\Http\UploadedFile $file);
static function fromUrl($url);
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
```

## class Content
`Illuminate\Mail\Mailables\Content`

```php
function __construct(?string $view = null, ?string $html = null, ?string $text = null, $markdown = null, array $with = [], ?string $htmlString = null);
function html(string $view);
function htmlString(string $html);
function markdown(string $view);
function text(string $view);
function unless($value = null, ?callable $callback = null, ?callable $default = null);
function view(string $view);
function when($value = null, ?callable $callback = null, ?callable $default = null);
function with($key, $value = null);
```

## class Envelope
`Illuminate\Mail\Mailables\Envelope`

```php
function __construct(Illuminate\Mail\Mailables\Address|string|null $from = null, $to = [], $cc = [], $bcc = [], $replyTo = [], ?string $subject = null, array $tags = [], array $metadata = [], Closure|array $using = []);
function bcc(Illuminate\Mail\Mailables\Address|array|string $address, $name = null);
function cc(Illuminate\Mail\Mailables\Address|array|string $address, $name = null);
function from(Illuminate\Mail\Mailables\Address|string $address, $name = null);
function hasBcc(string $address, ?string $name = null);
function hasCc(string $address, ?string $name = null);
function hasMetadata(string $key, string $value);
function hasReplyTo(string $address, ?string $name = null);
function hasSubject(string $subject);
function hasTo(string $address, ?string $name = null);
function isFrom(string $address, ?string $name = null);
function metadata(string $key, string|int $value);
function replyTo(Illuminate\Mail\Mailables\Address|array|string $address, $name = null);
function subject(string $subject);
function tag(string $tag);
function tags(array $tags);
function to(Illuminate\Mail\Mailables\Address|array|string $address, $name = null);
function unless($value = null, ?callable $callback = null, ?callable $default = null);
function using(Closure $callback);
function when($value = null, ?callable $callback = null, ?callable $default = null);
```

## class Headers
`Illuminate\Mail\Mailables\Headers`

```php
function __construct(?string $messageId = null, array $references = [], array $text = []);
function messageId(string $messageId);
function references(array $references);
function referencesString(): string;
function text(array $text);
function unless($value = null, ?callable $callback = null, ?callable $default = null);
function when($value = null, ?callable $callback = null, ?callable $default = null);
```

