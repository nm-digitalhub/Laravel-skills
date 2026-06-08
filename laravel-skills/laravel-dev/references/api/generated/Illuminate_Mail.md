# Illuminate\Mail

Version: 13.14.0

## class Attachment
`Illuminate\Mail\Attachment`

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

## class MailManager
`Illuminate\Mail\MailManager` implements Illuminate\Contracts\Mail\Factory

```php
function __call($method, $parameters);
function __construct($app);
function build($config);
function createSymfonyTransport(array $config);
function driver($driver = null);
function extend($driver, Closure $callback);
function forgetMailers();
function getApplication();
function getDefaultDriver();
function mailer($name = null);
function purge($name = null);
function setApplication($app);
function setDefaultDriver($name);
```

## class MailServiceProvider
`Illuminate\Mail\MailServiceProvider` extends Illuminate\Support\ServiceProvider implements Illuminate\Contracts\Support\DeferrableProvider

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

## class Mailable
`Illuminate\Mail\Mailable` implements Illuminate\Contracts\Mail\Mailable, Illuminate\Contracts\Support\Renderable

```php
function __call($method, $parameters);
function assertDontSeeInHtml($string, $escape = true);
function assertDontSeeInText($string);
function assertFrom($address, $name = null);
function assertHasAttachedData($data, $name, array $options = []);
function assertHasAttachment($file, array $options = []);
function assertHasAttachmentFromStorage($path, $name = null, array $options = []);
function assertHasAttachmentFromStorageDisk($disk, $path, $name = null, array $options = []);
function assertHasBcc($address, $name = null);
function assertHasCc($address, $name = null);
function assertHasMetadata($key, $value);
function assertHasNoAttachments();
function assertHasReplyTo($address, $name = null);
function assertHasSubject($subject);
function assertHasTag($tag);
function assertHasTo($address, $name = null);
function assertSeeInHtml($string, $escape = true);
function assertSeeInOrderInHtml($strings, $escape = true);
function assertSeeInOrderInText($strings);
function assertSeeInText($string);
function assertTo($address, $name = null);
function attach($file, array $options = []);
function attachData($data, $name, array $options = []);
function attachFromStorage($path, $name = null, array $options = []);
function attachFromStorageDisk($disk, $path, $name = null, array $options = []);
function attachMany($files);
function bcc($address, $name = null);
function buildViewData();
function cc($address, $name = null);
function from($address, $name = null);
function hasAttachedData($data, $name, array $options = []);
function hasAttachment($file, array $options = []);
function hasAttachmentFromStorage($path, $name = null, array $options = []);
function hasAttachmentFromStorageDisk($disk, $path, $name = null, array $options = []);
function hasBcc($address, $name = null);
function hasCc($address, $name = null);
function hasFrom($address, $name = null);
function hasMetadata($key, $value);
function hasReplyTo($address, $name = null);
function hasSubject($subject);
function hasTag($value);
function hasTo($address, $name = null);
function html($html);
function later($delay, Illuminate\Contracts\Queue\Factory $queue);
function locale($locale);
function macroCall($method, $parameters);
function mailer($mailer);
function markdown($view, array $data = []);
function metadata($key, $value = null);
function priority($level = 3);
function queue(Illuminate\Contracts\Queue\Factory $queue);
function render();
function replyTo($address, $name = null);
function send($mailer);
function subject($subject);
function tag($value);
function tap($callback = null);
function text($textView, array $data = []);
function to($address, $name = null);
function unless($value = null, ?callable $callback = null, ?callable $default = null);
function usesMailer($mailer);
function view($view, array $data = []);
function when($value = null, ?callable $callback = null, ?callable $default = null);
function with($key, $value = null);
function withLocale($locale, $callback);
function withSymfonyMessage($callback);
static function __callStatic($method, $parameters);
static function buildViewDataUsing(callable $callback);
static function flushMacros();
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
```

## class Mailer
`Illuminate\Mail\Mailer` implements Illuminate\Contracts\Mail\Mailer, Illuminate\Contracts\Mail\MailQueue

```php
function __call($method, $parameters);
function __construct(string $name, Illuminate\Contracts\View\Factory $views, Symfony\Component\Mailer\Transport\TransportInterface $transport, ?Illuminate\Contracts\Events\Dispatcher $events = null);
function alwaysFrom($address, $name = null);
function alwaysReplyTo($address, $name = null);
function alwaysReturnPath($address);
function alwaysTo($address, $name = null);
function bcc($users, $name = null);
function cc($users, $name = null);
function getSymfonyTransport();
function getViewFactory();
function html($html, $callback);
function later($delay, $view, $queue = null);
function laterOn($queue, $delay, $view);
function onQueue($queue, $view);
function plain($view, array $data, $callback);
function queue($view, $queue = null);
function queueOn($queue, $view);
function raw($text, $callback);
function render($view, array $data = []);
function send($view, array $data = [], $callback = null);
function sendNow($mailable, array $data = [], $callback = null);
function setQueue(Illuminate\Contracts\Queue\Factory $queue);
function setSymfonyTransport(Symfony\Component\Mailer\Transport\TransportInterface $transport);
function to($users, $name = null);
static function __callStatic($method, $parameters);
static function flushMacros();
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
```

## class Markdown
`Illuminate\Mail\Markdown`

```php
function __construct(Illuminate\Contracts\View\Factory $view, array $options = []);
function getTheme();
function htmlComponentPaths();
function loadComponentsFrom(array $paths = []);
function render($view, array $data = [], $inliner = null);
function renderText($view, array $data = []);
function textComponentPaths();
function theme($theme);
static function converter(array $config = []);
static function flushState();
static function parse($text, bool $encoded = false);
static function withSecuredEncoding();
static function withoutSecuredEncoding();
```

## class Message
`Illuminate\Mail\Message`

```php
function __call($method, $parameters);
function __construct(Symfony\Component\Mime\Email $message);
function attach($file, array $options = []);
function attachData($data, $name, array $options = []);
function bcc($address, $name = null, $override = false);
function cc($address, $name = null, $override = false);
function embed($file);
function embedData($data, $name, $contentType = null);
function forgetBcc();
function forgetCc();
function forgetTo();
function from($address, $name = null);
function getSymfonyMessage();
function priority($level);
function replyTo($address, $name = null);
function returnPath($address);
function sender($address, $name = null);
function subject($subject);
function to($address, $name = null, $override = false);
```

## class PendingMail
`Illuminate\Mail\PendingMail`

```php
function __construct(Illuminate\Contracts\Mail\Mailer $mailer);
function bcc($users);
function cc($users);
function later($delay, Illuminate\Contracts\Mail\Mailable $mailable);
function locale($locale);
function queue(Illuminate\Contracts\Mail\Mailable $mailable);
function send(Illuminate\Contracts\Mail\Mailable $mailable);
function sendNow(Illuminate\Contracts\Mail\Mailable $mailable);
function to($users);
function unless($value = null, ?callable $callback = null, ?callable $default = null);
function when($value = null, ?callable $callback = null, ?callable $default = null);
```

## class SendQueuedMailable
`Illuminate\Mail\SendQueuedMailable`

```php
function __clone();
function __construct(Illuminate\Contracts\Mail\Mailable $mailable);
function afterCommit();
function allOnConnection($connection);
function allOnQueue($queue);
function appendToChain($job);
function assertDeleted();
function assertDoesntHaveChain();
function assertFailed();
function assertFailedWith($exception);
function assertHasChain($expectedChain);
function assertNotDeleted();
function assertNotFailed();
function assertNotReleased();
function assertReleased($delay = null);
function attempts();
function backoff();
function beforeCommit();
function chain($chain);
function delay($delay);
function delete();
function dispatchNextJobInChain();
function displayName();
function fail($exception = null);
function failed($e);
function handle(Illuminate\Contracts\Mail\Factory $factory);
function invokeChainCatchCallbacks($e);
function onConnection($connection);
function onGroup($group);
function onQueue($queue);
function prependToChain($job);
function release($delay = 0);
function retryUntil();
function setJob(Illuminate\Contracts\Queue\Job $job);
function through($middleware);
function withDeduplicator($deduplicator);
function withFakeQueueInteractions();
function withoutDelay();
```

## class SentMessage
`Illuminate\Mail\SentMessage`

```php
function __call($method, $parameters);
function __construct(Symfony\Component\Mailer\SentMessage $sentMessage);
function __serialize();
function __unserialize(array $data);
function getSymfonySentMessage();
```

## class TextMessage
`Illuminate\Mail\TextMessage`

```php
function __call($method, $parameters);
function __construct($message);
function embed($file);
function embedData($data, $name, $contentType = null);
```

