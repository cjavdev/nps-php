<?php

declare(strict_types=1);

namespace Nps\Multimedia\Galleries\GalleryListAssetsResponse\Data;

use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Contracts\BaseModel;

/**
 * @phpstan-type FileInfoShape = array{
 *   fileSizeKB?: string|null,
 *   fileType?: string|null,
 *   heightPixels?: string|null,
 *   url?: string|null,
 *   widthPixels?: string|null,
 * }
 */
final class FileInfo implements BaseModel
{
    /** @use SdkModel<FileInfoShape> */
    use SdkModel;

    #[Optional('fileSizeKb')]
    public ?string $fileSizeKB;

    #[Optional]
    public ?string $fileType;

    #[Optional]
    public ?string $heightPixels;

    #[Optional]
    public ?string $url;

    #[Optional]
    public ?string $widthPixels;

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
        ?string $fileSizeKB = null,
        ?string $fileType = null,
        ?string $heightPixels = null,
        ?string $url = null,
        ?string $widthPixels = null,
    ): self {
        $self = new self;

        null !== $fileSizeKB && $self['fileSizeKB'] = $fileSizeKB;
        null !== $fileType && $self['fileType'] = $fileType;
        null !== $heightPixels && $self['heightPixels'] = $heightPixels;
        null !== $url && $self['url'] = $url;
        null !== $widthPixels && $self['widthPixels'] = $widthPixels;

        return $self;
    }

    public function withFileSizeKB(string $fileSizeKB): self
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

    public function withHeightPixels(string $heightPixels): self
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

    public function withWidthPixels(string $widthPixels): self
    {
        $self = clone $this;
        $self['widthPixels'] = $widthPixels;

        return $self;
    }
}
