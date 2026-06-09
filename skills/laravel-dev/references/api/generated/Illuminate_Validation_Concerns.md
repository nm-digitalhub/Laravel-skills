# Illuminate\Validation\Concerns

Version: 13.14.0

## class FilterEmailValidation
`Illuminate\Validation\Concerns\FilterEmailValidation` implements Egulias\EmailValidator\Validation\EmailValidation

```php
function __construct($flags = null);
function getError(): ?Egulias\EmailValidator\Result\InvalidEmail;
function getWarnings(): array;
function isValid(string $email, Egulias\EmailValidator\EmailLexer $emailLexer): bool;
static function unicode();
```

## trait FormatsMessages
`Illuminate\Validation\Concerns\FormatsMessages`

```php
function getDisplayableAttribute($attribute);
function getDisplayableValue($attribute, $value);
function makeReplacements($message, $attribute, $rule, $parameters);
```

## trait ReplacesAttributes
`Illuminate\Validation\Concerns\ReplacesAttributes`

## trait ValidatesAttributes
`Illuminate\Validation\Concerns\ValidatesAttributes`

```php
function getQueryColumn($parameters, $attribute);
function guessColumnForQuery($attribute);
function isValidFileInstance($value);
function parseDependentRuleParameters($parameters);
function parseNamedParameters($parameters);
function parseTable($table);
function requireParameterCount($count, $parameters, $rule);
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
```

