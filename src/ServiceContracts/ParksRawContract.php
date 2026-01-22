<?php

declare(strict_types=1);

namespace Nps\ServiceContracts;

use Nps\Core\Contracts\BaseResponse;
use Nps\Core\Exceptions\APIException;
use Nps\LimitStartPagination;
use Nps\Parks\ParkListParams;
use Nps\Parks\ParkListResponse;
use Nps\RequestOptions;

/**
 * @phpstan-import-type RequestOpts from \Nps\RequestOptions
 */
interface ParksRawContract
{
    /**
     * @api
     *
     * @param array<string,mixed>|ParkListParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<LimitStartPagination<ParkListResponse>>
     *
     * @throws APIException
     */
    public function list(
        array|ParkListParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse;
}
