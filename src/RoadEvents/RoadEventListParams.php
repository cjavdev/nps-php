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
 *   limit?: int|null, parkCode?: string|null, start?: int|null, type?: string|null
 * }
 */
final class RoadEventListParams implements BaseModel
{
    /** @use SdkModel<RoadEventListParamsShape> */
    use SdkModel;
    use SdkParams;

    /**
     * Number of results to return per request. Default is 50.
     */
    #[Optional]
    public ?int $limit;

    /**
     * A comma delimited list of 4 character park codes.
     */
    #[Optional]
    public ?string $parkCode;

    /**
     * Number of results to return per request. Default is 50.
     */
    #[Optional]
    public ?int $start;

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
        ?int $limit = null,
        ?string $parkCode = null,
        ?int $start = null,
        ?string $type = null,
    ): self {
        $self = new self;

        null !== $limit && $self['limit'] = $limit;
        null !== $parkCode && $self['parkCode'] = $parkCode;
        null !== $start && $self['start'] = $start;
        null !== $type && $self['type'] = $type;

        return $self;
    }

    /**
     * Number of results to return per request. Default is 50.
     */
    public function withLimit(int $limit): self
    {
        $self = clone $this;
        $self['limit'] = $limit;

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
     * Number of results to return per request. Default is 50.
     */
    public function withStart(int $start): self
    {
        $self = clone $this;
        $self['start'] = $start;

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
