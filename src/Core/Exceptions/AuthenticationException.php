<?php

namespace Nps\Core\Exceptions;

class AuthenticationException extends APIStatusException
{
    /** @var string */
    protected const DESC = 'Nps Authentication Exception';
}
