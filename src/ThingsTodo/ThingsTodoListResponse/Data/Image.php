<?php

declare(strict_types=1);

namespace Nps\ThingsTodo\ThingsTodoListResponse\Data;

use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Contracts\BaseModel;
use Nps\ThingsTodo\ThingsTodoListResponse\Data\Image\Crop;

/**
 * @phpstan-import-type CropShape from \Nps\ThingsTodo\ThingsTodoListResponse\Data\Image\Crop
 *
 * @phpstan-type ImageShape = array{
 *   altText?: string|null,
 *   caption?: string|null,
 *   credit?: string|null,
 *   crops?: list<Crop|CropShape>|null,
 *   title?: string|null,
 *   url?: string|null,
 * }
 */
final class Image implements BaseModel
{
    /** @use SdkModel<ImageShape> */
    use SdkModel;

    /**
     * alternate text for this image.
     */
    #[Optional]
    public ?string $altText;

    /**
     * caption for this image.
     */
    #[Optional]
    public ?string $caption;

    /**
     * credit for this image.
     */
    #[Optional]
    public ?string $credit;

    /** @var list<Crop>|null $crops */
    #[Optional(list: Crop::class)]
    public ?array $crops;

    /**
     * title for this image.
     */
    #[Optional]
    public ?string $title;

    /**
     * URL to this image.
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
     *
     * @param list<Crop|CropShape>|null $crops
     */
    public static function with(
        ?string $altText = null,
        ?string $caption = null,
        ?string $credit = null,
        ?array $crops = null,
        ?string $title = null,
        ?string $url = null,
    ): self {
        $self = new self;

        null !== $altText && $self['altText'] = $altText;
        null !== $caption && $self['caption'] = $caption;
        null !== $credit && $self['credit'] = $credit;
        null !== $crops && $self['crops'] = $crops;
        null !== $title && $self['title'] = $title;
        null !== $url && $self['url'] = $url;

        return $self;
    }

    /**
     * alternate text for this image.
     */
    public function withAltText(string $altText): self
    {
        $self = clone $this;
        $self['altText'] = $altText;

        return $self;
    }

    /**
     * caption for this image.
     */
    public function withCaption(string $caption): self
    {
        $self = clone $this;
        $self['caption'] = $caption;

        return $self;
    }

    /**
     * credit for this image.
     */
    public function withCredit(string $credit): self
    {
        $self = clone $this;
        $self['credit'] = $credit;

        return $self;
    }

    /**
     * @param list<Crop|CropShape> $crops
     */
    public function withCrops(array $crops): self
    {
        $self = clone $this;
        $self['crops'] = $crops;

        return $self;
    }

    /**
     * title for this image.
     */
    public function withTitle(string $title): self
    {
        $self = clone $this;
        $self['title'] = $title;

        return $self;
    }

    /**
     * URL to this image.
     */
    public function withURL(string $url): self
    {
        $self = clone $this;
        $self['url'] = $url;

        return $self;
    }
}
