<?php

declare(strict_types=1);

namespace Nps\Services;

use Nps\Client;
use Nps\Core\Contracts\BaseResponse;
use Nps\Core\Conversion\ListOf;
use Nps\Core\Exceptions\APIException;
use Nps\Feespasses\FeespassListParams;
use Nps\Feespasses\FeespassListResponseItem;
use Nps\RequestOptions;
use Nps\ServiceContracts\FeespassesRawContract;

/**
 * @phpstan-import-type RequestOpts from \Nps\RequestOptions
 */
final class FeespassesRawService implements FeespassesRawContract
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
     *   statecode?: list<string>,
     * }|FeespassListParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<list<FeespassListResponseItem>>
     *
     * @throws APIException
     */
    public function list(
        array|FeespassListParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse {
        [$parsed, $options] = FeespassListParams::parseRequest(
            $params,
            $requestOptions,
        );

        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'get',
            path: 'feespasses',
            query: $parsed,
            options: $options,
            convert: new ListOf(FeespassListResponseItem::class),
        );
    }
}
