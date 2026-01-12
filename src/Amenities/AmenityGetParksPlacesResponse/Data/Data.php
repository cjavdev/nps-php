<?php

declare(strict_types=1);

namespace Nps\Amenities\AmenityGetParksPlacesResponse\Data;

use Nps\Amenities\AmenityGetParksPlacesResponse\Data\Data\Park;
use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Contracts\BaseModel;

/**
 * @phpstan-import-type ParkShape from \Nps\Amenities\AmenityGetParksPlacesResponse\Data\Data\Park
 *
 * @phpstan-type DataShape = array{
 *   id?: string|null, name?: string|null, parks?: list<Park|ParkShape>|null
 * }
 */
final class Data implements BaseModel
{
    /** @use SdkModel<DataShape> */
    use SdkModel;

    /**
     * Unique identifier for this amenity.
     */
    #[Optional]
    public ?string $id;

    /**
     * Name of the amenity.
     */
    #[Optional]
    public ?string $name;

    /** @var list<Park>|null $parks */
    #[Optional(list: Park::class)]
    public ?array $parks;

    public function __construct()
    {
        $this->initialize();
    }

    /**
     * Construct an instance from the required parameters.
     *
     * You must use named parameters to construct any parameters with a default value.
     *
     * @param list<Park|ParkShape>|null $parks
     */
    public static function with(
        ?string $id = null,
        ?string $name = null,
        ?array $parks = null
    ): self {
        $self = new self;

        null !== $id && $self['id'] = $id;
        null !== $name && $self['name'] = $name;
        null !== $parks && $self['parks'] = $parks;

        return $self;
    }

    /**
     * Unique identifier for this amenity.
     */
    public function withID(string $id): self
    {
        $self = clone $this;
        $self['id'] = $id;

        return $self;
    }

    /**
     * Name of the amenity.
     */
    public function withName(string $name): self
    {
        $self = clone $this;
        $self['name'] = $name;

        return $self;
    }

    /**
     * @param list<Park|ParkShape> $parks
     */
    public function withParks(array $parks): self
    {
        $self = clone $this;
        $self['parks'] = $parks;

        return $self;
    }
}
