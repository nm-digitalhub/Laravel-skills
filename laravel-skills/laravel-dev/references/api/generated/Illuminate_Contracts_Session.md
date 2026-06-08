# Illuminate\Contracts\Session

Version: 13.14.0

## interface Session
`Illuminate\Contracts\Session\Session`

```php
abstract function all();
abstract function exists($key);
abstract function flash(string $key, $value = true);
abstract function flush();
abstract function forget($keys);
abstract function get($key, $default = null);
abstract function getHandler();
abstract function getId();
abstract function getName();
abstract function handlerNeedsRequest();
abstract function has($key);
abstract function invalidate();
abstract function isStarted();
abstract function migrate($destroy = false);
abstract function previousUrl();
abstract function pull($key, $default = null);
abstract function put($key, $value = null);
abstract function regenerate($destroy = false);
abstract function regenerateToken();
abstract function remove($key);
abstract function save();
abstract function setId($id);
abstract function setName($name);
abstract function setPreviousUrl($url);
abstract function setRequestOnHandler($request);
abstract function start();
abstract function token();
```

