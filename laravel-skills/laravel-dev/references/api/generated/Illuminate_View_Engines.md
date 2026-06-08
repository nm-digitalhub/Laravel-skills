# Illuminate\View\Engines

Version: 13.14.0

## class CompilerEngine
`Illuminate\View\Engines\CompilerEngine` extends Illuminate\View\Engines\PhpEngine implements Illuminate\Contracts\View\Engine

```php
function __construct(Illuminate\View\Compilers\CompilerInterface $compiler, ?Illuminate\Filesystem\Filesystem $files = null);
function forgetCompiledOrNotExpired();
function get($path, array $data = []);
function getCompiler();
```

## class Engine
`Illuminate\View\Engines\Engine`

```php
function getLastRendered();
```

## class EngineResolver
`Illuminate\View\Engines\EngineResolver`

```php
function forget($engine);
function register($engine, Closure $resolver);
function resolve($engine);
```

## class FileEngine
`Illuminate\View\Engines\FileEngine` implements Illuminate\Contracts\View\Engine

```php
function __construct(Illuminate\Filesystem\Filesystem $files);
function get($path, array $data = []);
```

## class PhpEngine
`Illuminate\View\Engines\PhpEngine` implements Illuminate\Contracts\View\Engine

```php
function __construct(Illuminate\Filesystem\Filesystem $files);
function get($path, array $data = []);
```

