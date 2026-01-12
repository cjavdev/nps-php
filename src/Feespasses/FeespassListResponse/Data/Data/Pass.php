<?php

declare(strict_types=1);

namespace Nps\Feespasses\FeespassListResponse\Data\Data;

use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Contracts\BaseModel;
use Nps\Feespasses\FeespassListResponse\Data\Data\Pass\Image;

/**
 * @phpstan-import-type ImageShape from \Nps\Feespasses\FeespassListResponse\Data\Data\Pass\Image
 *
 * @phpstan-type PassShape = array{
 *   id?: string|null,
 *   category?: string|null,
 *   cost?: string|null,
 *   description?: string|null,
 *   exceptions?: string|null,
 *   image?: list<Image|ImageShape>|null,
 *   informationURL?: string|null,
 *   npsGovPurchaseURL?: string|null,
 *   payGovPurchaseURL?: string|null,
 *   paymentDescription?: string|null,
 *   recGovPurchaseURL?: string|null,
 * }
 */
final class Pass implements BaseModel
{
    /** @use SdkModel<PassShape> */
    use SdkModel;

    #[Optional]
    public ?string $id;

    #[Optional]
    public ?string $category;

    #[Optional]
    public ?string $cost;

    #[Optional]
    public ?string $description;

    #[Optional]
    public ?string $exceptions;

    /** @var list<Image>|null $image */
    #[Optional(list: Image::class)]
    public ?array $image;

    #[Optional('informationUrl')]
    public ?string $informationURL;

    #[Optional('npsGovPurchaseUrl')]
    public ?string $npsGovPurchaseURL;

    #[Optional('payGovPurchaseUrl')]
    public ?string $payGovPurchaseURL;

    #[Optional]
    public ?string $paymentDescription;

    #[Optional('recGovPurchaseUrl')]
    public ?string $recGovPurchaseURL;

    public function __construct()
    {
        $this->initialize();
    }

    /**
     * Construct an instance from the required parameters.
     *
     * You must use named parameters to construct any parameters with a default value.
     *
     * @param list<Image|ImageShape>|null $image
     */
    public static function with(
        ?string $id = null,
        ?string $category = null,
        ?string $cost = null,
        ?string $description = null,
        ?string $exceptions = null,
        ?array $image = null,
        ?string $informationURL = null,
        ?string $npsGovPurchaseURL = null,
        ?string $payGovPurchaseURL = null,
        ?string $paymentDescription = null,
        ?string $recGovPurchaseURL = null,
    ): self {
        $self = new self;

        null !== $id && $self['id'] = $id;
        null !== $category && $self['category'] = $category;
        null !== $cost && $self['cost'] = $cost;
        null !== $description && $self['description'] = $description;
        null !== $exceptions && $self['exceptions'] = $exceptions;
        null !== $image && $self['image'] = $image;
        null !== $informationURL && $self['informationURL'] = $informationURL;
        null !== $npsGovPurchaseURL && $self['npsGovPurchaseURL'] = $npsGovPurchaseURL;
        null !== $payGovPurchaseURL && $self['payGovPurchaseURL'] = $payGovPurchaseURL;
        null !== $paymentDescription && $self['paymentDescription'] = $paymentDescription;
        null !== $recGovPurchaseURL && $self['recGovPurchaseURL'] = $recGovPurchaseURL;

        return $self;
    }

    public function withID(string $id): self
    {
        $self = clone $this;
        $self['id'] = $id;

        return $self;
    }

    public function withCategory(string $category): self
    {
        $self = clone $this;
        $self['category'] = $category;

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

    public function withExceptions(string $exceptions): self
    {
        $self = clone $this;
        $self['exceptions'] = $exceptions;

        return $self;
    }

    /**
     * @param list<Image|ImageShape> $image
     */
    public function withImage(array $image): self
    {
        $self = clone $this;
        $self['image'] = $image;

        return $self;
    }

    public function withInformationURL(string $informationURL): self
    {
        $self = clone $this;
        $self['informationURL'] = $informationURL;

        return $self;
    }

    public function withNpsGovPurchaseURL(string $npsGovPurchaseURL): self
    {
        $self = clone $this;
        $self['npsGovPurchaseURL'] = $npsGovPurchaseURL;

        return $self;
    }

    public function withPayGovPurchaseURL(string $payGovPurchaseURL): self
    {
        $self = clone $this;
        $self['payGovPurchaseURL'] = $payGovPurchaseURL;

        return $self;
    }

    public function withPaymentDescription(string $paymentDescription): self
    {
        $self = clone $this;
        $self['paymentDescription'] = $paymentDescription;

        return $self;
    }

    public function withRecGovPurchaseURL(string $recGovPurchaseURL): self
    {
        $self = clone $this;
        $self['recGovPurchaseURL'] = $recGovPurchaseURL;

        return $self;
    }
}
