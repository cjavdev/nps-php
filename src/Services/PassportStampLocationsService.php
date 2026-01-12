<?php

declare(strict_types=1);

namespace Nps\Services;

use Nps\Client;
use Nps\Core\Exceptions\APIException;
use Nps\Core\Util;
use Nps\PassportStampLocations\PassportStampLocationListResponse;
use Nps\RequestOptions;
use Nps\ServiceContracts\PassportStampLocationsContract;

/**
 * @phpstan-import-type RequestOpts from \Nps\RequestOptions
 */
final class PassportStampLocationsService implements PassportStampLocationsContract
{
    /**
     * @api
     */
    public PassportStampLocationsRawService $raw;

    /**
     * @internal
     */
    public function __construct(private Client $client)
    {
        $this->raw = new PassportStampLocationsRawService($client);
    }

    /**
     * @api
     *
     * @param int $limit Number of results to return per request. Default is 50.
     * @param list<string> $parkCode a comma delimited list of 4 character park codes
     * @param string $q a string to search for
     * @param int $start Get the next [limit] results starting with this number. Default is 0.
     * @param list<string> $stateCode a comma delimited list of 2 character state codes
     * @param RequestOpts|null $requestOptions
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
    ): PassportStampLocationListResponse {
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
}
