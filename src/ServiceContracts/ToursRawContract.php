<?php

declare(strict_types=1);

namespace Nps\ServiceContracts;

use Nps\Core\Contracts\BaseResponse;
use Nps\Core\Exceptions\APIException;
use Nps\RequestOptions;
use Nps\Tours\TourListParams;
use Nps\Tours\TourListResponse;

/**
 * @phpstan-import-type RequestOpts from \Nps\RequestOptions
 */
interface ToursRawContract
{
    /**
     * @api
     *
     * @param array<string,mixed>|TourListParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<TourListResponse>
     *
     * @throws APIException
     */
    public function list(
        array|TourListParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse;
}
