# Illuminate\Container\Attributes

Version: 13.14.0

## class Auth
`Illuminate\Container\Attributes\Auth` implements Illuminate\Contracts\Container\ContextualAttribute

```php
function __construct(UnitEnum|string|null $guard = null);
static function resolve(self $attribute, Illuminate\Contracts\Container\Container $container);
```

## class Authenticated
`Illuminate\Container\Attributes\Authenticated` implements Illuminate\Contracts\Container\ContextualAttribute

```php
function __construct(UnitEnum|string|null $guard = null);
static function resolve(self $attribute, Illuminate\Contracts\Container\Container $container);
```

## class Bind
`Illuminate\Container\Attributes\Bind`

```php
function __construct(string $concrete, UnitEnum|array|string $environments = []);
```

## class Cache
`Illuminate\Container\Attributes\Cache` implements Illuminate\Contracts\Container\ContextualAttribute

```php
function __construct(UnitEnum|string|null $store = null, bool $memo = false);
static function resolve(self $attribute, Illuminate\Contracts\Container\Container $container);
```

## class Config
`Illuminate\Container\Attributes\Config` implements Illuminate\Contracts\Container\ContextualAttribute

```php
function __construct(string $key, mixed $default = null);
static function resolve(self $attribute, Illuminate\Contracts\Container\Container $container);
```

## class Context
`Illuminate\Container\Attributes\Context` implements Illuminate\Contracts\Container\ContextualAttribute

```php
function __construct(string $key, mixed $default = null, bool $hidden = false);
static function resolve(self $attribute, Illuminate\Contracts\Container\Container $container): mixed;
```

## class CurrentUser
`Illuminate\Container\Attributes\CurrentUser` extends Illuminate\Container\Attributes\Authenticated implements Illuminate\Contracts\Container\ContextualAttribute

```php
function __construct(UnitEnum|string|null $guard = null);
static function resolve(self $attribute, Illuminate\Contracts\Container\Container $container);
```

## class DB
`Illuminate\Container\Attributes\DB` extends Illuminate\Container\Attributes\Database implements Illuminate\Contracts\Container\ContextualAttribute

```php
function __construct(UnitEnum|string|null $connection = null);
static function resolve(self $attribute, Illuminate\Contracts\Container\Container $container);
```

## class Database
`Illuminate\Container\Attributes\Database` implements Illuminate\Contracts\Container\ContextualAttribute

```php
function __construct(UnitEnum|string|null $connection = null);
static function resolve(self $attribute, Illuminate\Contracts\Container\Container $container);
```

## class Give
`Illuminate\Container\Attributes\Give` implements Illuminate\Contracts\Container\ContextualAttribute

```php
function __construct(string $class, array $params = []);
static function resolve(self $attribute, Illuminate\Contracts\Container\Container $container): mixed;
```

## class Log
`Illuminate\Container\Attributes\Log` implements Illuminate\Contracts\Container\ContextualAttribute

```php
function __construct(UnitEnum|string|null $channel = null, UnitEnum|string|null $name = null);
static function resolve(self $attribute, Illuminate\Contracts\Container\Container $container);
```

## class RouteParameter
`Illuminate\Container\Attributes\RouteParameter` implements Illuminate\Contracts\Container\ContextualAttribute

```php
function __construct(string $parameter);
static function resolve(self $attribute, Illuminate\Contracts\Container\Container $container);
```

## class Scoped
`Illuminate\Container\Attributes\Scoped`

## class Singleton
`Illuminate\Container\Attributes\Singleton`

## class Storage
`Illuminate\Container\Attributes\Storage` implements Illuminate\Contracts\Container\ContextualAttribute

```php
function __construct(UnitEnum|string|null $disk = null);
static function resolve(self $attribute, Illuminate\Contracts\Container\Container $container);
```

## class Tag
`Illuminate\Container\Attributes\Tag` implements Illuminate\Contracts\Container\ContextualAttribute

```php
function __construct(string $tag);
static function resolve(self $attribute, Illuminate\Contracts\Container\Container $container);
```

