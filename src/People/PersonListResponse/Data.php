<?php

declare(strict_types=1);

namespace Nps\People\PersonListResponse;

use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Contracts\BaseModel;
use Nps\People\PersonListResponse\Data\Image;
use Nps\People\PersonListResponse\Data\QuickFact;
use Nps\People\PersonListResponse\Data\RelatedPark;

/**
 * @phpstan-import-type ImageShape from \Nps\People\PersonListResponse\Data\Image
 * @phpstan-import-type QuickFactShape from \Nps\People\PersonListResponse\Data\QuickFact
 * @phpstan-import-type RelatedParkShape from \Nps\People\PersonListResponse\Data\RelatedPark
 *
 * @phpstan-type DataShape = array{
 *   id?: string|null,
 *   bodyText?: string|null,
 *   firstName?: string|null,
 *   geometryPoiID?: string|null,
 *   images?: list<Image|ImageShape>|null,
 *   lastName?: string|null,
 *   latitude?: string|null,
 *   latLong?: string|null,
 *   listingDescription?: string|null,
 *   longitude?: string|null,
 *   middleName?: string|null,
 *   quickFacts?: list<QuickFact|QuickFactShape>|null,
 *   relatedOrganizations?: list<mixed>|null,
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
     * Uniquely identifies person record.
     */
    #[Optional]
    public ?string $id;

    #[Optional]
    public ?string $bodyText;

    #[Optional]
    public ?string $firstName;

    /**
     * Id for Geometry Point of Interest.
     */
    #[Optional('geometryPoiId')]
    public ?string $geometryPoiID;

    /** @var list<Image>|null $images */
    #[Optional(list: Image::class)]
    public ?array $images;

    #[Optional]
    public ?string $lastName;

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
    public ?string $middleName;

    /** @var list<QuickFact>|null $quickFacts */
    #[Optional(list: QuickFact::class)]
    public ?array $quickFacts;

    /** @var list<mixed>|null $relatedOrganizations */
    #[Optional(list: 'mixed')]
    public ?array $relatedOrganizations;

    /**
     * Parks which have a tie to this asset.
     *
     * @var list<RelatedPark>|null $relatedParks
     */
    #[Optional(list: RelatedPark::class)]
    public ?array $relatedParks;

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
     * @param list<Image|ImageShape>|null $images
     * @param list<QuickFact|QuickFactShape>|null $quickFacts
     * @param list<mixed>|null $relatedOrganizations
     * @param list<RelatedPark|RelatedParkShape>|null $relatedParks
     */
    public static function with(
        ?string $id = null,
        ?string $bodyText = null,
        ?string $firstName = null,
        ?string $geometryPoiID = null,
        ?array $images = null,
        ?string $lastName = null,
        ?string $latitude = null,
        ?string $latLong = null,
        ?string $listingDescription = null,
        ?string $longitude = null,
        ?string $middleName = null,
        ?array $quickFacts = null,
        ?array $relatedOrganizations = null,
        ?array $relatedParks = null,
        ?string $title = null,
        ?string $url = null,
    ): self {
        $self = new self;

        null !== $id && $self['id'] = $id;
        null !== $bodyText && $self['bodyText'] = $bodyText;
        null !== $firstName && $self['firstName'] = $firstName;
        null !== $geometryPoiID && $self['geometryPoiID'] = $geometryPoiID;
        null !== $images && $self['images'] = $images;
        null !== $lastName && $self['lastName'] = $lastName;
        null !== $latitude && $self['latitude'] = $latitude;
        null !== $latLong && $self['latLong'] = $latLong;
        null !== $listingDescription && $self['listingDescription'] = $listingDescription;
        null !== $longitude && $self['longitude'] = $longitude;
        null !== $middleName && $self['middleName'] = $middleName;
        null !== $quickFacts && $self['quickFacts'] = $quickFacts;
        null !== $relatedOrganizations && $self['relatedOrganizations'] = $relatedOrganizations;
        null !== $relatedParks && $self['relatedParks'] = $relatedParks;
        null !== $title && $self['title'] = $title;
        null !== $url && $self['url'] = $url;

        return $self;
    }

    /**
     * Uniquely identifies person record.
     */
    public function withID(string $id): self
    {
        $self = clone $this;
        $self['id'] = $id;

        return $self;
    }

    public function withBodyText(string $bodyText): self
    {
        $self = clone $this;
        $self['bodyText'] = $bodyText;

        return $self;
    }

    public function withFirstName(string $firstName): self
    {
        $self = clone $this;
        $self['firstName'] = $firstName;

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
     * @param list<Image|ImageShape> $images
     */
    public function withImages(array $images): self
    {
        $self = clone $this;
        $self['images'] = $images;

        return $self;
    }

    public function withLastName(string $lastName): self
    {
        $self = clone $this;
        $self['lastName'] = $lastName;

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

    public function withMiddleName(string $middleName): self
    {
        $self = clone $this;
        $self['middleName'] = $middleName;

        return $self;
    }

    /**
     * @param list<QuickFact|QuickFactShape> $quickFacts
     */
    public function withQuickFacts(array $quickFacts): self
    {
        $self = clone $this;
        $self['quickFacts'] = $quickFacts;

        return $self;
    }

    /**
     * @param list<mixed> $relatedOrganizations
     */
    public function withRelatedOrganizations(array $relatedOrganizations): self
    {
        $self = clone $this;
        $self['relatedOrganizations'] = $relatedOrganizations;

        return $self;
    }

    /**
     * Parks which have a tie to this asset.
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
