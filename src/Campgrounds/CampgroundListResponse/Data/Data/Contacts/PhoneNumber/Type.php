<?php

declare(strict_types=1);

namespace Nps\Campgrounds\CampgroundListResponse\Data\Data\Contacts\PhoneNumber;

enum Type: string
{
    case VOICE = 'Voice';

    case FAX = 'Fax';

    case TTY = 'TTY';
}
