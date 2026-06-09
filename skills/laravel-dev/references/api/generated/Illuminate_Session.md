# Illuminate\Session

Version: 13.14.0

## class ArraySessionHandler
`Illuminate\Session\ArraySessionHandler` implements SessionHandlerInterface

```php
function __construct($minutes);
function close(): bool;
function destroy($sessionId): bool;
function gc($lifetime): int;
function open($savePath, $sessionName): bool;
function read($sessionId): string|false;
function write($sessionId, $data): bool;
```

## class CacheBasedSessionHandler
`Illuminate\Session\CacheBasedSessionHandler` implements SessionHandlerInterface

```php
function __construct(Illuminate\Contracts\Cache\Repository $cache, $minutes);
function close(): bool;
function destroy($sessionId): bool;
function gc($lifetime): int;
function getCache();
function open($savePath, $sessionName): bool;
function read($sessionId): string;
function write($sessionId, $data): bool;
```

## class CookieSessionHandler
`Illuminate\Session\CookieSessionHandler` implements SessionHandlerInterface

```php
function __construct(Illuminate\Contracts\Cookie\QueueingFactory $cookie, $minutes, $expireOnClose = false);
function close(): bool;
function destroy($sessionId): bool;
function gc($lifetime): int;
function open($savePath, $sessionName): bool;
function read($sessionId): string|false;
function setRequest(Symfony\Component\HttpFoundation\Request $request);
function write($sessionId, $data): bool;
```

## class DatabaseSessionHandler
`Illuminate\Session\DatabaseSessionHandler` implements Illuminate\Session\ExistenceAwareInterface, SessionHandlerInterface

```php
function __construct(Illuminate\Database\ConnectionInterface $connection, $table, $minutes, ?Illuminate\Contracts\Container\Container $container = null);
function close(): bool;
function destroy($sessionId): bool;
function gc($lifetime): int;
function open($savePath, $sessionName): bool;
function read($sessionId): string|false;
function setContainer($container);
function setExists($value);
function write($sessionId, $data): bool;
```

## class EncryptedStore
`Illuminate\Session\EncryptedStore` extends Illuminate\Session\Store implements Illuminate\Contracts\Session\Session

```php
function __call($method, $parameters);
function __construct($name, SessionHandlerInterface $handler, Illuminate\Contracts\Encryption\Encrypter $encrypter, $id = null, $serialization = 'php');
function ageFlashData();
function all();
function cache();
function decrement($key, $amount = 1);
function except(array $keys);
function exists($key);
function flash(BackedEnum|UnitEnum|string $key, $value = true);
function flashInput(array $value);
function flush();
function forget($keys);
function get($key, $default = null);
function getEncrypter();
function getHandler();
function getId();
function getName();
function getOldInput($key = null, $default = null);
function handlerNeedsRequest();
function has($key);
function hasAny($key);
function hasOldInput($key = null);
function hasPreviousUri();
function id();
function increment($key, $amount = 1);
function invalidate();
function isStarted();
function isValidId($id);
function keep($keys = null);
function migrate($destroy = false);
function missing($key);
function now($key, $value);
function only(array $keys);
function passwordConfirmed();
function previousRoute();
function previousUri();
function previousUrl();
function pull($key, $default = null);
function push($key, $value);
function put($key, $value = null);
function reflash();
function regenerate($destroy = false);
function regenerateToken();
function remember($key, Closure $callback);
function remove($key);
function replace(array $attributes);
function save();
function setExists($value);
function setHandler(SessionHandlerInterface $handler);
function setId($id);
function setName($name);
function setPreviousRoute($route);
function setPreviousUrl($url);
function setRequestOnHandler($request);
function start();
function token();
static function __callStatic($method, $parameters);
static function flushMacros();
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
```

## interface ExistenceAwareInterface
`Illuminate\Session\ExistenceAwareInterface`

```php
abstract function setExists($value);
```

## class FileSessionHandler
`Illuminate\Session\FileSessionHandler` implements SessionHandlerInterface

```php
function __construct(Illuminate\Filesystem\Filesystem $files, $path, $minutes);
function close(): bool;
function destroy($sessionId): bool;
function gc($lifetime): int;
function open($savePath, $sessionName): bool;
function read($sessionId): string|false;
function write($sessionId, $data): bool;
```

## class NullSessionHandler
`Illuminate\Session\NullSessionHandler` implements SessionHandlerInterface

```php
function close(): bool;
function destroy($sessionId): bool;
function gc($lifetime): int;
function open($savePath, $sessionName): bool;
function read($sessionId): string;
function write($sessionId, $data): bool;
```

## class SessionManager
`Illuminate\Session\SessionManager` extends Illuminate\Support\Manager

```php
function __call($method, $parameters);
function __construct(Illuminate\Contracts\Container\Container $container);
function blockDriver();
function defaultRouteBlockLockSeconds();
function defaultRouteBlockWaitSeconds();
function driver($driver = null);
function extend($driver, Closure $callback);
function forgetDrivers();
function getContainer();
function getDefaultDriver();
function getDrivers();
function getSessionConfig();
function setContainer(Illuminate\Contracts\Container\Container $container);
function setDefaultDriver($name);
function shouldBlock();
```

## class SessionServiceProvider
`Illuminate\Session\SessionServiceProvider` extends Illuminate\Support\ServiceProvider

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

## class Store
`Illuminate\Session\Store` implements Illuminate\Contracts\Session\Session

```php
function __call($method, $parameters);
function __construct($name, SessionHandlerInterface $handler, $id = null, $serialization = 'php');
function ageFlashData();
function all();
function cache();
function decrement($key, $amount = 1);
function except(array $keys);
function exists($key);
function flash(BackedEnum|UnitEnum|string $key, $value = true);
function flashInput(array $value);
function flush();
function forget($keys);
function get($key, $default = null);
function getHandler();
function getId();
function getName();
function getOldInput($key = null, $default = null);
function handlerNeedsRequest();
function has($key);
function hasAny($key);
function hasOldInput($key = null);
function hasPreviousUri();
function id();
function increment($key, $amount = 1);
function invalidate();
function isStarted();
function isValidId($id);
function keep($keys = null);
function migrate($destroy = false);
function missing($key);
function now($key, $value);
function only(array $keys);
function passwordConfirmed();
function previousRoute();
function previousUri();
function previousUrl();
function pull($key, $default = null);
function push($key, $value);
function put($key, $value = null);
function reflash();
function regenerate($destroy = false);
function regenerateToken();
function remember($key, Closure $callback);
function remove($key);
function replace(array $attributes);
function save();
function setExists($value);
function setHandler(SessionHandlerInterface $handler);
function setId($id);
function setName($name);
function setPreviousRoute($route);
function setPreviousUrl($url);
function setRequestOnHandler($request);
function start();
function token();
static function __callStatic($method, $parameters);
static function flushMacros();
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
```

## class SymfonySessionDecorator
`Illuminate\Session\SymfonySessionDecorator` implements Symfony\Component\HttpFoundation\Session\SessionInterface

```php
function __construct(Illuminate\Contracts\Session\Session $store);
function all(): array;
function clear(): void;
function get(string $name, mixed $default = null): mixed;
function getBag(string $name): Symfony\Component\HttpFoundation\Session\SessionBagInterface;
function getId(): string;
function getMetadataBag(): Symfony\Component\HttpFoundation\Session\Storage\MetadataBag;
function getName(): string;
function has(string $name): bool;
function invalidate(?int $lifetime = null): bool;
function isStarted(): bool;
function migrate(bool $destroy = false, ?int $lifetime = null): bool;
function registerBag(Symfony\Component\HttpFoundation\Session\SessionBagInterface $bag): void;
function remove(string $name): mixed;
function replace(array $attributes): void;
function save(): void;
function set(string $name, mixed $value): void;
function setId(string $id): void;
function setName(string $name): void;
function start(): bool;
```

## class TokenMismatchException
`Illuminate\Session\TokenMismatchException` extends Exception implements Throwable, Stringable

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

