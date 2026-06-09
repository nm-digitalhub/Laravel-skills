# Illuminate\Database\Capsule

Version: 13.14.0

## class Manager
`Illuminate\Database\Capsule\Manager`

```php
function __construct(?Illuminate\Container\Container $container = null);
function addConnection(array $config, $name = 'default');
function bootEloquent();
function getConnection($name = null);
function getContainer();
function getDatabaseManager();
function getEventDispatcher();
function setAsGlobal();
function setContainer(Illuminate\Contracts\Container\Container $container);
function setEventDispatcher(Illuminate\Contracts\Events\Dispatcher $dispatcher);
function setFetchMode($fetchMode);
static function __callStatic($method, $parameters);
static function connection($connection = null);
static function schema($connection = null);
static function table($table, $as = null, $connection = null);
```

