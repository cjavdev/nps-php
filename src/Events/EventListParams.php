<?php

declare(strict_types=1);

namespace Nps\Events;

use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Concerns\SdkParams;
use Nps\Core\Contracts\BaseModel;

/**
 * @see Nps\Services\EventsService::list()
 *
 * @phpstan-type EventListParamsShape = array{
 *   id?: string|null,
 *   dateEnd?: string|null,
 *   dateStart?: string|null,
 *   eventType?: list<string>|null,
 *   expandRecurring?: bool|null,
 *   organization?: list<string>|null,
 *   pageNumber?: int|null,
 *   pageSize?: int|null,
 *   parkCode?: list<string>|null,
 *   portal?: list<string>|null,
 *   q?: string|null,
 *   stateCode?: list<string>|null,
 *   subject?: list<string>|null,
 *   tagsAll?: list<string>|null,
 *   tagsNone?: list<string>|null,
 *   tagsOne?: list<string>|null,
 * }
 */
final class EventListParams implements BaseModel
{
    /** @use SdkModel<EventListParamsShape> */
    use SdkModel;
    use SdkParams;

    /**
     * A unique ID string for an event.
     */
    #[Optional]
    public ?string $id;

    /**
     * An ending date in the yyyy-mm-dd format to filter events by.
     */
    #[Optional]
    public ?string $dateEnd;

    /**
     * A stating date in the yyyy-mm-dd format to filter events by.
     */
    #[Optional]
    public ?string $dateStart;

    /**
     * A comma delimited list of event types.
     *
     * @var list<string>|null $eventType
     */
    #[Optional(list: 'string')]
    public ?array $eventType;

    /**
     * A flag to denote whether or not to expand the recurring events out into multiple records (one per event date). Default is false.
     */
    #[Optional]
    public ?bool $expandRecurring;

    /**
     * A comma delimited list of organization site codes.
     *
     * @var list<string>|null $organization
     */
    #[Optional(list: 'string')]
    public ?array $organization;

    /**
     * The current page number for the results. Default is 1.
     */
    #[Optional]
    public ?int $pageNumber;

    /**
     * The number of results per page. Default is 10.
     */
    #[Optional]
    public ?int $pageSize;

    /**
     * A comma delimited list of park codes (each 4 characters in length).
     *
     * @var list<string>|null $parkCode
     */
    #[Optional(list: 'string')]
    public ?array $parkCode;

    /**
     * A comma delimited list of portal site codes.
     *
     * @var list<string>|null $portal
     */
    #[Optional(list: 'string')]
    public ?array $portal;

    /**
     * Term to search on.
     */
    #[Optional]
    public ?string $q;

    /**
     * A comma delimited list of 2 character state codes.
     *
     * @var list<string>|null $stateCode
     */
    #[Optional(list: 'string')]
    public ?array $stateCode;

    /**
     * A comma delimited list of subject site codes.
     *
     * @var list<string>|null $subject
     */
    #[Optional(list: 'string')]
    public ?array $subject;

    /**
     * A comma delimited list of tags that must be included.
     *
     * @var list<string>|null $tagsAll
     */
    #[Optional(list: 'string')]
    public ?array $tagsAll;

    /**
     * A comma delimited list of tags that must not be included.
     *
     * @var list<string>|null $tagsNone
     */
    #[Optional(list: 'string')]
    public ?array $tagsNone;

    /**
     * A comma delimited list of tags that may be included.
     *
     * @var list<string>|null $tagsOne
     */
    #[Optional(list: 'string')]
    public ?array $tagsOne;

    public function __construct()
    {
        $this->initialize();
    }

    /**
     * Construct an instance from the required parameters.
     *
     * You must use named parameters to construct any parameters with a default value.
     *
     * @param list<string>|null $eventType
     * @param list<string>|null $organization
     * @param list<string>|null $parkCode
     * @param list<string>|null $portal
     * @param list<string>|null $stateCode
     * @param list<string>|null $subject
     * @param list<string>|null $tagsAll
     * @param list<string>|null $tagsNone
     * @param list<string>|null $tagsOne
     */
    public static function with(
        ?string $id = null,
        ?string $dateEnd = null,
        ?string $dateStart = null,
        ?array $eventType = null,
        ?bool $expandRecurring = null,
        ?array $organization = null,
        ?int $pageNumber = null,
        ?int $pageSize = null,
        ?array $parkCode = null,
        ?array $portal = null,
        ?string $q = null,
        ?array $stateCode = null,
        ?array $subject = null,
        ?array $tagsAll = null,
        ?array $tagsNone = null,
        ?array $tagsOne = null,
    ): self {
        $self = new self;

        null !== $id && $self['id'] = $id;
        null !== $dateEnd && $self['dateEnd'] = $dateEnd;
        null !== $dateStart && $self['dateStart'] = $dateStart;
        null !== $eventType && $self['eventType'] = $eventType;
        null !== $expandRecurring && $self['expandRecurring'] = $expandRecurring;
        null !== $organization && $self['organization'] = $organization;
        null !== $pageNumber && $self['pageNumber'] = $pageNumber;
        null !== $pageSize && $self['pageSize'] = $pageSize;
        null !== $parkCode && $self['parkCode'] = $parkCode;
        null !== $portal && $self['portal'] = $portal;
        null !== $q && $self['q'] = $q;
        null !== $stateCode && $self['stateCode'] = $stateCode;
        null !== $subject && $self['subject'] = $subject;
        null !== $tagsAll && $self['tagsAll'] = $tagsAll;
        null !== $tagsNone && $self['tagsNone'] = $tagsNone;
        null !== $tagsOne && $self['tagsOne'] = $tagsOne;

        return $self;
    }

    /**
     * A unique ID string for an event.
     */
    public function withID(string $id): self
    {
        $self = clone $this;
        $self['id'] = $id;

        return $self;
    }

    /**
     * An ending date in the yyyy-mm-dd format to filter events by.
     */
    public function withDateEnd(string $dateEnd): self
    {
        $self = clone $this;
        $self['dateEnd'] = $dateEnd;

        return $self;
    }

    /**
     * A stating date in the yyyy-mm-dd format to filter events by.
     */
    public function withDateStart(string $dateStart): self
    {
        $self = clone $this;
        $self['dateStart'] = $dateStart;

        return $self;
    }

    /**
     * A comma delimited list of event types.
     *
     * @param list<string> $eventType
     */
    public function withEventType(array $eventType): self
    {
        $self = clone $this;
        $self['eventType'] = $eventType;

        return $self;
    }

    /**
     * A flag to denote whether or not to expand the recurring events out into multiple records (one per event date). Default is false.
     */
    public function withExpandRecurring(bool $expandRecurring): self
    {
        $self = clone $this;
        $self['expandRecurring'] = $expandRecurring;

        return $self;
    }

    /**
     * A comma delimited list of organization site codes.
     *
     * @param list<string> $organization
     */
    public function withOrganization(array $organization): self
    {
        $self = clone $this;
        $self['organization'] = $organization;

        return $self;
    }

    /**
     * The current page number for the results. Default is 1.
     */
    public function withPageNumber(int $pageNumber): self
    {
        $self = clone $this;
        $self['pageNumber'] = $pageNumber;

        return $self;
    }

    /**
     * The number of results per page. Default is 10.
     */
    public function withPageSize(int $pageSize): self
    {
        $self = clone $this;
        $self['pageSize'] = $pageSize;

        return $self;
    }

    /**
     * A comma delimited list of park codes (each 4 characters in length).
     *
     * @param list<string> $parkCode
     */
    public function withParkCode(array $parkCode): self
    {
        $self = clone $this;
        $self['parkCode'] = $parkCode;

        return $self;
    }

    /**
     * A comma delimited list of portal site codes.
     *
     * @param list<string> $portal
     */
    public function withPortal(array $portal): self
    {
        $self = clone $this;
        $self['portal'] = $portal;

        return $self;
    }

    /**
     * Term to search on.
     */
    public function withQ(string $q): self
    {
        $self = clone $this;
        $self['q'] = $q;

        return $self;
    }

    /**
     * A comma delimited list of 2 character state codes.
     *
     * @param list<string> $stateCode
     */
    public function withStateCode(array $stateCode): self
    {
        $self = clone $this;
        $self['stateCode'] = $stateCode;

        return $self;
    }

    /**
     * A comma delimited list of subject site codes.
     *
     * @param list<string> $subject
     */
    public function withSubject(array $subject): self
    {
        $self = clone $this;
        $self['subject'] = $subject;

        return $self;
    }

    /**
     * A comma delimited list of tags that must be included.
     *
     * @param list<string> $tagsAll
     */
    public function withTagsAll(array $tagsAll): self
    {
        $self = clone $this;
        $self['tagsAll'] = $tagsAll;

        return $self;
    }

    /**
     * A comma delimited list of tags that must not be included.
     *
     * @param list<string> $tagsNone
     */
    public function withTagsNone(array $tagsNone): self
    {
        $self = clone $this;
        $self['tagsNone'] = $tagsNone;

        return $self;
    }

    /**
     * A comma delimited list of tags that may be included.
     *
     * @param list<string> $tagsOne
     */
    public function withTagsOne(array $tagsOne): self
    {
        $self = clone $this;
        $self['tagsOne'] = $tagsOne;

        return $self;
    }
}
