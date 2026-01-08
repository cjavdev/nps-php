<?php

declare(strict_types=1);

namespace Nps\Amenities\AmenityGetParksVisitorCentersResponseItem\Data;

use Nps\Amenities\AmenityGetParksVisitorCentersResponseItem\Data\Park\Visitorcenter;
use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Contracts\BaseModel;

/**
 * @phpstan-import-type VisitorcenterShape from \Nps\Amenities\AmenityGetParksVisitorCentersResponseItem\Data\Park\Visitorcenter
 *
 * @phpstan-type ParkShape = array{
 *   designation?: string|null,
 *   fullName?: string|null,
 *   name?: string|null,
 *   parkCode?: string|null,
 *   states?: string|null,
 *   url?: string|null,
 *   visitorcenters?: list<Visitorcenter|VisitorcenterShape>|null,
 * }
 */
final class Park implements BaseModel
{
    /** @use SdkModel<ParkShape> */
    use SdkModel;

    #[Optional]
    public ?string $designation;

    #[Optional]
    public ?string $fullName;

    #[Optional('Name')]
    public ?string $name;

    /**
     * four letter park code.
     */
    #[Optional]
    public ?string $parkCode;

    /**
     * two letter state code.
     */
    #[Optional]
    public ?string $states;

    #[Optional]
    public ?string $url;

    /** @var list<Visitorcenter>|null $visitorcenters */
    #[Optional(list: Visitorcenter::class)]
    public ?array $visitorcenters;

    public function __construct()
    {
        $this->initialize();
    }

    /**
     * Construct an instance from the required parameters.
     *
     * You must use named parameters to construct any parameters with a default value.
     *
     * @param list<Visitorcenter|VisitorcenterShape>|null $visitorcenters
     */
    public static function with(
        ?string $designation = null,
        ?string $fullName = null,
        ?string $name = null,
        ?string $parkCode = null,
        ?string $states = null,
        ?string $url = null,
        ?array $visitorcenters = null,
    ): self {
        $self = new self;

        null !== $designation && $self['designation'] = $designation;
        null !== $fullName && $self['fullName'] = $fullName;
        null !== $name && $self['name'] = $name;
        null !== $parkCode && $self['parkCode'] = $parkCode;
        null !== $states && $self['states'] = $states;
        null !== $url && $self['url'] = $url;
        null !== $visitorcenters && $self['visitorcenters'] = $visitorcenters;

        return $self;
    }

    public function withDesignation(string $designation): self
    {
        $self = clone $this;
        $self['designation'] = $designation;

        return $self;
    }

    public function withFullName(string $fullName): self
    {
        $self = clone $this;
        $self['fullName'] = $fullName;

        return $self;
    }

    public function withName(string $name): self
    {
        $self = clone $this;
        $self['name'] = $name;

        return $self;
    }

    /**
     * four letter park code.
     */
    public function withParkCode(string $parkCode): self
    {
        $self = clone $this;
        $self['parkCode'] = $parkCode;

        return $self;
    }

    /**
     * two letter state code.
     */
    public function withStates(string $states): self
    {
        $self = clone $this;
        $self['states'] = $states;

        return $self;
    }

    public function withURL(string $url): self
    {
        $self = clone $this;
        $self['url'] = $url;

        return $self;
    }

    /**
     * @param list<Visitorcenter|VisitorcenterShape> $visitorcenters
     */
    public function withVisitorcenters(array $visitorcenters): self
    {
        $self = clone $this;
        $self['visitorcenters'] = $visitorcenters;

        return $self;
    }
}
