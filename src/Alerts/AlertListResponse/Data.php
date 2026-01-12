<?php

declare(strict_types=1);

namespace Nps\Alerts\AlertListResponse;

use Nps\Alerts\AlertListResponse\Data\Category;
use Nps\Alerts\AlertListResponse\Data\RelatedRoadEvent;
use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Contracts\BaseModel;

/**
 * @phpstan-import-type RelatedRoadEventShape from \Nps\Alerts\AlertListResponse\Data\RelatedRoadEvent
 *
 * @phpstan-type DataShape = array{
 *   id?: string|null,
 *   category?: null|Category|value-of<Category>,
 *   description?: string|null,
 *   lastIndexedDate?: string|null,
 *   parkCode?: string|null,
 *   relatedRoadEvents?: list<RelatedRoadEvent|RelatedRoadEventShape>|null,
 *   title?: string|null,
 *   url?: string|null,
 * }
 */
final class Data implements BaseModel
{
    /** @use SdkModel<DataShape> */
    use SdkModel;

    /**
     * Unique identifier for an alert record.
     */
    #[Optional]
    public ?string $id;

    /**
     * Alert type: Danger, Caution, Information, or Park Closure.
     *
     * @var value-of<Category>|null $category
     */
    #[Optional(enum: Category::class)]
    public ?string $category;

    /**
     * Alert description.
     */
    #[Optional]
    public ?string $description;

    /**
     * date/time stamp of when this alert was last indexed.
     */
    #[Optional]
    public ?string $lastIndexedDate;

    /**
     * A variable width character code that uniquely identifies a specific park.
     */
    #[Optional]
    public ?string $parkCode;

    /**
     * more information about a road event related to this alert (if any).
     *
     * @var list<RelatedRoadEvent>|null $relatedRoadEvents
     */
    #[Optional(list: RelatedRoadEvent::class)]
    public ?array $relatedRoadEvents;

    /**
     * Alert title.
     */
    #[Optional]
    public ?string $title;

    /**
     * Link to more information about the alert, if available.
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
     * @param Category|value-of<Category>|null $category
     * @param list<RelatedRoadEvent|RelatedRoadEventShape>|null $relatedRoadEvents
     */
    public static function with(
        ?string $id = null,
        Category|string|null $category = null,
        ?string $description = null,
        ?string $lastIndexedDate = null,
        ?string $parkCode = null,
        ?array $relatedRoadEvents = null,
        ?string $title = null,
        ?string $url = null,
    ): self {
        $self = new self;

        null !== $id && $self['id'] = $id;
        null !== $category && $self['category'] = $category;
        null !== $description && $self['description'] = $description;
        null !== $lastIndexedDate && $self['lastIndexedDate'] = $lastIndexedDate;
        null !== $parkCode && $self['parkCode'] = $parkCode;
        null !== $relatedRoadEvents && $self['relatedRoadEvents'] = $relatedRoadEvents;
        null !== $title && $self['title'] = $title;
        null !== $url && $self['url'] = $url;

        return $self;
    }

    /**
     * Unique identifier for an alert record.
     */
    public function withID(string $id): self
    {
        $self = clone $this;
        $self['id'] = $id;

        return $self;
    }

    /**
     * Alert type: Danger, Caution, Information, or Park Closure.
     *
     * @param Category|value-of<Category> $category
     */
    public function withCategory(Category|string $category): self
    {
        $self = clone $this;
        $self['category'] = $category;

        return $self;
    }

    /**
     * Alert description.
     */
    public function withDescription(string $description): self
    {
        $self = clone $this;
        $self['description'] = $description;

        return $self;
    }

    /**
     * date/time stamp of when this alert was last indexed.
     */
    public function withLastIndexedDate(string $lastIndexedDate): self
    {
        $self = clone $this;
        $self['lastIndexedDate'] = $lastIndexedDate;

        return $self;
    }

    /**
     * A variable width character code that uniquely identifies a specific park.
     */
    public function withParkCode(string $parkCode): self
    {
        $self = clone $this;
        $self['parkCode'] = $parkCode;

        return $self;
    }

    /**
     * more information about a road event related to this alert (if any).
     *
     * @param list<RelatedRoadEvent|RelatedRoadEventShape> $relatedRoadEvents
     */
    public function withRelatedRoadEvents(array $relatedRoadEvents): self
    {
        $self = clone $this;
        $self['relatedRoadEvents'] = $relatedRoadEvents;

        return $self;
    }

    /**
     * Alert title.
     */
    public function withTitle(string $title): self
    {
        $self = clone $this;
        $self['title'] = $title;

        return $self;
    }

    /**
     * Link to more information about the alert, if available.
     */
    public function withURL(string $url): self
    {
        $self = clone $this;
        $self['url'] = $url;

        return $self;
    }
}
