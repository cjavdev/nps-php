<?php

declare(strict_types=1);

namespace Nps\Feespasses\FeespassListResponseItem\Data;

use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Contracts\BaseModel;
use Nps\Feespasses\FeespassListResponseItem\Data\RelatedMultiSitePass\Image;
use Nps\Feespasses\FeespassListResponseItem\Data\RelatedMultiSitePass\PurchaseLocation;
use Nps\Feespasses\FeespassListResponseItem\Data\RelatedMultiSitePass\RelatedPark;

/**
 * @phpstan-import-type ImageShape from \Nps\Feespasses\FeespassListResponseItem\Data\RelatedMultiSitePass\Image
 * @phpstan-import-type PurchaseLocationShape from \Nps\Feespasses\FeespassListResponseItem\Data\RelatedMultiSitePass\PurchaseLocation
 * @phpstan-import-type RelatedParkShape from \Nps\Feespasses\FeespassListResponseItem\Data\RelatedMultiSitePass\RelatedPark
 *
 * @phpstan-type RelatedMultiSitePassShape = array{
 *   audience?: string|null,
 *   cost?: string|null,
 *   description?: string|null,
 *   images?: list<Image|ImageShape>|null,
 *   purchaseLocations?: list<PurchaseLocation|PurchaseLocationShape>|null,
 *   relatedParks?: list<RelatedPark|RelatedParkShape>|null,
 *   title?: string|null,
 *   type?: string|null,
 * }
 */
final class RelatedMultiSitePass implements BaseModel
{
    /** @use SdkModel<RelatedMultiSitePassShape> */
    use SdkModel;

    #[Optional]
    public ?string $audience;

    #[Optional]
    public ?string $cost;

    #[Optional]
    public ?string $description;

    /** @var list<Image>|null $images */
    #[Optional(list: Image::class)]
    public ?array $images;

    /** @var list<PurchaseLocation>|null $purchaseLocations */
    #[Optional(list: PurchaseLocation::class)]
    public ?array $purchaseLocations;

    /** @var list<RelatedPark>|null $relatedParks */
    #[Optional(list: RelatedPark::class)]
    public ?array $relatedParks;

    #[Optional]
    public ?string $title;

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
     * @param list<Image|ImageShape>|null $images
     * @param list<PurchaseLocation|PurchaseLocationShape>|null $purchaseLocations
     * @param list<RelatedPark|RelatedParkShape>|null $relatedParks
     */
    public static function with(
        ?string $audience = null,
        ?string $cost = null,
        ?string $description = null,
        ?array $images = null,
        ?array $purchaseLocations = null,
        ?array $relatedParks = null,
        ?string $title = null,
        ?string $type = null,
    ): self {
        $self = new self;

        null !== $audience && $self['audience'] = $audience;
        null !== $cost && $self['cost'] = $cost;
        null !== $description && $self['description'] = $description;
        null !== $images && $self['images'] = $images;
        null !== $purchaseLocations && $self['purchaseLocations'] = $purchaseLocations;
        null !== $relatedParks && $self['relatedParks'] = $relatedParks;
        null !== $title && $self['title'] = $title;
        null !== $type && $self['type'] = $type;

        return $self;
    }

    public function withAudience(string $audience): self
    {
        $self = clone $this;
        $self['audience'] = $audience;

        return $self;
    }

    public function withCost(string $cost): self
    {
        $self = clone $this;
        $self['cost'] = $cost;

        return $self;
    }

    public function withDescription(string $description): self
    {
        $self = clone $this;
        $self['description'] = $description;

        return $self;
    }

    /**
     * @param list<Image|ImageShape> $images
     */
    public function withImages(array $images): self
    {
        $self = clone $this;
        $self['images'] = $images;

        return $self;
    }

    /**
     * @param list<PurchaseLocation|PurchaseLocationShape> $purchaseLocations
     */
    public function withPurchaseLocations(array $purchaseLocations): self
    {
        $self = clone $this;
        $self['purchaseLocations'] = $purchaseLocations;

        return $self;
    }

    /**
     * @param list<RelatedPark|RelatedParkShape> $relatedParks
     */
    public function withRelatedParks(array $relatedParks): self
    {
        $self = clone $this;
        $self['relatedParks'] = $relatedParks;

        return $self;
    }

    public function withTitle(string $title): self
    {
        $self = clone $this;
        $self['title'] = $title;

        return $self;
    }

    public function withType(string $type): self
    {
        $self = clone $this;
        $self['type'] = $type;

        return $self;
    }
}
