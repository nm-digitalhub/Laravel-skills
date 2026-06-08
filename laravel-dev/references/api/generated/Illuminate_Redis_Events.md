# Illuminate\Redis\Events

Version: 13.14.0

## class CommandExecuted
`Illuminate\Redis\Events\CommandExecuted`

```php
function __construct($command, $parameters, $time, $connection);
```

## class CommandFailed
`Illuminate\Redis\Events\CommandFailed`

```php
function __construct($command, $parameters, Throwable $exception, $connection);
```

