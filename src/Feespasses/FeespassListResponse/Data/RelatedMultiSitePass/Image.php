<?php

declare(strict_types=1);

namespace Nps\Feespasses\FeespassListResponse\Data\RelatedMultiSitePass;

use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Contracts\BaseModel;

/**
 * @phpstan-type ImageShape = array{
 *   altText?: string|null,
 *   caption?: string|null,
 *   credit?: string|null,
 *   title?: string|null,
 *   url?: string|null,
 * }
 */
final class Image implements BaseModel
{
    /** @use SdkModel<ImageShape> */
    use SdkModel;

    #[Optional]
    public ?string $altText;

    #[Optional]
    public ?string $caption;

    #[Optional]
    public ?string $credit;

    #[Optional]
    public ?string $title;

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
        ?string $altText = null,
        ?string $caption = null,
        ?string $credit = null,
        ?string $title = null,
        ?string $url = null,
    ): self {
        $self = new self;

        null !== $altText && $self['altText'] = $altText;
        null !== $caption && $self['caption'] = $caption;
        null !== $credit && $self['credit'] = $credit;
        null !== $title && $self['title'] = $title;
        null !== $url && $self['url'] = $url;

        return $self;
    }

    public function withAltText(string $altText): self
    {
        $self = clone $this;
        $self['altText'] = $altText;

        return $self;
    }

    public function withCaption(string $caption): self
    {
        $self = clone $this;
        $self['caption'] = $caption;

        return $self;
    }

    public function withCredit(string $credit): self
    {
        $self = clone $this;
        $self['credit'] = $credit;

        return $self;
    }

    public function withTitle(string $title): self
    {
        $self = clone $this;
        $self['title'] = $title;

        return $self;
    }

    public function withURL(string $url): self
    {
        $self = clone $this;
        $self['url'] = $url;

        return $self;
    }
}
