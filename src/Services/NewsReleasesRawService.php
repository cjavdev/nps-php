<?php

declare(strict_types=1);

namespace Nps\Services;

use Nps\Client;
use Nps\Core\Contracts\BaseResponse;
use Nps\Core\Exceptions\APIException;
use Nps\NewsReleases\NewsReleaseListParams;
use Nps\NewsReleases\NewsReleaseListResponse;
use Nps\RequestOptions;
use Nps\ServiceContracts\NewsReleasesRawContract;

/**
 * @phpstan-import-type RequestOpts from \Nps\RequestOptions
 */
final class NewsReleasesRawService implements NewsReleasesRawContract
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
     * }|NewsReleaseListParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<NewsReleaseListResponse>
     *
     * @throws APIException
     */
    public function list(
        array|NewsReleaseListParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse {
        [$parsed, $options] = NewsReleaseListParams::parseRequest(
            $params,
            $requestOptions,
        );

        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'get',
            path: 'newsreleases',
            query: $parsed,
            options: $options,
            convert: NewsReleaseListResponse::class,
        );
    }
}
