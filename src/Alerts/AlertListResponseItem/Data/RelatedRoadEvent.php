<?php

declare(strict_types=1);

namespace Nps\Alerts\AlertListResponseItem\Data;

use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Contracts\BaseModel;

/**
 * @phpstan-type RelatedRoadEventShape = array{
 *   id?: string|null, title?: string|null, type?: string|null, url?: string|null
 * }
 */
final class RelatedRoadEvent implements BaseModel
{
    /** @use SdkModel<RelatedRoadEventShape> */
    use SdkModel;

    /**
     * UUID for this related road event.
     */
    #[Optional]
    public ?string $id;

    /**
     * title of this related road event.
     */
    #[Optional]
    public ?string $title;

    /**
     * what type of related road event is this.
     */
    #[Optional]
    public ?string $type;

    /**
     * URL for more information about this related road event.
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
     * UUID for this related road event.
     */
    public function withID(string $id): self
    {
        $self = clone $this;
        $self['id'] = $id;

        return $self;
    }

    /**
     * title of this related road event.
     */
    public function withTitle(string $title): self
    {
        $self = clone $this;
        $self['title'] = $title;

        return $self;
    }

    /**
     * what type of related road event is this.
     */
    public function withType(string $type): self
    {
        $self = clone $this;
        $self['type'] = $type;

        return $self;
    }

    /**
     * URL for more information about this related road event.
     */
    public function withURL(string $url): self
    {
        $self = clone $this;
        $self['url'] = $url;

        return $self;
    }
}
