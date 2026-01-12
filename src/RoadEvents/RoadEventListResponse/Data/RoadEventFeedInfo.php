<?php

declare(strict_types=1);

namespace Nps\RoadEvents\RoadEventListResponse\Data;

use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Contracts\BaseModel;
use Nps\RoadEvents\RoadEventListResponse\Data\RoadEventFeedInfo\DataSource;

/**
 * @phpstan-import-type DataSourceShape from \Nps\RoadEvents\RoadEventListResponse\Data\RoadEventFeedInfo\DataSource
 *
 * @phpstan-type RoadEventFeedInfoShape = array{
 *   id?: string|null,
 *   contactEmail?: string|null,
 *   contactName?: string|null,
 *   dataSources?: list<DataSource|DataSourceShape>|null,
 *   license?: string|null,
 *   publisher?: string|null,
 *   updateDate?: string|null,
 *   updateFrequency?: float|null,
 *   version?: string|null,
 * }
 */
final class RoadEventFeedInfo implements BaseModel
{
    /** @use SdkModel<RoadEventFeedInfoShape> */
    use SdkModel;

    #[Optional]
    public ?string $id;

    #[Optional('contact_email')]
    public ?string $contactEmail;

    #[Optional('contact_name')]
    public ?string $contactName;

    /** @var list<DataSource>|null $dataSources */
    #[Optional('data_sources', list: DataSource::class)]
    public ?array $dataSources;

    #[Optional]
    public ?string $license;

    #[Optional]
    public ?string $publisher;

    #[Optional('update_date')]
    public ?string $updateDate;

    #[Optional('update_frequency')]
    public ?float $updateFrequency;

    #[Optional]
    public ?string $version;

    public function __construct()
    {
        $this->initialize();
    }

    /**
     * Construct an instance from the required parameters.
     *
     * You must use named parameters to construct any parameters with a default value.
     *
     * @param list<DataSource|DataSourceShape>|null $dataSources
     */
    public static function with(
        ?string $id = null,
        ?string $contactEmail = null,
        ?string $contactName = null,
        ?array $dataSources = null,
        ?string $license = null,
        ?string $publisher = null,
        ?string $updateDate = null,
        ?float $updateFrequency = null,
        ?string $version = null,
    ): self {
        $self = new self;

        null !== $id && $self['id'] = $id;
        null !== $contactEmail && $self['contactEmail'] = $contactEmail;
        null !== $contactName && $self['contactName'] = $contactName;
        null !== $dataSources && $self['dataSources'] = $dataSources;
        null !== $license && $self['license'] = $license;
        null !== $publisher && $self['publisher'] = $publisher;
        null !== $updateDate && $self['updateDate'] = $updateDate;
        null !== $updateFrequency && $self['updateFrequency'] = $updateFrequency;
        null !== $version && $self['version'] = $version;

        return $self;
    }

    public function withID(string $id): self
    {
        $self = clone $this;
        $self['id'] = $id;

        return $self;
    }

    public function withContactEmail(string $contactEmail): self
    {
        $self = clone $this;
        $self['contactEmail'] = $contactEmail;

        return $self;
    }

    public function withContactName(string $contactName): self
    {
        $self = clone $this;
        $self['contactName'] = $contactName;

        return $self;
    }

    /**
     * @param list<DataSource|DataSourceShape> $dataSources
     */
    public function withDataSources(array $dataSources): self
    {
        $self = clone $this;
        $self['dataSources'] = $dataSources;

        return $self;
    }

    public function withLicense(string $license): self
    {
        $self = clone $this;
        $self['license'] = $license;

        return $self;
    }

    public function withPublisher(string $publisher): self
    {
        $self = clone $this;
        $self['publisher'] = $publisher;

        return $self;
    }

    public function withUpdateDate(string $updateDate): self
    {
        $self = clone $this;
        $self['updateDate'] = $updateDate;

        return $self;
    }

    public function withUpdateFrequency(float $updateFrequency): self
    {
        $self = clone $this;
        $self['updateFrequency'] = $updateFrequency;

        return $self;
    }

    public function withVersion(string $version): self
    {
        $self = clone $this;
        $self['version'] = $version;

        return $self;
    }
}
