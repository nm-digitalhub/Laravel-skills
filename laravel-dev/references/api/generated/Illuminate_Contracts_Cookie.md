# Illuminate\Contracts\Cookie

Version: 13.14.0

## interface Factory
`Illuminate\Contracts\Cookie\Factory`

```php
abstract function forever($name, $value, $path = null, $domain = null, $secure = null, $httpOnly = true, $raw = false, $sameSite = null);
abstract function forget($name, $path = null, $domain = null);
abstract function make($name, $value, $minutes = 0, $path = null, $domain = null, $secure = null, $httpOnly = true, $raw = false, $sameSite = null);
```

## interface QueueingFactory
`Illuminate\Contracts\Cookie\QueueingFactory` implements Illuminate\Contracts\Cookie\Factory

```php
abstract function forever($name, $value, $path = null, $domain = null, $secure = null, $httpOnly = true, $raw = false, $sameSite = null);
abstract function forget($name, $path = null, $domain = null);
abstract function getQueuedCookies();
abstract function make($name, $value, $minutes = 0, $path = null, $domain = null, $secure = null, $httpOnly = true, $raw = false, $sameSite = null);
abstract function queue(...$parameters);
abstract function unqueue($name, $path = null);
```

