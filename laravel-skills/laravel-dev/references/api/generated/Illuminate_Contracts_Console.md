# Illuminate\Contracts\Console

Version: 13.14.0

## interface Application
`Illuminate\Contracts\Console\Application`

```php
abstract function call($command, array $parameters = [], $outputBuffer = null);
abstract function output();
```

## interface Isolatable
`Illuminate\Contracts\Console\Isolatable`

## interface Kernel
`Illuminate\Contracts\Console\Kernel`

```php
abstract function all();
abstract function bootstrap();
abstract function call($command, array $parameters = [], $outputBuffer = null);
abstract function handle($input, $output = null);
abstract function output();
abstract function queue($command, array $parameters = []);
abstract function terminate($input, $status);
```

## interface PromptsForMissingInput
`Illuminate\Contracts\Console\PromptsForMissingInput`

