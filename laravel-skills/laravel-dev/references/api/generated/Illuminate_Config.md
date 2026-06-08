# Illuminate\Config

Version: 13.14.0

## class Repository
`Illuminate\Config\Repository` implements ArrayAccess, Illuminate\Contracts\Config\Repository

```php
function __call($method, $parameters);
function __construct(array $items = []);
function all();
function array(string $key, $default = null): array;
function boolean(string $key, $default = null): bool;
function collection(string $key, $default = null): Illuminate\Support\Collection;
function float(string $key, $default = null): float;
function get($key, $default = null);
function getMany($keys);
function has($key);
function integer(string $key, $default = null): int;
function offsetExists($offset): bool;
function offsetGet($offset): mixed;
function offsetSet($offset, $value): void;
function offsetUnset($offset): void;
function prepend($key, $value);
function push($key, $value);
function set($key, $value = null);
function string(string $key, $default = null): string;
static function __callStatic($method, $parameters);
static function flushMacros();
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
```

