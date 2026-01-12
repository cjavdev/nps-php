<?php

declare(strict_types=1);

namespace Nps\Feespasses\FeespassListResponse\Data;

enum ContentOrderOrdinals: string
{
    case ENTRANCE_FEE = 'entranceFee';

    case TIMED_ENTRY = 'timedEntry';

    case PAID_PARKING = 'paidParking';

    case CUSTOM_FEE = 'customFee';
}
