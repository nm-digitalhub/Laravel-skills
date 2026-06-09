# Illuminate\Testing\Concerns

Version: 13.14.0

## trait AssertsStatusCodes
`Illuminate\Testing\Concerns\AssertsStatusCodes`

```php
function assertAccepted();
function assertBadRequest();
function assertConflict();
function assertCreated();
function assertFailedDependency();
function assertForbidden();
function assertFound();
function assertGone();
function assertInternalServerError();
function assertMethodNotAllowed();
function assertMovedPermanently();
function assertNoContent($status = 204);
function assertNotAcceptable();
function assertNotFound();
function assertNotModified();
function assertOk();
function assertPaymentRequired();
function assertPermanentRedirect();
function assertRequestTimeout();
function assertServiceUnavailable();
function assertTemporaryRedirect();
function assertTooManyRequests();
function assertUnauthorized();
function assertUnprocessable();
function assertUnsupportedMediaType();
```

## trait RunsInParallel
`Illuminate\Testing\Concerns\RunsInParallel`

```php
function __construct($options, Symfony\Component\Console\Output\OutputInterface $output);
function execute(): int;
function getExitCode(): int;
static function resolveApplicationUsing($resolver);
static function resolveRunnerUsing($resolver);
```

## trait TestCaches
`Illuminate\Testing\Concerns\TestCaches`

## trait TestDatabases
`Illuminate\Testing\Concerns\TestDatabases`

## trait TestViews
`Illuminate\Testing\Concerns\TestViews`

