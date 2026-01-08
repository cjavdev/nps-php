<?php

namespace Nps\Core\Exceptions;

class BadRequestException extends APIStatusException
{
    /** @var string */
    protected const DESC = 'Nps Bad Request Exception';
}
