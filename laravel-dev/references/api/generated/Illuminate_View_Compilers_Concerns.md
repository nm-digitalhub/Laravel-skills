# Illuminate\View\Compilers\Concerns

Version: 13.14.0

## trait CompilesAuthorizations
`Illuminate\View\Compilers\Concerns\CompilesAuthorizations`

## trait CompilesClasses
`Illuminate\View\Compilers\Concerns\CompilesClasses`

## trait CompilesComments
`Illuminate\View\Compilers\Concerns\CompilesComments`

## trait CompilesComponents
`Illuminate\View\Compilers\Concerns\CompilesComponents`

```php
function compileEndComponentClass();
static function compileClassComponentOpening(string $component, string $alias, string $data, string $hash);
static function newComponentHash(string $component);
static function sanitizeComponentAttribute($value);
```

## trait CompilesConditionals
`Illuminate\View\Compilers\Concerns\CompilesConditionals`

```php
function compileEndOnce();
```

## trait CompilesContexts
`Illuminate\View\Compilers\Concerns\CompilesContexts`

## trait CompilesEchos
`Illuminate\View\Compilers\Concerns\CompilesEchos`

```php
function applyEchoHandler($value);
function compileEchos($value);
function stringable($class, $handler = null);
```

## trait CompilesErrors
`Illuminate\View\Compilers\Concerns\CompilesErrors`

## trait CompilesFragments
`Illuminate\View\Compilers\Concerns\CompilesFragments`

## trait CompilesHelpers
`Illuminate\View\Compilers\Concerns\CompilesHelpers`

## trait CompilesIncludes
`Illuminate\View\Compilers\Concerns\CompilesIncludes`

## trait CompilesInjections
`Illuminate\View\Compilers\Concerns\CompilesInjections`

## trait CompilesJs
`Illuminate\View\Compilers\Concerns\CompilesJs`

## trait CompilesJson
`Illuminate\View\Compilers\Concerns\CompilesJson`

## trait CompilesLayouts
`Illuminate\View\Compilers\Concerns\CompilesLayouts`

## trait CompilesLoops
`Illuminate\View\Compilers\Concerns\CompilesLoops`

## trait CompilesRawPhp
`Illuminate\View\Compilers\Concerns\CompilesRawPhp`

## trait CompilesSessions
`Illuminate\View\Compilers\Concerns\CompilesSessions`

## trait CompilesStacks
`Illuminate\View\Compilers\Concerns\CompilesStacks`

## trait CompilesStyles
`Illuminate\View\Compilers\Concerns\CompilesStyles`

## trait CompilesTranslations
`Illuminate\View\Compilers\Concerns\CompilesTranslations`

## trait CompilesUseStatements
`Illuminate\View\Compilers\Concerns\CompilesUseStatements`

