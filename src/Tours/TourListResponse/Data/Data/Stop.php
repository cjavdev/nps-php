<?php

declare(strict_types=1);

namespace Nps\Tours\TourListResponse\Data\Data;

use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Contracts\BaseModel;

/**
 * @phpstan-type StopShape = array{
 *   id?: string|null,
 *   assetID?: string|null,
 *   assetName?: string|null,
 *   assetType?: string|null,
 *   directionsToNextStop?: string|null,
 *   ordinal?: string|null,
 *   significance?: string|null,
 * }
 */
final class Stop implements BaseModel
{
    /** @use SdkModel<StopShape> */
    use SdkModel;

    #[Optional]
    public ?string $id;

    #[Optional('assetId')]
    public ?string $assetID;

    #[Optional]
    public ?string $assetName;

    #[Optional]
    public ?string $assetType;

    #[Optional]
    public ?string $directionsToNextStop;

    #[Optional]
    public ?string $ordinal;

    #[Optional]
    public ?string $significance;

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
        ?string $id = null,
        ?string $assetID = null,
        ?string $assetName = null,
        ?string $assetType = null,
        ?string $directionsToNextStop = null,
        ?string $ordinal = null,
        ?string $significance = null,
    ): self {
        $self = new self;

        null !== $id && $self['id'] = $id;
        null !== $assetID && $self['assetID'] = $assetID;
        null !== $assetName && $self['assetName'] = $assetName;
        null !== $assetType && $self['assetType'] = $assetType;
        null !== $directionsToNextStop && $self['directionsToNextStop'] = $directionsToNextStop;
        null !== $ordinal && $self['ordinal'] = $ordinal;
        null !== $significance && $self['significance'] = $significance;

        return $self;
    }

    public function withID(string $id): self
    {
        $self = clone $this;
        $self['id'] = $id;

        return $self;
    }

    public function withAssetID(string $assetID): self
    {
        $self = clone $this;
        $self['assetID'] = $assetID;

        return $self;
    }

    public function withAssetName(string $assetName): self
    {
        $self = clone $this;
        $self['assetName'] = $assetName;

        return $self;
    }

    public function withAssetType(string $assetType): self
    {
        $self = clone $this;
        $self['assetType'] = $assetType;

        return $self;
    }

    public function withDirectionsToNextStop(string $directionsToNextStop): self
    {
        $self = clone $this;
        $self['directionsToNextStop'] = $directionsToNextStop;

        return $self;
    }

    public function withOrdinal(string $ordinal): self
    {
        $self = clone $this;
        $self['ordinal'] = $ordinal;

        return $self;
    }

    public function withSignificance(string $significance): self
    {
        $self = clone $this;
        $self['significance'] = $significance;

        return $self;
    }
}
