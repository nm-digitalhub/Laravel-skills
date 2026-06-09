# Illuminate\Contracts\Database

Version: 13.14.0

## interface ConcurrencyErrorDetector
`Illuminate\Contracts\Database\ConcurrencyErrorDetector`

```php
abstract function causedByConcurrencyError(Throwable $e): bool;
```

## interface LostConnectionDetector
`Illuminate\Contracts\Database\LostConnectionDetector`

```php
abstract function causedByLostConnection(Throwable $e): bool;
```

## class ModelIdentifier
`Illuminate\Contracts\Database\ModelIdentifier`

```php
function __construct($class, $id, array $relations, $connection);
function getClass(): ?string;
function useCollectionClass(?string $collectionClass);
static function useMorphMap(bool $useMorphMap = true): void;
```

