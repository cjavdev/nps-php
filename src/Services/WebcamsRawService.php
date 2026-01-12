<?php

declare(strict_types=1);

namespace Nps\Services;

use Nps\Client;
use Nps\Core\Contracts\BaseResponse;
use Nps\Core\Exceptions\APIException;
use Nps\RequestOptions;
use Nps\ServiceContracts\WebcamsRawContract;
use Nps\Webcams\WebcamListParams;
use Nps\Webcams\WebcamListResponse;

/**
 * @phpstan-import-type RequestOpts from \Nps\RequestOptions
 */
final class WebcamsRawService implements WebcamsRawContract
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
     *   parkCode?: list<string>,
     *   q?: string,
     *   start?: int,
     *   stateCode?: list<string>,
     * }|WebcamListParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<WebcamListResponse>
     *
     * @throws APIException
     */
    public function list(
        array|WebcamListParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse {
        [$parsed, $options] = WebcamListParams::parseRequest(
            $params,
            $requestOptions,
        );

        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'get',
            path: 'webcams',
            query: $parsed,
            options: $options,
            convert: WebcamListResponse::class,
        );
    }
}
