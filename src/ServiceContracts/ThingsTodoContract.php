<?php

declare(strict_types=1);

namespace Nps\ServiceContracts;

use Nps\Core\Exceptions\APIException;
use Nps\RequestOptions;
use Nps\ThingsTodo\ThingsTodoListResponseItem;

/**
 * @phpstan-import-type RequestOpts from \Nps\RequestOptions
 */
interface ThingsTodoContract
{
    /**
     * @api
     *
     * @param string $id a comma delimited list of things to do IDs
     * @param int $limit Number of results to return per request. Default is 50.
     * @param string $parkCode a comma delimited list of 4 character park codes
     * @param string $q a string to search for
     * @param list<string> $sort A comma delimited list of resource properties to sort the results by. Ascending order is assumed for each property. If descending order is desired, the unary negative should prefix the property name. Invalid property values will be ignored. If no sort parameter is passed in a request, the default sort is by descending order of date last modified. (Note that the date last modified is an unexposed property.) If sorting by relevanceScore, you will likely use -relevanceScore as a higher score indicates a more accurate result. The only sort option, besides the default, is relevanceScore.
     * @param string $start Get the next [limit] results starting with this number. Default is 0.
     * @param string $stateCode a comma delimited list of 2 character state codes
     * @param RequestOpts|null $requestOptions
     *
     * @return list<ThingsTodoListResponseItem>
     *
     * @throws APIException
     */
    public function list(
        ?string $id = null,
        ?int $limit = null,
        ?string $parkCode = null,
        ?string $q = null,
        ?array $sort = null,
        ?string $start = null,
        ?string $stateCode = null,
        RequestOptions|array|null $requestOptions = null,
    ): array;
}
