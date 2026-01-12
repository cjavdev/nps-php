<?php

declare(strict_types=1);

namespace Nps\ParkingLots\ParkingLotListResponse\Data;

use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Contracts\BaseModel;
use Nps\ParkingLots\ParkingLotListResponse\Data\Data\Accessibility;
use Nps\ParkingLots\ParkingLotListResponse\Data\Data\Contacts;
use Nps\ParkingLots\ParkingLotListResponse\Data\Data\Fee;
use Nps\ParkingLots\ParkingLotListResponse\Data\Data\LiveStatus;
use Nps\ParkingLots\ParkingLotListResponse\Data\Data\OperatingHour;
use Nps\ParkingLots\ParkingLotListResponse\Data\Data\RelatedPark;

/**
 * @phpstan-import-type AccessibilityShape from \Nps\ParkingLots\ParkingLotListResponse\Data\Data\Accessibility
 * @phpstan-import-type ContactsShape from \Nps\ParkingLots\ParkingLotListResponse\Data\Data\Contacts
 * @phpstan-import-type FeeShape from \Nps\ParkingLots\ParkingLotListResponse\Data\Data\Fee
 * @phpstan-import-type LiveStatusShape from \Nps\ParkingLots\ParkingLotListResponse\Data\Data\LiveStatus
 * @phpstan-import-type OperatingHourShape from \Nps\ParkingLots\ParkingLotListResponse\Data\Data\OperatingHour
 * @phpstan-import-type RelatedParkShape from \Nps\ParkingLots\ParkingLotListResponse\Data\Data\RelatedPark
 *
 * @phpstan-type DataShape = array{
 *   id?: string|null,
 *   accessibility?: null|Accessibility|AccessibilityShape,
 *   altName?: string|null,
 *   contacts?: null|Contacts|ContactsShape,
 *   description?: string|null,
 *   fees?: list<Fee|FeeShape>|null,
 *   geometryPoiID?: string|null,
 *   images?: list<mixed>|null,
 *   latitude?: string|null,
 *   liveStatus?: null|LiveStatus|LiveStatusShape,
 *   longitude?: string|null,
 *   managedByOrganization?: string|null,
 *   name?: string|null,
 *   operatingHours?: list<OperatingHour|OperatingHourShape>|null,
 *   relatedParks?: list<RelatedPark|RelatedParkShape>|null,
 *   timeZone?: string|null,
 *   webcamURL?: string|null,
 * }
 */
final class Data implements BaseModel
{
    /** @use SdkModel<DataShape> */
    use SdkModel;

    /**
     * Unique identifier for the parking lot.
     */
    #[Optional]
    public ?string $id;

    #[Optional]
    public ?Accessibility $accessibility;

    /**
     * alternative names for this parklinglot.
     */
    #[Optional]
    public ?string $altName;

    /**
     * Information about contacting the park regarding this campground.
     */
    #[Optional]
    public ?Contacts $contacts;

    /**
     * General description of the parkinglot.
     */
    #[Optional]
    public ?string $description;

    /** @var list<Fee>|null $fees */
    #[Optional(list: Fee::class)]
    public ?array $fees;

    /**
     * Id for Geometry Point of Interest.
     */
    #[Optional('geometryPoiId')]
    public ?string $geometryPoiID;

    /** @var list<mixed>|null $images */
    #[Optional(list: 'mixed')]
    public ?array $images;

    /**
     * The latitude of the parkinglot location.
     */
    #[Optional]
    public ?string $latitude;

    #[Optional]
    public ?LiveStatus $liveStatus;

    /**
     * The longitude of the parkinglot location.
     */
    #[Optional]
    public ?string $longitude;

    /**
     * which organization manages this parkinglot.
     */
    #[Optional]
    public ?string $managedByOrganization;

    /**
     * Parkinglot name.
     */
    #[Optional]
    public ?string $name;

    /**
     * the operating hours for this parkinglot.
     *
     * @var list<OperatingHour>|null $operatingHours
     */
    #[Optional(list: OperatingHour::class)]
    public ?array $operatingHours;

    /**
     * which parks are associated with this parkinglot.
     *
     * @var list<RelatedPark>|null $relatedParks
     */
    #[Optional(list: RelatedPark::class)]
    public ?array $relatedParks;

    /**
     * the time zone in which this parkinglot is found.
     */
    #[Optional]
    public ?string $timeZone;

    /**
     * URL of parkinglot webcam.
     */
    #[Optional('webcamUrl')]
    public ?string $webcamURL;

    public function __construct()
    {
        $this->initialize();
    }

    /**
     * Construct an instance from the required parameters.
     *
     * You must use named parameters to construct any parameters with a default value.
     *
     * @param Accessibility|AccessibilityShape|null $accessibility
     * @param Contacts|ContactsShape|null $contacts
     * @param list<Fee|FeeShape>|null $fees
     * @param list<mixed>|null $images
     * @param LiveStatus|LiveStatusShape|null $liveStatus
     * @param list<OperatingHour|OperatingHourShape>|null $operatingHours
     * @param list<RelatedPark|RelatedParkShape>|null $relatedParks
     */
    public static function with(
        ?string $id = null,
        Accessibility|array|null $accessibility = null,
        ?string $altName = null,
        Contacts|array|null $contacts = null,
        ?string $description = null,
        ?array $fees = null,
        ?string $geometryPoiID = null,
        ?array $images = null,
        ?string $latitude = null,
        LiveStatus|array|null $liveStatus = null,
        ?string $longitude = null,
        ?string $managedByOrganization = null,
        ?string $name = null,
        ?array $operatingHours = null,
        ?array $relatedParks = null,
        ?string $timeZone = null,
        ?string $webcamURL = null,
    ): self {
        $self = new self;

        null !== $id && $self['id'] = $id;
        null !== $accessibility && $self['accessibility'] = $accessibility;
        null !== $altName && $self['altName'] = $altName;
        null !== $contacts && $self['contacts'] = $contacts;
        null !== $description && $self['description'] = $description;
        null !== $fees && $self['fees'] = $fees;
        null !== $geometryPoiID && $self['geometryPoiID'] = $geometryPoiID;
        null !== $images && $self['images'] = $images;
        null !== $latitude && $self['latitude'] = $latitude;
        null !== $liveStatus && $self['liveStatus'] = $liveStatus;
        null !== $longitude && $self['longitude'] = $longitude;
        null !== $managedByOrganization && $self['managedByOrganization'] = $managedByOrganization;
        null !== $name && $self['name'] = $name;
        null !== $operatingHours && $self['operatingHours'] = $operatingHours;
        null !== $relatedParks && $self['relatedParks'] = $relatedParks;
        null !== $timeZone && $self['timeZone'] = $timeZone;
        null !== $webcamURL && $self['webcamURL'] = $webcamURL;

        return $self;
    }

    /**
     * Unique identifier for the parking lot.
     */
    public function withID(string $id): self
    {
        $self = clone $this;
        $self['id'] = $id;

        return $self;
    }

    /**
     * @param Accessibility|AccessibilityShape $accessibility
     */
    public function withAccessibility(Accessibility|array $accessibility): self
    {
        $self = clone $this;
        $self['accessibility'] = $accessibility;

        return $self;
    }

    /**
     * alternative names for this parklinglot.
     */
    public function withAltName(string $altName): self
    {
        $self = clone $this;
        $self['altName'] = $altName;

        return $self;
    }

    /**
     * Information about contacting the park regarding this campground.
     *
     * @param Contacts|ContactsShape $contacts
     */
    public function withContacts(Contacts|array $contacts): self
    {
        $self = clone $this;
        $self['contacts'] = $contacts;

        return $self;
    }

    /**
     * General description of the parkinglot.
     */
    public function withDescription(string $description): self
    {
        $self = clone $this;
        $self['description'] = $description;

        return $self;
    }

    /**
     * @param list<Fee|FeeShape> $fees
     */
    public function withFees(array $fees): self
    {
        $self = clone $this;
        $self['fees'] = $fees;

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
     * @param list<mixed> $images
     */
    public function withImages(array $images): self
    {
        $self = clone $this;
        $self['images'] = $images;

        return $self;
    }

    /**
     * The latitude of the parkinglot location.
     */
    public function withLatitude(string $latitude): self
    {
        $self = clone $this;
        $self['latitude'] = $latitude;

        return $self;
    }

    /**
     * @param LiveStatus|LiveStatusShape $liveStatus
     */
    public function withLiveStatus(LiveStatus|array $liveStatus): self
    {
        $self = clone $this;
        $self['liveStatus'] = $liveStatus;

        return $self;
    }

    /**
     * The longitude of the parkinglot location.
     */
    public function withLongitude(string $longitude): self
    {
        $self = clone $this;
        $self['longitude'] = $longitude;

        return $self;
    }

    /**
     * which organization manages this parkinglot.
     */
    public function withManagedByOrganization(
        string $managedByOrganization
    ): self {
        $self = clone $this;
        $self['managedByOrganization'] = $managedByOrganization;

        return $self;
    }

    /**
     * Parkinglot name.
     */
    public function withName(string $name): self
    {
        $self = clone $this;
        $self['name'] = $name;

        return $self;
    }

    /**
     * the operating hours for this parkinglot.
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
     * which parks are associated with this parkinglot.
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
     * the time zone in which this parkinglot is found.
     */
    public function withTimeZone(string $timeZone): self
    {
        $self = clone $this;
        $self['timeZone'] = $timeZone;

        return $self;
    }

    /**
     * URL of parkinglot webcam.
     */
    public function withWebcamURL(string $webcamURL): self
    {
        $self = clone $this;
        $self['webcamURL'] = $webcamURL;

        return $self;
    }
}
