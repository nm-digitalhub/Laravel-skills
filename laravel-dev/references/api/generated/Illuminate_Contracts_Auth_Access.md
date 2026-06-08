# Illuminate\Contracts\Auth\Access

Version: 13.14.0

## interface Authorizable
`Illuminate\Contracts\Auth\Access\Authorizable`

```php
abstract function can($abilities, $arguments = []);
```

## interface Gate
`Illuminate\Contracts\Auth\Access\Gate`

```php
abstract function abilities();
abstract function after(callable $callback);
abstract function allows($ability, $arguments = []);
abstract function any($abilities, $arguments = []);
abstract function authorize($ability, $arguments = []);
abstract function before(callable $callback);
abstract function check($abilities, $arguments = []);
abstract function define($ability, $callback);
abstract function denies($ability, $arguments = []);
abstract function forUser($user);
abstract function getPolicyFor($class);
abstract function has($ability);
abstract function inspect($ability, $arguments = []);
abstract function policy($class, $policy);
abstract function raw($ability, $arguments = []);
abstract function resource($name, $class, ?array $abilities = null);
```

