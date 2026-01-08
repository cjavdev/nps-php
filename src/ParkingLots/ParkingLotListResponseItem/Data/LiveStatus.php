<?php

declare(strict_types=1);

namespace Nps\ParkingLots\ParkingLotListResponseItem\Data;

use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Contracts\BaseModel;

/**
 * @phpstan-type LiveStatusShape = array{
 *   description?: string|null,
 *   estimatedWaitTimeInMinutes?: int|null,
 *   expirationDate?: string|null,
 *   isActive?: bool|null,
 *   occupancy?: string|null,
 * }
 */
final class LiveStatus implements BaseModel
{
    /** @use SdkModel<LiveStatusShape> */
    use SdkModel;

    #[Optional]
    public ?string $description;

    #[Optional]
    public ?int $estimatedWaitTimeInMinutes;

    #[Optional]
    public ?string $expirationDate;

    #[Optional]
    public ?bool $isActive;

    #[Optional]
    public ?string $occupancy;

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
        ?string $description = null,
        ?int $estimatedWaitTimeInMinutes = null,
        ?string $expirationDate = null,
        ?bool $isActive = null,
        ?string $occupancy = null,
    ): self {
        $self = new self;

        null !== $description && $self['description'] = $description;
        null !== $estimatedWaitTimeInMinutes && $self['estimatedWaitTimeInMinutes'] = $estimatedWaitTimeInMinutes;
        null !== $expirationDate && $self['expirationDate'] = $expirationDate;
        null !== $isActive && $self['isActive'] = $isActive;
        null !== $occupancy && $self['occupancy'] = $occupancy;

        return $self;
    }

    public function withDescription(string $description): self
    {
        $self = clone $this;
        $self['description'] = $description;

        return $self;
    }

    public function withEstimatedWaitTimeInMinutes(
        int $estimatedWaitTimeInMinutes
    ): self {
        $self = clone $this;
        $self['estimatedWaitTimeInMinutes'] = $estimatedWaitTimeInMinutes;

        return $self;
    }

    public function withExpirationDate(string $expirationDate): self
    {
        $self = clone $this;
        $self['expirationDate'] = $expirationDate;

        return $self;
    }

    public function withIsActive(bool $isActive): self
    {
        $self = clone $this;
        $self['isActive'] = $isActive;

        return $self;
    }

    public function withOccupancy(string $occupancy): self
    {
        $self = clone $this;
        $self['occupancy'] = $occupancy;

        return $self;
    }
}
