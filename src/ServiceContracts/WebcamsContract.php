<?php

declare(strict_types=1);

namespace Nps\ServiceContracts;

use Nps\Core\Exceptions\APIException;
use Nps\RequestOptions;
use Nps\Webcams\WebcamListResponseItem;

/**
 * @phpstan-import-type RequestOpts from \Nps\RequestOptions
 */
interface WebcamsContract
{
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
     * @return list<WebcamListResponseItem>
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
    ): array;
}
