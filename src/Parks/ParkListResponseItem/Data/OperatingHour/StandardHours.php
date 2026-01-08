<?php

declare(strict_types=1);

namespace Nps\Parks\ParkListResponseItem\Data\OperatingHour;

use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Contracts\BaseModel;

/**
 * @phpstan-type StandardHoursShape = array{
 *   friday?: string|null,
 *   monday?: string|null,
 *   saturday?: string|null,
 *   sunday?: string|null,
 *   thursday?: string|null,
 *   tuesday?: string|null,
 *   wednesday?: string|null,
 * }
 */
final class StandardHours implements BaseModel
{
    /** @use SdkModel<StandardHoursShape> */
    use SdkModel;

    #[Optional]
    public ?string $friday;

    #[Optional]
    public ?string $monday;

    #[Optional]
    public ?string $saturday;

    #[Optional]
    public ?string $sunday;

    #[Optional]
    public ?string $thursday;

    #[Optional]
    public ?string $tuesday;

    #[Optional]
    public ?string $wednesday;

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
        ?string $friday = null,
        ?string $monday = null,
        ?string $saturday = null,
        ?string $sunday = null,
        ?string $thursday = null,
        ?string $tuesday = null,
        ?string $wednesday = null,
    ): self {
        $self = new self;

        null !== $friday && $self['friday'] = $friday;
        null !== $monday && $self['monday'] = $monday;
        null !== $saturday && $self['saturday'] = $saturday;
        null !== $sunday && $self['sunday'] = $sunday;
        null !== $thursday && $self['thursday'] = $thursday;
        null !== $tuesday && $self['tuesday'] = $tuesday;
        null !== $wednesday && $self['wednesday'] = $wednesday;

        return $self;
    }

    public function withFriday(string $friday): self
    {
        $self = clone $this;
        $self['friday'] = $friday;

        return $self;
    }

    public function withMonday(string $monday): self
    {
        $self = clone $this;
        $self['monday'] = $monday;

        return $self;
    }

    public function withSaturday(string $saturday): self
    {
        $self = clone $this;
        $self['saturday'] = $saturday;

        return $self;
    }

    public function withSunday(string $sunday): self
    {
        $self = clone $this;
        $self['sunday'] = $sunday;

        return $self;
    }

    public function withThursday(string $thursday): self
    {
        $self = clone $this;
        $self['thursday'] = $thursday;

        return $self;
    }

    public function withTuesday(string $tuesday): self
    {
        $self = clone $this;
        $self['tuesday'] = $tuesday;

        return $self;
    }

    public function withWednesday(string $wednesday): self
    {
        $self = clone $this;
        $self['wednesday'] = $wednesday;

        return $self;
    }
}
