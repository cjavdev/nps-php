<?php

declare(strict_types=1);

namespace Nps\VisitorCenters\VisitorCenterListResponseItem\Data;

use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Contracts\BaseModel;
use Nps\VisitorCenters\VisitorCenterListResponseItem\Data\PassportStampImage\Crop;

/**
 * @phpstan-import-type CropShape from \Nps\VisitorCenters\VisitorCenterListResponseItem\Data\PassportStampImage\Crop
 *
 * @phpstan-type PassportStampImageShape = array{
 *   altText?: string|null,
 *   caption?: string|null,
 *   credit?: string|null,
 *   crops?: list<Crop|CropShape>|null,
 *   description?: string|null,
 *   title?: string|null,
 *   url?: string|null,
 * }
 */
final class PassportStampImage implements BaseModel
{
    /** @use SdkModel<PassportStampImageShape> */
    use SdkModel;

    #[Optional]
    public ?string $altText;

    #[Optional]
    public ?string $caption;

    #[Optional]
    public ?string $credit;

    /** @var list<Crop>|null $crops */
    #[Optional(list: Crop::class)]
    public ?array $crops;

    #[Optional]
    public ?string $description;

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
     *
     * @param list<Crop|CropShape>|null $crops
     */
    public static function with(
        ?string $altText = null,
        ?string $caption = null,
        ?string $credit = null,
        ?array $crops = null,
        ?string $description = null,
        ?string $title = null,
        ?string $url = null,
    ): self {
        $self = new self;

        null !== $altText && $self['altText'] = $altText;
        null !== $caption && $self['caption'] = $caption;
        null !== $credit && $self['credit'] = $credit;
        null !== $crops && $self['crops'] = $crops;
        null !== $description && $self['description'] = $description;
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

    /**
     * @param list<Crop|CropShape> $crops
     */
    public function withCrops(array $crops): self
    {
        $self = clone $this;
        $self['crops'] = $crops;

        return $self;
    }

    public function withDescription(string $description): self
    {
        $self = clone $this;
        $self['description'] = $description;

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
