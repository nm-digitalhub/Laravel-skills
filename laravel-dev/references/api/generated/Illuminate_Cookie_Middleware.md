# Illuminate\Cookie\Middleware

Version: 13.14.0

## class AddQueuedCookiesToResponse
`Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse`

```php
function __construct(Illuminate\Contracts\Cookie\QueueingFactory $cookies);
function handle($request, Closure $next);
```

## class EncryptCookies
`Illuminate\Cookie\Middleware\EncryptCookies`

```php
function __construct(Illuminate\Contracts\Encryption\Encrypter $encrypter);
function disableFor($name);
function handle($request, Closure $next);
function isDisabled($name);
static function except($cookies);
static function flushState();
static function serialized($name);
```

