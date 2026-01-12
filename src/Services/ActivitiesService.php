<?php

declare(strict_types=1);

namespace Nps\Services;

use Nps\Activities\ActivityListParksResponse;
use Nps\Activities\ActivityListResponse;
use Nps\Client;
use Nps\Core\Exceptions\APIException;
use Nps\Core\Util;
use Nps\LimitStartPagination;
use Nps\RequestOptions;
use Nps\ServiceContracts\ActivitiesContract;

/**
 * @phpstan-import-type RequestOpts from \Nps\RequestOptions
 */
final class ActivitiesService implements ActivitiesContract
{
    /**
     * @api
     */
    public ActivitiesRawService $raw;

    /**
     * @internal
     */
    public function __construct(private Client $client)
    {
        $this->raw = new ActivitiesRawService($client);
    }

    /**
     * @api
     *
     * @param string $id one or more activity unique IDs
     * @param string $limit Number of results to return per request. Default is 50.
     * @param string $q term to search on
     * @param string $sort A comma delimited list of fields to sort the results by. Ascending order is assumed for each field unless the field name is prefixed with the unary negative which implies descending order.
     * @param int $start Get the next [limit] results starting with this number. Default is 0.
     * @param RequestOpts|null $requestOptions
     *
     * @throws APIException
     */
    public function list(
        ?string $id = null,
        ?string $limit = null,
        ?string $q = null,
        ?string $sort = null,
        ?int $start = null,
        RequestOptions|array|null $requestOptions = null,
    ): ActivityListResponse {
        $params = Util::removeNulls(
            [
                'id' => $id,
                'limit' => $limit,
                'q' => $q,
                'sort' => $sort,
                'start' => $start,
            ],
        );

        // @phpstan-ignore-next-line argument.type
        $response = $this->raw->list(params: $params, requestOptions: $requestOptions);

        return $response->parse();
    }

    /**
     * @api
     *
     * Returns activites parks information.
     *
     * @param list<string> $id a comma delimited list of activity IDs
     * @param int $limit Number of results to return per request. Default is 50.
     * @param string $q a string to search for
     * @param list<string> $sort A comma delimited list of fields to sort the results by. Ascending order is assumed for each field unless the field name is prefixed with the unary negative which implies descending order.
     * @param int $start Get the next [limit] results starting with this number. Default is 0.
     * @param RequestOpts|null $requestOptions
     *
     * @return LimitStartPagination<ActivityListParksResponse>
     *
     * @throws APIException
     */
    public function listParks(
        ?array $id = null,
        ?int $limit = null,
        ?string $q = null,
        ?array $sort = null,
        ?int $start = null,
        RequestOptions|array|null $requestOptions = null,
    ): LimitStartPagination {
        $params = Util::removeNulls(
            [
                'id' => $id,
                'limit' => $limit,
                'q' => $q,
                'sort' => $sort,
                'start' => $start,
            ],
        );

        // @phpstan-ignore-next-line argument.type
        $response = $this->raw->listParks(params: $params, requestOptions: $requestOptions);

        return $response->parse();
    }
}
