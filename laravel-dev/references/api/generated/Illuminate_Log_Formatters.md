# Illuminate\Log\Formatters

Version: 13.14.0

## class JsonFormatter
`Illuminate\Log\Formatters\JsonFormatter` extends Monolog\Formatter\JsonFormatter implements Monolog\Formatter\FormatterInterface

```php
function __construct(int $batchMode = 1, bool $appendNewline = true, bool $ignoreEmptyContextAndExtra = false, bool $includeStacktraces = false);
function addJsonEncodeOption(int $option): self;
function format(Monolog\LogRecord $record): string;
function formatBatch(array $records): string;
function getBatchMode(): int;
function getDateFormat(): string;
function getMaxNormalizeDepth(): int;
function getMaxNormalizeItemCount(): int;
function includeStacktraces(bool $include = true): self;
function isAppendingNewlines(): bool;
function normalizeValue(mixed $data): mixed;
function removeJsonEncodeOption(int $option): self;
function setBasePath(string $path = ''): self;
function setDateFormat(string $dateFormat): self;
function setJsonPrettyPrint(bool $enable): self;
function setMaxNormalizeDepth(int $maxNormalizeDepth): self;
function setMaxNormalizeItemCount(int $maxNormalizeItemCount): self;
```

