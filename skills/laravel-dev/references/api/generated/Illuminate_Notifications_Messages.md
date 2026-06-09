# Illuminate\Notifications\Messages

Version: 13.14.0

## class BroadcastMessage
`Illuminate\Notifications\Messages\BroadcastMessage`

```php
function __construct(array $data);
function afterCommit();
function allOnConnection($connection);
function allOnQueue($queue);
function appendToChain($job);
function assertDoesntHaveChain();
function assertHasChain($expectedChain);
function beforeCommit();
function chain($chain);
function data($data);
function delay($delay);
function dispatchNextJobInChain();
function invokeChainCatchCallbacks($e);
function onConnection($connection);
function onGroup($group);
function onQueue($queue);
function prependToChain($job);
function through($middleware);
function withDeduplicator($deduplicator);
function withoutDelay();
```

## class DatabaseMessage
`Illuminate\Notifications\Messages\DatabaseMessage`

```php
function __construct(array $data = []);
```

## class MailMessage
`Illuminate\Notifications\Messages\MailMessage` extends Illuminate\Notifications\Messages\SimpleMessage implements Illuminate\Contracts\Support\Renderable

```php
function action($text, $url);
function attach($file, array $options = []);
function attachData($data, $name, array $options = []);
function attachFromStorage($path, $name = null, array $options = []);
function attachFromStorageDisk($disk, $path, $name = null, array $options = []);
function attachMany($files);
function bcc($address, $name = null);
function cc($address, $name = null);
function data();
function error();
function from($address, $name = null);
function greeting($greeting);
function level($level);
function line($line);
function lineIf($boolean, $line);
function lines($lines);
function linesIf($boolean, $lines);
function mailer($mailer);
function markdown($view, array $data = []);
function metadata($key, $value);
function priority($level);
function render();
function replyTo($address, $name = null);
function salutation($salutation);
function subject($subject);
function success();
function tag($value);
function template($template);
function text($textView, array $data = []);
function theme($theme);
function toArray();
function unless($value = null, ?callable $callback = null, ?callable $default = null);
function view($view, array $data = []);
function when($value = null, ?callable $callback = null, ?callable $default = null);
function with($line);
function withSymfonyMessage($callback);
```

## class SimpleMessage
`Illuminate\Notifications\Messages\SimpleMessage`

```php
function action($text, $url);
function error();
function greeting($greeting);
function level($level);
function line($line);
function lineIf($boolean, $line);
function lines($lines);
function linesIf($boolean, $lines);
function mailer($mailer);
function salutation($salutation);
function subject($subject);
function success();
function toArray();
function with($line);
```

