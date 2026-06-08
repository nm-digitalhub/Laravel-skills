# Illuminate\Validation

Version: 13.14.0

## class ClosureValidationRule
`Illuminate\Validation\ClosureValidationRule` implements Illuminate\Contracts\Validation\Rule, Illuminate\Contracts\Validation\ValidatorAwareRule

```php
function __construct($callback);
function message();
function passes($attribute, $value);
function setValidator($validator);
```

## class ConditionalRules
`Illuminate\Validation\ConditionalRules`

```php
function __construct($condition, $rules, $defaultRules = []);
function defaultRules(array $data = []);
function passes(array $data = []);
function rules(array $data = []);
```

## class DatabasePresenceVerifier
`Illuminate\Validation\DatabasePresenceVerifier` implements Illuminate\Validation\DatabasePresenceVerifierInterface, Illuminate\Validation\PresenceVerifierInterface

```php
function __construct(Illuminate\Database\ConnectionResolverInterface $db);
function getCount($collection, $column, $value, $excludeId = null, $idColumn = null, array $extra = []);
function getMultiCount($collection, $column, array $values, array $extra = []);
function setConnection($connection);
```

## interface DatabasePresenceVerifierInterface
`Illuminate\Validation\DatabasePresenceVerifierInterface` implements Illuminate\Validation\PresenceVerifierInterface

```php
abstract function getCount($collection, $column, $value, $excludeId = null, $idColumn = null, array $extra = []);
abstract function getMultiCount($collection, $column, array $values, array $extra = []);
abstract function setConnection($connection);
```

## class Factory
`Illuminate\Validation\Factory` implements Illuminate\Contracts\Validation\Factory

```php
function __construct(Illuminate\Contracts\Translation\Translator $translator, ?Illuminate\Contracts\Container\Container $container = null);
function excludeUnvalidatedArrayKeys();
function extend($rule, $extension, $message = null);
function extendDependent($rule, $extension, $message = null);
function extendImplicit($rule, $extension, $message = null);
function getContainer();
function getPresenceVerifier();
function getTranslator();
function includeUnvalidatedArrayKeys();
function make(array $data, array $rules, array $messages = [], array $attributes = []);
function replacer($rule, $replacer);
function resolver(Closure $resolver);
function setContainer(Illuminate\Contracts\Container\Container $container);
function setPresenceVerifier(Illuminate\Validation\PresenceVerifierInterface $presenceVerifier);
function validate(array $data, array $rules, array $messages = [], array $attributes = []);
```

## class InvokableValidationRule
`Illuminate\Validation\InvokableValidationRule` implements Illuminate\Contracts\Validation\Rule, Illuminate\Contracts\Validation\ValidatorAwareRule

```php
function invokable();
function message();
function passes($attribute, $value);
function setData($data);
function setValidator($validator);
static function make($invokable);
```

## class NestedRules
`Illuminate\Validation\NestedRules` implements Illuminate\Contracts\Validation\CompilableRules

```php
function __construct(callable $callback);
function compile($attribute, $value, $data = null, $context = null);
```

## class NotPwnedVerifier
`Illuminate\Validation\NotPwnedVerifier` implements Illuminate\Contracts\Validation\UncompromisedVerifier

```php
function __construct($factory, $timeout = null);
function verify($data);
```

## interface PresenceVerifierInterface
`Illuminate\Validation\PresenceVerifierInterface`

```php
abstract function getCount($collection, $column, $value, $excludeId = null, $idColumn = null, array $extra = []);
abstract function getMultiCount($collection, $column, array $values, array $extra = []);
```

## class Rule
`Illuminate\Validation\Rule`

```php
function __call($method, $parameters);
static function __callStatic($method, $parameters);
static function anyOf($rules);
static function array($keys = null);
static function can($ability, ...$arguments);
static function compile($attribute, $rules, $data = null);
static function contains($values);
static function date();
static function dateTime(): Illuminate\Validation\Rules\Date;
static function dimensions(array $constraints = []);
static function doesntContain($values);
static function email();
static function enum($type);
static function excludeIf($callback);
static function excludeUnless($callback);
static function exists($table, $column = 'NULL');
static function file();
static function flushMacros();
static function forEach($callback);
static function hasMacro($name);
static function imageFile($allowSvg = false);
static function in($values);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
static function notIn($values);
static function numeric();
static function prohibitedIf($callback);
static function prohibitedUnless($callback);
static function requiredIf($callback);
static function requiredUnless($callback);
static function string();
static function unique($table, $column = 'NULL');
static function unless($condition, $rules, $defaultRules = []);
static function when($condition, $rules, $defaultRules = []);
```

## class UnauthorizedException
`Illuminate\Validation\UnauthorizedException` extends RuntimeException implements Stringable, Throwable

```php
final function getCode();
final function getFile(): string;
final function getLine(): int;
final function getMessage(): string;
final function getPrevious(): ?Throwable;
final function getTrace(): array;
final function getTraceAsString(): string;
function __construct(string $message = '', int $code = 0, ?Throwable $previous = null);
function __toString(): string;
function __wakeup();
```

## trait ValidatesWhenResolvedTrait
`Illuminate\Validation\ValidatesWhenResolvedTrait`

```php
function validateResolved();
```

## class ValidationData
`Illuminate\Validation\ValidationData`

```php
static function extractDataFromPath($attribute, $masterData);
static function getLeadingExplicitAttributePath($attribute);
static function initializeAndGatherData($attribute, $masterData);
```

## class ValidationException
`Illuminate\Validation\ValidationException` extends Exception implements Throwable, Stringable

```php
final function getCode();
final function getFile(): string;
final function getLine(): int;
final function getMessage(): string;
final function getPrevious(): ?Throwable;
final function getTrace(): array;
final function getTraceAsString(): string;
function __construct($validator, $response = null, $errorBag = 'default');
function __toString(): string;
function __wakeup();
function errorBag($errorBag);
function errors();
function getResponse();
function redirectTo($url);
function status($status);
static function withMessages(array $messages);
```

## class ValidationRuleParser
`Illuminate\Validation\ValidationRuleParser`

```php
function __construct(array $data);
function explode($rules);
function mergeRules($results, $attribute, $rules = []);
static function filterConditionalRules($rules, array $data = []);
static function parse($rule);
```

## class ValidationServiceProvider
`Illuminate\Validation\ValidationServiceProvider` extends Illuminate\Support\ServiceProvider implements Illuminate\Contracts\Support\DeferrableProvider

```php
function __construct($app);
function booted(Closure $callback);
function booting(Closure $callback);
function callBootedCallbacks();
function callBootingCallbacks();
function commands($commands);
function isDeferred();
function provides();
function register();
function when();
static function addProviderToBootstrapFile(string $provider, ?string $path = null);
static function defaultProviders();
static function pathsToPublish($provider = null, $group = null);
static function publishableGroups();
static function publishableMigrationPaths();
static function publishableProviders();
static function removeProviderFromBootstrapFile(array|string $providersToRemove, ?string $path = null, bool $strict = false);
```

## class Validator
`Illuminate\Validation\Validator` implements Illuminate\Contracts\Validation\Validator, Illuminate\Contracts\Support\MessageProvider

```php
function __call($method, $parameters);
function __construct(Illuminate\Contracts\Translation\Translator $translator, array $data, array $rules, array $messages = [], array $attributes = []);
function addCustomAttributes(array $attributes);
function addCustomValues(array $customValues);
function addDependentExtension($rule, $extension);
function addDependentExtensions(array $extensions);
function addExtension($rule, $extension);
function addExtensions(array $extensions);
function addFailure($attribute, $rule, $parameters = []);
function addImplicitExtension($rule, $extension);
function addImplicitExtensions(array $extensions);
function addReplacer($rule, $replacer);
function addReplacers(array $replacers);
function addRules($rules);
function after($callback);
function appendRules(array $rules);
function attributes();
function ensureExponentWithinAllowedRangeUsing($callback);
function errors();
function failed();
function fails();
function getData();
function getDisplayableAttribute($attribute);
function getDisplayableValue($attribute, $value);
function getException();
function getMessageBag();
function getPresenceVerifier($connection = null);
function getQueryColumn($parameters, $attribute);
function getRules();
function getRulesWithoutPlaceholders();
function getTranslator();
function getValue($attribute);
function guessColumnForQuery($attribute);
function hasRule($attribute, $rules);
function invalid();
function isValidFileInstance($value);
function makeReplacements($message, $attribute, $rule, $parameters);
function messages();
function parseData(array $data);
function parseDependentRuleParameters($parameters);
function parseNamedParameters($parameters);
function parseTable($table);
function passes();
function requireParameterCount($count, $parameters, $rule);
function safe(?array $keys = null);
function setAttributeNames(array $attributes);
function setContainer(Illuminate\Contracts\Container\Container $container);
function setCustomMessages(array $messages);
function setData(array $data);
function setException($exception);
function setFallbackMessages(array $messages);
function setImplicitAttributesFormatter(?callable $formatter = null);
function setPresenceVerifier(Illuminate\Validation\PresenceVerifierInterface $presenceVerifier);
function setRules(array $rules);
function setTranslator(Illuminate\Contracts\Translation\Translator $translator);
function setValue($attribute, $value);
function setValueNames(array $values);
function sometimes($attribute, $rules, callable $callback);
function stopOnFirstFailure($stopOnFirstFailure = true);
function valid();
function validate();
function validateAccepted($attribute, $value);
function validateAcceptedIf($attribute, $value, $parameters);
function validateActiveUrl($attribute, $value);
function validateAfter($attribute, $value, $parameters);
function validateAfterOrEqual($attribute, $value, $parameters);
function validateAlpha($attribute, $value, $parameters);
function validateAlphaDash($attribute, $value, $parameters);
function validateAlphaNum($attribute, $value, $parameters);
function validateArray($attribute, $value, $parameters = []);
function validateAscii($attribute, $value);
function validateBail();
function validateBefore($attribute, $value, $parameters);
function validateBeforeOrEqual($attribute, $value, $parameters);
function validateBetween($attribute, $value, $parameters);
function validateBoolean($attribute, $value, $parameters);
function validateConfirmed($attribute, $value, $parameters);
function validateContains($attribute, $value, $parameters);
function validateDate($attribute, $value);
function validateDateEquals($attribute, $value, $parameters);
function validateDateFormat($attribute, $value, $parameters);
function validateDecimal($attribute, $value, $parameters);
function validateDeclined($attribute, $value);
function validateDeclinedIf($attribute, $value, $parameters);
function validateDifferent($attribute, $value, $parameters);
function validateDigits($attribute, $value, $parameters);
function validateDigitsBetween($attribute, $value, $parameters);
function validateDimensions($attribute, $value, $parameters);
function validateDistinct($attribute, $value, $parameters);
function validateDoesntContain($attribute, $value, $parameters);
function validateDoesntEndWith($attribute, $value, $parameters);
function validateDoesntStartWith($attribute, $value, $parameters);
function validateEmail($attribute, $value, $parameters);
function validateEncoding($attribute, $value, $parameters);
function validateEndsWith($attribute, $value, $parameters);
function validateExclude();
function validateExcludeIf($attribute, $value, $parameters);
function validateExcludeUnless($attribute, $value, $parameters);
function validateExcludeWith($attribute, $value, $parameters);
function validateExcludeWithout($attribute, $value, $parameters);
function validateExists($attribute, $value, $parameters);
function validateExtensions($attribute, $value, $parameters);
function validateFile($attribute, $value);
function validateFilled($attribute, $value);
function validateGt($attribute, $value, $parameters);
function validateGte($attribute, $value, $parameters);
function validateHexColor($attribute, $value);
function validateImage($attribute, $value, $parameters = []);
function validateIn($attribute, $value, $parameters);
function validateInArray($attribute, $value, $parameters);
function validateInArrayKeys($attribute, $value, $parameters);
function validateInteger($attribute, $value, array $parameters = []);
function validateIp($attribute, $value);
function validateIpv4($attribute, $value);
function validateIpv6($attribute, $value);
function validateJson($attribute, $value);
function validateList($attribute, $value);
function validateLowercase($attribute, $value);
function validateLt($attribute, $value, $parameters);
function validateLte($attribute, $value, $parameters);
function validateMacAddress($attribute, $value);
function validateMax($attribute, $value, $parameters);
function validateMaxDigits($attribute, $value, $parameters);
function validateMimes($attribute, $value, $parameters);
function validateMimetypes($attribute, $value, $parameters);
function validateMin($attribute, $value, $parameters);
function validateMinDigits($attribute, $value, $parameters);
function validateMissing($attribute, $value, $parameters);
function validateMissingIf($attribute, $value, $parameters);
function validateMissingUnless($attribute, $value, $parameters);
function validateMissingWith($attribute, $value, $parameters);
function validateMissingWithAll($attribute, $value, $parameters);
function validateMultipleOf($attribute, $value, $parameters);
function validateNotIn($attribute, $value, $parameters);
function validateNotRegex($attribute, $value, $parameters);
function validateNullable();
function validateNumeric($attribute, $value, array $parameters);
function validatePresent($attribute, $value);
function validatePresentIf($attribute, $value, $parameters);
function validatePresentUnless($attribute, $value, $parameters);
function validatePresentWith($attribute, $value, $parameters);
function validatePresentWithAll($attribute, $value, $parameters);
function validateProhibited($attribute, $value);
function validateProhibitedIf($attribute, $value, $parameters);
function validateProhibitedIfAccepted($attribute, $value, $parameters);
function validateProhibitedIfDeclined($attribute, $value, $parameters);
function validateProhibitedUnless($attribute, $value, $parameters);
function validateProhibits($attribute, $value, $parameters);
function validateRegex($attribute, $value, $parameters);
function validateRequired($attribute, $value);
function validateRequiredArrayKeys($attribute, $value, $parameters);
function validateRequiredIf($attribute, $value, $parameters);
function validateRequiredIfAccepted($attribute, $value, $parameters);
function validateRequiredIfDeclined($attribute, $value, $parameters);
function validateRequiredUnless($attribute, $value, $parameters);
function validateRequiredWith($attribute, $value, $parameters);
function validateRequiredWithAll($attribute, $value, $parameters);
function validateRequiredWithout($attribute, $value, $parameters);
function validateRequiredWithoutAll($attribute, $value, $parameters);
function validateSame($attribute, $value, $parameters);
function validateSize($attribute, $value, $parameters);
function validateSometimes();
function validateStartsWith($attribute, $value, $parameters);
function validateString($attribute, $value);
function validateTimezone($attribute, $value, $parameters = []);
function validateUlid($attribute, $value);
function validateUnique($attribute, $value, $parameters);
function validateUppercase($attribute, $value);
function validateUrl($attribute, $value, $parameters = []);
function validateUuid($attribute, $value, $parameters);
function validateWithBag(string $errorBag);
function validated();
function whenFails(callable $callback, ?callable $default = null);
function whenPasses(callable $callback, ?callable $default = null);
static function flushState();
```

