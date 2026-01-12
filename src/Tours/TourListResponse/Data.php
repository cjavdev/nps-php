<?php

declare(strict_types=1);

namespace Nps\Tours\TourListResponse;

use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Contracts\BaseModel;
use Nps\Tours\TourListResponse\Data\Activity;
use Nps\Tours\TourListResponse\Data\Image;
use Nps\Tours\TourListResponse\Data\Park;
use Nps\Tours\TourListResponse\Data\Stop;
use Nps\Tours\TourListResponse\Data\Topic;

/**
 * @phpstan-import-type ActivityShape from \Nps\Tours\TourListResponse\Data\Activity
 * @phpstan-import-type ImageShape from \Nps\Tours\TourListResponse\Data\Image
 * @phpstan-import-type ParkShape from \Nps\Tours\TourListResponse\Data\Park
 * @phpstan-import-type StopShape from \Nps\Tours\TourListResponse\Data\Stop
 * @phpstan-import-type TopicShape from \Nps\Tours\TourListResponse\Data\Topic
 *
 * @phpstan-type DataShape = array{
 *   id?: string|null,
 *   activities?: list<Activity|ActivityShape>|null,
 *   description?: string|null,
 *   durationMax?: string|null,
 *   durationMin?: string|null,
 *   durationUnit?: string|null,
 *   images?: list<Image|ImageShape>|null,
 *   park?: null|Park|ParkShape,
 *   relevanceScore?: float|null,
 *   stops?: list<Stop|StopShape>|null,
 *   tags?: list<mixed>|null,
 *   title?: string|null,
 *   topics?: list<Topic|TopicShape>|null,
 *   type?: string|null,
 * }
 */
final class Data implements BaseModel
{
    /** @use SdkModel<DataShape> */
    use SdkModel;

    #[Optional]
    public ?string $id;

    /** @var list<Activity>|null $activities */
    #[Optional(list: Activity::class)]
    public ?array $activities;

    #[Optional]
    public ?string $description;

    #[Optional]
    public ?string $durationMax;

    #[Optional]
    public ?string $durationMin;

    #[Optional]
    public ?string $durationUnit;

    /** @var list<Image>|null $images */
    #[Optional(list: Image::class)]
    public ?array $images;

    #[Optional]
    public ?Park $park;

    /**
     * The relevance score is a numeric calculation of how much your item meets the criteria of your q (query text) search. This is normally coupled with a sort value of -relevanceScore. A higher value means that your item meets the criteria of the q search with a higher frequency and accuracy.
     */
    #[Optional]
    public ?float $relevanceScore;

    /** @var list<Stop>|null $stops */
    #[Optional(list: Stop::class)]
    public ?array $stops;

    /** @var list<mixed>|null $tags */
    #[Optional(list: 'mixed')]
    public ?array $tags;

    #[Optional]
    public ?string $title;

    /** @var list<Topic>|null $topics */
    #[Optional(list: Topic::class)]
    public ?array $topics;

    /**
     * Tour type. Options: Standard, Driving, or Non-Geo-Located.
     */
    #[Optional]
    public ?string $type;

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
     * @param Park|ParkShape|null $park
     * @param list<Stop|StopShape>|null $stops
     * @param list<mixed>|null $tags
     * @param list<Topic|TopicShape>|null $topics
     */
    public static function with(
        ?string $id = null,
        ?array $activities = null,
        ?string $description = null,
        ?string $durationMax = null,
        ?string $durationMin = null,
        ?string $durationUnit = null,
        ?array $images = null,
        Park|array|null $park = null,
        ?float $relevanceScore = null,
        ?array $stops = null,
        ?array $tags = null,
        ?string $title = null,
        ?array $topics = null,
        ?string $type = null,
    ): self {
        $self = new self;

        null !== $id && $self['id'] = $id;
        null !== $activities && $self['activities'] = $activities;
        null !== $description && $self['description'] = $description;
        null !== $durationMax && $self['durationMax'] = $durationMax;
        null !== $durationMin && $self['durationMin'] = $durationMin;
        null !== $durationUnit && $self['durationUnit'] = $durationUnit;
        null !== $images && $self['images'] = $images;
        null !== $park && $self['park'] = $park;
        null !== $relevanceScore && $self['relevanceScore'] = $relevanceScore;
        null !== $stops && $self['stops'] = $stops;
        null !== $tags && $self['tags'] = $tags;
        null !== $title && $self['title'] = $title;
        null !== $topics && $self['topics'] = $topics;
        null !== $type && $self['type'] = $type;

        return $self;
    }

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

    public function withDescription(string $description): self
    {
        $self = clone $this;
        $self['description'] = $description;

        return $self;
    }

    public function withDurationMax(string $durationMax): self
    {
        $self = clone $this;
        $self['durationMax'] = $durationMax;

        return $self;
    }

    public function withDurationMin(string $durationMin): self
    {
        $self = clone $this;
        $self['durationMin'] = $durationMin;

        return $self;
    }

    public function withDurationUnit(string $durationUnit): self
    {
        $self = clone $this;
        $self['durationUnit'] = $durationUnit;

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
     * @param Park|ParkShape $park
     */
    public function withPark(Park|array $park): self
    {
        $self = clone $this;
        $self['park'] = $park;

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
     * @param list<Stop|StopShape> $stops
     */
    public function withStops(array $stops): self
    {
        $self = clone $this;
        $self['stops'] = $stops;

        return $self;
    }

    /**
     * @param list<mixed> $tags
     */
    public function withTags(array $tags): self
    {
        $self = clone $this;
        $self['tags'] = $tags;

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
     * Tour type. Options: Standard, Driving, or Non-Geo-Located.
     */
    public function withType(string $type): self
    {
        $self = clone $this;
        $self['type'] = $type;

        return $self;
    }
}
