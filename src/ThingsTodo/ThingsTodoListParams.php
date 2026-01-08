<?php

declare(strict_types=1);

namespace Nps\ThingsTodo;

use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Concerns\SdkParams;
use Nps\Core\Contracts\BaseModel;

/**
 * @see Nps\Services\ThingsTodoService::list()
 *
 * @phpstan-type ThingsTodoListParamsShape = array{
 *   id?: string|null,
 *   limit?: int|null,
 *   parkCode?: string|null,
 *   q?: string|null,
 *   sort?: list<string>|null,
 *   start?: string|null,
 *   stateCode?: string|null,
 * }
 */
final class ThingsTodoListParams implements BaseModel
{
    /** @use SdkModel<ThingsTodoListParamsShape> */
    use SdkModel;
    use SdkParams;

    /**
     * A comma delimited list of things to do IDs.
     */
    #[Optional]
    public ?string $id;

    /**
     * Number of results to return per request. Default is 50.
     */
    #[Optional]
    public ?int $limit;

    /**
     * A comma delimited list of 4 character park codes.
     */
    #[Optional]
    public ?string $parkCode;

    /**
     * A string to search for.
     */
    #[Optional]
    public ?string $q;

    /**
     * A comma delimited list of resource properties to sort the results by. Ascending order is assumed for each property. If descending order is desired, the unary negative should prefix the property name. Invalid property values will be ignored. If no sort parameter is passed in a request, the default sort is by descending order of date last modified. (Note that the date last modified is an unexposed property.) If sorting by relevanceScore, you will likely use -relevanceScore as a higher score indicates a more accurate result. The only sort option, besides the default, is relevanceScore.
     *
     * @var list<string>|null $sort
     */
    #[Optional(list: 'string')]
    public ?array $sort;

    /**
     * Get the next [limit] results starting with this number. Default is 0.
     */
    #[Optional]
    public ?string $start;

    /**
     * A comma delimited list of 2 character state codes.
     */
    #[Optional]
    public ?string $stateCode;

    public function __construct()
    {
        $this->initialize();
    }

    /**
     * Construct an instance from the required parameters.
     *
     * You must use named parameters to construct any parameters with a default value.
     *
     * @param list<string>|null $sort
     */
    public static function with(
        ?string $id = null,
        ?int $limit = null,
        ?string $parkCode = null,
        ?string $q = null,
        ?array $sort = null,
        ?string $start = null,
        ?string $stateCode = null,
    ): self {
        $self = new self;

        null !== $id && $self['id'] = $id;
        null !== $limit && $self['limit'] = $limit;
        null !== $parkCode && $self['parkCode'] = $parkCode;
        null !== $q && $self['q'] = $q;
        null !== $sort && $self['sort'] = $sort;
        null !== $start && $self['start'] = $start;
        null !== $stateCode && $self['stateCode'] = $stateCode;

        return $self;
    }

    /**
     * A comma delimited list of things to do IDs.
     */
    public function withID(string $id): self
    {
        $self = clone $this;
        $self['id'] = $id;

        return $self;
    }

    /**
     * Number of results to return per request. Default is 50.
     */
    public function withLimit(int $limit): self
    {
        $self = clone $this;
        $self['limit'] = $limit;

        return $self;
    }

    /**
     * A comma delimited list of 4 character park codes.
     */
    public function withParkCode(string $parkCode): self
    {
        $self = clone $this;
        $self['parkCode'] = $parkCode;

        return $self;
    }

    /**
     * A string to search for.
     */
    public function withQ(string $q): self
    {
        $self = clone $this;
        $self['q'] = $q;

        return $self;
    }

    /**
     * A comma delimited list of resource properties to sort the results by. Ascending order is assumed for each property. If descending order is desired, the unary negative should prefix the property name. Invalid property values will be ignored. If no sort parameter is passed in a request, the default sort is by descending order of date last modified. (Note that the date last modified is an unexposed property.) If sorting by relevanceScore, you will likely use -relevanceScore as a higher score indicates a more accurate result. The only sort option, besides the default, is relevanceScore.
     *
     * @param list<string> $sort
     */
    public function withSort(array $sort): self
    {
        $self = clone $this;
        $self['sort'] = $sort;

        return $self;
    }

    /**
     * Get the next [limit] results starting with this number. Default is 0.
     */
    public function withStart(string $start): self
    {
        $self = clone $this;
        $self['start'] = $start;

        return $self;
    }

    /**
     * A comma delimited list of 2 character state codes.
     */
    public function withStateCode(string $stateCode): self
    {
        $self = clone $this;
        $self['stateCode'] = $stateCode;

        return $self;
    }
}
