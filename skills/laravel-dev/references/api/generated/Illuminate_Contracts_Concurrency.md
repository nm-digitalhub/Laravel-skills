# Illuminate\Contracts\Concurrency

Version: 13.14.0

## interface Driver
`Illuminate\Contracts\Concurrency\Driver`

```php
abstract function defer(Closure|array $tasks): Illuminate\Support\Defer\DeferredCallback;
abstract function run(Closure|array $tasks, Carbon\CarbonInterval|int|null $timeout = null): array;
```

