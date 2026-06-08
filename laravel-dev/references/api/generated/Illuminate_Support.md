# Illuminate\Support

Version: 13.14.0

## class AggregateServiceProvider
`Illuminate\Support\AggregateServiceProvider` extends Illuminate\Support\ServiceProvider

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

## class Arr
`Illuminate\Support\Arr`

```php
function __call($method, $parameters);
static function __callStatic($method, $parameters);
static function accessible($value);
static function add($array, $key, $value);
static function array(ArrayAccess|array $array, string|int|null $key, ?array $default = null): array;
static function arrayable($value);
static function boolean(ArrayAccess|array $array, string|int|null $key, ?bool $default = null): bool;
static function collapse($array);
static function crossJoin(...$arrays);
static function divide($array);
static function dot($array, $prepend = '', $depth = INF);
static function every($array, callable $callback);
static function except($array, $keys);
static function exceptValues($array, $values, $strict = false);
static function exists($array, $key);
static function first($array, ?callable $callback = null, $default = null);
static function flatten($array, $depth = INF);
static function float(ArrayAccess|array $array, string|int|null $key, ?float $default = null): float;
static function flushMacros();
static function forget(&$array, $keys);
static function from($items);
static function get($array, $key, $default = null);
static function has($array, $keys);
static function hasAll($array, $keys);
static function hasAny($array, $keys);
static function hasMacro($name);
static function integer(ArrayAccess|array $array, string|int|null $key, ?int $default = null): int;
static function isAssoc(array $array);
static function isList($array);
static function join($array, $glue, $finalGlue = '');
static function keyBy($array, $keyBy);
static function last($array, ?callable $callback = null, $default = null);
static function macro($name, $macro);
static function map(array $array, callable $callback);
static function mapSpread(array $array, callable $callback);
static function mapWithKeys(array $array, callable $callback);
static function mixin($mixin, $replace = true);
static function only($array, $keys);
static function onlyValues($array, $values, $strict = false);
static function partition($array, callable $callback);
static function pluck($array, $value, $key = null);
static function prepend($array, $value, $key = null);
static function prependKeysWith($array, $prependWith);
static function pull(&$array, $key, $default = null);
static function push(ArrayAccess|array &$array, string|int|null $key, mixed ...$values): array;
static function query($array);
static function random($array, $number = null, $preserveKeys = false);
static function reject($array, callable $callback);
static function select($array, $keys);
static function set(&$array, $key, $value);
static function shuffle($array);
static function sole($array, ?callable $callback = null);
static function some($array, callable $callback);
static function sort($array, $callback = null);
static function sortDesc($array, $callback = null);
static function sortRecursive($array, $options = 0, $descending = false);
static function sortRecursiveDesc($array, $options = 0);
static function string(ArrayAccess|array $array, string|int|null $key, ?string $default = null): string;
static function take($array, $limit);
static function toCssClasses($array);
static function toCssStyles($array);
static function undot($array);
static function where($array, callable $callback);
static function whereNotNull($array);
static function wrap($value);
```

## class Benchmark
`Illuminate\Support\Benchmark`

```php
function __call($method, $parameters);
static function __callStatic($method, $parameters);
static function dd(Closure|array $benchmarkables, int $iterations = 1): never;
static function flushMacros();
static function hasMacro($name);
static function macro($name, $macro);
static function measure(Closure|array $benchmarkables, int $iterations = 1): array|float;
static function mixin($mixin, $replace = true);
static function value(callable $callback): array;
```

## class BinaryCodec
`Illuminate\Support\BinaryCodec`

```php
static function decode(?string $value, string $format): ?string;
static function encode(Ramsey\Uuid\UuidInterface|Symfony\Component\Uid\Ulid|string|null $value, string $format): ?string;
static function formats(): array;
static function isBinary(mixed $value): bool;
static function register(string $name, callable $encode, callable $decode): void;
```

## class Carbon
`Illuminate\Support\Carbon` extends Carbon\Carbon implements JsonSerializable, Carbon\Constants\DiffOptions, Carbon\Constants\Format, Carbon\Constants\TranslationOptions, Carbon\Constants\UnitValue, Stringable, Carbon\CarbonInterface, DateTimeInterface

```php
function __call(string $method, array $parameters): mixed;
function __clone(): void;
function __construct(DateTimeInterface|Carbon\WeekDay|Carbon\Month|string|int|float|null $time = null, DateTimeZone|string|int|null $timezone = null);
function __debugInfo(): array;
function __get(string $name): mixed;
function __isset($name);
function __serialize(): array;
function __set($name, $value);
function __toString(): string;
function __unserialize(array $data): void;
function __wakeup();
function add($unit, $value = 1, ?bool $overflow = null): static;
function addRealUnit(string $unit, $value = 1): static;
function addUTCUnit(string $unit, $value = 1): static;
function addUnit(Carbon\Unit|string $unit, $value = 1, ?bool $overflow = null): static;
function addUnitNoOverflow(string $valueUnit, int $value, string $overflowUnit): static;
function ago($syntax = null, $short = false, $parts = 1, $options = null);
function average($date = null);
function avoidMutation(): static;
function between(DateTimeInterface|string $date1, DateTimeInterface|string $date2, bool $equal = true): bool;
function betweenExcluded(DateTimeInterface|string $date1, DateTimeInterface|string $date2): bool;
function betweenIncluded(DateTimeInterface|string $date1, DateTimeInterface|string $date2): bool;
function calendar($referenceTime = null, array $formats = []);
function carbonize($date = null);
function cast(string $className): mixed;
function ceil(DateInterval|string|int|float $precision = 1): static;
function ceilUnit(string $unit, DateInterval|string|int|float $precision = 1): static;
function ceilWeek(Carbon\WeekDay|int|null $weekStartsAt = null): static;
function change($modifier);
function cleanupDumpProperties(): self;
function clone();
function closest($date1, $date2);
function copy();
function dayOfYear(?int $value = null): static|int;
function dd(...$args);
function diff($date = null, bool $absolute = false, array $skip = []): Carbon\CarbonInterval;
function diffAsCarbonInterval($date = null, bool $absolute = false, array $skip = []): Carbon\CarbonInterval;
function diffAsDateInterval($date = null, bool $absolute = false): DateInterval;
function diffFiltered(Carbon\CarbonInterval $ci, Closure $callback, $date = null, bool $absolute = false): int;
function diffForHumans($other = null, $syntax = null, $short = false, $parts = 1, $options = null): string;
function diffInDays($date = null, bool $absolute = false, bool $utc = false): float;
function diffInDaysFiltered(Closure $callback, $date = null, bool $absolute = false): int;
function diffInHours($date = null, bool $absolute = false): float;
function diffInHoursFiltered(Closure $callback, $date = null, bool $absolute = false): int;
function diffInMicroseconds($date = null, bool $absolute = false): float;
function diffInMilliseconds($date = null, bool $absolute = false): float;
function diffInMinutes($date = null, bool $absolute = false): float;
function diffInMonths($date = null, bool $absolute = false, bool $utc = false): float;
function diffInQuarters($date = null, bool $absolute = false, bool $utc = false): float;
function diffInSeconds($date = null, bool $absolute = false): float;
function diffInUnit(Carbon\Unit|string $unit, $date = null, bool $absolute = false, bool $utc = false): float;
function diffInWeekdays($date = null, bool $absolute = false): int;
function diffInWeekendDays($date = null, bool $absolute = false): int;
function diffInWeeks($date = null, bool $absolute = false, bool $utc = false): float;
function diffInYears($date = null, bool $absolute = false, bool $utc = false): float;
function dump(...$args);
function endOf(Carbon\Unit|string $unit, mixed ...$params): static;
function endOfCentury();
function endOfDay();
function endOfDecade();
function endOfHour(): static;
function endOfMillennium();
function endOfMillisecond(): static;
function endOfMinute(): static;
function endOfMonth();
function endOfQuarter();
function endOfSecond(): static;
function endOfWeek(Carbon\WeekDay|int|null $weekEndsAt = null): static;
function endOfYear();
function eq(DateTimeInterface|string $date): bool;
function equalTo(DateTimeInterface|string $date): bool;
function farthest($date1, $date2);
function firstOfMonth($dayOfWeek = null);
function firstOfQuarter($dayOfWeek = null);
function firstOfYear($dayOfWeek = null);
function floor(DateInterval|string|int|float $precision = 1): static;
function floorUnit(string $unit, DateInterval|string|int|float $precision = 1): static;
function floorWeek(Carbon\WeekDay|int|null $weekStartsAt = null): static;
function format(string $format): string;
function from($other = null, $syntax = null, $short = false, $parts = 1, $options = null);
function fromNow($syntax = null, $short = false, $parts = 1, $options = null);
function get(Carbon\Unit|string $name): mixed;
function getAltNumber(string $key): string;
function getCalendarFormats(?string $locale = null): array;
function getClock(): ?Carbon\WrapperClock;
function getDaysFromStartOfWeek(Carbon\WeekDay|int|null $weekStartsAt = null): int;
function getIsoFormats(?string $locale = null): array;
function getLocalMacro(string $name): ?callable;
function getLocalTranslator(): Symfony\Contracts\Translation\TranslatorInterface;
function getOffset();
function getOffsetString(string $separator = ':'): string;
function getPaddedUnit($unit, $length = 2, $padString = '0', $padType = 0): string;
function getPreciseTimestamp($precision = 6): float;
function getSettings(): array;
function getTimestamp();
function getTimestampMs(): int;
function getTimezone(): Carbon\CarbonTimeZone;
function getTranslatedDayName(?string $context = null, string $keySuffix = '', ?string $defaultValue = null): string;
function getTranslatedMinDayName(?string $context = null): string;
function getTranslatedMonthName(?string $context = null, string $keySuffix = '', ?string $defaultValue = null): string;
function getTranslatedShortDayName(?string $context = null): string;
function getTranslatedShortMonthName(?string $context = null): string;
function getTranslationMessage(string $key, ?string $locale = null, ?string $default = null, $translator = null);
function greaterThan(DateTimeInterface|string $date): bool;
function greaterThanOrEqualTo(DateTimeInterface|string $date): bool;
function gt(DateTimeInterface|string $date): bool;
function gte(DateTimeInterface|string $date): bool;
function hasLocalMacro(string $name): bool;
function hasLocalTranslator(): bool;
function is(Carbon\WeekDay|Carbon\Month|string $tester): bool;
function isAfter(DateTimeInterface|string $date): bool;
function isBefore(DateTimeInterface|string $date): bool;
function isBetween(DateTimeInterface|string $date1, DateTimeInterface|string $date2, bool $equal = true): bool;
function isBirthday(DateTimeInterface|string|null $date = null): bool;
function isCurrentUnit(string $unit): bool;
function isDayOfWeek($dayOfWeek): bool;
function isEndOfCentury(Carbon\Unit|DateInterval|Closure|Carbon\CarbonConverterInterface|string|null $interval = null): bool;
function isEndOfDay(Carbon\Unit|DateInterval|Closure|Carbon\CarbonConverterInterface|string|bool $checkMicroseconds = false, Carbon\Unit|DateInterval|Closure|Carbon\CarbonConverterInterface|string|null $interval = null): bool;
function isEndOfDecade(Carbon\Unit|DateInterval|Closure|Carbon\CarbonConverterInterface|string|null $interval = null): bool;
function isEndOfHour(Carbon\Unit|DateInterval|Closure|Carbon\CarbonConverterInterface|string|null $interval = null): bool;
function isEndOfMillennium(Carbon\Unit|DateInterval|Closure|Carbon\CarbonConverterInterface|string|null $interval = null): bool;
function isEndOfMillisecond(Carbon\Unit|DateInterval|Closure|Carbon\CarbonConverterInterface|string|null $interval = null): bool;
function isEndOfMinute(Carbon\Unit|DateInterval|Closure|Carbon\CarbonConverterInterface|string|null $interval = null): bool;
function isEndOfMonth(Carbon\Unit|DateInterval|Closure|Carbon\CarbonConverterInterface|string|null $interval = null): bool;
function isEndOfQuarter(Carbon\Unit|DateInterval|Closure|Carbon\CarbonConverterInterface|string|null $interval = null): bool;
function isEndOfSecond(Carbon\Unit|DateInterval|Closure|Carbon\CarbonConverterInterface|string|null $interval = null): bool;
function isEndOfTime(): bool;
function isEndOfUnit(Carbon\Unit $unit, Carbon\Unit|DateInterval|Closure|Carbon\CarbonConverterInterface|string|null $interval = null, mixed ...$params): bool;
function isEndOfWeek(Carbon\Unit|DateInterval|Closure|Carbon\CarbonConverterInterface|string|null $interval = null, Carbon\WeekDay|int|null $weekEndsAt = null): bool;
function isEndOfYear(Carbon\Unit|DateInterval|Closure|Carbon\CarbonConverterInterface|string|null $interval = null): bool;
function isFuture(): bool;
function isLastOfMonth(): bool;
function isLeapYear(): bool;
function isLongIsoYear(): bool;
function isLongYear(): bool;
function isMidday(): bool;
function isMidnight(): bool;
function isNowOrFuture(): bool;
function isNowOrPast(): bool;
function isPast(): bool;
function isSameAs(string $format, DateTimeInterface|string $date): bool;
function isSameMonth(DateTimeInterface|string $date, bool $ofSameYear = true): bool;
function isSameQuarter(DateTimeInterface|string $date, bool $ofSameYear = true): bool;
function isSameUnit(string $unit, DateTimeInterface|string $date): bool;
function isStartOfCentury(Carbon\Unit|DateInterval|Closure|Carbon\CarbonConverterInterface|string|null $interval = null): bool;
function isStartOfDay(Carbon\Unit|DateInterval|Closure|Carbon\CarbonConverterInterface|string|bool $checkMicroseconds = false, Carbon\Unit|DateInterval|Closure|Carbon\CarbonConverterInterface|string|null $interval = null): bool;
function isStartOfDecade(Carbon\Unit|DateInterval|Closure|Carbon\CarbonConverterInterface|string|null $interval = null): bool;
function isStartOfHour(Carbon\Unit|DateInterval|Closure|Carbon\CarbonConverterInterface|string|null $interval = null): bool;
function isStartOfMillennium(Carbon\Unit|DateInterval|Closure|Carbon\CarbonConverterInterface|string|null $interval = null): bool;
function isStartOfMillisecond(Carbon\Unit|DateInterval|Closure|Carbon\CarbonConverterInterface|string|null $interval = null): bool;
function isStartOfMinute(Carbon\Unit|DateInterval|Closure|Carbon\CarbonConverterInterface|string|null $interval = null): bool;
function isStartOfMonth(Carbon\Unit|DateInterval|Closure|Carbon\CarbonConverterInterface|string|null $interval = null): bool;
function isStartOfQuarter(Carbon\Unit|DateInterval|Closure|Carbon\CarbonConverterInterface|string|null $interval = null): bool;
function isStartOfSecond(Carbon\Unit|DateInterval|Closure|Carbon\CarbonConverterInterface|string|null $interval = null): bool;
function isStartOfTime(): bool;
function isStartOfUnit(Carbon\Unit $unit, Carbon\Unit|DateInterval|Closure|Carbon\CarbonConverterInterface|string|null $interval = null, mixed ...$params): bool;
function isStartOfWeek(Carbon\Unit|DateInterval|Closure|Carbon\CarbonConverterInterface|string|null $interval = null, Carbon\WeekDay|int|null $weekStartsAt = null): bool;
function isStartOfYear(Carbon\Unit|DateInterval|Closure|Carbon\CarbonConverterInterface|string|null $interval = null): bool;
function isToday(): bool;
function isTomorrow(): bool;
function isWeekday(): bool;
function isWeekend(): bool;
function isYesterday(): bool;
function isoFormat(string $format, ?string $originalFormat = null): string;
function isoWeek($week = null, $dayOfWeek = null, $dayOfYear = null);
function isoWeekYear($year = null, $dayOfWeek = null, $dayOfYear = null);
function isoWeekday(Carbon\WeekDay|int|null $value = null): static|int;
function isoWeeksInYear($dayOfWeek = null, $dayOfYear = null);
function jsonSerialize(): mixed;
function lastOfMonth($dayOfWeek = null);
function lastOfQuarter($dayOfWeek = null);
function lastOfYear($dayOfWeek = null);
function lessThan(DateTimeInterface|string $date): bool;
function lessThanOrEqualTo(DateTimeInterface|string $date): bool;
function locale(?string $locale = null, string ...$fallbackLocales): static|string;
function lt(DateTimeInterface|string $date): bool;
function lte(DateTimeInterface|string $date): bool;
function max($date = null);
function maximum($date = null);
function meridiem(bool $isLower = false): string;
function midDay();
function min($date = null);
function minimum($date = null);
function minus(int $years = 0, int $months = 0, int $weeks = 0, int $days = 0, int $hours = 0, int $minutes = 0, int $seconds = 0, int $microseconds = 0, ?bool $overflow = null): static;
function modify($modify);
function ne(DateTimeInterface|string $date): bool;
function next($modifier = null);
function nextWeekday();
function nextWeekendDay();
function notEqualTo(DateTimeInterface|string $date): bool;
function nowWithSameTz(): static;
function nthOfMonth($nth, $dayOfWeek);
function nthOfQuarter($nth, $dayOfWeek);
function nthOfYear($nth, $dayOfWeek);
function ordinal(string $key, ?string $period = null): string;
function plus(int $years = 0, int $months = 0, int $weeks = 0, int $days = 0, int $hours = 0, int $minutes = 0, int $seconds = 0, int $microseconds = 0, ?bool $overflow = null): static;
function previous($modifier = null);
function previousWeekday();
function previousWeekendDay();
function range($end = null, $interval = null, $unit = null): Carbon\CarbonPeriod;
function rawAdd(DateInterval $interval): static;
function rawFormat(string $format): string;
function rawSub(DateInterval $interval): static;
function round(DateInterval|string|int|float $precision = 1, callable|string $function = 'round'): static;
function roundUnit(string $unit, DateInterval|string|int|float $precision = 1, callable|string $function = 'round'): static;
function roundWeek(Carbon\WeekDay|int|null $weekStartsAt = null): static;
function secondsSinceMidnight(): float;
function secondsUntilEndOfDay(): float;
function serialize(): string;
function set(Carbon\Unit|array|string $name, DateTimeZone|Carbon\Month|string|int|float|null $value = null): static;
function setDate(int $year, int $month, int $day): static;
function setDateFrom(DateTimeInterface|string $date): static;
function setDateTime(int $year, int $month, int $day, int $hour, int $minute, int $second = 0, int $microseconds = 0): static;
function setDateTimeFrom(DateTimeInterface|string $date): static;
function setDaysFromStartOfWeek(int $numberOfDays, Carbon\WeekDay|int|null $weekStartsAt = null): static;
function setISODate(int $year, int $week, int $day = 1): static;
function setLocalTranslator(Symfony\Contracts\Translation\TranslatorInterface $translator): self;
function setTime(int $hour, int $minute, int $second = 0, int $microseconds = 0): static;
function setTimeFrom(DateTimeInterface|string $date): static;
function setTimeFromTimeString(string $time): static;
function setTimestamp(string|int|float $timestamp): static;
function setTimezone(DateTimeZone|string|int $timeZone): static;
function setUnit(string $unit, Carbon\Month|int|float|null $value = null): static;
function setUnitNoOverflow(string $valueUnit, int $value, string $overflowUnit): static;
function settings(array $settings): static;
function shiftTimezone(DateTimeZone|string $value): static;
function since($other = null, $syntax = null, $short = false, $parts = 1, $options = null);
function startOf(Carbon\Unit|string $unit, mixed ...$params): static;
function startOfCentury();
function startOfDay();
function startOfDecade();
function startOfHour(): static;
function startOfMillennium();
function startOfMillisecond(): static;
function startOfMinute(): static;
function startOfMonth();
function startOfQuarter();
function startOfSecond(): static;
function startOfWeek(Carbon\WeekDay|int|null $weekStartsAt = null): static;
function startOfYear();
function sub($unit, $value = 1, ?bool $overflow = null): static;
function subRealUnit($unit, $value = 1): static;
function subUTCUnit($unit, $value = 1): static;
function subUnit(Carbon\Unit|string $unit, $value = 1, ?bool $overflow = null): static;
function subUnitNoOverflow(string $valueUnit, int $value, string $overflowUnit): static;
function subtract($unit, $value = 1, ?bool $overflow = null): static;
function timespan($other = null, $timezone = null): string;
function timestamp(string|int|float $timestamp): static;
function timezone(DateTimeZone|string|int $value): static;
function to($other = null, $syntax = null, $short = false, $parts = 1, $options = null);
function toArray(): array;
function toAtomString(): string;
function toCookieString(): string;
function toDate(): DateTime;
function toDateString(): string;
function toDateTime(): DateTime;
function toDateTimeImmutable(): DateTimeImmutable;
function toDateTimeLocalString(string $unitPrecision = 'second'): string;
function toDateTimeString(string $unitPrecision = 'second'): string;
function toDayDateTimeString(): string;
function toFormattedDateString(): string;
function toFormattedDayDateString(): string;
function toISOString(bool $keepOffset = false): ?string;
function toImmutable(): Carbon\CarbonImmutable;
function toIso8601String(): string;
function toIso8601ZuluString(string $unitPrecision = 'second'): string;
function toJSON(): ?string;
function toMutable(): Carbon\Carbon;
function toNow($syntax = null, $short = false, $parts = 1, $options = null);
function toObject(): object;
function toPeriod($end = null, $interval = null, $unit = null): Carbon\CarbonPeriod;
function toRfc1036String(): string;
function toRfc1123String(): string;
function toRfc2822String(): string;
function toRfc3339String(bool $extended = false): string;
function toRfc7231String(): string;
function toRfc822String(): string;
function toRfc850String(): string;
function toRssString(): string;
function toString(): string;
function toTimeString(string $unitPrecision = 'second'): string;
function toW3cString(): string;
function translate(string $key, array $parameters = [], string|int|float|null $number = null, ?Symfony\Contracts\Translation\TranslatorInterface $translator = null, bool $altNumbers = false): string;
function translateNumber(int $number): string;
function translateTimeStringTo(string $timeString, ?string $to = null): string;
function translatedFormat(string $format): string;
function tz(DateTimeZone|string|int|null $value = null): static|string;
function unix(): int;
function unless($value = null, ?callable $callback = null, ?callable $default = null);
function until($other = null, $syntax = null, $short = false, $parts = 1, $options = null);
function utc(): static;
function utcOffset(?int $minuteOffset = null): static|int;
function valueOf(): float;
function week($week = null, $dayOfWeek = null, $dayOfYear = null);
function weekYear($year = null, $dayOfWeek = null, $dayOfYear = null);
function weekday(Carbon\WeekDay|int|null $value = null): static|int;
function weeksInYear($dayOfWeek = null, $dayOfYear = null);
function when($value = null, ?callable $callback = null, ?callable $default = null);
static function __callStatic(string $method, array $parameters): mixed;
static function __set_state($dump): static;
static function canBeCreatedFromFormat(?string $date, string $format): bool;
static function create($year = 0, $month = 1, $day = 1, $hour = 0, $minute = 0, $second = 0, $timezone = null): ?static;
static function createFromDate($year = null, $month = null, $day = null, $timezone = null);
static function createFromFormat($format, $time, $timezone = null): ?static;
static function createFromId(Ramsey\Uuid\Uuid|Symfony\Component\Uid\Ulid|string $id): static;
static function createFromImmutable(DateTimeImmutable $object);
static function createFromInterface(DateTimeInterface $object): DateTime;
static function createFromIsoFormat(string $format, string $time, $timezone = null, ?string $locale = 'en', ?Symfony\Contracts\Translation\TranslatorInterface $translator = null): ?static;
static function createFromLocaleFormat(string $format, string $locale, string $time, $timezone = null): ?static;
static function createFromLocaleIsoFormat(string $format, string $locale, string $time, $timezone = null): ?static;
static function createFromTime($hour = 0, $minute = 0, $second = 0, $timezone = null): static;
static function createFromTimeString(string $time, DateTimeZone|string|int|null $timezone = null): static;
static function createFromTimestamp(string|int|float $timestamp, DateTimeZone|string|int|null $timezone = null): static;
static function createFromTimestampMs(string|int|float $timestamp, DateTimeZone|string|int|null $timezone = null): static;
static function createFromTimestampMsUTC($timestamp): static;
static function createFromTimestampUTC(string|int|float $timestamp): static;
static function createMidnightDate($year = null, $month = null, $day = null, $timezone = null);
static function createSafe($year = null, $month = null, $day = null, $hour = null, $minute = null, $second = null, $timezone = null): ?static;
static function createStrict(?int $year = 0, ?int $month = 1, ?int $day = 1, ?int $hour = 0, ?int $minute = 0, ?int $second = 0, $timezone = null): static;
static function disableHumanDiffOption(int $humanDiffOption): void;
static function enableHumanDiffOption(int $humanDiffOption): void;
static function executeWithLocale(string $locale, callable $func): mixed;
static function fromSerialized($value, array $options = []): static;
static function genericMacro(callable $macro, int $priority = 0): void;
static function getAvailableLocales(): array;
static function getAvailableLocalesInfo(): array;
static function getDays(): array;
static function getFallbackLocale(): ?string;
static function getFormatsToIsoReplacements(): array;
static function getHumanDiffOptions(): int;
static function getIsoUnits(): array;
static function getLastErrors(): array|false;
static function getLocale(): string;
static function getMacro(string $name): ?callable;
static function getMidDayAt();
static function getTestNow(): Closure|Carbon\CarbonInterface|null;
static function getTimeFormatByPrecision(string $unitPrecision): string;
static function getTranslationMessageWith($translator, string $key, ?string $locale = null, ?string $default = null);
static function getTranslator(): Symfony\Contracts\Translation\TranslatorInterface;
static function getWeekEndsAt(?string $locale = null): int;
static function getWeekStartsAt(?string $locale = null): int;
static function getWeekendDays(): array;
static function hasFormat(string $date, string $format): bool;
static function hasFormatWithModifiers(?string $date, string $format): bool;
static function hasMacro(string $name): bool;
static function hasRelativeKeywords(?string $time): bool;
static function hasTestNow(): bool;
static function instance(DateTimeInterface $date): static;
static function isImmutable(): bool;
static function isModifiableUnit($unit): bool;
static function isMutable(): bool;
static function isStrictModeEnabled(): bool;
static function localeHasDiffOneDayWords(string $locale): bool;
static function localeHasDiffSyntax(string $locale): bool;
static function localeHasDiffTwoDayWords(string $locale): bool;
static function localeHasPeriodSyntax($locale);
static function localeHasShortUnits(string $locale): bool;
static function macro(string $name, ?callable $macro): void;
static function make($var, DateTimeZone|string|null $timezone = null): ?static;
static function mixin(object|string $mixin): void;
static function now(DateTimeZone|string|int|null $timezone = null): static;
static function parse(DateTimeInterface|Carbon\WeekDay|Carbon\Month|string|int|float|null $time, DateTimeZone|string|int|null $timezone = null): static;
static function parseFromLocale(string $time, ?string $locale = null, DateTimeZone|string|int|null $timezone = null): static;
static function pluralUnit(string $unit): string;
static function rawCreateFromFormat(string $format, string $time, $timezone = null): ?static;
static function rawParse(DateTimeInterface|Carbon\WeekDay|Carbon\Month|string|int|float|null $time, DateTimeZone|string|int|null $timezone = null): static;
static function resetMacros(): void;
static function resetMonthsOverflow(): void;
static function resetToStringFormat(): void;
static function resetYearsOverflow(): void;
static function serializeUsing(callable|string|null $format): void;
static function setFallbackLocale(string $locale): void;
static function setHumanDiffOptions(int $humanDiffOptions): void;
static function setLocale(string $locale): void;
static function setMidDayAt($hour);
static function setTestNow(mixed $testNow = null): void;
static function setTestNowAndTimezone($testNow = null, $timezone = null): void;
static function setToStringFormat(Closure|string|null $format): void;
static function setTranslator(Symfony\Contracts\Translation\TranslatorInterface $translator): void;
static function setWeekendDays(array $days): void;
static function shouldOverflowMonths(): bool;
static function shouldOverflowYears(): bool;
static function singularUnit(string $unit): string;
static function sleep(int|float $seconds): void;
static function today(DateTimeZone|string|int|null $timezone = null): static;
static function tomorrow(DateTimeZone|string|int|null $timezone = null): static;
static function translateTimeString(string $timeString, ?string $from = null, ?string $to = null, int $mode = 31): string;
static function translateWith(Symfony\Contracts\Translation\TranslatorInterface $translator, string $key, array $parameters = [], $number = null): string;
static function useMonthsOverflow(bool $monthsOverflow = true): void;
static function useStrictMode(bool $strictModeEnabled = true): void;
static function useYearsOverflow(bool $yearsOverflow = true): void;
static function withTestNow(mixed $testNow, callable $callback): mixed;
static function yesterday(DateTimeZone|string|int|null $timezone = null): static;
```

## class Collection
`Illuminate\Support\Collection` implements ArrayAccess, Illuminate\Contracts\Support\CanBeEscapedWhenCastToString, Illuminate\Support\Enumerable, Traversable, Stringable, JsonSerializable, Illuminate\Contracts\Support\Jsonable, IteratorAggregate, Countable, Illuminate\Contracts\Support\Arrayable

```php
function __call($method, $parameters);
function __construct($items = []);
function __get($key);
function __toString(): string;
function add($item);
function after($value, $strict = false);
function all();
function average($callback = null);
function avg($callback = null);
function before($value, $strict = false);
function chunk($size, $preserveKeys = true);
function chunkWhile(callable $callback);
function collapse();
function collapseWithKeys();
function collect();
function combine($values);
function concat($source);
function contains($key, $operator = null, $value = null);
function containsManyItems(?callable $callback = null): bool;
function containsOneItem(?callable $callback = null): bool;
function containsStrict($key, $value = null);
function count(): int;
function countBy($countBy = null);
function crossJoin(...$lists);
function dd(...$args);
function diff($items);
function diffAssoc($items);
function diffAssocUsing($items, callable $callback);
function diffKeys($items);
function diffKeysUsing($items, callable $callback);
function diffUsing($items, callable $callback);
function doesntContain($key, $operator = null, $value = null);
function doesntContainStrict($key, $operator = null, $value = null);
function dot($depth = INF);
function dump(...$args);
function duplicates($callback = null, $strict = false);
function duplicatesStrict($callback = null);
function each(callable $callback);
function eachSpread(callable $callback);
function ensure($type);
function escapeWhenCastingToString($escape = true);
function every($key, $operator = null, $value = null);
function except($keys);
function filter(?callable $callback = null);
function first(?callable $callback = null, $default = null);
function firstOrFail($key = null, $operator = null, $value = null);
function firstWhere($key, $operator = null, $value = null);
function flatMap(callable $callback);
function flatten($depth = INF);
function flip();
function forPage($page, $perPage);
function forget($keys);
function get($key, $default = null);
function getCachingIterator($flags = 1);
function getIterator(): Traversable;
function getOrPut($key, $value);
function groupBy($groupBy, $preserveKeys = false);
function has($key);
function hasAny($key);
function hasMany($key = null, $operator = null, $value = null): bool;
function hasSole($key = null, $operator = null, $value = null): bool;
function implode($value, $glue = null);
function intersect($items);
function intersectAssoc($items);
function intersectAssocUsing($items, callable $callback);
function intersectByKeys($items);
function intersectUsing($items, callable $callback);
function isEmpty();
function isNotEmpty();
function join($glue, $finalGlue = '');
function jsonSerialize(): array;
function keyBy($keyBy);
function keys();
function last(?callable $callback = null, $default = null);
function lazy();
function map(callable $callback);
function mapInto($class);
function mapSpread(callable $callback);
function mapToDictionary(callable $callback);
function mapToGroups(callable $callback);
function mapWithKeys(callable $callback);
function max($callback = null);
function median($key = null);
function merge($items);
function mergeRecursive($items);
function min($callback = null);
function mode($key = null);
function multiply(int $multiplier);
function nth($step, $offset = 0);
function offsetExists($offset): bool;
function offsetGet($offset): mixed;
function offsetSet($offset, $value): void;
function offsetUnset($offset): void;
function only($keys);
function pad($size, $value);
function partition($key, $operator = null, $value = null);
function percentage(callable $callback, int $precision = 2);
function pipe(callable $callback);
function pipeInto($class);
function pipeThrough($callbacks);
function pluck($value, $key = null);
function pop($count = 1);
function prepend($value, $key = null);
function pull($key, $default = null);
function push(...$values);
function put($key, $value);
function random($number = null, $preserveKeys = false);
function reduce(callable $callback, $initial = null);
function reduceSpread(callable $callback, ...$initial);
function reduceWithKeys(callable $callback, $initial = null);
function reject($callback = true);
function replace($items);
function replaceRecursive($items);
function reverse();
function search($value, $strict = false);
function select($keys);
function shift($count = 1);
function shuffle();
function skip($count);
function skipUntil($value);
function skipWhile($value);
function slice($offset, $length = null);
function sliding($size = 2, $step = 1);
function sole($key = null, $operator = null, $value = null);
function some($key, $operator = null, $value = null);
function sort($callback = null);
function sortBy($callback, $options = 0, $descending = false);
function sortByDesc($callback, $options = 0);
function sortDesc($options = 0);
function sortKeys($options = 0, $descending = false);
function sortKeysDesc($options = 0);
function sortKeysUsing(callable $callback);
function splice($offset, $length = null, $replacement = []);
function split($numberOfGroups);
function splitIn($numberOfGroups);
function sum($callback = null);
function take($limit);
function takeUntil($value);
function takeWhile($value);
function tap(callable $callback);
function toArray();
function toBase();
function toJson($options = 0);
function toPrettyJson(int $options = 0);
function toResourceCollection(?string $resourceClass = null): Illuminate\Http\Resources\Json\ResourceCollection;
function transform(callable $callback);
function undot();
function union($items);
function unique($key = null, $strict = false);
function uniqueStrict($key = null);
function unless($value = null, ?callable $callback = null, ?callable $default = null);
function unlessEmpty(callable $callback, ?callable $default = null);
function unlessNotEmpty(callable $callback, ?callable $default = null);
function unshift(...$values);
function value($key, $default = null);
function values();
function when($value = null, ?callable $callback = null, ?callable $default = null);
function whenEmpty(callable $callback, ?callable $default = null);
function whenNotEmpty(callable $callback, ?callable $default = null);
function where($key, $operator = null, $value = null);
function whereBetween($key, $values);
function whereIn($key, $values, $strict = false);
function whereInStrict($key, $values);
function whereInstanceOf($type);
function whereNotBetween($key, $values);
function whereNotIn($key, $values, $strict = false);
function whereNotInStrict($key, $values);
function whereNotNull($key = null);
function whereNull($key = null);
function whereStrict($key, $value);
function zip($items);
static function __callStatic($method, $parameters);
static function empty(...$args);
static function flushMacros();
static function fromJson($json, $depth = 512, $flags = 0, ...$args);
static function hasMacro($name);
static function macro($name, $macro);
static function make($items = [], ...$args);
static function mixin($mixin, $replace = true);
static function proxy($method);
static function range($from, $to, $step = 1, ...$args);
static function times($number, ?callable $callback = null, ...$args);
static function unwrap($value);
static function wrap($value, ...$args);
```

## class Composer
`Illuminate\Support\Composer`

```php
function __construct(Illuminate\Filesystem\Filesystem $files, $workingPath = null);
function dumpAutoloads($extra = '', $composerBinary = null);
function dumpOptimized($composerBinary = null);
function findComposer($composerBinary = null);
function getVersion();
function hasPackage($package);
function modify(callable $callback);
function removePackages(array $packages, bool $dev = false, Closure|Symfony\Component\Console\Output\OutputInterface|null $output = null, $composerBinary = null);
function requirePackages(array $packages, bool $dev = false, Closure|Symfony\Component\Console\Output\OutputInterface|null $output = null, $composerBinary = null);
function setWorkingPath($path);
```

## class ConfigurationUrlParser
`Illuminate\Support\ConfigurationUrlParser`

```php
function parseConfiguration($config);
static function addDriverAlias($alias, $driver);
static function getDriverAliases();
```

## class DateFactory
`Illuminate\Support\DateFactory`

```php
function __call($method, $parameters);
static function use($handler);
static function useCallable(callable $callable);
static function useClass($dateClass);
static function useDefault();
static function useFactory($factory);
```

## class DefaultProviders
`Illuminate\Support\DefaultProviders`

```php
function __construct(?array $providers = null);
function except(array $providers);
function merge(array $providers);
function replace(array $replacements);
function toArray();
```

## class EncodedHtmlString
`Illuminate\Support\EncodedHtmlString` extends Illuminate\Support\HtmlString implements Stringable, Illuminate\Contracts\Support\Htmlable

```php
function __construct($html = '', bool $doubleEncode = true);
function __toString(): string;
function isEmpty();
function isNotEmpty();
function toHtml();
static function convert($value, bool $withQuote = true, bool $doubleEncode = true);
static function encodeUsing(?callable $factory = null);
static function flushState();
```

## interface Enumerable
`Illuminate\Support\Enumerable` implements Illuminate\Contracts\Support\Arrayable, Countable, IteratorAggregate, Illuminate\Contracts\Support\Jsonable, JsonSerializable, Stringable, Traversable

```php
abstract function __get($key);
abstract function __toString(): string;
abstract function after($value, $strict = false);
abstract function all();
abstract function average($callback = null);
abstract function avg($callback = null);
abstract function before($value, $strict = false);
abstract function chunk($size);
abstract function chunkWhile(callable $callback);
abstract function collapse();
abstract function collect();
abstract function combine($values);
abstract function concat($source);
abstract function contains($key, $operator = null, $value = null);
abstract function containsManyItems();
abstract function containsOneItem();
abstract function containsStrict($key, $value = null);
abstract function count(): int;
abstract function countBy($countBy = null);
abstract function crossJoin(...$lists);
abstract function dd(...$args);
abstract function diff($items);
abstract function diffAssoc($items);
abstract function diffAssocUsing($items, callable $callback);
abstract function diffKeys($items);
abstract function diffKeysUsing($items, callable $callback);
abstract function diffUsing($items, callable $callback);
abstract function doesntContain($key, $operator = null, $value = null);
abstract function dump(...$args);
abstract function duplicates($callback = null, $strict = false);
abstract function duplicatesStrict($callback = null);
abstract function each(callable $callback);
abstract function eachSpread(callable $callback);
abstract function escapeWhenCastingToString($escape = true);
abstract function every($key, $operator = null, $value = null);
abstract function except($keys);
abstract function filter(?callable $callback = null);
abstract function first(?callable $callback = null, $default = null);
abstract function firstOrFail($key = null, $operator = null, $value = null);
abstract function firstWhere($key, $operator = null, $value = null);
abstract function flatMap(callable $callback);
abstract function flatten($depth = INF);
abstract function flip();
abstract function forPage($page, $perPage);
abstract function get($key, $default = null);
abstract function getCachingIterator($flags = 1);
abstract function getIterator(): Traversable;
abstract function groupBy($groupBy, $preserveKeys = false);
abstract function has($key);
abstract function hasAny($key);
abstract function hasMany($key = null, $operator = null, $value = null);
abstract function hasSole($key = null, $operator = null, $value = null);
abstract function implode($value, $glue = null);
abstract function intersect($items);
abstract function intersectAssoc($items);
abstract function intersectAssocUsing($items, callable $callback);
abstract function intersectByKeys($items);
abstract function intersectUsing($items, callable $callback);
abstract function isEmpty();
abstract function isNotEmpty();
abstract function join($glue, $finalGlue = '');
abstract function jsonSerialize(): mixed;
abstract function keyBy($keyBy);
abstract function keys();
abstract function last(?callable $callback = null, $default = null);
abstract function map(callable $callback);
abstract function mapInto($class);
abstract function mapSpread(callable $callback);
abstract function mapToDictionary(callable $callback);
abstract function mapToGroups(callable $callback);
abstract function mapWithKeys(callable $callback);
abstract function max($callback = null);
abstract function median($key = null);
abstract function merge($items);
abstract function mergeRecursive($items);
abstract function min($callback = null);
abstract function mode($key = null);
abstract function nth($step, $offset = 0);
abstract function only($keys);
abstract function pad($size, $value);
abstract function partition($key, $operator = null, $value = null);
abstract function pipe(callable $callback);
abstract function pipeInto($class);
abstract function pipeThrough($pipes);
abstract function pluck($value, $key = null);
abstract function random($number = null);
abstract function reduce(callable $callback, $initial = null);
abstract function reduceSpread(callable $callback, ...$initial);
abstract function reject($callback = true);
abstract function replace($items);
abstract function replaceRecursive($items);
abstract function reverse();
abstract function search($value, $strict = false);
abstract function shuffle();
abstract function skip($count);
abstract function skipUntil($value);
abstract function skipWhile($value);
abstract function slice($offset, $length = null);
abstract function sliding($size = 2, $step = 1);
abstract function sole($key = null, $operator = null, $value = null);
abstract function some($key, $operator = null, $value = null);
abstract function sort($callback = null);
abstract function sortBy($callback, $options = 0, $descending = false);
abstract function sortByDesc($callback, $options = 0);
abstract function sortDesc($options = 0);
abstract function sortKeys($options = 0, $descending = false);
abstract function sortKeysDesc($options = 0);
abstract function sortKeysUsing(callable $callback);
abstract function split($numberOfGroups);
abstract function splitIn($numberOfGroups);
abstract function sum($callback = null);
abstract function take($limit);
abstract function takeUntil($value);
abstract function takeWhile($value);
abstract function tap(callable $callback);
abstract function toArray();
abstract function toJson($options = 0);
abstract function toPrettyJson(int $options = 0);
abstract function undot();
abstract function union($items);
abstract function unique($key = null, $strict = false);
abstract function uniqueStrict($key = null);
abstract function unless($value, callable $callback, ?callable $default = null);
abstract function unlessEmpty(callable $callback, ?callable $default = null);
abstract function unlessNotEmpty(callable $callback, ?callable $default = null);
abstract function values();
abstract function when($value, ?callable $callback = null, ?callable $default = null);
abstract function whenEmpty(callable $callback, ?callable $default = null);
abstract function whenNotEmpty(callable $callback, ?callable $default = null);
abstract function where($key, $operator = null, $value = null);
abstract function whereBetween($key, $values);
abstract function whereIn($key, $values, $strict = false);
abstract function whereInStrict($key, $values);
abstract function whereInstanceOf($type);
abstract function whereNotBetween($key, $values);
abstract function whereNotIn($key, $values, $strict = false);
abstract function whereNotInStrict($key, $values);
abstract function whereNotNull($key = null);
abstract function whereNull($key = null);
abstract function whereStrict($key, $value);
abstract function zip($items);
static abstract function empty();
static abstract function make($items = []);
static abstract function proxy($method);
static abstract function range($from, $to, $step = 1);
static abstract function times($number, ?callable $callback = null);
static abstract function unwrap($value);
static abstract function wrap($value);
```

## class Env
`Illuminate\Support\Env`

```php
static function disablePutenv();
static function enablePutenv();
static function extend(Closure $callback, ?string $name = null): void;
static function get($key, $default = null);
static function getOrFail($key);
static function getRepository();
static function writeVariable(string $key, mixed $value, string $pathToFile, bool $overwrite = false): void;
static function writeVariables(array $variables, string $pathToFile, bool $overwrite = false): void;
```

## class Fluent
`Illuminate\Support\Fluent` implements Illuminate\Contracts\Support\Arrayable, ArrayAccess, IteratorAggregate, Illuminate\Contracts\Support\Jsonable, JsonSerializable, Traversable

```php
function __call($method, $parameters);
function __construct($attributes = []);
function __get($key);
function __isset($key);
function __set($key, $value);
function __unset($key);
function all($keys = null);
function anyFilled($keys);
function array($key = null);
function boolean($key = null, $default = false);
function clamp($key, $min, $max, $default = 0);
function collect($key = null);
function date($key, $format = null, $tz = null);
function enum($key, $enumClass, $default = null);
function enums($key, $enumClass);
function except($keys);
function exists($key);
function fill($attributes);
function filled($key);
function float($key, $default = 0);
function get($key, $default = null);
function getAttributes();
function getIterator(): Traversable;
function has($key);
function hasAny($keys);
function integer($key, $default = 0);
function interval($key, $unit = null);
function isEmpty(): bool;
function isNotEmpty(): bool;
function isNotFilled($key);
function jsonSerialize(): array;
function macroCall($method, $parameters);
function missing($key);
function offsetExists($offset): bool;
function offsetGet($offset): mixed;
function offsetSet($offset, $value): void;
function offsetUnset($offset): void;
function only($keys);
function scope($key, $default = null);
function set($key, $value);
function str($key, $default = null);
function string($key, $default = null);
function toArray();
function toJson($options = 0);
function toPrettyJson(int $options = 0);
function unless($value = null, ?callable $callback = null, ?callable $default = null);
function value($key, $default = null);
function when($value = null, ?callable $callback = null, ?callable $default = null);
function whenFilled($key, callable $callback, ?callable $default = null);
function whenHas($key, callable $callback, ?callable $default = null);
function whenMissing($key, callable $callback, ?callable $default = null);
static function __callStatic($method, $parameters);
static function flushMacros();
static function hasMacro($name);
static function macro($name, $macro);
static function make($attributes = []);
static function mixin($mixin, $replace = true);
```

## class HigherOrderCollectionProxy
`Illuminate\Support\HigherOrderCollectionProxy`

```php
function __call($method, $parameters);
function __construct(Illuminate\Support\Enumerable $collection, $method);
function __get($key);
```

## class HigherOrderTapProxy
`Illuminate\Support\HigherOrderTapProxy`

```php
function __call($method, $parameters);
function __construct($target);
```

## class HigherOrderWhenProxy
`Illuminate\Support\HigherOrderWhenProxy`

```php
function __call($method, $parameters);
function __construct($target);
function __get($key);
function condition($condition);
function negateConditionOnCapture();
```

## class HtmlString
`Illuminate\Support\HtmlString` implements Illuminate\Contracts\Support\Htmlable, Stringable

```php
function __construct($html = '');
function __toString(): string;
function isEmpty();
function isNotEmpty();
function toHtml();
```

## trait InteractsWithTime
`Illuminate\Support\InteractsWithTime`

## class ItemNotFoundException
`Illuminate\Support\ItemNotFoundException` extends RuntimeException implements Stringable, Throwable

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

## class Js
`Illuminate\Support\Js` implements Illuminate\Contracts\Support\Htmlable, Stringable

```php
function __construct($data, $flags = 0, $depth = 512);
function __toString(): string;
function toHtml();
static function encode($data, $flags = 0, $depth = 512);
static function from($data, $flags = 0, $depth = 512);
```

## class LazyCollection
`Illuminate\Support\LazyCollection` implements Illuminate\Contracts\Support\CanBeEscapedWhenCastToString, Illuminate\Support\Enumerable, Traversable, Stringable, JsonSerializable, Illuminate\Contracts\Support\Jsonable, IteratorAggregate, Countable, Illuminate\Contracts\Support\Arrayable

```php
function __call($method, $parameters);
function __construct($source = null);
function __get($key);
function __toString(): string;
function after($value, $strict = false);
function all();
function average($callback = null);
function avg($callback = null);
function before($value, $strict = false);
function chunk($size, $preserveKeys = true);
function chunkWhile(callable $callback);
function collapse();
function collapseWithKeys();
function collect();
function combine($values);
function concat($source);
function contains($key, $operator = null, $value = null);
function containsManyItems(): bool;
function containsOneItem(?callable $callback = null): bool;
function containsStrict($key, $value = null);
function count(): int;
function countBy($countBy = null);
function crossJoin(...$arrays);
function dd(...$args);
function diff($items);
function diffAssoc($items);
function diffAssocUsing($items, callable $callback);
function diffKeys($items);
function diffKeysUsing($items, callable $callback);
function diffUsing($items, callable $callback);
function doesntContain($key, $operator = null, $value = null);
function doesntContainStrict($key, $operator = null, $value = null);
function dot($depth = INF);
function dump(...$args);
function duplicates($callback = null, $strict = false);
function duplicatesStrict($callback = null);
function each(callable $callback);
function eachSpread(callable $callback);
function eager();
function ensure($type);
function escapeWhenCastingToString($escape = true);
function every($key, $operator = null, $value = null);
function except($keys);
function filter(?callable $callback = null);
function first(?callable $callback = null, $default = null);
function firstOrFail($key = null, $operator = null, $value = null);
function firstWhere($key, $operator = null, $value = null);
function flatMap(callable $callback);
function flatten($depth = INF);
function flip();
function forPage($page, $perPage);
function get($key, $default = null);
function getCachingIterator($flags = 1);
function getIterator(): Traversable;
function groupBy($groupBy, $preserveKeys = false);
function has($key);
function hasAny($key);
function hasMany($key = null, $operator = null, $value = null): bool;
function hasSole($key = null, $operator = null, $value = null): bool;
function implode($value, $glue = null);
function intersect($items);
function intersectAssoc($items);
function intersectAssocUsing($items, callable $callback);
function intersectByKeys($items);
function intersectUsing($items, callable $callback);
function isEmpty();
function isNotEmpty();
function join($glue, $finalGlue = '');
function jsonSerialize(): array;
function keyBy($keyBy);
function keys();
function last(?callable $callback = null, $default = null);
function map(callable $callback);
function mapInto($class);
function mapSpread(callable $callback);
function mapToDictionary(callable $callback);
function mapToGroups(callable $callback);
function mapWithKeys(callable $callback);
function max($callback = null);
function median($key = null);
function merge($items);
function mergeRecursive($items);
function min($callback = null);
function mode($key = null);
function multiply(int $multiplier);
function nth($step, $offset = 0);
function only($keys);
function pad($size, $value);
function partition($key, $operator = null, $value = null);
function percentage(callable $callback, int $precision = 2);
function pipe(callable $callback);
function pipeInto($class);
function pipeThrough($callbacks);
function pluck($value, $key = null);
function random($number = null, $preserveKeys = false);
function reduce(callable $callback, $initial = null);
function reduceSpread(callable $callback, ...$initial);
function reduceWithKeys(callable $callback, $initial = null);
function reject($callback = true);
function remember();
function replace($items);
function replaceRecursive($items);
function reverse();
function search($value, $strict = false);
function select($keys);
function shuffle();
function skip($count);
function skipUntil($value);
function skipWhile($value);
function slice($offset, $length = null);
function sliding($size = 2, $step = 1);
function sole($key = null, $operator = null, $value = null);
function some($key, $operator = null, $value = null);
function sort($callback = null);
function sortBy($callback, $options = 0, $descending = false);
function sortByDesc($callback, $options = 0);
function sortDesc($options = 0);
function sortKeys($options = 0, $descending = false);
function sortKeysDesc($options = 0);
function sortKeysUsing(callable $callback);
function split($numberOfGroups);
function splitIn($numberOfGroups);
function sum($callback = null);
function take($limit);
function takeUntil($value);
function takeUntilTimeout(DateTimeInterface $timeout, ?callable $callback = null);
function takeWhile($value);
function tap(callable $callback);
function tapEach(callable $callback);
function throttle(float $seconds);
function toArray();
function toJson($options = 0);
function toPrettyJson(int $options = 0);
function undot();
function union($items);
function unique($key = null, $strict = false);
function uniqueStrict($key = null);
function unless($value = null, ?callable $callback = null, ?callable $default = null);
function unlessEmpty(callable $callback, ?callable $default = null);
function unlessNotEmpty(callable $callback, ?callable $default = null);
function value($key, $default = null);
function values();
function when($value = null, ?callable $callback = null, ?callable $default = null);
function whenEmpty(callable $callback, ?callable $default = null);
function whenNotEmpty(callable $callback, ?callable $default = null);
function where($key, $operator = null, $value = null);
function whereBetween($key, $values);
function whereIn($key, $values, $strict = false);
function whereInStrict($key, $values);
function whereInstanceOf($type);
function whereNotBetween($key, $values);
function whereNotIn($key, $values, $strict = false);
function whereNotInStrict($key, $values);
function whereNotNull($key = null);
function whereNull($key = null);
function whereStrict($key, $value);
function withHeartbeat(DateInterval|int $interval, callable $callback);
function zip($items);
static function __callStatic($method, $parameters);
static function empty(...$args);
static function flushMacros();
static function fromJson($json, $depth = 512, $flags = 0, ...$args);
static function hasMacro($name);
static function macro($name, $macro);
static function make($items = [], ...$args);
static function mixin($mixin, $replace = true);
static function proxy($method);
static function range($from, $to, $step = 1, ...$args);
static function times($number, ?callable $callback = null, ...$args);
static function unwrap($value);
static function wrap($value, ...$args);
```

## class Lottery
`Illuminate\Support\Lottery`

```php
function __construct($chances, $outOf = null);
function __invoke(...$args);
function choose($times = null);
function loser($callback);
function winner($callback);
static function alwaysLose($callback = null);
static function alwaysWin($callback = null);
static function determineResultNormally();
static function determineResultsNormally();
static function fix($sequence, $whenMissing = null);
static function forceResultWithSequence($sequence, $whenMissing = null);
static function odds($chances, $outOf = null);
static function setResultFactory($factory);
```

## class Manager
`Illuminate\Support\Manager`

```php
abstract function getDefaultDriver();
function __call($method, $parameters);
function __construct(Illuminate\Contracts\Container\Container $container);
function driver($driver = null);
function extend($driver, Closure $callback);
function forgetDrivers();
function getContainer();
function getDrivers();
function setContainer(Illuminate\Contracts\Container\Container $container);
```

## class MessageBag
`Illuminate\Support\MessageBag` implements Illuminate\Contracts\Support\Jsonable, JsonSerializable, Illuminate\Contracts\Support\MessageBag, Illuminate\Contracts\Support\MessageProvider, Stringable, Countable, Illuminate\Contracts\Support\Arrayable

```php
function __construct(array $messages = []);
function __toString(): string;
function add($key, $message);
function addIf($boolean, $key, $message);
function all($format = null);
function any();
function count(): int;
function first($key = null, $format = null);
function forget($key);
function get($key, $format = null);
function getFormat();
function getMessageBag();
function getMessages();
function has($key);
function hasAny($keys = []);
function isEmpty();
function isNotEmpty();
function jsonSerialize(): array;
function keys();
function merge($messages);
function messages();
function missing($key);
function setFormat($format = ':message');
function toArray();
function toJson($options = 0);
function toPrettyJson(int $options = 0);
function unique($format = null);
```

## class MultipleInstanceManager
`Illuminate\Support\MultipleInstanceManager`

```php
abstract function getDefaultInstance();
abstract function getInstanceConfig($name);
abstract function setDefaultInstance($name);
function __call($method, $parameters);
function __construct($app);
function extend($name, Closure $callback);
function forgetInstance($name = null);
function instance($name = null);
function purge($name = null);
function setApplication($app);
```

## class MultipleItemsFoundException
`Illuminate\Support\MultipleItemsFoundException` extends RuntimeException implements Stringable, Throwable

```php
final function getCode();
final function getFile(): string;
final function getLine(): int;
final function getMessage(): string;
final function getPrevious(): ?Throwable;
final function getTrace(): array;
final function getTraceAsString(): string;
function __construct($count, $code = 0, $previous = null);
function __toString(): string;
function __wakeup();
function getCount();
```

## class NamespacedItemResolver
`Illuminate\Support\NamespacedItemResolver`

```php
function flushParsedKeys();
function parseKey($key);
function setParsedKey($key, $parsed);
```

## class Number
`Illuminate\Support\Number`

```php
function __call($method, $parameters);
static function __callStatic($method, $parameters);
static function abbreviate(int|float $number, int $precision = 0, ?int $maxPrecision = null);
static function clamp(int|float $number, int|float $min, int|float $max);
static function currency(int|float $number, string $in = '', ?string $locale = null, ?int $precision = null);
static function defaultCurrency();
static function defaultLocale();
static function fileSize(int|float $bytes, int $precision = 0, ?int $maxPrecision = null);
static function flushMacros();
static function forHumans(int|float $number, int $precision = 0, ?int $maxPrecision = null, bool $abbreviate = false);
static function format(int|float $number, ?int $precision = null, ?int $maxPrecision = null, ?string $locale = null);
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
static function ordinal(int|float $number, ?string $locale = null);
static function pairs(int|float $to, int|float $by, int|float $start = 0, int|float $offset = 1);
static function parse(string $string, ?int $type = ?, ?string $locale = null): int|float|false;
static function parseFloat(string $string, ?string $locale = null): float|false;
static function parseInt(string $string, ?string $locale = null): int|false;
static function percentage(int|float $number, int $precision = 0, ?int $maxPrecision = null, ?string $locale = null);
static function spell(int|float $number, ?string $locale = null, ?int $after = null, ?int $until = null);
static function spellOrdinal(int|float $number, ?string $locale = null);
static function trim(int|float $number);
static function useCurrency(string $currency);
static function useLocale(string $locale);
static function withCurrency(string $currency, callable $callback);
static function withLocale(string $locale, callable $callback);
```

## class Once
`Illuminate\Support\Once`

```php
function value(Illuminate\Support\Onceable $onceable);
static function disable();
static function enable();
static function flush();
static function instance();
```

## class Onceable
`Illuminate\Support\Onceable`

```php
function __construct(string $hash, ?object $object, $callable);
static function tryFromTrace(array $trace, callable $callable);
```

## class Optional
`Illuminate\Support\Optional` implements ArrayAccess

```php
function __call($method, $parameters);
function __construct($value);
function __get($key);
function __isset($name);
function macroCall($method, $parameters);
function offsetExists($offset): bool;
function offsetGet($offset): mixed;
function offsetSet($offset, $value): void;
function offsetUnset($offset): void;
static function __callStatic($method, $parameters);
static function flushMacros();
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
```

## class Pluralizer
`Illuminate\Support\Pluralizer`

```php
static function inflector();
static function plural($value, $count = 2);
static function singular($value);
static function useLanguage(string $language);
```

## class ProcessUtils
`Illuminate\Support\ProcessUtils`

```php
static function escapeArgument($argument);
```

## trait RebindsCallbacksToSelf
`Illuminate\Support\RebindsCallbacksToSelf`

## class Reflector
`Illuminate\Support\Reflector`

```php
static function getClassAttribute($objectOrClass, $attribute, $ascend = false);
static function getClassAttributes($objectOrClass, $attribute, $includeParents = false);
static function getParameterClassName($parameter);
static function getParameterClassNames($parameter);
static function isCallable($var, $syntaxOnly = false);
static function isParameterBackedEnumWithStringBackingType($parameter);
static function isParameterSubclassOf($parameter, $className);
```

## class ServiceProvider
`Illuminate\Support\ServiceProvider`

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

## class Sleep
`Illuminate\Support\Sleep`

```php
function __call($method, $parameters);
function __construct($duration);
function __destruct();
function and($duration);
function microsecond();
function microseconds();
function millisecond();
function milliseconds();
function minute();
function minutes();
function second();
function seconds();
function then(callable $then);
function unless($condition);
function when($condition);
function while(Closure $callback);
static function __callStatic($method, $parameters);
static function assertInsomniac();
static function assertNeverSlept();
static function assertSequence($sequence);
static function assertSlept($expected, $times = 1);
static function assertSleptTimes($expected);
static function fake($value = true, $syncWithCarbon = false);
static function flushMacros();
static function for($duration);
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
static function sleep($duration);
static function syncWithCarbon($value = true);
static function until($timestamp);
static function usleep($duration);
static function whenFakingSleep($callback);
```

## class Str
`Illuminate\Support\Str`

```php
function __call($method, $parameters);
static function __callStatic($method, $parameters);
static function after($subject, $search);
static function afterLast($subject, $search);
static function apa($value);
static function ascii($value, $language = 'en');
static function before($subject, $search);
static function beforeLast($subject, $search);
static function between($subject, $from, $to);
static function betweenFirst($subject, $from, $to);
static function camel($value);
static function charAt($subject, $index);
static function chopEnd($subject, $needle);
static function chopStart($subject, $needle);
static function contains($haystack, $needles, $ignoreCase = false);
static function containsAll($haystack, $needles, $ignoreCase = false);
static function convertCase(string $string, int $mode = 3, ?string $encoding = 'UTF-8');
static function createRandomStringsNormally();
static function createRandomStringsUsing(?callable $factory = null);
static function createRandomStringsUsingSequence(array $sequence, $whenMissing = null);
static function createUlidsNormally();
static function createUlidsUsing(?callable $factory = null);
static function createUlidsUsingSequence(array $sequence, $whenMissing = null);
static function createUuidsNormally();
static function createUuidsUsing(?callable $factory = null);
static function createUuidsUsingSequence(array $sequence, $whenMissing = null);
static function deduplicate(string $string, array|string $characters = ' ');
static function doesntContain($haystack, $needles, $ignoreCase = false);
static function doesntEndWith($haystack, $needles);
static function doesntStartWith($haystack, $needles);
static function endsWith($haystack, $needles);
static function excerpt($text, $phrase = '', $options = []);
static function finish($value, $cap);
static function flushCache();
static function flushMacros();
static function freezeUlids(?Closure $callback = null);
static function freezeUuids(?Closure $callback = null);
static function fromBase64($string, $strict = false);
static function hasMacro($name);
static function headline($value);
static function initials($value, $capitalize = false);
static function inlineMarkdown($string, array $options = [], array $extensions = []);
static function is($pattern, $value, $ignoreCase = false);
static function isAscii($value);
static function isJson($value);
static function isMatch($pattern, $value);
static function isUlid($value);
static function isUrl($value, array $protocols = []);
static function isUuid($value, $version = null);
static function kebab($value);
static function lcfirst($string);
static function length($value, $encoding = null);
static function limit($value, $limit = 100, $end = '...', $preserveWords = false);
static function lower($value);
static function ltrim($value, $charlist = null);
static function macro($name, $macro);
static function markdown($string, array $options = [], array $extensions = []);
static function mask($string, $character, $index, $length = null, $encoding = 'UTF-8');
static function match($pattern, $subject);
static function matchAll($pattern, $subject);
static function mixin($mixin, $replace = true);
static function numbers($value);
static function of($string);
static function orderedUuid();
static function padBoth($value, $length, $pad = ' ');
static function padLeft($value, $length, $pad = ' ');
static function padRight($value, $length, $pad = ' ');
static function parseCallback($callback, $default = null);
static function pascal($value, bool $normalize = false);
static function password($length = 32, $letters = true, $numbers = true, $symbols = true, $spaces = false);
static function plural($value, $count = 2, $prependCount = false);
static function pluralPascal($value, $count = 2);
static function pluralStudly($value, $count = 2);
static function position($haystack, $needle, $offset = 0, $encoding = null);
static function random($length = 16);
static function remove($search, $subject, $caseSensitive = true);
static function repeat(string $string, int $times);
static function replace($search, $replace, $subject, $caseSensitive = true);
static function replaceArray($search, $replace, $subject);
static function replaceEnd($search, $replace, $subject);
static function replaceFirst($search, $replace, $subject);
static function replaceLast($search, $replace, $subject);
static function replaceMatches($pattern, $replace, $subject, $limit = -1);
static function replaceStart($search, $replace, $subject);
static function resetFactoryState();
static function reverse(string $value);
static function rtrim($value, $charlist = null);
static function singular($value);
static function slug($title, $separator = '-', $language = 'en', $dictionary = []);
static function snake($value, $delimiter = '_');
static function squish($value);
static function start($value, $prefix);
static function startsWith($haystack, $needles);
static function studly($value, bool $normalize = false);
static function substr($string, $start, $length = null, $encoding = 'UTF-8');
static function substrCount($haystack, $needle, $offset = 0, $length = null);
static function substrReplace($string, $replace, $offset = 0, $length = null);
static function swap(array $map, $subject);
static function take($string, int $limit): string;
static function title($value);
static function toBase64($string): string;
static function transliterate($string, $unknown = '?', $strict = false);
static function trim($value, $charlist = null);
static function ucfirst($string);
static function ucsplit($string);
static function ucwords($string, $separators = ' 	
');
static function ulid($time = null);
static function unwrap($value, $before, $after = null);
static function upper($value);
static function uuid();
static function uuid7($time = null);
static function wordCount($string, $characters = null);
static function wordWrap($string, $characters = 75, $break = '
', $cutLongWords = false);
static function words($value, $words = 100, $end = '...');
static function wrap($value, $before, $after = null);
```

## class Stringable
`Illuminate\Support\Stringable` implements JsonSerializable, ArrayAccess, Stringable

```php
function __call($method, $parameters);
function __construct($value = '');
function __get($key);
function __toString(): string;
function after($search);
function afterLast($search);
function apa();
function append(...$values);
function ascii($language = 'en');
function basename($suffix = '');
function before($search);
function beforeLast($search);
function between($from, $to);
function betweenFirst($from, $to);
function camel();
function charAt($index);
function chopEnd($needle);
function chopStart($needle);
function classBasename();
function contains($needles, $ignoreCase = false);
function containsAll($needles, $ignoreCase = false);
function convertCase(int $mode = 3, ?string $encoding = 'UTF-8');
function dd(...$args);
function decrypt(bool $serialize = false);
function deduplicate(array|string $characters = ' ');
function dirname($levels = 1);
function doesntContain($needles, $ignoreCase = false);
function doesntEndWith($needles);
function doesntStartWith($needles);
function dump(...$args);
function encrypt(bool $serialize = false);
function endsWith($needles);
function exactly($value);
function excerpt($phrase = '', $options = []);
function explode($delimiter, $limit = 9223372036854775807);
function finish($cap);
function fromBase64($strict = false);
function hash(string $algorithm);
function headline();
function initials($capitalize = false);
function inlineMarkdown(array $options = [], array $extensions = []);
function is($pattern, $ignoreCase = false);
function isAscii();
function isEmpty();
function isJson();
function isMatch($pattern);
function isNotEmpty();
function isUlid();
function isUrl(array $protocols = []);
function isUuid($version = null);
function jsonSerialize(): string;
function kebab();
function lcfirst();
function length($encoding = null);
function limit($limit = 100, $end = '...', $preserveWords = false);
function lower();
function ltrim($characters = null);
function markdown(array $options = [], array $extensions = []);
function mask($character, $index, $length = null, $encoding = 'UTF-8');
function match($pattern);
function matchAll($pattern);
function newLine($count = 1);
function numbers();
function offsetExists(mixed $offset): bool;
function offsetGet(mixed $offset): string;
function offsetSet(mixed $offset, mixed $value): void;
function offsetUnset(mixed $offset): void;
function padBoth($length, $pad = ' ');
function padLeft($length, $pad = ' ');
function padRight($length, $pad = ' ');
function parseCallback($default = null);
function pascal(bool $normalize = false);
function pipe(callable $callback);
function plural($count = 2, $prependCount = false);
function pluralPascal($count = 2);
function pluralStudly($count = 2);
function position($needle, $offset = 0, $encoding = null);
function prepend(...$values);
function remove($search, $caseSensitive = true);
function repeat(int $times);
function replace($search, $replace, $caseSensitive = true);
function replaceArray($search, $replace);
function replaceEnd($search, $replace);
function replaceFirst($search, $replace);
function replaceLast($search, $replace);
function replaceMatches($pattern, $replace, $limit = -1);
function replaceStart($search, $replace);
function reverse();
function rtrim($characters = null);
function scan($format);
function singular();
function slug($separator = '-', $language = 'en', $dictionary = []);
function snake($delimiter = '_');
function split($pattern, $limit = -1, $flags = 0);
function squish();
function start($prefix);
function startsWith($needles);
function stripTags($allowedTags = null);
function studly(bool $normalize = false);
function substr($start, $length = null, $encoding = 'UTF-8');
function substrCount($needle, $offset = 0, $length = null);
function substrReplace($replace, $offset = 0, $length = null);
function swap(array $map);
function take(int $limit);
function tap($callback = null);
function test($pattern);
function title();
function toBase64();
function toBoolean();
function toDate($format = null, $tz = null);
function toFloat();
function toHtmlString();
function toInteger($base = 10);
function toString();
function toUri();
function transliterate($unknown = '?', $strict = false);
function trim($characters = null);
function ucfirst();
function ucsplit();
function ucwords($separators = ' 	
');
function unless($value = null, ?callable $callback = null, ?callable $default = null);
function unwrap($before, $after = null);
function upper();
function value();
function when($value = null, ?callable $callback = null, ?callable $default = null);
function whenContains($needles, $callback, $default = null);
function whenContainsAll(array $needles, $callback, $default = null);
function whenDoesntEndWith($needles, $callback, $default = null);
function whenDoesntStartWith($needles, $callback, $default = null);
function whenEmpty($callback, $default = null);
function whenEndsWith($needles, $callback, $default = null);
function whenExactly($value, $callback, $default = null);
function whenIs($pattern, $callback, $default = null);
function whenIsAscii($callback, $default = null);
function whenIsUlid($callback, $default = null);
function whenIsUuid($callback, $default = null);
function whenNotEmpty($callback, $default = null);
function whenNotExactly($value, $callback, $default = null);
function whenStartsWith($needles, $callback, $default = null);
function whenTest($pattern, $callback, $default = null);
function wordCount($characters = null);
function wordWrap($characters = 75, $break = '
', $cutLongWords = false);
function words($words = 100, $end = '...');
function wrap($before, $after = null);
static function __callStatic($method, $parameters);
static function flushMacros();
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
```

## class Timebox
`Illuminate\Support\Timebox`

```php
function call(callable $callback, int $microseconds);
function dontReturnEarly();
function returnEarly();
```

## class Uri
`Illuminate\Support\Uri` implements Illuminate\Contracts\Support\Htmlable, JsonSerializable, Illuminate\Contracts\Support\Responsable, Stringable

```php
function __call($method, $parameters);
function __construct(League\Uri\Contracts\UriInterface|Stringable|string $uri = '');
function __toString(): string;
function authority(): ?string;
function dd(...$args);
function decode(): string;
function dump(...$args);
function fragment(): ?string;
function getUri(): League\Uri\Contracts\UriInterface;
function host(): ?string;
function isEmpty(): bool;
function isNotEmpty(): bool;
function jsonSerialize(): string;
function password(): ?string;
function path(): string;
function pathSegments(): Illuminate\Support\Collection;
function port(): ?int;
function pushOntoQuery(string $key, mixed $value): static;
function query(): Illuminate\Support\UriQueryString;
function redirect(int $status = 302, array $headers = []): Illuminate\Http\RedirectResponse;
function replaceQuery(array $query): static;
function scheme(): ?string;
function tap($callback = null);
function toHtml();
function toResponse($request);
function toString(): string;
function toStringable();
function unless($value = null, ?callable $callback = null, ?callable $default = null);
function user(bool $withPassword = false): ?string;
function value(): string;
function when($value = null, ?callable $callback = null, ?callable $default = null);
function withFragment(string $fragment): static;
function withHost(Stringable|string $host): static;
function withPath(Stringable|string $path): static;
function withPort(?int $port): static;
function withQuery(array $query, bool $merge = true): static;
function withQueryIfMissing(array $query): static;
function withScheme(Stringable|string $scheme): static;
function withUser(Stringable|string|null $user, Stringable|string|null $password = null): static;
function withoutFragment(): static;
function withoutQuery(array|string $keys): static;
static function __callStatic($method, $parameters);
static function action($action, $parameters = [], $absolute = true): static;
static function flushMacros();
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
static function of(League\Uri\Contracts\UriInterface|Stringable|string $uri = ''): static;
static function route($name, $parameters = [], $absolute = true): static;
static function setUrlGeneratorResolver(Closure $urlGeneratorResolver): void;
static function signedRoute($name, $parameters = [], $expiration = null, $absolute = true): static;
static function temporarySignedRoute($name, $expiration, $parameters = [], $absolute = true): static;
static function to(string $path): static;
```

## class UriQueryString
`Illuminate\Support\UriQueryString` implements Illuminate\Contracts\Support\Arrayable, Stringable

```php
function __construct(Illuminate\Support\Uri $uri);
function __toString(): string;
function all($keys = null);
function anyFilled($keys);
function array($key = null);
function boolean($key = null, $default = false);
function clamp($key, $min, $max, $default = 0);
function collect($key = null);
function date($key, $format = null, $tz = null);
function decode(): string;
function enum($key, $enumClass, $default = null);
function enums($key, $enumClass);
function except($keys);
function exists($key);
function filled($key);
function float($key, $default = 0);
function get(?string $key = null, mixed $default = null): mixed;
function has($key);
function hasAny($keys);
function integer($key, $default = 0);
function interval($key, $unit = null);
function isNotFilled($key);
function missing($key);
function only($keys);
function str($key, $default = null);
function string($key, $default = null);
function toArray();
function value(): string;
function whenFilled($key, callable $callback, ?callable $default = null);
function whenHas($key, callable $callback, ?callable $default = null);
function whenMissing($key, callable $callback, ?callable $default = null);
```

## class ValidatedInput
`Illuminate\Support\ValidatedInput` implements Illuminate\Contracts\Support\ValidatedData, Traversable, IteratorAggregate, ArrayAccess, Illuminate\Contracts\Support\Arrayable

```php
function __construct(array $input);
function __get($name);
function __isset($name);
function __set($name, $value);
function __unset($name);
function all($keys = null);
function anyFilled($keys);
function array($key = null);
function boolean($key = null, $default = false);
function clamp($key, $min, $max, $default = 0);
function collect($key = null);
function date($key, $format = null, $tz = null);
function dd(...$args);
function dump(...$keys);
function enum($key, $enumClass, $default = null);
function enums($key, $enumClass);
function except($keys);
function exists($key);
function file($key, $default = null);
function filled($key);
function float($key, $default = 0);
function getIterator(): Traversable;
function has($key);
function hasAny($keys);
function input($key = null, $default = null);
function integer($key, $default = 0);
function interval($key, $unit = null);
function isNotFilled($key);
function keys();
function merge(array $items);
function missing($key);
function offsetExists($key): bool;
function offsetGet($key): mixed;
function offsetSet($key, $value): void;
function offsetUnset($key): void;
function only($keys);
function str($key, $default = null);
function string($key, $default = null);
function toArray();
function whenFilled($key, callable $callback, ?callable $default = null);
function whenHas($key, callable $callback, ?callable $default = null);
function whenMissing($key, callable $callback, ?callable $default = null);
```

## class ViewErrorBag
`Illuminate\Support\ViewErrorBag` implements Countable, Stringable

```php
function __call($method, $parameters);
function __get($key);
function __set($key, $value);
function __toString(): string;
function any();
function count(): int;
function getBag($key);
function getBags();
function hasBag($key = 'default');
function put($key, Illuminate\Contracts\Support\MessageBag $bag);
```

