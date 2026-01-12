<?php

declare(strict_types=1);

namespace Nps\ServiceContracts;

use Nps\Core\Contracts\BaseResponse;
use Nps\Core\Exceptions\APIException;
use Nps\RequestOptions;
use Nps\RoadEvents\RoadEventListParams;
use Nps\RoadEvents\RoadEventListResponse;

/**
 * @phpstan-import-type RequestOpts from \Nps\RequestOptions
 */
interface RoadEventsRawContract
{
    /**
     * @api
     *
     * @param array<string,mixed>|RoadEventListParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<RoadEventListResponse>
     *
     * @throws APIException
     */
    public function list(
        array|RoadEventListParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse;
}
