<?php

declare(strict_types=1);

namespace Nps\Services;

use Nps\Client;
use Nps\Core\Contracts\BaseResponse;
use Nps\Core\Exceptions\APIException;
use Nps\LimitStartPagination;
use Nps\Multimedia\MultimediaListAudioParams;
use Nps\Multimedia\MultimediaListAudioResponse;
use Nps\Multimedia\MultimediaListVideosParams;
use Nps\Multimedia\MultimediaListVideosResponse;
use Nps\RequestOptions;
use Nps\ServiceContracts\MultimediaRawContract;

/**
 * @phpstan-import-type RequestOpts from \Nps\RequestOptions
 */
final class MultimediaRawService implements MultimediaRawContract
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
     * }|MultimediaListAudioParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<LimitStartPagination<MultimediaListAudioResponse>>
     *
     * @throws APIException
     */
    public function listAudio(
        array|MultimediaListAudioParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse {
        [$parsed, $options] = MultimediaListAudioParams::parseRequest(
            $params,
            $requestOptions,
        );

        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'get',
            path: 'multimedia/audio',
            query: $parsed,
            options: $options,
            convert: MultimediaListAudioResponse::class,
            page: LimitStartPagination::class,
        );
    }

    /**
     * @api
     *
     * @param array{
     *   limit?: int,
     *   parkCode?: list<string>,
     *   q?: string,
     *   start?: int,
     *   stateCode?: list<string>,
     * }|MultimediaListVideosParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<LimitStartPagination<MultimediaListVideosResponse>>
     *
     * @throws APIException
     */
    public function listVideos(
        array|MultimediaListVideosParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse {
        [$parsed, $options] = MultimediaListVideosParams::parseRequest(
            $params,
            $requestOptions,
        );

        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'get',
            path: 'multimedia/videos',
            query: $parsed,
            options: $options,
            convert: MultimediaListVideosResponse::class,
            page: LimitStartPagination::class,
        );
    }
}
