<?php

declare(strict_types=1);

namespace Nps\ServiceContracts;

use Nps\Core\Contracts\BaseResponse;
use Nps\Core\Exceptions\APIException;
use Nps\LimitStartPagination;
use Nps\RequestOptions;
use Nps\Topics\TopicListParams;
use Nps\Topics\TopicListParksParams;
use Nps\Topics\TopicListParksResponse;
use Nps\Topics\TopicListResponse;

/**
 * @phpstan-import-type RequestOpts from \Nps\RequestOptions
 */
interface TopicsRawContract
{
    /**
     * @api
     *
     * @param array<string,mixed>|TopicListParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<LimitStartPagination<TopicListResponse>>
     *
     * @throws APIException
     */
    public function list(
        array|TopicListParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse;

    /**
     * @api
     *
     * @param array<string,mixed>|TopicListParksParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<LimitStartPagination<TopicListParksResponse>>
     *
     * @throws APIException
     */
    public function listParks(
        array|TopicListParksParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse;
}
