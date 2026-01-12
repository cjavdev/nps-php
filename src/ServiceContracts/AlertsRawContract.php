<?php

declare(strict_types=1);

namespace Nps\ServiceContracts;

use Nps\Alerts\AlertListParams;
use Nps\Alerts\AlertListResponse;
use Nps\Core\Contracts\BaseResponse;
use Nps\Core\Exceptions\APIException;
use Nps\RequestOptions;

/**
 * @phpstan-import-type RequestOpts from \Nps\RequestOptions
 */
interface AlertsRawContract
{
    /**
     * @api
     *
     * @param array<string,mixed>|AlertListParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<AlertListResponse>
     *
     * @throws APIException
     */
    public function list(
        array|AlertListParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse;
}
