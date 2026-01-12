<?php

declare(strict_types=1);

namespace Nps\Feespasses\FeespassListResponse\Data\Fee;

use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Contracts\BaseModel;

/**
 * @phpstan-type EndDateShape = array{
 *   day?: int|null, holiday?: string|null, month?: int|null
 * }
 */
final class EndDate implements BaseModel
{
    /** @use SdkModel<EndDateShape> */
    use SdkModel;

    #[Optional]
    public ?int $day;

    #[Optional]
    public ?string $holiday;

    #[Optional]
    public ?int $month;

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
        ?int $day = null,
        ?string $holiday = null,
        ?int $month = null
    ): self {
        $self = new self;

        null !== $day && $self['day'] = $day;
        null !== $holiday && $self['holiday'] = $holiday;
        null !== $month && $self['month'] = $month;

        return $self;
    }

    public function withDay(int $day): self
    {
        $self = clone $this;
        $self['day'] = $day;

        return $self;
    }

    public function withHoliday(string $holiday): self
    {
        $self = clone $this;
        $self['holiday'] = $holiday;

        return $self;
    }

    public function withMonth(int $month): self
    {
        $self = clone $this;
        $self['month'] = $month;

        return $self;
    }
}
