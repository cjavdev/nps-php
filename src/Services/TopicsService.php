<?php

declare(strict_types=1);

namespace Nps\Services;

use Nps\Client;
use Nps\Core\Exceptions\APIException;
use Nps\Core\Util;
use Nps\RequestOptions;
use Nps\ServiceContracts\TopicsContract;
use Nps\Topics\TopicGetParksResponse;
use Nps\Topics\TopicListResponse;

/**
 * @phpstan-import-type RequestOpts from \Nps\RequestOptions
 */
final class TopicsService implements TopicsContract
{
    /**
     * @api
     */
    public TopicsRawService $raw;

    /**
     * @internal
     */
    public function __construct(private Client $client)
    {
        $this->raw = new TopicsRawService($client);
    }

    /**
     * @api
     *
     * @param string $id one or more unique topic IDs
     * @param int $limit Number of results to return per request. Default is 50.
     * @param string $q a string to search for
     * @param string $sort A comma delimited list of fields to sort the results by. Ascending order is assumed for each field unless the field name is prefixed with the unary negative which implies descending order.
     * @param int $start Get the next [limit] results starting with this number. Default is 0.
     * @param RequestOpts|null $requestOptions
     *
     * @throws APIException
     */
    public function list(
        ?string $id = null,
        ?int $limit = null,
        ?string $q = null,
        ?string $sort = null,
        ?int $start = null,
        RequestOptions|array|null $requestOptions = null,
    ): TopicListResponse {
        $params = Util::removeNulls(
            [
                'id' => $id,
                'limit' => $limit,
                'q' => $q,
                'sort' => $sort,
                'start' => $start,
            ],
        );

        // @phpstan-ignore-next-line argument.type
        $response = $this->raw->list(params: $params, requestOptions: $requestOptions);

        return $response->parse();
    }

    /**
     * @api
     *
     * @param list<string> $id a comma delimited list of topic IDs
     * @param int $limit Number of results to return per request. Default is 50.
     * @param string $q a string to search for
     * @param string $sort A comma delimited list of fields to sort the results by. Ascending order is assumed for each field unless the field name is prefixed with the unary negative which implies descending order.
     * @param int $start Get the next [limit] results starting with this number. Default is 0.
     * @param RequestOpts|null $requestOptions
     *
     * @throws APIException
     */
    public function retrieveParks(
        ?array $id = null,
        ?int $limit = null,
        ?string $q = null,
        ?string $sort = null,
        ?int $start = null,
        RequestOptions|array|null $requestOptions = null,
    ): TopicGetParksResponse {
        $params = Util::removeNulls(
            [
                'id' => $id,
                'limit' => $limit,
                'q' => $q,
                'sort' => $sort,
                'start' => $start,
            ],
        );

        // @phpstan-ignore-next-line argument.type
        $response = $this->raw->retrieveParks(params: $params, requestOptions: $requestOptions);

        return $response->parse();
    }
}
