<?php

declare(strict_types=1);

namespace Nps\Multimedia\MultimediaListAudioResponse\Data;

use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Contracts\BaseModel;

/**
 * @phpstan-type VersionsShape = array{
 *   fileSize?: float|null, fileType?: string|null, url?: string|null
 * }
 */
final class Versions implements BaseModel
{
    /** @use SdkModel<VersionsShape> */
    use SdkModel;

    #[Optional]
    public ?float $fileSize;

    #[Optional]
    public ?string $fileType;

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
        ?float $fileSize = null,
        ?string $fileType = null,
        ?string $url = null
    ): self {
        $self = new self;

        null !== $fileSize && $self['fileSize'] = $fileSize;
        null !== $fileType && $self['fileType'] = $fileType;
        null !== $url && $self['url'] = $url;

        return $self;
    }

    public function withFileSize(float $fileSize): self
    {
        $self = clone $this;
        $self['fileSize'] = $fileSize;

        return $self;
    }

    public function withFileType(string $fileType): self
    {
        $self = clone $this;
        $self['fileType'] = $fileType;

        return $self;
    }

    public function withURL(string $url): self
    {
        $self = clone $this;
        $self['url'] = $url;

        return $self;
    }
}
