<?php

declare(strict_types=1);

namespace Nps\Services;

use Nps\Campgrounds\CampgroundListParams;
use Nps\Campgrounds\CampgroundListResponse;
use Nps\Client;
use Nps\Core\Contracts\BaseResponse;
use Nps\Core\Exceptions\APIException;
use Nps\LimitStartPagination;
use Nps\RequestOptions;
use Nps\ServiceContracts\CampgroundsRawContract;

/**
 * @phpstan-import-type RequestOpts from \Nps\RequestOptions
 */
final class CampgroundsRawService implements CampgroundsRawContract
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
     * }|CampgroundListParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<LimitStartPagination<CampgroundListResponse>>
     *
     * @throws APIException
     */
    public function list(
        array|CampgroundListParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse {
        [$parsed, $options] = CampgroundListParams::parseRequest(
            $params,
            $requestOptions,
        );

        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'get',
            path: 'campgrounds',
            query: $parsed,
            options: $options,
            convert: CampgroundListResponse::class,
            page: LimitStartPagination::class,
        );
    }
}
