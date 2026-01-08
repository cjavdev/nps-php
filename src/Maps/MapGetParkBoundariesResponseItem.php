<?php

declare(strict_types=1);

namespace Nps\Maps;

use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Contracts\BaseModel;
use Nps\Maps\MapGetParkBoundariesResponseItem\Geometry;
use Nps\Maps\MapGetParkBoundariesResponseItem\Properties;

/**
 * @phpstan-import-type GeometryShape from \Nps\Maps\MapGetParkBoundariesResponseItem\Geometry
 * @phpstan-import-type PropertiesShape from \Nps\Maps\MapGetParkBoundariesResponseItem\Properties
 *
 * @phpstan-type MapGetParkBoundariesResponseItemShape = array{
 *   id?: string|null,
 *   geometry?: null|Geometry|GeometryShape,
 *   properties?: null|Properties|PropertiesShape,
 *   type?: string|null,
 * }
 */
final class MapGetParkBoundariesResponseItem implements BaseModel
{
    /** @use SdkModel<MapGetParkBoundariesResponseItemShape> */
    use SdkModel;

    #[Optional]
    public ?string $id;

    #[Optional]
    public ?Geometry $geometry;

    #[Optional]
    public ?Properties $properties;

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
     * @param Geometry|GeometryShape|null $geometry
     * @param Properties|PropertiesShape|null $properties
     */
    public static function with(
        ?string $id = null,
        Geometry|array|null $geometry = null,
        Properties|array|null $properties = null,
        ?string $type = null,
    ): self {
        $self = new self;

        null !== $id && $self['id'] = $id;
        null !== $geometry && $self['geometry'] = $geometry;
        null !== $properties && $self['properties'] = $properties;
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
     * @param Geometry|GeometryShape $geometry
     */
    public function withGeometry(Geometry|array $geometry): self
    {
        $self = clone $this;
        $self['geometry'] = $geometry;

        return $self;
    }

    /**
     * @param Properties|PropertiesShape $properties
     */
    public function withProperties(Properties|array $properties): self
    {
        $self = clone $this;
        $self['properties'] = $properties;

        return $self;
    }

    public function withType(string $type): self
    {
        $self = clone $this;
        $self['type'] = $type;

        return $self;
    }
}
