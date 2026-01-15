<?php

declare(strict_types=1);

namespace Nps\ServiceContracts;

use Nps\Activities\ActivityListParksResponse;
use Nps\Activities\ActivityListResponseItem;
use Nps\Core\Exceptions\APIException;
use Nps\LimitStartPagination;
use Nps\RequestOptions;

/**
 * @phpstan-import-type RequestOpts from \Nps\RequestOptions
 */
interface ActivitiesContract
{
    /**
     * @api
     *
     * @param string $id one or more activity unique IDs
     * @param int $limit Number of results to return per request. Default is 50.
     * @param string $q term to search on
     * @param string $sort A comma delimited list of fields to sort the results by. Ascending order is assumed for each field unless the field name is prefixed with the unary negative which implies descending order.
     * @param int $start Get the next [limit] results starting with this number. Default is 0.
     * @param RequestOpts|null $requestOptions
     *
     * @return list<ActivityListResponseItem>
     *
     * @throws APIException
     */
    public function list(
        ?string $id = null,
        ?int $limit = null,
        ?string $q = null,
        ?string $sort = null,
        ?int $start = null,
        RequestOptions|array|null $requestOptions = null,
    ): array;

    /**
     * @api
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
    ): LimitStartPagination;
}
