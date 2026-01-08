<?php

declare(strict_types=1);

namespace Nps\Lessonplans\LessonplanListResponseItem\Data;

use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Contracts\BaseModel;

/**
 * Educational standards that apply to this lesson.
 *
 * @phpstan-type CommoncoreShape = array{
 *   additionalstandards?: string|null,
 *   elastandards?: list<string>|null,
 *   mathstandards?: list<string>|null,
 *   statestandards?: string|null,
 * }
 */
final class Commoncore implements BaseModel
{
    /** @use SdkModel<CommoncoreShape> */
    use SdkModel;

    #[Optional]
    public ?string $additionalstandards;

    /** @var list<string>|null $elastandards */
    #[Optional(list: 'string')]
    public ?array $elastandards;

    /** @var list<string>|null $mathstandards */
    #[Optional(list: 'string')]
    public ?array $mathstandards;

    #[Optional]
    public ?string $statestandards;

    public function __construct()
    {
        $this->initialize();
    }

    /**
     * Construct an instance from the required parameters.
     *
     * You must use named parameters to construct any parameters with a default value.
     *
     * @param list<string>|null $elastandards
     * @param list<string>|null $mathstandards
     */
    public static function with(
        ?string $additionalstandards = null,
        ?array $elastandards = null,
        ?array $mathstandards = null,
        ?string $statestandards = null,
    ): self {
        $self = new self;

        null !== $additionalstandards && $self['additionalstandards'] = $additionalstandards;
        null !== $elastandards && $self['elastandards'] = $elastandards;
        null !== $mathstandards && $self['mathstandards'] = $mathstandards;
        null !== $statestandards && $self['statestandards'] = $statestandards;

        return $self;
    }

    public function withAdditionalstandards(string $additionalstandards): self
    {
        $self = clone $this;
        $self['additionalstandards'] = $additionalstandards;

        return $self;
    }

    /**
     * @param list<string> $elastandards
     */
    public function withElastandards(array $elastandards): self
    {
        $self = clone $this;
        $self['elastandards'] = $elastandards;

        return $self;
    }

    /**
     * @param list<string> $mathstandards
     */
    public function withMathstandards(array $mathstandards): self
    {
        $self = clone $this;
        $self['mathstandards'] = $mathstandards;

        return $self;
    }

    public function withStatestandards(string $statestandards): self
    {
        $self = clone $this;
        $self['statestandards'] = $statestandards;

        return $self;
    }
}
