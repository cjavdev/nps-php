<?php

declare(strict_types=1);

namespace Nps\ServiceContracts;

use Nps\Core\Contracts\BaseResponse;
use Nps\Core\Exceptions\APIException;
use Nps\ParkingLots\ParkingLotListParams;
use Nps\ParkingLots\ParkingLotListResponse;
use Nps\RequestOptions;

/**
 * @phpstan-import-type RequestOpts from \Nps\RequestOptions
 */
interface ParkingLotsRawContract
{
    /**
     * @api
     *
     * @param array<string,mixed>|ParkingLotListParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<ParkingLotListResponse>
     *
     * @throws APIException
     */
    public function list(
        array|ParkingLotListParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse;
}
