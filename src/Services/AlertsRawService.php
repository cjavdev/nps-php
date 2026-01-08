<?php

declare(strict_types=1);

namespace Nps\Services;

use Nps\Alerts\AlertListParams;
use Nps\Alerts\AlertListResponseItem;
use Nps\Client;
use Nps\Core\Contracts\BaseResponse;
use Nps\Core\Conversion\ListOf;
use Nps\Core\Exceptions\APIException;
use Nps\RequestOptions;
use Nps\ServiceContracts\AlertsRawContract;

/**
 * @phpstan-import-type RequestOpts from \Nps\RequestOptions
 */
final class AlertsRawService implements AlertsRawContract
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
     * }|AlertListParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<list<AlertListResponseItem>>
     *
     * @throws APIException
     */
    public function list(
        array|AlertListParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse {
        [$parsed, $options] = AlertListParams::parseRequest(
            $params,
            $requestOptions,
        );

        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'get',
            path: 'alerts',
            query: $parsed,
            options: $options,
            convert: new ListOf(AlertListResponseItem::class),
        );
    }
}
