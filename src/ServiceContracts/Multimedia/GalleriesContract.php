<?php

declare(strict_types=1);

namespace Nps\ServiceContracts\Multimedia;

use Nps\Core\Exceptions\APIException;
use Nps\LimitStartPagination;
use Nps\Multimedia\Galleries\GalleryListAssetsResponse;
use Nps\Multimedia\Galleries\GalleryListResponse;
use Nps\RequestOptions;

/**
 * @phpstan-import-type RequestOpts from \Nps\RequestOptions
 */
interface GalleriesContract
{
    /**
     * @api
     *
     * @param int $limit Number of results to return per request. Default is 50.
     * @param list<string> $parkCode a comma delimited list of 4 character park codes
     * @param string $q Term to search on
     * @param int $start Get the next [limit] results starting with this number. Default is 0.
     * @param list<string> $stateCode a comma delimited list of 2 character state codes
     * @param RequestOpts|null $requestOptions
     *
     * @return LimitStartPagination<GalleryListResponse>
     *
     * @throws APIException
     */
    public function list(
        ?int $limit = null,
        ?array $parkCode = null,
        ?string $q = null,
        ?int $start = null,
        ?array $stateCode = null,
        RequestOptions|array|null $requestOptions = null,
    ): LimitStartPagination;

    /**
     * @api
     *
     * @param string $id The unique identifier of an asset within a gallery
     * @param string $galleryID The unique identifier for a gallery
     * @param int $limit Number of results to return per request. Default is 50.
     * @param list<string> $parkCode a comma delimited list of 4 character park codes
     * @param string $q Term to search on
     * @param int $start Get the next [limit] results starting with this number. Default is 0.
     * @param list<string> $stateCode a comma delimited list of 2 character state codes
     * @param RequestOpts|null $requestOptions
     *
     * @return LimitStartPagination<GalleryListAssetsResponse>
     *
     * @throws APIException
     */
    public function listAssets(
        ?string $id = null,
        ?string $galleryID = null,
        ?int $limit = null,
        ?array $parkCode = null,
        ?string $q = null,
        ?int $start = null,
        ?array $stateCode = null,
        RequestOptions|array|null $requestOptions = null,
    ): LimitStartPagination;
}
