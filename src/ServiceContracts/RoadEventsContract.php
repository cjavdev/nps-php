<?php

declare(strict_types=1);

namespace Nps\ServiceContracts;

use Nps\Core\Exceptions\APIException;
use Nps\LimitStartPagination;
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
     * @param int $limit Number of results to return per request. Default is 50.
     * @param string $parkCode a comma delimited list of 4 character park codes
     * @param int $start Number of results to return per request. Default is 50.
     * @param string $type either 'incident' or 'workzone'
     * @param RequestOpts|null $requestOptions
     *
     * @return LimitStartPagination<RoadEventListResponse>
     *
     * @throws APIException
     */
    public function list(
        ?int $limit = null,
        ?string $parkCode = null,
        ?int $start = null,
        ?string $type = null,
        RequestOptions|array|null $requestOptions = null,
    ): LimitStartPagination;
}
