<?php

declare(strict_types=1);

namespace Nps\Multimedia\Galleries;

use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Concerns\SdkParams;
use Nps\Core\Contracts\BaseModel;

/**
 * @see Nps\Services\Multimedia\GalleriesService::listAssets()
 *
 * @phpstan-type GalleryListAssetsParamsShape = array{
 *   id?: string|null,
 *   galleryID?: string|null,
 *   limit?: int|null,
 *   parkCode?: list<string>|null,
 *   q?: string|null,
 *   start?: int|null,
 *   stateCode?: list<string>|null,
 * }
 */
final class GalleryListAssetsParams implements BaseModel
{
    /** @use SdkModel<GalleryListAssetsParamsShape> */
    use SdkModel;
    use SdkParams;

    /**
     * The unique identifier of an asset within a gallery.
     */
    #[Optional]
    public ?string $id;

    /**
     * The unique identifier for a gallery.
     */
    #[Optional]
    public ?string $galleryID;

    /**
     * Number of results to return per request. Default is 50.
     */
    #[Optional]
    public ?int $limit;

    /**
     * A comma delimited list of 4 character park codes.
     *
     * @var list<string>|null $parkCode
     */
    #[Optional(list: 'string')]
    public ?array $parkCode;

    /**
     * Term to search on.
     */
    #[Optional]
    public ?string $q;

    /**
     * Get the next [limit] results starting with this number. Default is 0.
     */
    #[Optional]
    public ?int $start;

    /**
     * A comma delimited list of 2 character state codes.
     *
     * @var list<string>|null $stateCode
     */
    #[Optional(list: 'string')]
    public ?array $stateCode;

    public function __construct()
    {
        $this->initialize();
    }

    /**
     * Construct an instance from the required parameters.
     *
     * You must use named parameters to construct any parameters with a default value.
     *
     * @param list<string>|null $parkCode
     * @param list<string>|null $stateCode
     */
    public static function with(
        ?string $id = null,
        ?string $galleryID = null,
        ?int $limit = null,
        ?array $parkCode = null,
        ?string $q = null,
        ?int $start = null,
        ?array $stateCode = null,
    ): self {
        $self = new self;

        null !== $id && $self['id'] = $id;
        null !== $galleryID && $self['galleryID'] = $galleryID;
        null !== $limit && $self['limit'] = $limit;
        null !== $parkCode && $self['parkCode'] = $parkCode;
        null !== $q && $self['q'] = $q;
        null !== $start && $self['start'] = $start;
        null !== $stateCode && $self['stateCode'] = $stateCode;

        return $self;
    }

    /**
     * The unique identifier of an asset within a gallery.
     */
    public function withID(string $id): self
    {
        $self = clone $this;
        $self['id'] = $id;

        return $self;
    }

    /**
     * The unique identifier for a gallery.
     */
    public function withGalleryID(string $galleryID): self
    {
        $self = clone $this;
        $self['galleryID'] = $galleryID;

        return $self;
    }

    /**
     * Number of results to return per request. Default is 50.
     */
    public function withLimit(int $limit): self
    {
        $self = clone $this;
        $self['limit'] = $limit;

        return $self;
    }

    /**
     * A comma delimited list of 4 character park codes.
     *
     * @param list<string> $parkCode
     */
    public function withParkCode(array $parkCode): self
    {
        $self = clone $this;
        $self['parkCode'] = $parkCode;

        return $self;
    }

    /**
     * Term to search on.
     */
    public function withQ(string $q): self
    {
        $self = clone $this;
        $self['q'] = $q;

        return $self;
    }

    /**
     * Get the next [limit] results starting with this number. Default is 0.
     */
    public function withStart(int $start): self
    {
        $self = clone $this;
        $self['start'] = $start;

        return $self;
    }

    /**
     * A comma delimited list of 2 character state codes.
     *
     * @param list<string> $stateCode
     */
    public function withStateCode(array $stateCode): self
    {
        $self = clone $this;
        $self['stateCode'] = $stateCode;

        return $self;
    }
}
