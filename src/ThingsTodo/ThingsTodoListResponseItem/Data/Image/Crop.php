<?php

declare(strict_types=1);

namespace Nps\ThingsTodo\ThingsTodoListResponseItem\Data\Image;

use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Contracts\BaseModel;

/**
 * @phpstan-type CropShape = array{aspectratio?: int|null, url?: string|null}
 */
final class Crop implements BaseModel
{
    /** @use SdkModel<CropShape> */
    use SdkModel;

    /**
     * the image ratio for this cropped image.
     */
    #[Optional]
    public ?int $aspectratio;

    /**
     * URL for this cropped image.
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
        ?int $aspectratio = null,
        ?string $url = null
    ): self {
        $self = new self;

        null !== $aspectratio && $self['aspectratio'] = $aspectratio;
        null !== $url && $self['url'] = $url;

        return $self;
    }

    /**
     * the image ratio for this cropped image.
     */
    public function withAspectratio(int $aspectratio): self
    {
        $self = clone $this;
        $self['aspectratio'] = $aspectratio;

        return $self;
    }

    /**
     * URL for this cropped image.
     */
    public function withURL(string $url): self
    {
        $self = clone $this;
        $self['url'] = $url;

        return $self;
    }
}
