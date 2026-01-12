<?php

declare(strict_types=1);

namespace Nps\ThingsTodo\ThingsTodoListResponse\Data;

use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Contracts\BaseModel;
use Nps\ThingsTodo\ThingsTodoListResponse\Data\Data\Activity;
use Nps\ThingsTodo\ThingsTodoListResponse\Data\Data\Image;
use Nps\ThingsTodo\ThingsTodoListResponse\Data\Data\RelatedPark;
use Nps\ThingsTodo\ThingsTodoListResponse\Data\Data\Topic;

/**
 * @phpstan-import-type ActivityShape from \Nps\ThingsTodo\ThingsTodoListResponse\Data\Data\Activity
 * @phpstan-import-type ImageShape from \Nps\ThingsTodo\ThingsTodoListResponse\Data\Data\Image
 * @phpstan-import-type RelatedParkShape from \Nps\ThingsTodo\ThingsTodoListResponse\Data\Data\RelatedPark
 * @phpstan-import-type TopicShape from \Nps\ThingsTodo\ThingsTodoListResponse\Data\Data\Topic
 *
 * @phpstan-type DataShape = array{
 *   id?: string|null,
 *   accessibilityInformation?: string|null,
 *   activities?: list<Activity|ActivityShape>|null,
 *   activityDescription?: string|null,
 *   age?: string|null,
 *   ageDescription?: string|null,
 *   arePetsPermitted?: string|null,
 *   arePetsPermittedwithRestrictions?: string|null,
 *   doFeesApply?: string|null,
 *   duration?: string|null,
 *   durationDescription?: string|null,
 *   feeDescription?: string|null,
 *   geometryPoiID?: string|null,
 *   images?: list<Image|ImageShape>|null,
 *   isReservationRequired?: string|null,
 *   latitude?: string|null,
 *   location?: string|null,
 *   locationDescription?: string|null,
 *   longDescription?: string|null,
 *   longitude?: string|null,
 *   petsDescription?: string|null,
 *   relatedOrganizations?: list<mixed>|null,
 *   relatedParks?: list<RelatedPark|RelatedParkShape>|null,
 *   relevanceScore?: float|null,
 *   reservationDescription?: string|null,
 *   season?: list<string>|null,
 *   seasonDescription?: string|null,
 *   shortDescription?: string|null,
 *   tags?: list<string>|null,
 *   timeOfDay?: list<string>|null,
 *   timeOfDayDescription?: string|null,
 *   title?: string|null,
 *   topics?: list<Topic|TopicShape>|null,
 *   url?: string|null,
 * }
 */
final class Data implements BaseModel
{
    /** @use SdkModel<DataShape> */
    use SdkModel;

    /**
     * UUID for this Thing To Do.
     */
    #[Optional]
    public ?string $id;

    #[Optional]
    public ?string $accessibilityInformation;

    /** @var list<Activity>|null $activities */
    #[Optional(list: Activity::class)]
    public ?array $activities;

    #[Optional]
    public ?string $activityDescription;

    #[Optional]
    public ?string $age;

    #[Optional]
    public ?string $ageDescription;

    #[Optional]
    public ?string $arePetsPermitted;

    /**
     * true or false.
     */
    #[Optional]
    public ?string $arePetsPermittedwithRestrictions;

    /**
     * true or false.
     */
    #[Optional]
    public ?string $doFeesApply;

    /**
     * estimated duration of this Thing To Do.
     */
    #[Optional]
    public ?string $duration;

    #[Optional]
    public ?string $durationDescription;

    #[Optional]
    public ?string $feeDescription;

    /**
     * Id for Geometry Point of Interest.
     */
    #[Optional('geometryPoiId')]
    public ?string $geometryPoiID;

    /** @var list<Image>|null $images */
    #[Optional(list: Image::class)]
    public ?array $images;

    /**
     * true or false.
     */
    #[Optional]
    public ?string $isReservationRequired;

    #[Optional]
    public ?string $latitude;

    #[Optional]
    public ?string $location;

    #[Optional]
    public ?string $locationDescription;

    #[Optional]
    public ?string $longDescription;

    #[Optional]
    public ?string $longitude;

    /**
     * pet-related information for this Thing To Do.
     */
    #[Optional]
    public ?string $petsDescription;

    /** @var list<mixed>|null $relatedOrganizations */
    #[Optional(list: 'mixed')]
    public ?array $relatedOrganizations;

    /** @var list<RelatedPark>|null $relatedParks */
    #[Optional(list: RelatedPark::class)]
    public ?array $relatedParks;

    /**
     * The relevance score is a numeric calculation of how much your item meets the criteria of your q (query text) search. This is normally coupled with a sort value of -relevanceScore. A higher value means that your item meets the criteria of the q search with a higher frequency and accuracy.
     */
    #[Optional]
    public ?float $relevanceScore;

    #[Optional]
    public ?string $reservationDescription;

    /** @var list<string>|null $season */
    #[Optional(list: 'string')]
    public ?array $season;

    #[Optional]
    public ?string $seasonDescription;

    #[Optional]
    public ?string $shortDescription;

    /**
     * comma separated list of tags.
     *
     * @var list<string>|null $tags
     */
    #[Optional(list: 'string')]
    public ?array $tags;

    /** @var list<string>|null $timeOfDay */
    #[Optional(list: 'string')]
    public ?array $timeOfDay;

    #[Optional]
    public ?string $timeOfDayDescription;

    #[Optional]
    public ?string $title;

    /** @var list<Topic>|null $topics */
    #[Optional(list: Topic::class)]
    public ?array $topics;

    /**
     * URL for this Thing To Do.
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
     * @param list<Activity|ActivityShape>|null $activities
     * @param list<Image|ImageShape>|null $images
     * @param list<mixed>|null $relatedOrganizations
     * @param list<RelatedPark|RelatedParkShape>|null $relatedParks
     * @param list<string>|null $season
     * @param list<string>|null $tags
     * @param list<string>|null $timeOfDay
     * @param list<Topic|TopicShape>|null $topics
     */
    public static function with(
        ?string $id = null,
        ?string $accessibilityInformation = null,
        ?array $activities = null,
        ?string $activityDescription = null,
        ?string $age = null,
        ?string $ageDescription = null,
        ?string $arePetsPermitted = null,
        ?string $arePetsPermittedwithRestrictions = null,
        ?string $doFeesApply = null,
        ?string $duration = null,
        ?string $durationDescription = null,
        ?string $feeDescription = null,
        ?string $geometryPoiID = null,
        ?array $images = null,
        ?string $isReservationRequired = null,
        ?string $latitude = null,
        ?string $location = null,
        ?string $locationDescription = null,
        ?string $longDescription = null,
        ?string $longitude = null,
        ?string $petsDescription = null,
        ?array $relatedOrganizations = null,
        ?array $relatedParks = null,
        ?float $relevanceScore = null,
        ?string $reservationDescription = null,
        ?array $season = null,
        ?string $seasonDescription = null,
        ?string $shortDescription = null,
        ?array $tags = null,
        ?array $timeOfDay = null,
        ?string $timeOfDayDescription = null,
        ?string $title = null,
        ?array $topics = null,
        ?string $url = null,
    ): self {
        $self = new self;

        null !== $id && $self['id'] = $id;
        null !== $accessibilityInformation && $self['accessibilityInformation'] = $accessibilityInformation;
        null !== $activities && $self['activities'] = $activities;
        null !== $activityDescription && $self['activityDescription'] = $activityDescription;
        null !== $age && $self['age'] = $age;
        null !== $ageDescription && $self['ageDescription'] = $ageDescription;
        null !== $arePetsPermitted && $self['arePetsPermitted'] = $arePetsPermitted;
        null !== $arePetsPermittedwithRestrictions && $self['arePetsPermittedwithRestrictions'] = $arePetsPermittedwithRestrictions;
        null !== $doFeesApply && $self['doFeesApply'] = $doFeesApply;
        null !== $duration && $self['duration'] = $duration;
        null !== $durationDescription && $self['durationDescription'] = $durationDescription;
        null !== $feeDescription && $self['feeDescription'] = $feeDescription;
        null !== $geometryPoiID && $self['geometryPoiID'] = $geometryPoiID;
        null !== $images && $self['images'] = $images;
        null !== $isReservationRequired && $self['isReservationRequired'] = $isReservationRequired;
        null !== $latitude && $self['latitude'] = $latitude;
        null !== $location && $self['location'] = $location;
        null !== $locationDescription && $self['locationDescription'] = $locationDescription;
        null !== $longDescription && $self['longDescription'] = $longDescription;
        null !== $longitude && $self['longitude'] = $longitude;
        null !== $petsDescription && $self['petsDescription'] = $petsDescription;
        null !== $relatedOrganizations && $self['relatedOrganizations'] = $relatedOrganizations;
        null !== $relatedParks && $self['relatedParks'] = $relatedParks;
        null !== $relevanceScore && $self['relevanceScore'] = $relevanceScore;
        null !== $reservationDescription && $self['reservationDescription'] = $reservationDescription;
        null !== $season && $self['season'] = $season;
        null !== $seasonDescription && $self['seasonDescription'] = $seasonDescription;
        null !== $shortDescription && $self['shortDescription'] = $shortDescription;
        null !== $tags && $self['tags'] = $tags;
        null !== $timeOfDay && $self['timeOfDay'] = $timeOfDay;
        null !== $timeOfDayDescription && $self['timeOfDayDescription'] = $timeOfDayDescription;
        null !== $title && $self['title'] = $title;
        null !== $topics && $self['topics'] = $topics;
        null !== $url && $self['url'] = $url;

        return $self;
    }

    /**
     * UUID for this Thing To Do.
     */
    public function withID(string $id): self
    {
        $self = clone $this;
        $self['id'] = $id;

        return $self;
    }

    public function withAccessibilityInformation(
        string $accessibilityInformation
    ): self {
        $self = clone $this;
        $self['accessibilityInformation'] = $accessibilityInformation;

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

    public function withActivityDescription(string $activityDescription): self
    {
        $self = clone $this;
        $self['activityDescription'] = $activityDescription;

        return $self;
    }

    public function withAge(string $age): self
    {
        $self = clone $this;
        $self['age'] = $age;

        return $self;
    }

    public function withAgeDescription(string $ageDescription): self
    {
        $self = clone $this;
        $self['ageDescription'] = $ageDescription;

        return $self;
    }

    public function withArePetsPermitted(string $arePetsPermitted): self
    {
        $self = clone $this;
        $self['arePetsPermitted'] = $arePetsPermitted;

        return $self;
    }

    /**
     * true or false.
     */
    public function withArePetsPermittedwithRestrictions(
        string $arePetsPermittedwithRestrictions
    ): self {
        $self = clone $this;
        $self['arePetsPermittedwithRestrictions'] = $arePetsPermittedwithRestrictions;

        return $self;
    }

    /**
     * true or false.
     */
    public function withDoFeesApply(string $doFeesApply): self
    {
        $self = clone $this;
        $self['doFeesApply'] = $doFeesApply;

        return $self;
    }

    /**
     * estimated duration of this Thing To Do.
     */
    public function withDuration(string $duration): self
    {
        $self = clone $this;
        $self['duration'] = $duration;

        return $self;
    }

    public function withDurationDescription(string $durationDescription): self
    {
        $self = clone $this;
        $self['durationDescription'] = $durationDescription;

        return $self;
    }

    public function withFeeDescription(string $feeDescription): self
    {
        $self = clone $this;
        $self['feeDescription'] = $feeDescription;

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
     * true or false.
     */
    public function withIsReservationRequired(
        string $isReservationRequired
    ): self {
        $self = clone $this;
        $self['isReservationRequired'] = $isReservationRequired;

        return $self;
    }

    public function withLatitude(string $latitude): self
    {
        $self = clone $this;
        $self['latitude'] = $latitude;

        return $self;
    }

    public function withLocation(string $location): self
    {
        $self = clone $this;
        $self['location'] = $location;

        return $self;
    }

    public function withLocationDescription(string $locationDescription): self
    {
        $self = clone $this;
        $self['locationDescription'] = $locationDescription;

        return $self;
    }

    public function withLongDescription(string $longDescription): self
    {
        $self = clone $this;
        $self['longDescription'] = $longDescription;

        return $self;
    }

    public function withLongitude(string $longitude): self
    {
        $self = clone $this;
        $self['longitude'] = $longitude;

        return $self;
    }

    /**
     * pet-related information for this Thing To Do.
     */
    public function withPetsDescription(string $petsDescription): self
    {
        $self = clone $this;
        $self['petsDescription'] = $petsDescription;

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
     * @param list<RelatedPark|RelatedParkShape> $relatedParks
     */
    public function withRelatedParks(array $relatedParks): self
    {
        $self = clone $this;
        $self['relatedParks'] = $relatedParks;

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

    public function withReservationDescription(
        string $reservationDescription
    ): self {
        $self = clone $this;
        $self['reservationDescription'] = $reservationDescription;

        return $self;
    }

    /**
     * @param list<string> $season
     */
    public function withSeason(array $season): self
    {
        $self = clone $this;
        $self['season'] = $season;

        return $self;
    }

    public function withSeasonDescription(string $seasonDescription): self
    {
        $self = clone $this;
        $self['seasonDescription'] = $seasonDescription;

        return $self;
    }

    public function withShortDescription(string $shortDescription): self
    {
        $self = clone $this;
        $self['shortDescription'] = $shortDescription;

        return $self;
    }

    /**
     * comma separated list of tags.
     *
     * @param list<string> $tags
     */
    public function withTags(array $tags): self
    {
        $self = clone $this;
        $self['tags'] = $tags;

        return $self;
    }

    /**
     * @param list<string> $timeOfDay
     */
    public function withTimeOfDay(array $timeOfDay): self
    {
        $self = clone $this;
        $self['timeOfDay'] = $timeOfDay;

        return $self;
    }

    public function withTimeOfDayDescription(string $timeOfDayDescription): self
    {
        $self = clone $this;
        $self['timeOfDayDescription'] = $timeOfDayDescription;

        return $self;
    }

    public function withTitle(string $title): self
    {
        $self = clone $this;
        $self['title'] = $title;

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
     * URL for this Thing To Do.
     */
    public function withURL(string $url): self
    {
        $self = clone $this;
        $self['url'] = $url;

        return $self;
    }
}
