<?php

declare(strict_types=1);

namespace Nps\ServiceContracts;

use Nps\Core\Contracts\BaseResponse;
use Nps\Core\Exceptions\APIException;
use Nps\NewsReleases\NewsReleaseListParams;
use Nps\NewsReleases\NewsReleaseListResponseItem;
use Nps\RequestOptions;

/**
 * @phpstan-import-type RequestOpts from \Nps\RequestOptions
 */
interface NewsReleasesRawContract
{
    /**
     * @api
     *
     * @param array<string,mixed>|NewsReleaseListParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<list<NewsReleaseListResponseItem>>
     *
     * @throws APIException
     */
    public function list(
        array|NewsReleaseListParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse;
}
