<?php

declare(strict_types=1);

namespace Nps\ParkingLots\ParkingLotListResponse\Data\Data;

use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Contracts\BaseModel;

/**
 * @phpstan-type FeeShape = array{
 *   cost?: string|null, description?: string|null, title?: string|null
 * }
 */
final class Fee implements BaseModel
{
    /** @use SdkModel<FeeShape> */
    use SdkModel;

    #[Optional]
    public ?string $cost;

    #[Optional]
    public ?string $description;

    #[Optional]
    public ?string $title;

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
        ?string $cost = null,
        ?string $description = null,
        ?string $title = null
    ): self {
        $self = new self;

        null !== $cost && $self['cost'] = $cost;
        null !== $description && $self['description'] = $description;
        null !== $title && $self['title'] = $title;

        return $self;
    }

    public function withCost(string $cost): self
    {
        $self = clone $this;
        $self['cost'] = $cost;

        return $self;
    }

    public function withDescription(string $description): self
    {
        $self = clone $this;
        $self['description'] = $description;

        return $self;
    }

    public function withTitle(string $title): self
    {
        $self = clone $this;
        $self['title'] = $title;

        return $self;
    }
}
