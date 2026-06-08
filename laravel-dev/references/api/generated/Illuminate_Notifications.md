# Illuminate\Notifications

Version: 13.14.0

## class Action
`Illuminate\Notifications\Action`

```php
function __construct($text, $url);
```

## class AnonymousNotifiable
`Illuminate\Notifications\AnonymousNotifiable`

```php
function getKey();
function notify($notification);
function notifyNow($notification);
function route($channel, $route);
function routeNotificationFor($driver);
```

## class ChannelManager
`Illuminate\Notifications\ChannelManager` extends Illuminate\Support\Manager implements Illuminate\Contracts\Notifications\Dispatcher, Illuminate\Contracts\Notifications\Factory

```php
function __call($method, $parameters);
function __construct(Illuminate\Contracts\Container\Container $container);
function channel($name = null);
function deliverVia($channel);
function deliversVia();
function driver($driver = null);
function extend($driver, Closure $callback);
function forgetDrivers();
function getContainer();
function getDefaultDriver();
function getDrivers();
function locale($locale);
function resolveConnectionFromQueueRoute($queueable);
function resolveQueueFromQueueRoute($queueable);
function send($notifiables, $notification);
function sendNow($notifiables, $notification, ?array $channels = null);
function setContainer(Illuminate\Contracts\Container\Container $container);
static function __callStatic($method, $parameters);
static function flushMacros();
static function hasMacro($name);
static function macro($name, $macro);
static function mixin($mixin, $replace = true);
```

## class DatabaseNotification
`Illuminate\Notifications\DatabaseNotification` extends Illuminate\Database\Eloquent\Model implements Illuminate\Contracts\Routing\UrlRoutable, Stringable, Illuminate\Contracts\Queue\QueueableEntity, JsonSerializable, Illuminate\Contracts\Support\Jsonable, Illuminate\Contracts\Broadcasting\HasBroadcastChannel, Illuminate\Contracts\Support\CanBeEscapedWhenCastToString, ArrayAccess, Illuminate\Contracts\Support\Arrayable

```php
function __call($method, $parameters);
function __construct(array $attributes = []);
function __get($key);
function __isset($key);
function __set($key, $value);
function __sleep();
function __toString(): string;
function __unset($key);
function __wakeup();
function addObservableEvents($observables);
function append($attributes);
function attributesToArray();
function autoloadRelationsUsing(Closure $callback, $context = null);
function belongsTo($related, $foreignKey = null, $ownerKey = null, $relation = null);
function belongsToMany($related, $table = null, $foreignPivotKey = null, $relatedPivotKey = null, $parentKey = null, $relatedKey = null, $relation = null);
function broadcastChannel();
function broadcastChannelRoute();
function callNamedScope($scope, array $parameters = []);
function delete();
function deleteOrFail();
function deleteQuietly();
function discardChanges();
function dispatchesEvents();
function escapeWhenCastingToString($escape = true);
function except($attributes);
function fill(array $attributes);
function fillJsonAttribute($key, $value);
function fillable(array $fillable);
function forceDelete();
function forceFill(array $attributes);
function fresh($with = []);
function freshTimestamp();
function freshTimestampString();
function fromDateTime($value);
function fromEncryptedString($value);
function fromFloat($value);
function fromJson($value, $asObject = false);
function getAppends();
function getAttribute($key);
function getAttributeValue($key);
function getAttributes();
function getCasts();
function getChanges();
function getConnection();
function getConnectionName();
function getCreatedAtColumn();
function getDateFormat();
function getDates();
function getDirty();
function getFillable();
function getForeignKey();
function getGlobalScopes();
function getGuarded();
function getHidden();
function getIncrementing();
function getKey();
function getKeyName();
function getKeyType();
function getMorphClass();
function getMutatedAttributes();
function getObservableEvents();
function getOriginal($key = null, $default = null);
function getPerPage();
function getPrevious();
function getQualifiedCreatedAtColumn();
function getQualifiedKeyName();
function getQualifiedUpdatedAtColumn();
function getQueueableConnection();
function getQueueableId();
function getQueueableRelations();
function getRawOriginal($key = null, $default = null);
function getRelation($relation);
function getRelationValue($key);
function getRelations();
function getRouteKey();
function getRouteKeyName();
function getTable();
function getTouchedRelations();
function getUpdatedAtColumn();
function getVisible();
function guard(array $guarded);
function hasAnyGetMutator($key);
function hasAppended($attribute);
function hasAttribute($key);
function hasAttributeGetMutator($key);
function hasAttributeMutator($key);
function hasAttributeSetMutator($key);
function hasCast($key, $types = null);
function hasGetMutator($key);
function hasMany($related, $foreignKey = null, $localKey = null);
function hasManyThrough($related, $through, $firstKey = null, $secondKey = null, $localKey = null, $secondLocalKey = null);
function hasNamedScope($scope);
function hasOne($related, $foreignKey = null, $localKey = null);
function hasOneThrough($related, $through, $firstKey = null, $secondKey = null, $localKey = null, $secondLocalKey = null);
function hasRelationAutoloadCallback();
function hasSetMutator($key);
function initializeGuardsAttributes();
function initializeHasRelationships();
function initializeHasTimestamps();
function initializeHidesAttributes();
function initializeModelAttributes();
function is($model);
function isClean($attributes = null);
function isDirty($attributes = null);
function isFillable($key);
function isGuarded($key);
function isNot($model);
function isRelation($key);
function joiningTable($related, $instance = null);
function joiningTableSegment();
function jsonSerialize(): mixed;
function load($relations);
function loadAggregate($relations, $column, $function = null);
function loadAvg($relations, $column);
function loadCount($relations);
function loadExists($relations);
function loadMax($relations, $column);
function loadMin($relations, $column);
function loadMissing($relations);
function loadMorph($relation, $relations);
function loadMorphAggregate($relation, $relations, $column, $function = null);
function loadMorphAvg($relation, $relations, $column);
function loadMorphCount($relation, $relations);
function loadMorphMax($relation, $relations, $column);
function loadMorphMin($relation, $relations, $column);
function loadMorphSum($relation, $relations, $column);
function loadSum($relations, $column);
function makeHidden($attributes);
function makeHiddenIf($condition, $attributes);
function makeVisible($attributes);
function makeVisibleIf($condition, $attributes);
function markAsRead();
function markAsUnread();
function mergeAppends(array $appends);
function mergeCasts($casts);
function mergeFillable(array $fillable);
function mergeGuarded(array $guarded);
function mergeHidden(array $hidden);
function mergeVisible(array $visible);
function morphMany($related, $name, $type = null, $id = null, $localKey = null);
function morphOne($related, $name, $type = null, $id = null, $localKey = null);
function morphTo($name = null, $type = null, $id = null, $ownerKey = null);
function morphToMany($related, $name, $table = null, $foreignPivotKey = null, $relatedPivotKey = null, $parentKey = null, $relatedKey = null, $relation = null, $inverse = false);
function morphedByMany($related, $name, $table = null, $foreignPivotKey = null, $relatedPivotKey = null, $parentKey = null, $relatedKey = null, $relation = null);
function newCollection(array $models = []);
function newEloquentBuilder($query);
function newFromBuilder($attributes = [], $connection = null);
function newInstance($attributes = [], $exists = false);
function newModelQuery();
function newPivot(self $parent, array $attributes, $table, $exists, $using = null);
function newQuery();
function newQueryForRestoration($ids);
function newQueryWithoutRelationships();
function newQueryWithoutScope($scope);
function newQueryWithoutScopes();
function newUniqueId();
function notifiable();
function offsetExists($offset): bool;
function offsetGet($offset): mixed;
function offsetSet($offset, $value): void;
function offsetUnset($offset): void;
function only($attributes);
function originalIsEquivalent($key);
function push();
function pushQuietly();
function qualifyColumn($column);
function qualifyColumns($columns);
function read();
function refresh();
function registerGlobalScopes($builder);
function relationLoaded($key);
function relationResolver($class, $key);
function relationsToArray();
function removeObservableEvents($observables);
function replicate(?array $except = null);
function replicateQuietly(?array $except = null);
function resolveChildRouteBinding($childType, $value, $field);
function resolveCollectionFromAttribute();
function resolveRouteBinding($value, $field = null);
function resolveRouteBindingQuery($query, $value, $field = null);
function resolveSoftDeletableChildRouteBinding($childType, $value, $field);
function resolveSoftDeletableRouteBinding($value, $field = null);
function save(array $options = []);
function saveOrFail(array $options = []);
function saveOrIgnore(array $options = [], array|string|null $uniqueBy = null);
function saveQuietly(array $options = []);
function scopeRead(Illuminate\Database\Eloquent\Builder $query);
function scopeUnread(Illuminate\Database\Eloquent\Builder $query);
function setAppends(array $appends);
function setAttribute($key, $value);
function setConnection($name);
function setCreatedAt($value);
function setDateFormat($format);
function setHidden(array $hidden);
function setIncrementing($value);
function setKeyName($key);
function setKeyType($type);
function setObservableEvents(array $observables);
function setPerPage($perPage);
function setRawAttributes(array $attributes, $sync = false);
function setRelation($relation, $value);
function setRelations(array $relations);
function setTable($table);
function setTouchedRelations(array $touches);
function setUniqueIds();
function setUpdatedAt($value);
function setVisible(array $visible);
function syncChanges();
function syncOriginal();
function syncOriginalAttribute($attribute);
function syncOriginalAttributes($attributes);
function through($relationship);
function toArray();
function toJson($options = 0);
function toPrettyJson(int $options = 0);
function toResource(?string $resourceClass = null): Illuminate\Http\Resources\Json\JsonResource;
function totallyGuarded();
function touch($attribute = null);
function touchOwners();
function touchQuietly($attribute = null);
function touches($relation);
function uniqueIds();
function unread();
function unsetRelation($relation);
function unsetRelations();
function update(array $attributes = [], array $options = []);
function updateOrFail(array $attributes = [], array $options = []);
function updateQuietly(array $attributes = [], array $options = []);
function updateTimestamps();
function usesTimestamps();
function usesUniqueIds();
function wasChanged($attributes = null);
function withRelationshipAutoloading();
function withoutAppends();
function withoutRelation($relations);
function withoutRelations();
static function __callStatic($method, $parameters);
static function addGlobalScope($scope, $implementation = null);
static function addGlobalScopes(array $scopes);
static function all($columns = []);
static function automaticallyEagerLoadRelationships($value = true);
static function bootHasEvents();
static function bootHasGlobalScopes();
static function cacheMutatedAttributes($classOrInstance);
static function clearBootedModels();
static function created($callback);
static function creating($callback);
static function currentEncrypter();
static function deleted($callback);
static function deleting($callback);
static function destroy($ids);
static function encryptUsing($encrypter);
static function flushEventListeners();
static function forceDestroy($ids);
static function getActualClassNameForMorph($class);
static function getAllGlobalScopes();
static function getConnectionResolver();
static function getEventDispatcher();
static function getGlobalScope($scope);
static function guessResourceName(): array;
static function handleDiscardedAttributeViolationUsing(?callable $callback);
static function handleLazyLoadingViolationUsing(?callable $callback);
static function handleMissingAttributeViolationUsing(?callable $callback);
static function hasGlobalScope($scope);
static function isAutomaticallyEagerLoadingRelationships();
static function isIgnoringTimestamps($class = null);
static function isIgnoringTouch($class = null);
static function isSoftDeletable(): bool;
static function isUnguarded();
static function observe($classes);
static function on($connection = null);
static function onWriteConnection();
static function preventAccessingMissingAttributes($value = true);
static function preventLazyLoading($value = true);
static function preventSilentlyDiscardingAttributes($value = true);
static function preventsAccessingMissingAttributes();
static function preventsLazyLoading();
static function preventsSilentlyDiscardingAttributes();
static function query();
static function reguard();
static function replicating($callback);
static function resolveConnection($connection = null);
static function resolveGlobalScopeAttributes();
static function resolveObserveAttributes();
static function resolveRelationUsing($name, Closure $callback);
static function retrieved($callback);
static function saved($callback);
static function saving($callback);
static function setAllGlobalScopes($scopes);
static function setConnectionResolver(Illuminate\Database\ConnectionResolverInterface $resolver);
static function setEventDispatcher(Illuminate\Contracts\Events\Dispatcher $dispatcher);
static function shouldBeStrict(bool $shouldBeStrict = true);
static function unguard($state = true);
static function unguarded(callable $callback);
static function unsetConnectionResolver();
static function unsetEventDispatcher();
static function updated($callback);
static function updating($callback);
static function with($relations);
static function withoutBroadcasting(callable $callback);
static function withoutEvents(callable $callback);
static function withoutTimestamps(callable $callback);
static function withoutTimestampsOn($models, $callback);
static function withoutTouching(callable $callback);
static function withoutTouchingOn(array $models, callable $callback);
```

## class DatabaseNotificationCollection
`Illuminate\Notifications\DatabaseNotificationCollection` extends Illuminate\Database\Eloquent\Collection implements Illuminate\Contracts\Queue\QueueableCollection, Illuminate\Contracts\Support\Arrayable, Countable, IteratorAggregate, Illuminate\Contracts\Support\Jsonable, JsonSerializable, Stringable, Traversable, Illuminate\Support\Enumerable, Illuminate\Contracts\Support\CanBeEscapedWhenCastToString, ArrayAccess

```php
function __call($method, $parameters);
function __construct($items = []);
function __get($key);
function __toString(): string;
function add($item);
function after($value, $strict = false);
function all();
function append($attributes);
function average($callback = null);
function avg($callback = null);
function before($value, $strict = false);
function chunk($size, $preserveKeys = true);
function chunkWhile(callable $callback);
function collapse();
function collapseWithKeys();
function collect();
function combine($values);
function concat($source);
function contains($key, $operator = null, $value = null);
function containsManyItems(?callable $callback = null): bool;
function containsOneItem(?callable $callback = null): bool;
function containsStrict($key, $value = null);
function count(): int;
function countBy($countBy = null);
function crossJoin(...$lists);
function dd(...$args);
function diff($items);
function diffAssoc($items);
function diffAssocUsing($items, callable $callback);
function diffKeys($items);
function diffKeysUsing($items, callable $callback);
function diffUsing($items, callable $callback);
function doesntContain($key, $operator = null, $value = null);
function doesntContainStrict($key, $operator = null, $value = null);
function dot($depth = INF);
function dump(...$args);
function duplicates($callback = null, $strict = false);
function duplicatesStrict($callback = null);
function each(callable $callback);
function eachSpread(callable $callback);
function ensure($type);
function escapeWhenCastingToString($escape = true);
function every($key, $operator = null, $value = null);
function except($keys);
function filter(?callable $callback = null);
function find($key, $default = null);
function findOrFail($key);
function first(?callable $callback = null, $default = null);
function firstOrFail($key = null, $operator = null, $value = null);
function firstWhere($key, $operator = null, $value = null);
function flatMap(callable $callback);
function flatten($depth = INF);
function flip();
function forPage($page, $perPage);
function forget($keys);
function fresh($with = []);
function get($key, $default = null);
function getCachingIterator($flags = 1);
function getDictionary($items = null);
function getIterator(): Traversable;
function getOrPut($key, $value);
function getQueueableClass();
function getQueueableConnection();
function getQueueableIds();
function getQueueableRelations();
function groupBy($groupBy, $preserveKeys = false);
function has($key);
function hasAny($key);
function hasMany($key = null, $operator = null, $value = null): bool;
function hasSole($key = null, $operator = null, $value = null): bool;
function implode($value, $glue = null);
function intersect($items);
function intersectAssoc($items);
function intersectAssocUsing($items, callable $callback);
function intersectByKeys($items);
function intersectUsing($items, callable $callback);
function isEmpty();
function isNotEmpty();
function join($glue, $finalGlue = '');
function jsonSerialize(): array;
function keyBy($keyBy);
function keys();
function last(?callable $callback = null, $default = null);
function lazy();
function load($relations);
function loadAggregate($relations, $column, $function = null);
function loadAvg($relations, $column);
function loadCount($relations);
function loadExists($relations);
function loadMax($relations, $column);
function loadMin($relations, $column);
function loadMissing($relations);
function loadMissingRelationshipChain(array $tuples);
function loadMorph($relation, $relations);
function loadMorphCount($relation, $relations);
function loadSum($relations, $column);
function makeHidden($attributes);
function makeVisible($attributes);
function map(callable $callback);
function mapInto($class);
function mapSpread(callable $callback);
function mapToDictionary(callable $callback);
function mapToGroups(callable $callback);
function mapWithKeys(callable $callback);
function markAsRead();
function markAsUnread();
function max($callback = null);
function median($key = null);
function merge($items);
function mergeHidden($attributes);
function mergeRecursive($items);
function mergeVisible($attributes);
function min($callback = null);
function mode($key = null);
function modelKeys();
function multiply(int $multiplier);
function nth($step, $offset = 0);
function offsetExists($offset): bool;
function offsetGet($offset): mixed;
function offsetSet($offset, $value): void;
function offsetUnset($offset): void;
function only($keys);
function pad($size, $value);
function partition($key, $operator = null, $value = null);
function percentage(callable $callback, int $precision = 2);
function pipe(callable $callback);
function pipeInto($class);
function pipeThrough($callbacks);
function pluck($value, $key = null);
function pop($count = 1);
function prepend($value, $key = null);
function pull($key, $default = null);
function push(...$values);
function put($key, $value);
function random($number = null, $preserveKeys = false);
function reduce(callable $callback, $initial = null);
function reduceSpread(callable $callback, ...$initial);
function reduceWithKeys(callable $callback, $initial = null);
function reject($callback = true);
function replace($items);
function replaceRecursive($items);
function reverse();
function search($value, $strict = false);
function select($keys);
function setAppends(array $appends);
function setHidden($hidden);
function setVisible($visible);
function shift($count = 1);
function shuffle();
function skip($count);
function skipUntil($value);
function skipWhile($value);
function slice($offset, $length = null);
function sliding($size = 2, $step = 1);
function sole($key = null, $operator = null, $value = null);
function some($key, $operator = null, $value = null);
function sort($callback = null);
function sortBy($callback, $options = 0, $descending = false);
function sortByDesc($callback, $options = 0);
function sortDesc($options = 0);
function sortKeys($options = 0, $descending = false);
function sortKeysDesc($options = 0);
function sortKeysUsing(callable $callback);
function splice($offset, $length = null, $replacement = []);
function split($numberOfGroups);
function splitIn($numberOfGroups);
function sum($callback = null);
function take($limit);
function takeUntil($value);
function takeWhile($value);
function tap(callable $callback);
function toArray();
function toBase();
function toJson($options = 0);
function toPrettyJson(int $options = 0);
function toQuery();
function toResourceCollection(?string $resourceClass = null): Illuminate\Http\Resources\Json\ResourceCollection;
function transform(callable $callback);
function undot();
function union($items);
function unique($key = null, $strict = false);
function uniqueStrict($key = null);
function unless($value = null, ?callable $callback = null, ?callable $default = null);
function unlessEmpty(callable $callback, ?callable $default = null);
function unlessNotEmpty(callable $callback, ?callable $default = null);
function unshift(...$values);
function value($key, $default = null);
function values();
function when($value = null, ?callable $callback = null, ?callable $default = null);
function whenEmpty(callable $callback, ?callable $default = null);
function whenNotEmpty(callable $callback, ?callable $default = null);
function where($key, $operator = null, $value = null);
function whereBetween($key, $values);
function whereIn($key, $values, $strict = false);
function whereInStrict($key, $values);
function whereInstanceOf($type);
function whereNotBetween($key, $values);
function whereNotIn($key, $values, $strict = false);
function whereNotInStrict($key, $values);
function whereNotNull($key = null);
function whereNull($key = null);
function whereStrict($key, $value);
function withRelationshipAutoloading();
function withoutAppends();
function zip($items);
static function __callStatic($method, $parameters);
static function empty(...$args);
static function flushMacros();
static function fromJson($json, $depth = 512, $flags = 0, ...$args);
static function hasMacro($name);
static function macro($name, $macro);
static function make($items = [], ...$args);
static function mixin($mixin, $replace = true);
static function proxy($method);
static function range($from, $to, $step = 1, ...$args);
static function times($number, ?callable $callback = null, ...$args);
static function unwrap($value);
static function wrap($value, ...$args);
```

## trait HasDatabaseNotifications
`Illuminate\Notifications\HasDatabaseNotifications`

```php
function notifications();
function readNotifications();
function unreadNotifications();
```

## trait Notifiable
`Illuminate\Notifications\Notifiable`

```php
function notifications();
function notify($instance);
function notifyNow($instance, ?array $channels = null);
function readNotifications();
function routeNotificationFor($driver, $notification = null);
function unreadNotifications();
```

## class Notification
`Illuminate\Notifications\Notification`

```php
function __serialize();
function __unserialize(array $values);
function broadcastOn();
function locale($locale);
function restoreModel($value);
```

## class NotificationSender
`Illuminate\Notifications\NotificationSender`

```php
function __construct($manager, $bus, $events, $locale = null);
function send($notifiables, $notification);
function sendNow($notifiables, $notification, ?array $channels = null);
function withLocale($locale, $callback);
```

## class NotificationServiceProvider
`Illuminate\Notifications\NotificationServiceProvider` extends Illuminate\Support\ServiceProvider

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

## trait RoutesNotifications
`Illuminate\Notifications\RoutesNotifications`

```php
function notify($instance);
function notifyNow($instance, ?array $channels = null);
function routeNotificationFor($driver, $notification = null);
```

## class SendQueuedNotifications
`Illuminate\Notifications\SendQueuedNotifications` implements Illuminate\Contracts\Queue\ShouldQueue

```php
function __clone();
function __construct($notifiables, $notification, ?array $channels = null);
function __serialize();
function __unserialize(array $values);
function afterCommit();
function allOnConnection($connection);
function allOnQueue($queue);
function appendToChain($job);
function assertDeleted();
function assertDoesntHaveChain();
function assertFailed();
function assertFailedWith($exception);
function assertHasChain($expectedChain);
function assertNotDeleted();
function assertNotFailed();
function assertNotReleased();
function assertReleased($delay = null);
function attempts();
function backoff();
function beforeCommit();
function chain($chain);
function delay($delay);
function delete();
function dispatchNextJobInChain();
function displayName();
function fail($exception = null);
function failed($e);
function handle(Illuminate\Notifications\ChannelManager $manager);
function invokeChainCatchCallbacks($e);
function onConnection($connection);
function onGroup($group);
function onQueue($queue);
function prependToChain($job);
function release($delay = 0);
function restoreModel($value);
function retryUntil();
function setJob(Illuminate\Contracts\Queue\Job $job);
function through($middleware);
function withDeduplicator($deduplicator);
function withFakeQueueInteractions();
function withoutDelay();
```

