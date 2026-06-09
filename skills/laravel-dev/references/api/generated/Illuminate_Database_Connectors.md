# Illuminate\Database\Connectors

Version: 13.14.0

## class ConnectionFactory
`Illuminate\Database\Connectors\ConnectionFactory`

```php
function __construct(Illuminate\Contracts\Container\Container $container);
function createConnector(array $config);
function make(array $config, $name = null);
```

## class Connector
`Illuminate\Database\Connectors\Connector`

```php
function createConnection($dsn, array $config, array $options);
function getDefaultOptions();
function getOptions(array $config);
function setDefaultOptions(array $options);
```

## interface ConnectorInterface
`Illuminate\Database\Connectors\ConnectorInterface`

```php
abstract function connect(array $config);
```

## class MariaDbConnector
`Illuminate\Database\Connectors\MariaDbConnector` extends Illuminate\Database\Connectors\MySqlConnector implements Illuminate\Database\Connectors\ConnectorInterface

```php
function connect(array $config);
function createConnection($dsn, array $config, array $options);
function getDefaultOptions();
function getOptions(array $config);
function setDefaultOptions(array $options);
```

## class MySqlConnector
`Illuminate\Database\Connectors\MySqlConnector` extends Illuminate\Database\Connectors\Connector implements Illuminate\Database\Connectors\ConnectorInterface

```php
function connect(array $config);
function createConnection($dsn, array $config, array $options);
function getDefaultOptions();
function getOptions(array $config);
function setDefaultOptions(array $options);
```

## class PostgresConnector
`Illuminate\Database\Connectors\PostgresConnector` extends Illuminate\Database\Connectors\Connector implements Illuminate\Database\Connectors\ConnectorInterface

```php
function connect(array $config);
function createConnection($dsn, array $config, array $options);
function getDefaultOptions();
function getOptions(array $config);
function setDefaultOptions(array $options);
```

## class SQLiteConnector
`Illuminate\Database\Connectors\SQLiteConnector` extends Illuminate\Database\Connectors\Connector implements Illuminate\Database\Connectors\ConnectorInterface

```php
function connect(array $config);
function createConnection($dsn, array $config, array $options);
function getDefaultOptions();
function getOptions(array $config);
function setDefaultOptions(array $options);
```

## class SqlServerConnector
`Illuminate\Database\Connectors\SqlServerConnector` extends Illuminate\Database\Connectors\Connector implements Illuminate\Database\Connectors\ConnectorInterface

```php
function connect(array $config);
function createConnection($dsn, array $config, array $options);
function getDefaultOptions();
function getOptions(array $config);
function setDefaultOptions(array $options);
```

