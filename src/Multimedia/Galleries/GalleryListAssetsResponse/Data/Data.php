<?php

declare(strict_types=1);

namespace Nps\Multimedia\Galleries\GalleryListAssetsResponse\Data;

use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Contracts\BaseModel;
use Nps\Multimedia\Galleries\GalleryListAssetsResponse\Data\Data\ConstraintsInfo;
use Nps\Multimedia\Galleries\GalleryListAssetsResponse\Data\Data\FileInfo;
use Nps\Multimedia\Galleries\GalleryListAssetsResponse\Data\Data\RelatedPark;

/**
 * @phpstan-import-type ConstraintsInfoShape from \Nps\Multimedia\Galleries\GalleryListAssetsResponse\Data\Data\ConstraintsInfo
 * @phpstan-import-type FileInfoShape from \Nps\Multimedia\Galleries\GalleryListAssetsResponse\Data\Data\FileInfo
 * @phpstan-import-type RelatedParkShape from \Nps\Multimedia\Galleries\GalleryListAssetsResponse\Data\Data\RelatedPark
 *
 * @phpstan-type DataShape = array{
 *   id?: string|null,
 *   altText?: string|null,
 *   constraintsInfo?: null|ConstraintsInfo|ConstraintsInfoShape,
 *   copyright?: string|null,
 *   credit?: string|null,
 *   description?: string|null,
 *   fileInfo?: null|FileInfo|FileInfoShape,
 *   ordinal?: string|null,
 *   permalinkURL?: string|null,
 *   relatedParks?: list<RelatedPark|RelatedParkShape>|null,
 *   tags?: list<string>|null,
 *   title?: string|null,
 * }
 */
final class Data implements BaseModel
{
    /** @use SdkModel<DataShape> */
    use SdkModel;

    #[Optional]
    public ?string $id;

    #[Optional]
    public ?string $altText;

    #[Optional]
    public ?ConstraintsInfo $constraintsInfo;

    #[Optional]
    public ?string $copyright;

    #[Optional]
    public ?string $credit;

    #[Optional]
    public ?string $description;

    #[Optional]
    public ?FileInfo $fileInfo;

    #[Optional]
    public ?string $ordinal;

    #[Optional('permalinkUrl')]
    public ?string $permalinkURL;

    /** @var list<RelatedPark>|null $relatedParks */
    #[Optional(list: RelatedPark::class)]
    public ?array $relatedParks;

    /** @var list<string>|null $tags */
    #[Optional(list: 'string')]
    public ?array $tags;

    #[Optional]
    public ?string $title;

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
     * @param FileInfo|FileInfoShape|null $fileInfo
     * @param list<RelatedPark|RelatedParkShape>|null $relatedParks
     * @param list<string>|null $tags
     */
    public static function with(
        ?string $id = null,
        ?string $altText = null,
        ConstraintsInfo|array|null $constraintsInfo = null,
        ?string $copyright = null,
        ?string $credit = null,
        ?string $description = null,
        FileInfo|array|null $fileInfo = null,
        ?string $ordinal = null,
        ?string $permalinkURL = null,
        ?array $relatedParks = null,
        ?array $tags = null,
        ?string $title = null,
    ): self {
        $self = new self;

        null !== $id && $self['id'] = $id;
        null !== $altText && $self['altText'] = $altText;
        null !== $constraintsInfo && $self['constraintsInfo'] = $constraintsInfo;
        null !== $copyright && $self['copyright'] = $copyright;
        null !== $credit && $self['credit'] = $credit;
        null !== $description && $self['description'] = $description;
        null !== $fileInfo && $self['fileInfo'] = $fileInfo;
        null !== $ordinal && $self['ordinal'] = $ordinal;
        null !== $permalinkURL && $self['permalinkURL'] = $permalinkURL;
        null !== $relatedParks && $self['relatedParks'] = $relatedParks;
        null !== $tags && $self['tags'] = $tags;
        null !== $title && $self['title'] = $title;

        return $self;
    }

    public function withID(string $id): self
    {
        $self = clone $this;
        $self['id'] = $id;

        return $self;
    }

    public function withAltText(string $altText): self
    {
        $self = clone $this;
        $self['altText'] = $altText;

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

    public function withCredit(string $credit): self
    {
        $self = clone $this;
        $self['credit'] = $credit;

        return $self;
    }

    public function withDescription(string $description): self
    {
        $self = clone $this;
        $self['description'] = $description;

        return $self;
    }

    /**
     * @param FileInfo|FileInfoShape $fileInfo
     */
    public function withFileInfo(FileInfo|array $fileInfo): self
    {
        $self = clone $this;
        $self['fileInfo'] = $fileInfo;

        return $self;
    }

    public function withOrdinal(string $ordinal): self
    {
        $self = clone $this;
        $self['ordinal'] = $ordinal;

        return $self;
    }

    public function withPermalinkURL(string $permalinkURL): self
    {
        $self = clone $this;
        $self['permalinkURL'] = $permalinkURL;

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
}
