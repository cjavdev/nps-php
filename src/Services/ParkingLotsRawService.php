<?php

declare(strict_types=1);

namespace Nps\Services;

use Nps\Client;
use Nps\Core\Contracts\BaseResponse;
use Nps\Core\Conversion\ListOf;
use Nps\Core\Exceptions\APIException;
use Nps\ParkingLots\ParkingLotListParams;
use Nps\ParkingLots\ParkingLotListResponseItem;
use Nps\RequestOptions;
use Nps\ServiceContracts\ParkingLotsRawContract;

/**
 * @phpstan-import-type RequestOpts from \Nps\RequestOptions
 */
final class ParkingLotsRawService implements ParkingLotsRawContract
{
    // @phpstan-ignore-next-line
    /**
     * @internal
     */
    public function __construct(private Client $client) {}

    /**
     * @api
     *
     * @param array{
     *   limit?: int,
     *   parkCode?: list<string>,
     *   q?: string,
     *   start?: int,
     *   stateCode?: list<string>,
     * }|ParkingLotListParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<list<ParkingLotListResponseItem>>
     *
     * @throws APIException
     */
    public function list(
        array|ParkingLotListParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse {
        [$parsed, $options] = ParkingLotListParams::parseRequest(
            $params,
            $requestOptions,
        );

        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'get',
            path: 'parkinglots',
            query: $parsed,
            options: $options,
            convert: new ListOf(ParkingLotListResponseItem::class),
        );
    }
}
