# Illuminate\Console\Events

Version: 13.14.0

## class ArtisanStarting
`Illuminate\Console\Events\ArtisanStarting`

```php
function __construct(Illuminate\Console\Application $artisan);
```

## class CommandFinished
`Illuminate\Console\Events\CommandFinished`

```php
function __construct(string $command, Symfony\Component\Console\Input\InputInterface $input, Symfony\Component\Console\Output\OutputInterface $output, int $exitCode);
```

## class CommandStarting
`Illuminate\Console\Events\CommandStarting`

```php
function __construct(string $command, Symfony\Component\Console\Input\InputInterface $input, Symfony\Component\Console\Output\OutputInterface $output);
```

## class SchedulePaused
`Illuminate\Console\Events\SchedulePaused`

## class ScheduleResumed
`Illuminate\Console\Events\ScheduleResumed`

## class ScheduledBackgroundTaskFinished
`Illuminate\Console\Events\ScheduledBackgroundTaskFinished`

```php
function __construct(Illuminate\Console\Scheduling\Event $task);
```

## class ScheduledTaskFailed
`Illuminate\Console\Events\ScheduledTaskFailed`

```php
function __construct(Illuminate\Console\Scheduling\Event $task, Throwable $exception);
```

## class ScheduledTaskFinished
`Illuminate\Console\Events\ScheduledTaskFinished`

```php
function __construct(Illuminate\Console\Scheduling\Event $task, float $runtime);
```

## class ScheduledTaskSkipped
`Illuminate\Console\Events\ScheduledTaskSkipped`

```php
function __construct(Illuminate\Console\Scheduling\Event $task);
```

## class ScheduledTaskStarting
`Illuminate\Console\Events\ScheduledTaskStarting`

```php
function __construct(Illuminate\Console\Scheduling\Event $task);
```

