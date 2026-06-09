# Illuminate\Queue\Connectors

Version: 13.14.0

## class BackgroundConnector
`Illuminate\Queue\Connectors\BackgroundConnector` implements Illuminate\Queue\Connectors\ConnectorInterface

```php
function connect(array $config);
```

## class BeanstalkdConnector
`Illuminate\Queue\Connectors\BeanstalkdConnector` implements Illuminate\Queue\Connectors\ConnectorInterface

```php
function connect(array $config);
```

## interface ConnectorInterface
`Illuminate\Queue\Connectors\ConnectorInterface`

```php
abstract function connect(array $config);
```

## class DatabaseConnector
`Illuminate\Queue\Connectors\DatabaseConnector` implements Illuminate\Queue\Connectors\ConnectorInterface

```php
function __construct(Illuminate\Database\ConnectionResolverInterface $connections);
function connect(array $config);
```

## class DeferredConnector
`Illuminate\Queue\Connectors\DeferredConnector` implements Illuminate\Queue\Connectors\ConnectorInterface

```php
function connect(array $config);
```

## class FailoverConnector
`Illuminate\Queue\Connectors\FailoverConnector` implements Illuminate\Queue\Connectors\ConnectorInterface

```php
function __construct(Illuminate\Queue\QueueManager $manager, Illuminate\Contracts\Events\Dispatcher $events);
function connect(array $config);
```

## class NullConnector
`Illuminate\Queue\Connectors\NullConnector` implements Illuminate\Queue\Connectors\ConnectorInterface

```php
function connect(array $config);
```

## class RedisConnector
`Illuminate\Queue\Connectors\RedisConnector` implements Illuminate\Queue\Connectors\ConnectorInterface

```php
function __construct(Illuminate\Contracts\Redis\Factory $redis, $connection = null);
function connect(array $config);
```

## class SqsConnector
`Illuminate\Queue\Connectors\SqsConnector` implements Illuminate\Queue\Connectors\ConnectorInterface

```php
function connect(array $config);
```

## class SyncConnector
`Illuminate\Queue\Connectors\SyncConnector` implements Illuminate\Queue\Connectors\ConnectorInterface

```php
function connect(array $config);
```

