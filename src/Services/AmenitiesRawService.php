<?php

declare(strict_types=1);

namespace Nps\Services;

use Nps\Amenities\AmenityListParams;
use Nps\Amenities\AmenityListParksPlacesParams;
use Nps\Amenities\AmenityListParksPlacesResponse;
use Nps\Amenities\AmenityListParksVisitorCentersParams;
use Nps\Amenities\AmenityListParksVisitorCentersResponse;
use Nps\Amenities\AmenityListResponse;
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
     * }|AmenityListParksPlacesParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<LimitStartPagination<AmenityListParksPlacesResponse>>
     *
     * @throws APIException
     */
    public function listParksPlaces(
        array|AmenityListParksPlacesParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse {
        [$parsed, $options] = AmenityListParksPlacesParams::parseRequest(
            $params,
            $requestOptions,
        );

        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'get',
            path: 'amenities/parksplaces',
            query: $parsed,
            options: $options,
            convert: AmenityListParksPlacesResponse::class,
            page: LimitStartPagination::class,
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
     * }|AmenityListParksVisitorCentersParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<LimitStartPagination<AmenityListParksVisitorCentersResponse,>,>
     *
     * @throws APIException
     */
    public function listParksVisitorCenters(
        array|AmenityListParksVisitorCentersParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse {
        [$parsed, $options] = AmenityListParksVisitorCentersParams::parseRequest(
            $params,
            $requestOptions,
        );

        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'get',
            path: 'amenities/parksvisitorcenters',
            query: $parsed,
            options: $options,
            convert: AmenityListParksVisitorCentersResponse::class,
            page: LimitStartPagination::class,
        );
    }
}
