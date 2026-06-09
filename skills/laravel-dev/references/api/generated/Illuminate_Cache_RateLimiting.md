# Illuminate\Cache\RateLimiting

Version: 13.14.0

## class GlobalLimit
`Illuminate\Cache\RateLimiting\GlobalLimit` extends Illuminate\Cache\RateLimiting\Limit

```php
function __construct(int $maxAttempts, int $decaySeconds = 60);
function after($callback);
function by($key);
function fallbackKey();
function response(callable $callback);
static function none();
static function perDay($maxAttempts, $decayDays = 1);
static function perHour($maxAttempts, $decayHours = 1);
static function perMinute($maxAttempts, $decayMinutes = 1);
static function perMinutes($decayMinutes, $maxAttempts);
static function perSecond($maxAttempts, $decaySeconds = 1);
```

## class Limit
`Illuminate\Cache\RateLimiting\Limit`

```php
function __construct($key = '', int $maxAttempts = 60, int $decaySeconds = 60);
function after($callback);
function by($key);
function fallbackKey();
function response(callable $callback);
static function none();
static function perDay($maxAttempts, $decayDays = 1);
static function perHour($maxAttempts, $decayHours = 1);
static function perMinute($maxAttempts, $decayMinutes = 1);
static function perMinutes($decayMinutes, $maxAttempts);
static function perSecond($maxAttempts, $decaySeconds = 1);
```

## class Unlimited
`Illuminate\Cache\RateLimiting\Unlimited` extends Illuminate\Cache\RateLimiting\GlobalLimit

```php
function __construct();
function after($callback);
function by($key);
function fallbackKey();
function response(callable $callback);
static function none();
static function perDay($maxAttempts, $decayDays = 1);
static function perHour($maxAttempts, $decayHours = 1);
static function perMinute($maxAttempts, $decayMinutes = 1);
static function perMinutes($decayMinutes, $maxAttempts);
static function perSecond($maxAttempts, $decaySeconds = 1);
```

