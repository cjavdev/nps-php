<?php

namespace Nps\Core\Exceptions;

class NotFoundException extends APIStatusException
{
    /** @var string */
    protected const DESC = 'Nps Not Found Exception';
}
