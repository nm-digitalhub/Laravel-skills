# Illuminate\Contracts\Hashing

Version: 13.14.0

## interface Hasher
`Illuminate\Contracts\Hashing\Hasher`

```php
abstract function check($value, $hashedValue, array $options = []);
abstract function info($hashedValue);
abstract function make($value, array $options = []);
abstract function needsRehash($hashedValue, array $options = []);
```

