<?php

declare(strict_types=1);

namespace Nps\NewsReleases\NewsReleaseListResponse;

use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Contracts\BaseModel;
use Nps\NewsReleases\NewsReleaseListResponse\Data\Image;
use Nps\NewsReleases\NewsReleaseListResponse\Data\RelatedOrg;
use Nps\NewsReleases\NewsReleaseListResponse\Data\RelatedPark;

/**
 * @phpstan-import-type ImageShape from \Nps\NewsReleases\NewsReleaseListResponse\Data\Image
 * @phpstan-import-type RelatedOrgShape from \Nps\NewsReleases\NewsReleaseListResponse\Data\RelatedOrg
 * @phpstan-import-type RelatedParkShape from \Nps\NewsReleases\NewsReleaseListResponse\Data\RelatedPark
 *
 * @phpstan-type DataShape = array{
 *   id?: string|null,
 *   abstract?: string|null,
 *   geometryPoiID?: string|null,
 *   image?: null|Image|ImageShape,
 *   latitude?: string|null,
 *   longitude?: string|null,
 *   parkCode?: string|null,
 *   relatedOrgs?: list<RelatedOrg|RelatedOrgShape>|null,
 *   relatedParks?: list<RelatedPark|RelatedParkShape>|null,
 *   releasedate?: \DateTimeInterface|null,
 *   title?: string|null,
 *   url?: string|null,
 * }
 */
final class Data implements BaseModel
{
    /** @use SdkModel<DataShape> */
    use SdkModel;

    /**
     * Unique identifier for the news release.
     */
    #[Optional]
    public ?string $id;

    /**
     * Short description of news release content.
     */
    #[Optional]
    public ?string $abstract;

    /**
     * Id for Geometry Point of Interest.
     */
    #[Optional('geometryPoiId')]
    public ?string $geometryPoiID;

    /**
     * News release image.
     */
    #[Optional]
    public ?Image $image;

    /**
     * The latitude of the news release location.
     */
    #[Optional]
    public ?string $latitude;

    /**
     * The longitude of the news release location.
     */
    #[Optional]
    public ?string $longitude;

    /**
     * A variable width character code that uniquely identifies a specific park.
     */
    #[Optional]
    public ?string $parkCode;

    /** @var list<RelatedOrg>|null $relatedOrgs */
    #[Optional(list: RelatedOrg::class)]
    public ?array $relatedOrgs;

    /** @var list<RelatedPark>|null $relatedParks */
    #[Optional(list: RelatedPark::class)]
    public ?array $relatedParks;

    /**
     * Date news release was released.
     */
    #[Optional]
    public ?\DateTimeInterface $releasedate;

    /**
     * News release title.
     */
    #[Optional]
    public ?string $title;

    /**
     * Link to full news release.
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
     * @param Image|ImageShape|null $image
     * @param list<RelatedOrg|RelatedOrgShape>|null $relatedOrgs
     * @param list<RelatedPark|RelatedParkShape>|null $relatedParks
     */
    public static function with(
        ?string $id = null,
        ?string $abstract = null,
        ?string $geometryPoiID = null,
        Image|array|null $image = null,
        ?string $latitude = null,
        ?string $longitude = null,
        ?string $parkCode = null,
        ?array $relatedOrgs = null,
        ?array $relatedParks = null,
        ?\DateTimeInterface $releasedate = null,
        ?string $title = null,
        ?string $url = null,
    ): self {
        $self = new self;

        null !== $id && $self['id'] = $id;
        null !== $abstract && $self['abstract'] = $abstract;
        null !== $geometryPoiID && $self['geometryPoiID'] = $geometryPoiID;
        null !== $image && $self['image'] = $image;
        null !== $latitude && $self['latitude'] = $latitude;
        null !== $longitude && $self['longitude'] = $longitude;
        null !== $parkCode && $self['parkCode'] = $parkCode;
        null !== $relatedOrgs && $self['relatedOrgs'] = $relatedOrgs;
        null !== $relatedParks && $self['relatedParks'] = $relatedParks;
        null !== $releasedate && $self['releasedate'] = $releasedate;
        null !== $title && $self['title'] = $title;
        null !== $url && $self['url'] = $url;

        return $self;
    }

    /**
     * Unique identifier for the news release.
     */
    public function withID(string $id): self
    {
        $self = clone $this;
        $self['id'] = $id;

        return $self;
    }

    /**
     * Short description of news release content.
     */
    public function withAbstract(string $abstract): self
    {
        $self = clone $this;
        $self['abstract'] = $abstract;

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
     * News release image.
     *
     * @param Image|ImageShape $image
     */
    public function withImage(Image|array $image): self
    {
        $self = clone $this;
        $self['image'] = $image;

        return $self;
    }

    /**
     * The latitude of the news release location.
     */
    public function withLatitude(string $latitude): self
    {
        $self = clone $this;
        $self['latitude'] = $latitude;

        return $self;
    }

    /**
     * The longitude of the news release location.
     */
    public function withLongitude(string $longitude): self
    {
        $self = clone $this;
        $self['longitude'] = $longitude;

        return $self;
    }

    /**
     * A variable width character code that uniquely identifies a specific park.
     */
    public function withParkCode(string $parkCode): self
    {
        $self = clone $this;
        $self['parkCode'] = $parkCode;

        return $self;
    }

    /**
     * @param list<RelatedOrg|RelatedOrgShape> $relatedOrgs
     */
    public function withRelatedOrgs(array $relatedOrgs): self
    {
        $self = clone $this;
        $self['relatedOrgs'] = $relatedOrgs;

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
     * Date news release was released.
     */
    public function withReleasedate(\DateTimeInterface $releasedate): self
    {
        $self = clone $this;
        $self['releasedate'] = $releasedate;

        return $self;
    }

    /**
     * News release title.
     */
    public function withTitle(string $title): self
    {
        $self = clone $this;
        $self['title'] = $title;

        return $self;
    }

    /**
     * Link to full news release.
     */
    public function withURL(string $url): self
    {
        $self = clone $this;
        $self['url'] = $url;

        return $self;
    }
}
