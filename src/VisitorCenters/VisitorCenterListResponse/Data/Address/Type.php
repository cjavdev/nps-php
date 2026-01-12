<?php

declare(strict_types=1);

namespace Nps\VisitorCenters\VisitorCenterListResponse\Data\Address;

enum Type: string
{
    case PHYSICAL = 'Physical';

    case MAILING = 'Mailing';
}
