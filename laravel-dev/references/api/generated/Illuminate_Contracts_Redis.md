# Illuminate\Contracts\Redis

Version: 13.14.0

## interface Connection
`Illuminate\Contracts\Redis\Connection`

```php
abstract function command($method, array $parameters = []);
abstract function psubscribe($channels, Closure $callback);
abstract function subscribe($channels, Closure $callback);
```

## interface Connector
`Illuminate\Contracts\Redis\Connector`

```php
abstract function connect(array $config, array $options);
abstract function connectToCluster(array $config, array $clusterOptions, array $options);
```

## interface Factory
`Illuminate\Contracts\Redis\Factory`

```php
abstract function connection($name = null);
```

## class LimiterTimeoutException
`Illuminate\Contracts\Redis\LimiterTimeoutException` extends Exception implements Throwable, Stringable

```php
final function getCode();
final function getFile(): string;
final function getLine(): int;
final function getMessage(): string;
final function getPrevious(): ?Throwable;
final function getTrace(): array;
final function getTraceAsString(): string;
function __construct(string $message = '', int $code = 0, ?Throwable $previous = null);
function __toString(): string;
function __wakeup();
```

