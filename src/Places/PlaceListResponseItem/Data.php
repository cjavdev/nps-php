<?php

declare(strict_types=1);

namespace Nps\Places\PlaceListResponseItem;

use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Contracts\BaseModel;
use Nps\Places\PlaceListResponseItem\Data\Multimedia;
use Nps\Places\PlaceListResponseItem\Data\RelatedPark;

/**
 * @phpstan-import-type MultimediaShape from \Nps\Places\PlaceListResponseItem\Data\Multimedia
 * @phpstan-import-type RelatedParkShape from \Nps\Places\PlaceListResponseItem\Data\RelatedPark
 *
 * @phpstan-type DataShape = array{
 *   id?: string|null,
 *   amenities?: list<string>|null,
 *   audioDescription?: string|null,
 *   bodyText?: string|null,
 *   geometryPoiID?: string|null,
 *   images?: list<string>|null,
 *   isManagedByNps?: string|null,
 *   isOpenToPublic?: string|null,
 *   latitude?: string|null,
 *   latLong?: string|null,
 *   listingDescription?: string|null,
 *   longitude?: string|null,
 *   managedByOrg?: string|null,
 *   managedByURL?: string|null,
 *   multimedia?: list<Multimedia|MultimediaShape>|null,
 *   npmapID?: string|null,
 *   quickFacts?: string|null,
 *   relatedOrganizations?: list<string>|null,
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

    /**
     * Uniquely identifies place record.
     */
    #[Optional]
    public ?string $id;

    /** @var list<string>|null $amenities */
    #[Optional(list: 'string')]
    public ?array $amenities;

    #[Optional]
    public ?string $audioDescription;

    /**
     * HTML and text.
     */
    #[Optional]
    public ?string $bodyText;

    /**
     * Id for Geometry Point of Interest.
     */
    #[Optional('geometryPoiId')]
    public ?string $geometryPoiID;

    /** @var list<string>|null $images */
    #[Optional(list: 'string')]
    public ?array $images;

    #[Optional]
    public ?string $isManagedByNps;

    #[Optional]
    public ?string $isOpenToPublic;

    #[Optional]
    public ?string $latitude;

    /**
     * geospatial coordinates.
     */
    #[Optional]
    public ?string $latLong;

    /**
     * Short description of the content.
     */
    #[Optional]
    public ?string $listingDescription;

    #[Optional]
    public ?string $longitude;

    #[Optional]
    public ?string $managedByOrg;

    #[Optional('managedByUrl')]
    public ?string $managedByURL;

    /** @var list<Multimedia>|null $multimedia */
    #[Optional(list: Multimedia::class)]
    public ?array $multimedia;

    #[Optional('npmapId')]
    public ?string $npmapID;

    #[Optional]
    public ?string $quickFacts;

    /** @var list<string>|null $relatedOrganizations */
    #[Optional(list: 'string')]
    public ?array $relatedOrganizations;

    /**
     * Parks that have a tie to this asset in a comma-delimited list.
     *
     * @var list<RelatedPark>|null $relatedParks
     */
    #[Optional(list: RelatedPark::class)]
    public ?array $relatedParks;

    /** @var list<string>|null $tags */
    #[Optional(list: 'string')]
    public ?array $tags;

    /**
     * Asset title.
     */
    #[Optional]
    public ?string $title;

    /**
     * Link to more information about the asset, if available.
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
     * @param list<string>|null $amenities
     * @param list<string>|null $images
     * @param list<Multimedia|MultimediaShape>|null $multimedia
     * @param list<string>|null $relatedOrganizations
     * @param list<RelatedPark|RelatedParkShape>|null $relatedParks
     * @param list<string>|null $tags
     */
    public static function with(
        ?string $id = null,
        ?array $amenities = null,
        ?string $audioDescription = null,
        ?string $bodyText = null,
        ?string $geometryPoiID = null,
        ?array $images = null,
        ?string $isManagedByNps = null,
        ?string $isOpenToPublic = null,
        ?string $latitude = null,
        ?string $latLong = null,
        ?string $listingDescription = null,
        ?string $longitude = null,
        ?string $managedByOrg = null,
        ?string $managedByURL = null,
        ?array $multimedia = null,
        ?string $npmapID = null,
        ?string $quickFacts = null,
        ?array $relatedOrganizations = null,
        ?array $relatedParks = null,
        ?array $tags = null,
        ?string $title = null,
        ?string $url = null,
    ): self {
        $self = new self;

        null !== $id && $self['id'] = $id;
        null !== $amenities && $self['amenities'] = $amenities;
        null !== $audioDescription && $self['audioDescription'] = $audioDescription;
        null !== $bodyText && $self['bodyText'] = $bodyText;
        null !== $geometryPoiID && $self['geometryPoiID'] = $geometryPoiID;
        null !== $images && $self['images'] = $images;
        null !== $isManagedByNps && $self['isManagedByNps'] = $isManagedByNps;
        null !== $isOpenToPublic && $self['isOpenToPublic'] = $isOpenToPublic;
        null !== $latitude && $self['latitude'] = $latitude;
        null !== $latLong && $self['latLong'] = $latLong;
        null !== $listingDescription && $self['listingDescription'] = $listingDescription;
        null !== $longitude && $self['longitude'] = $longitude;
        null !== $managedByOrg && $self['managedByOrg'] = $managedByOrg;
        null !== $managedByURL && $self['managedByURL'] = $managedByURL;
        null !== $multimedia && $self['multimedia'] = $multimedia;
        null !== $npmapID && $self['npmapID'] = $npmapID;
        null !== $quickFacts && $self['quickFacts'] = $quickFacts;
        null !== $relatedOrganizations && $self['relatedOrganizations'] = $relatedOrganizations;
        null !== $relatedParks && $self['relatedParks'] = $relatedParks;
        null !== $tags && $self['tags'] = $tags;
        null !== $title && $self['title'] = $title;
        null !== $url && $self['url'] = $url;

        return $self;
    }

    /**
     * Uniquely identifies place record.
     */
    public function withID(string $id): self
    {
        $self = clone $this;
        $self['id'] = $id;

        return $self;
    }

    /**
     * @param list<string> $amenities
     */
    public function withAmenities(array $amenities): self
    {
        $self = clone $this;
        $self['amenities'] = $amenities;

        return $self;
    }

    public function withAudioDescription(string $audioDescription): self
    {
        $self = clone $this;
        $self['audioDescription'] = $audioDescription;

        return $self;
    }

    /**
     * HTML and text.
     */
    public function withBodyText(string $bodyText): self
    {
        $self = clone $this;
        $self['bodyText'] = $bodyText;

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

    /**
     * @param list<string> $images
     */
    public function withImages(array $images): self
    {
        $self = clone $this;
        $self['images'] = $images;

        return $self;
    }

    public function withIsManagedByNps(string $isManagedByNps): self
    {
        $self = clone $this;
        $self['isManagedByNps'] = $isManagedByNps;

        return $self;
    }

    public function withIsOpenToPublic(string $isOpenToPublic): self
    {
        $self = clone $this;
        $self['isOpenToPublic'] = $isOpenToPublic;

        return $self;
    }

    public function withLatitude(string $latitude): self
    {
        $self = clone $this;
        $self['latitude'] = $latitude;

        return $self;
    }

    /**
     * geospatial coordinates.
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

    public function withLongitude(string $longitude): self
    {
        $self = clone $this;
        $self['longitude'] = $longitude;

        return $self;
    }

    public function withManagedByOrg(string $managedByOrg): self
    {
        $self = clone $this;
        $self['managedByOrg'] = $managedByOrg;

        return $self;
    }

    public function withManagedByURL(string $managedByURL): self
    {
        $self = clone $this;
        $self['managedByURL'] = $managedByURL;

        return $self;
    }

    /**
     * @param list<Multimedia|MultimediaShape> $multimedia
     */
    public function withMultimedia(array $multimedia): self
    {
        $self = clone $this;
        $self['multimedia'] = $multimedia;

        return $self;
    }

    public function withNpmapID(string $npmapID): self
    {
        $self = clone $this;
        $self['npmapID'] = $npmapID;

        return $self;
    }

    public function withQuickFacts(string $quickFacts): self
    {
        $self = clone $this;
        $self['quickFacts'] = $quickFacts;

        return $self;
    }

    /**
     * @param list<string> $relatedOrganizations
     */
    public function withRelatedOrganizations(array $relatedOrganizations): self
    {
        $self = clone $this;
        $self['relatedOrganizations'] = $relatedOrganizations;

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
     * @param list<string> $tags
     */
    public function withTags(array $tags): self
    {
        $self = clone $this;
        $self['tags'] = $tags;

        return $self;
    }

    /**
     * Asset title.
     */
    public function withTitle(string $title): self
    {
        $self = clone $this;
        $self['title'] = $title;

        return $self;
    }

    /**
     * Link to more information about the asset, if available.
     */
    public function withURL(string $url): self
    {
        $self = clone $this;
        $self['url'] = $url;

        return $self;
    }
}
