---
name: laravel-audit
license: MIT
description: >-
  Deep, read-only audit of a LIVE Laravel 13 codebase — a whole module, the full
  app, or the source actually running in production — not just one commit's diff.
  Verifies code against the INSTALLED Laravel API and flags real defects (missing
  or mis-signatured APIs, security holes, tenant-scope leaks, N+1) with calibrated
  confidence, while telling deliberate project conventions apart from accidental
  bugs using consistency, documentation, and test evidence. Never rewrites
  intentional decisions; performs no writes. Use for periodic audits, "is this a
  bug or on purpose?", pre-deploy verification, or checking what really runs in
  production versus git.
compatibility: >-
  Designed for Claude Code. Requires git and PHP for full verification, and
  read-only SSH/rsync access for production-source auditing. Strictly read-only —
  it has no write tools and modifies nothing, least of all production.
argument-hint: "[scope: path | module | 'prod' | 'drift'] [optional focus]"
disable-model-invocation: true
context: fork
agent: Explore
allowed-tools: Bash(git diff*), Bash(git status*), Bash(git log*), Bash(git blame*), Bash(git show*), Bash(git ls-files*), Bash(git rev-parse*), Bash(ssh*), Bash(rsync*), Bash(grep*), Bash(find*), Bash(cat*), Bash(composer show*), Bash(php artisan about*), Bash(php artisan --version*), Bash(php artisan route:list*), Read, Grep, Glob
hooks:
  PreToolUse:
    - matcher: "Bash"
      hooks:
        - type: command
          command: "${CLAUDE_SKILL_DIR}/hooks/guard-readonly.sh"
---

# Laravel deep audit (read-only)

Audit a **live** Laravel 13 codebase — a whole module, the full app, or the
source actually running in production — not just one commit's diff. Verify it
against the **installed** Laravel API, report real defects with calibrated
confidence, and tell deliberate project conventions apart from accidental bugs.

This skill is **read-only by construction**: it has no `Write`/`Edit` tools and
runs as a read-only `Explore` agent. It reports; it never changes code, data, or
production. That is the hard guarantee that it cannot destroy a custom decision.

## Operating principles

1. **Read-only, always.** Report findings. Never edit, format, migrate, clear or
   warm caches, or write anywhere — least of all in production.
2. **Verify, don't guess.** Ground every API claim in the *installed* source of
   the codebase under audit, then `laravel-dev`'s `references/api/`, then the
   online docs at `https://api.laravel.com/docs/13.x/`. Resolve the framework
   version from that codebase's `composer.lock`/`vendor`, never an assumption.
3. **Respect intent.** A deviation from a convention is not automatically a bug.
   Prove a defect before flagging one; for everything else gather evidence and
   ask, defaulting to leaving the existing decision in place.

## 1. Choose the source

```!
git rev-parse --is-inside-work-tree >/dev/null 2>&1 && echo "local git repo: yes" || echo "local git repo: no"
```
```!
grep -m1 '"laravel/framework"' composer.lock 2>/dev/null || echo "no local composer.lock — confirm the framework version from the audited source"
```

Scope comes from `$ARGUMENTS` (default: current working tree, `.`):

- **path / module** — audit the working tree at that path.
- **`prod`** — audit the source running on the production server, read-only (§5).
- **`drift`** — compare the production source against `git HEAD` to find what is
  running but not committed.

For any mode, first establish that codebase's framework version
(`composer show laravel/framework`, `php artisan --version`, or read
`composer.lock`) and verify APIs against **that** version.

## 2. Classify every finding before reporting it

Run each candidate issue through three tiers. Only Tier A is flagged with high
confidence; Tier B is judged on evidence; Tier C is left untouched.

### Tier A — Verifiable defect (objective → flag, high confidence)

Wrong regardless of intent, because it breaks the API, the runtime, or a
security invariant:

- **API / signature** — a method, property, enum case, or config key that does
  not exist in the installed version, or is called with the wrong arity/types.
  Confirm against the installed `vendor/laravel/framework/src/...`, not memory.
- **Security** — a query on a tenant-owned table not scoped to the current
  tenant; mass assignment of a sensitive attribute; unescaped user data in Blade
  (`{!! !!}`); a secret literal in code or `env()` read outside `config/`; a
  state-changing route with no authorization; a non-idempotent write on a money
  path.
- **Correctness** — N+1 over a relation in a loop; an external side-effect inside
  an uncommitted transaction without `afterCommit`; a missing `down()` or a
  destructive edit to a migration already run; a guaranteed null dereference.

"Custom decision" never excuses these — choosing to leak tenant data or call a
non-existent method is a bug, not a preference. Report file:line, the API fact or
invariant broken, and the minimal fix.

### Tier B — Convention deviation (judge it; do not assume)

The code differs from the house style but is not objectively broken. Do **not**
flag on sight. Gather evidence first:

- **Consistency ratio** — grep the same layer/module: how many siblings do it the
  *deviating* way versus the conventional way? Dominant and repeated → a
  convention. A lone outlier among many that agree → suspicious.
- **Documented intent** — search `CLAUDE.md`, `.claude/rules/`, ADRs, README, and
  nearby comments/PHPDoc for an explicit rule or rationale. A matching rule →
  intentional.
- **Test evidence** — is the behavior asserted by a passing test? Covered → more
  likely intentional and safe.
- **History** — `git log`/`git blame`: long-standing and stable → intentional;
  brand-new and isolated → more likely a slip. In `prod`/`drift` mode, remember
  prod may differ from git — say so rather than trusting blame alone.

Then label it:

- **Intentional** (matches a documented rule, or the dominant consistent pattern,
  or is test-covered) → do **not** flag. List it under "Intentional patterns
  respected" so the human sees it was understood, not missed.
- **Likely oversight** (lone, undocumented, untested, plausibly risky) → raise it
  as a *question*, not a correction: name the evidence and both readings.
  Non-blocking.
- **Ambiguous** → present both readings and ask.

### Tier C — Matches project rules

Anything that conforms to `CLAUDE.md`/project conventions is correct by
definition here. Never "modernize" or rewrite it; do not even list it as an issue.

## 3. Calibrate and phrase

Every finding carries a confidence and the evidence behind it, so high-confidence
defects can be trusted and judgment calls can be weighed. Phrase Tier-B items as
observations/questions — e.g. "11 of 12 repositories scope by `organization_id`;
`OrderRepository::recent()` does not — intentional or missed?" — never as
imperatives. When evidence is thin, default to respecting the existing decision.

## 4. (prod / drift) Audit the running source — what git cannot see

Production drifts from git: hot-fixes edited on the server, uncommitted changes, a
different framework version, and — critically — **cached config/routes that
override the source**. A stale `bootstrap/cache/config.php` is exactly how an
`--env=testing` flag gets ignored and a command hits the wrong database. So in
`prod`/`drift` mode also report:

- files whose prod content differs from `git HEAD` (drift);
- `php artisan about` essentials: environment, framework version, and whether
  **config/route/event caches are active**, and whether cached config diverges
  from the source `config/`;
- any installed-version API gap that local review would miss because local is on
  a different version.

## 5. Hard safety rules for production

- **Read-only on the remote.** Prefer an `rsync` *pull* into a fresh `mktemp -d`
  and analyze the local copy; or run only read commands over SSH: `cat`, `grep`,
  `find`, `ls`, `git` (diff/log/blame/status/show), `php artisan about`,
  `php artisan --version`, `php artisan route:list`.
- **Never**, on prod: write/move/delete, redirect (`>`/`tee`), `composer`/`npm`
  install, any `php artisan migrate*` / `db:*` / `*:clear` / `*:cache` /
  `optimize`, change permissions, or print secret values. Reference a secret by
  its key name and location, never its value.
- **Explicit, never guessed.** Take the host/path from project config or the
  argument; never infer a production host. Prod auditing is manual only (this
  skill is not model-invoked).
- A bundled `guard-readonly.sh` PreToolUse hook denies any write-ish command
  (including over SSH) as a deterministic backstop on top of the read-only tool
  set. Do not try to work around it.

## Output format

```
## Audit summary
<scope · source (local/prod/drift) · framework version · what was covered>

## Verified defects (high confidence)
- <file:line> — <defect> — <API fact / invariant broken> — <minimal fix>

## Judgment calls (intentional or bug?)
- <file:line> — <observation> — evidence: <consistency N/M · docs · tests · age>
  — reading A vs reading B — question

## Intentional patterns respected
- <pattern> — why it is clearly deliberate (rule / consistency / tests)

## Drift & environment   (prod/drift only)
- <prod-vs-git differences · cache state · version notes>

## Looks good
- <areas verified clean>
```
