<?php

declare(strict_types=1);

namespace Nps\Campgrounds\CampgroundListResponse\Data\Data;

use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Contracts\BaseModel;

/**
 * Detailed information about amenities available in the campground.
 *
 * @phpstan-type AmenitiesShape = array{
 *   amphitheater?: string|null,
 *   ampitheater?: string|null,
 *   campstore?: string|null,
 *   cellphonereception?: string|null,
 *   dumpstation?: string|null,
 *   firewoodforsale?: string|null,
 *   foodStorageLockers?: string|null,
 *   iceavailableforsale?: string|null,
 *   internetconnectivity?: string|null,
 *   laundry?: string|null,
 *   potablewater?: list<string>|null,
 *   showers?: list<string>|null,
 *   stafforvolunteerhostonsite?: string|null,
 *   toilets?: list<string>|null,
 *   trashrecyclingcollection?: string|null,
 * }
 */
final class Amenities implements BaseModel
{
    /** @use SdkModel<AmenitiesShape> */
    use SdkModel;

    #[Optional]
    public ?string $amphitheater;

    #[Optional]
    public ?string $ampitheater;

    #[Optional]
    public ?string $campstore;

    #[Optional]
    public ?string $cellphonereception;

    #[Optional]
    public ?string $dumpstation;

    #[Optional]
    public ?string $firewoodforsale;

    #[Optional]
    public ?string $foodStorageLockers;

    #[Optional]
    public ?string $iceavailableforsale;

    #[Optional]
    public ?string $internetconnectivity;

    #[Optional]
    public ?string $laundry;

    /** @var list<string>|null $potablewater */
    #[Optional(list: 'string')]
    public ?array $potablewater;

    /** @var list<string>|null $showers */
    #[Optional(list: 'string')]
    public ?array $showers;

    #[Optional]
    public ?string $stafforvolunteerhostonsite;

    /** @var list<string>|null $toilets */
    #[Optional(list: 'string')]
    public ?array $toilets;

    #[Optional]
    public ?string $trashrecyclingcollection;

    public function __construct()
    {
        $this->initialize();
    }

    /**
     * Construct an instance from the required parameters.
     *
     * You must use named parameters to construct any parameters with a default value.
     *
     * @param list<string>|null $potablewater
     * @param list<string>|null $showers
     * @param list<string>|null $toilets
     */
    public static function with(
        ?string $amphitheater = null,
        ?string $ampitheater = null,
        ?string $campstore = null,
        ?string $cellphonereception = null,
        ?string $dumpstation = null,
        ?string $firewoodforsale = null,
        ?string $foodStorageLockers = null,
        ?string $iceavailableforsale = null,
        ?string $internetconnectivity = null,
        ?string $laundry = null,
        ?array $potablewater = null,
        ?array $showers = null,
        ?string $stafforvolunteerhostonsite = null,
        ?array $toilets = null,
        ?string $trashrecyclingcollection = null,
    ): self {
        $self = new self;

        null !== $amphitheater && $self['amphitheater'] = $amphitheater;
        null !== $ampitheater && $self['ampitheater'] = $ampitheater;
        null !== $campstore && $self['campstore'] = $campstore;
        null !== $cellphonereception && $self['cellphonereception'] = $cellphonereception;
        null !== $dumpstation && $self['dumpstation'] = $dumpstation;
        null !== $firewoodforsale && $self['firewoodforsale'] = $firewoodforsale;
        null !== $foodStorageLockers && $self['foodStorageLockers'] = $foodStorageLockers;
        null !== $iceavailableforsale && $self['iceavailableforsale'] = $iceavailableforsale;
        null !== $internetconnectivity && $self['internetconnectivity'] = $internetconnectivity;
        null !== $laundry && $self['laundry'] = $laundry;
        null !== $potablewater && $self['potablewater'] = $potablewater;
        null !== $showers && $self['showers'] = $showers;
        null !== $stafforvolunteerhostonsite && $self['stafforvolunteerhostonsite'] = $stafforvolunteerhostonsite;
        null !== $toilets && $self['toilets'] = $toilets;
        null !== $trashrecyclingcollection && $self['trashrecyclingcollection'] = $trashrecyclingcollection;

        return $self;
    }

    public function withAmphitheater(string $amphitheater): self
    {
        $self = clone $this;
        $self['amphitheater'] = $amphitheater;

        return $self;
    }

    public function withAmpitheater(string $ampitheater): self
    {
        $self = clone $this;
        $self['ampitheater'] = $ampitheater;

        return $self;
    }

    public function withCampstore(string $campstore): self
    {
        $self = clone $this;
        $self['campstore'] = $campstore;

        return $self;
    }

    public function withCellphonereception(string $cellphonereception): self
    {
        $self = clone $this;
        $self['cellphonereception'] = $cellphonereception;

        return $self;
    }

    public function withDumpstation(string $dumpstation): self
    {
        $self = clone $this;
        $self['dumpstation'] = $dumpstation;

        return $self;
    }

    public function withFirewoodforsale(string $firewoodforsale): self
    {
        $self = clone $this;
        $self['firewoodforsale'] = $firewoodforsale;

        return $self;
    }

    public function withFoodStorageLockers(string $foodStorageLockers): self
    {
        $self = clone $this;
        $self['foodStorageLockers'] = $foodStorageLockers;

        return $self;
    }

    public function withIceavailableforsale(string $iceavailableforsale): self
    {
        $self = clone $this;
        $self['iceavailableforsale'] = $iceavailableforsale;

        return $self;
    }

    public function withInternetconnectivity(string $internetconnectivity): self
    {
        $self = clone $this;
        $self['internetconnectivity'] = $internetconnectivity;

        return $self;
    }

    public function withLaundry(string $laundry): self
    {
        $self = clone $this;
        $self['laundry'] = $laundry;

        return $self;
    }

    /**
     * @param list<string> $potablewater
     */
    public function withPotablewater(array $potablewater): self
    {
        $self = clone $this;
        $self['potablewater'] = $potablewater;

        return $self;
    }

    /**
     * @param list<string> $showers
     */
    public function withShowers(array $showers): self
    {
        $self = clone $this;
        $self['showers'] = $showers;

        return $self;
    }

    public function withStafforvolunteerhostonsite(
        string $stafforvolunteerhostonsite
    ): self {
        $self = clone $this;
        $self['stafforvolunteerhostonsite'] = $stafforvolunteerhostonsite;

        return $self;
    }

    /**
     * @param list<string> $toilets
     */
    public function withToilets(array $toilets): self
    {
        $self = clone $this;
        $self['toilets'] = $toilets;

        return $self;
    }

    public function withTrashrecyclingcollection(
        string $trashrecyclingcollection
    ): self {
        $self = clone $this;
        $self['trashrecyclingcollection'] = $trashrecyclingcollection;

        return $self;
    }
}
