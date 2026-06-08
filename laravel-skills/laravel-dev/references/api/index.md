# Laravel 13 — Complete API Index

Every public namespace and class in Laravel 13. **URL pattern** for any class:
`https://api.laravel.com/docs/13.x/<FQCN with / instead of \>.html`
e.g. `Illuminate\Database\Eloquent\Model` → `https://api.laravel.com/docs/13.x/Illuminate/Database/Eloquent/Model.html`

How to use this index:
1. Find the class/namespace below.
2. For the exact signature, prefer the authoritative source in this repo:
   `vendor/laravel/framework/src/<FQCN with / instead of \>.php` (read with Grep/Read).
3. Or fetch the doc URL above.
4. For complete, version-exact signatures of every class, run the generator
   (`scripts/generate-api-reference.php`) — see SKILL.md.

`*Name*` = interface. Source of truth: api.laravel.com/docs/13.x/classes.html.

---

## Illuminate\Auth
Base: `…/Illuminate/Auth/`
AuthManager, AuthServiceProvider, *Authenticatable*, AuthenticationException, CreatesUserProviders, DatabaseUserProvider, EloquentUserProvider, GenericUser, GuardHelpers, MustVerifyEmail, Recaller, RequestGuard, SessionGuard, TokenGuard
- **Access/**: AuthorizationException, Gate, HandlesAuthorization, Response; **Access/Events/**: GateEvaluated
- **Console/**: ClearResetsCommand
- **Events/**: Attempting, Authenticated, CurrentDeviceLogout, Failed, Lockout, Login, Logout, OtherDeviceLogout, PasswordReset, PasswordResetLinkSent, Registered, Validated, Verified
- **Listeners/**: SendEmailVerificationNotification
- **Middleware/**: Authenticate, AuthenticateWithBasicAuth, Authorize, EnsureEmailIsVerified, RedirectIfAuthenticated, RequirePassword
- **Notifications/**: ResetPassword, VerifyEmail
- **Passwords/**: CacheTokenRepository, CanResetPassword, DatabaseTokenRepository, PasswordBroker, PasswordBrokerManager, PasswordResetServiceProvider, *TokenRepositoryInterface*

## Illuminate\Broadcasting
Base: `…/Illuminate/Broadcasting/`
AnonymousEvent, BroadcastController, BroadcastEvent, BroadcastException, BroadcastManager, BroadcastServiceProvider, Channel, EncryptedPrivateChannel, FakePendingBroadcast, InteractsWithBroadcasting, InteractsWithSockets, PendingBroadcast, PresenceChannel, PrivateChannel, UniqueBroadcastEvent
- **Broadcasters/**: AblyBroadcaster, Broadcaster, LogBroadcaster, NullBroadcaster, PusherBroadcaster, RedisBroadcaster, UsePusherChannelConventions

## Illuminate\Bus
Base: `…/Illuminate/Bus/`
Batch, BatchFactory, *BatchRepository*, Batchable, BusServiceProvider, ChainedBatch, DatabaseBatchRepository, Dispatcher, DynamoBatchRepository, PendingBatch, *PrunableBatchRepository*, Queueable, UniqueLock, UpdatedBatchJobCounts
- **Events/**: BatchCanceled, BatchDispatched, BatchFinished, BatchStarted

## Illuminate\Cache
Base: `…/Illuminate/Cache/`
ApcStore, ApcWrapper, ArrayLock, ArrayStore, CacheLock, CacheManager, CacheServiceProvider, DatabaseLock, DatabaseStore, DynamoDbLock, DynamoDbStore, FailoverStore, FileLock, FileStore, HasCacheLock, Lock, LuaScripts, MemcachedConnector, MemcachedLock, MemcachedStore, MemoizedStore, NoLock, NullStore, PhpRedisLock, RateLimiter, RedisLock, RedisStore, RedisTagSet, RedisTaggedCache, Repository, RetrievesMultipleKeys, SessionStore, TagSet, TaggableStore, TaggedCache
- **Console/**: CacheTableCommand, ClearCommand, ForgetCommand, PruneStaleTagsCommand
- **Events/**: CacheEvent, CacheFailedOver, CacheFlushFailed, CacheFlushed, CacheFlushing, CacheHit, CacheLocksFlushFailed, CacheLocksFlushed, CacheLocksFlushing, CacheMissed, ForgettingKey, KeyForgetFailed, KeyForgotten, KeyWriteFailed, KeyWritten, RetrievingKey, RetrievingManyKeys, WritingKey, WritingManyKeys
- **Limiters/**: ConcurrencyLimiter, ConcurrencyLimiterBuilder, LimiterTimeoutException
- **RateLimiting/**: GlobalLimit, Limit, Unlimited

## Illuminate\Concurrency
Base: `…/Illuminate/Concurrency/`
ConcurrencyManager, ConcurrencyServiceProvider, ForkDriver, ProcessDriver, SyncDriver; **Console/**: InvokeSerializedClosureCommand

## Illuminate\Config
Base: `…/Illuminate/Config/` — Repository

## Illuminate\Console
Base: `…/Illuminate/Console/`
Application, BufferedConsoleOutput, CacheCommandMutex, Command, *CommandMutex*, ConfirmableTrait, ContainerCommandLoader, GeneratorCommand, ManuallyFailedException, MigrationGeneratorCommand, OutputStyle, Parser, Prohibitable, PromptValidationException, QuestionHelper, Signals
- **Attributes/**: Aliases, Description, Help, Hidden, Signature, Usage
- **Concerns/**: CallsCommands, ConfiguresPrompts, CreatesMatchingTest, FindsAvailableModels, HasParameters, InteractsWithIO, InteractsWithSignals, PromptsForMissingInput
- **Contracts/**: *NewLineAware*
- **Events/**: ArtisanStarting, CommandFinished, CommandStarting, SchedulePaused, ScheduleResumed, ScheduledBackgroundTaskFinished, ScheduledTaskFailed, ScheduledTaskFinished, ScheduledTaskSkipped, ScheduledTaskStarting
- **Scheduling/**: *CacheAware*, CacheEventMutex, CacheSchedulingMutex, CallbackEvent, CommandBuilder, CronExpressionTimezoneConverter, Event, *EventMutex*, ManagesAttributes, ManagesFrequencies, PendingEventAttributes, Schedule, ScheduleClearCacheCommand, ScheduleFinishCommand, ScheduleInterruptCommand, ScheduleListCommand, SchedulePauseCommand, ScheduleResumeCommand, ScheduleRunCommand, ScheduleTestCommand, ScheduleWorkCommand, *SchedulingMutex*
- **View/Components/**: Alert, Ask, AskWithCompletion, BulletList, Choice, Component, Confirm, Error, Factory, Info, Line, Secret, Success, Task, TwoColumnDetail, Warn; **Mutators/**: EnsureDynamicContentIsHighlighted, EnsureNoPunctuation, EnsurePunctuation, EnsureRelativePaths

## Illuminate\Container
Base: `…/Illuminate/Container/`
BoundMethod, Container, ContextualBindingBuilder, EntryNotFoundException, RewindableGenerator, Util
- **Attributes/**: Auth, Authenticated, Bind, Cache, Config, Context, CurrentUser, DB, Database, Give, Log, RouteParameter, Scoped, Singleton, Storage, Tag

## Illuminate\Contracts  (all interfaces)
Base: `…/Illuminate/Contracts/`
- **Auth/**: *Authenticatable, CanResetPassword, Factory, Guard, MustVerifyEmail, PasswordBroker, PasswordBrokerFactory, StatefulGuard, SupportsBasicAuth, UserProvider*; **Auth/Access/**: *Authorizable, Gate*; **Auth/Middleware/**: *AuthenticatesRequests*
- **Broadcasting/**: *Broadcaster, Factory, HasBroadcastChannel, ShouldBeUnique, ShouldBroadcast, ShouldBroadcastNow, ShouldRescue*
- **Bus/**: *Dispatcher, QueueingDispatcher*
- **Cache/**: *CanFlushLocks, Factory, Lock, LockProvider, Repository, Store*, LockTimeoutException
- **Concurrency/**: *Driver*  •  **Config/**: *Repository*
- **Console/**: *Application, Isolatable, Kernel, PromptsForMissingInput*
- **Container/**: *Container, ContextualAttribute, ContextualBindingBuilder, SelfBuilding*, BindingResolutionException, CircularDependencyException
- **Cookie/**: *Factory, QueueingFactory*
- **Database/**: *ConcurrencyErrorDetector, LostConnectionDetector*, ModelIdentifier; **Eloquent/**: *Builder, Castable, CastsAttributes, CastsInboundAttributes, ComparesCastableAttributes, DeviatesCastableAttributes, SerializesCastableAttributes, SupportsPartialRelations*; **Events/**: *MigrationEvent*; **Query/**: *Builder, ConditionExpression, Expression*
- **Debug/**: *ExceptionHandler, ShouldntReport*
- **Encryption/**: *Encrypter, StringEncrypter*, DecryptException, EncryptException
- **Events/**: *Dispatcher, ShouldDispatchAfterCommit, ShouldHandleEventsAfterCommit*
- **Filesystem/**: *Cloud, Factory, Filesystem*, FileNotFoundException, LockTimeoutException
- **Foundation/**: *Application, CachesConfiguration, CachesRoutes, ExceptionRenderer, MaintenanceMode*
- **Hashing/**: *Hasher*  •  **Http/**: *Kernel*  •  **JsonSchema/**: *JsonSchema*  •  **Log/**: *ContextLogProcessor*
- **Mail/**: *Attachable, Factory, MailQueue, Mailable, Mailer*
- **Notifications/**: *Dispatcher, Factory*
- **Pagination/**: *CursorPaginator, LengthAwarePaginator, Paginator*
- **Pipeline/**: *Hub, Pipeline*  •  **Process/**: *InvokedProcess, ProcessResult*
- **Queue/**: *ClearableQueue, EntityResolver, Factory, Job, Monitor, Queue, QueueableCollection, QueueableEntity, ShouldBeEncrypted, ShouldBeUnique, ShouldBeUniqueUntilProcessing, ShouldQueue, ShouldQueueAfterCommit*, EntityNotFoundException
- **Redis/**: *Connection, Connector, Factory*, LimiterTimeoutException
- **Routing/**: *BindingRegistrar, Registrar, ResponseFactory, UrlGenerator, UrlRoutable*
- **Session/**: *Session*; **Middleware/**: *AuthenticatesSessions*
- **Support/**: *Arrayable, CanBeEscapedWhenCastToString, DeferrableProvider, DeferringDisplayableValue, HasOnceHash, Htmlable, Jsonable, MessageBag, MessageProvider, Renderable, Responsable, ValidatedData*
- **Translation/**: *HasLocalePreference, Loader, Translator*
- **Validation/**: *CompilableRules, DataAwareRule, Factory, ImplicitRule(dep), InvokableRule(dep), Rule(dep), UncompromisedVerifier, ValidatesWhenResolved, ValidationRule, Validator, ValidatorAwareRule*
- **View/**: *Engine, Factory, View*, ViewCompilationException

## Illuminate\Cookie
Base: `…/Illuminate/Cookie/` — CookieJar, CookieServiceProvider, CookieValuePrefix; **Middleware/**: AddQueuedCookiesToResponse, EncryptCookies

## Illuminate\Database
Base: `…/Illuminate/Database/`
*ConnectionInterface*, *ConnectionResolverInterface*, ClassMorphViolationException, ConcurrencyErrorDetector, ConfigurationUrlParser, Connection, ConnectionResolver, DatabaseManager, DatabaseServiceProvider, DatabaseTransactionRecord, DatabaseTransactionsManager, DeadlockException, DetectsConcurrencyErrors, DetectsLostConnections, Grammar, LazyLoadingViolationException, LostConnectionDetector, LostConnectionException, MariaDbConnection, MigrationServiceProvider, MultipleColumnsSelectedException, MultipleRecordsFoundException, MySqlConnection, PostgresConnection, QueryException, RecordNotFoundException, RecordsNotFoundException, SQLiteConnection, SQLiteDatabaseDoesNotExistException, Seeder, SqlServerConnection, UniqueConstraintViolationException
- **Capsule/**: Manager
- **Concerns/**: BuildsQueries, BuildsWhereDateClauses, CompilesJsonPaths, ExplainsQueries, ManagesTransactions, ParsesSearchPath
- **Connectors/**: ConnectionFactory, Connector, *ConnectorInterface*, MariaDbConnector, MySqlConnector, PostgresConnector, SQLiteConnector, SqlServerConnector
- **Console/**: DatabaseInspectionCommand, DbCommand, DumpCommand, MonitorCommand, PruneCommand, ShowCommand, ShowModelCommand, TableCommand, WipeCommand; **Factories/**: FactoryMakeCommand; **Migrations/**: BaseCommand, FreshCommand, InstallCommand, MigrateCommand, MigrateMakeCommand, RefreshCommand, ResetCommand, RollbackCommand, StatusCommand, TableGuesser; **Seeds/**: SeedCommand, SeederMakeCommand, WithoutModelEvents
- **Eloquent/** (see dedicated section below)
- **Events/**: ConnectionEstablished, ConnectionEvent, DatabaseBusy, DatabaseRefreshed, MigrationEnded, MigrationEvent, MigrationSkipped, MigrationStarted, MigrationsEnded, MigrationsEvent, MigrationsPruned, MigrationsStarted, ModelPruningFinished, ModelPruningStarting, ModelsPruned, NoPendingMigrations, QueryExecuted, SchemaDumped, SchemaLoaded, StatementPrepared, TransactionBeginning, TransactionCommitted, TransactionCommitting, TransactionRolledBack
- **Migrations/**: DatabaseMigrationRepository, Migration, MigrationCreator, *MigrationRepositoryInterface*, Migrator
- **Query/**: Builder, Expression, IndexHint, JoinClause, JoinLateralClause; **Grammars/**: Grammar, MariaDbGrammar, MySqlGrammar, PostgresGrammar, SQLiteGrammar, SqlServerGrammar; **Processors/**: Processor, MariaDbProcessor, MySqlProcessor, PostgresProcessor, SQLiteProcessor, SqlServerProcessor
- **Schema/**: Blueprint, BlueprintState, Builder, ColumnDefinition, ForeignIdColumnDefinition, ForeignKeyDefinition, IndexDefinition, MariaDbBuilder, MariaDbSchemaState, MySqlBuilder, MySqlSchemaState, PostgresBuilder, PostgresSchemaState, SQLiteBuilder, SchemaState, SqlServerBuilder, SqliteSchemaState; **Grammars/**: Grammar, MariaDbGrammar, MySqlGrammar, PostgresGrammar, SQLiteGrammar, SqlServerGrammar

## Illuminate\Database\Eloquent
Base: `…/Illuminate/Database/Eloquent/`
Builder, BroadcastableModelEventOccurred, BroadcastsEvents, BroadcastsEventsAfterCommit, Collection, HasBuilder, HasCollection, HigherOrderBuilderProxy, InvalidCastException, JsonEncodingException, MassAssignmentException, MassPrunable, MissingAttributeException, Model, ModelInfo, ModelInspector, ModelNotFoundException, PendingHasThroughRelationship, Prunable, QueueEntityResolver, RelationNotFoundException, *Scope*, SoftDeletes, SoftDeletingScope
- **Attributes/**: Appends, Boot, CollectedBy, Connection, DateFormat, Fillable, Guarded, Hidden, Initialize, ObservedBy, Scope, ScopedBy, Table, Touches, Unguarded, UseEloquentBuilder, UseFactory, UsePolicy, UseResource, UseResourceCollection, Visible, WithoutIncrementing, WithoutTimestamps
- **Casts/**: ArrayObject, AsArrayObject, AsBinary, AsCollection, AsEncryptedArrayObject, AsEncryptedCollection, AsEnumArrayObject, AsEnumCollection, AsFluent, AsHtmlString, AsStringable, AsUri, Attribute, Json
- **Concerns/**: GuardsAttributes, HasAttributes, HasEvents, HasGlobalScopes, HasRelationships, HasTimestamps, HasUlids, HasUniqueIds, HasUniqueStringIds, HasUuids, HasVersion4Uuids, HidesAttributes, PreventsCircularRecursion, QueriesRelationships, TransformsToResource
- **Factories/**: Factory, HasFactory, Sequence, CrossJoinSequence, Relationship, BelongsToRelationship, BelongsToManyRelationship; **Attributes/**: UseModel
- **Relations/**: BelongsTo, BelongsToMany, HasMany, HasManyThrough, HasOne, HasOneOrMany, HasOneOrManyThrough, HasOneThrough, MorphMany, MorphOne, MorphOneOrMany, MorphPivot, MorphTo, MorphToMany, Pivot, Relation; **Concerns/**: AsPivot, CanBeOneOfMany, ComparesRelatedModels, InteractsWithDictionary, InteractsWithPivotTable, SupportsDefaultModels, SupportsInverseRelations

## Illuminate\Encryption
Base: `…/Illuminate/Encryption/` — Encrypter, EncryptionServiceProvider, MissingAppKeyException

## Illuminate\Events
Base: `…/Illuminate/Events/` — CallQueuedListener, Dispatcher, EventServiceProvider, InvokeQueuedClosure, NullDispatcher, QueuedClosure

## Illuminate\Filesystem
Base: `…/Illuminate/Filesystem/` — AwsS3V3Adapter, Filesystem, FilesystemAdapter, FilesystemManager, FilesystemServiceProvider, LocalFilesystemAdapter, LockableFile, ReceiveFile, ServeFile

## Illuminate\Foundation
Base: `…/Illuminate/Foundation/`
AliasLoader, Application, CacheBasedMaintenanceMode, Cloud, ComposerScripts, EnvironmentDetector, FileBasedMaintenanceMode, Inspiring, MaintenanceModeManager, Mix, MixFileNotFoundException, MixManifestNotFoundException, PackageManifest, Precognition, ProviderRepository, Vite, ViteException, ViteManifestNotFoundException(dep)
- **Auth/**: User, EmailVerificationRequest; **Auth/Access/**: Authorizable, AuthorizesRequests
- **Bootstrap/**: BootProviders, HandleExceptions, LoadConfiguration, LoadEnvironmentVariables, RegisterFacades, RegisterProviders, SetRequestForConsole
- **Bus/**: Dispatchable, DispatchesJobs, PendingChain, PendingClosureDispatch, PendingDispatch
- **Concerns/**: ResolvesDumpSource
- **Configuration/**: ApplicationBuilder, Exceptions, Middleware
- **Console/**: AboutCommand, ApiInstallCommand, BroadcastingInstallCommand, CastMakeCommand, ChannelListCommand, ChannelMakeCommand, ClassMakeCommand, ClearCompiledCommand, CliDumper, ClosureCommand, ComponentMakeCommand, ConfigCacheCommand, ConfigClearCommand, ConfigMakeCommand, ConfigPublishCommand, ConfigShowCommand, ConsoleMakeCommand, DocsCommand, DownCommand, EnumMakeCommand, EnvironmentCommand, EnvironmentDecryptCommand, EnvironmentEncryptCommand, EventCacheCommand, EventClearCommand, EventGenerateCommand, EventListCommand, EventMakeCommand, ExceptionMakeCommand, InteractsWithComposerPackages, InterfaceMakeCommand, JobMakeCommand, JobMiddlewareMakeCommand, Kernel, KeyGenerateCommand, LangPublishCommand, ListenerMakeCommand, MailMakeCommand, ModelMakeCommand, NotificationMakeCommand, ObserverMakeCommand, OptimizeClearCommand, OptimizeCommand, PackageDiscoverCommand, PolicyMakeCommand, ProviderMakeCommand, QueuedCommand, ReloadCommand, RequestMakeCommand, ResourceMakeCommand, RouteCacheCommand, RouteClearCommand, RouteListCommand, RuleMakeCommand, ScopeMakeCommand, ServeCommand, StorageLinkCommand, StorageUnlinkCommand, StubPublishCommand, TestMakeCommand, TraitMakeCommand, UpCommand, VendorPublishCommand, ViewCacheCommand, ViewClearCommand, ViewMakeCommand
- **Events/**: DiagnosingHealth, DiscoverEvents, Dispatchable, LocaleUpdated, MaintenanceModeDisabled, MaintenanceModeEnabled, PublishingStubs, Terminating, VendorTagPublished
- **Exceptions/**: Handler, RegisterErrorViewPaths, ReportableHandler; **Renderer/**: Exception, Frame, Listener, Renderer; **Renderer/Mappers/**: BladeMapper; **Whoops/**: WhoopsExceptionRenderer, WhoopsHandler
- **Http/**: FormRequest, HtmlDumper, Kernel, MaintenanceModeBypassCookie; **Attributes/**: ErrorBag, RedirectTo, RedirectToRoute, StopOnFirstFailure; **Events/**: RequestHandled; **Middleware/**: CheckForMaintenanceMode, ConvertEmptyStringsToNull, HandlePrecognitiveRequests, InvokeDeferredCallbacks, PreventRequestForgery, PreventRequestsDuringMaintenance, TransformsRequest, TrimStrings, ValidateCsrfToken(dep), ValidatePostSize, VerifyCsrfToken(dep); **Middleware/Concerns/**: ExcludesPaths
- **Providers/**: ArtisanServiceProvider, ComposerServiceProvider, ConsoleSupportServiceProvider, FormRequestServiceProvider, FoundationServiceProvider
- **Queue/**: InteractsWithUniqueJobs, Queueable
- **Routing/**: PrecognitionCallableDispatcher, PrecognitionControllerDispatcher
- **Support/Providers/**: AuthServiceProvider, EventServiceProvider, RouteServiceProvider
- **Testing/**: CachedState, DatabaseMigrations, DatabaseTransactions, DatabaseTransactionsManager, DatabaseTruncation, LazilyRefreshDatabase, RefreshDatabase, RefreshDatabaseState, TestCase, WithCachedConfig, WithCachedRoutes, WithConsoleEvents, WithFaker, WithoutMiddleware, Wormhole; **Attributes/**: Seed, Seeder, SetUp, TearDown, UnitTest; **Concerns/**: InteractsWithAuthentication, InteractsWithConsole, InteractsWithContainer, InteractsWithDatabase, InteractsWithDeprecationHandling, InteractsWithExceptionHandling, InteractsWithRedis, InteractsWithSession, InteractsWithTestCaseLifecycle, InteractsWithTime, InteractsWithViews, MakesHttpRequests; **Traits/**: CanConfigureMigrationCommands
- **Validation/**: ValidatesRequests

## Illuminate\Hashing
Base: `…/Illuminate/Hashing/` — AbstractHasher, Argon2IdHasher, ArgonHasher, BcryptHasher, HashManager, HashServiceProvider

## Illuminate\Http
Base: `…/Illuminate/Http/`
File, FileHelpers, JsonResponse, RedirectResponse, Request, Response, ResponseTrait, StreamedEvent, UploadedFile
- **Client/**: Batch, BatchInProgressException, ConnectionException, Factory, HttpClientException, PendingRequest, Pool, Request, RequestException, Response, ResponseSequence, StrayRequestException; **Concerns/**: DeterminesStatusCode; **Events/**: ConnectionFailed, RequestSending, ResponseReceived; **Promises/**: FluentPromise, LazyPromise
- **Concerns/**: CanBePrecognitive, InteractsWithContentTypes, InteractsWithFlashData, InteractsWithInput
- **Exceptions/**: HttpResponseException, MalformedUrlException, OriginMismatchException, PostTooLargeException, ThrottleRequestsException
- **Middleware/**: AddLinkHeadersForPreloadedAssets, CheckResponseForModifications, FrameGuard, HandleCors, SetCacheHeaders, TrustHosts, TrustProxies, ValidatePathEncoding, ValidatePostSize
- **Resources/**: CollectsResources, ConditionallyLoadsAttributes, DelegatesToResource, MergeValue, MissingValue, *PotentiallyMissing*; **Attributes/**: Collects, PreserveKeys; **Json/**: AnonymousResourceCollection, JsonResource, PaginatedResourceResponse, ResourceCollection, ResourceResponse; **JsonApi/**: AnonymousResourceCollection, JsonApiRequest, JsonApiResource, RelationResolver; **JsonApi/Concerns/**: ResolvesJsonApiElements, ResolvesJsonApiRequest; **JsonApi/Exceptions/**: ResourceIdentificationException
- **Testing/**: File, FileFactory, MimeType

## Illuminate\JsonSchema
Base: `…/Illuminate/JsonSchema/` — JsonSchema, JsonSchemaTypeFactory, Serializer; **Types/**: ArrayType, BooleanType, IntegerType, NumberType, ObjectType, StringType, Type

## Illuminate\Log
Base: `…/Illuminate/Log/` — LogManager, LogServiceProvider, Logger, ParsesLogConfiguration; **Context/**: ContextLogProcessor, ContextServiceProvider, Repository; **Context/Events/**: ContextDehydrating, ContextHydrated; **Events/**: MessageLogged

## Illuminate\Mail
Base: `…/Illuminate/Mail/`
Attachment, MailManager, MailServiceProvider, Mailable, Mailer, Markdown, Message, PendingMail, SendQueuedMailable, SentMessage, TextMessage
- **Mailables/**: Address, Attachment, Content, Envelope, Headers
- **Events/**: MessageSending, MessageSent
- **Transport/**: ArrayTransport, LogTransport, ResendTransport, SesTransport, SesV2Transport

## Illuminate\Notifications
Base: `…/Illuminate/Notifications/`
Action, AnonymousNotifiable, ChannelManager, DatabaseNotification, DatabaseNotificationCollection, HasDatabaseNotifications, Notifiable, Notification, NotificationSender, NotificationServiceProvider, RoutesNotifications, SendQueuedNotifications
- **Channels/**: BroadcastChannel, DatabaseChannel, MailChannel
- **Console/**: NotificationTableCommand
- **Events/**: BroadcastNotificationCreated, NotificationFailed, NotificationSending, NotificationSent
- **Messages/**: BroadcastMessage, DatabaseMessage, MailMessage, SimpleMessage

## Illuminate\Pagination
Base: `…/Illuminate/Pagination/` — AbstractCursorPaginator, AbstractPaginator, Cursor, CursorPaginator, LengthAwarePaginator, PaginationServiceProvider, PaginationState, Paginator, UrlWindow

## Illuminate\Pipeline
Base: `…/Illuminate/Pipeline/` — Hub, Pipeline, PipelineServiceProvider

## Illuminate\Process
Base: `…/Illuminate/Process/`
Factory, FakeInvokedProcess, FakeProcessDescription, FakeProcessResult, FakeProcessSequence, InvokedProcess, InvokedProcessPool, PendingProcess, Pipe, Pool, ProcessPoolResults, ProcessResult; **Exceptions/**: ProcessFailedException, ProcessTimedOutException

## Illuminate\Queue
Base: `…/Illuminate/Queue/`
BackgroundQueue, BeanstalkdQueue, CallQueuedClosure, CallQueuedHandler, DatabaseQueue, DeferredQueue, FailoverQueue, InteractsWithQueue, InvalidPayloadException, Listener, ListenerOptions, LuaScripts, ManuallyFailedException, MaxAttemptsExceededException, NullQueue, Queue, QueueManager, QueueRoutes, QueueServiceProvider, RedisQueue, SerializesAndRestoresModelIdentifiers, SerializesModels, SqsQueue, SyncQueue, TimeoutExceededException, Worker, WorkerOptions
- **Attributes/**: Backoff, Connection, Delay, DeleteWhenMissingModels, FailOnTimeout, MaxExceptions, Queue, ReadsQueueAttributes, Timeout, Tries, UniqueFor, WithoutRelations
- **Capsule/**: Manager
- **Connectors/**: *ConnectorInterface*, BackgroundConnector, BeanstalkdConnector, DatabaseConnector, DeferredConnector, FailoverConnector, NullConnector, RedisConnector, SqsConnector, SyncConnector
- **Console/**: BatchesTableCommand, ClearCommand, FailedTableCommand, FlushFailedCommand, ForgetFailedCommand, ListFailedCommand, ListenCommand, MonitorCommand, PauseCommand, PruneBatchesCommand, PruneFailedJobsCommand, RestartCommand, ResumeCommand, RetryBatchCommand, RetryCommand, TableCommand, WorkCommand; **Concerns/**: ParsesQueue
- **Events/**: JobAttempted, JobExceptionOccurred, JobFailed, JobPopped, JobPopping, JobProcessed, JobProcessing, JobQueued, JobQueueing, JobReleasedAfterException, JobRetryRequested, JobTimedOut, Looping, QueueBusy, QueueFailedOver, QueuePaused, QueueResumed, WorkerStarting, WorkerStopping
- **Failed/**: *CountableFailedJobProvider, FailedJobProviderInterface, PrunableFailedJobProvider*, DatabaseFailedJobProvider, DatabaseUuidFailedJobProvider, DynamoDbFailedJobProvider, FileFailedJobProvider, NullFailedJobProvider
- **Jobs/**: BeanstalkdJob, DatabaseJob, DatabaseJobRecord, FakeJob, Job, JobName, RedisJob, SqsJob, SyncJob
- **Middleware/**: FailOnException, RateLimited, RateLimitedWithRedis, Skip, SkipIfBatchCancelled, ThrottlesExceptions, ThrottlesExceptionsWithRedis, WithoutOverlapping

## Illuminate\Redis
Base: `…/Illuminate/Redis/` — RedisManager, RedisServiceProvider
- **Connections/**: Connection, PacksPhpRedisValues, PhpRedisClusterConnection, PhpRedisConnection, PredisClusterConnection, PredisConnection
- **Connectors/**: PhpRedisConnector, PredisConnector
- **Events/**: CommandExecuted, CommandFailed
- **Limiters/**: ConcurrencyLimiter, ConcurrencyLimiterBuilder, DurationLimiter, DurationLimiterBuilder

## Illuminate\Routing
Base: `…/Illuminate/Routing/`
AbstractRouteCollection, CallableDispatcher, CompiledRouteCollection, Controller, ControllerDispatcher, ControllerMiddlewareOptions, CreatesRegularExpressionRouteConstraints, FiltersControllerMiddleware, ImplicitRouteBinding, MiddlewareNameResolver, PendingResourceRegistration, PendingSingletonResourceRegistration, Pipeline, RedirectController, Redirector, ResolvesRouteDependencies, ResourceRegistrar, ResponseFactory, Route, RouteAction, RouteBinding, RouteCollection, *RouteCollectionInterface*, RouteDependencyResolverTrait(dep), RouteFileRegistrar, RouteGroup, RouteParameterBinder, RouteRegistrar, RouteSignatureParameters, RouteUri, RouteUrlGenerator, Router, RoutingServiceProvider, SortedMiddleware, UrlGenerator, ViewController
- **Attributes/Controllers/**: Authorize, Middleware
- **Console/**: ControllerMakeCommand, MiddlewareMakeCommand
- **Contracts/**: *CallableDispatcher, ControllerDispatcher*
- **Controllers/**: *HasMiddleware*, Middleware
- **Events/**: PreparingResponse, ResponsePrepared, RouteMatched, Routing
- **Exceptions/**: BackedEnumCaseNotFoundException, InvalidSignatureException, MissingRateLimiterException, StreamedResponseException, UrlGenerationException
- **Matching/**: HostValidator, MethodValidator, SchemeValidator, UriValidator, *ValidatorInterface*
- **Middleware/**: SubstituteBindings, ThrottleRequests, ThrottleRequestsWithRedis, ValidateSignature

## Illuminate\Session
Base: `…/Illuminate/Session/`
ArraySessionHandler, CacheBasedSessionHandler, CookieSessionHandler, DatabaseSessionHandler, EncryptedStore, *ExistenceAwareInterface*, FileSessionHandler, NullSessionHandler, SessionManager, SessionServiceProvider, Store, SymfonySessionDecorator, TokenMismatchException
- **Console/**: SessionTableCommand
- **Middleware/**: AuthenticateSession, StartSession

## Illuminate\Support
Base: `…/Illuminate/Support/`
AggregateServiceProvider, Arr, Benchmark, BinaryCodec, Carbon, Collection, Composer, ConfigurationUrlParser, DateFactory, DefaultProviders, EncodedHtmlString, *Enumerable*, Env, Fluent, HigherOrderCollectionProxy, HigherOrderTapProxy, HigherOrderWhenProxy, HtmlString, InteractsWithTime, ItemNotFoundException, Js, LazyCollection, Lottery, Manager, MessageBag, MultipleInstanceManager, MultipleItemsFoundException, NamespacedItemResolver, Number, Once, Onceable, Optional, Pluralizer, ProcessUtils, Reflector, ServiceProvider, Sleep, Str, Stringable
- **Defer/**: DeferredCallback, DeferredCallbackCollection
- **Exceptions/**: MathException
- **Facades/**: App, Artisan, Auth, Blade, Broadcast, Bus, Cache, Concurrency, Config, Context, Cookie, Crypt, DB, Date, Event, Exceptions, Facade, File, Gate, Hash, Http, Lang, Log, Mail, MaintenanceMode, Notification, ParallelTesting, Password, Pipeline, Process, Queue, RateLimiter, Redirect, Redis, Request, Response, Route, Schedule, Schema, Session, Storage, URL, Validator, View, Vite
- **Queue/Concerns/**: ResolvesQueueRoutes
- **Testing/Fakes/**: *Fake*, BatchFake, BatchRepositoryFake, BusFake, ChainedBatchTruthTest, EventFake, ExceptionHandlerFake, MailFake, NotificationFake, PendingBatchFake, PendingMailFake, QueueFake  *(full list via generator)*

## Illuminate\Translation
Base: `…/Illuminate/Translation/` — ArrayLoader, CreatesPotentiallyTranslatedStrings, FileLoader, MessageSelector, PotentiallyTranslatedString, Translator, TranslationServiceProvider  *(verify exact set via generator/source)*

## Illuminate\Validation
Base: `…/Illuminate/Validation/`
ClosureValidationRule, ConditionalRules, DatabasePresenceVerifier, *DatabasePresenceVerifierInterface*, Factory, NestedRules, NotPwnedVerifier, PresenceVerifierInterface, Rule, ValidatesWhenResolvedTrait, ValidationData, ValidationException, ValidationRuleParser, ValidationServiceProvider, Validator
- **Concerns/**: FormatsMessages, ReplacesAttributes, ValidatesAttributes
- **Rules/**: ArrayRule, Can, Dimensions, Email, Enum, ExcludeIf, Exists, File, ImageFile, In, NotIn, Password, ProhibitedIf, Unique  *(verify exact set via generator/source)*

## Illuminate\View
Base: `…/Illuminate/View/`
AnonymousComponent, AppendableAttributeValue, Component, ComponentAttributeBag, ComponentSlot, DynamicComponent, Factory, FileViewFinder, *ViewFinderInterface*, View, ViewException, ViewName, ViewServiceProvider
- **Compilers/**: BladeCompiler, Compiler, *CompilerInterface*, ComponentTagCompiler; **Concerns/**: Compiles*  (many Blade directive compilers)
- **Engines/**: CompilerEngine, EngineResolver, FileEngine, PhpEngine
- **Middleware/**: ShareErrorsFromSession  *(verify exact set via generator/source)*

---

### Note on completeness
This index is the **navigation layer** (every namespace + class, with the URL
pattern to resolve any of them). For **exact, version-pinned signatures of every
method on every class**, run the generator in SKILL.md; it reflects over your
installed `vendor/laravel/framework` and writes one file per namespace to
`references/api/generated/`. A few leaf lists are marked *(verify via generator/source)*
because the upstream class dump was paginated — the generator and the source tree
(`vendor/laravel/framework/src/Illuminate/...`) are always authoritative.
