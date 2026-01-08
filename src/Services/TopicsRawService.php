<?php

declare(strict_types=1);

namespace Nps\Services;

use Nps\Client;
use Nps\Core\Contracts\BaseResponse;
use Nps\Core\Conversion\ListOf;
use Nps\Core\Exceptions\APIException;
use Nps\RequestOptions;
use Nps\ServiceContracts\TopicsRawContract;
use Nps\Topics\TopicGetParksResponseItem;
use Nps\Topics\TopicListParams;
use Nps\Topics\TopicListResponseItem;
use Nps\Topics\TopicRetrieveParksParams;

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
     * @return BaseResponse<list<TopicListResponseItem>>
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
            convert: new ListOf(TopicListResponseItem::class),
        );
    }

    /**
     * @api
     *
     * @param array{
     *   id?: list<string>, limit?: int, q?: string, sort?: string, start?: int
     * }|TopicRetrieveParksParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<list<TopicGetParksResponseItem>>
     *
     * @throws APIException
     */
    public function retrieveParks(
        array|TopicRetrieveParksParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse {
        [$parsed, $options] = TopicRetrieveParksParams::parseRequest(
            $params,
            $requestOptions,
        );

        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'get',
            path: 'topics/parks',
            query: $parsed,
            options: $options,
            convert: new ListOf(TopicGetParksResponseItem::class),
        );
    }
}
