<?php

declare(strict_types=1);

namespace Nps\RoadEvents\RoadEventListResponse;

use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Contracts\BaseModel;
use Nps\RoadEvents\RoadEventListResponse\Data\Feature;
use Nps\RoadEvents\RoadEventListResponse\Data\RoadEventFeedInfo;

/**
 * @phpstan-import-type FeatureShape from \Nps\RoadEvents\RoadEventListResponse\Data\Feature
 * @phpstan-import-type RoadEventFeedInfoShape from \Nps\RoadEvents\RoadEventListResponse\Data\RoadEventFeedInfo
 *
 * @phpstan-type DataShape = array{
 *   features?: list<Feature|FeatureShape>|null,
 *   roadEventFeedInfo?: null|RoadEventFeedInfo|RoadEventFeedInfoShape,
 *   type?: string|null,
 * }
 */
final class Data implements BaseModel
{
    /** @use SdkModel<DataShape> */
    use SdkModel;

    /** @var list<Feature>|null $features */
    #[Optional(list: Feature::class)]
    public ?array $features;

    #[Optional('road_event_feed_info')]
    public ?RoadEventFeedInfo $roadEventFeedInfo;

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
     * @param list<Feature|FeatureShape>|null $features
     * @param RoadEventFeedInfo|RoadEventFeedInfoShape|null $roadEventFeedInfo
     */
    public static function with(
        ?array $features = null,
        RoadEventFeedInfo|array|null $roadEventFeedInfo = null,
        ?string $type = null,
    ): self {
        $self = new self;

        null !== $features && $self['features'] = $features;
        null !== $roadEventFeedInfo && $self['roadEventFeedInfo'] = $roadEventFeedInfo;
        null !== $type && $self['type'] = $type;

        return $self;
    }

    /**
     * @param list<Feature|FeatureShape> $features
     */
    public function withFeatures(array $features): self
    {
        $self = clone $this;
        $self['features'] = $features;

        return $self;
    }

    /**
     * @param RoadEventFeedInfo|RoadEventFeedInfoShape $roadEventFeedInfo
     */
    public function withRoadEventFeedInfo(
        RoadEventFeedInfo|array $roadEventFeedInfo
    ): self {
        $self = clone $this;
        $self['roadEventFeedInfo'] = $roadEventFeedInfo;

        return $self;
    }

    public function withType(string $type): self
    {
        $self = clone $this;
        $self['type'] = $type;

        return $self;
    }
}
