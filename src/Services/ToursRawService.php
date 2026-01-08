<?php

declare(strict_types=1);

namespace Nps\Services;

use Nps\Client;
use Nps\Core\Contracts\BaseResponse;
use Nps\Core\Conversion\ListOf;
use Nps\Core\Exceptions\APIException;
use Nps\RequestOptions;
use Nps\ServiceContracts\ToursRawContract;
use Nps\Tours\TourListParams;
use Nps\Tours\TourListResponseItem;

/**
 * @phpstan-import-type RequestOpts from \Nps\RequestOptions
 */
final class ToursRawService implements ToursRawContract
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
     *   id?: list<string>,
     *   limit?: int,
     *   parkCode?: list<string>,
     *   q?: string,
     *   sort?: list<string>,
     *   start?: int,
     *   stateCode?: list<string>,
     * }|TourListParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<list<TourListResponseItem>>
     *
     * @throws APIException
     */
    public function list(
        array|TourListParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse {
        [$parsed, $options] = TourListParams::parseRequest(
            $params,
            $requestOptions,
        );

        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'get',
            path: 'tours',
            query: $parsed,
            options: $options,
            convert: new ListOf(TourListResponseItem::class),
        );
    }
}
