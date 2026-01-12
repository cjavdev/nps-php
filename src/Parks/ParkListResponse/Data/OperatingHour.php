<?php

declare(strict_types=1);

namespace Nps\Parks\ParkListResponse\Data;

use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Contracts\BaseModel;
use Nps\Parks\ParkListResponse\Data\OperatingHour\Exception;
use Nps\Parks\ParkListResponse\Data\OperatingHour\StandardHours;

/**
 * @phpstan-import-type ExceptionShape from \Nps\Parks\ParkListResponse\Data\OperatingHour\Exception
 * @phpstan-import-type StandardHoursShape from \Nps\Parks\ParkListResponse\Data\OperatingHour\StandardHours
 *
 * @phpstan-type OperatingHourShape = array{
 *   description?: string|null,
 *   exceptions?: list<Exception|ExceptionShape>|null,
 *   name?: string|null,
 *   standardHours?: null|StandardHours|StandardHoursShape,
 * }
 */
final class OperatingHour implements BaseModel
{
    /** @use SdkModel<OperatingHourShape> */
    use SdkModel;

    #[Optional]
    public ?string $description;

    /** @var list<Exception>|null $exceptions */
    #[Optional(list: Exception::class)]
    public ?array $exceptions;

    #[Optional]
    public ?string $name;

    #[Optional]
    public ?StandardHours $standardHours;

    public function __construct()
    {
        $this->initialize();
    }

    /**
     * Construct an instance from the required parameters.
     *
     * You must use named parameters to construct any parameters with a default value.
     *
     * @param list<Exception|ExceptionShape>|null $exceptions
     * @param StandardHours|StandardHoursShape|null $standardHours
     */
    public static function with(
        ?string $description = null,
        ?array $exceptions = null,
        ?string $name = null,
        StandardHours|array|null $standardHours = null,
    ): self {
        $self = new self;

        null !== $description && $self['description'] = $description;
        null !== $exceptions && $self['exceptions'] = $exceptions;
        null !== $name && $self['name'] = $name;
        null !== $standardHours && $self['standardHours'] = $standardHours;

        return $self;
    }

    public function withDescription(string $description): self
    {
        $self = clone $this;
        $self['description'] = $description;

        return $self;
    }

    /**
     * @param list<Exception|ExceptionShape> $exceptions
     */
    public function withExceptions(array $exceptions): self
    {
        $self = clone $this;
        $self['exceptions'] = $exceptions;

        return $self;
    }

    public function withName(string $name): self
    {
        $self = clone $this;
        $self['name'] = $name;

        return $self;
    }

    /**
     * @param StandardHours|StandardHoursShape $standardHours
     */
    public function withStandardHours(StandardHours|array $standardHours): self
    {
        $self = clone $this;
        $self['standardHours'] = $standardHours;

        return $self;
    }
}
