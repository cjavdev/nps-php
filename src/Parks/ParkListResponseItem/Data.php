<?php

declare(strict_types=1);

namespace Nps\Parks\ParkListResponseItem;

use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Contracts\BaseModel;
use Nps\Parks\ParkListResponseItem\Data\Activity;
use Nps\Parks\ParkListResponseItem\Data\Address;
use Nps\Parks\ParkListResponseItem\Data\Contacts;
use Nps\Parks\ParkListResponseItem\Data\EntranceFee;
use Nps\Parks\ParkListResponseItem\Data\EntrancePass;
use Nps\Parks\ParkListResponseItem\Data\Image;
use Nps\Parks\ParkListResponseItem\Data\Multimedia;
use Nps\Parks\ParkListResponseItem\Data\OperatingHour;
use Nps\Parks\ParkListResponseItem\Data\Topic;

/**
 * @phpstan-import-type ActivityShape from \Nps\Parks\ParkListResponseItem\Data\Activity
 * @phpstan-import-type AddressShape from \Nps\Parks\ParkListResponseItem\Data\Address
 * @phpstan-import-type ContactsShape from \Nps\Parks\ParkListResponseItem\Data\Contacts
 * @phpstan-import-type EntranceFeeShape from \Nps\Parks\ParkListResponseItem\Data\EntranceFee
 * @phpstan-import-type EntrancePassShape from \Nps\Parks\ParkListResponseItem\Data\EntrancePass
 * @phpstan-import-type ImageShape from \Nps\Parks\ParkListResponseItem\Data\Image
 * @phpstan-import-type MultimediaShape from \Nps\Parks\ParkListResponseItem\Data\Multimedia
 * @phpstan-import-type OperatingHourShape from \Nps\Parks\ParkListResponseItem\Data\OperatingHour
 * @phpstan-import-type TopicShape from \Nps\Parks\ParkListResponseItem\Data\Topic
 *
 * @phpstan-type DataShape = array{
 *   id?: string|null,
 *   activities?: list<Activity|ActivityShape>|null,
 *   addresses?: list<Address|AddressShape>|null,
 *   contacts?: null|Contacts|ContactsShape,
 *   description?: string|null,
 *   designation?: string|null,
 *   directionsInfo?: string|null,
 *   directionsURL?: string|null,
 *   entranceFees?: list<EntranceFee|EntranceFeeShape>|null,
 *   entrancePasses?: list<EntrancePass|EntrancePassShape>|null,
 *   fullName?: string|null,
 *   images?: list<Image|ImageShape>|null,
 *   latitude?: string|null,
 *   latLong?: string|null,
 *   longitude?: string|null,
 *   multimedia?: list<Multimedia|MultimediaShape>|null,
 *   name?: string|null,
 *   operatingHours?: list<OperatingHour|OperatingHourShape>|null,
 *   parkCode?: string|null,
 *   relevanceScore?: float|null,
 *   states?: string|null,
 *   topics?: list<Topic|TopicShape>|null,
 *   url?: string|null,
 *   weatherInfo?: string|null,
 * }
 */
final class Data implements BaseModel
{
    /** @use SdkModel<DataShape> */
    use SdkModel;

    /**
     * Park identification string.
     */
    #[Optional]
    public ?string $id;

    /** @var list<Activity>|null $activities */
    #[Optional(list: Activity::class)]
    public ?array $activities;

    /**
     * Park addresses (physical and mailing).
     *
     * @var list<Address>|null $addresses
     */
    #[Optional(list: Address::class)]
    public ?array $addresses;

    /**
     * Information about contacting the park.
     */
    #[Optional]
    public ?Contacts $contacts;

    /**
     * Introductory paragraph from the park homepage.
     */
    #[Optional]
    public ?string $description;

    /**
     * Type of designation (eg, national park, national monument, national recreation area, etc).
     */
    #[Optional]
    public ?string $designation;

    /**
     * General overview of how to get to the park.
     */
    #[Optional]
    public ?string $directionsInfo;

    /**
     * Link to page, if available, that provides additional detail on getting to the park.
     */
    #[Optional('directionsUrl')]
    public ?string $directionsURL;

    /**
     * Fee for entering the park.
     *
     * @var list<EntranceFee>|null $entranceFees
     */
    #[Optional(list: EntranceFee::class)]
    public ?array $entranceFees;

    /**
     * Passes available to provide entry into the park.
     *
     * @var list<EntrancePass>|null $entrancePasses
     */
    #[Optional(list: EntrancePass::class)]
    public ?array $entrancePasses;

    /**
     * Full park name (with designation).
     */
    #[Optional]
    public ?string $fullName;

    /**
     * Park images.
     *
     * @var list<Image>|null $images
     */
    #[Optional(list: Image::class)]
    public ?array $images;

    #[Optional]
    public ?string $latitude;

    /**
     * Park GPS cordinates.
     */
    #[Optional]
    public ?string $latLong;

    #[Optional]
    public ?string $longitude;

    /** @var list<Multimedia>|null $multimedia */
    #[Optional(list: Multimedia::class)]
    public ?array $multimedia;

    /**
     * Short park name (no designation).
     */
    #[Optional]
    public ?string $name;

    /**
     * Hours and seasons when the park is open or closed.
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

    /**
     * The relevance score is a numeric calculation of how much your item meets the criteria of your q (query text) search. This is normally coupled with a sort value of -relevanceScore. A higher value means that your item meets the criteria of the q search with a higher frequency and accuracy.
     */
    #[Optional]
    public ?float $relevanceScore;

    /**
     * State(s) the park is located in (comma-delimited list).
     */
    #[Optional]
    public ?string $states;

    /** @var list<Topic>|null $topics */
    #[Optional(list: Topic::class)]
    public ?array $topics;

    /**
     * Park Website.
     */
    #[Optional]
    public ?string $url;

    /**
     * General description of the weather in the park over the course of a year.
     */
    #[Optional]
    public ?string $weatherInfo;

    public function __construct()
    {
        $this->initialize();
    }

    /**
     * Construct an instance from the required parameters.
     *
     * You must use named parameters to construct any parameters with a default value.
     *
     * @param list<Activity|ActivityShape>|null $activities
     * @param list<Address|AddressShape>|null $addresses
     * @param Contacts|ContactsShape|null $contacts
     * @param list<EntranceFee|EntranceFeeShape>|null $entranceFees
     * @param list<EntrancePass|EntrancePassShape>|null $entrancePasses
     * @param list<Image|ImageShape>|null $images
     * @param list<Multimedia|MultimediaShape>|null $multimedia
     * @param list<OperatingHour|OperatingHourShape>|null $operatingHours
     * @param list<Topic|TopicShape>|null $topics
     */
    public static function with(
        ?string $id = null,
        ?array $activities = null,
        ?array $addresses = null,
        Contacts|array|null $contacts = null,
        ?string $description = null,
        ?string $designation = null,
        ?string $directionsInfo = null,
        ?string $directionsURL = null,
        ?array $entranceFees = null,
        ?array $entrancePasses = null,
        ?string $fullName = null,
        ?array $images = null,
        ?string $latitude = null,
        ?string $latLong = null,
        ?string $longitude = null,
        ?array $multimedia = null,
        ?string $name = null,
        ?array $operatingHours = null,
        ?string $parkCode = null,
        ?float $relevanceScore = null,
        ?string $states = null,
        ?array $topics = null,
        ?string $url = null,
        ?string $weatherInfo = null,
    ): self {
        $self = new self;

        null !== $id && $self['id'] = $id;
        null !== $activities && $self['activities'] = $activities;
        null !== $addresses && $self['addresses'] = $addresses;
        null !== $contacts && $self['contacts'] = $contacts;
        null !== $description && $self['description'] = $description;
        null !== $designation && $self['designation'] = $designation;
        null !== $directionsInfo && $self['directionsInfo'] = $directionsInfo;
        null !== $directionsURL && $self['directionsURL'] = $directionsURL;
        null !== $entranceFees && $self['entranceFees'] = $entranceFees;
        null !== $entrancePasses && $self['entrancePasses'] = $entrancePasses;
        null !== $fullName && $self['fullName'] = $fullName;
        null !== $images && $self['images'] = $images;
        null !== $latitude && $self['latitude'] = $latitude;
        null !== $latLong && $self['latLong'] = $latLong;
        null !== $longitude && $self['longitude'] = $longitude;
        null !== $multimedia && $self['multimedia'] = $multimedia;
        null !== $name && $self['name'] = $name;
        null !== $operatingHours && $self['operatingHours'] = $operatingHours;
        null !== $parkCode && $self['parkCode'] = $parkCode;
        null !== $relevanceScore && $self['relevanceScore'] = $relevanceScore;
        null !== $states && $self['states'] = $states;
        null !== $topics && $self['topics'] = $topics;
        null !== $url && $self['url'] = $url;
        null !== $weatherInfo && $self['weatherInfo'] = $weatherInfo;

        return $self;
    }

    /**
     * Park identification string.
     */
    public function withID(string $id): self
    {
        $self = clone $this;
        $self['id'] = $id;

        return $self;
    }

    /**
     * @param list<Activity|ActivityShape> $activities
     */
    public function withActivities(array $activities): self
    {
        $self = clone $this;
        $self['activities'] = $activities;

        return $self;
    }

    /**
     * Park addresses (physical and mailing).
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
     * Information about contacting the park.
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
     * Introductory paragraph from the park homepage.
     */
    public function withDescription(string $description): self
    {
        $self = clone $this;
        $self['description'] = $description;

        return $self;
    }

    /**
     * Type of designation (eg, national park, national monument, national recreation area, etc).
     */
    public function withDesignation(string $designation): self
    {
        $self = clone $this;
        $self['designation'] = $designation;

        return $self;
    }

    /**
     * General overview of how to get to the park.
     */
    public function withDirectionsInfo(string $directionsInfo): self
    {
        $self = clone $this;
        $self['directionsInfo'] = $directionsInfo;

        return $self;
    }

    /**
     * Link to page, if available, that provides additional detail on getting to the park.
     */
    public function withDirectionsURL(string $directionsURL): self
    {
        $self = clone $this;
        $self['directionsURL'] = $directionsURL;

        return $self;
    }

    /**
     * Fee for entering the park.
     *
     * @param list<EntranceFee|EntranceFeeShape> $entranceFees
     */
    public function withEntranceFees(array $entranceFees): self
    {
        $self = clone $this;
        $self['entranceFees'] = $entranceFees;

        return $self;
    }

    /**
     * Passes available to provide entry into the park.
     *
     * @param list<EntrancePass|EntrancePassShape> $entrancePasses
     */
    public function withEntrancePasses(array $entrancePasses): self
    {
        $self = clone $this;
        $self['entrancePasses'] = $entrancePasses;

        return $self;
    }

    /**
     * Full park name (with designation).
     */
    public function withFullName(string $fullName): self
    {
        $self = clone $this;
        $self['fullName'] = $fullName;

        return $self;
    }

    /**
     * Park images.
     *
     * @param list<Image|ImageShape> $images
     */
    public function withImages(array $images): self
    {
        $self = clone $this;
        $self['images'] = $images;

        return $self;
    }

    public function withLatitude(string $latitude): self
    {
        $self = clone $this;
        $self['latitude'] = $latitude;

        return $self;
    }

    /**
     * Park GPS cordinates.
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
     * Short park name (no designation).
     */
    public function withName(string $name): self
    {
        $self = clone $this;
        $self['name'] = $name;

        return $self;
    }

    /**
     * Hours and seasons when the park is open or closed.
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
     * The relevance score is a numeric calculation of how much your item meets the criteria of your q (query text) search. This is normally coupled with a sort value of -relevanceScore. A higher value means that your item meets the criteria of the q search with a higher frequency and accuracy.
     */
    public function withRelevanceScore(float $relevanceScore): self
    {
        $self = clone $this;
        $self['relevanceScore'] = $relevanceScore;

        return $self;
    }

    /**
     * State(s) the park is located in (comma-delimited list).
     */
    public function withStates(string $states): self
    {
        $self = clone $this;
        $self['states'] = $states;

        return $self;
    }

    /**
     * @param list<Topic|TopicShape> $topics
     */
    public function withTopics(array $topics): self
    {
        $self = clone $this;
        $self['topics'] = $topics;

        return $self;
    }

    /**
     * Park Website.
     */
    public function withURL(string $url): self
    {
        $self = clone $this;
        $self['url'] = $url;

        return $self;
    }

    /**
     * General description of the weather in the park over the course of a year.
     */
    public function withWeatherInfo(string $weatherInfo): self
    {
        $self = clone $this;
        $self['weatherInfo'] = $weatherInfo;

        return $self;
    }
}
