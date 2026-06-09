---
name: laravel-test
license: MIT
description: Runs the Laravel test suite — auto-detecting Pest vs PHPUnit and the project's test command — then iterates on failures until green. Use when the user asks to run tests, check whether tests pass, run a specific test/filter, or verify a change in a Laravel project.
compatibility: Designed for Claude Code. Requires php and the project's test runner (Pest or PHPUnit) plus Pint.
argument-hint: "[optional --filter, test name, or path]"
allowed-tools: Bash(php artisan test*), Bash(php artisan about*), Bash(./vendor/bin/pest*), Bash(./vendor/bin/phpunit*), Bash(./vendor/bin/pint*), Read, Grep, Glob, Edit
---

# Run Laravel tests

## Project context (auto-injected)

```!
php artisan about --only=environment 2>/dev/null || echo "no artisan about"
```

Detected test tooling:
```!
grep -m1 -E '"(pestphp/pest|phpunit/phpunit)"' composer.json 2>/dev/null || echo "no test package found in composer.json"
```

## Instructions

1. **Pick the runner** from the context above:
   - `pestphp/pest` present → `./vendor/bin/pest` (or `php artisan test`).
   - only `phpunit/phpunit` → `php artisan test`.
   When unsure, `php artisan test` works for both.
2. **Scope the run** with `$ARGUMENTS` if provided — pass it through as a filter/path (e.g. `php artisan test --filter=$ARGUMENTS`, or `./vendor/bin/pest $ARGUMENTS`). With no arguments, run the full suite.
3. **Run it** and read the output fully — don't summarize a run you didn't execute.
4. **On failure, enter the fix loop:**
   - Read the failing test and the code under test.
   - Form the smallest correct fix (prefer fixing the bug over loosening the assertion; only change the test if the test itself is wrong).
   - Re-run the same filtered command to confirm.
   - Repeat until green, then run the full suite once to catch regressions.
5. **Respect the suite's contract:** don't delete/skip tests to make them pass, don't weaken assertions to hide a real failure, and keep external calls faked (`Http::fake`, Saloon `MockClient`, `Queue::fake`).
6. If formatting/static analysis is part of the project's gate, also run `./vendor/bin/pint --test` and Larastan/PHPStan when present.

Report the final command, the pass/fail counts from real output, and what was changed.
