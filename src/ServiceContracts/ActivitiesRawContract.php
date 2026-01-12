<?php

declare(strict_types=1);

namespace Nps\ServiceContracts;

use Nps\Activities\ActivityListParams;
use Nps\Activities\ActivityListParksParams;
use Nps\Activities\ActivityListParksResponse;
use Nps\Activities\ActivityListResponse;
use Nps\Core\Contracts\BaseResponse;
use Nps\Core\Exceptions\APIException;
use Nps\LimitStartPagination;
use Nps\RequestOptions;

/**
 * @phpstan-import-type RequestOpts from \Nps\RequestOptions
 */
interface ActivitiesRawContract
{
    /**
     * @api
     *
     * @param array<string,mixed>|ActivityListParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<ActivityListResponse>
     *
     * @throws APIException
     */
    public function list(
        array|ActivityListParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse;

    /**
     * @api
     *
     * @param array<string,mixed>|ActivityListParksParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<LimitStartPagination<ActivityListParksResponse>>
     *
     * @throws APIException
     */
    public function listParks(
        array|ActivityListParksParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse;
}
