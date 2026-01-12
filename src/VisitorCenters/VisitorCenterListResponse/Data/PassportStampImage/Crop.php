<?php

declare(strict_types=1);

namespace Nps\VisitorCenters\VisitorCenterListResponse\Data\PassportStampImage;

use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Contracts\BaseModel;

/**
 * @phpstan-type CropShape = array{aspectRatio?: float|null, url?: string|null}
 */
final class Crop implements BaseModel
{
    /** @use SdkModel<CropShape> */
    use SdkModel;

    #[Optional]
    public ?float $aspectRatio;

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
        ?float $aspectRatio = null,
        ?string $url = null
    ): self {
        $self = new self;

        null !== $aspectRatio && $self['aspectRatio'] = $aspectRatio;
        null !== $url && $self['url'] = $url;

        return $self;
    }

    public function withAspectRatio(float $aspectRatio): self
    {
        $self = clone $this;
        $self['aspectRatio'] = $aspectRatio;

        return $self;
    }

    public function withURL(string $url): self
    {
        $self = clone $this;
        $self['url'] = $url;

        return $self;
    }
}
