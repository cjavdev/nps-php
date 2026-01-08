<?php

declare(strict_types=1);

namespace Nps\ServiceContracts\Multimedia;

use Nps\Core\Contracts\BaseResponse;
use Nps\Core\Exceptions\APIException;
use Nps\Multimedia\Galleries\GalleryListAssetsParams;
use Nps\Multimedia\Galleries\GalleryListAssetsResponseItem;
use Nps\Multimedia\Galleries\GalleryListParams;
use Nps\Multimedia\Galleries\GalleryListResponseItem;
use Nps\RequestOptions;

/**
 * @phpstan-import-type RequestOpts from \Nps\RequestOptions
 */
interface GalleriesRawContract
{
    /**
     * @api
     *
     * @param array<string,mixed>|GalleryListParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<list<GalleryListResponseItem>>
     *
     * @throws APIException
     */
    public function list(
        array|GalleryListParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse;

    /**
     * @api
     *
     * @param array<string,mixed>|GalleryListAssetsParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<list<GalleryListAssetsResponseItem>>
     *
     * @throws APIException
     */
    public function listAssets(
        array|GalleryListAssetsParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse;
}
