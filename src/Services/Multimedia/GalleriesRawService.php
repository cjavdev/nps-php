<?php

declare(strict_types=1);

namespace Nps\Services\Multimedia;

use Nps\Client;
use Nps\Core\Contracts\BaseResponse;
use Nps\Core\Exceptions\APIException;
use Nps\Core\Util;
use Nps\Multimedia\Galleries\GalleryListAssetsParams;
use Nps\Multimedia\Galleries\GalleryListAssetsResponse;
use Nps\Multimedia\Galleries\GalleryListParams;
use Nps\Multimedia\Galleries\GalleryListResponse;
use Nps\RequestOptions;
use Nps\ServiceContracts\Multimedia\GalleriesRawContract;

/**
 * @phpstan-import-type RequestOpts from \Nps\RequestOptions
 */
final class GalleriesRawService implements GalleriesRawContract
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
     *   limit?: int,
     *   parkCode?: list<string>,
     *   q?: string,
     *   start?: int,
     *   stateCode?: list<string>,
     * }|GalleryListParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<GalleryListResponse>
     *
     * @throws APIException
     */
    public function list(
        array|GalleryListParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse {
        [$parsed, $options] = GalleryListParams::parseRequest(
            $params,
            $requestOptions,
        );

        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'get',
            path: 'multimedia/galleries',
            query: $parsed,
            options: $options,
            convert: GalleryListResponse::class,
        );
    }

    /**
     * @api
     *
     * @param array{
     *   id?: string,
     *   galleryID?: string,
     *   limit?: int,
     *   parkCode?: list<string>,
     *   q?: string,
     *   start?: int,
     *   stateCode?: list<string>,
     * }|GalleryListAssetsParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<GalleryListAssetsResponse>
     *
     * @throws APIException
     */
    public function listAssets(
        array|GalleryListAssetsParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse {
        [$parsed, $options] = GalleryListAssetsParams::parseRequest(
            $params,
            $requestOptions,
        );

        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'get',
            path: 'multimedia/galleries/assets',
            query: Util::array_transform_keys($parsed, ['galleryID' => 'galleryId']),
            options: $options,
            convert: GalleryListAssetsResponse::class,
        );
    }
}
