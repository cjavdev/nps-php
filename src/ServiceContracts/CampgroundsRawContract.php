<?php

declare(strict_types=1);

namespace Nps\ServiceContracts;

use Nps\Campgrounds\CampgroundListParams;
use Nps\Campgrounds\CampgroundListResponse;
use Nps\Core\Contracts\BaseResponse;
use Nps\Core\Exceptions\APIException;
use Nps\RequestOptions;

/**
 * @phpstan-import-type RequestOpts from \Nps\RequestOptions
 */
interface CampgroundsRawContract
{
    /**
     * @api
     *
     * @param array<string,mixed>|CampgroundListParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<CampgroundListResponse>
     *
     * @throws APIException
     */
    public function list(
        array|CampgroundListParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse;
}
