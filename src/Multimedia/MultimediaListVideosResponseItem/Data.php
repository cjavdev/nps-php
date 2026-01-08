<?php

declare(strict_types=1);

namespace Nps\Multimedia\MultimediaListVideosResponseItem;

use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Contracts\BaseModel;
use Nps\Multimedia\MultimediaListVideosResponseItem\Data\CaptionFile;
use Nps\Multimedia\MultimediaListVideosResponseItem\Data\RelatedPark;
use Nps\Multimedia\MultimediaListVideosResponseItem\Data\SplashImage;
use Nps\Multimedia\MultimediaListVideosResponseItem\Data\Version;

/**
 * @phpstan-import-type CaptionFileShape from \Nps\Multimedia\MultimediaListVideosResponseItem\Data\CaptionFile
 * @phpstan-import-type RelatedParkShape from \Nps\Multimedia\MultimediaListVideosResponseItem\Data\RelatedPark
 * @phpstan-import-type SplashImageShape from \Nps\Multimedia\MultimediaListVideosResponseItem\Data\SplashImage
 * @phpstan-import-type VersionShape from \Nps\Multimedia\MultimediaListVideosResponseItem\Data\Version
 *
 * @phpstan-type DataShape = array{
 *   id?: string|null,
 *   aslVideoURL?: string|null,
 *   audioDescribedBuiltIn?: bool|null,
 *   audiodescription?: string|null,
 *   audioDescriptionURL?: string|null,
 *   callToAction?: string|null,
 *   callToActionURL?: string|null,
 *   captionFiles?: list<CaptionFile|CaptionFileShape>|null,
 *   credit?: string|null,
 *   description?: string|null,
 *   descriptiveTranscript?: string|null,
 *   durationMs?: float|null,
 *   geometryPoiID?: string|null,
 *   hasOpenCaptions?: bool|null,
 *   isBRoll?: bool|null,
 *   isVideoOnly?: bool|null,
 *   latitude?: float|null,
 *   longitude?: float|null,
 *   permalinkURL?: string|null,
 *   relatedParks?: list<RelatedPark|RelatedParkShape>|null,
 *   splashImage?: null|SplashImage|SplashImageShape,
 *   tags?: list<string>|null,
 *   title?: string|null,
 *   transcript?: string|null,
 *   versions?: list<Version|VersionShape>|null,
 * }
 */
final class Data implements BaseModel
{
    /** @use SdkModel<DataShape> */
    use SdkModel;

    #[Optional]
    public ?string $id;

    #[Optional('aslVideoUrl')]
    public ?string $aslVideoURL;

    #[Optional]
    public ?bool $audioDescribedBuiltIn;

    #[Optional]
    public ?string $audiodescription;

    #[Optional('audioDescriptionUrl')]
    public ?string $audioDescriptionURL;

    #[Optional]
    public ?string $callToAction;

    #[Optional]
    public ?string $callToActionURL;

    /** @var list<CaptionFile>|null $captionFiles */
    #[Optional(list: CaptionFile::class)]
    public ?array $captionFiles;

    #[Optional]
    public ?string $credit;

    #[Optional]
    public ?string $description;

    #[Optional]
    public ?string $descriptiveTranscript;

    #[Optional]
    public ?float $durationMs;

    #[Optional('geometryPoiId')]
    public ?string $geometryPoiID;

    #[Optional]
    public ?bool $hasOpenCaptions;

    #[Optional]
    public ?bool $isBRoll;

    #[Optional]
    public ?bool $isVideoOnly;

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

    /** @var list<Version>|null $versions */
    #[Optional(list: Version::class)]
    public ?array $versions;

    public function __construct()
    {
        $this->initialize();
    }

    /**
     * Construct an instance from the required parameters.
     *
     * You must use named parameters to construct any parameters with a default value.
     *
     * @param list<CaptionFile|CaptionFileShape>|null $captionFiles
     * @param list<RelatedPark|RelatedParkShape>|null $relatedParks
     * @param SplashImage|SplashImageShape|null $splashImage
     * @param list<string>|null $tags
     * @param list<Version|VersionShape>|null $versions
     */
    public static function with(
        ?string $id = null,
        ?string $aslVideoURL = null,
        ?bool $audioDescribedBuiltIn = null,
        ?string $audiodescription = null,
        ?string $audioDescriptionURL = null,
        ?string $callToAction = null,
        ?string $callToActionURL = null,
        ?array $captionFiles = null,
        ?string $credit = null,
        ?string $description = null,
        ?string $descriptiveTranscript = null,
        ?float $durationMs = null,
        ?string $geometryPoiID = null,
        ?bool $hasOpenCaptions = null,
        ?bool $isBRoll = null,
        ?bool $isVideoOnly = null,
        ?float $latitude = null,
        ?float $longitude = null,
        ?string $permalinkURL = null,
        ?array $relatedParks = null,
        SplashImage|array|null $splashImage = null,
        ?array $tags = null,
        ?string $title = null,
        ?string $transcript = null,
        ?array $versions = null,
    ): self {
        $self = new self;

        null !== $id && $self['id'] = $id;
        null !== $aslVideoURL && $self['aslVideoURL'] = $aslVideoURL;
        null !== $audioDescribedBuiltIn && $self['audioDescribedBuiltIn'] = $audioDescribedBuiltIn;
        null !== $audiodescription && $self['audiodescription'] = $audiodescription;
        null !== $audioDescriptionURL && $self['audioDescriptionURL'] = $audioDescriptionURL;
        null !== $callToAction && $self['callToAction'] = $callToAction;
        null !== $callToActionURL && $self['callToActionURL'] = $callToActionURL;
        null !== $captionFiles && $self['captionFiles'] = $captionFiles;
        null !== $credit && $self['credit'] = $credit;
        null !== $description && $self['description'] = $description;
        null !== $descriptiveTranscript && $self['descriptiveTranscript'] = $descriptiveTranscript;
        null !== $durationMs && $self['durationMs'] = $durationMs;
        null !== $geometryPoiID && $self['geometryPoiID'] = $geometryPoiID;
        null !== $hasOpenCaptions && $self['hasOpenCaptions'] = $hasOpenCaptions;
        null !== $isBRoll && $self['isBRoll'] = $isBRoll;
        null !== $isVideoOnly && $self['isVideoOnly'] = $isVideoOnly;
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

    public function withID(string $id): self
    {
        $self = clone $this;
        $self['id'] = $id;

        return $self;
    }

    public function withAslVideoURL(string $aslVideoURL): self
    {
        $self = clone $this;
        $self['aslVideoURL'] = $aslVideoURL;

        return $self;
    }

    public function withAudioDescribedBuiltIn(bool $audioDescribedBuiltIn): self
    {
        $self = clone $this;
        $self['audioDescribedBuiltIn'] = $audioDescribedBuiltIn;

        return $self;
    }

    public function withAudiodescription(string $audiodescription): self
    {
        $self = clone $this;
        $self['audiodescription'] = $audiodescription;

        return $self;
    }

    public function withAudioDescriptionURL(string $audioDescriptionURL): self
    {
        $self = clone $this;
        $self['audioDescriptionURL'] = $audioDescriptionURL;

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

    /**
     * @param list<CaptionFile|CaptionFileShape> $captionFiles
     */
    public function withCaptionFiles(array $captionFiles): self
    {
        $self = clone $this;
        $self['captionFiles'] = $captionFiles;

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

    public function withDescriptiveTranscript(
        string $descriptiveTranscript
    ): self {
        $self = clone $this;
        $self['descriptiveTranscript'] = $descriptiveTranscript;

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

    public function withHasOpenCaptions(bool $hasOpenCaptions): self
    {
        $self = clone $this;
        $self['hasOpenCaptions'] = $hasOpenCaptions;

        return $self;
    }

    public function withIsBRoll(bool $isBRoll): self
    {
        $self = clone $this;
        $self['isBRoll'] = $isBRoll;

        return $self;
    }

    public function withIsVideoOnly(bool $isVideoOnly): self
    {
        $self = clone $this;
        $self['isVideoOnly'] = $isVideoOnly;

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
     * @param list<Version|VersionShape> $versions
     */
    public function withVersions(array $versions): self
    {
        $self = clone $this;
        $self['versions'] = $versions;

        return $self;
    }
}
