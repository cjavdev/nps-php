<?php

declare(strict_types=1);

namespace Nps\Services;

use Nps\Client;
use Nps\Core\Contracts\BaseResponse;
use Nps\Core\Exceptions\APIException;
use Nps\Lessonplans\LessonplanListParams;
use Nps\Lessonplans\LessonplanListResponse;
use Nps\RequestOptions;
use Nps\ServiceContracts\LessonplansRawContract;

/**
 * @phpstan-import-type RequestOpts from \Nps\RequestOptions
 */
final class LessonplansRawService implements LessonplansRawContract
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
     * }|LessonplanListParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<LessonplanListResponse>
     *
     * @throws APIException
     */
    public function list(
        array|LessonplanListParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse {
        [$parsed, $options] = LessonplanListParams::parseRequest(
            $params,
            $requestOptions,
        );

        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'get',
            path: 'lessonplans',
            query: $parsed,
            options: $options,
            convert: LessonplanListResponse::class,
        );
    }
}
