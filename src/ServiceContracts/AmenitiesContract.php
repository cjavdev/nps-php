<?php

declare(strict_types=1);

namespace Nps\ServiceContracts;

use Nps\Amenities\AmenityListParksPlacesResponse;
use Nps\Amenities\AmenityListParksVisitorCentersResponse;
use Nps\Amenities\AmenityListResponse;
use Nps\Core\Exceptions\APIException;
use Nps\LimitStartPagination;
use Nps\RequestOptions;

/**
 * @phpstan-import-type RequestOpts from \Nps\RequestOptions
 */
interface AmenitiesContract
{
    /**
     * @api
     *
     * @param list<string> $id one or more topic unique IDs
     * @param int $limit Number of results to return per request. Default is 50.
     * @param string $q a string to search for
     * @param int $start Get the next [limit] results starting with this number. Default is 0.
     * @param RequestOpts|null $requestOptions
     *
     * @return LimitStartPagination<AmenityListResponse>
     *
     * @throws APIException
     */
    public function list(
        ?array $id = null,
        ?int $limit = null,
        ?string $q = null,
        ?int $start = null,
        RequestOptions|array|null $requestOptions = null,
    ): LimitStartPagination;

    /**
     * @api
     *
     * @param list<string> $id a comma delimited list of amenity IDs
     * @param int $limit Number of results to return per request. Default is 50.
     * @param list<string> $parkCode a comma delimited list of 4 character park codes
     * @param string $q a string to search for
     * @param string $sort A comma delimited list of fields to sort the results by. Ascending order is assumed for each field unless the field name is prefixed with the unary negative       which implies descending order.
     * @param int $start Get the next [limit] results starting with this number. Default is 0.
     * @param RequestOpts|null $requestOptions
     *
     * @return LimitStartPagination<AmenityListParksPlacesResponse>
     *
     * @throws APIException
     */
    public function listParksPlaces(
        ?array $id = null,
        ?int $limit = null,
        ?array $parkCode = null,
        ?string $q = null,
        ?string $sort = null,
        ?int $start = null,
        RequestOptions|array|null $requestOptions = null,
    ): LimitStartPagination;

    /**
     * @api
     *
     * @param string $id a comma delimited list of amenity IDs
     * @param int $limit Number of results to return per request. Default is 50.
     * @param string $parkCode a comma delimited list of 4 character park codes
     * @param string $q a string to search for
     * @param list<string> $sort A comma delimited list of fields to sort the results by. Ascending order is assumed for each field unless the field name is prefixed with the unary negative which implies descending order.
     * @param int $start Get the next [limit] results starting with this number. Default is 0.
     * @param RequestOpts|null $requestOptions
     *
     * @return LimitStartPagination<AmenityListParksVisitorCentersResponse>
     *
     * @throws APIException
     */
    public function listParksVisitorCenters(
        ?string $id = null,
        ?int $limit = null,
        ?string $parkCode = null,
        ?string $q = null,
        ?array $sort = null,
        ?int $start = null,
        RequestOptions|array|null $requestOptions = null,
    ): LimitStartPagination;
}
