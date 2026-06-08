# Illuminate\JsonSchema

Version: 13.14.0

## class Deserializer
`Illuminate\JsonSchema\Deserializer`

```php
static function deserialize(array $schema): Illuminate\JsonSchema\Types\Type;
```

## class JsonSchema
`Illuminate\JsonSchema\JsonSchema`

```php
static function __callStatic(string $name, mixed $arguments): Illuminate\JsonSchema\Types\Type;
static function fromArray(array $schema): Illuminate\JsonSchema\Types\Type;
```

## class JsonSchemaTypeFactory
`Illuminate\JsonSchema\JsonSchemaTypeFactory` extends Illuminate\JsonSchema\JsonSchema implements Illuminate\Contracts\JsonSchema\JsonSchema

```php
function array(): Illuminate\JsonSchema\Types\ArrayType;
function boolean(): Illuminate\JsonSchema\Types\BooleanType;
function integer(): Illuminate\JsonSchema\Types\IntegerType;
function number(): Illuminate\JsonSchema\Types\NumberType;
function object(Closure|array $properties = []): Illuminate\JsonSchema\Types\ObjectType;
function string(): Illuminate\JsonSchema\Types\StringType;
static function __callStatic(string $name, mixed $arguments): Illuminate\JsonSchema\Types\Type;
static function fromArray(array $schema): Illuminate\JsonSchema\Types\Type;
```

## class Serializer
`Illuminate\JsonSchema\Serializer`

```php
static function serialize(Illuminate\JsonSchema\Types\Type $type): array;
```

