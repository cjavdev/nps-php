<?php

declare(strict_types=1);

namespace Nps\Multimedia\MultimediaListVideosResponse\Data\Data;

use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Contracts\BaseModel;

/**
 * @phpstan-type CaptionFileShape = array{
 *   fileType?: string|null, language?: string|null, url?: string|null
 * }
 */
final class CaptionFile implements BaseModel
{
    /** @use SdkModel<CaptionFileShape> */
    use SdkModel;

    #[Optional]
    public ?string $fileType;

    #[Optional]
    public ?string $language;

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
        ?string $fileType = null,
        ?string $language = null,
        ?string $url = null
    ): self {
        $self = new self;

        null !== $fileType && $self['fileType'] = $fileType;
        null !== $language && $self['language'] = $language;
        null !== $url && $self['url'] = $url;

        return $self;
    }

    public function withFileType(string $fileType): self
    {
        $self = clone $this;
        $self['fileType'] = $fileType;

        return $self;
    }

    public function withLanguage(string $language): self
    {
        $self = clone $this;
        $self['language'] = $language;

        return $self;
    }

    public function withURL(string $url): self
    {
        $self = clone $this;
        $self['url'] = $url;

        return $self;
    }
}
