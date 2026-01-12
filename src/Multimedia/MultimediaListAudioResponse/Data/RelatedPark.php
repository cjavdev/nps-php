<?php

declare(strict_types=1);

namespace Nps\Multimedia\MultimediaListAudioResponse\Data;

use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Contracts\BaseModel;

/**
 * @phpstan-type RelatedParkShape = array{
 *   designation?: string|null, parkCode?: string|null, states?: string|null
 * }
 */
final class RelatedPark implements BaseModel
{
    /** @use SdkModel<RelatedParkShape> */
    use SdkModel;

    #[Optional]
    public ?string $designation;

    #[Optional]
    public ?string $parkCode;

    #[Optional]
    public ?string $states;

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
        ?string $parkCode = null,
        ?string $states = null
    ): self {
        $self = new self;

        null !== $designation && $self['designation'] = $designation;
        null !== $parkCode && $self['parkCode'] = $parkCode;
        null !== $states && $self['states'] = $states;

        return $self;
    }

    public function withDesignation(string $designation): self
    {
        $self = clone $this;
        $self['designation'] = $designation;

        return $self;
    }

    public function withParkCode(string $parkCode): self
    {
        $self = clone $this;
        $self['parkCode'] = $parkCode;

        return $self;
    }

    public function withStates(string $states): self
    {
        $self = clone $this;
        $self['states'] = $states;

        return $self;
    }
}
