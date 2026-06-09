# Illuminate\Cookie

Version: 13.14.0

## class CookieJar
`Illuminate\Cookie\CookieJar` implements Illuminate\Contracts\Cookie\QueueingFactory, Illuminate\Contracts\Cookie\Factory

```php
function __call($method, $parameters);
function expire($name, $path = null, $domain = null);
function flushQueuedCookies();
function forever($name, $value, $path = null, $domain = null, $secure = null, $httpOnly = true, $raw = false, $sameSite = null);
function forget($name, $path = null, $domain = null);
function getQueuedCookies();
function hasQueued($key, $path = null);
function make($name, $value, $minutes = 0, $path = null, $domain = null, $secure = null, $httpOnly = true, $raw = false, $sameSite = null);
function queue(...$parameters);
function queued($key, $default = null, $path = null);
function setDefaultPathAndDomain($path, $domain, $secure = false, $sameSite = null);
function unqueue($name, $path = null);
static function __callStatic($method, $parameters);
static function flushMacros();
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
```

## class CookieServiceProvider
`Illuminate\Cookie\CookieServiceProvider` extends Illuminate\Support\ServiceProvider

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

## class CookieValuePrefix
`Illuminate\Cookie\CookieValuePrefix`

```php
static function create($cookieName, $key);
static function remove($cookieValue);
static function validate($cookieName, $cookieValue, array $keys);
```

