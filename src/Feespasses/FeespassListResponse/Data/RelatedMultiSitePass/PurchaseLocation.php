<?php

declare(strict_types=1);

namespace Nps\Feespasses\FeespassListResponse\Data\RelatedMultiSitePass;

use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Contracts\BaseModel;

/**
 * @phpstan-type PurchaseLocationShape = array{
 *   id?: string|null,
 *   paymentMethod?: string|null,
 *   title?: string|null,
 *   type?: string|null,
 * }
 */
final class PurchaseLocation implements BaseModel
{
    /** @use SdkModel<PurchaseLocationShape> */
    use SdkModel;

    #[Optional]
    public ?string $id;

    #[Optional]
    public ?string $paymentMethod;

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
     */
    public static function with(
        ?string $id = null,
        ?string $paymentMethod = null,
        ?string $title = null,
        ?string $type = null,
    ): self {
        $self = new self;

        null !== $id && $self['id'] = $id;
        null !== $paymentMethod && $self['paymentMethod'] = $paymentMethod;
        null !== $title && $self['title'] = $title;
        null !== $type && $self['type'] = $type;

        return $self;
    }

    public function withID(string $id): self
    {
        $self = clone $this;
        $self['id'] = $id;

        return $self;
    }

    public function withPaymentMethod(string $paymentMethod): self
    {
        $self = clone $this;
        $self['paymentMethod'] = $paymentMethod;

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
