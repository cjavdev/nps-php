<?php

declare(strict_types=1);

namespace Nps\Services;

use Nps\Client;
use Nps\Core\Contracts\BaseResponse;
use Nps\Core\Conversion\ListOf;
use Nps\Core\Exceptions\APIException;
use Nps\People\PersonListParams;
use Nps\People\PersonListResponseItem;
use Nps\RequestOptions;
use Nps\ServiceContracts\PeopleRawContract;

/**
 * @phpstan-import-type RequestOpts from \Nps\RequestOptions
 */
final class PeopleRawService implements PeopleRawContract
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
     * }|PersonListParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<list<PersonListResponseItem>>
     *
     * @throws APIException
     */
    public function list(
        array|PersonListParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse {
        [$parsed, $options] = PersonListParams::parseRequest(
            $params,
            $requestOptions,
        );

        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'get',
            path: 'people',
            query: $parsed,
            options: $options,
            convert: new ListOf(PersonListResponseItem::class),
        );
    }
}
