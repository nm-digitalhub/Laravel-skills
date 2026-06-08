# Illuminate\Http\Testing

Version: 13.14.0

## class File
`Illuminate\Http\Testing\File` extends Illuminate\Http\UploadedFile implements Stringable

```php
final function _bad_state_ex();
function __call($method, $parameters);
function __construct($name, $tempFile);
function __debugInfo();
function __toString(): string;
function clientExtension();
function dimensions();
function extension();
function get();
function getATime();
function getBasename(string $suffix = '');
function getCTime();
function getClientMimeType(): string;
function getClientOriginalExtension(): string;
function getClientOriginalName(): string;
function getClientOriginalPath(): string;
function getContent(): string;
function getError(): int;
function getErrorMessage(): string;
function getExtension();
function getFileInfo(?string $class = null);
function getFilename();
function getGroup();
function getInode();
function getLinkTarget();
function getMTime();
function getMimeType(): string;
function getOwner();
function getPath();
function getPathInfo(?string $class = null);
function getPathname();
function getPerms();
function getRealPath();
function getSize(): int;
function getType();
function guessClientExtension(): ?string;
function guessExtension(): ?string;
function hashName($path = null);
function isDir();
function isExecutable();
function isFile();
function isLink();
function isReadable();
function isValid(): bool;
function isWritable();
function mimeType($mimeType);
function move(string $directory, ?string $name = null): Symfony\Component\HttpFoundation\File\File;
function openFile(string $mode = 'r', bool $useIncludePath = false, $context = null);
function path();
function setFileClass(string $class = 'SplFileObject');
function setInfoClass(string $class = 'SplFileInfo');
function size($kilobytes);
function store($path = '', $options = []);
function storeAs($path, $name = null, $options = []);
function storePublicly($path = '', $options = []);
function storePubliclyAs($path, $name = null, $options = []);
static function __callStatic($method, $parameters);
static function create($name, $kilobytes = 0);
static function createFromBase(Symfony\Component\HttpFoundation\File\UploadedFile $file, $test = false);
static function createWithContent($name, $content);
static function fake();
static function flushMacros();
static function getMaxFilesize(): int|float;
static function hasMacro($name);
static function image($name, $width = 10, $height = 10);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
```

## class FileFactory
`Illuminate\Http\Testing\FileFactory`

```php
function create($name, $kilobytes = 0, $mimeType = null);
function createWithContent($name, $content);
function image($name, $width = 10, $height = 10);
```

## class MimeType
`Illuminate\Http\Testing\MimeType`

```php
static function from($filename);
static function get($extension);
static function getMimeTypes();
static function search($mimeType);
```

