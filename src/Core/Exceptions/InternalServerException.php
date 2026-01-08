<?php

namespace Nps\Core\Exceptions;

class InternalServerException extends APIStatusException
{
    /** @var string */
    protected const DESC = 'Nps Internal Server Exception';
}
