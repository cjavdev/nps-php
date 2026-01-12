<?php

declare(strict_types=1);

namespace Nps\Services;

use Nps\Amenities\AmenityGetParksPlacesResponse;
use Nps\Amenities\AmenityGetParksVisitorCentersResponse;
use Nps\Amenities\AmenityListParams;
use Nps\Amenities\AmenityListResponse;
use Nps\Amenities\AmenityRetrieveParksPlacesParams;
use Nps\Amenities\AmenityRetrieveParksVisitorCentersParams;
use Nps\Client;
use Nps\Core\Contracts\BaseResponse;
use Nps\Core\Exceptions\APIException;
use Nps\LimitStartPagination;
use Nps\RequestOptions;
use Nps\ServiceContracts\AmenitiesRawContract;

/**
 * @phpstan-import-type RequestOpts from \Nps\RequestOptions
 */
final class AmenitiesRawService implements AmenitiesRawContract
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
     *   id?: list<string>, limit?: int, q?: string, start?: int
     * }|AmenityListParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<LimitStartPagination<AmenityListResponse>>
     *
     * @throws APIException
     */
    public function list(
        array|AmenityListParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse {
        [$parsed, $options] = AmenityListParams::parseRequest(
            $params,
            $requestOptions,
        );

        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'get',
            path: 'amenities',
            query: $parsed,
            options: $options,
            convert: AmenityListResponse::class,
            page: LimitStartPagination::class,
        );
    }

    /**
     * @api
     *
     * @param array{
     *   id?: list<string>,
     *   limit?: int,
     *   parkCode?: list<string>,
     *   q?: string,
     *   sort?: string,
     *   start?: int,
     * }|AmenityRetrieveParksPlacesParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<AmenityGetParksPlacesResponse>
     *
     * @throws APIException
     */
    public function retrieveParksPlaces(
        array|AmenityRetrieveParksPlacesParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse {
        [$parsed, $options] = AmenityRetrieveParksPlacesParams::parseRequest(
            $params,
            $requestOptions,
        );

        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'get',
            path: 'amenities/parksplaces',
            query: $parsed,
            options: $options,
            convert: AmenityGetParksPlacesResponse::class,
        );
    }

    /**
     * @api
     *
     * @param array{
     *   id?: string,
     *   limit?: int,
     *   parkCode?: string,
     *   q?: string,
     *   sort?: list<string>,
     *   start?: int,
     * }|AmenityRetrieveParksVisitorCentersParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<AmenityGetParksVisitorCentersResponse>
     *
     * @throws APIException
     */
    public function retrieveParksVisitorCenters(
        array|AmenityRetrieveParksVisitorCentersParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse {
        [$parsed, $options] = AmenityRetrieveParksVisitorCentersParams::parseRequest(
            $params,
            $requestOptions,
        );

        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'get',
            path: 'amenities/parksvisitorcenters',
            query: $parsed,
            options: $options,
            convert: AmenityGetParksVisitorCentersResponse::class,
        );
    }
}
