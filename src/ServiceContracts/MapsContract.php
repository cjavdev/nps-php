<?php

declare(strict_types=1);

namespace Nps\ServiceContracts;

use Nps\Core\Exceptions\APIException;
use Nps\Maps\MapGetParkBoundariesResponse;
use Nps\RequestOptions;

/**
 * @phpstan-import-type RequestOpts from \Nps\RequestOptions
 */
interface MapsContract
{
    /**
     * @api
     *
     * @param string $sitecode park site code (e.g. abli)
     * @param RequestOpts|null $requestOptions
     *
     * @throws APIException
     */
    public function retrieveParkBoundaries(
        string $sitecode,
        RequestOptions|array|null $requestOptions = null
    ): MapGetParkBoundariesResponse;
}
