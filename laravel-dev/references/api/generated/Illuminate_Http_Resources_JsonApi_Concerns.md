# Illuminate\Http\Resources\JsonApi\Concerns

Version: 13.14.0

## trait ResolvesJsonApiElements
`Illuminate\Http\Resources\JsonApi\Concerns\ResolvesJsonApiElements`

```php
function ignoreFieldsAndIncludesInQueryString();
function includePreviouslyLoadedRelationships();
function resolveIncludedResourceObjects(Illuminate\Http\Resources\JsonApi\JsonApiRequest $request): Illuminate\Support\Collection;
function resolveResourceIdentifier(Illuminate\Http\Resources\JsonApi\JsonApiRequest $request): string;
function resolveResourceType(Illuminate\Http\Resources\JsonApi\JsonApiRequest $request): string;
function respectFieldsAndIncludesInQueryString(bool $value = true);
static function maxRelationshipDepth(int $depth): void;
```

## trait ResolvesJsonApiRequest
`Illuminate\Http\Resources\JsonApi\Concerns\ResolvesJsonApiRequest`

