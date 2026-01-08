<?php

declare(strict_types=1);

namespace Nps\Services;

use Nps\Amenities\AmenityGetParksPlacesResponseItem;
use Nps\Amenities\AmenityGetParksVisitorCentersResponseItem;
use Nps\Amenities\AmenityListParams;
use Nps\Amenities\AmenityListResponseItem;
use Nps\Amenities\AmenityRetrieveParksPlacesParams;
use Nps\Amenities\AmenityRetrieveParksVisitorCentersParams;
use Nps\Client;
use Nps\Core\Contracts\BaseResponse;
use Nps\Core\Conversion\ListOf;
use Nps\Core\Exceptions\APIException;
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
     * @return BaseResponse<list<AmenityListResponseItem>>
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
            convert: new ListOf(AmenityListResponseItem::class),
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
     * @return BaseResponse<list<AmenityGetParksPlacesResponseItem>>
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
            convert: new ListOf(AmenityGetParksPlacesResponseItem::class),
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
     * @return BaseResponse<list<AmenityGetParksVisitorCentersResponseItem>>
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
            convert: new ListOf(AmenityGetParksVisitorCentersResponseItem::class),
        );
    }
}
