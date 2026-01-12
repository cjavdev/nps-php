<?php

declare(strict_types=1);

namespace Nps\Campgrounds\CampgroundListResponse\Data\Data;

use Nps\Campgrounds\CampgroundListResponse\Data\Data\Address\Type;
use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Contracts\BaseModel;

/**
 * @phpstan-type AddressShape = array{
 *   city?: string|null,
 *   countryCode?: string|null,
 *   line1?: string|null,
 *   line2?: string|null,
 *   line3?: string|null,
 *   postalCode?: string|null,
 *   provinceTerritoryCode?: string|null,
 *   stateCode?: string|null,
 *   type?: null|Type|value-of<Type>,
 * }
 */
final class Address implements BaseModel
{
    /** @use SdkModel<AddressShape> */
    use SdkModel;

    #[Optional]
    public ?string $city;

    #[Optional]
    public ?string $countryCode;

    #[Optional]
    public ?string $line1;

    #[Optional]
    public ?string $line2;

    #[Optional]
    public ?string $line3;

    #[Optional]
    public ?string $postalCode;

    #[Optional]
    public ?string $provinceTerritoryCode;

    #[Optional]
    public ?string $stateCode;

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
        ?string $city = null,
        ?string $countryCode = null,
        ?string $line1 = null,
        ?string $line2 = null,
        ?string $line3 = null,
        ?string $postalCode = null,
        ?string $provinceTerritoryCode = null,
        ?string $stateCode = null,
        Type|string|null $type = null,
    ): self {
        $self = new self;

        null !== $city && $self['city'] = $city;
        null !== $countryCode && $self['countryCode'] = $countryCode;
        null !== $line1 && $self['line1'] = $line1;
        null !== $line2 && $self['line2'] = $line2;
        null !== $line3 && $self['line3'] = $line3;
        null !== $postalCode && $self['postalCode'] = $postalCode;
        null !== $provinceTerritoryCode && $self['provinceTerritoryCode'] = $provinceTerritoryCode;
        null !== $stateCode && $self['stateCode'] = $stateCode;
        null !== $type && $self['type'] = $type;

        return $self;
    }

    public function withCity(string $city): self
    {
        $self = clone $this;
        $self['city'] = $city;

        return $self;
    }

    public function withCountryCode(string $countryCode): self
    {
        $self = clone $this;
        $self['countryCode'] = $countryCode;

        return $self;
    }

    public function withLine1(string $line1): self
    {
        $self = clone $this;
        $self['line1'] = $line1;

        return $self;
    }

    public function withLine2(string $line2): self
    {
        $self = clone $this;
        $self['line2'] = $line2;

        return $self;
    }

    public function withLine3(string $line3): self
    {
        $self = clone $this;
        $self['line3'] = $line3;

        return $self;
    }

    public function withPostalCode(string $postalCode): self
    {
        $self = clone $this;
        $self['postalCode'] = $postalCode;

        return $self;
    }

    public function withProvinceTerritoryCode(
        string $provinceTerritoryCode
    ): self {
        $self = clone $this;
        $self['provinceTerritoryCode'] = $provinceTerritoryCode;

        return $self;
    }

    public function withStateCode(string $stateCode): self
    {
        $self = clone $this;
        $self['stateCode'] = $stateCode;

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
