<?php

declare(strict_types=1);

namespace Nps\ServiceContracts;

use Nps\Core\Contracts\BaseResponse;
use Nps\Core\Exceptions\APIException;
use Nps\RequestOptions;
use Nps\ThingsTodo\ThingsTodoListParams;
use Nps\ThingsTodo\ThingsTodoListResponse;

/**
 * @phpstan-import-type RequestOpts from \Nps\RequestOptions
 */
interface ThingsTodoRawContract
{
    /**
     * @api
     *
     * @param array<string,mixed>|ThingsTodoListParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<ThingsTodoListResponse>
     *
     * @throws APIException
     */
    public function list(
        array|ThingsTodoListParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse;
}
