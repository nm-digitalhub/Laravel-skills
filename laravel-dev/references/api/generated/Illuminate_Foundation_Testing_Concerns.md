# Illuminate\Foundation\Testing\Concerns

Version: 13.14.0

## trait InteractsWithAuthentication
`Illuminate\Foundation\Testing\Concerns\InteractsWithAuthentication`

```php
function actingAs(Illuminate\Contracts\Auth\Authenticatable $user, $guard = null);
function actingAsGuest($guard = null);
function assertAuthenticated($guard = null);
function assertAuthenticatedAs($user, $guard = null);
function assertCredentials(array $credentials, $guard = null);
function assertGuest($guard = null);
function assertInvalidCredentials(array $credentials, $guard = null);
function be(Illuminate\Contracts\Auth\Authenticatable $user, $guard = null);
```

## trait InteractsWithConsole
`Illuminate\Foundation\Testing\Concerns\InteractsWithConsole`

```php
function artisan($command, $parameters = []);
```

## trait InteractsWithContainer
`Illuminate\Foundation\Testing\Concerns\InteractsWithContainer`

## trait InteractsWithDatabase
`Illuminate\Foundation\Testing\Concerns\InteractsWithDatabase`

```php
function castAsJson($value, $connection = null);
function expectsDatabaseQueryCount($expected, $connection = null);
function seed($class = 'Database\Seeders\...');
```

## trait InteractsWithDeprecationHandling
`Illuminate\Foundation\Testing\Concerns\InteractsWithDeprecationHandling`

## trait InteractsWithExceptionHandling
`Illuminate\Foundation\Testing\Concerns\InteractsWithExceptionHandling`

## trait InteractsWithRedis
`Illuminate\Foundation\Testing\Concerns\InteractsWithRedis`

```php
function ifRedisAvailable($callback);
function setUpRedis();
function tearDownRedis();
static function redisDriverProvider();
```

## trait InteractsWithSession
`Illuminate\Foundation\Testing\Concerns\InteractsWithSession`

```php
function flushSession();
function session(array $data);
function withSession(array $data);
```

## trait InteractsWithTestCaseLifecycle
`Illuminate\Foundation\Testing\Concerns\InteractsWithTestCaseLifecycle`

```php
function afterApplicationCreated(callable $callback);
static function tearDownAfterClassUsingTestCase();
```

## trait InteractsWithTime
`Illuminate\Foundation\Testing\Concerns\InteractsWithTime`

```php
function freezeSecond($callback = null);
function freezeTime($callback = null);
function travel($value);
function travelBack();
function travelTo($date, $callback = null);
```

## trait InteractsWithViews
`Illuminate\Foundation\Testing\Concerns\InteractsWithViews`

## trait MakesHttpRequests
`Illuminate\Foundation\Testing\Concerns\MakesHttpRequests`

```php
function call($method, $uri, $parameters = [], $cookies = [], $files = [], $server = [], $content = null);
function delete($uri, array $data = [], array $headers = []);
function deleteJson($uri, array $data = [], array $headers = [], $options = 0);
function disableCookieEncryption();
function flushHeaders();
function followingRedirects();
function from(string $url);
function fromRoute(BackedEnum|string $name, $parameters = []);
function get($uri, array $headers = []);
function getJson($uri, array $headers = [], $options = 0);
function head($uri, array $headers = []);
function json($method, $uri, array $data = [], array $headers = [], $options = 0);
function options($uri, array $data = [], array $headers = []);
function optionsJson($uri, array $data = [], array $headers = [], $options = 0);
function patch($uri, array $data = [], array $headers = []);
function patchJson($uri, array $data = [], array $headers = [], $options = 0);
function post($uri, array $data = [], array $headers = []);
function postJson($uri, array $data = [], array $headers = [], $options = 0);
function put($uri, array $data = [], array $headers = []);
function putJson($uri, array $data = [], array $headers = [], $options = 0);
function withBasicAuth(string $username, string $password);
function withCookie(string $name, string $value);
function withCookies(array $cookies);
function withCredentials();
function withHeader(string $name, string $value);
function withHeaders(array $headers);
function withMiddleware($middleware = null);
function withPrecognition();
function withServerVariables(array $server);
function withToken(string $token, string $type = 'Bearer');
function withUnencryptedCookie(string $name, string $value);
function withUnencryptedCookies(array $cookies);
function withoutHeader(string $name);
function withoutHeaders(array $headers);
function withoutMiddleware($middleware = null);
function withoutToken();
```

## interface WithoutExceptionHandlingHandler
`Illuminate\Foundation\Testing\Concerns\WithoutExceptionHandlingHandler`

