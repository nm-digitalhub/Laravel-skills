# Illuminate\Http\Concerns

Version: 13.14.0

## trait CanBePrecognitive
`Illuminate\Http\Concerns\CanBePrecognitive`

```php
function filterPrecognitiveRules($rules);
function isAttemptingPrecognition();
function isPrecognitive();
```

## trait InteractsWithContentTypes
`Illuminate\Http\Concerns\InteractsWithContentTypes`

```php
function accepts($contentTypes);
function acceptsAnyContentType();
function acceptsHtml();
function acceptsJson();
function acceptsMarkdown();
function expectsJson();
function format($default = 'html');
function isJson();
function prefers($contentTypes);
function wantsJson();
function wantsMarkdown();
static function matchesType($actual, $type);
```

## trait InteractsWithFlashData
`Illuminate\Http\Concerns\InteractsWithFlashData`

```php
function flash();
function flashExcept($keys);
function flashOnly($keys);
function flush();
function old($key = null, $default = null);
```

## trait InteractsWithInput
`Illuminate\Http\Concerns\InteractsWithInput`

```php
function all($keys = null);
function allFiles();
function anyFilled($keys);
function array($key = null);
function bearerToken();
function boolean($key = null, $default = false);
function clamp($key, $min, $max, $default = 0);
function collect($key = null);
function cookie($key = null, $default = null);
function date($key, $format = null, $tz = null);
function dd(...$args);
function dump($keys = []);
function enum($key, $enumClass, $default = null);
function enums($key, $enumClass);
function except($keys);
function exists($key);
function file($key = null, $default = null);
function filled($key);
function float($key, $default = 0);
function fluent($key = null, array $default = []);
function has($key);
function hasAny($keys);
function hasCookie($key);
function hasFile($key);
function hasHeader($key);
function header($key = null, $default = null);
function input($key = null, $default = null);
function integer($key, $default = 0);
function interval($key, $unit = null);
function isNotFilled($key);
function keys();
function missing($key);
function only($keys);
function post($key = null, $default = null);
function query($key = null, $default = null);
function server($key = null, $default = null);
function str($key, $default = null);
function string($key, $default = null);
function whenFilled($key, callable $callback, ?callable $default = null);
function whenHas($key, callable $callback, ?callable $default = null);
function whenMissing($key, callable $callback, ?callable $default = null);
```

