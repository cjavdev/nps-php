<?php

declare(strict_types=1);

namespace Nps\ParkingLots\ParkingLotListResponse\Data\OperatingHour;

use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Contracts\BaseModel;

/**
 * @phpstan-type ExceptionShape = array{
 *   endDate?: string|null, name?: string|null, startDate?: string|null
 * }
 */
final class Exception implements BaseModel
{
    /** @use SdkModel<ExceptionShape> */
    use SdkModel;

    #[Optional]
    public ?string $endDate;

    #[Optional]
    public ?string $name;

    #[Optional]
    public ?string $startDate;

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
        ?string $endDate = null,
        ?string $name = null,
        ?string $startDate = null
    ): self {
        $self = new self;

        null !== $endDate && $self['endDate'] = $endDate;
        null !== $name && $self['name'] = $name;
        null !== $startDate && $self['startDate'] = $startDate;

        return $self;
    }

    public function withEndDate(string $endDate): self
    {
        $self = clone $this;
        $self['endDate'] = $endDate;

        return $self;
    }

    public function withName(string $name): self
    {
        $self = clone $this;
        $self['name'] = $name;

        return $self;
    }

    public function withStartDate(string $startDate): self
    {
        $self = clone $this;
        $self['startDate'] = $startDate;

        return $self;
    }
}
