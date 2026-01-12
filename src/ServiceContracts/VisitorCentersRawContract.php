<?php

declare(strict_types=1);

namespace Nps\ServiceContracts;

use Nps\Core\Contracts\BaseResponse;
use Nps\Core\Exceptions\APIException;
use Nps\LimitStartPagination;
use Nps\RequestOptions;
use Nps\VisitorCenters\VisitorCenterListParams;
use Nps\VisitorCenters\VisitorCenterListResponse;

/**
 * @phpstan-import-type RequestOpts from \Nps\RequestOptions
 */
interface VisitorCentersRawContract
{
    /**
     * @api
     *
     * @param array<string,mixed>|VisitorCenterListParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<LimitStartPagination<VisitorCenterListResponse>>
     *
     * @throws APIException
     */
    public function list(
        array|VisitorCenterListParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse;
}
