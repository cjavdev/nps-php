<?php

declare(strict_types=1);

namespace Nps\ParkingLots\ParkingLotListResponse\Data\Data\Contacts;

use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Contracts\BaseModel;
use Nps\ParkingLots\ParkingLotListResponse\Data\Data\Contacts\PhoneNumber\Type;

/**
 * @phpstan-type PhoneNumberShape = array{
 *   description?: string|null,
 *   extension?: string|null,
 *   phoneNumber?: string|null,
 *   type?: null|Type|value-of<Type>,
 * }
 */
final class PhoneNumber implements BaseModel
{
    /** @use SdkModel<PhoneNumberShape> */
    use SdkModel;

    #[Optional]
    public ?string $description;

    #[Optional]
    public ?string $extension;

    #[Optional]
    public ?string $phoneNumber;

    /** @var value-of<Type>|null $type */
    #[Optional(enum: Type::class)]
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
     * @param Type|value-of<Type>|null $type
     */
    public static function with(
        ?string $description = null,
        ?string $extension = null,
        ?string $phoneNumber = null,
        Type|string|null $type = null,
    ): self {
        $self = new self;

        null !== $description && $self['description'] = $description;
        null !== $extension && $self['extension'] = $extension;
        null !== $phoneNumber && $self['phoneNumber'] = $phoneNumber;
        null !== $type && $self['type'] = $type;

        return $self;
    }

    public function withDescription(string $description): self
    {
        $self = clone $this;
        $self['description'] = $description;

        return $self;
    }

    public function withExtension(string $extension): self
    {
        $self = clone $this;
        $self['extension'] = $extension;

        return $self;
    }

    public function withPhoneNumber(string $phoneNumber): self
    {
        $self = clone $this;
        $self['phoneNumber'] = $phoneNumber;

        return $self;
    }

    /**
     * @param Type|value-of<Type> $type
     */
    public function withType(Type|string $type): self
    {
        $self = clone $this;
        $self['type'] = $type;

        return $self;
    }
}
