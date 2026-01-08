<?php

declare(strict_types=1);

namespace Nps\ParkingLots\ParkingLotListResponseItem\Data;

use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Contracts\BaseModel;

/**
 * @phpstan-type AccessibilityShape = array{
 *   adaFacilitiesDescription?: string|null,
 *   isLotAccessibleToDisabled?: bool|null,
 *   numberofAdaSpaces?: int|null,
 *   numberofAdaStepFreeSpaces?: int|null,
 *   numberofAdaVanAccessbileSpaces?: int|null,
 *   numberOfOversizeVehicleSpaces?: int|null,
 *   totalSpaces?: int|null,
 * }
 */
final class Accessibility implements BaseModel
{
    /** @use SdkModel<AccessibilityShape> */
    use SdkModel;

    #[Optional]
    public ?string $adaFacilitiesDescription;

    #[Optional]
    public ?bool $isLotAccessibleToDisabled;

    #[Optional]
    public ?int $numberofAdaSpaces;

    #[Optional]
    public ?int $numberofAdaStepFreeSpaces;

    #[Optional]
    public ?int $numberofAdaVanAccessbileSpaces;

    #[Optional]
    public ?int $numberOfOversizeVehicleSpaces;

    #[Optional]
    public ?int $totalSpaces;

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
        ?string $adaFacilitiesDescription = null,
        ?bool $isLotAccessibleToDisabled = null,
        ?int $numberofAdaSpaces = null,
        ?int $numberofAdaStepFreeSpaces = null,
        ?int $numberofAdaVanAccessbileSpaces = null,
        ?int $numberOfOversizeVehicleSpaces = null,
        ?int $totalSpaces = null,
    ): self {
        $self = new self;

        null !== $adaFacilitiesDescription && $self['adaFacilitiesDescription'] = $adaFacilitiesDescription;
        null !== $isLotAccessibleToDisabled && $self['isLotAccessibleToDisabled'] = $isLotAccessibleToDisabled;
        null !== $numberofAdaSpaces && $self['numberofAdaSpaces'] = $numberofAdaSpaces;
        null !== $numberofAdaStepFreeSpaces && $self['numberofAdaStepFreeSpaces'] = $numberofAdaStepFreeSpaces;
        null !== $numberofAdaVanAccessbileSpaces && $self['numberofAdaVanAccessbileSpaces'] = $numberofAdaVanAccessbileSpaces;
        null !== $numberOfOversizeVehicleSpaces && $self['numberOfOversizeVehicleSpaces'] = $numberOfOversizeVehicleSpaces;
        null !== $totalSpaces && $self['totalSpaces'] = $totalSpaces;

        return $self;
    }

    public function withAdaFacilitiesDescription(
        string $adaFacilitiesDescription
    ): self {
        $self = clone $this;
        $self['adaFacilitiesDescription'] = $adaFacilitiesDescription;

        return $self;
    }

    public function withIsLotAccessibleToDisabled(
        bool $isLotAccessibleToDisabled
    ): self {
        $self = clone $this;
        $self['isLotAccessibleToDisabled'] = $isLotAccessibleToDisabled;

        return $self;
    }

    public function withNumberofAdaSpaces(int $numberofAdaSpaces): self
    {
        $self = clone $this;
        $self['numberofAdaSpaces'] = $numberofAdaSpaces;

        return $self;
    }

    public function withNumberofAdaStepFreeSpaces(
        int $numberofAdaStepFreeSpaces
    ): self {
        $self = clone $this;
        $self['numberofAdaStepFreeSpaces'] = $numberofAdaStepFreeSpaces;

        return $self;
    }

    public function withNumberofAdaVanAccessbileSpaces(
        int $numberofAdaVanAccessbileSpaces
    ): self {
        $self = clone $this;
        $self['numberofAdaVanAccessbileSpaces'] = $numberofAdaVanAccessbileSpaces;

        return $self;
    }

    public function withNumberOfOversizeVehicleSpaces(
        int $numberOfOversizeVehicleSpaces
    ): self {
        $self = clone $this;
        $self['numberOfOversizeVehicleSpaces'] = $numberOfOversizeVehicleSpaces;

        return $self;
    }

    public function withTotalSpaces(int $totalSpaces): self
    {
        $self = clone $this;
        $self['totalSpaces'] = $totalSpaces;

        return $self;
    }
}
