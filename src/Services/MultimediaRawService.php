<?php

declare(strict_types=1);

namespace Nps\Services;

use Nps\Client;
use Nps\Core\Contracts\BaseResponse;
use Nps\Core\Conversion\ListOf;
use Nps\Core\Exceptions\APIException;
use Nps\Multimedia\MultimediaListAudioParams;
use Nps\Multimedia\MultimediaListAudioResponseItem;
use Nps\Multimedia\MultimediaListVideosParams;
use Nps\Multimedia\MultimediaListVideosResponseItem;
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
     * @return BaseResponse<list<MultimediaListAudioResponseItem>>
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
            convert: new ListOf(MultimediaListAudioResponseItem::class),
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
     * @return BaseResponse<list<MultimediaListVideosResponseItem>>
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
            convert: new ListOf(MultimediaListVideosResponseItem::class),
        );
    }
}
