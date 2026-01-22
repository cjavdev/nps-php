<?php

declare(strict_types=1);

namespace Nps\ServiceContracts;

use Nps\Core\Contracts\BaseResponse;
use Nps\Core\Exceptions\APIException;
use Nps\Feespasses\FeespassListParams;
use Nps\Feespasses\FeespassListResponse;
use Nps\LimitStartPagination;
use Nps\RequestOptions;

/**
 * @phpstan-import-type RequestOpts from \Nps\RequestOptions
 */
interface FeespassesRawContract
{
    /**
     * @api
     *
     * @param array<string,mixed>|FeespassListParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<LimitStartPagination<FeespassListResponse>>
     *
     * @throws APIException
     */
    public function list(
        array|FeespassListParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse;
}
