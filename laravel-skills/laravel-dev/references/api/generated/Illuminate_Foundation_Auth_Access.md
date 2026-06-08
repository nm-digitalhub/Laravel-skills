# Illuminate\Foundation\Auth\Access

Version: 13.14.0

## trait Authorizable
`Illuminate\Foundation\Auth\Access\Authorizable`

```php
function can($abilities, $arguments = []);
function canAny($abilities, $arguments = []);
function cannot($abilities, $arguments = []);
function cant($abilities, $arguments = []);
```

## trait AuthorizesRequests
`Illuminate\Foundation\Auth\Access\AuthorizesRequests`

```php
function authorize($ability, $arguments = []);
function authorizeForUser($user, $ability, $arguments = []);
function authorizeResource($model, $parameter = null, array $options = [], $request = null);
```

