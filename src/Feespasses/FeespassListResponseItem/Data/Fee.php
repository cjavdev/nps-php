<?php

declare(strict_types=1);

namespace Nps\Feespasses\FeespassListResponseItem\Data;

use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Contracts\BaseModel;
use Nps\Feespasses\FeespassListResponseItem\Data\Fee\EndDate;
use Nps\Feespasses\FeespassListResponseItem\Data\Fee\StartDate;

/**
 * @phpstan-import-type EndDateShape from \Nps\Feespasses\FeespassListResponseItem\Data\Fee\EndDate
 * @phpstan-import-type StartDateShape from \Nps\Feespasses\FeespassListResponseItem\Data\Fee\StartDate
 *
 * @phpstan-type FeeShape = array{
 *   id?: string|null,
 *   cost?: string|null,
 *   description?: string|null,
 *   endDate?: null|EndDate|EndDateShape,
 *   entranceFeeType?: string|null,
 *   exceptions?: string|null,
 *   informationURL?: string|null,
 *   payGovPurchaseURL?: string|null,
 *   paymentDescription?: string|null,
 *   purchaseURL?: string|null,
 *   recGovPurchaseURL?: string|null,
 *   startDate?: null|StartDate|StartDateShape,
 *   timedEntryLocation?: string|null,
 *   timedEntryShortDescription?: string|null,
 * }
 */
final class Fee implements BaseModel
{
    /** @use SdkModel<FeeShape> */
    use SdkModel;

    #[Optional]
    public ?string $id;

    #[Optional]
    public ?string $cost;

    #[Optional]
    public ?string $description;

    #[Optional]
    public ?EndDate $endDate;

    #[Optional]
    public ?string $entranceFeeType;

    #[Optional]
    public ?string $exceptions;

    #[Optional('informationUrl')]
    public ?string $informationURL;

    #[Optional('payGovPurchaseUrl')]
    public ?string $payGovPurchaseURL;

    #[Optional]
    public ?string $paymentDescription;

    #[Optional('purchaseUrl')]
    public ?string $purchaseURL;

    #[Optional('recGovPurchaseUrl')]
    public ?string $recGovPurchaseURL;

    #[Optional]
    public ?StartDate $startDate;

    #[Optional]
    public ?string $timedEntryLocation;

    #[Optional]
    public ?string $timedEntryShortDescription;

    public function __construct()
    {
        $this->initialize();
    }

    /**
     * Construct an instance from the required parameters.
     *
     * You must use named parameters to construct any parameters with a default value.
     *
     * @param EndDate|EndDateShape|null $endDate
     * @param StartDate|StartDateShape|null $startDate
     */
    public static function with(
        ?string $id = null,
        ?string $cost = null,
        ?string $description = null,
        EndDate|array|null $endDate = null,
        ?string $entranceFeeType = null,
        ?string $exceptions = null,
        ?string $informationURL = null,
        ?string $payGovPurchaseURL = null,
        ?string $paymentDescription = null,
        ?string $purchaseURL = null,
        ?string $recGovPurchaseURL = null,
        StartDate|array|null $startDate = null,
        ?string $timedEntryLocation = null,
        ?string $timedEntryShortDescription = null,
    ): self {
        $self = new self;

        null !== $id && $self['id'] = $id;
        null !== $cost && $self['cost'] = $cost;
        null !== $description && $self['description'] = $description;
        null !== $endDate && $self['endDate'] = $endDate;
        null !== $entranceFeeType && $self['entranceFeeType'] = $entranceFeeType;
        null !== $exceptions && $self['exceptions'] = $exceptions;
        null !== $informationURL && $self['informationURL'] = $informationURL;
        null !== $payGovPurchaseURL && $self['payGovPurchaseURL'] = $payGovPurchaseURL;
        null !== $paymentDescription && $self['paymentDescription'] = $paymentDescription;
        null !== $purchaseURL && $self['purchaseURL'] = $purchaseURL;
        null !== $recGovPurchaseURL && $self['recGovPurchaseURL'] = $recGovPurchaseURL;
        null !== $startDate && $self['startDate'] = $startDate;
        null !== $timedEntryLocation && $self['timedEntryLocation'] = $timedEntryLocation;
        null !== $timedEntryShortDescription && $self['timedEntryShortDescription'] = $timedEntryShortDescription;

        return $self;
    }

    public function withID(string $id): self
    {
        $self = clone $this;
        $self['id'] = $id;

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
     * @param EndDate|EndDateShape $endDate
     */
    public function withEndDate(EndDate|array $endDate): self
    {
        $self = clone $this;
        $self['endDate'] = $endDate;

        return $self;
    }

    public function withEntranceFeeType(string $entranceFeeType): self
    {
        $self = clone $this;
        $self['entranceFeeType'] = $entranceFeeType;

        return $self;
    }

    public function withExceptions(string $exceptions): self
    {
        $self = clone $this;
        $self['exceptions'] = $exceptions;

        return $self;
    }

    public function withInformationURL(string $informationURL): self
    {
        $self = clone $this;
        $self['informationURL'] = $informationURL;

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

    public function withPurchaseURL(string $purchaseURL): self
    {
        $self = clone $this;
        $self['purchaseURL'] = $purchaseURL;

        return $self;
    }

    public function withRecGovPurchaseURL(string $recGovPurchaseURL): self
    {
        $self = clone $this;
        $self['recGovPurchaseURL'] = $recGovPurchaseURL;

        return $self;
    }

    /**
     * @param StartDate|StartDateShape $startDate
     */
    public function withStartDate(StartDate|array $startDate): self
    {
        $self = clone $this;
        $self['startDate'] = $startDate;

        return $self;
    }

    public function withTimedEntryLocation(string $timedEntryLocation): self
    {
        $self = clone $this;
        $self['timedEntryLocation'] = $timedEntryLocation;

        return $self;
    }

    public function withTimedEntryShortDescription(
        string $timedEntryShortDescription
    ): self {
        $self = clone $this;
        $self['timedEntryShortDescription'] = $timedEntryShortDescription;

        return $self;
    }
}
