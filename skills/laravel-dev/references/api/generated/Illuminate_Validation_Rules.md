# Illuminate\Validation\Rules

Version: 13.14.0

## class AnyOf
`Illuminate\Validation\Rules\AnyOf` implements Illuminate\Contracts\Validation\Rule, Illuminate\Contracts\Validation\ValidatorAwareRule

```php
function __construct($rules);
function message();
function passes($attribute, $value);
function setValidator($validator);
```

## class ArrayRule
`Illuminate\Validation\Rules\ArrayRule` implements Stringable

```php
function __construct($keys = null);
function __toString(): string;
```

## class Can
`Illuminate\Validation\Rules\Can` implements Illuminate\Contracts\Validation\Rule, Illuminate\Contracts\Validation\ValidatorAwareRule

```php
function __construct($ability, array $arguments = []);
function message();
function passes($attribute, $value);
function setValidator($validator);
```

## class Contains
`Illuminate\Validation\Rules\Contains` implements Stringable

```php
function __construct($values);
function __toString(): string;
```

## trait DatabaseRule
`Illuminate\Validation\Rules\DatabaseRule`

```php
function __construct($table, $column = 'NULL');
function onlyTrashed($deletedAtColumn = 'deleted_at');
function queryCallbacks();
function resolveTableName($table);
function using(Closure $callback);
function where($column, $value = null);
function whereIn($column, $values);
function whereNot($column, $value);
function whereNotIn($column, $values);
function whereNotNull($column);
function whereNull($column);
function withoutTrashed($deletedAtColumn = 'deleted_at');
```

## class Date
`Illuminate\Validation\Rules\Date` implements Stringable

```php
function __call($method, $parameters);
function __toString(): string;
function after(DateTimeInterface|string $date): static;
function afterOrEqual(DateTimeInterface|string $date): static;
function afterToday(): static;
function before(DateTimeInterface|string $date): static;
function beforeOrEqual(DateTimeInterface|string $date): static;
function beforeToday(): static;
function between(DateTimeInterface|string $from, DateTimeInterface|string $to): static;
function betweenOrEqual(DateTimeInterface|string $from, DateTimeInterface|string $to): static;
function format(string $format): static;
function future(): static;
function nowOrFuture(): static;
function nowOrPast(): static;
function past(): static;
function todayOrAfter(): static;
function todayOrBefore(): static;
function unless($value = null, ?callable $callback = null, ?callable $default = null);
function when($value = null, ?callable $callback = null, ?callable $default = null);
static function __callStatic($method, $parameters);
static function flushMacros();
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
```

## class Dimensions
`Illuminate\Validation\Rules\Dimensions` implements Stringable

```php
function __construct(array $constraints = []);
function __toString(): string;
function height($value);
function maxHeight($value);
function maxRatio($value);
function maxWidth($value);
function minHeight($value);
function minRatio($value);
function minWidth($value);
function ratio($value);
function ratioBetween($min, $max);
function unless($value = null, ?callable $callback = null, ?callable $default = null);
function when($value = null, ?callable $callback = null, ?callable $default = null);
function width($value);
```

## class DoesntContain
`Illuminate\Validation\Rules\DoesntContain` implements Stringable

```php
function __construct($values);
function __toString(): string;
```

## class Email
`Illuminate\Validation\Rules\Email` implements Illuminate\Contracts\Validation\Rule, Illuminate\Contracts\Validation\DataAwareRule, Illuminate\Contracts\Validation\ValidatorAwareRule

```php
function __call($method, $parameters);
function message();
function passes($attribute, $value);
function preventSpoofing();
function rfcCompliant(bool $strict = false);
function rules($rules);
function setData($data);
function setValidator($validator);
function strict();
function unless($value = null, ?callable $callback = null, ?callable $default = null);
function validateMxRecord();
function when($value = null, ?callable $callback = null, ?callable $default = null);
function withNativeValidation(bool $allowUnicode = false);
static function __callStatic($method, $parameters);
static function default();
static function defaults($callback = null);
static function flushMacros();
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
```

## class Enum
`Illuminate\Validation\Rules\Enum` implements Illuminate\Contracts\Validation\Rule, Illuminate\Contracts\Validation\ValidatorAwareRule, Stringable

```php
function __construct($type);
function __toString(): string;
function except($values);
function message();
function only($values);
function passes($attribute, $value);
function setValidator($validator);
function unless($value = null, ?callable $callback = null, ?callable $default = null);
function when($value = null, ?callable $callback = null, ?callable $default = null);
```

## class ExcludeIf
`Illuminate\Validation\Rules\ExcludeIf` implements Stringable

```php
function __construct($condition);
function __toString(): string;
```

## class ExcludeUnless
`Illuminate\Validation\Rules\ExcludeUnless` implements Stringable

```php
function __construct($condition);
function __toString(): string;
```

## class Exists
`Illuminate\Validation\Rules\Exists` implements Stringable

```php
function __construct($table, $column = 'NULL');
function __toString(): string;
function onlyTrashed($deletedAtColumn = 'deleted_at');
function queryCallbacks();
function resolveTableName($table);
function unless($value = null, ?callable $callback = null, ?callable $default = null);
function using(Closure $callback);
function when($value = null, ?callable $callback = null, ?callable $default = null);
function where($column, $value = null);
function whereIn($column, $values);
function whereNot($column, $value);
function whereNotIn($column, $values);
function whereNotNull($column);
function whereNull($column);
function withoutTrashed($deletedAtColumn = 'deleted_at');
```

## class File
`Illuminate\Validation\Rules\File` implements Illuminate\Contracts\Validation\Rule, Illuminate\Contracts\Validation\DataAwareRule, Illuminate\Contracts\Validation\ValidatorAwareRule

```php
function __call($method, $parameters);
function between($minSize, $maxSize);
function encoding($encoding);
function extensions($extensions);
function max($size);
function message();
function min($size);
function passes($attribute, $value);
function rules($rules);
function setData($data);
function setValidator($validator);
function size($size);
function unless($value = null, ?callable $callback = null, ?callable $default = null);
function when($value = null, ?callable $callback = null, ?callable $default = null);
static function __callStatic($method, $parameters);
static function default();
static function defaults($callback = null);
static function flushMacros();
static function hasMacro($name);
static function image($allowSvg = false);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
static function types($mimetypes);
```

## class ImageFile
`Illuminate\Validation\Rules\ImageFile` extends Illuminate\Validation\Rules\File implements Illuminate\Contracts\Validation\ValidatorAwareRule, Illuminate\Contracts\Validation\DataAwareRule, Illuminate\Contracts\Validation\Rule

```php
function __call($method, $parameters);
function __construct($allowSvg = false);
function between($minSize, $maxSize);
function dimensions($dimensions);
function encoding($encoding);
function extensions($extensions);
function max($size);
function message();
function min($size);
function passes($attribute, $value);
function rules($rules);
function setData($data);
function setValidator($validator);
function size($size);
function unless($value = null, ?callable $callback = null, ?callable $default = null);
function when($value = null, ?callable $callback = null, ?callable $default = null);
static function __callStatic($method, $parameters);
static function default();
static function defaults($callback = null);
static function flushMacros();
static function hasMacro($name);
static function image($allowSvg = false);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
static function types($mimetypes);
```

## class In
`Illuminate\Validation\Rules\In` implements Stringable

```php
function __construct($values);
function __toString(): string;
```

## class NotIn
`Illuminate\Validation\Rules\NotIn` implements Stringable

```php
function __construct($values);
function __toString(): string;
```

## class Numeric
`Illuminate\Validation\Rules\Numeric` implements Stringable

```php
function __toString(): string;
function between(int|float $min, int|float $max): Illuminate\Validation\Rules\Numeric;
function decimal(int $min, ?int $max = null): Illuminate\Validation\Rules\Numeric;
function different(string $field): Illuminate\Validation\Rules\Numeric;
function digits(int $length): Illuminate\Validation\Rules\Numeric;
function digitsBetween(int $min, int $max): Illuminate\Validation\Rules\Numeric;
function exactly(int $value): Illuminate\Validation\Rules\Numeric;
function greaterThan(string $field): Illuminate\Validation\Rules\Numeric;
function greaterThanOrEqualTo(string $field): Illuminate\Validation\Rules\Numeric;
function integer(bool $strict = false): Illuminate\Validation\Rules\Numeric;
function lessThan(string $field): Illuminate\Validation\Rules\Numeric;
function lessThanOrEqualTo(string $field): Illuminate\Validation\Rules\Numeric;
function max(int|float $value): Illuminate\Validation\Rules\Numeric;
function maxDigits(int $value): Illuminate\Validation\Rules\Numeric;
function min(int|float $value): Illuminate\Validation\Rules\Numeric;
function minDigits(int $value): Illuminate\Validation\Rules\Numeric;
function multipleOf(int|float $value): Illuminate\Validation\Rules\Numeric;
function same(string $field): Illuminate\Validation\Rules\Numeric;
function unless($value = null, ?callable $callback = null, ?callable $default = null);
function when($value = null, ?callable $callback = null, ?callable $default = null);
```

## class Password
`Illuminate\Validation\Rules\Password` implements Illuminate\Contracts\Validation\DataAwareRule, Illuminate\Contracts\Validation\ImplicitRule, IteratorAggregate, Illuminate\Contracts\Validation\Rule, Illuminate\Contracts\Validation\ValidatorAwareRule, Traversable

```php
function __construct($min);
function appliedRules();
function getIterator(): Traversable;
function letters();
function max($size);
function message();
function mixedCase();
function numbers();
function passes($attribute, $value);
function rules($rules);
function setData($data);
function setValidator($validator);
function symbols();
function toPasswordRulesString();
function uncompromised($threshold = 0);
function unless($value = null, ?callable $callback = null, ?callable $default = null);
function when($value = null, ?callable $callback = null, ?callable $default = null);
static function default();
static function defaults($callback = null);
static function min($size);
static function required();
static function sometimes();
```

## class ProhibitedIf
`Illuminate\Validation\Rules\ProhibitedIf` implements Stringable

```php
function __construct($condition);
function __toString(): string;
```

## class ProhibitedUnless
`Illuminate\Validation\Rules\ProhibitedUnless` implements Stringable

```php
function __construct($condition);
function __toString(): string;
```

## class RequiredIf
`Illuminate\Validation\Rules\RequiredIf` implements Stringable

```php
function __construct($condition);
function __toString(): string;
```

## class RequiredUnless
`Illuminate\Validation\Rules\RequiredUnless` implements Stringable

```php
function __construct($condition);
function __toString(): string;
```

## class StringRule
`Illuminate\Validation\Rules\StringRule` implements Stringable

```php
function __toString(): string;
function alpha(bool $ascii = false): static;
function alphaDash(bool $ascii = false): static;
function alphaNumeric(bool $ascii = false): static;
function ascii(): static;
function between(int $min, int $max): static;
function doesntEndWith(string ...$values): static;
function doesntStartWith(string ...$values): static;
function endsWith(string ...$values): static;
function exactly(int $value): static;
function lowercase(): static;
function max(int $value): static;
function min(int $value): static;
function startsWith(string ...$values): static;
function unless($value = null, ?callable $callback = null, ?callable $default = null);
function uppercase(): static;
function when($value = null, ?callable $callback = null, ?callable $default = null);
```

## class Unique
`Illuminate\Validation\Rules\Unique` implements Stringable

```php
function __construct($table, $column = 'NULL');
function __toString(): string;
function ignore($id, $idColumn = null);
function ignoreModel($model, $idColumn = null);
function onlyTrashed($deletedAtColumn = 'deleted_at');
function queryCallbacks();
function resolveTableName($table);
function unless($value = null, ?callable $callback = null, ?callable $default = null);
function using(Closure $callback);
function when($value = null, ?callable $callback = null, ?callable $default = null);
function where($column, $value = null);
function whereIn($column, $values);
function whereNot($column, $value);
function whereNotIn($column, $values);
function whereNotNull($column);
function whereNull($column);
function withoutTrashed($deletedAtColumn = 'deleted_at');
```

