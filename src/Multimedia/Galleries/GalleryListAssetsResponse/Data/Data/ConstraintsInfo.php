<?php

declare(strict_types=1);

namespace Nps\Multimedia\Galleries\GalleryListAssetsResponse\Data\Data;

use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Contracts\BaseModel;

/**
 * @phpstan-type ConstraintsInfoShape = array{
 *   constraint?: string|null, grantingRights?: string|null
 * }
 */
final class ConstraintsInfo implements BaseModel
{
    /** @use SdkModel<ConstraintsInfoShape> */
    use SdkModel;

    #[Optional]
    public ?string $constraint;

    #[Optional]
    public ?string $grantingRights;

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
        ?string $constraint = null,
        ?string $grantingRights = null
    ): self {
        $self = new self;

        null !== $constraint && $self['constraint'] = $constraint;
        null !== $grantingRights && $self['grantingRights'] = $grantingRights;

        return $self;
    }

    public function withConstraint(string $constraint): self
    {
        $self = clone $this;
        $self['constraint'] = $constraint;

        return $self;
    }

    public function withGrantingRights(string $grantingRights): self
    {
        $self = clone $this;
        $self['grantingRights'] = $grantingRights;

        return $self;
    }
}
