# Illuminate\Http\Client\Promises

Version: 13.14.0

## class FluentPromise
`Illuminate\Http\Client\Promises\FluentPromise` implements GuzzleHttp\Promise\PromiseInterface

```php
function __call($method, $parameters);
function __construct(GuzzleHttp\Promise\PromiseInterface $guzzlePromise);
function cancel(): void;
function getGuzzlePromise(): GuzzleHttp\Promise\PromiseInterface;
function getState(): string;
function otherwise(callable $onRejected): GuzzleHttp\Promise\PromiseInterface;
function reject($reason): void;
function resolve($value): void;
function then(?callable $onFulfilled = null, ?callable $onRejected = null): GuzzleHttp\Promise\PromiseInterface;
function wait(bool $unwrap = true);
```

## class LazyPromise
`Illuminate\Http\Client\Promises\LazyPromise` implements GuzzleHttp\Promise\PromiseInterface

```php
function __construct(Closure $promiseBuilder);
function buildPromise(): GuzzleHttp\Promise\PromiseInterface;
function cancel(): void;
function getState(): string;
function otherwise(callable $onRejected): GuzzleHttp\Promise\PromiseInterface;
function promiseNeedsBuilt(): bool;
function reject($reason): void;
function resolve($value): void;
function then(?callable $onFulfilled = null, ?callable $onRejected = null): GuzzleHttp\Promise\PromiseInterface;
function wait(bool $unwrap = true);
```

