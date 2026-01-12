<?php

declare(strict_types=1);

namespace Nps\Services;

use Nps\Client;
use Nps\Core\Contracts\BaseResponse;
use Nps\Core\Exceptions\APIException;
use Nps\RequestOptions;
use Nps\RoadEvents\RoadEventListParams;
use Nps\RoadEvents\RoadEventListResponse;
use Nps\ServiceContracts\RoadEventsRawContract;

/**
 * @phpstan-import-type RequestOpts from \Nps\RequestOptions
 */
final class RoadEventsRawService implements RoadEventsRawContract
{
    // @phpstan-ignore-next-line
    /**
     * @internal
     */
    public function __construct(private Client $client) {}

    /**
     * @api
     *
     * @param array{parkCode?: string, type?: string}|RoadEventListParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<RoadEventListResponse>
     *
     * @throws APIException
     */
    public function list(
        array|RoadEventListParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse {
        [$parsed, $options] = RoadEventListParams::parseRequest(
            $params,
            $requestOptions,
        );

        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'get',
            path: 'roadevents',
            query: $parsed,
            options: $options,
            convert: RoadEventListResponse::class,
        );
    }
}
