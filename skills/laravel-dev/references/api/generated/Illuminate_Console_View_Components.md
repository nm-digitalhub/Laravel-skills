# Illuminate\Console\View\Components

Version: 13.14.0

## class Alert
`Illuminate\Console\View\Components\Alert` extends Illuminate\Console\View\Components\Component

```php
function __construct($output);
function render($string, $verbosity = 32);
```

## class Ask
`Illuminate\Console\View\Components\Ask` extends Illuminate\Console\View\Components\Component

```php
function __construct($output);
function render($question, $default = null, $multiline = false);
```

## class AskWithCompletion
`Illuminate\Console\View\Components\AskWithCompletion` extends Illuminate\Console\View\Components\Component

```php
function __construct($output);
function render($question, $choices, $default = null);
```

## class BulletList
`Illuminate\Console\View\Components\BulletList` extends Illuminate\Console\View\Components\Component

```php
function __construct($output);
function render($elements, $verbosity = 32);
```

## class Choice
`Illuminate\Console\View\Components\Choice` extends Illuminate\Console\View\Components\Component

```php
function __construct($output);
function render($question, $choices, $default = null, $attempts = null, $multiple = false);
```

## class Component
`Illuminate\Console\View\Components\Component`

```php
function __construct($output);
```

## class Confirm
`Illuminate\Console\View\Components\Confirm` extends Illuminate\Console\View\Components\Component

```php
function __construct($output);
function render($question, $default = false);
```

## class Error
`Illuminate\Console\View\Components\Error` extends Illuminate\Console\View\Components\Component

```php
function __construct($output);
function render($string, $verbosity = 32);
```

## class Factory
`Illuminate\Console\View\Components\Factory`

```php
function __call($method, $parameters);
function __construct($output);
```

## class Info
`Illuminate\Console\View\Components\Info` extends Illuminate\Console\View\Components\Component

```php
function __construct($output);
function render($string, $verbosity = 32);
```

## class Line
`Illuminate\Console\View\Components\Line` extends Illuminate\Console\View\Components\Component

```php
function __construct($output);
function render($style, $string, $verbosity = 32);
```

## class Secret
`Illuminate\Console\View\Components\Secret` extends Illuminate\Console\View\Components\Component

```php
function __construct($output);
function render($question, $fallback = true);
```

## class Success
`Illuminate\Console\View\Components\Success` extends Illuminate\Console\View\Components\Component

```php
function __construct($output);
function render($string, $verbosity = 32);
```

## class Task
`Illuminate\Console\View\Components\Task` extends Illuminate\Console\View\Components\Component

```php
function __construct($output);
function render($description, $task = null, $verbosity = 32);
```

## class TwoColumnDetail
`Illuminate\Console\View\Components\TwoColumnDetail` extends Illuminate\Console\View\Components\Component

```php
function __construct($output);
function render($first, $second = null, $verbosity = 32);
```

## class Warn
`Illuminate\Console\View\Components\Warn` extends Illuminate\Console\View\Components\Component

```php
function __construct($output);
function render($string, $verbosity = 32);
```

