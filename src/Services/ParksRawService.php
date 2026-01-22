<?php

declare(strict_types=1);

namespace Nps\Services;

use Nps\Client;
use Nps\Core\Contracts\BaseResponse;
use Nps\Core\Exceptions\APIException;
use Nps\LimitStartPagination;
use Nps\Parks\ParkListParams;
use Nps\Parks\ParkListResponse;
use Nps\RequestOptions;
use Nps\ServiceContracts\ParksRawContract;

/**
 * @phpstan-import-type RequestOpts from \Nps\RequestOptions
 */
final class ParksRawService implements ParksRawContract
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
     *   sort?: list<string>,
     *   start?: int,
     *   stateCode?: list<string>,
     * }|ParkListParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<LimitStartPagination<ParkListResponse>>
     *
     * @throws APIException
     */
    public function list(
        array|ParkListParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse {
        [$parsed, $options] = ParkListParams::parseRequest(
            $params,
            $requestOptions,
        );

        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'get',
            path: 'parks',
            query: $parsed,
            options: $options,
            convert: ParkListResponse::class,
            page: LimitStartPagination::class,
        );
    }
}
