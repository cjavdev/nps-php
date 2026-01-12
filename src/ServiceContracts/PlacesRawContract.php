<?php

declare(strict_types=1);

namespace Nps\ServiceContracts;

use Nps\Core\Contracts\BaseResponse;
use Nps\Core\Exceptions\APIException;
use Nps\LimitStartPagination;
use Nps\Places\PlaceListParams;
use Nps\Places\PlaceListResponse;
use Nps\RequestOptions;

/**
 * @phpstan-import-type RequestOpts from \Nps\RequestOptions
 */
interface PlacesRawContract
{
    /**
     * @api
     *
     * @param array<string,mixed>|PlaceListParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<LimitStartPagination<PlaceListResponse>>
     *
     * @throws APIException
     */
    public function list(
        array|PlaceListParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse;
}
