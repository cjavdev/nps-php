<?php

declare(strict_types=1);

namespace Nps\Maps\MapGetParkBoundariesResponse\Data;

use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Contracts\BaseModel;

/**
 * @phpstan-type PropertiesShape = array{parkClass?: string|null}
 */
final class Properties implements BaseModel
{
    /** @use SdkModel<PropertiesShape> */
    use SdkModel;

    #[Optional]
    public ?string $parkClass;

    public function __construct()
    {
        $this->initialize();
    }

    /**
     * Construct an instance from the required parameters.
     *
     * You must use named parameters to construct any parameters with a default value.
     */
    public static function with(?string $parkClass = null): self
    {
        $self = new self;

        null !== $parkClass && $self['parkClass'] = $parkClass;

        return $self;
    }

    public function withParkClass(string $parkClass): self
    {
        $self = clone $this;
        $self['parkClass'] = $parkClass;

        return $self;
    }
}
