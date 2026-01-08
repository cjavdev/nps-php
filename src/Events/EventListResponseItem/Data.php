<?php

declare(strict_types=1);

namespace Nps\Events\EventListResponseItem;

use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Contracts\BaseModel;
use Nps\Events\EventListResponseItem\Data\Image;
use Nps\Events\EventListResponseItem\Data\Time;

/**
 * @phpstan-import-type ImageShape from \Nps\Events\EventListResponseItem\Data\Image
 * @phpstan-import-type TimeShape from \Nps\Events\EventListResponseItem\Data\Time
 *
 * @phpstan-type DataShape = array{
 *   id?: string|null,
 *   category?: string|null,
 *   categoryid?: string|null,
 *   contactemailaddress?: string|null,
 *   contactname?: string|null,
 *   contacttelephoneNumber?: string|null,
 *   createuser?: string|null,
 *   date?: \DateTimeInterface|null,
 *   dateend?: \DateTimeInterface|null,
 *   dates?: list<\DateTimeInterface>|null,
 *   datestart?: \DateTimeInterface|null,
 *   datetimecreated?: string|null,
 *   datetimeupdated?: string|null,
 *   description?: string|null,
 *   eventid?: string|null,
 *   feeinfo?: string|null,
 *   geometryPoiID?: string|null,
 *   imageidlist?: string|null,
 *   images?: list<Image|ImageShape>|null,
 *   infourl?: string|null,
 *   isallday?: string|null,
 *   isfree?: string|null,
 *   isrecurring?: string|null,
 *   isregresrequired?: string|null,
 *   latitude?: string|null,
 *   location?: string|null,
 *   longitude?: string|null,
 *   organizationname?: string|null,
 *   parkfullname?: string|null,
 *   portalname?: string|null,
 *   recurrencedateend?: \DateTimeInterface|null,
 *   recurrencedatestart?: \DateTimeInterface|null,
 *   recurrencerule?: string|null,
 *   regresinfo?: string|null,
 *   regresurl?: string|null,
 *   sitecode?: string|null,
 *   sitetype?: string|null,
 *   subjectname?: string|null,
 *   tags?: list<string>|null,
 *   timeinfo?: string|null,
 *   times?: list<Time|TimeShape>|null,
 *   title?: string|null,
 *   types?: list<string>|null,
 * }
 */
final class Data implements BaseModel
{
    /** @use SdkModel<DataShape> */
    use SdkModel;

    /**
     * Unique identifier for this event.
     */
    #[Optional]
    public ?string $id;

    /**
     * Category for event.
     */
    #[Optional]
    public ?string $category;

    #[Optional]
    public ?string $categoryid;

    /**
     * Email address for event contact.
     */
    #[Optional]
    public ?string $contactemailaddress;

    /**
     * Name of event contact.
     */
    #[Optional]
    public ?string $contactname;

    /**
     * Phone number for event contact.
     */
    #[Optional]
    public ?string $contacttelephoneNumber;

    #[Optional]
    public ?string $createuser;

    /**
     * Date of next upcoming event.
     */
    #[Optional]
    public ?\DateTimeInterface $date;

    /**
     * End date for event.
     */
    #[Optional]
    public ?\DateTimeInterface $dateend;

    /**
     * Array of event dates.
     *
     * @var list<\DateTimeInterface>|null $dates
     */
    #[Optional(list: '\DateTimeInterface')]
    public ?array $dates;

    /**
     * Start date for event.
     */
    #[Optional]
    public ?\DateTimeInterface $datestart;

    #[Optional]
    public ?string $datetimecreated;

    #[Optional]
    public ?string $datetimeupdated;

    /**
     * Event description.
     */
    #[Optional]
    public ?string $description;

    #[Optional]
    public ?string $eventid;

    /**
     * Fee information for event.
     */
    #[Optional]
    public ?string $feeinfo;

    /**
     * Id for Geometry Point of Interest.
     */
    #[Optional('geometryPoiId')]
    public ?string $geometryPoiID;

    #[Optional]
    public ?string $imageidlist;

    /** @var list<Image>|null $images */
    #[Optional(list: Image::class)]
    public ?array $images;

    /**
     * URL for more information about the event.
     */
    #[Optional]
    public ?string $infourl;

    /**
     * The event takes place all day.
     */
    #[Optional]
    public ?string $isallday;

    /**
     * The event is free.
     */
    #[Optional]
    public ?string $isfree;

    /**
     * The event has recurrence.
     */
    #[Optional]
    public ?string $isrecurring;

    /**
     * The event requires registration or reservation.
     */
    #[Optional]
    public ?string $isregresrequired;

    /**
     * The latitude of the event location.
     */
    #[Optional]
    public ?string $latitude;

    /**
     * The location the event takes place.
     */
    #[Optional]
    public ?string $location;

    /**
     * The longitude of the event location.
     */
    #[Optional]
    public ?string $longitude;

    /**
     * Name of the organization associated with event.
     */
    #[Optional]
    public ?string $organizationname;

    /**
     * Name and designation of the park associated with event.
     */
    #[Optional]
    public ?string $parkfullname;

    /**
     * Name of the portal site associated with event.
     */
    #[Optional]
    public ?string $portalname;

    /**
     * Date the event recurrence ends.
     */
    #[Optional]
    public ?\DateTimeInterface $recurrencedateend;

    /**
     * Date the event recurrence starts.
     */
    #[Optional]
    public ?\DateTimeInterface $recurrencedatestart;

    /**
     * Recurrence rule for event.
     */
    #[Optional]
    public ?string $recurrencerule;

    /**
     * Additional information on required reservation or registration for event.
     */
    #[Optional]
    public ?string $regresinfo;

    /**
     * URL for required reservation or registration for event.
     */
    #[Optional]
    public ?string $regresurl;

    /**
     * Site code of the associated site for event.
     */
    #[Optional]
    public ?string $sitecode;

    /**
     * Site type of the associated site for event.
     */
    #[Optional]
    public ?string $sitetype;

    /**
     * Name of associated subject site for event.
     */
    #[Optional]
    public ?string $subjectname;

    /**
     * Tags associated with event.
     *
     * @var list<string>|null $tags
     */
    #[Optional(list: 'string')]
    public ?array $tags;

    /**
     * Additional information about times for event.
     */
    #[Optional]
    public ?string $timeinfo;

    /**
     * Time information for event.
     *
     * @var list<Time>|null $times
     */
    #[Optional(list: Time::class)]
    public ?array $times;

    /**
     * Event title.
     */
    #[Optional]
    public ?string $title;

    /**
     * Type(s) of event.
     *
     * @var list<string>|null $types
     */
    #[Optional(list: 'string')]
    public ?array $types;

    public function __construct()
    {
        $this->initialize();
    }

    /**
     * Construct an instance from the required parameters.
     *
     * You must use named parameters to construct any parameters with a default value.
     *
     * @param list<\DateTimeInterface>|null $dates
     * @param list<Image|ImageShape>|null $images
     * @param list<string>|null $tags
     * @param list<Time|TimeShape>|null $times
     * @param list<string>|null $types
     */
    public static function with(
        ?string $id = null,
        ?string $category = null,
        ?string $categoryid = null,
        ?string $contactemailaddress = null,
        ?string $contactname = null,
        ?string $contacttelephoneNumber = null,
        ?string $createuser = null,
        ?\DateTimeInterface $date = null,
        ?\DateTimeInterface $dateend = null,
        ?array $dates = null,
        ?\DateTimeInterface $datestart = null,
        ?string $datetimecreated = null,
        ?string $datetimeupdated = null,
        ?string $description = null,
        ?string $eventid = null,
        ?string $feeinfo = null,
        ?string $geometryPoiID = null,
        ?string $imageidlist = null,
        ?array $images = null,
        ?string $infourl = null,
        ?string $isallday = null,
        ?string $isfree = null,
        ?string $isrecurring = null,
        ?string $isregresrequired = null,
        ?string $latitude = null,
        ?string $location = null,
        ?string $longitude = null,
        ?string $organizationname = null,
        ?string $parkfullname = null,
        ?string $portalname = null,
        ?\DateTimeInterface $recurrencedateend = null,
        ?\DateTimeInterface $recurrencedatestart = null,
        ?string $recurrencerule = null,
        ?string $regresinfo = null,
        ?string $regresurl = null,
        ?string $sitecode = null,
        ?string $sitetype = null,
        ?string $subjectname = null,
        ?array $tags = null,
        ?string $timeinfo = null,
        ?array $times = null,
        ?string $title = null,
        ?array $types = null,
    ): self {
        $self = new self;

        null !== $id && $self['id'] = $id;
        null !== $category && $self['category'] = $category;
        null !== $categoryid && $self['categoryid'] = $categoryid;
        null !== $contactemailaddress && $self['contactemailaddress'] = $contactemailaddress;
        null !== $contactname && $self['contactname'] = $contactname;
        null !== $contacttelephoneNumber && $self['contacttelephoneNumber'] = $contacttelephoneNumber;
        null !== $createuser && $self['createuser'] = $createuser;
        null !== $date && $self['date'] = $date;
        null !== $dateend && $self['dateend'] = $dateend;
        null !== $dates && $self['dates'] = $dates;
        null !== $datestart && $self['datestart'] = $datestart;
        null !== $datetimecreated && $self['datetimecreated'] = $datetimecreated;
        null !== $datetimeupdated && $self['datetimeupdated'] = $datetimeupdated;
        null !== $description && $self['description'] = $description;
        null !== $eventid && $self['eventid'] = $eventid;
        null !== $feeinfo && $self['feeinfo'] = $feeinfo;
        null !== $geometryPoiID && $self['geometryPoiID'] = $geometryPoiID;
        null !== $imageidlist && $self['imageidlist'] = $imageidlist;
        null !== $images && $self['images'] = $images;
        null !== $infourl && $self['infourl'] = $infourl;
        null !== $isallday && $self['isallday'] = $isallday;
        null !== $isfree && $self['isfree'] = $isfree;
        null !== $isrecurring && $self['isrecurring'] = $isrecurring;
        null !== $isregresrequired && $self['isregresrequired'] = $isregresrequired;
        null !== $latitude && $self['latitude'] = $latitude;
        null !== $location && $self['location'] = $location;
        null !== $longitude && $self['longitude'] = $longitude;
        null !== $organizationname && $self['organizationname'] = $organizationname;
        null !== $parkfullname && $self['parkfullname'] = $parkfullname;
        null !== $portalname && $self['portalname'] = $portalname;
        null !== $recurrencedateend && $self['recurrencedateend'] = $recurrencedateend;
        null !== $recurrencedatestart && $self['recurrencedatestart'] = $recurrencedatestart;
        null !== $recurrencerule && $self['recurrencerule'] = $recurrencerule;
        null !== $regresinfo && $self['regresinfo'] = $regresinfo;
        null !== $regresurl && $self['regresurl'] = $regresurl;
        null !== $sitecode && $self['sitecode'] = $sitecode;
        null !== $sitetype && $self['sitetype'] = $sitetype;
        null !== $subjectname && $self['subjectname'] = $subjectname;
        null !== $tags && $self['tags'] = $tags;
        null !== $timeinfo && $self['timeinfo'] = $timeinfo;
        null !== $times && $self['times'] = $times;
        null !== $title && $self['title'] = $title;
        null !== $types && $self['types'] = $types;

        return $self;
    }

    /**
     * Unique identifier for this event.
     */
    public function withID(string $id): self
    {
        $self = clone $this;
        $self['id'] = $id;

        return $self;
    }

    /**
     * Category for event.
     */
    public function withCategory(string $category): self
    {
        $self = clone $this;
        $self['category'] = $category;

        return $self;
    }

    public function withCategoryid(string $categoryid): self
    {
        $self = clone $this;
        $self['categoryid'] = $categoryid;

        return $self;
    }

    /**
     * Email address for event contact.
     */
    public function withContactemailaddress(string $contactemailaddress): self
    {
        $self = clone $this;
        $self['contactemailaddress'] = $contactemailaddress;

        return $self;
    }

    /**
     * Name of event contact.
     */
    public function withContactname(string $contactname): self
    {
        $self = clone $this;
        $self['contactname'] = $contactname;

        return $self;
    }

    /**
     * Phone number for event contact.
     */
    public function withContacttelephoneNumber(
        string $contacttelephoneNumber
    ): self {
        $self = clone $this;
        $self['contacttelephoneNumber'] = $contacttelephoneNumber;

        return $self;
    }

    public function withCreateuser(string $createuser): self
    {
        $self = clone $this;
        $self['createuser'] = $createuser;

        return $self;
    }

    /**
     * Date of next upcoming event.
     */
    public function withDate(\DateTimeInterface $date): self
    {
        $self = clone $this;
        $self['date'] = $date;

        return $self;
    }

    /**
     * End date for event.
     */
    public function withDateend(\DateTimeInterface $dateend): self
    {
        $self = clone $this;
        $self['dateend'] = $dateend;

        return $self;
    }

    /**
     * Array of event dates.
     *
     * @param list<\DateTimeInterface> $dates
     */
    public function withDates(array $dates): self
    {
        $self = clone $this;
        $self['dates'] = $dates;

        return $self;
    }

    /**
     * Start date for event.
     */
    public function withDatestart(\DateTimeInterface $datestart): self
    {
        $self = clone $this;
        $self['datestart'] = $datestart;

        return $self;
    }

    public function withDatetimecreated(string $datetimecreated): self
    {
        $self = clone $this;
        $self['datetimecreated'] = $datetimecreated;

        return $self;
    }

    public function withDatetimeupdated(string $datetimeupdated): self
    {
        $self = clone $this;
        $self['datetimeupdated'] = $datetimeupdated;

        return $self;
    }

    /**
     * Event description.
     */
    public function withDescription(string $description): self
    {
        $self = clone $this;
        $self['description'] = $description;

        return $self;
    }

    public function withEventid(string $eventid): self
    {
        $self = clone $this;
        $self['eventid'] = $eventid;

        return $self;
    }

    /**
     * Fee information for event.
     */
    public function withFeeinfo(string $feeinfo): self
    {
        $self = clone $this;
        $self['feeinfo'] = $feeinfo;

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

    public function withImageidlist(string $imageidlist): self
    {
        $self = clone $this;
        $self['imageidlist'] = $imageidlist;

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
     * URL for more information about the event.
     */
    public function withInfourl(string $infourl): self
    {
        $self = clone $this;
        $self['infourl'] = $infourl;

        return $self;
    }

    /**
     * The event takes place all day.
     */
    public function withIsallday(string $isallday): self
    {
        $self = clone $this;
        $self['isallday'] = $isallday;

        return $self;
    }

    /**
     * The event is free.
     */
    public function withIsfree(string $isfree): self
    {
        $self = clone $this;
        $self['isfree'] = $isfree;

        return $self;
    }

    /**
     * The event has recurrence.
     */
    public function withIsrecurring(string $isrecurring): self
    {
        $self = clone $this;
        $self['isrecurring'] = $isrecurring;

        return $self;
    }

    /**
     * The event requires registration or reservation.
     */
    public function withIsregresrequired(string $isregresrequired): self
    {
        $self = clone $this;
        $self['isregresrequired'] = $isregresrequired;

        return $self;
    }

    /**
     * The latitude of the event location.
     */
    public function withLatitude(string $latitude): self
    {
        $self = clone $this;
        $self['latitude'] = $latitude;

        return $self;
    }

    /**
     * The location the event takes place.
     */
    public function withLocation(string $location): self
    {
        $self = clone $this;
        $self['location'] = $location;

        return $self;
    }

    /**
     * The longitude of the event location.
     */
    public function withLongitude(string $longitude): self
    {
        $self = clone $this;
        $self['longitude'] = $longitude;

        return $self;
    }

    /**
     * Name of the organization associated with event.
     */
    public function withOrganizationname(string $organizationname): self
    {
        $self = clone $this;
        $self['organizationname'] = $organizationname;

        return $self;
    }

    /**
     * Name and designation of the park associated with event.
     */
    public function withParkfullname(string $parkfullname): self
    {
        $self = clone $this;
        $self['parkfullname'] = $parkfullname;

        return $self;
    }

    /**
     * Name of the portal site associated with event.
     */
    public function withPortalname(string $portalname): self
    {
        $self = clone $this;
        $self['portalname'] = $portalname;

        return $self;
    }

    /**
     * Date the event recurrence ends.
     */
    public function withRecurrencedateend(
        \DateTimeInterface $recurrencedateend
    ): self {
        $self = clone $this;
        $self['recurrencedateend'] = $recurrencedateend;

        return $self;
    }

    /**
     * Date the event recurrence starts.
     */
    public function withRecurrencedatestart(
        \DateTimeInterface $recurrencedatestart
    ): self {
        $self = clone $this;
        $self['recurrencedatestart'] = $recurrencedatestart;

        return $self;
    }

    /**
     * Recurrence rule for event.
     */
    public function withRecurrencerule(string $recurrencerule): self
    {
        $self = clone $this;
        $self['recurrencerule'] = $recurrencerule;

        return $self;
    }

    /**
     * Additional information on required reservation or registration for event.
     */
    public function withRegresinfo(string $regresinfo): self
    {
        $self = clone $this;
        $self['regresinfo'] = $regresinfo;

        return $self;
    }

    /**
     * URL for required reservation or registration for event.
     */
    public function withRegresurl(string $regresurl): self
    {
        $self = clone $this;
        $self['regresurl'] = $regresurl;

        return $self;
    }

    /**
     * Site code of the associated site for event.
     */
    public function withSitecode(string $sitecode): self
    {
        $self = clone $this;
        $self['sitecode'] = $sitecode;

        return $self;
    }

    /**
     * Site type of the associated site for event.
     */
    public function withSitetype(string $sitetype): self
    {
        $self = clone $this;
        $self['sitetype'] = $sitetype;

        return $self;
    }

    /**
     * Name of associated subject site for event.
     */
    public function withSubjectname(string $subjectname): self
    {
        $self = clone $this;
        $self['subjectname'] = $subjectname;

        return $self;
    }

    /**
     * Tags associated with event.
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
     * Additional information about times for event.
     */
    public function withTimeinfo(string $timeinfo): self
    {
        $self = clone $this;
        $self['timeinfo'] = $timeinfo;

        return $self;
    }

    /**
     * Time information for event.
     *
     * @param list<Time|TimeShape> $times
     */
    public function withTimes(array $times): self
    {
        $self = clone $this;
        $self['times'] = $times;

        return $self;
    }

    /**
     * Event title.
     */
    public function withTitle(string $title): self
    {
        $self = clone $this;
        $self['title'] = $title;

        return $self;
    }

    /**
     * Type(s) of event.
     *
     * @param list<string> $types
     */
    public function withTypes(array $types): self
    {
        $self = clone $this;
        $self['types'] = $types;

        return $self;
    }
}
