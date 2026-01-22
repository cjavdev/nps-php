<?php

declare(strict_types=1);

namespace Nps\Lessonplans\LessonplanListResponse;

use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Contracts\BaseModel;
use Nps\Lessonplans\LessonplanListResponse\Data\Commoncore;

/**
 * @phpstan-import-type CommoncoreShape from \Nps\Lessonplans\LessonplanListResponse\Data\Commoncore
 *
 * @phpstan-type DataShape = array{
 *   id?: string|null,
 *   commoncore?: null|Commoncore|CommoncoreShape,
 *   duration?: string|null,
 *   gradelevel?: string|null,
 *   parks?: list<string>|null,
 *   questionobjective?: string|null,
 *   subject?: string|null,
 *   title?: string|null,
 *   url?: string|null,
 * }
 */
final class Data implements BaseModel
{
    /** @use SdkModel<DataShape> */
    use SdkModel;

    /**
     * Unique identifier for this lesson plan.
     */
    #[Optional]
    public ?string $id;

    /**
     * Educational standards that apply to this lesson.
     */
    #[Optional]
    public ?Commoncore $commoncore;

    /**
     * Time it takes to peform the lesson.
     */
    #[Optional]
    public ?string $duration;

    /**
     * Grade level of students at which this lesson is aimed.
     */
    #[Optional]
    public ?string $gradelevel;

    /**
     * Related parks for this lesson plan.
     *
     * @var list<string>|null $parks
     */
    #[Optional(list: 'string')]
    public ?array $parks;

    /**
     * Objective of the lesson or the question student should be able to answer at the end of the lesson.
     */
    #[Optional]
    public ?string $questionobjective;

    /**
     * Broad subject the lesson falls under= literacy and language arts, math, science, or social studies.
     */
    #[Optional]
    public ?string $subject;

    /**
     * Lesson plan title.
     */
    #[Optional]
    public ?string $title;

    /**
     * Lesson plan link.
     */
    #[Optional]
    public ?string $url;

    public function __construct()
    {
        $this->initialize();
    }

    /**
     * Construct an instance from the required parameters.
     *
     * You must use named parameters to construct any parameters with a default value.
     *
     * @param Commoncore|CommoncoreShape|null $commoncore
     * @param list<string>|null $parks
     */
    public static function with(
        ?string $id = null,
        Commoncore|array|null $commoncore = null,
        ?string $duration = null,
        ?string $gradelevel = null,
        ?array $parks = null,
        ?string $questionobjective = null,
        ?string $subject = null,
        ?string $title = null,
        ?string $url = null,
    ): self {
        $self = new self;

        null !== $id && $self['id'] = $id;
        null !== $commoncore && $self['commoncore'] = $commoncore;
        null !== $duration && $self['duration'] = $duration;
        null !== $gradelevel && $self['gradelevel'] = $gradelevel;
        null !== $parks && $self['parks'] = $parks;
        null !== $questionobjective && $self['questionobjective'] = $questionobjective;
        null !== $subject && $self['subject'] = $subject;
        null !== $title && $self['title'] = $title;
        null !== $url && $self['url'] = $url;

        return $self;
    }

    /**
     * Unique identifier for this lesson plan.
     */
    public function withID(string $id): self
    {
        $self = clone $this;
        $self['id'] = $id;

        return $self;
    }

    /**
     * Educational standards that apply to this lesson.
     *
     * @param Commoncore|CommoncoreShape $commoncore
     */
    public function withCommoncore(Commoncore|array $commoncore): self
    {
        $self = clone $this;
        $self['commoncore'] = $commoncore;

        return $self;
    }

    /**
     * Time it takes to peform the lesson.
     */
    public function withDuration(string $duration): self
    {
        $self = clone $this;
        $self['duration'] = $duration;

        return $self;
    }

    /**
     * Grade level of students at which this lesson is aimed.
     */
    public function withGradelevel(string $gradelevel): self
    {
        $self = clone $this;
        $self['gradelevel'] = $gradelevel;

        return $self;
    }

    /**
     * Related parks for this lesson plan.
     *
     * @param list<string> $parks
     */
    public function withParks(array $parks): self
    {
        $self = clone $this;
        $self['parks'] = $parks;

        return $self;
    }

    /**
     * Objective of the lesson or the question student should be able to answer at the end of the lesson.
     */
    public function withQuestionobjective(string $questionobjective): self
    {
        $self = clone $this;
        $self['questionobjective'] = $questionobjective;

        return $self;
    }

    /**
     * Broad subject the lesson falls under= literacy and language arts, math, science, or social studies.
     */
    public function withSubject(string $subject): self
    {
        $self = clone $this;
        $self['subject'] = $subject;

        return $self;
    }

    /**
     * Lesson plan title.
     */
    public function withTitle(string $title): self
    {
        $self = clone $this;
        $self['title'] = $title;

        return $self;
    }

    /**
     * Lesson plan link.
     */
    public function withURL(string $url): self
    {
        $self = clone $this;
        $self['url'] = $url;

        return $self;
    }
}
