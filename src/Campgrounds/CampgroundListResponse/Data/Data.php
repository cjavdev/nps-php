<?php

declare(strict_types=1);

namespace Nps\Campgrounds\CampgroundListResponse\Data;

use Nps\Campgrounds\CampgroundListResponse\Data\Data\Accessibility;
use Nps\Campgrounds\CampgroundListResponse\Data\Data\Address;
use Nps\Campgrounds\CampgroundListResponse\Data\Data\Amenities;
use Nps\Campgrounds\CampgroundListResponse\Data\Data\Campsites;
use Nps\Campgrounds\CampgroundListResponse\Data\Data\Contacts;
use Nps\Campgrounds\CampgroundListResponse\Data\Data\Multimedia;
use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Contracts\BaseModel;

/**
 * @phpstan-import-type AccessibilityShape from \Nps\Campgrounds\CampgroundListResponse\Data\Data\Accessibility
 * @phpstan-import-type AddressShape from \Nps\Campgrounds\CampgroundListResponse\Data\Data\Address
 * @phpstan-import-type AmenitiesShape from \Nps\Campgrounds\CampgroundListResponse\Data\Data\Amenities
 * @phpstan-import-type CampsitesShape from \Nps\Campgrounds\CampgroundListResponse\Data\Data\Campsites
 * @phpstan-import-type ContactsShape from \Nps\Campgrounds\CampgroundListResponse\Data\Data\Contacts
 * @phpstan-import-type MultimediaShape from \Nps\Campgrounds\CampgroundListResponse\Data\Data\Multimedia
 *
 * @phpstan-type DataShape = array{
 *   id?: string|null,
 *   accessibility?: null|Accessibility|AccessibilityShape,
 *   addresses?: list<Address|AddressShape>|null,
 *   amenities?: null|Amenities|AmenitiesShape,
 *   campsites?: null|Campsites|CampsitesShape,
 *   contacts?: null|Contacts|ContactsShape,
 *   description?: string|null,
 *   directionsoverview?: string|null,
 *   directionsURL?: string|null,
 *   fees?: list<string>|null,
 *   geometryPoiID?: string|null,
 *   images?: list<string>|null,
 *   lastIndexedDate?: string|null,
 *   latitude?: string|null,
 *   latLong?: string|null,
 *   longitude?: string|null,
 *   multimedia?: list<Multimedia|MultimediaShape>|null,
 *   name?: string|null,
 *   operatingHours?: list<string>|null,
 *   parkCode?: string|null,
 *   regulationsoverview?: string|null,
 *   regulationsurl?: string|null,
 *   relevanceScore?: float|null,
 *   reservationsdescription?: string|null,
 *   reservationssitesfirstcome?: string|null,
 *   reservationssitesreservable?: string|null,
 *   reservationsurl?: string|null,
 *   weatheroverview?: string|null,
 * }
 */
final class Data implements BaseModel
{
    /** @use SdkModel<DataShape> */
    use SdkModel;

    /**
     * Campground identification string.
     */
    #[Optional]
    public ?string $id;

    /**
     * Detailed information about accessibility in the campground.
     */
    #[Optional]
    public ?Accessibility $accessibility;

    /**
     * Campground addresses (physical and mailing).
     *
     * @var list<Address>|null $addresses
     */
    #[Optional(list: Address::class)]
    public ?array $addresses;

    /**
     * Detailed information about amenities available in the campground.
     */
    #[Optional]
    public ?Amenities $amenities;

    /**
     * Detailed information about campsites.
     */
    #[Optional]
    public ?Campsites $campsites;

    /**
     * Information about contacting the park regarding this campground.
     */
    #[Optional]
    public ?Contacts $contacts;

    /**
     * General description of the campground.
     */
    #[Optional]
    public ?string $description;

    /**
     * General overview of how to get to the campground.
     */
    #[Optional]
    public ?string $directionsoverview;

    /**
     * Link to page, if available, that provides additional detail on getting to the campground.
     */
    #[Optional('directionsUrl')]
    public ?string $directionsURL;

    /**
     * Information about the cost of camping.
     *
     * @var list<string>|null $fees
     */
    #[Optional(list: 'string')]
    public ?array $fees;

    /**
     * Id for Geometry Point of Interest.
     */
    #[Optional('geometryPoiId')]
    public ?string $geometryPoiID;

    /**
     * Campground images.
     *
     * @var list<string>|null $images
     */
    #[Optional(list: 'string')]
    public ?array $images;

    /**
     * When this match was last indexed.
     */
    #[Optional]
    public ?string $lastIndexedDate;

    #[Optional]
    public ?string $latitude;

    /**
     * Campground GPS cordinates.
     */
    #[Optional]
    public ?string $latLong;

    #[Optional]
    public ?string $longitude;

    /** @var list<Multimedia>|null $multimedia */
    #[Optional(list: Multimedia::class)]
    public ?array $multimedia;

    /**
     * Campground name.
     */
    #[Optional]
    public ?string $name;

    /**
     * Hours and seasons when the campground is open or closed.
     *
     * @var list<string>|null $operatingHours
     */
    #[Optional(list: 'string')]
    public ?array $operatingHours;

    /**
     * A variable width character code used to identify a specific park.
     */
    #[Optional]
    public ?string $parkCode;

    /**
     * Information about campground regulations.
     */
    #[Optional]
    public ?string $regulationsoverview;

    /**
     * Link to additional information about campground regulations, if available.
     */
    #[Optional]
    public ?string $regulationsurl;

    /**
     * The relevance score is a numeric calculation of how much your item meets the criteria of your q (query text) search. This is normally coupled with a sort value of -relevanceScore. A higher value means that your item meets the criteria of the q search with a higher frequency and accuracy.
     */
    #[Optional]
    public ?float $relevanceScore;

    /**
     * General description of the reservation process, if applicable.
     */
    #[Optional]
    public ?string $reservationsdescription;

    /**
     * Number of sites that are first come, first served (cannot be booked in advance).
     */
    #[Optional]
    public ?string $reservationssitesfirstcome;

    /**
     * Number of sites that can be booked in advance.
     */
    #[Optional]
    public ?string $reservationssitesreservable;

    /**
     * Link to website where reservations can be made.
     */
    #[Optional]
    public ?string $reservationsurl;

    /**
     * General description of the weather in the campground over the course of a year.
     */
    #[Optional]
    public ?string $weatheroverview;

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
     * @param list<Address|AddressShape>|null $addresses
     * @param Amenities|AmenitiesShape|null $amenities
     * @param Campsites|CampsitesShape|null $campsites
     * @param Contacts|ContactsShape|null $contacts
     * @param list<string>|null $fees
     * @param list<string>|null $images
     * @param list<Multimedia|MultimediaShape>|null $multimedia
     * @param list<string>|null $operatingHours
     */
    public static function with(
        ?string $id = null,
        Accessibility|array|null $accessibility = null,
        ?array $addresses = null,
        Amenities|array|null $amenities = null,
        Campsites|array|null $campsites = null,
        Contacts|array|null $contacts = null,
        ?string $description = null,
        ?string $directionsoverview = null,
        ?string $directionsURL = null,
        ?array $fees = null,
        ?string $geometryPoiID = null,
        ?array $images = null,
        ?string $lastIndexedDate = null,
        ?string $latitude = null,
        ?string $latLong = null,
        ?string $longitude = null,
        ?array $multimedia = null,
        ?string $name = null,
        ?array $operatingHours = null,
        ?string $parkCode = null,
        ?string $regulationsoverview = null,
        ?string $regulationsurl = null,
        ?float $relevanceScore = null,
        ?string $reservationsdescription = null,
        ?string $reservationssitesfirstcome = null,
        ?string $reservationssitesreservable = null,
        ?string $reservationsurl = null,
        ?string $weatheroverview = null,
    ): self {
        $self = new self;

        null !== $id && $self['id'] = $id;
        null !== $accessibility && $self['accessibility'] = $accessibility;
        null !== $addresses && $self['addresses'] = $addresses;
        null !== $amenities && $self['amenities'] = $amenities;
        null !== $campsites && $self['campsites'] = $campsites;
        null !== $contacts && $self['contacts'] = $contacts;
        null !== $description && $self['description'] = $description;
        null !== $directionsoverview && $self['directionsoverview'] = $directionsoverview;
        null !== $directionsURL && $self['directionsURL'] = $directionsURL;
        null !== $fees && $self['fees'] = $fees;
        null !== $geometryPoiID && $self['geometryPoiID'] = $geometryPoiID;
        null !== $images && $self['images'] = $images;
        null !== $lastIndexedDate && $self['lastIndexedDate'] = $lastIndexedDate;
        null !== $latitude && $self['latitude'] = $latitude;
        null !== $latLong && $self['latLong'] = $latLong;
        null !== $longitude && $self['longitude'] = $longitude;
        null !== $multimedia && $self['multimedia'] = $multimedia;
        null !== $name && $self['name'] = $name;
        null !== $operatingHours && $self['operatingHours'] = $operatingHours;
        null !== $parkCode && $self['parkCode'] = $parkCode;
        null !== $regulationsoverview && $self['regulationsoverview'] = $regulationsoverview;
        null !== $regulationsurl && $self['regulationsurl'] = $regulationsurl;
        null !== $relevanceScore && $self['relevanceScore'] = $relevanceScore;
        null !== $reservationsdescription && $self['reservationsdescription'] = $reservationsdescription;
        null !== $reservationssitesfirstcome && $self['reservationssitesfirstcome'] = $reservationssitesfirstcome;
        null !== $reservationssitesreservable && $self['reservationssitesreservable'] = $reservationssitesreservable;
        null !== $reservationsurl && $self['reservationsurl'] = $reservationsurl;
        null !== $weatheroverview && $self['weatheroverview'] = $weatheroverview;

        return $self;
    }

    /**
     * Campground identification string.
     */
    public function withID(string $id): self
    {
        $self = clone $this;
        $self['id'] = $id;

        return $self;
    }

    /**
     * Detailed information about accessibility in the campground.
     *
     * @param Accessibility|AccessibilityShape $accessibility
     */
    public function withAccessibility(Accessibility|array $accessibility): self
    {
        $self = clone $this;
        $self['accessibility'] = $accessibility;

        return $self;
    }

    /**
     * Campground addresses (physical and mailing).
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
     * Detailed information about amenities available in the campground.
     *
     * @param Amenities|AmenitiesShape $amenities
     */
    public function withAmenities(Amenities|array $amenities): self
    {
        $self = clone $this;
        $self['amenities'] = $amenities;

        return $self;
    }

    /**
     * Detailed information about campsites.
     *
     * @param Campsites|CampsitesShape $campsites
     */
    public function withCampsites(Campsites|array $campsites): self
    {
        $self = clone $this;
        $self['campsites'] = $campsites;

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
     * General description of the campground.
     */
    public function withDescription(string $description): self
    {
        $self = clone $this;
        $self['description'] = $description;

        return $self;
    }

    /**
     * General overview of how to get to the campground.
     */
    public function withDirectionsoverview(string $directionsoverview): self
    {
        $self = clone $this;
        $self['directionsoverview'] = $directionsoverview;

        return $self;
    }

    /**
     * Link to page, if available, that provides additional detail on getting to the campground.
     */
    public function withDirectionsURL(string $directionsURL): self
    {
        $self = clone $this;
        $self['directionsURL'] = $directionsURL;

        return $self;
    }

    /**
     * Information about the cost of camping.
     *
     * @param list<string> $fees
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
     * Campground images.
     *
     * @param list<string> $images
     */
    public function withImages(array $images): self
    {
        $self = clone $this;
        $self['images'] = $images;

        return $self;
    }

    /**
     * When this match was last indexed.
     */
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
     * Campground GPS cordinates.
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
     * Campground name.
     */
    public function withName(string $name): self
    {
        $self = clone $this;
        $self['name'] = $name;

        return $self;
    }

    /**
     * Hours and seasons when the campground is open or closed.
     *
     * @param list<string> $operatingHours
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
     * Information about campground regulations.
     */
    public function withRegulationsoverview(string $regulationsoverview): self
    {
        $self = clone $this;
        $self['regulationsoverview'] = $regulationsoverview;

        return $self;
    }

    /**
     * Link to additional information about campground regulations, if available.
     */
    public function withRegulationsurl(string $regulationsurl): self
    {
        $self = clone $this;
        $self['regulationsurl'] = $regulationsurl;

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
     * General description of the reservation process, if applicable.
     */
    public function withReservationsdescription(
        string $reservationsdescription
    ): self {
        $self = clone $this;
        $self['reservationsdescription'] = $reservationsdescription;

        return $self;
    }

    /**
     * Number of sites that are first come, first served (cannot be booked in advance).
     */
    public function withReservationssitesfirstcome(
        string $reservationssitesfirstcome
    ): self {
        $self = clone $this;
        $self['reservationssitesfirstcome'] = $reservationssitesfirstcome;

        return $self;
    }

    /**
     * Number of sites that can be booked in advance.
     */
    public function withReservationssitesreservable(
        string $reservationssitesreservable
    ): self {
        $self = clone $this;
        $self['reservationssitesreservable'] = $reservationssitesreservable;

        return $self;
    }

    /**
     * Link to website where reservations can be made.
     */
    public function withReservationsurl(string $reservationsurl): self
    {
        $self = clone $this;
        $self['reservationsurl'] = $reservationsurl;

        return $self;
    }

    /**
     * General description of the weather in the campground over the course of a year.
     */
    public function withWeatheroverview(string $weatheroverview): self
    {
        $self = clone $this;
        $self['weatheroverview'] = $weatheroverview;

        return $self;
    }
}
