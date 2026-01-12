<?php

declare(strict_types=1);

namespace Nps\ServiceContracts;

use Nps\Articles\ArticleListParams;
use Nps\Articles\ArticleListResponse;
use Nps\Core\Contracts\BaseResponse;
use Nps\Core\Exceptions\APIException;
use Nps\RequestOptions;

/**
 * @phpstan-import-type RequestOpts from \Nps\RequestOptions
 */
interface ArticlesRawContract
{
    /**
     * @api
     *
     * @param array<string,mixed>|ArticleListParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<ArticleListResponse>
     *
     * @throws APIException
     */
    public function list(
        array|ArticleListParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse;
}
