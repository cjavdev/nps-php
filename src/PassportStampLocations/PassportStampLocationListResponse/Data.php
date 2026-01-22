<?php

declare(strict_types=1);

namespace Nps\PassportStampLocations\PassportStampLocationListResponse;

use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Contracts\BaseModel;
use Nps\PassportStampLocations\PassportStampLocationListResponse\Data\Park;

/**
 * @phpstan-import-type ParkShape from \Nps\PassportStampLocations\PassportStampLocationListResponse\Data\Park
 *
 * @phpstan-type DataShape = array{
 *   id?: string|null,
 *   label?: string|null,
 *   parks?: list<Park|ParkShape>|null,
 *   type?: string|null,
 * }
 */
final class Data implements BaseModel
{
    /** @use SdkModel<DataShape> */
    use SdkModel;

    #[Optional]
    public ?string $id;

    #[Optional]
    public ?string $label;

    /** @var list<Park>|null $parks */
    #[Optional(list: Park::class)]
    public ?array $parks;

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
     * @param list<Park|ParkShape>|null $parks
     */
    public static function with(
        ?string $id = null,
        ?string $label = null,
        ?array $parks = null,
        ?string $type = null,
    ): self {
        $self = new self;

        null !== $id && $self['id'] = $id;
        null !== $label && $self['label'] = $label;
        null !== $parks && $self['parks'] = $parks;
        null !== $type && $self['type'] = $type;

        return $self;
    }

    public function withID(string $id): self
    {
        $self = clone $this;
        $self['id'] = $id;

        return $self;
    }

    public function withLabel(string $label): self
    {
        $self = clone $this;
        $self['label'] = $label;

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

    public function withType(string $type): self
    {
        $self = clone $this;
        $self['type'] = $type;

        return $self;
    }
}
