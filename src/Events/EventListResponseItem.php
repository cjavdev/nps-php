<?php

declare(strict_types=1);

namespace Nps\Events;

use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Contracts\BaseModel;
use Nps\Events\EventListResponseItem\Data;

/**
 * @phpstan-import-type DataShape from \Nps\Events\EventListResponseItem\Data
 *
 * @phpstan-type EventListResponseItemShape = array{
 *   data?: list<Data|DataShape>|null,
 *   dates?: string|null,
 *   errors?: list<mixed>|null,
 *   pagenumber?: string|null,
 *   pagesize?: string|null,
 *   total?: string|null,
 * }
 */
final class EventListResponseItem implements BaseModel
{
    /** @use SdkModel<EventListResponseItemShape> */
    use SdkModel;

    /** @var list<Data>|null $data */
    #[Optional(list: Data::class)]
    public ?array $data;

    #[Optional]
    public ?string $dates;

    /** @var list<mixed>|null $errors */
    #[Optional(list: 'mixed')]
    public ?array $errors;

    #[Optional]
    public ?string $pagenumber;

    #[Optional]
    public ?string $pagesize;

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
     * @param list<mixed>|null $errors
     */
    public static function with(
        ?array $data = null,
        ?string $dates = null,
        ?array $errors = null,
        ?string $pagenumber = null,
        ?string $pagesize = null,
        ?string $total = null,
    ): self {
        $self = new self;

        null !== $data && $self['data'] = $data;
        null !== $dates && $self['dates'] = $dates;
        null !== $errors && $self['errors'] = $errors;
        null !== $pagenumber && $self['pagenumber'] = $pagenumber;
        null !== $pagesize && $self['pagesize'] = $pagesize;
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

    public function withDates(string $dates): self
    {
        $self = clone $this;
        $self['dates'] = $dates;

        return $self;
    }

    /**
     * @param list<mixed> $errors
     */
    public function withErrors(array $errors): self
    {
        $self = clone $this;
        $self['errors'] = $errors;

        return $self;
    }

    public function withPagenumber(string $pagenumber): self
    {
        $self = clone $this;
        $self['pagenumber'] = $pagenumber;

        return $self;
    }

    public function withPagesize(string $pagesize): self
    {
        $self = clone $this;
        $self['pagesize'] = $pagesize;

        return $self;
    }

    public function withTotal(string $total): self
    {
        $self = clone $this;
        $self['total'] = $total;

        return $self;
    }
}
