<?php

declare(strict_types=1);

namespace Nps\Campgrounds\CampgroundListResponseItem\Data;

use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Contracts\BaseModel;

/**
 * Detailed information about accessibility in the campground.
 *
 * @phpstan-type AccessibilityShape = array{
 *   accessroads?: list<string>|null,
 *   adainfo?: string|null,
 *   additionalinfo?: string|null,
 *   cellphoneinfo?: string|null,
 *   classifications?: list<string>|null,
 *   firestovepolicy?: string|null,
 *   internetinfo?: string|null,
 *   rvallowed?: string|null,
 *   rvinfo?: string|null,
 *   rvmaxlength?: string|null,
 *   trailerallowed?: string|null,
 *   trailermaxlength?: string|null,
 *   wheelchairaccess?: string|null,
 * }
 */
final class Accessibility implements BaseModel
{
    /** @use SdkModel<AccessibilityShape> */
    use SdkModel;

    /** @var list<string>|null $accessroads */
    #[Optional(list: 'string')]
    public ?array $accessroads;

    #[Optional]
    public ?string $adainfo;

    #[Optional]
    public ?string $additionalinfo;

    #[Optional]
    public ?string $cellphoneinfo;

    /** @var list<string>|null $classifications */
    #[Optional(list: 'string')]
    public ?array $classifications;

    #[Optional]
    public ?string $firestovepolicy;

    #[Optional]
    public ?string $internetinfo;

    #[Optional]
    public ?string $rvallowed;

    #[Optional]
    public ?string $rvinfo;

    #[Optional]
    public ?string $rvmaxlength;

    #[Optional]
    public ?string $trailerallowed;

    #[Optional]
    public ?string $trailermaxlength;

    #[Optional]
    public ?string $wheelchairaccess;

    public function __construct()
    {
        $this->initialize();
    }

    /**
     * Construct an instance from the required parameters.
     *
     * You must use named parameters to construct any parameters with a default value.
     *
     * @param list<string>|null $accessroads
     * @param list<string>|null $classifications
     */
    public static function with(
        ?array $accessroads = null,
        ?string $adainfo = null,
        ?string $additionalinfo = null,
        ?string $cellphoneinfo = null,
        ?array $classifications = null,
        ?string $firestovepolicy = null,
        ?string $internetinfo = null,
        ?string $rvallowed = null,
        ?string $rvinfo = null,
        ?string $rvmaxlength = null,
        ?string $trailerallowed = null,
        ?string $trailermaxlength = null,
        ?string $wheelchairaccess = null,
    ): self {
        $self = new self;

        null !== $accessroads && $self['accessroads'] = $accessroads;
        null !== $adainfo && $self['adainfo'] = $adainfo;
        null !== $additionalinfo && $self['additionalinfo'] = $additionalinfo;
        null !== $cellphoneinfo && $self['cellphoneinfo'] = $cellphoneinfo;
        null !== $classifications && $self['classifications'] = $classifications;
        null !== $firestovepolicy && $self['firestovepolicy'] = $firestovepolicy;
        null !== $internetinfo && $self['internetinfo'] = $internetinfo;
        null !== $rvallowed && $self['rvallowed'] = $rvallowed;
        null !== $rvinfo && $self['rvinfo'] = $rvinfo;
        null !== $rvmaxlength && $self['rvmaxlength'] = $rvmaxlength;
        null !== $trailerallowed && $self['trailerallowed'] = $trailerallowed;
        null !== $trailermaxlength && $self['trailermaxlength'] = $trailermaxlength;
        null !== $wheelchairaccess && $self['wheelchairaccess'] = $wheelchairaccess;

        return $self;
    }

    /**
     * @param list<string> $accessroads
     */
    public function withAccessroads(array $accessroads): self
    {
        $self = clone $this;
        $self['accessroads'] = $accessroads;

        return $self;
    }

    public function withAdainfo(string $adainfo): self
    {
        $self = clone $this;
        $self['adainfo'] = $adainfo;

        return $self;
    }

    public function withAdditionalinfo(string $additionalinfo): self
    {
        $self = clone $this;
        $self['additionalinfo'] = $additionalinfo;

        return $self;
    }

    public function withCellphoneinfo(string $cellphoneinfo): self
    {
        $self = clone $this;
        $self['cellphoneinfo'] = $cellphoneinfo;

        return $self;
    }

    /**
     * @param list<string> $classifications
     */
    public function withClassifications(array $classifications): self
    {
        $self = clone $this;
        $self['classifications'] = $classifications;

        return $self;
    }

    public function withFirestovepolicy(string $firestovepolicy): self
    {
        $self = clone $this;
        $self['firestovepolicy'] = $firestovepolicy;

        return $self;
    }

    public function withInternetinfo(string $internetinfo): self
    {
        $self = clone $this;
        $self['internetinfo'] = $internetinfo;

        return $self;
    }

    public function withRvallowed(string $rvallowed): self
    {
        $self = clone $this;
        $self['rvallowed'] = $rvallowed;

        return $self;
    }

    public function withRvinfo(string $rvinfo): self
    {
        $self = clone $this;
        $self['rvinfo'] = $rvinfo;

        return $self;
    }

    public function withRvmaxlength(string $rvmaxlength): self
    {
        $self = clone $this;
        $self['rvmaxlength'] = $rvmaxlength;

        return $self;
    }

    public function withTrailerallowed(string $trailerallowed): self
    {
        $self = clone $this;
        $self['trailerallowed'] = $trailerallowed;

        return $self;
    }

    public function withTrailermaxlength(string $trailermaxlength): self
    {
        $self = clone $this;
        $self['trailermaxlength'] = $trailermaxlength;

        return $self;
    }

    public function withWheelchairaccess(string $wheelchairaccess): self
    {
        $self = clone $this;
        $self['wheelchairaccess'] = $wheelchairaccess;

        return $self;
    }
}
