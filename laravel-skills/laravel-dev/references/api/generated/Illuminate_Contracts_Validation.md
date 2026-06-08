# Illuminate\Contracts\Validation

Version: 13.14.0

## interface CompilableRules
`Illuminate\Contracts\Validation\CompilableRules`

```php
abstract function compile($attribute, $value, $data = null, $context = null);
```

## interface DataAwareRule
`Illuminate\Contracts\Validation\DataAwareRule`

```php
abstract function setData(array $data);
```

## interface Factory
`Illuminate\Contracts\Validation\Factory`

```php
abstract function extend($rule, $extension, $message = null);
abstract function extendImplicit($rule, $extension, $message = null);
abstract function make(array $data, array $rules, array $messages = [], array $attributes = []);
abstract function replacer($rule, $replacer);
```

## interface ImplicitRule
`Illuminate\Contracts\Validation\ImplicitRule` implements Illuminate\Contracts\Validation\Rule

```php
abstract function message();
abstract function passes($attribute, $value);
```

## interface InvokableRule
`Illuminate\Contracts\Validation\InvokableRule`

```php
abstract function __invoke(string $attribute, mixed $value, Closure $fail);
```

## interface Rule
`Illuminate\Contracts\Validation\Rule`

```php
abstract function message();
abstract function passes($attribute, $value);
```

## interface UncompromisedVerifier
`Illuminate\Contracts\Validation\UncompromisedVerifier`

```php
abstract function verify($data);
```

## interface ValidatesWhenResolved
`Illuminate\Contracts\Validation\ValidatesWhenResolved`

```php
abstract function validateResolved();
```

## interface ValidationRule
`Illuminate\Contracts\Validation\ValidationRule`

```php
abstract function validate(string $attribute, mixed $value, Closure $fail): void;
```

## interface Validator
`Illuminate\Contracts\Validation\Validator` implements Illuminate\Contracts\Support\MessageProvider

```php
abstract function after($callback);
abstract function errors();
abstract function failed();
abstract function fails();
abstract function getMessageBag();
abstract function sometimes($attribute, $rules, callable $callback);
abstract function validate();
abstract function validated();
```

## interface ValidatorAwareRule
`Illuminate\Contracts\Validation\ValidatorAwareRule`

```php
abstract function setValidator(Illuminate\Validation\Validator $validator);
```

