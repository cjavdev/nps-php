<?php

declare(strict_types=1);

namespace Nps\Amenities;

use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Concerns\SdkParams;
use Nps\Core\Contracts\BaseModel;

/**
 * @see Nps\Services\AmenitiesService::list()
 *
 * @phpstan-type AmenityListParamsShape = array{
 *   id?: list<string>|null, limit?: int|null, q?: string|null, start?: int|null
 * }
 */
final class AmenityListParams implements BaseModel
{
    /** @use SdkModel<AmenityListParamsShape> */
    use SdkModel;
    use SdkParams;

    /**
     * One or more topic unique IDs.
     *
     * @var list<string>|null $id
     */
    #[Optional(list: 'string')]
    public ?array $id;

    /**
     * Number of results to return per request. Default is 50.
     */
    #[Optional]
    public ?int $limit;

    /**
     * A string to search for.
     */
    #[Optional]
    public ?string $q;

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
     * @param list<string>|null $id
     */
    public static function with(
        ?array $id = null,
        ?int $limit = null,
        ?string $q = null,
        ?int $start = null
    ): self {
        $self = new self;

        null !== $id && $self['id'] = $id;
        null !== $limit && $self['limit'] = $limit;
        null !== $q && $self['q'] = $q;
        null !== $start && $self['start'] = $start;

        return $self;
    }

    /**
     * One or more topic unique IDs.
     *
     * @param list<string> $id
     */
    public function withID(array $id): self
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
     * A string to search for.
     */
    public function withQ(string $q): self
    {
        $self = clone $this;
        $self['q'] = $q;

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
