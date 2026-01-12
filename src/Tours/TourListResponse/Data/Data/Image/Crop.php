<?php

declare(strict_types=1);

namespace Nps\Tours\TourListResponse\Data\Data\Image;

use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Contracts\BaseModel;

/**
 * @phpstan-type CropShape = array{aspectratio?: string|null, url?: string|null}
 */
final class Crop implements BaseModel
{
    /** @use SdkModel<CropShape> */
    use SdkModel;

    #[Optional]
    public ?string $aspectratio;

    /**
     * URL to this image crop.
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
        ?string $aspectratio = null,
        ?string $url = null
    ): self {
        $self = new self;

        null !== $aspectratio && $self['aspectratio'] = $aspectratio;
        null !== $url && $self['url'] = $url;

        return $self;
    }

    public function withAspectratio(string $aspectratio): self
    {
        $self = clone $this;
        $self['aspectratio'] = $aspectratio;

        return $self;
    }

    /**
     * URL to this image crop.
     */
    public function withURL(string $url): self
    {
        $self = clone $this;
        $self['url'] = $url;

        return $self;
    }
}
