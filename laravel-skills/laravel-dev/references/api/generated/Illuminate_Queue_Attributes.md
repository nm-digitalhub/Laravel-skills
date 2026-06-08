# Illuminate\Queue\Attributes

Version: 13.14.0

## class Backoff
`Illuminate\Queue\Attributes\Backoff`

```php
function __construct(array|int ...$backoff);
```

## class Connection
`Illuminate\Queue\Attributes\Connection`

```php
function __construct(UnitEnum|string $connection);
```

## class DebounceFor
`Illuminate\Queue\Attributes\DebounceFor`

```php
function __construct(int $debounceFor, ?int $maxWait = null);
```

## class Delay
`Illuminate\Queue\Attributes\Delay`

```php
function __construct(int $delay);
```

## class DeleteWhenMissingModels
`Illuminate\Queue\Attributes\DeleteWhenMissingModels`

## class FailOnTimeout
`Illuminate\Queue\Attributes\FailOnTimeout`

## class MaxExceptions
`Illuminate\Queue\Attributes\MaxExceptions`

```php
function __construct(int $maxExceptions);
```

## class Queue
`Illuminate\Queue\Attributes\Queue`

```php
function __construct(UnitEnum|string $queue);
```

## trait ReadsQueueAttributes
`Illuminate\Queue\Attributes\ReadsQueueAttributes`

## class Timeout
`Illuminate\Queue\Attributes\Timeout`

```php
function __construct(int $timeout);
```

## class Tries
`Illuminate\Queue\Attributes\Tries`

```php
function __construct(int $tries);
```

## class UniqueFor
`Illuminate\Queue\Attributes\UniqueFor`

```php
function __construct(int $uniqueFor);
```

## class WithoutRelations
`Illuminate\Queue\Attributes\WithoutRelations`

