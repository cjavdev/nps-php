<?php

declare(strict_types=1);

namespace Nps\ServiceContracts;

use Nps\Campgrounds\CampgroundListResponse;
use Nps\Core\Exceptions\APIException;
use Nps\LimitStartPagination;
use Nps\RequestOptions;

/**
 * @phpstan-import-type RequestOpts from \Nps\RequestOptions
 */
interface CampgroundsContract
{
    /**
     * @api
     *
     * @param int $limit Number of results to return per request. Default is 50.
     * @param list<string> $parkCode a comma delimited list of park codes (each 4 characters in length)
     * @param string $q Term to search on
     * @param list<string> $sort A comma delimited list of resource properties to sort the results by. Ascending order is assumed for each property. If descending order is desired, the unary negative should prefix the property name. Invalid property values will be ignored. If no sort parameter is passed in a request, the default sort is by name. If sorting by relevanceScore, you 1) will likely use -relevanceScore as a higher score indicates a more relevant result and 2) cannot use it in conjunction with other sort properties. Possible fields to sort by are name, parkCode, and relevanceScore.
     * @param int $start Get the next [limit] results starting with this number. Default is 0.
     * @param list<string> $stateCode a comma delimited list of 2 character state codes
     * @param RequestOpts|null $requestOptions
     *
     * @return LimitStartPagination<CampgroundListResponse>
     *
     * @throws APIException
     */
    public function list(
        ?int $limit = null,
        ?array $parkCode = null,
        ?string $q = null,
        ?array $sort = null,
        ?int $start = null,
        ?array $stateCode = null,
        RequestOptions|array|null $requestOptions = null,
    ): LimitStartPagination;
}
