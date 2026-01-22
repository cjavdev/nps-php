<?php

declare(strict_types=1);

namespace Nps\ServiceContracts;

use Nps\Amenities\AmenityListParams;
use Nps\Amenities\AmenityListParksPlacesParams;
use Nps\Amenities\AmenityListParksPlacesResponse;
use Nps\Amenities\AmenityListParksVisitorCentersParams;
use Nps\Amenities\AmenityListParksVisitorCentersResponse;
use Nps\Amenities\AmenityListResponse;
use Nps\Core\Contracts\BaseResponse;
use Nps\Core\Exceptions\APIException;
use Nps\LimitStartPagination;
use Nps\RequestOptions;

/**
 * @phpstan-import-type RequestOpts from \Nps\RequestOptions
 */
interface AmenitiesRawContract
{
    /**
     * @api
     *
     * @param array<string,mixed>|AmenityListParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<LimitStartPagination<AmenityListResponse>>
     *
     * @throws APIException
     */
    public function list(
        array|AmenityListParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse;

    /**
     * @api
     *
     * @param array<string,mixed>|AmenityListParksPlacesParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<LimitStartPagination<AmenityListParksPlacesResponse>>
     *
     * @throws APIException
     */
    public function listParksPlaces(
        array|AmenityListParksPlacesParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse;

    /**
     * @api
     *
     * @param array<string,mixed>|AmenityListParksVisitorCentersParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<LimitStartPagination<AmenityListParksVisitorCentersResponse,>,>
     *
     * @throws APIException
     */
    public function listParksVisitorCenters(
        array|AmenityListParksVisitorCentersParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse;
}
