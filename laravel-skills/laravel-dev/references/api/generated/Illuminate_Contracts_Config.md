# Illuminate\Contracts\Config

Version: 13.14.0

## interface Repository
`Illuminate\Contracts\Config\Repository`

```php
abstract function all();
abstract function get($key, $default = null);
abstract function has($key);
abstract function prepend($key, $value);
abstract function push($key, $value);
abstract function set($key, $value = null);
```

