# Illuminate\Contracts\Database\Eloquent

Version: 13.14.0

## interface Builder
`Illuminate\Contracts\Database\Eloquent\Builder` implements Illuminate\Contracts\Database\Query\Builder

## interface Castable
`Illuminate\Contracts\Database\Eloquent\Castable`

```php
static abstract function castUsing(array $arguments);
```

## interface CastsAttributes
`Illuminate\Contracts\Database\Eloquent\CastsAttributes`

```php
abstract function get(Illuminate\Database\Eloquent\Model $model, string $key, mixed $value, array $attributes);
abstract function set(Illuminate\Database\Eloquent\Model $model, string $key, mixed $value, array $attributes);
```

## interface CastsInboundAttributes
`Illuminate\Contracts\Database\Eloquent\CastsInboundAttributes`

```php
abstract function set(Illuminate\Database\Eloquent\Model $model, string $key, mixed $value, array $attributes);
```

## interface ComparesCastableAttributes
`Illuminate\Contracts\Database\Eloquent\ComparesCastableAttributes`

```php
abstract function compare(Illuminate\Database\Eloquent\Model $model, string $key, mixed $firstValue, mixed $secondValue);
```

## interface DeviatesCastableAttributes
`Illuminate\Contracts\Database\Eloquent\DeviatesCastableAttributes`

```php
abstract function decrement($model, string $key, $value, array $attributes);
abstract function increment($model, string $key, $value, array $attributes);
```

## interface SerializesCastableAttributes
`Illuminate\Contracts\Database\Eloquent\SerializesCastableAttributes`

```php
abstract function serialize(Illuminate\Database\Eloquent\Model $model, string $key, mixed $value, array $attributes);
```

## interface SupportsPartialRelations
`Illuminate\Contracts\Database\Eloquent\SupportsPartialRelations`

```php
abstract function getOneOfManySubQuery();
abstract function isOneOfMany();
abstract function ofMany($column = 'id', $aggregate = 'MAX', $relation = null);
```

