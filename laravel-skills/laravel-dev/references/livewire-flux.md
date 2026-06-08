# Livewire 4 + Flux UI v2 + Alpine + Blade (RTL)

Tuned for Livewire **4** with single-file components (SFC), Flux UI **v2**, Alpine, and Hebrew/RTL UIs. Detect the actual versions (`composer.json`: `livewire/livewire`, `livewire/flux`) and conform to existing components.

## Livewire 4 single-file components (SFC)

Livewire 4 supports single-file components — class + view in one file — alongside the classic two-file (`app/Livewire/*.php` + `resources/views/livewire/*.blade.php`) layout. **Match the project's choice.** Many Livewire 4 apps colocate SFCs (e.g. under `resources/views/livewire/` or a configured path). If migrating two-file → SFC, do it per-component and keep tests green.

Class essentials:
- Public properties are state; type them. Use `#[Validate]` attributes or a `rules()` method for validation.
- `mount()` for init (inject dependencies here via the container), `render()` returns the view.
- Use `#[Computed]` for derived values (cached per request) instead of recomputing in the view.
- `#[On('event')]` to listen for Livewire events; `$this->dispatch('event', ...)` to emit.
- Use `wire:model.live` only when you need live sync; default to deferred (`wire:model`) to cut round-trips. `.live.debounce.300ms` for search inputs.
- `wire:key` on every item in a loop. Missing keys cause DOM-diffing bugs.
- Lifecycle hooks (`updatedFoo`, `updatingFoo`) for reacting to property changes.
- Authorize inside actions (`$this->authorize(...)`) — public Livewire methods are callable from the client.
- Keep heavy work out of `render()` (it runs on every update). Push to computed props or jobs.

## Flux UI v2

- Use Flux components (`<flux:button>`, `<flux:input>`, `<flux:select>`, `<flux:modal>`, `<flux:field>`, `<flux:table>`, etc.) instead of hand-rolled markup — they carry accessibility, focus management, and consistent styling.
- Bind with `wire:model`; use Flux's `variant`/`size`/icon props rather than custom classes where a prop exists.
- For pro components, confirm the project has a Flux license/installed set before using them; fall back to free components otherwise.
- Verify a component/prop exists in v2 before using it (Flux's API moved between v1 and v2) — check the installed package or Flux docs rather than guessing prop names.

## Alpine

- Use Alpine for purely client-side interactivity (toggles, dropdowns) that doesn't need a server round-trip; reach for Livewire when state must persist server-side.
- `x-data`, `x-show`, `x-on`, `x-bind`, `$wire` to talk to the Livewire component from Alpine. Avoid duplicating state in both Alpine and Livewire.

## Blade

- Keep logic out of templates; pass prepared data from the component. Use `@props` in components, `@include`/components for reuse.
- Escape by default (`{{ }}`); only `{!! !!}` for trusted HTML and never with user input.
- Use `@can`/`@feature` (Pennant) directives for conditional UI.

## Hebrew / RTL

- Set `dir="rtl"` and `lang="he"` at the layout root; rely on logical CSS properties (`ms-*`/`me-*`, `start`/`end`) over `left`/`right` so the same classes work in RTL.
- With Tailwind, prefer `ps-`/`pe-`/`ms-`/`me-` (logical) utilities; verify the project's Tailwind config enables what you use.
- Test components in an RTL + mobile viewport (the project may use Playwright with an RTL/mobile profile). Numbers, dates, and bidi text need checking, not just mirrored layout.
- Keep user-facing strings in translation files (`lang/he.json` / `__()`), not hardcoded in Blade.

## Testing Livewire

Use `Livewire::test(Component::class)` (works in Pest or PHPUnit):

```php
Livewire::test(CreateOrder::class)
    ->set('amount', 100)
    ->call('save')
    ->assertHasNoErrors()
    ->assertDispatched('order-created');
```

Assert state, emitted events, validation errors, and authorization. See `references/testing.md`.

When unsure about a Livewire 4 attribute or method, check the installed package source or Livewire docs rather than assuming v3 behavior — several APIs changed across major versions.
