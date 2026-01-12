<?php

declare(strict_types=1);

namespace Nps\Services;

use Nps\Client;
use Nps\Core\Contracts\BaseResponse;
use Nps\Core\Exceptions\APIException;
use Nps\LimitStartPagination;
use Nps\RequestOptions;
use Nps\ServiceContracts\ThingsTodoRawContract;
use Nps\ThingsTodo\ThingsTodoListParams;
use Nps\ThingsTodo\ThingsTodoListResponse;

/**
 * @phpstan-import-type RequestOpts from \Nps\RequestOptions
 */
final class ThingsTodoRawService implements ThingsTodoRawContract
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
     *   id?: string,
     *   limit?: int,
     *   parkCode?: string,
     *   q?: string,
     *   sort?: list<string>,
     *   start?: int,
     *   stateCode?: string,
     * }|ThingsTodoListParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<LimitStartPagination<ThingsTodoListResponse>>
     *
     * @throws APIException
     */
    public function list(
        array|ThingsTodoListParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse {
        [$parsed, $options] = ThingsTodoListParams::parseRequest(
            $params,
            $requestOptions,
        );

        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'get',
            path: 'thingstodo',
            query: $parsed,
            options: $options,
            convert: ThingsTodoListResponse::class,
            page: LimitStartPagination::class,
        );
    }
}
