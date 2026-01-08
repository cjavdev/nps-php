<?php

declare(strict_types=1);

namespace Nps\Feespasses\FeespassListResponseItem;

use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Contracts\BaseModel;
use Nps\Feespasses\FeespassListResponseItem\Data\ContentOrderOrdinals;
use Nps\Feespasses\FeespassListResponseItem\Data\Fee;
use Nps\Feespasses\FeespassListResponseItem\Data\Pass;
use Nps\Feespasses\FeespassListResponseItem\Data\RelatedMultiSitePass;

/**
 * @phpstan-import-type FeeShape from \Nps\Feespasses\FeespassListResponseItem\Data\Fee
 * @phpstan-import-type PassShape from \Nps\Feespasses\FeespassListResponseItem\Data\Pass
 * @phpstan-import-type RelatedMultiSitePassShape from \Nps\Feespasses\FeespassListResponseItem\Data\RelatedMultiSitePass
 *
 * @phpstan-type DataShape = array{
 *   cashless?: string|null,
 *   contentOrderOrdinals?: null|ContentOrderOrdinals|value-of<ContentOrderOrdinals>,
 *   customFeeDescription?: string|null,
 *   customFeeHeading?: string|null,
 *   customFeeLinkText?: string|null,
 *   customFeeLinkURL?: string|null,
 *   entranceFeeDescription?: string|null,
 *   entrancePassesDescription?: string|null,
 *   fees?: list<Fee|FeeShape>|null,
 *   feesAtWorkURL?: string|null,
 *   isFeeFreePark?: bool|null,
 *   isInteragencyPassAccepted?: bool|null,
 *   isParkingFeePossible?: bool|null,
 *   isParkingOrTransportationFeePossible?: bool|null,
 *   paidParkingDescription?: string|null,
 *   paidParkingHeading?: string|null,
 *   parkCode?: string|null,
 *   parkingDetailsURL?: string|null,
 *   passes?: list<Pass|PassShape>|null,
 *   relatedMultiSitePasses?: list<RelatedMultiSitePass|RelatedMultiSitePassShape>|null,
 *   timedEntryDescription?: string|null,
 *   timedEntryHeading?: string|null,
 * }
 */
final class Data implements BaseModel
{
    /** @use SdkModel<DataShape> */
    use SdkModel;

    #[Optional]
    public ?string $cashless;

    /** @var value-of<ContentOrderOrdinals>|null $contentOrderOrdinals */
    #[Optional(enum: ContentOrderOrdinals::class)]
    public ?string $contentOrderOrdinals;

    #[Optional]
    public ?string $customFeeDescription;

    #[Optional]
    public ?string $customFeeHeading;

    #[Optional]
    public ?string $customFeeLinkText;

    #[Optional('customFeeLinkUrl')]
    public ?string $customFeeLinkURL;

    #[Optional]
    public ?string $entranceFeeDescription;

    #[Optional]
    public ?string $entrancePassesDescription;

    /** @var list<Fee>|null $fees */
    #[Optional(list: Fee::class)]
    public ?array $fees;

    #[Optional('feesAtWorkUrl')]
    public ?string $feesAtWorkURL;

    #[Optional]
    public ?bool $isFeeFreePark;

    #[Optional]
    public ?bool $isInteragencyPassAccepted;

    #[Optional]
    public ?bool $isParkingFeePossible;

    #[Optional]
    public ?bool $isParkingOrTransportationFeePossible;

    #[Optional]
    public ?string $paidParkingDescription;

    #[Optional]
    public ?string $paidParkingHeading;

    #[Optional]
    public ?string $parkCode;

    #[Optional('parkingDetailsUrl')]
    public ?string $parkingDetailsURL;

    /** @var list<Pass>|null $passes */
    #[Optional(list: Pass::class)]
    public ?array $passes;

    /** @var list<RelatedMultiSitePass>|null $relatedMultiSitePasses */
    #[Optional(list: RelatedMultiSitePass::class)]
    public ?array $relatedMultiSitePasses;

    #[Optional]
    public ?string $timedEntryDescription;

    #[Optional]
    public ?string $timedEntryHeading;

    public function __construct()
    {
        $this->initialize();
    }

    /**
     * Construct an instance from the required parameters.
     *
     * You must use named parameters to construct any parameters with a default value.
     *
     * @param ContentOrderOrdinals|value-of<ContentOrderOrdinals>|null $contentOrderOrdinals
     * @param list<Fee|FeeShape>|null $fees
     * @param list<Pass|PassShape>|null $passes
     * @param list<RelatedMultiSitePass|RelatedMultiSitePassShape>|null $relatedMultiSitePasses
     */
    public static function with(
        ?string $cashless = null,
        ContentOrderOrdinals|string|null $contentOrderOrdinals = null,
        ?string $customFeeDescription = null,
        ?string $customFeeHeading = null,
        ?string $customFeeLinkText = null,
        ?string $customFeeLinkURL = null,
        ?string $entranceFeeDescription = null,
        ?string $entrancePassesDescription = null,
        ?array $fees = null,
        ?string $feesAtWorkURL = null,
        ?bool $isFeeFreePark = null,
        ?bool $isInteragencyPassAccepted = null,
        ?bool $isParkingFeePossible = null,
        ?bool $isParkingOrTransportationFeePossible = null,
        ?string $paidParkingDescription = null,
        ?string $paidParkingHeading = null,
        ?string $parkCode = null,
        ?string $parkingDetailsURL = null,
        ?array $passes = null,
        ?array $relatedMultiSitePasses = null,
        ?string $timedEntryDescription = null,
        ?string $timedEntryHeading = null,
    ): self {
        $self = new self;

        null !== $cashless && $self['cashless'] = $cashless;
        null !== $contentOrderOrdinals && $self['contentOrderOrdinals'] = $contentOrderOrdinals;
        null !== $customFeeDescription && $self['customFeeDescription'] = $customFeeDescription;
        null !== $customFeeHeading && $self['customFeeHeading'] = $customFeeHeading;
        null !== $customFeeLinkText && $self['customFeeLinkText'] = $customFeeLinkText;
        null !== $customFeeLinkURL && $self['customFeeLinkURL'] = $customFeeLinkURL;
        null !== $entranceFeeDescription && $self['entranceFeeDescription'] = $entranceFeeDescription;
        null !== $entrancePassesDescription && $self['entrancePassesDescription'] = $entrancePassesDescription;
        null !== $fees && $self['fees'] = $fees;
        null !== $feesAtWorkURL && $self['feesAtWorkURL'] = $feesAtWorkURL;
        null !== $isFeeFreePark && $self['isFeeFreePark'] = $isFeeFreePark;
        null !== $isInteragencyPassAccepted && $self['isInteragencyPassAccepted'] = $isInteragencyPassAccepted;
        null !== $isParkingFeePossible && $self['isParkingFeePossible'] = $isParkingFeePossible;
        null !== $isParkingOrTransportationFeePossible && $self['isParkingOrTransportationFeePossible'] = $isParkingOrTransportationFeePossible;
        null !== $paidParkingDescription && $self['paidParkingDescription'] = $paidParkingDescription;
        null !== $paidParkingHeading && $self['paidParkingHeading'] = $paidParkingHeading;
        null !== $parkCode && $self['parkCode'] = $parkCode;
        null !== $parkingDetailsURL && $self['parkingDetailsURL'] = $parkingDetailsURL;
        null !== $passes && $self['passes'] = $passes;
        null !== $relatedMultiSitePasses && $self['relatedMultiSitePasses'] = $relatedMultiSitePasses;
        null !== $timedEntryDescription && $self['timedEntryDescription'] = $timedEntryDescription;
        null !== $timedEntryHeading && $self['timedEntryHeading'] = $timedEntryHeading;

        return $self;
    }

    public function withCashless(string $cashless): self
    {
        $self = clone $this;
        $self['cashless'] = $cashless;

        return $self;
    }

    /**
     * @param ContentOrderOrdinals|value-of<ContentOrderOrdinals> $contentOrderOrdinals
     */
    public function withContentOrderOrdinals(
        ContentOrderOrdinals|string $contentOrderOrdinals
    ): self {
        $self = clone $this;
        $self['contentOrderOrdinals'] = $contentOrderOrdinals;

        return $self;
    }

    public function withCustomFeeDescription(string $customFeeDescription): self
    {
        $self = clone $this;
        $self['customFeeDescription'] = $customFeeDescription;

        return $self;
    }

    public function withCustomFeeHeading(string $customFeeHeading): self
    {
        $self = clone $this;
        $self['customFeeHeading'] = $customFeeHeading;

        return $self;
    }

    public function withCustomFeeLinkText(string $customFeeLinkText): self
    {
        $self = clone $this;
        $self['customFeeLinkText'] = $customFeeLinkText;

        return $self;
    }

    public function withCustomFeeLinkURL(string $customFeeLinkURL): self
    {
        $self = clone $this;
        $self['customFeeLinkURL'] = $customFeeLinkURL;

        return $self;
    }

    public function withEntranceFeeDescription(
        string $entranceFeeDescription
    ): self {
        $self = clone $this;
        $self['entranceFeeDescription'] = $entranceFeeDescription;

        return $self;
    }

    public function withEntrancePassesDescription(
        string $entrancePassesDescription
    ): self {
        $self = clone $this;
        $self['entrancePassesDescription'] = $entrancePassesDescription;

        return $self;
    }

    /**
     * @param list<Fee|FeeShape> $fees
     */
    public function withFees(array $fees): self
    {
        $self = clone $this;
        $self['fees'] = $fees;

        return $self;
    }

    public function withFeesAtWorkURL(string $feesAtWorkURL): self
    {
        $self = clone $this;
        $self['feesAtWorkURL'] = $feesAtWorkURL;

        return $self;
    }

    public function withIsFeeFreePark(bool $isFeeFreePark): self
    {
        $self = clone $this;
        $self['isFeeFreePark'] = $isFeeFreePark;

        return $self;
    }

    public function withIsInteragencyPassAccepted(
        bool $isInteragencyPassAccepted
    ): self {
        $self = clone $this;
        $self['isInteragencyPassAccepted'] = $isInteragencyPassAccepted;

        return $self;
    }

    public function withIsParkingFeePossible(bool $isParkingFeePossible): self
    {
        $self = clone $this;
        $self['isParkingFeePossible'] = $isParkingFeePossible;

        return $self;
    }

    public function withIsParkingOrTransportationFeePossible(
        bool $isParkingOrTransportationFeePossible
    ): self {
        $self = clone $this;
        $self['isParkingOrTransportationFeePossible'] = $isParkingOrTransportationFeePossible;

        return $self;
    }

    public function withPaidParkingDescription(
        string $paidParkingDescription
    ): self {
        $self = clone $this;
        $self['paidParkingDescription'] = $paidParkingDescription;

        return $self;
    }

    public function withPaidParkingHeading(string $paidParkingHeading): self
    {
        $self = clone $this;
        $self['paidParkingHeading'] = $paidParkingHeading;

        return $self;
    }

    public function withParkCode(string $parkCode): self
    {
        $self = clone $this;
        $self['parkCode'] = $parkCode;

        return $self;
    }

    public function withParkingDetailsURL(string $parkingDetailsURL): self
    {
        $self = clone $this;
        $self['parkingDetailsURL'] = $parkingDetailsURL;

        return $self;
    }

    /**
     * @param list<Pass|PassShape> $passes
     */
    public function withPasses(array $passes): self
    {
        $self = clone $this;
        $self['passes'] = $passes;

        return $self;
    }

    /**
     * @param list<RelatedMultiSitePass|RelatedMultiSitePassShape> $relatedMultiSitePasses
     */
    public function withRelatedMultiSitePasses(
        array $relatedMultiSitePasses
    ): self {
        $self = clone $this;
        $self['relatedMultiSitePasses'] = $relatedMultiSitePasses;

        return $self;
    }

    public function withTimedEntryDescription(
        string $timedEntryDescription
    ): self {
        $self = clone $this;
        $self['timedEntryDescription'] = $timedEntryDescription;

        return $self;
    }

    public function withTimedEntryHeading(string $timedEntryHeading): self
    {
        $self = clone $this;
        $self['timedEntryHeading'] = $timedEntryHeading;

        return $self;
    }
}
