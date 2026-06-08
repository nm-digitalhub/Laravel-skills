# Illuminate\Pagination

Version: 13.14.0

## class AbstractCursorPaginator
`Illuminate\Pagination\AbstractCursorPaginator` implements Illuminate\Contracts\Support\Htmlable, Stringable

```php
function __call($method, $parameters);
function __toString(): string;
function appends($key, $value = null);
function count(): int;
function cursor();
function fragment($fragment = null);
function getCollection();
function getCursorForItem($item, $isNext = true);
function getCursorName();
function getIterator(): Traversable;
function getOptions();
function getParametersForItem($item);
function isEmpty();
function isNotEmpty();
function items();
function loadMorph($relation, $relations);
function loadMorphCount($relation, $relations);
function nextCursor();
function nextPageUrl();
function offsetExists($key): bool;
function offsetGet($key): mixed;
function offsetSet($key, $value): void;
function offsetUnset($key): void;
function path();
function perPage();
function previousCursor();
function previousPageUrl();
function setCollection(Illuminate\Support\Collection $collection);
function setCursorName($name);
function setPath($path);
function tap($callback = null);
function through(callable $callback);
function toHtml();
function toResourceCollection(?string $resourceClass = null): Illuminate\Http\Resources\Json\ResourceCollection;
function url($cursor);
function withPath($path);
function withQueryString();
static function currentCursorResolver(Closure $resolver);
static function resolveCurrentCursor($cursorName = 'cursor', $default = null);
static function viewFactory();
```

## class AbstractPaginator
`Illuminate\Pagination\AbstractPaginator` implements Illuminate\Contracts\Support\CanBeEscapedWhenCastToString, Illuminate\Contracts\Support\Htmlable, Stringable

```php
function __call($method, $parameters);
function __toString(): string;
function appends($key, $value = null);
function count(): int;
function currentPage();
function escapeWhenCastingToString($escape = true);
function firstItem();
function fragment($fragment = null);
function getCollection();
function getIterator(): Traversable;
function getOptions();
function getPageName();
function getUrlRange($start, $end);
function hasPages();
function isEmpty();
function isNotEmpty();
function items();
function lastItem();
function loadMorph($relation, $relations);
function loadMorphCount($relation, $relations);
function offsetExists($key): bool;
function offsetGet($key): mixed;
function offsetSet($key, $value): void;
function offsetUnset($key): void;
function onEachSide($count);
function onFirstPage();
function onLastPage();
function path();
function perPage();
function previousPageUrl();
function setCollection(Illuminate\Support\Collection $collection);
function setPageName($name);
function setPath($path);
function tap($callback = null);
function through(callable $callback);
function toHtml();
function toResourceCollection(?string $resourceClass = null): Illuminate\Http\Resources\Json\ResourceCollection;
function url($page);
function withPath($path);
function withQueryString();
static function currentPageResolver(Closure $resolver);
static function currentPathResolver(Closure $resolver);
static function defaultSimpleView($view);
static function defaultView($view);
static function queryStringResolver(Closure $resolver);
static function resolveCurrentPage($pageName = 'page', $default = 1);
static function resolveCurrentPath($default = '/');
static function resolveQueryString($default = null);
static function useBootstrap();
static function useBootstrapFive();
static function useBootstrapFour();
static function useBootstrapThree();
static function useTailwind();
static function viewFactory();
static function viewFactoryResolver(Closure $resolver);
```

## class Cursor
`Illuminate\Pagination\Cursor` implements Illuminate\Contracts\Support\Arrayable

```php
function __construct(array $parameters, $pointsToNextItems = true);
function encode();
function parameter(string $parameterName);
function parameters(array $parameterNames);
function pointsToNextItems();
function pointsToPreviousItems();
function toArray();
static function fromEncoded($encodedString);
```

## class CursorPaginator
`Illuminate\Pagination\CursorPaginator` extends Illuminate\Pagination\AbstractCursorPaginator implements Illuminate\Contracts\Support\Htmlable, Stringable, Illuminate\Contracts\Support\Arrayable, ArrayAccess, Countable, IteratorAggregate, Illuminate\Contracts\Support\Jsonable, JsonSerializable, Illuminate\Contracts\Pagination\CursorPaginator, Traversable

```php
function __call($method, $parameters);
function __construct($items, $perPage, $cursor = null, array $options = []);
function __toString(): string;
function appends($key, $value = null);
function count(): int;
function cursor();
function fragment($fragment = null);
function getCollection();
function getCursorForItem($item, $isNext = true);
function getCursorName();
function getIterator(): Traversable;
function getOptions();
function getParametersForItem($item);
function hasMorePages();
function hasPages();
function isEmpty();
function isNotEmpty();
function items();
function jsonSerialize(): array;
function links($view = null, $data = []);
function loadMorph($relation, $relations);
function loadMorphCount($relation, $relations);
function nextCursor();
function nextPageUrl();
function offsetExists($key): bool;
function offsetGet($key): mixed;
function offsetSet($key, $value): void;
function offsetUnset($key): void;
function onFirstPage();
function onLastPage();
function path();
function perPage();
function previousCursor();
function previousPageUrl();
function render($view = null, $data = []);
function setCollection(Illuminate\Support\Collection $collection);
function setCursorName($name);
function setPath($path);
function tap($callback = null);
function through(callable $callback);
function toArray();
function toHtml();
function toJson($options = 0);
function toPrettyJson(int $options = 0);
function toResourceCollection(?string $resourceClass = null): Illuminate\Http\Resources\Json\ResourceCollection;
function url($cursor);
function withPath($path);
function withQueryString();
static function currentCursorResolver(Closure $resolver);
static function resolveCurrentCursor($cursorName = 'cursor', $default = null);
static function viewFactory();
```

## class LengthAwarePaginator
`Illuminate\Pagination\LengthAwarePaginator` extends Illuminate\Pagination\AbstractPaginator implements Illuminate\Contracts\Support\CanBeEscapedWhenCastToString, Illuminate\Contracts\Support\Htmlable, Stringable, Illuminate\Contracts\Support\Arrayable, ArrayAccess, Countable, IteratorAggregate, Illuminate\Contracts\Support\Jsonable, JsonSerializable, Illuminate\Contracts\Pagination\LengthAwarePaginator, Traversable, Illuminate\Contracts\Pagination\Paginator

```php
function __call($method, $parameters);
function __construct($items, $total, $perPage, $currentPage = null, array $options = []);
function __toString(): string;
function appends($key, $value = null);
function count(): int;
function currentPage();
function escapeWhenCastingToString($escape = true);
function firstItem();
function fragment($fragment = null);
function getCollection();
function getIterator(): Traversable;
function getOptions();
function getPageName();
function getUrlRange($start, $end);
function hasMorePages();
function hasPages();
function isEmpty();
function isNotEmpty();
function items();
function jsonSerialize(): array;
function lastItem();
function lastPage();
function linkCollection();
function links($view = null, $data = []);
function loadMorph($relation, $relations);
function loadMorphCount($relation, $relations);
function nextPageUrl();
function offsetExists($key): bool;
function offsetGet($key): mixed;
function offsetSet($key, $value): void;
function offsetUnset($key): void;
function onEachSide($count);
function onFirstPage();
function onLastPage();
function path();
function perPage();
function previousPageUrl();
function render($view = null, $data = []);
function setCollection(Illuminate\Support\Collection $collection);
function setPageName($name);
function setPath($path);
function tap($callback = null);
function through(callable $callback);
function toArray();
function toHtml();
function toJson($options = 0);
function toPrettyJson(int $options = 0);
function toResourceCollection(?string $resourceClass = null): Illuminate\Http\Resources\Json\ResourceCollection;
function total();
function url($page);
function withPath($path);
function withQueryString();
static function currentPageResolver(Closure $resolver);
static function currentPathResolver(Closure $resolver);
static function defaultSimpleView($view);
static function defaultView($view);
static function queryStringResolver(Closure $resolver);
static function resolveCurrentPage($pageName = 'page', $default = 1);
static function resolveCurrentPath($default = '/');
static function resolveQueryString($default = null);
static function useBootstrap();
static function useBootstrapFive();
static function useBootstrapFour();
static function useBootstrapThree();
static function useTailwind();
static function viewFactory();
static function viewFactoryResolver(Closure $resolver);
```

## class PaginationServiceProvider
`Illuminate\Pagination\PaginationServiceProvider` extends Illuminate\Support\ServiceProvider

```php
function __construct($app);
function boot();
function booted(Closure $callback);
function booting(Closure $callback);
function callBootedCallbacks();
function callBootingCallbacks();
function commands($commands);
function isDeferred();
function provides();
function register();
function when();
static function addProviderToBootstrapFile(string $provider, ?string $path = null);
static function defaultProviders();
static function pathsToPublish($provider = null, $group = null);
static function publishableGroups();
static function publishableMigrationPaths();
static function publishableProviders();
static function removeProviderFromBootstrapFile(array|string $providersToRemove, ?string $path = null, bool $strict = false);
```

## class PaginationState
`Illuminate\Pagination\PaginationState`

```php
static function resolveUsing($app);
```

## class Paginator
`Illuminate\Pagination\Paginator` extends Illuminate\Pagination\AbstractPaginator implements Illuminate\Contracts\Support\CanBeEscapedWhenCastToString, Illuminate\Contracts\Support\Htmlable, Stringable, Illuminate\Contracts\Support\Arrayable, ArrayAccess, Countable, IteratorAggregate, Illuminate\Contracts\Support\Jsonable, JsonSerializable, Illuminate\Contracts\Pagination\Paginator, Traversable

```php
function __call($method, $parameters);
function __construct($items, $perPage, $currentPage = null, array $options = []);
function __toString(): string;
function appends($key, $value = null);
function count(): int;
function currentPage();
function escapeWhenCastingToString($escape = true);
function firstItem();
function fragment($fragment = null);
function getCollection();
function getIterator(): Traversable;
function getOptions();
function getPageName();
function getUrlRange($start, $end);
function hasMorePages();
function hasMorePagesWhen($hasMore = true);
function hasPages();
function isEmpty();
function isNotEmpty();
function items();
function jsonSerialize(): array;
function lastItem();
function links($view = null, $data = []);
function loadMorph($relation, $relations);
function loadMorphCount($relation, $relations);
function nextPageUrl();
function offsetExists($key): bool;
function offsetGet($key): mixed;
function offsetSet($key, $value): void;
function offsetUnset($key): void;
function onEachSide($count);
function onFirstPage();
function onLastPage();
function path();
function perPage();
function previousPageUrl();
function render($view = null, $data = []);
function setCollection(Illuminate\Support\Collection $collection);
function setPageName($name);
function setPath($path);
function tap($callback = null);
function through(callable $callback);
function toArray();
function toHtml();
function toJson($options = 0);
function toPrettyJson(int $options = 0);
function toResourceCollection(?string $resourceClass = null): Illuminate\Http\Resources\Json\ResourceCollection;
function url($page);
function withPath($path);
function withQueryString();
static function currentPageResolver(Closure $resolver);
static function currentPathResolver(Closure $resolver);
static function defaultSimpleView($view);
static function defaultView($view);
static function queryStringResolver(Closure $resolver);
static function resolveCurrentPage($pageName = 'page', $default = 1);
static function resolveCurrentPath($default = '/');
static function resolveQueryString($default = null);
static function useBootstrap();
static function useBootstrapFive();
static function useBootstrapFour();
static function useBootstrapThree();
static function useTailwind();
static function viewFactory();
static function viewFactoryResolver(Closure $resolver);
```

## class UrlWindow
`Illuminate\Pagination\UrlWindow`

```php
function __construct(Illuminate\Contracts\Pagination\LengthAwarePaginator $paginator);
function get();
function getAdjacentUrlRange($onEachSide);
function getFinish();
function getStart();
function hasPages();
static function make(Illuminate\Contracts\Pagination\LengthAwarePaginator $paginator);
```

