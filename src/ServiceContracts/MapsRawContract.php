<?php

declare(strict_types=1);

namespace Nps\ServiceContracts;

use Nps\Core\Contracts\BaseResponse;
use Nps\Core\Exceptions\APIException;
use Nps\Maps\MapGetParkBoundariesResponseItem;
use Nps\RequestOptions;

/**
 * @phpstan-import-type RequestOpts from \Nps\RequestOptions
 */
interface MapsRawContract
{
    /**
     * @api
     *
     * @param string $sitecode park site code (e.g. abli)
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<list<MapGetParkBoundariesResponseItem>>
     *
     * @throws APIException
     */
    public function retrieveParkBoundaries(
        string $sitecode,
        RequestOptions|array|null $requestOptions = null
    ): BaseResponse;
}
