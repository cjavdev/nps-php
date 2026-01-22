<?php

declare(strict_types=1);

namespace Nps\Campgrounds\CampgroundListResponse\Data\Address;

enum Type: string
{
    case PHYSICAL = 'Physical';

    case MAILING = 'Mailing';
}
