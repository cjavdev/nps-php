<?php

namespace Nps\Core\Exceptions;

class RateLimitException extends APIStatusException
{
    /** @var string */
    protected const DESC = 'Nps Rate Limit Exception';
}
