<?php

namespace Nps\Core\Exceptions;

class PermissionDeniedException extends APIStatusException
{
    /** @var string */
    protected const DESC = 'Nps Permission Denied Exception';
}
