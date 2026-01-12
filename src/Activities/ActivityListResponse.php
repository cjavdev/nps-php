<?php

declare(strict_types=1);

namespace Nps\Activities;

use Nps\Activities\ActivityListResponse\Data;
use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Contracts\BaseModel;

/**
 * @phpstan-import-type DataShape from \Nps\Activities\ActivityListResponse\Data
 *
 * @phpstan-type ActivityListResponseShape = array{
 *   data?: list<Data|DataShape>|null,
 *   limit?: float|null,
 *   start?: float|null,
 *   total?: float|null,
 * }
 */
final class ActivityListResponse implements BaseModel
{
    /** @use SdkModel<ActivityListResponseShape> */
    use SdkModel;

    /** @var list<Data>|null $data */
    #[Optional(list: Data::class)]
    public ?array $data;

    #[Optional]
    public ?float $limit;

    #[Optional]
    public ?float $start;

    #[Optional]
    public ?float $total;

    public function __construct()
    {
        $this->initialize();
    }

    /**
     * Construct an instance from the required parameters.
     *
     * You must use named parameters to construct any parameters with a default value.
     *
     * @param list<Data|DataShape>|null $data
     */
    public static function with(
        ?array $data = null,
        ?float $limit = null,
        ?float $start = null,
        ?float $total = null,
    ): self {
        $self = new self;

        null !== $data && $self['data'] = $data;
        null !== $limit && $self['limit'] = $limit;
        null !== $start && $self['start'] = $start;
        null !== $total && $self['total'] = $total;

        return $self;
    }

    /**
     * @param list<Data|DataShape> $data
     */
    public function withData(array $data): self
    {
        $self = clone $this;
        $self['data'] = $data;

        return $self;
    }

    public function withLimit(float $limit): self
    {
        $self = clone $this;
        $self['limit'] = $limit;

        return $self;
    }

    public function withStart(float $start): self
    {
        $self = clone $this;
        $self['start'] = $start;

        return $self;
    }

    public function withTotal(float $total): self
    {
        $self = clone $this;
        $self['total'] = $total;

        return $self;
    }
}
