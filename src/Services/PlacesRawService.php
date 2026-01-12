<?php

declare(strict_types=1);

namespace Nps\Services;

use Nps\Client;
use Nps\Core\Contracts\BaseResponse;
use Nps\Core\Exceptions\APIException;
use Nps\Places\PlaceListParams;
use Nps\Places\PlaceListResponse;
use Nps\RequestOptions;
use Nps\ServiceContracts\PlacesRawContract;

/**
 * @phpstan-import-type RequestOpts from \Nps\RequestOptions
 */
final class PlacesRawService implements PlacesRawContract
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
     * }|PlaceListParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<PlaceListResponse>
     *
     * @throws APIException
     */
    public function list(
        array|PlaceListParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse {
        [$parsed, $options] = PlaceListParams::parseRequest(
            $params,
            $requestOptions,
        );

        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'get',
            path: 'places',
            query: $parsed,
            options: $options,
            convert: PlaceListResponse::class,
        );
    }
}
