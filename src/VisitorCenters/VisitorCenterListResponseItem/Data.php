<?php

declare(strict_types=1);

namespace Nps\VisitorCenters\VisitorCenterListResponseItem;

use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Contracts\BaseModel;
use Nps\VisitorCenters\VisitorCenterListResponseItem\Data\Address;
use Nps\VisitorCenters\VisitorCenterListResponseItem\Data\Image;
use Nps\VisitorCenters\VisitorCenterListResponseItem\Data\Multimedia;
use Nps\VisitorCenters\VisitorCenterListResponseItem\Data\OperatingHour;
use Nps\VisitorCenters\VisitorCenterListResponseItem\Data\PassportStampImage;

/**
 * @phpstan-import-type AddressShape from \Nps\VisitorCenters\VisitorCenterListResponseItem\Data\Address
 * @phpstan-import-type ImageShape from \Nps\VisitorCenters\VisitorCenterListResponseItem\Data\Image
 * @phpstan-import-type MultimediaShape from \Nps\VisitorCenters\VisitorCenterListResponseItem\Data\Multimedia
 * @phpstan-import-type OperatingHourShape from \Nps\VisitorCenters\VisitorCenterListResponseItem\Data\OperatingHour
 * @phpstan-import-type PassportStampImageShape from \Nps\VisitorCenters\VisitorCenterListResponseItem\Data\PassportStampImage
 *
 * @phpstan-type DataShape = array{
 *   id?: string|null,
 *   addresses?: list<Address|AddressShape>|null,
 *   amenities?: list<string>|null,
 *   audioDescription?: string|null,
 *   contacts?: list<string>|null,
 *   description?: string|null,
 *   directionsInfo?: string|null,
 *   directionsURL?: string|null,
 *   geometryPoiID?: string|null,
 *   images?: list<Image|ImageShape>|null,
 *   isPassportStampLocation?: bool|null,
 *   lastIndexedDate?: string|null,
 *   latitude?: string|null,
 *   latLong?: string|null,
 *   longitude?: string|null,
 *   multimedia?: list<Multimedia|MultimediaShape>|null,
 *   name?: string|null,
 *   operatingHours?: list<OperatingHour|OperatingHourShape>|null,
 *   parkCode?: string|null,
 *   passportStampImages?: list<PassportStampImage|PassportStampImageShape>|null,
 *   passportStampLocationDescription?: string|null,
 *   relevanceScore?: float|null,
 *   url?: string|null,
 * }
 */
final class Data implements BaseModel
{
    /** @use SdkModel<DataShape> */
    use SdkModel;

    /**
     * ID.
     */
    #[Optional]
    public ?string $id;

    /**
     * Visitor Center addresses (physical and mailing).
     *
     * @var list<Address>|null $addresses
     */
    #[Optional(list: Address::class)]
    public ?array $addresses;

    /** @var list<string>|null $amenities */
    #[Optional(list: 'string')]
    public ?array $amenities;

    /**
     * audio description of the facility.
     */
    #[Optional]
    public ?string $audioDescription;

    /**
     * Information about contacting staff at the facility.
     *
     * @var list<string>|null $contacts
     */
    #[Optional(list: 'string')]
    public ?array $contacts;

    /**
     * General description of the facility.
     */
    #[Optional]
    public ?string $description;

    /**
     * General overview of how to get to the facility.
     */
    #[Optional]
    public ?string $directionsInfo;

    /**
     * Link to page, if available, that provides additional detail on getting to the facility.
     */
    #[Optional('directionsUrl')]
    public ?string $directionsURL;

    /**
     * Id for Geometry Point of Interest.
     */
    #[Optional('geometryPoiId')]
    public ?string $geometryPoiID;

    /** @var list<Image>|null $images */
    #[Optional(list: Image::class)]
    public ?array $images;

    /**
     * 0 or 1.
     */
    #[Optional]
    public ?bool $isPassportStampLocation;

    #[Optional]
    public ?string $lastIndexedDate;

    #[Optional]
    public ?string $latitude;

    /**
     * Facility latitude and longitude.
     */
    #[Optional]
    public ?string $latLong;

    #[Optional]
    public ?string $longitude;

    /** @var list<Multimedia>|null $multimedia */
    #[Optional(list: Multimedia::class)]
    public ?array $multimedia;

    /**
     * Facility name.
     */
    #[Optional]
    public ?string $name;

    /**
     * Hours and seasons when the facility is open or closed.
     *
     * @var list<OperatingHour>|null $operatingHours
     */
    #[Optional(list: OperatingHour::class)]
    public ?array $operatingHours;

    /**
     * A variable width character code used to identify a specific park.
     */
    #[Optional]
    public ?string $parkCode;

    /** @var list<PassportStampImage>|null $passportStampImages */
    #[Optional(list: PassportStampImage::class)]
    public ?array $passportStampImages;

    #[Optional]
    public ?string $passportStampLocationDescription;

    /**
     * The relevance score is a numeric calculation of how much your item meets the criteria of your q (query text) search. This is normally coupled with a sort value of -relevanceScore. A higher value means that your item meets the criteria of the q search with a higher frequency and accuracy.
     */
    #[Optional]
    public ?float $relevanceScore;

    /**
     * The URL corresponding to the visitor center.
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
     * @param list<Address|AddressShape>|null $addresses
     * @param list<string>|null $amenities
     * @param list<string>|null $contacts
     * @param list<Image|ImageShape>|null $images
     * @param list<Multimedia|MultimediaShape>|null $multimedia
     * @param list<OperatingHour|OperatingHourShape>|null $operatingHours
     * @param list<PassportStampImage|PassportStampImageShape>|null $passportStampImages
     */
    public static function with(
        ?string $id = null,
        ?array $addresses = null,
        ?array $amenities = null,
        ?string $audioDescription = null,
        ?array $contacts = null,
        ?string $description = null,
        ?string $directionsInfo = null,
        ?string $directionsURL = null,
        ?string $geometryPoiID = null,
        ?array $images = null,
        ?bool $isPassportStampLocation = null,
        ?string $lastIndexedDate = null,
        ?string $latitude = null,
        ?string $latLong = null,
        ?string $longitude = null,
        ?array $multimedia = null,
        ?string $name = null,
        ?array $operatingHours = null,
        ?string $parkCode = null,
        ?array $passportStampImages = null,
        ?string $passportStampLocationDescription = null,
        ?float $relevanceScore = null,
        ?string $url = null,
    ): self {
        $self = new self;

        null !== $id && $self['id'] = $id;
        null !== $addresses && $self['addresses'] = $addresses;
        null !== $amenities && $self['amenities'] = $amenities;
        null !== $audioDescription && $self['audioDescription'] = $audioDescription;
        null !== $contacts && $self['contacts'] = $contacts;
        null !== $description && $self['description'] = $description;
        null !== $directionsInfo && $self['directionsInfo'] = $directionsInfo;
        null !== $directionsURL && $self['directionsURL'] = $directionsURL;
        null !== $geometryPoiID && $self['geometryPoiID'] = $geometryPoiID;
        null !== $images && $self['images'] = $images;
        null !== $isPassportStampLocation && $self['isPassportStampLocation'] = $isPassportStampLocation;
        null !== $lastIndexedDate && $self['lastIndexedDate'] = $lastIndexedDate;
        null !== $latitude && $self['latitude'] = $latitude;
        null !== $latLong && $self['latLong'] = $latLong;
        null !== $longitude && $self['longitude'] = $longitude;
        null !== $multimedia && $self['multimedia'] = $multimedia;
        null !== $name && $self['name'] = $name;
        null !== $operatingHours && $self['operatingHours'] = $operatingHours;
        null !== $parkCode && $self['parkCode'] = $parkCode;
        null !== $passportStampImages && $self['passportStampImages'] = $passportStampImages;
        null !== $passportStampLocationDescription && $self['passportStampLocationDescription'] = $passportStampLocationDescription;
        null !== $relevanceScore && $self['relevanceScore'] = $relevanceScore;
        null !== $url && $self['url'] = $url;

        return $self;
    }

    /**
     * ID.
     */
    public function withID(string $id): self
    {
        $self = clone $this;
        $self['id'] = $id;

        return $self;
    }

    /**
     * Visitor Center addresses (physical and mailing).
     *
     * @param list<Address|AddressShape> $addresses
     */
    public function withAddresses(array $addresses): self
    {
        $self = clone $this;
        $self['addresses'] = $addresses;

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

    /**
     * audio description of the facility.
     */
    public function withAudioDescription(string $audioDescription): self
    {
        $self = clone $this;
        $self['audioDescription'] = $audioDescription;

        return $self;
    }

    /**
     * Information about contacting staff at the facility.
     *
     * @param list<string> $contacts
     */
    public function withContacts(array $contacts): self
    {
        $self = clone $this;
        $self['contacts'] = $contacts;

        return $self;
    }

    /**
     * General description of the facility.
     */
    public function withDescription(string $description): self
    {
        $self = clone $this;
        $self['description'] = $description;

        return $self;
    }

    /**
     * General overview of how to get to the facility.
     */
    public function withDirectionsInfo(string $directionsInfo): self
    {
        $self = clone $this;
        $self['directionsInfo'] = $directionsInfo;

        return $self;
    }

    /**
     * Link to page, if available, that provides additional detail on getting to the facility.
     */
    public function withDirectionsURL(string $directionsURL): self
    {
        $self = clone $this;
        $self['directionsURL'] = $directionsURL;

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

    /**
     * 0 or 1.
     */
    public function withIsPassportStampLocation(
        bool $isPassportStampLocation
    ): self {
        $self = clone $this;
        $self['isPassportStampLocation'] = $isPassportStampLocation;

        return $self;
    }

    public function withLastIndexedDate(string $lastIndexedDate): self
    {
        $self = clone $this;
        $self['lastIndexedDate'] = $lastIndexedDate;

        return $self;
    }

    public function withLatitude(string $latitude): self
    {
        $self = clone $this;
        $self['latitude'] = $latitude;

        return $self;
    }

    /**
     * Facility latitude and longitude.
     */
    public function withLatLong(string $latLong): self
    {
        $self = clone $this;
        $self['latLong'] = $latLong;

        return $self;
    }

    public function withLongitude(string $longitude): self
    {
        $self = clone $this;
        $self['longitude'] = $longitude;

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

    /**
     * Facility name.
     */
    public function withName(string $name): self
    {
        $self = clone $this;
        $self['name'] = $name;

        return $self;
    }

    /**
     * Hours and seasons when the facility is open or closed.
     *
     * @param list<OperatingHour|OperatingHourShape> $operatingHours
     */
    public function withOperatingHours(array $operatingHours): self
    {
        $self = clone $this;
        $self['operatingHours'] = $operatingHours;

        return $self;
    }

    /**
     * A variable width character code used to identify a specific park.
     */
    public function withParkCode(string $parkCode): self
    {
        $self = clone $this;
        $self['parkCode'] = $parkCode;

        return $self;
    }

    /**
     * @param list<PassportStampImage|PassportStampImageShape> $passportStampImages
     */
    public function withPassportStampImages(array $passportStampImages): self
    {
        $self = clone $this;
        $self['passportStampImages'] = $passportStampImages;

        return $self;
    }

    public function withPassportStampLocationDescription(
        string $passportStampLocationDescription
    ): self {
        $self = clone $this;
        $self['passportStampLocationDescription'] = $passportStampLocationDescription;

        return $self;
    }

    /**
     * The relevance score is a numeric calculation of how much your item meets the criteria of your q (query text) search. This is normally coupled with a sort value of -relevanceScore. A higher value means that your item meets the criteria of the q search with a higher frequency and accuracy.
     */
    public function withRelevanceScore(float $relevanceScore): self
    {
        $self = clone $this;
        $self['relevanceScore'] = $relevanceScore;

        return $self;
    }

    /**
     * The URL corresponding to the visitor center.
     */
    public function withURL(string $url): self
    {
        $self = clone $this;
        $self['url'] = $url;

        return $self;
    }
}
