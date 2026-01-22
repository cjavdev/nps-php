<?php

declare(strict_types=1);

namespace Nps\Campgrounds\CampgroundListResponse\Data;

use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Contracts\BaseModel;

/**
 * Detailed information about campsites.
 *
 * @phpstan-type CampsitesShape = array{
 *   electricalhookups?: string|null,
 *   group?: string|null,
 *   horse?: string|null,
 *   other?: string|null,
 *   rvonly?: string|null,
 *   tentonly?: string|null,
 *   totalsites?: string|null,
 *   walkboatto?: string|null,
 * }
 */
final class Campsites implements BaseModel
{
    /** @use SdkModel<CampsitesShape> */
    use SdkModel;

    #[Optional]
    public ?string $electricalhookups;

    #[Optional]
    public ?string $group;

    #[Optional]
    public ?string $horse;

    #[Optional]
    public ?string $other;

    #[Optional]
    public ?string $rvonly;

    #[Optional]
    public ?string $tentonly;

    #[Optional]
    public ?string $totalsites;

    #[Optional]
    public ?string $walkboatto;

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
        ?string $electricalhookups = null,
        ?string $group = null,
        ?string $horse = null,
        ?string $other = null,
        ?string $rvonly = null,
        ?string $tentonly = null,
        ?string $totalsites = null,
        ?string $walkboatto = null,
    ): self {
        $self = new self;

        null !== $electricalhookups && $self['electricalhookups'] = $electricalhookups;
        null !== $group && $self['group'] = $group;
        null !== $horse && $self['horse'] = $horse;
        null !== $other && $self['other'] = $other;
        null !== $rvonly && $self['rvonly'] = $rvonly;
        null !== $tentonly && $self['tentonly'] = $tentonly;
        null !== $totalsites && $self['totalsites'] = $totalsites;
        null !== $walkboatto && $self['walkboatto'] = $walkboatto;

        return $self;
    }

    public function withElectricalhookups(string $electricalhookups): self
    {
        $self = clone $this;
        $self['electricalhookups'] = $electricalhookups;

        return $self;
    }

    public function withGroup(string $group): self
    {
        $self = clone $this;
        $self['group'] = $group;

        return $self;
    }

    public function withHorse(string $horse): self
    {
        $self = clone $this;
        $self['horse'] = $horse;

        return $self;
    }

    public function withOther(string $other): self
    {
        $self = clone $this;
        $self['other'] = $other;

        return $self;
    }

    public function withRvonly(string $rvonly): self
    {
        $self = clone $this;
        $self['rvonly'] = $rvonly;

        return $self;
    }

    public function withTentonly(string $tentonly): self
    {
        $self = clone $this;
        $self['tentonly'] = $tentonly;

        return $self;
    }

    public function withTotalsites(string $totalsites): self
    {
        $self = clone $this;
        $self['totalsites'] = $totalsites;

        return $self;
    }

    public function withWalkboatto(string $walkboatto): self
    {
        $self = clone $this;
        $self['walkboatto'] = $walkboatto;

        return $self;
    }
}
