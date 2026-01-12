<?php

declare(strict_types=1);

namespace Nps\RoadEvents\RoadEventListResponse\Feature\Properties;

use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Contracts\BaseModel;

/**
 * @phpstan-type TypesOfWorkShape = array{typeName?: string|null}
 */
final class TypesOfWork implements BaseModel
{
    /** @use SdkModel<TypesOfWorkShape> */
    use SdkModel;

    #[Optional('type_name')]
    public ?string $typeName;

    public function __construct()
    {
        $this->initialize();
    }

    /**
     * Construct an instance from the required parameters.
     *
     * You must use named parameters to construct any parameters with a default value.
     */
    public static function with(?string $typeName = null): self
    {
        $self = new self;

        null !== $typeName && $self['typeName'] = $typeName;

        return $self;
    }

    public function withTypeName(string $typeName): self
    {
        $self = clone $this;
        $self['typeName'] = $typeName;

        return $self;
    }
}
