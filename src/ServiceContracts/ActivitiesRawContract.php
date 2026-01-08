<?php

declare(strict_types=1);

namespace Nps\ServiceContracts;

use Nps\Activities\ActivityListParams;
use Nps\Activities\ActivityListParksParams;
use Nps\Activities\ActivityListParksResponseItem;
use Nps\Activities\ActivityListResponseItem;
use Nps\Core\Contracts\BaseResponse;
use Nps\Core\Exceptions\APIException;
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
     * @return BaseResponse<list<ActivityListResponseItem>>
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
     * @return BaseResponse<list<ActivityListParksResponseItem>>
     *
     * @throws APIException
     */
    public function listParks(
        array|ActivityListParksParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse;
}
