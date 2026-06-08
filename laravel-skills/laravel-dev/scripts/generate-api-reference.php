<?php

/**
 * generate-api-reference.php
 *
 * Emits the COMPLETE public API of the Laravel version installed in THIS
 * project (vendor/laravel/framework) as Markdown, one file per top-level
 * Illuminate namespace, plus an index.json manifest.
 *
 * Why reflection instead of a frozen copy of api.laravel.com:
 *  - Version-exact: matches the framework actually installed here.
 *  - Always current: re-run after `composer update`.
 *  - Authoritative: signatures come from the real source, not scraped HTML.
 *
 * Usage (from project root):
 *   php vendor/laravel/skills/laravel-dev/scripts/generate-api-reference.php \
 *       --out=.claude/skills/laravel-dev/references/api/generated
 *   # or just:  php <path-to-skill>/scripts/generate-api-reference.php
 *
 * Output: <out>/<Namespace>.md (e.g. Database_Eloquent.md) + index.json
 */

$opts = getopt('', ['out::', 'framework::', 'only::']);
$projectRoot = getcwd();
$frameworkSrc = $opts['framework']
    ?? $projectRoot . '/vendor/laravel/framework/src/Illuminate';
$outDir = $opts['out']
    ?? $projectRoot . '/.claude/skills/laravel-dev/references/api/generated';
$onlyFilter = $opts['only'] ?? null; // e.g. --only=Database\\Eloquent

if (! is_dir($frameworkSrc)) {
    fwrite(STDERR, "ERROR: framework src not found at: $frameworkSrc\n");
    fwrite(STDERR, "Run from project root, or pass --framework=/path/to/vendor/laravel/framework/src/Illuminate\n");
    exit(1);
}

// Bootstrap the project's autoloader so reflection can resolve classes.
$autoload = $projectRoot . '/vendor/autoload.php';
if (is_file($autoload)) {
    require $autoload;
}

@mkdir($outDir, 0775, true);

$version = '(unknown)';
if (class_exists(\Illuminate\Foundation\Application::class)) {
    $version = defined(\Illuminate\Foundation\Application::class . '::VERSION')
        ? \Illuminate\Foundation\Application::VERSION
        : $version;
}

/** Map every PHP file under src to its FQCN. */
$rii = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($frameworkSrc, FilesystemIterator::SKIP_DOTS)
);

$byNamespace = [];   // namespace => [fqcn, ...]
$manifest = [];      // fqcn => ['kind'=>..., 'url'=>...]
$seen = [];

foreach ($rii as $file) {
    if ($file->getExtension() !== 'php') {
        continue;
    }
    $code = @file_get_contents($file->getPathname());
    if ($code === false) {
        continue;
    }
    // Derive the REAL namespace + type name from the file's tokens, not its path.
    // (Some sub-packages, e.g. illuminate/conditionable, declare classes under a
    //  different namespace than their directory.)
    [$ns, $kind, $name] = parseTypeFromCode($code);
    if ($name === null) {
        continue; // file declares no class/interface/trait/enum (helpers, stubs, server.php)
    }
    $fqcn = $ns !== '' ? "$ns\\$name" : $name;

    if (strncmp($fqcn, 'Illuminate\\', 11) !== 0) {
        continue; // only document the Illuminate API surface
    }
    if ($onlyFilter && stripos($fqcn, $onlyFilter) === false) {
        continue;
    }
    if (isset($seen[$fqcn])) {
        continue;
    }
    $seen[$fqcn] = true;

    try {
        if (! (class_exists($fqcn) || interface_exists($fqcn) || trait_exists($fqcn) || enum_exists($fqcn))) {
            continue; // not loadable (optional dependency missing, etc.)
        }
    } catch (\Throwable $e) {
        continue;
    }

    $nsPos = strrpos($fqcn, '\\');
    $byNamespace[$nsPos !== false ? substr($fqcn, 0, $nsPos) : ''][] = $fqcn;
}

ksort($byNamespace);

$indexLines = ["# Laravel API — generated reference", "", "Framework version: **$version**", "Generated: " . date('c'), ""];

foreach ($byNamespace as $ns => $classes) {
    sort($classes);
    $fileSafe = str_replace('\\', '_', $ns);
    $path = "$outDir/$fileSafe.md";
    $out = ["# $ns", "", "Version: $version", ""];

    foreach ($classes as $fqcn) {
        try {
            $ref = new ReflectionClass($fqcn);
            $methodsRefl = $ref->getMethods(ReflectionMethod::IS_PUBLIC);
        } catch (\Throwable $e) {
            continue; // class references an uninstalled optional dependency
        }
        $kind = $ref->isInterface() ? 'interface' : ($ref->isTrait() ? 'trait' : ($ref->isEnum() ? 'enum' : 'class'));
        $manifest[$fqcn] = [
            'kind' => $kind,
            'url'  => 'https://api.laravel.com/docs/13.x/' . str_replace('\\', '/', $fqcn) . '.html',
        ];

        $short = $ref->getShortName();
        $extends = ($p = $ref->getParentClass()) ? ' extends ' . $p->getName() : '';
        $impl = $ref->getInterfaceNames();
        $implStr = $impl ? ' implements ' . implode(', ', $impl) : '';

        $out[] = "## $kind $short";
        $out[] = "`$fqcn`$extends$implStr";
        $out[] = "";

        // Public methods declared on (or first-defined by) this class.
        $methods = [];
        foreach ($methodsRefl as $m) {
            $methods[] = renderMethod($m);
        }
        if ($methods) {
            sort($methods);
            $out[] = "```php";
            $out = array_merge($out, $methods);
            $out[] = "```";
            $out[] = "";
        }
    }

    file_put_contents($path, implode("\n", $out) . "\n");
    $indexLines[] = "- **$ns** — " . count($classes) . " classes → `$fileSafe.md`";
}

file_put_contents("$outDir/_index.md", implode("\n", $indexLines) . "\n");
file_put_contents("$outDir/manifest.json", json_encode($manifest, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) . "\n");

$nsCount = count($byNamespace);
$clsCount = count($manifest);
fwrite(STDOUT, "Generated $clsCount classes across $nsCount namespaces (Laravel $version) into:\n$outDir\n");

/** Extract [namespace, kind, name] of the first declared type in PHP source. */
function parseTypeFromCode(string $code): array
{
    if (strpos($code, 'class') === false
        && strpos($code, 'interface') === false
        && strpos($code, 'trait') === false
        && strpos($code, 'enum') === false) {
        return ['', null, null];
    }
    $tokens = token_get_all($code);
    $n = count($tokens);
    $ns = '';
    for ($i = 0; $i < $n; $i++) {
        $t = $tokens[$i];
        if (! is_array($t)) {
            continue;
        }
        if ($t[0] === T_NAMESPACE) {
            $buf = '';
            for ($j = $i + 1; $j < $n; $j++) {
                $tt = $tokens[$j];
                if ($tt === ';' || $tt === '{') {
                    break;
                }
                if (is_array($tt)) {
                    if ($tt[0] === T_WHITESPACE) {
                        continue;
                    }
                    if (in_array($tt[0], [T_STRING, T_NS_SEPARATOR, T_NAME_QUALIFIED, T_NAME_FULLY_QUALIFIED], true)) {
                        $buf .= $tt[1];
                        continue;
                    }
                }
                break;
            }
            $ns = trim($buf, '\\');
            continue;
        }
        if (in_array($t[0], [T_CLASS, T_INTERFACE, T_TRAIT, T_ENUM], true)) {
            // Skip `::class` and anonymous `new class`.
            $prev = $i - 1;
            while ($prev >= 0 && is_array($tokens[$prev]) && $tokens[$prev][0] === T_WHITESPACE) {
                $prev--;
            }
            if ($prev >= 0 && is_array($tokens[$prev]) && in_array($tokens[$prev][0], [T_DOUBLE_COLON, T_NEW], true)) {
                continue;
            }
            $j = $i + 1;
            while ($j < $n && is_array($tokens[$j]) && $tokens[$j][0] === T_WHITESPACE) {
                $j++;
            }
            if ($j < $n && is_array($tokens[$j]) && $tokens[$j][0] === T_STRING) {
                $kind = $t[0] === T_CLASS ? 'class' : ($t[0] === T_INTERFACE ? 'interface' : ($t[0] === T_TRAIT ? 'trait' : 'enum'));
                return [$ns, $kind, $tokens[$j][1]];
            }
        }
    }
    return [$ns, null, null];
}

/** Render a method signature as a single PHP-ish line. */
function renderMethod(ReflectionMethod $m): string
{
    $mods = trim(($m->isStatic() ? 'static ' : '') . ($m->isAbstract() ? 'abstract ' : '') . ($m->isFinal() ? 'final ' : ''));
    $params = [];
    foreach ($m->getParameters() as $p) {
        $t = $p->hasType() ? typeStr($p->getType()) . ' ' : '';
        $variadic = $p->isVariadic() ? '...' : '';
        $ref = $p->isPassedByReference() ? '&' : '';
        $def = '';
        if ($p->isDefaultValueAvailable()) {
            try {
                $dv = $p->getDefaultValue();
                $def = ' = ' . shortVal($dv);
            } catch (\Throwable) {
                $def = ' = ?';
            }
        }
        $params[] = "{$t}{$ref}{$variadic}\${$p->getName()}{$def}";
    }
    $ret = $m->hasReturnType() ? ': ' . typeStr($m->getReturnType()) : '';
    return trim("$mods function {$m->getName()}(" . implode(', ', $params) . ")$ret;");
}

function typeStr(?ReflectionType $t): string
{
    if ($t === null) return '';
    if ($t instanceof ReflectionUnionType) {
        return implode('|', array_map('typeStr', $t->getTypes()));
    }
    if ($t instanceof ReflectionIntersectionType) {
        return implode('&', array_map('typeStr', $t->getTypes()));
    }
    /** @var ReflectionNamedType $t */
    $n = $t->getName();
    return ($t->allowsNull() && $n !== 'mixed' && $n !== 'null' ? '?' : '') . $n;
}

function shortVal($v): string
{
    if (is_array($v))  return '[]';
    if (is_bool($v))   return $v ? 'true' : 'false';
    if (is_null($v))   return 'null';
    if (is_string($v)) return "'" . (strlen($v) > 20 ? substr($v, 0, 17) . '...' : $v) . "'";
    return (string) $v;
}
