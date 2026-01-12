<?php

declare(strict_types=1);

namespace Nps\ServiceContracts;

use Nps\Core\Contracts\BaseResponse;
use Nps\Core\Exceptions\APIException;
use Nps\LimitStartPagination;
use Nps\Multimedia\MultimediaListAudioParams;
use Nps\Multimedia\MultimediaListAudioResponse;
use Nps\Multimedia\MultimediaListVideosParams;
use Nps\Multimedia\MultimediaListVideosResponse;
use Nps\RequestOptions;

/**
 * @phpstan-import-type RequestOpts from \Nps\RequestOptions
 */
interface MultimediaRawContract
{
    /**
     * @api
     *
     * @param array<string,mixed>|MultimediaListAudioParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<LimitStartPagination<MultimediaListAudioResponse>>
     *
     * @throws APIException
     */
    public function listAudio(
        array|MultimediaListAudioParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse;

    /**
     * @api
     *
     * @param array<string,mixed>|MultimediaListVideosParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<LimitStartPagination<MultimediaListVideosResponse>>
     *
     * @throws APIException
     */
    public function listVideos(
        array|MultimediaListVideosParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse;
}
