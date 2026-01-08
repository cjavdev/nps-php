<?php

declare(strict_types=1);

namespace Nps\Places\PlaceListResponseItem\Data;

use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Contracts\BaseModel;

/**
 * @phpstan-type RelatedParkShape = array{
 *   designation?: string|null,
 *   fullName?: string|null,
 *   name?: string|null,
 *   parkCode?: string|null,
 *   states?: string|null,
 *   url?: string|null,
 * }
 */
final class RelatedPark implements BaseModel
{
    /** @use SdkModel<RelatedParkShape> */
    use SdkModel;

    #[Optional]
    public ?string $designation;

    /**
     * full name of related park.
     */
    #[Optional]
    public ?string $fullName;

    #[Optional]
    public ?string $name;

    /**
     * four letter code for related park.
     */
    #[Optional]
    public ?string $parkCode;

    /**
     * comma separated list of state codes.
     */
    #[Optional]
    public ?string $states;

    /**
     * URL to park home page.
     */
    #[Optional]
    public ?string $url;

    public function __construct()
    {
        $this->initialize();
    }

    /**
     * Construct an instance from the required parameters.
     *
     * You must use named parameters to construct any parameters with a default value.
     */
    public static function with(
        ?string $designation = null,
        ?string $fullName = null,
        ?string $name = null,
        ?string $parkCode = null,
        ?string $states = null,
        ?string $url = null,
    ): self {
        $self = new self;

        null !== $designation && $self['designation'] = $designation;
        null !== $fullName && $self['fullName'] = $fullName;
        null !== $name && $self['name'] = $name;
        null !== $parkCode && $self['parkCode'] = $parkCode;
        null !== $states && $self['states'] = $states;
        null !== $url && $self['url'] = $url;

        return $self;
    }

    public function withDesignation(string $designation): self
    {
        $self = clone $this;
        $self['designation'] = $designation;

        return $self;
    }

    /**
     * full name of related park.
     */
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
     * four letter code for related park.
     */
    public function withParkCode(string $parkCode): self
    {
        $self = clone $this;
        $self['parkCode'] = $parkCode;

        return $self;
    }

    /**
     * comma separated list of state codes.
     */
    public function withStates(string $states): self
    {
        $self = clone $this;
        $self['states'] = $states;

        return $self;
    }

    /**
     * URL to park home page.
     */
    public function withURL(string $url): self
    {
        $self = clone $this;
        $self['url'] = $url;

        return $self;
    }
}
