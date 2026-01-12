<?php

declare(strict_types=1);

namespace Nps\Parks\ParkListResponse\Data\Data\OperatingHour;

use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Contracts\BaseModel;
use Nps\Parks\ParkListResponse\Data\Data\OperatingHour\Exception\ExceptionHours;

/**
 * @phpstan-import-type ExceptionHoursShape from \Nps\Parks\ParkListResponse\Data\Data\OperatingHour\Exception\ExceptionHours
 *
 * @phpstan-type ExceptionShape = array{
 *   endDate?: \DateTimeInterface|null,
 *   exceptionHours?: null|ExceptionHours|ExceptionHoursShape,
 *   name?: string|null,
 *   startDate?: \DateTimeInterface|null,
 * }
 */
final class Exception implements BaseModel
{
    /** @use SdkModel<ExceptionShape> */
    use SdkModel;

    #[Optional]
    public ?\DateTimeInterface $endDate;

    #[Optional]
    public ?ExceptionHours $exceptionHours;

    #[Optional]
    public ?string $name;

    #[Optional]
    public ?\DateTimeInterface $startDate;

    public function __construct()
    {
        $this->initialize();
    }

    /**
     * Construct an instance from the required parameters.
     *
     * You must use named parameters to construct any parameters with a default value.
     *
     * @param ExceptionHours|ExceptionHoursShape|null $exceptionHours
     */
    public static function with(
        ?\DateTimeInterface $endDate = null,
        ExceptionHours|array|null $exceptionHours = null,
        ?string $name = null,
        ?\DateTimeInterface $startDate = null,
    ): self {
        $self = new self;

        null !== $endDate && $self['endDate'] = $endDate;
        null !== $exceptionHours && $self['exceptionHours'] = $exceptionHours;
        null !== $name && $self['name'] = $name;
        null !== $startDate && $self['startDate'] = $startDate;

        return $self;
    }

    public function withEndDate(\DateTimeInterface $endDate): self
    {
        $self = clone $this;
        $self['endDate'] = $endDate;

        return $self;
    }

    /**
     * @param ExceptionHours|ExceptionHoursShape $exceptionHours
     */
    public function withExceptionHours(
        ExceptionHours|array $exceptionHours
    ): self {
        $self = clone $this;
        $self['exceptionHours'] = $exceptionHours;

        return $self;
    }

    public function withName(string $name): self
    {
        $self = clone $this;
        $self['name'] = $name;

        return $self;
    }

    public function withStartDate(\DateTimeInterface $startDate): self
    {
        $self = clone $this;
        $self['startDate'] = $startDate;

        return $self;
    }
}
