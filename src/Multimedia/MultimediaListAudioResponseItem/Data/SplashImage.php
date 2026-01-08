<?php

declare(strict_types=1);

namespace Nps\Multimedia\MultimediaListAudioResponseItem\Data;

use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Contracts\BaseModel;

/**
 * @phpstan-type SplashImageShape = array{url?: string|null}
 */
final class SplashImage implements BaseModel
{
    /** @use SdkModel<SplashImageShape> */
    use SdkModel;

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
    public static function with(?string $url = null): self
    {
        $self = new self;

        null !== $url && $self['url'] = $url;

        return $self;
    }

    public function withURL(string $url): self
    {
        $self = clone $this;
        $self['url'] = $url;

        return $self;
    }
}
