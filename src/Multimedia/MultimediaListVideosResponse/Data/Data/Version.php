<?php

declare(strict_types=1);

namespace Nps\Multimedia\MultimediaListVideosResponse\Data\Data;

use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Contracts\BaseModel;

/**
 * @phpstan-type VersionShape = array{
 *   aspectRatio?: float|null,
 *   fileSizeKB?: float|null,
 *   fileType?: string|null,
 *   heightPixels?: float|null,
 *   url?: string|null,
 *   widthPixels?: float|null,
 * }
 */
final class Version implements BaseModel
{
    /** @use SdkModel<VersionShape> */
    use SdkModel;

    #[Optional]
    public ?float $aspectRatio;

    #[Optional('fileSizeKb')]
    public ?float $fileSizeKB;

    #[Optional]
    public ?string $fileType;

    #[Optional]
    public ?float $heightPixels;

    #[Optional]
    public ?string $url;

    #[Optional]
    public ?float $widthPixels;

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
        ?float $fileSizeKB = null,
        ?string $fileType = null,
        ?float $heightPixels = null,
        ?string $url = null,
        ?float $widthPixels = null,
    ): self {
        $self = new self;

        null !== $aspectRatio && $self['aspectRatio'] = $aspectRatio;
        null !== $fileSizeKB && $self['fileSizeKB'] = $fileSizeKB;
        null !== $fileType && $self['fileType'] = $fileType;
        null !== $heightPixels && $self['heightPixels'] = $heightPixels;
        null !== $url && $self['url'] = $url;
        null !== $widthPixels && $self['widthPixels'] = $widthPixels;

        return $self;
    }

    public function withAspectRatio(float $aspectRatio): self
    {
        $self = clone $this;
        $self['aspectRatio'] = $aspectRatio;

        return $self;
    }

    public function withFileSizeKB(float $fileSizeKB): self
    {
        $self = clone $this;
        $self['fileSizeKB'] = $fileSizeKB;

        return $self;
    }

    public function withFileType(string $fileType): self
    {
        $self = clone $this;
        $self['fileType'] = $fileType;

        return $self;
    }

    public function withHeightPixels(float $heightPixels): self
    {
        $self = clone $this;
        $self['heightPixels'] = $heightPixels;

        return $self;
    }

    public function withURL(string $url): self
    {
        $self = clone $this;
        $self['url'] = $url;

        return $self;
    }

    public function withWidthPixels(float $widthPixels): self
    {
        $self = clone $this;
        $self['widthPixels'] = $widthPixels;

        return $self;
    }
}
