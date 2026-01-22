<?php

declare(strict_types=1);

namespace Nps\Events\EventListResponse\Data;

use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Contracts\BaseModel;

/**
 * @phpstan-type TimeShape = array{
 *   sunrisestart?: string|null,
 *   sunsetend?: string|null,
 *   timeend?: \DateTimeInterface|null,
 *   timestart?: \DateTimeInterface|null,
 * }
 */
final class Time implements BaseModel
{
    /** @use SdkModel<TimeShape> */
    use SdkModel;

    /**
     * Event begins at sunrise.
     */
    #[Optional]
    public ?string $sunrisestart;

    /**
     * Event ends at sunset.
     */
    #[Optional]
    public ?string $sunsetend;

    /**
     * Time event ends.
     */
    #[Optional]
    public ?\DateTimeInterface $timeend;

    /**
     * Time event begins.
     */
    #[Optional]
    public ?\DateTimeInterface $timestart;

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
        ?string $sunrisestart = null,
        ?string $sunsetend = null,
        ?\DateTimeInterface $timeend = null,
        ?\DateTimeInterface $timestart = null,
    ): self {
        $self = new self;

        null !== $sunrisestart && $self['sunrisestart'] = $sunrisestart;
        null !== $sunsetend && $self['sunsetend'] = $sunsetend;
        null !== $timeend && $self['timeend'] = $timeend;
        null !== $timestart && $self['timestart'] = $timestart;

        return $self;
    }

    /**
     * Event begins at sunrise.
     */
    public function withSunrisestart(string $sunrisestart): self
    {
        $self = clone $this;
        $self['sunrisestart'] = $sunrisestart;

        return $self;
    }

    /**
     * Event ends at sunset.
     */
    public function withSunsetend(string $sunsetend): self
    {
        $self = clone $this;
        $self['sunsetend'] = $sunsetend;

        return $self;
    }

    /**
     * Time event ends.
     */
    public function withTimeend(\DateTimeInterface $timeend): self
    {
        $self = clone $this;
        $self['timeend'] = $timeend;

        return $self;
    }

    /**
     * Time event begins.
     */
    public function withTimestart(\DateTimeInterface $timestart): self
    {
        $self = clone $this;
        $self['timestart'] = $timestart;

        return $self;
    }
}
