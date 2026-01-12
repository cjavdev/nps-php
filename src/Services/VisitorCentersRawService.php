<?php

declare(strict_types=1);

namespace Nps\Services;

use Nps\Client;
use Nps\Core\Contracts\BaseResponse;
use Nps\Core\Exceptions\APIException;
use Nps\RequestOptions;
use Nps\ServiceContracts\VisitorCentersRawContract;
use Nps\VisitorCenters\VisitorCenterListParams;
use Nps\VisitorCenters\VisitorCenterListResponse;

/**
 * @phpstan-import-type RequestOpts from \Nps\RequestOptions
 */
final class VisitorCentersRawService implements VisitorCentersRawContract
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
     * }|VisitorCenterListParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<VisitorCenterListResponse>
     *
     * @throws APIException
     */
    public function list(
        array|VisitorCenterListParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse {
        [$parsed, $options] = VisitorCenterListParams::parseRequest(
            $params,
            $requestOptions,
        );

        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'get',
            path: 'visitorcenters',
            query: $parsed,
            options: $options,
            convert: VisitorCenterListResponse::class,
        );
    }
}
