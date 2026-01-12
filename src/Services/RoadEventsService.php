<?php

declare(strict_types=1);

namespace Nps\Services;

use Nps\Client;
use Nps\Core\Exceptions\APIException;
use Nps\Core\Util;
use Nps\LimitStartPagination;
use Nps\RequestOptions;
use Nps\RoadEvents\RoadEventListResponse;
use Nps\ServiceContracts\RoadEventsContract;

/**
 * @phpstan-import-type RequestOpts from \Nps\RequestOptions
 */
final class RoadEventsService implements RoadEventsContract
{
    /**
     * @api
     */
    public RoadEventsRawService $raw;

    /**
     * @internal
     */
    public function __construct(private Client $client)
    {
        $this->raw = new RoadEventsRawService($client);
    }

    /**
     * @api
     *
     * @param int $limit Number of results to return per request. Default is 50.
     * @param string $parkCode a comma delimited list of 4 character park codes
     * @param int $start Number of results to return per request. Default is 50.
     * @param string $type either 'incident' or 'workzone'
     * @param RequestOpts|null $requestOptions
     *
     * @return LimitStartPagination<RoadEventListResponse>
     *
     * @throws APIException
     */
    public function list(
        ?int $limit = null,
        ?string $parkCode = null,
        ?int $start = null,
        ?string $type = null,
        RequestOptions|array|null $requestOptions = null,
    ): LimitStartPagination {
        $params = Util::removeNulls(
            [
                'limit' => $limit,
                'parkCode' => $parkCode,
                'start' => $start,
                'type' => $type,
            ],
        );

        // @phpstan-ignore-next-line argument.type
        $response = $this->raw->list(params: $params, requestOptions: $requestOptions);

        return $response->parse();
    }
}
