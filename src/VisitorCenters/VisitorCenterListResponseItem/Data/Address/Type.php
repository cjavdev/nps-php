<?php

declare(strict_types=1);

namespace Nps\VisitorCenters\VisitorCenterListResponseItem\Data\Address;

enum Type: string
{
    case PHYSICAL = 'Physical';

    case MAILING = 'Mailing';
}
