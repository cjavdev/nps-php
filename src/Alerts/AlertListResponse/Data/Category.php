<?php

declare(strict_types=1);

namespace Nps\Alerts\AlertListResponse\Data;

/**
 * Alert type: Danger, Caution, Information, or Park Closure.
 */
enum Category: string
{
    case DANGER = 'Danger';

    case CAUTION = 'Caution';

    case INFORMATION = 'Information';

    case PARK_CLOSURE = 'Park Closure';
}
