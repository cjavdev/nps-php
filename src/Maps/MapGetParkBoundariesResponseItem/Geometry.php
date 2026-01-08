<?php

declare(strict_types=1);

namespace Nps\Maps\MapGetParkBoundariesResponseItem;

use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Contracts\BaseModel;
use Nps\Core\Conversion\ListOf;

/**
 * @phpstan-type GeometryShape = array{
 *   coordinates?: list<list<list<list<float>>>>|null, type?: string|null
 * }
 */
final class Geometry implements BaseModel
{
    /** @use SdkModel<GeometryShape> */
    use SdkModel;

    /** @var list<list<list<list<float>>>>|null $coordinates */
    #[Optional(list: new ListOf(new ListOf(new ListOf('float'))))]
    public ?array $coordinates;

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
     * @param list<list<list<list<float>>>>|null $coordinates
     */
    public static function with(
        ?array $coordinates = null,
        ?string $type = null
    ): self {
        $self = new self;

        null !== $coordinates && $self['coordinates'] = $coordinates;
        null !== $type && $self['type'] = $type;

        return $self;
    }

    /**
     * @param list<list<list<list<float>>>> $coordinates
     */
    public function withCoordinates(array $coordinates): self
    {
        $self = clone $this;
        $self['coordinates'] = $coordinates;

        return $self;
    }

    public function withType(string $type): self
    {
        $self = clone $this;
        $self['type'] = $type;

        return $self;
    }
}
