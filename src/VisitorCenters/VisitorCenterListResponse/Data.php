<?php

declare(strict_types=1);

namespace Nps\VisitorCenters\VisitorCenterListResponse;

use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Contracts\BaseModel;

/**
 * @phpstan-import-type DataShape from \Nps\VisitorCenters\VisitorCenterListResponse\Data\Data as DataShape1
 *
 * @phpstan-type DataShape = array{
 *   data?: list<\Nps\VisitorCenters\VisitorCenterListResponse\Data\Data|DataShape1>|null,
 *   limit?: string|null,
 *   start?: string|null,
 *   total?: string|null,
 * }
 */
final class Data implements BaseModel
{
    /** @use SdkModel<DataShape> */
    use SdkModel;

    /** @var list<Data\Data>|null $data */
    #[Optional(
        list: Data\Data::class
    )]
    public ?array $data;

    #[Optional]
    public ?string $limit;

    #[Optional]
    public ?string $start;

    #[Optional]
    public ?string $total;

    public function __construct()
    {
        $this->initialize();
    }

    /**
     * Construct an instance from the required parameters.
     *
     * You must use named parameters to construct any parameters with a default value.
     *
     * @param list<Data\Data|DataShape1>|null $data
     */
    public static function with(
        ?array $data = null,
        ?string $limit = null,
        ?string $start = null,
        ?string $total = null,
    ): self {
        $self = new self;

        null !== $data && $self['data'] = $data;
        null !== $limit && $self['limit'] = $limit;
        null !== $start && $self['start'] = $start;
        null !== $total && $self['total'] = $total;

        return $self;
    }

    /**
     * @param list<Data\Data|DataShape1> $data
     */
    public function withData(array $data): self
    {
        $self = clone $this;
        $self['data'] = $data;

        return $self;
    }

    public function withLimit(string $limit): self
    {
        $self = clone $this;
        $self['limit'] = $limit;

        return $self;
    }

    public function withStart(string $start): self
    {
        $self = clone $this;
        $self['start'] = $start;

        return $self;
    }

    public function withTotal(string $total): self
    {
        $self = clone $this;
        $self['total'] = $total;

        return $self;
    }
}
