<?php

declare(strict_types=1);

namespace Nps\Services;

use Nps\Client;
use Nps\Core\Contracts\BaseResponse;
use Nps\Core\Conversion\ListOf;
use Nps\Core\Exceptions\APIException;
use Nps\PassportStampLocations\PassportStampLocationListParams;
use Nps\PassportStampLocations\PassportStampLocationListResponseItem;
use Nps\RequestOptions;
use Nps\ServiceContracts\PassportStampLocationsRawContract;

/**
 * @phpstan-import-type RequestOpts from \Nps\RequestOptions
 */
final class PassportStampLocationsRawService implements PassportStampLocationsRawContract
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
     * }|PassportStampLocationListParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<list<PassportStampLocationListResponseItem>>
     *
     * @throws APIException
     */
    public function list(
        array|PassportStampLocationListParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse {
        [$parsed, $options] = PassportStampLocationListParams::parseRequest(
            $params,
            $requestOptions,
        );

        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'get',
            path: 'passportstamplocations',
            query: $parsed,
            options: $options,
            convert: new ListOf(PassportStampLocationListResponseItem::class),
        );
    }
}
