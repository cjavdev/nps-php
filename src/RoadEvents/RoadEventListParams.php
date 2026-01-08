<?php

declare(strict_types=1);

namespace Nps\RoadEvents;

use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Concerns\SdkParams;
use Nps\Core\Contracts\BaseModel;

/**
 * @see Nps\Services\RoadEventsService::list()
 *
 * @phpstan-type RoadEventListParamsShape = array{
 *   parkCode?: string|null, type?: string|null
 * }
 */
final class RoadEventListParams implements BaseModel
{
    /** @use SdkModel<RoadEventListParamsShape> */
    use SdkModel;
    use SdkParams;

    /**
     * A comma delimited list of 4 character park codes.
     */
    #[Optional]
    public ?string $parkCode;

    /**
     * either 'incident' or 'workzone'.
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
     */
    public static function with(
        ?string $parkCode = null,
        ?string $type = null
    ): self {
        $self = new self;

        null !== $parkCode && $self['parkCode'] = $parkCode;
        null !== $type && $self['type'] = $type;

        return $self;
    }

    /**
     * A comma delimited list of 4 character park codes.
     */
    public function withParkCode(string $parkCode): self
    {
        $self = clone $this;
        $self['parkCode'] = $parkCode;

        return $self;
    }

    /**
     * either 'incident' or 'workzone'.
     */
    public function withType(string $type): self
    {
        $self = clone $this;
        $self['type'] = $type;

        return $self;
    }
}
