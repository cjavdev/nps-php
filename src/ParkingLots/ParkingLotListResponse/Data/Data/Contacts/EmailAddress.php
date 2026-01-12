<?php

declare(strict_types=1);

namespace Nps\ParkingLots\ParkingLotListResponse\Data\Data\Contacts;

use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Contracts\BaseModel;

/**
 * @phpstan-type EmailAddressShape = array{
 *   description?: string|null, emailAddress?: string|null
 * }
 */
final class EmailAddress implements BaseModel
{
    /** @use SdkModel<EmailAddressShape> */
    use SdkModel;

    #[Optional]
    public ?string $description;

    #[Optional]
    public ?string $emailAddress;

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
        ?string $description = null,
        ?string $emailAddress = null
    ): self {
        $self = new self;

        null !== $description && $self['description'] = $description;
        null !== $emailAddress && $self['emailAddress'] = $emailAddress;

        return $self;
    }

    public function withDescription(string $description): self
    {
        $self = clone $this;
        $self['description'] = $description;

        return $self;
    }

    public function withEmailAddress(string $emailAddress): self
    {
        $self = clone $this;
        $self['emailAddress'] = $emailAddress;

        return $self;
    }
}
