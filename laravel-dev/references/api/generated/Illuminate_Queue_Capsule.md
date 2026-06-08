# Illuminate\Queue\Capsule

Version: 13.14.0

## class Manager
`Illuminate\Queue\Capsule\Manager`

```php
function __call($method, $parameters);
function __construct(?Illuminate\Container\Container $container = null);
function addConnection(array $config, $name = 'default');
function getConnection($name = null);
function getContainer();
function getQueueManager();
function setAsGlobal();
function setContainer(Illuminate\Contracts\Container\Container $container);
static function __callStatic($method, $parameters);
static function bulk($jobs, $data = '', $queue = null, $connection = null);
static function connection($connection = null);
static function later($delay, $job, $data = '', $queue = null, $connection = null);
static function push($job, $data = '', $queue = null, $connection = null);
```

