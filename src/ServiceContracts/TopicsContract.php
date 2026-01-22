<?php

declare(strict_types=1);

namespace Nps\ServiceContracts;

use Nps\Core\Exceptions\APIException;
use Nps\LimitStartPagination;
use Nps\RequestOptions;
use Nps\Topics\TopicListParksResponse;
use Nps\Topics\TopicListResponse;

/**
 * @phpstan-import-type RequestOpts from \Nps\RequestOptions
 */
interface TopicsContract
{
    /**
     * @api
     *
     * @param string $id one or more unique topic IDs
     * @param int $limit Number of results to return per request. Default is 50.
     * @param string $q a string to search for
     * @param string $sort A comma delimited list of fields to sort the results by. Ascending order is assumed for each field unless the field name is prefixed with the unary negative which implies descending order.
     * @param int $start Get the next [limit] results starting with this number. Default is 0.
     * @param RequestOpts|null $requestOptions
     *
     * @return LimitStartPagination<TopicListResponse>
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
    ): LimitStartPagination;

    /**
     * @api
     *
     * @param list<string> $id a comma delimited list of topic IDs
     * @param int $limit Number of results to return per request. Default is 50.
     * @param string $q a string to search for
     * @param string $sort A comma delimited list of fields to sort the results by. Ascending order is assumed for each field unless the field name is prefixed with the unary negative which implies descending order.
     * @param int $start Get the next [limit] results starting with this number. Default is 0.
     * @param RequestOpts|null $requestOptions
     *
     * @return LimitStartPagination<TopicListParksResponse>
     *
     * @throws APIException
     */
    public function listParks(
        ?array $id = null,
        ?int $limit = null,
        ?string $q = null,
        ?string $sort = null,
        ?int $start = null,
        RequestOptions|array|null $requestOptions = null,
    ): LimitStartPagination;
}
