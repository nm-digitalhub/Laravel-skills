# Illuminate\Contracts\Pipeline

Version: 13.14.0

## interface Hub
`Illuminate\Contracts\Pipeline\Hub`

```php
abstract function pipe($object, $pipeline = null);
```

## interface Pipeline
`Illuminate\Contracts\Pipeline\Pipeline`

```php
abstract function send($passable);
abstract function then(Closure $destination);
abstract function through($pipes);
abstract function via($method);
```

