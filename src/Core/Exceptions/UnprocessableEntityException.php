<?php

namespace Nps\Core\Exceptions;

class UnprocessableEntityException extends APIStatusException
{
    /** @var string */
    protected const DESC = 'Nps Unprocessable Entity Exception';
}
