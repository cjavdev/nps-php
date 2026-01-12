<?php

declare(strict_types=1);

namespace Nps\Campgrounds\CampgroundListResponse\Data;

use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Contracts\BaseModel;

/**
 * @phpstan-type MultimediaShape = array{
 *   id?: string|null, title?: string|null, type?: string|null, url?: string|null
 * }
 */
final class Multimedia implements BaseModel
{
    /** @use SdkModel<MultimediaShape> */
    use SdkModel;

    /**
     * UUID for multimedia asset.
     */
    #[Optional]
    public ?string $id;

    /**
     * title of multimedia asset.
     */
    #[Optional]
    public ?string $title;

    /**
     * the kind of asset.
     */
    #[Optional]
    public ?string $type;

    /**
     * The URL of the multimedia asset.
     */
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
        ?string $title = null,
        ?string $type = null,
        ?string $url = null,
    ): self {
        $self = new self;

        null !== $id && $self['id'] = $id;
        null !== $title && $self['title'] = $title;
        null !== $type && $self['type'] = $type;
        null !== $url && $self['url'] = $url;

        return $self;
    }

    /**
     * UUID for multimedia asset.
     */
    public function withID(string $id): self
    {
        $self = clone $this;
        $self['id'] = $id;

        return $self;
    }

    /**
     * title of multimedia asset.
     */
    public function withTitle(string $title): self
    {
        $self = clone $this;
        $self['title'] = $title;

        return $self;
    }

    /**
     * the kind of asset.
     */
    public function withType(string $type): self
    {
        $self = clone $this;
        $self['type'] = $type;

        return $self;
    }

    /**
     * The URL of the multimedia asset.
     */
    public function withURL(string $url): self
    {
        $self = clone $this;
        $self['url'] = $url;

        return $self;
    }
}
