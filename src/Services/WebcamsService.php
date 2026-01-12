<?php

declare(strict_types=1);

namespace Nps\Services;

use Nps\Client;
use Nps\Core\Exceptions\APIException;
use Nps\Core\Util;
use Nps\LimitStartPagination;
use Nps\RequestOptions;
use Nps\ServiceContracts\WebcamsContract;
use Nps\Webcams\WebcamListResponse;

/**
 * @phpstan-import-type RequestOpts from \Nps\RequestOptions
 */
final class WebcamsService implements WebcamsContract
{
    /**
     * @api
     */
    public WebcamsRawService $raw;

    /**
     * @internal
     */
    public function __construct(private Client $client)
    {
        $this->raw = new WebcamsRawService($client);
    }

    /**
     * @api
     *
     * @param string $id a comma delimited list of webcam IDs
     * @param int $limit Number of results to return per request. Default is 50.
     * @param list<string> $parkCode a comma delimited list of 4 character park codes
     * @param string $q term to search on
     * @param int $start Get the next [limit] results starting with this number. Default is 0.
     * @param list<string> $stateCode a comma delimited list of 2 character state codes
     * @param RequestOpts|null $requestOptions
     *
     * @return LimitStartPagination<WebcamListResponse>
     *
     * @throws APIException
     */
    public function list(
        ?string $id = null,
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
}
