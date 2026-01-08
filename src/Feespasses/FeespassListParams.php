<?php

declare(strict_types=1);

namespace Nps\Feespasses;

use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Concerns\SdkParams;
use Nps\Core\Contracts\BaseModel;

/**
 * @see Nps\Services\FeespassesService::list()
 *
 * @phpstan-type FeespassListParamsShape = array{
 *   limit?: int|null,
 *   parkCode?: list<string>|null,
 *   q?: string|null,
 *   sort?: list<string>|null,
 *   start?: int|null,
 *   statecode?: list<string>|null,
 * }
 */
final class FeespassListParams implements BaseModel
{
    /** @use SdkModel<FeespassListParamsShape> */
    use SdkModel;
    use SdkParams;

    /**
     * Number of results to return per request. Default is 50.
     */
    #[Optional]
    public ?int $limit;

    /**
     * A comma delimited list of park codes (each 4 characters in length).
     *
     * @var list<string>|null $parkCode
     */
    #[Optional(list: 'string')]
    public ?array $parkCode;

    /**
     * Term to search on.
     */
    #[Optional]
    public ?string $q;

    /**
     * A comma delimited list of resource properties to sort the results by. Each resource identifies which properties are 'sortable'. Ascending order is assumed for each property. If descending order is desired, the unary negative should prefix the property name. The sortable properties are listed in the documentation for each resource. Invalid property values will be ignored. Default is title.
     *
     * @var list<string>|null $sort
     */
    #[Optional(list: 'string')]
    public ?array $sort;

    /**
     * Get the next [limit] results starting with this number. Default is 0.
     */
    #[Optional]
    public ?int $start;

    /**
     * A comma delimited list of 2 character state codes.
     *
     * @var list<string>|null $statecode
     */
    #[Optional(list: 'string')]
    public ?array $statecode;

    public function __construct()
    {
        $this->initialize();
    }

    /**
     * Construct an instance from the required parameters.
     *
     * You must use named parameters to construct any parameters with a default value.
     *
     * @param list<string>|null $parkCode
     * @param list<string>|null $sort
     * @param list<string>|null $statecode
     */
    public static function with(
        ?int $limit = null,
        ?array $parkCode = null,
        ?string $q = null,
        ?array $sort = null,
        ?int $start = null,
        ?array $statecode = null,
    ): self {
        $self = new self;

        null !== $limit && $self['limit'] = $limit;
        null !== $parkCode && $self['parkCode'] = $parkCode;
        null !== $q && $self['q'] = $q;
        null !== $sort && $self['sort'] = $sort;
        null !== $start && $self['start'] = $start;
        null !== $statecode && $self['statecode'] = $statecode;

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
     * A comma delimited list of park codes (each 4 characters in length).
     *
     * @param list<string> $parkCode
     */
    public function withParkCode(array $parkCode): self
    {
        $self = clone $this;
        $self['parkCode'] = $parkCode;

        return $self;
    }

    /**
     * Term to search on.
     */
    public function withQ(string $q): self
    {
        $self = clone $this;
        $self['q'] = $q;

        return $self;
    }

    /**
     * A comma delimited list of resource properties to sort the results by. Each resource identifies which properties are 'sortable'. Ascending order is assumed for each property. If descending order is desired, the unary negative should prefix the property name. The sortable properties are listed in the documentation for each resource. Invalid property values will be ignored. Default is title.
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
    public function withStart(int $start): self
    {
        $self = clone $this;
        $self['start'] = $start;

        return $self;
    }

    /**
     * A comma delimited list of 2 character state codes.
     *
     * @param list<string> $statecode
     */
    public function withStatecode(array $statecode): self
    {
        $self = clone $this;
        $self['statecode'] = $statecode;

        return $self;
    }
}
