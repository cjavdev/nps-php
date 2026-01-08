<?php

declare(strict_types=1);

namespace Nps\ServiceContracts;

use Nps\Amenities\AmenityGetParksPlacesResponseItem;
use Nps\Amenities\AmenityGetParksVisitorCentersResponseItem;
use Nps\Amenities\AmenityListParams;
use Nps\Amenities\AmenityListResponseItem;
use Nps\Amenities\AmenityRetrieveParksPlacesParams;
use Nps\Amenities\AmenityRetrieveParksVisitorCentersParams;
use Nps\Core\Contracts\BaseResponse;
use Nps\Core\Exceptions\APIException;
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
     * @return BaseResponse<list<AmenityListResponseItem>>
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
     * @param array<string,mixed>|AmenityRetrieveParksPlacesParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<list<AmenityGetParksPlacesResponseItem>>
     *
     * @throws APIException
     */
    public function retrieveParksPlaces(
        array|AmenityRetrieveParksPlacesParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse;

    /**
     * @api
     *
     * @param array<string,mixed>|AmenityRetrieveParksVisitorCentersParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<list<AmenityGetParksVisitorCentersResponseItem>>
     *
     * @throws APIException
     */
    public function retrieveParksVisitorCenters(
        array|AmenityRetrieveParksVisitorCentersParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse;
}
