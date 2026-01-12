<?php

declare(strict_types=1);

namespace Nps\ServiceContracts;

use Nps\Core\Exceptions\APIException;
use Nps\People\PersonListResponse;
use Nps\RequestOptions;

/**
 * @phpstan-import-type RequestOpts from \Nps\RequestOptions
 */
interface PeopleContract
{
    /**
     * @api
     *
     * @param int $limit Number of results to return per request. Default is 50.
     * @param list<string> $parkCode a comma delimited list of park codes (each 4-10 characters in length)
     * @param string $q Term to search on
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
    ): PersonListResponse;
}
