<?php

declare(strict_types=1);

namespace Nps\Services;

use Nps\Activities\ActivityListParams;
use Nps\Activities\ActivityListParksParams;
use Nps\Activities\ActivityListParksResponseItem;
use Nps\Activities\ActivityListResponseItem;
use Nps\Client;
use Nps\Core\Contracts\BaseResponse;
use Nps\Core\Conversion\ListOf;
use Nps\Core\Exceptions\APIException;
use Nps\RequestOptions;
use Nps\ServiceContracts\ActivitiesRawContract;

/**
 * @phpstan-import-type RequestOpts from \Nps\RequestOptions
 */
final class ActivitiesRawService implements ActivitiesRawContract
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
     *   id?: string, limit?: string, q?: string, sort?: string, start?: int
     * }|ActivityListParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<list<ActivityListResponseItem>>
     *
     * @throws APIException
     */
    public function list(
        array|ActivityListParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse {
        [$parsed, $options] = ActivityListParams::parseRequest(
            $params,
            $requestOptions,
        );

        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'get',
            path: 'activities',
            query: $parsed,
            options: $options,
            convert: new ListOf(ActivityListResponseItem::class),
        );
    }

    /**
     * @api
     *
     * Returns activites parks information.
     *
     * @param array{
     *   id?: list<string>, limit?: int, q?: string, sort?: list<string>, start?: int
     * }|ActivityListParksParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<list<ActivityListParksResponseItem>>
     *
     * @throws APIException
     */
    public function listParks(
        array|ActivityListParksParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse {
        [$parsed, $options] = ActivityListParksParams::parseRequest(
            $params,
            $requestOptions,
        );

        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'get',
            path: 'activities/parks',
            query: $parsed,
            options: $options,
            convert: new ListOf(ActivityListParksResponseItem::class),
        );
    }
}
