# Illuminate\JsonSchema\Types

Version: 13.14.0

## class ArrayType
`Illuminate\JsonSchema\Types\ArrayType` extends Illuminate\JsonSchema\Types\Type implements Stringable

```php
function __toString(): string;
function default(array $value): static;
function description(string $value): static;
function enum(array|string $values): static;
function items(Illuminate\JsonSchema\Types\Type $type): static;
function max(int $value): static;
function min(int $value): static;
function nullable(bool $nullable = true): static;
function required(bool $required = true): static;
function title(string $value): static;
function toArray(): array;
function toString(): string;
function unique(bool $unique = true): static;
static function __callStatic(string $name, mixed $arguments): Illuminate\JsonSchema\Types\Type;
static function fromArray(array $schema): Illuminate\JsonSchema\Types\Type;
```

## class BooleanType
`Illuminate\JsonSchema\Types\BooleanType` extends Illuminate\JsonSchema\Types\Type implements Stringable

```php
function __toString(): string;
function default(bool $value): static;
function description(string $value): static;
function enum(array|string $values): static;
function nullable(bool $nullable = true): static;
function required(bool $required = true): static;
function title(string $value): static;
function toArray(): array;
function toString(): string;
static function __callStatic(string $name, mixed $arguments): Illuminate\JsonSchema\Types\Type;
static function fromArray(array $schema): Illuminate\JsonSchema\Types\Type;
```

## class IntegerType
`Illuminate\JsonSchema\Types\IntegerType` extends Illuminate\JsonSchema\Types\Type implements Stringable

```php
function __toString(): string;
function default(int $value): static;
function description(string $value): static;
function enum(array|string $values): static;
function max(int $value): static;
function min(int $value): static;
function multipleOf(int $value): static;
function nullable(bool $nullable = true): static;
function required(bool $required = true): static;
function title(string $value): static;
function toArray(): array;
function toString(): string;
static function __callStatic(string $name, mixed $arguments): Illuminate\JsonSchema\Types\Type;
static function fromArray(array $schema): Illuminate\JsonSchema\Types\Type;
```

## class NumberType
`Illuminate\JsonSchema\Types\NumberType` extends Illuminate\JsonSchema\Types\Type implements Stringable

```php
function __toString(): string;
function default(int|float $value): static;
function description(string $value): static;
function enum(array|string $values): static;
function max(int|float $value): static;
function min(int|float $value): static;
function multipleOf(int|float $value): static;
function nullable(bool $nullable = true): static;
function required(bool $required = true): static;
function title(string $value): static;
function toArray(): array;
function toString(): string;
static function __callStatic(string $name, mixed $arguments): Illuminate\JsonSchema\Types\Type;
static function fromArray(array $schema): Illuminate\JsonSchema\Types\Type;
```

## class ObjectType
`Illuminate\JsonSchema\Types\ObjectType` extends Illuminate\JsonSchema\Types\Type implements Stringable

```php
function __construct(array $properties = []);
function __toString(): string;
function default(array $value): static;
function description(string $value): static;
function enum(array|string $values): static;
function nullable(bool $nullable = true): static;
function required(bool $required = true): static;
function title(string $value): static;
function toArray(): array;
function toString(): string;
function withoutAdditionalProperties(): static;
static function __callStatic(string $name, mixed $arguments): Illuminate\JsonSchema\Types\Type;
static function fromArray(array $schema): Illuminate\JsonSchema\Types\Type;
```

## class StringType
`Illuminate\JsonSchema\Types\StringType` extends Illuminate\JsonSchema\Types\Type implements Stringable

```php
function __toString(): string;
function default(string $value): static;
function description(string $value): static;
function enum(array|string $values): static;
function format(string $value): static;
function max(int $value): static;
function min(int $value): static;
function nullable(bool $nullable = true): static;
function pattern(string $value): static;
function required(bool $required = true): static;
function title(string $value): static;
function toArray(): array;
function toString(): string;
static function __callStatic(string $name, mixed $arguments): Illuminate\JsonSchema\Types\Type;
static function fromArray(array $schema): Illuminate\JsonSchema\Types\Type;
```

## class Type
`Illuminate\JsonSchema\Types\Type` extends Illuminate\JsonSchema\JsonSchema implements Stringable

```php
function __toString(): string;
function description(string $value): static;
function enum(array|string $values): static;
function nullable(bool $nullable = true): static;
function required(bool $required = true): static;
function title(string $value): static;
function toArray(): array;
function toString(): string;
static function __callStatic(string $name, mixed $arguments): Illuminate\JsonSchema\Types\Type;
static function fromArray(array $schema): Illuminate\JsonSchema\Types\Type;
```

