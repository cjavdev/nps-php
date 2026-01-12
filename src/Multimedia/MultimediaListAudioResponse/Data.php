<?php

declare(strict_types=1);

namespace Nps\Multimedia\MultimediaListAudioResponse;

use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Contracts\BaseModel;
use Nps\Multimedia\MultimediaListAudioResponse\Data\RelatedPark;
use Nps\Multimedia\MultimediaListAudioResponse\Data\SplashImage;
use Nps\Multimedia\MultimediaListAudioResponse\Data\Versions;

/**
 * @phpstan-import-type RelatedParkShape from \Nps\Multimedia\MultimediaListAudioResponse\Data\RelatedPark
 * @phpstan-import-type SplashImageShape from \Nps\Multimedia\MultimediaListAudioResponse\Data\SplashImage
 * @phpstan-import-type VersionsShape from \Nps\Multimedia\MultimediaListAudioResponse\Data\Versions
 *
 * @phpstan-type DataShape = array{
 *   id?: string|null,
 *   callToAction?: string|null,
 *   callToActionURL?: string|null,
 *   credit?: string|null,
 *   description?: string|null,
 *   durationMs?: float|null,
 *   geometryPoiID?: string|null,
 *   latitude?: float|null,
 *   longitude?: float|null,
 *   permalinkURL?: string|null,
 *   relatedParks?: list<RelatedPark|RelatedParkShape>|null,
 *   splashImage?: null|SplashImage|SplashImageShape,
 *   tags?: list<string>|null,
 *   title?: string|null,
 *   transcript?: string|null,
 *   versions?: null|Versions|VersionsShape,
 * }
 */
final class Data implements BaseModel
{
    /** @use SdkModel<DataShape> */
    use SdkModel;

    /**
     * unique identifier for this audio asset.
     */
    #[Optional]
    public ?string $id;

    #[Optional]
    public ?string $callToAction;

    #[Optional('callToActionUrl')]
    public ?string $callToActionURL;

    #[Optional]
    public ?string $credit;

    #[Optional]
    public ?string $description;

    #[Optional]
    public ?float $durationMs;

    #[Optional('geometryPoiId')]
    public ?string $geometryPoiID;

    #[Optional]
    public ?float $latitude;

    #[Optional]
    public ?float $longitude;

    #[Optional('permalinkUrl')]
    public ?string $permalinkURL;

    /** @var list<RelatedPark>|null $relatedParks */
    #[Optional(list: RelatedPark::class)]
    public ?array $relatedParks;

    #[Optional]
    public ?SplashImage $splashImage;

    /** @var list<string>|null $tags */
    #[Optional(list: 'string')]
    public ?array $tags;

    #[Optional]
    public ?string $title;

    #[Optional]
    public ?string $transcript;

    #[Optional]
    public ?Versions $versions;

    public function __construct()
    {
        $this->initialize();
    }

    /**
     * Construct an instance from the required parameters.
     *
     * You must use named parameters to construct any parameters with a default value.
     *
     * @param list<RelatedPark|RelatedParkShape>|null $relatedParks
     * @param SplashImage|SplashImageShape|null $splashImage
     * @param list<string>|null $tags
     * @param Versions|VersionsShape|null $versions
     */
    public static function with(
        ?string $id = null,
        ?string $callToAction = null,
        ?string $callToActionURL = null,
        ?string $credit = null,
        ?string $description = null,
        ?float $durationMs = null,
        ?string $geometryPoiID = null,
        ?float $latitude = null,
        ?float $longitude = null,
        ?string $permalinkURL = null,
        ?array $relatedParks = null,
        SplashImage|array|null $splashImage = null,
        ?array $tags = null,
        ?string $title = null,
        ?string $transcript = null,
        Versions|array|null $versions = null,
    ): self {
        $self = new self;

        null !== $id && $self['id'] = $id;
        null !== $callToAction && $self['callToAction'] = $callToAction;
        null !== $callToActionURL && $self['callToActionURL'] = $callToActionURL;
        null !== $credit && $self['credit'] = $credit;
        null !== $description && $self['description'] = $description;
        null !== $durationMs && $self['durationMs'] = $durationMs;
        null !== $geometryPoiID && $self['geometryPoiID'] = $geometryPoiID;
        null !== $latitude && $self['latitude'] = $latitude;
        null !== $longitude && $self['longitude'] = $longitude;
        null !== $permalinkURL && $self['permalinkURL'] = $permalinkURL;
        null !== $relatedParks && $self['relatedParks'] = $relatedParks;
        null !== $splashImage && $self['splashImage'] = $splashImage;
        null !== $tags && $self['tags'] = $tags;
        null !== $title && $self['title'] = $title;
        null !== $transcript && $self['transcript'] = $transcript;
        null !== $versions && $self['versions'] = $versions;

        return $self;
    }

    /**
     * unique identifier for this audio asset.
     */
    public function withID(string $id): self
    {
        $self = clone $this;
        $self['id'] = $id;

        return $self;
    }

    public function withCallToAction(string $callToAction): self
    {
        $self = clone $this;
        $self['callToAction'] = $callToAction;

        return $self;
    }

    public function withCallToActionURL(string $callToActionURL): self
    {
        $self = clone $this;
        $self['callToActionURL'] = $callToActionURL;

        return $self;
    }

    public function withCredit(string $credit): self
    {
        $self = clone $this;
        $self['credit'] = $credit;

        return $self;
    }

    public function withDescription(string $description): self
    {
        $self = clone $this;
        $self['description'] = $description;

        return $self;
    }

    public function withDurationMs(float $durationMs): self
    {
        $self = clone $this;
        $self['durationMs'] = $durationMs;

        return $self;
    }

    public function withGeometryPoiID(string $geometryPoiID): self
    {
        $self = clone $this;
        $self['geometryPoiID'] = $geometryPoiID;

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

    public function withPermalinkURL(string $permalinkURL): self
    {
        $self = clone $this;
        $self['permalinkURL'] = $permalinkURL;

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

    /**
     * @param SplashImage|SplashImageShape $splashImage
     */
    public function withSplashImage(SplashImage|array $splashImage): self
    {
        $self = clone $this;
        $self['splashImage'] = $splashImage;

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

    public function withTranscript(string $transcript): self
    {
        $self = clone $this;
        $self['transcript'] = $transcript;

        return $self;
    }

    /**
     * @param Versions|VersionsShape $versions
     */
    public function withVersions(Versions|array $versions): self
    {
        $self = clone $this;
        $self['versions'] = $versions;

        return $self;
    }
}
