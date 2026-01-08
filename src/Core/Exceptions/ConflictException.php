<?php

namespace Nps\Core\Exceptions;

class ConflictException extends APIStatusException
{
    /** @var string */
    protected const DESC = 'Nps Conflict Exception';
}
