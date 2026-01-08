<?php

declare(strict_types=1);

namespace Nps\Parks;

use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Concerns\SdkParams;
use Nps\Core\Contracts\BaseModel;

/**
 * @see Nps\Services\ParksService::list()
 *
 * @phpstan-type ParkListParamsShape = array{
 *   limit?: int|null,
 *   parkCode?: list<string>|null,
 *   q?: string|null,
 *   sort?: list<string>|null,
 *   start?: int|null,
 *   stateCode?: list<string>|null,
 * }
 */
final class ParkListParams implements BaseModel
{
    /** @use SdkModel<ParkListParamsShape> */
    use SdkModel;
    use SdkParams;

    /**
     * Number of results to return per request. Default is 50.
     */
    #[Optional]
    public ?int $limit;

    /**
     * A comma delimited list of park codes (each 4-10 characters in length).
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
     * A comma delimited list of resource properties to sort the results by. Ascending order is assumed for each property. If descending order is desired, the unary negative should prefix the property name. Invalid property values will be ignored. If no sort parameter is passed in a request, the default sort is by fullName. If sorting by relevanceScore, you 1) will likely use -relevanceScore as a higher score indicates a more relevant result and 2) cannot use it in conjunction with other sort properties. Possible fields to sort by are fullName, parkCode, and relevanceScore.
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
     * @var list<string>|null $stateCode
     */
    #[Optional(list: 'string')]
    public ?array $stateCode;

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
     * @param list<string>|null $stateCode
     */
    public static function with(
        ?int $limit = null,
        ?array $parkCode = null,
        ?string $q = null,
        ?array $sort = null,
        ?int $start = null,
        ?array $stateCode = null,
    ): self {
        $self = new self;

        null !== $limit && $self['limit'] = $limit;
        null !== $parkCode && $self['parkCode'] = $parkCode;
        null !== $q && $self['q'] = $q;
        null !== $sort && $self['sort'] = $sort;
        null !== $start && $self['start'] = $start;
        null !== $stateCode && $self['stateCode'] = $stateCode;

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
     * A comma delimited list of park codes (each 4-10 characters in length).
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
     * A comma delimited list of resource properties to sort the results by. Ascending order is assumed for each property. If descending order is desired, the unary negative should prefix the property name. Invalid property values will be ignored. If no sort parameter is passed in a request, the default sort is by fullName. If sorting by relevanceScore, you 1) will likely use -relevanceScore as a higher score indicates a more relevant result and 2) cannot use it in conjunction with other sort properties. Possible fields to sort by are fullName, parkCode, and relevanceScore.
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
     * @param list<string> $stateCode
     */
    public function withStateCode(array $stateCode): self
    {
        $self = clone $this;
        $self['stateCode'] = $stateCode;

        return $self;
    }
}
