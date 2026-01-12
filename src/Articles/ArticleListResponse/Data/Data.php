<?php

declare(strict_types=1);

namespace Nps\Articles\ArticleListResponse\Data;

use Nps\Articles\ArticleListResponse\Data\Data\ListingImage;
use Nps\Articles\ArticleListResponse\Data\Data\RelatedPark;
use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Contracts\BaseModel;

/**
 * @phpstan-import-type ListingImageShape from \Nps\Articles\ArticleListResponse\Data\Data\ListingImage
 * @phpstan-import-type RelatedParkShape from \Nps\Articles\ArticleListResponse\Data\Data\RelatedPark
 *
 * @phpstan-type DataShape = array{
 *   id?: string|null,
 *   geometryPoiID?: string|null,
 *   latitude?: float|null,
 *   latLong?: string|null,
 *   listingDescription?: string|null,
 *   listingImage?: null|ListingImage|ListingImageShape,
 *   longitude?: float|null,
 *   relatedParks?: list<RelatedPark|RelatedParkShape>|null,
 *   title?: string|null,
 *   url?: string|null,
 * }
 */
final class Data implements BaseModel
{
    /** @use SdkModel<DataShape> */
    use SdkModel;

    /**
     * Unique identifier for this article.
     */
    #[Optional]
    public ?string $id;

    /**
     * Id for Geometry Point of Interest.
     */
    #[Optional('geometryPoiId')]
    public ?string $geometryPoiID;

    #[Optional]
    public ?float $latitude;

    /**
     * geolocation coordinates.
     */
    #[Optional]
    public ?string $latLong;

    /**
     * Short description of the content.
     */
    #[Optional]
    public ?string $listingDescription;

    /**
     * Small image that accompanies the short description.
     */
    #[Optional]
    public ?ListingImage $listingImage;

    #[Optional]
    public ?float $longitude;

    /**
     * Parks that have a tie to this asset in a comma-delimited list.
     *
     * @var list<RelatedPark>|null $relatedParks
     */
    #[Optional(list: RelatedPark::class)]
    public ?array $relatedParks;

    /**
     * Article title.
     */
    #[Optional]
    public ?string $title;

    /**
     * Link to article.
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
     * @param ListingImage|ListingImageShape|null $listingImage
     * @param list<RelatedPark|RelatedParkShape>|null $relatedParks
     */
    public static function with(
        ?string $id = null,
        ?string $geometryPoiID = null,
        ?float $latitude = null,
        ?string $latLong = null,
        ?string $listingDescription = null,
        ListingImage|array|null $listingImage = null,
        ?float $longitude = null,
        ?array $relatedParks = null,
        ?string $title = null,
        ?string $url = null,
    ): self {
        $self = new self;

        null !== $id && $self['id'] = $id;
        null !== $geometryPoiID && $self['geometryPoiID'] = $geometryPoiID;
        null !== $latitude && $self['latitude'] = $latitude;
        null !== $latLong && $self['latLong'] = $latLong;
        null !== $listingDescription && $self['listingDescription'] = $listingDescription;
        null !== $listingImage && $self['listingImage'] = $listingImage;
        null !== $longitude && $self['longitude'] = $longitude;
        null !== $relatedParks && $self['relatedParks'] = $relatedParks;
        null !== $title && $self['title'] = $title;
        null !== $url && $self['url'] = $url;

        return $self;
    }

    /**
     * Unique identifier for this article.
     */
    public function withID(string $id): self
    {
        $self = clone $this;
        $self['id'] = $id;

        return $self;
    }

    /**
     * Id for Geometry Point of Interest.
     */
    public function withGeometryPoiID(string $geometryPoiID): self
    {
        $self = clone $this;
        $self['geometryPoiID'] = $geometryPoiID;

        return $self;
    }

    public function withLatitude(float $latitude): self
    {
        $self = clone $this;
        $self['latitude'] = $latitude;

        return $self;
    }

    /**
     * geolocation coordinates.
     */
    public function withLatLong(string $latLong): self
    {
        $self = clone $this;
        $self['latLong'] = $latLong;

        return $self;
    }

    /**
     * Short description of the content.
     */
    public function withListingDescription(string $listingDescription): self
    {
        $self = clone $this;
        $self['listingDescription'] = $listingDescription;

        return $self;
    }

    /**
     * Small image that accompanies the short description.
     *
     * @param ListingImage|ListingImageShape $listingImage
     */
    public function withListingImage(ListingImage|array $listingImage): self
    {
        $self = clone $this;
        $self['listingImage'] = $listingImage;

        return $self;
    }

    public function withLongitude(float $longitude): self
    {
        $self = clone $this;
        $self['longitude'] = $longitude;

        return $self;
    }

    /**
     * Parks that have a tie to this asset in a comma-delimited list.
     *
     * @param list<RelatedPark|RelatedParkShape> $relatedParks
     */
    public function withRelatedParks(array $relatedParks): self
    {
        $self = clone $this;
        $self['relatedParks'] = $relatedParks;

        return $self;
    }

    /**
     * Article title.
     */
    public function withTitle(string $title): self
    {
        $self = clone $this;
        $self['title'] = $title;

        return $self;
    }

    /**
     * Link to article.
     */
    public function withURL(string $url): self
    {
        $self = clone $this;
        $self['url'] = $url;

        return $self;
    }
}
