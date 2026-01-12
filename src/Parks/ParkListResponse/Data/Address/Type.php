<?php

declare(strict_types=1);

namespace Nps\Parks\ParkListResponse\Data\Address;

enum Type: string
{
    case PHYSICAL = 'Physical';

    case MAILING = 'Mailing';
}
