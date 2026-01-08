<?php

declare(strict_types=1);

namespace Nps\ServiceContracts;

use Nps\Core\Contracts\BaseResponse;
use Nps\Core\Exceptions\APIException;
use Nps\Lessonplans\LessonplanListParams;
use Nps\Lessonplans\LessonplanListResponseItem;
use Nps\RequestOptions;

/**
 * @phpstan-import-type RequestOpts from \Nps\RequestOptions
 */
interface LessonplansRawContract
{
    /**
     * @api
     *
     * @param array<string,mixed>|LessonplanListParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<list<LessonplanListResponseItem>>
     *
     * @throws APIException
     */
    public function list(
        array|LessonplanListParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse;
}
