<?php

declare(strict_types=1);

namespace Nps\Activities;

use Nps\Activities\ActivityListParksResponse\Data;
use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Contracts\BaseModel;

/**
 * @phpstan-import-type DataShape from \Nps\Activities\ActivityListParksResponse\Data
 *
 * @phpstan-type ActivityListParksResponseShape = array{
 *   data?: list<Data|DataShape>|null,
 *   limit?: string|null,
 *   start?: string|null,
 *   total?: string|null,
 * }
 */
final class ActivityListParksResponse implements BaseModel
{
    /** @use SdkModel<ActivityListParksResponseShape> */
    use SdkModel;

    /** @var list<Data>|null $data */
    #[Optional(list: Data::class)]
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
     * @param list<Data|DataShape>|null $data
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
     * @param list<Data|DataShape> $data
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
