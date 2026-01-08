<?php

declare(strict_types=1);

namespace Nps\RoadEvents\RoadEventListResponseItem\Feature;

use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Contracts\BaseModel;
use Nps\RoadEvents\RoadEventListResponseItem\Feature\Properties\CoreDetails;
use Nps\RoadEvents\RoadEventListResponseItem\Feature\Properties\TypesOfWork;

/**
 * @phpstan-import-type CoreDetailsShape from \Nps\RoadEvents\RoadEventListResponseItem\Feature\Properties\CoreDetails
 * @phpstan-import-type TypesOfWorkShape from \Nps\RoadEvents\RoadEventListResponseItem\Feature\Properties\TypesOfWork
 *
 * @phpstan-type PropertiesShape = array{
 *   coreDetails?: null|CoreDetails|CoreDetailsShape,
 *   endDate?: string|null,
 *   isEndDateVerified?: bool|null,
 *   isEndPositionVerified?: bool|null,
 *   isStartDateVerified?: bool|null,
 *   isStartPositionVerified?: bool|null,
 *   locationMethod?: string|null,
 *   startDate?: string|null,
 *   typesOfWork?: list<TypesOfWork|TypesOfWorkShape>|null,
 *   vehicleImpact?: string|null,
 * }
 */
final class Properties implements BaseModel
{
    /** @use SdkModel<PropertiesShape> */
    use SdkModel;

    #[Optional('core_details')]
    public ?CoreDetails $coreDetails;

    #[Optional('end_date')]
    public ?string $endDate;

    #[Optional('is_end_date_verified')]
    public ?bool $isEndDateVerified;

    #[Optional('is_end_position_verified')]
    public ?bool $isEndPositionVerified;

    #[Optional('is_start_date_verified')]
    public ?bool $isStartDateVerified;

    #[Optional('is_start_position_verified')]
    public ?bool $isStartPositionVerified;

    #[Optional('location_method')]
    public ?string $locationMethod;

    #[Optional('start_date')]
    public ?string $startDate;

    /** @var list<TypesOfWork>|null $typesOfWork */
    #[Optional('types_of_work', list: TypesOfWork::class)]
    public ?array $typesOfWork;

    #[Optional('vehicle_impact')]
    public ?string $vehicleImpact;

    public function __construct()
    {
        $this->initialize();
    }

    /**
     * Construct an instance from the required parameters.
     *
     * You must use named parameters to construct any parameters with a default value.
     *
     * @param CoreDetails|CoreDetailsShape|null $coreDetails
     * @param list<TypesOfWork|TypesOfWorkShape>|null $typesOfWork
     */
    public static function with(
        CoreDetails|array|null $coreDetails = null,
        ?string $endDate = null,
        ?bool $isEndDateVerified = null,
        ?bool $isEndPositionVerified = null,
        ?bool $isStartDateVerified = null,
        ?bool $isStartPositionVerified = null,
        ?string $locationMethod = null,
        ?string $startDate = null,
        ?array $typesOfWork = null,
        ?string $vehicleImpact = null,
    ): self {
        $self = new self;

        null !== $coreDetails && $self['coreDetails'] = $coreDetails;
        null !== $endDate && $self['endDate'] = $endDate;
        null !== $isEndDateVerified && $self['isEndDateVerified'] = $isEndDateVerified;
        null !== $isEndPositionVerified && $self['isEndPositionVerified'] = $isEndPositionVerified;
        null !== $isStartDateVerified && $self['isStartDateVerified'] = $isStartDateVerified;
        null !== $isStartPositionVerified && $self['isStartPositionVerified'] = $isStartPositionVerified;
        null !== $locationMethod && $self['locationMethod'] = $locationMethod;
        null !== $startDate && $self['startDate'] = $startDate;
        null !== $typesOfWork && $self['typesOfWork'] = $typesOfWork;
        null !== $vehicleImpact && $self['vehicleImpact'] = $vehicleImpact;

        return $self;
    }

    /**
     * @param CoreDetails|CoreDetailsShape $coreDetails
     */
    public function withCoreDetails(CoreDetails|array $coreDetails): self
    {
        $self = clone $this;
        $self['coreDetails'] = $coreDetails;

        return $self;
    }

    public function withEndDate(string $endDate): self
    {
        $self = clone $this;
        $self['endDate'] = $endDate;

        return $self;
    }

    public function withIsEndDateVerified(bool $isEndDateVerified): self
    {
        $self = clone $this;
        $self['isEndDateVerified'] = $isEndDateVerified;

        return $self;
    }

    public function withIsEndPositionVerified(bool $isEndPositionVerified): self
    {
        $self = clone $this;
        $self['isEndPositionVerified'] = $isEndPositionVerified;

        return $self;
    }

    public function withIsStartDateVerified(bool $isStartDateVerified): self
    {
        $self = clone $this;
        $self['isStartDateVerified'] = $isStartDateVerified;

        return $self;
    }

    public function withIsStartPositionVerified(
        bool $isStartPositionVerified
    ): self {
        $self = clone $this;
        $self['isStartPositionVerified'] = $isStartPositionVerified;

        return $self;
    }

    public function withLocationMethod(string $locationMethod): self
    {
        $self = clone $this;
        $self['locationMethod'] = $locationMethod;

        return $self;
    }

    public function withStartDate(string $startDate): self
    {
        $self = clone $this;
        $self['startDate'] = $startDate;

        return $self;
    }

    /**
     * @param list<TypesOfWork|TypesOfWorkShape> $typesOfWork
     */
    public function withTypesOfWork(array $typesOfWork): self
    {
        $self = clone $this;
        $self['typesOfWork'] = $typesOfWork;

        return $self;
    }

    public function withVehicleImpact(string $vehicleImpact): self
    {
        $self = clone $this;
        $self['vehicleImpact'] = $vehicleImpact;

        return $self;
    }
}
