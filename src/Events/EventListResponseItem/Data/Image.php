<?php

declare(strict_types=1);

namespace Nps\Events\EventListResponseItem\Data;

use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Contracts\BaseModel;

/**
 * Event image.
 *
 * @phpstan-type ImageShape = array{
 *   altText?: string|null,
 *   caption?: string|null,
 *   credit?: string|null,
 *   imageID?: string|null,
 *   ordinal?: string|null,
 *   path?: string|null,
 *   title?: string|null,
 *   url?: string|null,
 * }
 */
final class Image implements BaseModel
{
    /** @use SdkModel<ImageShape> */
    use SdkModel;

    /**
     * Image alt text.
     */
    #[Optional]
    public ?string $altText;

    /**
     * Image caption.
     */
    #[Optional]
    public ?string $caption;

    /**
     * Image credit.
     */
    #[Optional]
    public ?string $credit;

    #[Optional('imageId')]
    public ?string $imageID;

    #[Optional]
    public ?string $ordinal;

    #[Optional]
    public ?string $path;

    /**
     * Image title.
     */
    #[Optional]
    public ?string $title;

    /**
     * Image URL.
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
        ?string $altText = null,
        ?string $caption = null,
        ?string $credit = null,
        ?string $imageID = null,
        ?string $ordinal = null,
        ?string $path = null,
        ?string $title = null,
        ?string $url = null,
    ): self {
        $self = new self;

        null !== $altText && $self['altText'] = $altText;
        null !== $caption && $self['caption'] = $caption;
        null !== $credit && $self['credit'] = $credit;
        null !== $imageID && $self['imageID'] = $imageID;
        null !== $ordinal && $self['ordinal'] = $ordinal;
        null !== $path && $self['path'] = $path;
        null !== $title && $self['title'] = $title;
        null !== $url && $self['url'] = $url;

        return $self;
    }

    /**
     * Image alt text.
     */
    public function withAltText(string $altText): self
    {
        $self = clone $this;
        $self['altText'] = $altText;

        return $self;
    }

    /**
     * Image caption.
     */
    public function withCaption(string $caption): self
    {
        $self = clone $this;
        $self['caption'] = $caption;

        return $self;
    }

    /**
     * Image credit.
     */
    public function withCredit(string $credit): self
    {
        $self = clone $this;
        $self['credit'] = $credit;

        return $self;
    }

    public function withImageID(string $imageID): self
    {
        $self = clone $this;
        $self['imageID'] = $imageID;

        return $self;
    }

    public function withOrdinal(string $ordinal): self
    {
        $self = clone $this;
        $self['ordinal'] = $ordinal;

        return $self;
    }

    public function withPath(string $path): self
    {
        $self = clone $this;
        $self['path'] = $path;

        return $self;
    }

    /**
     * Image title.
     */
    public function withTitle(string $title): self
    {
        $self = clone $this;
        $self['title'] = $title;

        return $self;
    }

    /**
     * Image URL.
     */
    public function withURL(string $url): self
    {
        $self = clone $this;
        $self['url'] = $url;

        return $self;
    }
}
