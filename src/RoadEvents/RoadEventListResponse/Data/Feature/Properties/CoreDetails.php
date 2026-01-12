<?php

declare(strict_types=1);

namespace Nps\RoadEvents\RoadEventListResponse\Data\Feature\Properties;

use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Contracts\BaseModel;

/**
 * @phpstan-type CoreDetailsShape = array{
 *   dataSourceID?: string|null,
 *   description?: string|null,
 *   direction?: string|null,
 *   eventType?: string|null,
 *   name?: string|null,
 *   roadNames?: list<string>|null,
 * }
 */
final class CoreDetails implements BaseModel
{
    /** @use SdkModel<CoreDetailsShape> */
    use SdkModel;

    #[Optional('data_source_id')]
    public ?string $dataSourceID;

    #[Optional]
    public ?string $description;

    #[Optional]
    public ?string $direction;

    #[Optional('event_type')]
    public ?string $eventType;

    #[Optional]
    public ?string $name;

    /** @var list<string>|null $roadNames */
    #[Optional('road_names', list: 'string')]
    public ?array $roadNames;

    public function __construct()
    {
        $this->initialize();
    }

    /**
     * Construct an instance from the required parameters.
     *
     * You must use named parameters to construct any parameters with a default value.
     *
     * @param list<string>|null $roadNames
     */
    public static function with(
        ?string $dataSourceID = null,
        ?string $description = null,
        ?string $direction = null,
        ?string $eventType = null,
        ?string $name = null,
        ?array $roadNames = null,
    ): self {
        $self = new self;

        null !== $dataSourceID && $self['dataSourceID'] = $dataSourceID;
        null !== $description && $self['description'] = $description;
        null !== $direction && $self['direction'] = $direction;
        null !== $eventType && $self['eventType'] = $eventType;
        null !== $name && $self['name'] = $name;
        null !== $roadNames && $self['roadNames'] = $roadNames;

        return $self;
    }

    public function withDataSourceID(string $dataSourceID): self
    {
        $self = clone $this;
        $self['dataSourceID'] = $dataSourceID;

        return $self;
    }

    public function withDescription(string $description): self
    {
        $self = clone $this;
        $self['description'] = $description;

        return $self;
    }

    public function withDirection(string $direction): self
    {
        $self = clone $this;
        $self['direction'] = $direction;

        return $self;
    }

    public function withEventType(string $eventType): self
    {
        $self = clone $this;
        $self['eventType'] = $eventType;

        return $self;
    }

    public function withName(string $name): self
    {
        $self = clone $this;
        $self['name'] = $name;

        return $self;
    }

    /**
     * @param list<string> $roadNames
     */
    public function withRoadNames(array $roadNames): self
    {
        $self = clone $this;
        $self['roadNames'] = $roadNames;

        return $self;
    }
}
