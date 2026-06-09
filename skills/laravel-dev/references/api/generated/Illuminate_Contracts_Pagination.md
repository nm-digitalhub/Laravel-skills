# Illuminate\Contracts\Pagination

Version: 13.14.0

## interface CursorPaginator
`Illuminate\Contracts\Pagination\CursorPaginator`

```php
abstract function appends($key, $value = null);
abstract function cursor();
abstract function fragment($fragment = null);
abstract function hasMorePages();
abstract function hasPages();
abstract function isEmpty();
abstract function isNotEmpty();
abstract function items();
abstract function nextCursor();
abstract function nextPageUrl();
abstract function path();
abstract function perPage();
abstract function previousCursor();
abstract function previousPageUrl();
abstract function render($view = null, $data = []);
abstract function url($cursor);
abstract function withQueryString();
```

## interface LengthAwarePaginator
`Illuminate\Contracts\Pagination\LengthAwarePaginator` implements Illuminate\Contracts\Pagination\Paginator

```php
abstract function appends($key, $value = null);
abstract function currentPage();
abstract function firstItem();
abstract function fragment($fragment = null);
abstract function getUrlRange($start, $end);
abstract function hasMorePages();
abstract function hasPages();
abstract function isEmpty();
abstract function isNotEmpty();
abstract function items();
abstract function lastItem();
abstract function lastPage();
abstract function nextPageUrl();
abstract function path();
abstract function perPage();
abstract function previousPageUrl();
abstract function render($view = null, $data = []);
abstract function total();
abstract function url($page);
abstract function withQueryString();
```

## interface Paginator
`Illuminate\Contracts\Pagination\Paginator`

```php
abstract function appends($key, $value = null);
abstract function currentPage();
abstract function firstItem();
abstract function fragment($fragment = null);
abstract function hasMorePages();
abstract function hasPages();
abstract function isEmpty();
abstract function isNotEmpty();
abstract function items();
abstract function lastItem();
abstract function nextPageUrl();
abstract function path();
abstract function perPage();
abstract function previousPageUrl();
abstract function render($view = null, $data = []);
abstract function url($page);
abstract function withQueryString();
```

