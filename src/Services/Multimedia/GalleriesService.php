<?php

declare(strict_types=1);

namespace Nps\Services\Multimedia;

use Nps\Client;
use Nps\Core\Exceptions\APIException;
use Nps\Core\Util;
use Nps\LimitStartPagination;
use Nps\Multimedia\Galleries\GalleryListAssetsResponse;
use Nps\Multimedia\Galleries\GalleryListResponse;
use Nps\RequestOptions;
use Nps\ServiceContracts\Multimedia\GalleriesContract;

/**
 * @phpstan-import-type RequestOpts from \Nps\RequestOptions
 */
final class GalleriesService implements GalleriesContract
{
    /**
     * @api
     */
    public GalleriesRawService $raw;

    /**
     * @internal
     */
    public function __construct(private Client $client)
    {
        $this->raw = new GalleriesRawService($client);
    }

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
    ): LimitStartPagination {
        $params = Util::removeNulls(
            [
                'limit' => $limit,
                'parkCode' => $parkCode,
                'q' => $q,
                'start' => $start,
                'stateCode' => $stateCode,
            ],
        );

        // @phpstan-ignore-next-line argument.type
        $response = $this->raw->list(params: $params, requestOptions: $requestOptions);

        return $response->parse();
    }

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
    ): LimitStartPagination {
        $params = Util::removeNulls(
            [
                'id' => $id,
                'galleryID' => $galleryID,
                'limit' => $limit,
                'parkCode' => $parkCode,
                'q' => $q,
                'start' => $start,
                'stateCode' => $stateCode,
            ],
        );

        // @phpstan-ignore-next-line argument.type
        $response = $this->raw->listAssets(params: $params, requestOptions: $requestOptions);

        return $response->parse();
    }
}
