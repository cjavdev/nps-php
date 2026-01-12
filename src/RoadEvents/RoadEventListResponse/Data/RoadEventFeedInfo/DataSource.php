<?php

declare(strict_types=1);

namespace Nps\RoadEvents\RoadEventListResponse\Data\RoadEventFeedInfo;

use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Contracts\BaseModel;

/**
 * @phpstan-type DataSourceShape = array{
 *   contactEmail?: string|null,
 *   contactName?: string|null,
 *   dataSourceID?: string|null,
 *   organizationName?: string|null,
 *   updateDate?: string|null,
 * }
 */
final class DataSource implements BaseModel
{
    /** @use SdkModel<DataSourceShape> */
    use SdkModel;

    #[Optional('contact_email')]
    public ?string $contactEmail;

    #[Optional('contact_name')]
    public ?string $contactName;

    #[Optional('data_source_id')]
    public ?string $dataSourceID;

    #[Optional('organization_name')]
    public ?string $organizationName;

    #[Optional('update_date')]
    public ?string $updateDate;

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
        ?string $contactEmail = null,
        ?string $contactName = null,
        ?string $dataSourceID = null,
        ?string $organizationName = null,
        ?string $updateDate = null,
    ): self {
        $self = new self;

        null !== $contactEmail && $self['contactEmail'] = $contactEmail;
        null !== $contactName && $self['contactName'] = $contactName;
        null !== $dataSourceID && $self['dataSourceID'] = $dataSourceID;
        null !== $organizationName && $self['organizationName'] = $organizationName;
        null !== $updateDate && $self['updateDate'] = $updateDate;

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

    public function withDataSourceID(string $dataSourceID): self
    {
        $self = clone $this;
        $self['dataSourceID'] = $dataSourceID;

        return $self;
    }

    public function withOrganizationName(string $organizationName): self
    {
        $self = clone $this;
        $self['organizationName'] = $organizationName;

        return $self;
    }

    public function withUpdateDate(string $updateDate): self
    {
        $self = clone $this;
        $self['updateDate'] = $updateDate;

        return $self;
    }
}
