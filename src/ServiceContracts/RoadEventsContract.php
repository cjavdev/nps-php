<?php

declare(strict_types=1);

namespace Nps\ServiceContracts;

use Nps\Core\Exceptions\APIException;
use Nps\RequestOptions;
use Nps\RoadEvents\RoadEventListResponse;

/**
 * @phpstan-import-type RequestOpts from \Nps\RequestOptions
 */
interface RoadEventsContract
{
    /**
     * @api
     *
     * @param string $parkCode a comma delimited list of 4 character park codes
     * @param string $type either 'incident' or 'workzone'
     * @param RequestOpts|null $requestOptions
     *
     * @throws APIException
     */
    public function list(
        ?string $parkCode = null,
        ?string $type = null,
        RequestOptions|array|null $requestOptions = null,
    ): RoadEventListResponse;
}
