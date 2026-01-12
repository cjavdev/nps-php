<?php

declare(strict_types=1);

namespace Nps\Services;

use Nps\Client;
use Nps\Core\Contracts\BaseResponse;
use Nps\Core\Exceptions\APIException;
use Nps\LimitStartPagination;
use Nps\RequestOptions;
use Nps\ServiceContracts\TopicsRawContract;
use Nps\Topics\TopicListParams;
use Nps\Topics\TopicListParksParams;
use Nps\Topics\TopicListParksResponse;
use Nps\Topics\TopicListResponse;

/**
 * @phpstan-import-type RequestOpts from \Nps\RequestOptions
 */
final class TopicsRawService implements TopicsRawContract
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
     *   id?: string, limit?: int, q?: string, sort?: string, start?: int
     * }|TopicListParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<LimitStartPagination<TopicListResponse>>
     *
     * @throws APIException
     */
    public function list(
        array|TopicListParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse {
        [$parsed, $options] = TopicListParams::parseRequest(
            $params,
            $requestOptions,
        );

        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'get',
            path: 'topics',
            query: $parsed,
            options: $options,
            convert: TopicListResponse::class,
            page: LimitStartPagination::class,
        );
    }

    /**
     * @api
     *
     * @param array{
     *   id?: list<string>, limit?: int, q?: string, sort?: string, start?: int
     * }|TopicListParksParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<LimitStartPagination<TopicListParksResponse>>
     *
     * @throws APIException
     */
    public function listParks(
        array|TopicListParksParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse {
        [$parsed, $options] = TopicListParksParams::parseRequest(
            $params,
            $requestOptions,
        );

        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'get',
            path: 'topics/parks',
            query: $parsed,
            options: $options,
            convert: TopicListParksResponse::class,
            page: LimitStartPagination::class,
        );
    }
}
