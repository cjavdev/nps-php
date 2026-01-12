<?php

declare(strict_types=1);

namespace Nps\Services;

use Nps\Client;
use Nps\Core\Contracts\BaseResponse;
use Nps\Core\Exceptions\APIException;
use Nps\Events\EventListParams;
use Nps\Events\EventListResponse;
use Nps\LimitStartPagination;
use Nps\RequestOptions;
use Nps\ServiceContracts\EventsRawContract;

/**
 * @phpstan-import-type RequestOpts from \Nps\RequestOptions
 */
final class EventsRawService implements EventsRawContract
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
     *   id?: string,
     *   dateEnd?: string,
     *   dateStart?: string,
     *   eventType?: list<string>,
     *   expandRecurring?: bool,
     *   limit?: int,
     *   organization?: list<string>,
     *   pageNumber?: int,
     *   pageSize?: int,
     *   parkCode?: list<string>,
     *   portal?: list<string>,
     *   q?: string,
     *   start?: int,
     *   stateCode?: list<string>,
     *   subject?: list<string>,
     *   tagsAll?: list<string>,
     *   tagsNone?: list<string>,
     *   tagsOne?: list<string>,
     * }|EventListParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<LimitStartPagination<EventListResponse>>
     *
     * @throws APIException
     */
    public function list(
        array|EventListParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse {
        [$parsed, $options] = EventListParams::parseRequest(
            $params,
            $requestOptions,
        );

        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'get',
            path: 'events',
            query: $parsed,
            options: $options,
            convert: EventListResponse::class,
            page: LimitStartPagination::class,
        );
    }
}
