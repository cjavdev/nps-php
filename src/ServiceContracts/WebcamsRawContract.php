<?php

declare(strict_types=1);

namespace Nps\ServiceContracts;

use Nps\Core\Contracts\BaseResponse;
use Nps\Core\Exceptions\APIException;
use Nps\RequestOptions;
use Nps\Webcams\WebcamListParams;
use Nps\Webcams\WebcamListResponseItem;

/**
 * @phpstan-import-type RequestOpts from \Nps\RequestOptions
 */
interface WebcamsRawContract
{
    /**
     * @api
     *
     * @param array<string,mixed>|WebcamListParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<list<WebcamListResponseItem>>
     *
     * @throws APIException
     */
    public function list(
        array|WebcamListParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse;
}
