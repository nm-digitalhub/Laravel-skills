# Illuminate\View\Concerns

Version: 13.14.0

## trait ManagesComponents
`Illuminate\View\Concerns\ManagesComponents`

```php
function endSlot();
function getConsumableComponentData($key, $default = null);
function renderComponent();
function slot($name, $content = null, $attributes = []);
function startComponent($view, array $data = []);
function startComponentFirst(array $names, array $data = []);
```

## trait ManagesEvents
`Illuminate\View\Concerns\ManagesEvents`

```php
function callComposer(Illuminate\Contracts\View\View $view);
function callCreator(Illuminate\Contracts\View\View $view);
function composer($views, $callback);
function composers(array $composers);
function creator($views, $callback);
```

## trait ManagesFragments
`Illuminate\View\Concerns\ManagesFragments`

```php
function flushFragments();
function getFragment($name, $default = null);
function getFragments();
function startFragment($fragment);
function stopFragment();
```

## trait ManagesLayouts
`Illuminate\View\Concerns\ManagesLayouts`

```php
function appendSection();
function flushSections();
function getSection($name, $default = null);
function getSections();
function hasSection($name);
function inject($section, $content);
function sectionMissing($name);
function startSection($section, $content = null);
function stopSection($overwrite = false);
function yieldContent($section, $default = '');
function yieldSection();
static function parentPlaceholder($section = '');
```

## trait ManagesLoops
`Illuminate\View\Concerns\ManagesLoops`

```php
function addLoop($data);
function getLastLoop();
function getLoopStack();
function incrementLoopIndices();
function popLoop();
```

## trait ManagesStacks
`Illuminate\View\Concerns\ManagesStacks`

```php
function flushStacks();
function isStackEmpty(string $section): bool;
function startPrepend($section, $content = '');
function startPush($section, $content = '');
function stopPrepend();
function stopPush();
function yieldPushContent($section, $default = '');
```

## trait ManagesTranslations
`Illuminate\View\Concerns\ManagesTranslations`

```php
function renderTranslation();
function startTranslation($replacements = []);
```

