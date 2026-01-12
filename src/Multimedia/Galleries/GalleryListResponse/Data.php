<?php

declare(strict_types=1);

namespace Nps\Multimedia\Galleries\GalleryListResponse;

use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Contracts\BaseModel;
use Nps\Multimedia\Galleries\GalleryListResponse\Data\ConstraintsInfo;
use Nps\Multimedia\Galleries\GalleryListResponse\Data\Image;
use Nps\Multimedia\Galleries\GalleryListResponse\Data\RelatedPark;

/**
 * @phpstan-import-type ConstraintsInfoShape from \Nps\Multimedia\Galleries\GalleryListResponse\Data\ConstraintsInfo
 * @phpstan-import-type ImageShape from \Nps\Multimedia\Galleries\GalleryListResponse\Data\Image
 * @phpstan-import-type RelatedParkShape from \Nps\Multimedia\Galleries\GalleryListResponse\Data\RelatedPark
 *
 * @phpstan-type DataShape = array{
 *   id?: string|null,
 *   assetCount?: string|null,
 *   constraintsInfo?: null|ConstraintsInfo|ConstraintsInfoShape,
 *   copyright?: string|null,
 *   description?: string|null,
 *   images?: list<Image|ImageShape>|null,
 *   relatedParks?: list<RelatedPark|RelatedParkShape>|null,
 *   tags?: list<string>|null,
 *   title?: string|null,
 *   url?: string|null,
 * }
 */
final class Data implements BaseModel
{
    /** @use SdkModel<DataShape> */
    use SdkModel;

    #[Optional]
    public ?string $id;

    #[Optional]
    public ?string $assetCount;

    #[Optional]
    public ?ConstraintsInfo $constraintsInfo;

    #[Optional]
    public ?string $copyright;

    #[Optional]
    public ?string $description;

    /** @var list<Image>|null $images */
    #[Optional(list: Image::class)]
    public ?array $images;

    /** @var list<RelatedPark>|null $relatedParks */
    #[Optional(list: RelatedPark::class)]
    public ?array $relatedParks;

    /** @var list<string>|null $tags */
    #[Optional(list: 'string')]
    public ?array $tags;

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
     * @param ConstraintsInfo|ConstraintsInfoShape|null $constraintsInfo
     * @param list<Image|ImageShape>|null $images
     * @param list<RelatedPark|RelatedParkShape>|null $relatedParks
     * @param list<string>|null $tags
     */
    public static function with(
        ?string $id = null,
        ?string $assetCount = null,
        ConstraintsInfo|array|null $constraintsInfo = null,
        ?string $copyright = null,
        ?string $description = null,
        ?array $images = null,
        ?array $relatedParks = null,
        ?array $tags = null,
        ?string $title = null,
        ?string $url = null,
    ): self {
        $self = new self;

        null !== $id && $self['id'] = $id;
        null !== $assetCount && $self['assetCount'] = $assetCount;
        null !== $constraintsInfo && $self['constraintsInfo'] = $constraintsInfo;
        null !== $copyright && $self['copyright'] = $copyright;
        null !== $description && $self['description'] = $description;
        null !== $images && $self['images'] = $images;
        null !== $relatedParks && $self['relatedParks'] = $relatedParks;
        null !== $tags && $self['tags'] = $tags;
        null !== $title && $self['title'] = $title;
        null !== $url && $self['url'] = $url;

        return $self;
    }

    public function withID(string $id): self
    {
        $self = clone $this;
        $self['id'] = $id;

        return $self;
    }

    public function withAssetCount(string $assetCount): self
    {
        $self = clone $this;
        $self['assetCount'] = $assetCount;

        return $self;
    }

    /**
     * @param ConstraintsInfo|ConstraintsInfoShape $constraintsInfo
     */
    public function withConstraintsInfo(
        ConstraintsInfo|array $constraintsInfo
    ): self {
        $self = clone $this;
        $self['constraintsInfo'] = $constraintsInfo;

        return $self;
    }

    public function withCopyright(string $copyright): self
    {
        $self = clone $this;
        $self['copyright'] = $copyright;

        return $self;
    }

    public function withDescription(string $description): self
    {
        $self = clone $this;
        $self['description'] = $description;

        return $self;
    }

    /**
     * @param list<Image|ImageShape> $images
     */
    public function withImages(array $images): self
    {
        $self = clone $this;
        $self['images'] = $images;

        return $self;
    }

    /**
     * @param list<RelatedPark|RelatedParkShape> $relatedParks
     */
    public function withRelatedParks(array $relatedParks): self
    {
        $self = clone $this;
        $self['relatedParks'] = $relatedParks;

        return $self;
    }

    /**
     * @param list<string> $tags
     */
    public function withTags(array $tags): self
    {
        $self = clone $this;
        $self['tags'] = $tags;

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
