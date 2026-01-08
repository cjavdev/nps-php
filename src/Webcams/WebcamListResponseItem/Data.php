<?php

declare(strict_types=1);

namespace Nps\Webcams\WebcamListResponseItem;

use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Contracts\BaseModel;
use Nps\Webcams\WebcamListResponseItem\Data\Image;
use Nps\Webcams\WebcamListResponseItem\Data\RelatedPark;

/**
 * @phpstan-import-type ImageShape from \Nps\Webcams\WebcamListResponseItem\Data\Image
 * @phpstan-import-type RelatedParkShape from \Nps\Webcams\WebcamListResponseItem\Data\RelatedPark
 *
 * @phpstan-type DataShape = array{
 *   id?: string|null,
 *   description?: string|null,
 *   geometryPoiID?: string|null,
 *   images?: list<Image|ImageShape>|null,
 *   isStreaming?: bool|null,
 *   latitude?: float|null,
 *   longitude?: float|null,
 *   relatedParks?: list<RelatedPark|RelatedParkShape>|null,
 *   status?: string|null,
 *   statusMessage?: string|null,
 *   tags?: list<string>|null,
 *   title?: string|null,
 *   url?: string|null,
 * }
 */
final class Data implements BaseModel
{
    /** @use SdkModel<DataShape> */
    use SdkModel;

    #[Optional]
    public ?string $id;

    #[Optional]
    public ?string $description;

    /**
     * Id for Geometry Point of Interest.
     */
    #[Optional('geometryPoiId')]
    public ?string $geometryPoiID;

    /** @var list<Image>|null $images */
    #[Optional(list: Image::class)]
    public ?array $images;

    #[Optional]
    public ?bool $isStreaming;

    #[Optional]
    public ?float $latitude;

    #[Optional]
    public ?float $longitude;

    /** @var list<RelatedPark>|null $relatedParks */
    #[Optional(list: RelatedPark::class)]
    public ?array $relatedParks;

    #[Optional]
    public ?string $status;

    #[Optional]
    public ?string $statusMessage;

    /** @var list<string>|null $tags */
    #[Optional(list: 'string')]
    public ?array $tags;

    #[Optional]
    public ?string $title;

    /**
     * URL corresponding to this webcam.
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
     *
     * @param list<Image|ImageShape>|null $images
     * @param list<RelatedPark|RelatedParkShape>|null $relatedParks
     * @param list<string>|null $tags
     */
    public static function with(
        ?string $id = null,
        ?string $description = null,
        ?string $geometryPoiID = null,
        ?array $images = null,
        ?bool $isStreaming = null,
        ?float $latitude = null,
        ?float $longitude = null,
        ?array $relatedParks = null,
        ?string $status = null,
        ?string $statusMessage = null,
        ?array $tags = null,
        ?string $title = null,
        ?string $url = null,
    ): self {
        $self = new self;

        null !== $id && $self['id'] = $id;
        null !== $description && $self['description'] = $description;
        null !== $geometryPoiID && $self['geometryPoiID'] = $geometryPoiID;
        null !== $images && $self['images'] = $images;
        null !== $isStreaming && $self['isStreaming'] = $isStreaming;
        null !== $latitude && $self['latitude'] = $latitude;
        null !== $longitude && $self['longitude'] = $longitude;
        null !== $relatedParks && $self['relatedParks'] = $relatedParks;
        null !== $status && $self['status'] = $status;
        null !== $statusMessage && $self['statusMessage'] = $statusMessage;
        null !== $tags && $self['tags'] = $tags;
        null !== $title && $self['title'] = $title;
        null !== $url && $self['url'] = $url;

        return $self;
    }

    public function withID(string $id): self
    {
        $self = clone $this;
        $self['id'] = $id;

        return $self;
    }

    public function withDescription(string $description): self
    {
        $self = clone $this;
        $self['description'] = $description;

        return $self;
    }

    /**
     * Id for Geometry Point of Interest.
     */
    public function withGeometryPoiID(string $geometryPoiID): self
    {
        $self = clone $this;
        $self['geometryPoiID'] = $geometryPoiID;

        return $self;
    }

    /**
     * @param list<Image|ImageShape> $images
     */
    public function withImages(array $images): self
    {
        $self = clone $this;
        $self['images'] = $images;

        return $self;
    }

    public function withIsStreaming(bool $isStreaming): self
    {
        $self = clone $this;
        $self['isStreaming'] = $isStreaming;

        return $self;
    }

    public function withLatitude(float $latitude): self
    {
        $self = clone $this;
        $self['latitude'] = $latitude;

        return $self;
    }

    public function withLongitude(float $longitude): self
    {
        $self = clone $this;
        $self['longitude'] = $longitude;

        return $self;
    }

    /**
     * @param list<RelatedPark|RelatedParkShape> $relatedParks
     */
    public function withRelatedParks(array $relatedParks): self
    {
        $self = clone $this;
        $self['relatedParks'] = $relatedParks;

        return $self;
    }

    public function withStatus(string $status): self
    {
        $self = clone $this;
        $self['status'] = $status;

        return $self;
    }

    public function withStatusMessage(string $statusMessage): self
    {
        $self = clone $this;
        $self['statusMessage'] = $statusMessage;

        return $self;
    }

    /**
     * @param list<string> $tags
     */
    public function withTags(array $tags): self
    {
        $self = clone $this;
        $self['tags'] = $tags;

        return $self;
    }

    public function withTitle(string $title): self
    {
        $self = clone $this;
        $self['title'] = $title;

        return $self;
    }

    /**
     * URL corresponding to this webcam.
     */
    public function withURL(string $url): self
    {
        $self = clone $this;
        $self['url'] = $url;

        return $self;
    }
}
