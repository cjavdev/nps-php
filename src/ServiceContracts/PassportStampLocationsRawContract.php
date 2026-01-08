<?php

declare(strict_types=1);

namespace Nps\ServiceContracts;

use Nps\Core\Contracts\BaseResponse;
use Nps\Core\Exceptions\APIException;
use Nps\PassportStampLocations\PassportStampLocationListParams;
use Nps\PassportStampLocations\PassportStampLocationListResponseItem;
use Nps\RequestOptions;

/**
 * @phpstan-import-type RequestOpts from \Nps\RequestOptions
 */
interface PassportStampLocationsRawContract
{
    /**
     * @api
     *
     * @param array<string,mixed>|PassportStampLocationListParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<list<PassportStampLocationListResponseItem>>
     *
     * @throws APIException
     */
    public function list(
        array|PassportStampLocationListParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse;
}
