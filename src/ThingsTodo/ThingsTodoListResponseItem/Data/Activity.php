<?php

declare(strict_types=1);

namespace Nps\ThingsTodo\ThingsTodoListResponseItem\Data;

use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Contracts\BaseModel;

/**
 * @phpstan-type ActivityShape = array{id?: string|null, name?: string|null}
 */
final class Activity implements BaseModel
{
    /** @use SdkModel<ActivityShape> */
    use SdkModel;

    /**
     * UUID for this activity.
     */
    #[Optional]
    public ?string $id;

    /**
     * name for this activity.
     */
    #[Optional]
    public ?string $name;

    public function __construct()
    {
        $this->initialize();
    }

    /**
     * Construct an instance from the required parameters.
     *
     * You must use named parameters to construct any parameters with a default value.
     */
    public static function with(?string $id = null, ?string $name = null): self
    {
        $self = new self;

        null !== $id && $self['id'] = $id;
        null !== $name && $self['name'] = $name;

        return $self;
    }

    /**
     * UUID for this activity.
     */
    public function withID(string $id): self
    {
        $self = clone $this;
        $self['id'] = $id;

        return $self;
    }

    /**
     * name for this activity.
     */
    public function withName(string $name): self
    {
        $self = clone $this;
        $self['name'] = $name;

        return $self;
    }
}
