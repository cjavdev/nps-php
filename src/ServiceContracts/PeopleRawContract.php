<?php

declare(strict_types=1);

namespace Nps\ServiceContracts;

use Nps\Core\Contracts\BaseResponse;
use Nps\Core\Exceptions\APIException;
use Nps\People\PersonListParams;
use Nps\People\PersonListResponse;
use Nps\RequestOptions;

/**
 * @phpstan-import-type RequestOpts from \Nps\RequestOptions
 */
interface PeopleRawContract
{
    /**
     * @api
     *
     * @param array<string,mixed>|PersonListParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<PersonListResponse>
     *
     * @throws APIException
     */
    public function list(
        array|PersonListParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse;
}
