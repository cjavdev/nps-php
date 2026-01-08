<?php

declare(strict_types=1);

namespace Nps\ServiceContracts;

use Nps\Core\Contracts\BaseResponse;
use Nps\Core\Exceptions\APIException;
use Nps\RequestOptions;
use Nps\Topics\TopicGetParksResponseItem;
use Nps\Topics\TopicListParams;
use Nps\Topics\TopicListResponseItem;
use Nps\Topics\TopicRetrieveParksParams;

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
     * @return BaseResponse<list<TopicListResponseItem>>
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
     * @param array<string,mixed>|TopicRetrieveParksParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<list<TopicGetParksResponseItem>>
     *
     * @throws APIException
     */
    public function retrieveParks(
        array|TopicRetrieveParksParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse;
}
