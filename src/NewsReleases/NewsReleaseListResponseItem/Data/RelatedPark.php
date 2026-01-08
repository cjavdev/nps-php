<?php

declare(strict_types=1);

namespace Nps\NewsReleases\NewsReleaseListResponseItem\Data;

use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Contracts\BaseModel;

/**
 * @phpstan-type RelatedParkShape = array{
 *   designation?: string|null,
 *   fullName?: string|null,
 *   name?: string|null,
 *   parkCode?: string|null,
 *   state?: string|null,
 *   url?: string|null,
 * }
 */
final class RelatedPark implements BaseModel
{
    /** @use SdkModel<RelatedParkShape> */
    use SdkModel;

    #[Optional]
    public ?string $designation;

    #[Optional]
    public ?string $fullName;

    #[Optional]
    public ?string $name;

    #[Optional]
    public ?string $parkCode;

    #[Optional]
    public ?string $state;

    #[Optional]
    public ?string $url;

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
        ?string $designation = null,
        ?string $fullName = null,
        ?string $name = null,
        ?string $parkCode = null,
        ?string $state = null,
        ?string $url = null,
    ): self {
        $self = new self;

        null !== $designation && $self['designation'] = $designation;
        null !== $fullName && $self['fullName'] = $fullName;
        null !== $name && $self['name'] = $name;
        null !== $parkCode && $self['parkCode'] = $parkCode;
        null !== $state && $self['state'] = $state;
        null !== $url && $self['url'] = $url;

        return $self;
    }

    public function withDesignation(string $designation): self
    {
        $self = clone $this;
        $self['designation'] = $designation;

        return $self;
    }

    public function withFullName(string $fullName): self
    {
        $self = clone $this;
        $self['fullName'] = $fullName;

        return $self;
    }

    public function withName(string $name): self
    {
        $self = clone $this;
        $self['name'] = $name;

        return $self;
    }

    public function withParkCode(string $parkCode): self
    {
        $self = clone $this;
        $self['parkCode'] = $parkCode;

        return $self;
    }

    public function withState(string $state): self
    {
        $self = clone $this;
        $self['state'] = $state;

        return $self;
    }

    public function withURL(string $url): self
    {
        $self = clone $this;
        $self['url'] = $url;

        return $self;
    }
}
