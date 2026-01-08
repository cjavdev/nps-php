<?php

declare(strict_types=1);

namespace Nps\NewsReleases\NewsReleaseListResponseItem\Data;

use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Contracts\BaseModel;

/**
 * @phpstan-type RelatedOrgShape = array{
 *   id?: string|null, name?: string|null, url?: string|null
 * }
 */
final class RelatedOrg implements BaseModel
{
    /** @use SdkModel<RelatedOrgShape> */
    use SdkModel;

    #[Optional]
    public ?string $id;

    #[Optional]
    public ?string $name;

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
        ?string $id = null,
        ?string $name = null,
        ?string $url = null
    ): self {
        $self = new self;

        null !== $id && $self['id'] = $id;
        null !== $name && $self['name'] = $name;
        null !== $url && $self['url'] = $url;

        return $self;
    }

    public function withID(string $id): self
    {
        $self = clone $this;
        $self['id'] = $id;

        return $self;
    }

    public function withName(string $name): self
    {
        $self = clone $this;
        $self['name'] = $name;

        return $self;
    }

    public function withURL(string $url): self
    {
        $self = clone $this;
        $self['url'] = $url;

        return $self;
    }
}
