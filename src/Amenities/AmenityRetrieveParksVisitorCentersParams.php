<?php

declare(strict_types=1);

namespace Nps\Amenities;

use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Concerns\SdkParams;
use Nps\Core\Contracts\BaseModel;

/**
 * @see Nps\Services\AmenitiesService::retrieveParksVisitorCenters()
 *
 * @phpstan-type AmenityRetrieveParksVisitorCentersParamsShape = array{
 *   id?: string|null,
 *   limit?: int|null,
 *   parkCode?: string|null,
 *   q?: string|null,
 *   sort?: list<string>|null,
 *   start?: int|null,
 * }
 */
final class AmenityRetrieveParksVisitorCentersParams implements BaseModel
{
    /** @use SdkModel<AmenityRetrieveParksVisitorCentersParamsShape> */
    use SdkModel;
    use SdkParams;

    /**
     * A comma delimited list of amenity IDs.
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
     * A comma delimited list of fields to sort the results by. Ascending order is assumed for each field unless the field name is prefixed with the unary negative which implies descending order.
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
        ?int $start = null,
    ): self {
        $self = new self;

        null !== $id && $self['id'] = $id;
        null !== $limit && $self['limit'] = $limit;
        null !== $parkCode && $self['parkCode'] = $parkCode;
        null !== $q && $self['q'] = $q;
        null !== $sort && $self['sort'] = $sort;
        null !== $start && $self['start'] = $start;

        return $self;
    }

    /**
     * A comma delimited list of amenity IDs.
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
     * A comma delimited list of fields to sort the results by. Ascending order is assumed for each field unless the field name is prefixed with the unary negative which implies descending order.
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
}
