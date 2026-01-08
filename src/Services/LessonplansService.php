<?php

declare(strict_types=1);

namespace Nps\Services;

use Nps\Client;
use Nps\Core\Exceptions\APIException;
use Nps\Core\Util;
use Nps\Lessonplans\LessonplanListResponseItem;
use Nps\RequestOptions;
use Nps\ServiceContracts\LessonplansContract;

/**
 * @phpstan-import-type RequestOpts from \Nps\RequestOptions
 */
final class LessonplansService implements LessonplansContract
{
    /**
     * @api
     */
    public LessonplansRawService $raw;

    /**
     * @internal
     */
    public function __construct(private Client $client)
    {
        $this->raw = new LessonplansRawService($client);
    }

    /**
     * @api
     *
     * @param int $limit Number of results to return per request. Default is 50.
     * @param list<string> $parkCode a comma delimited list of park codes (each 4 characters in length)
     * @param string $q Term to search on
     * @param list<string> $sort A comma delimited list of resource properties to sort the results by. Each resource identifies which properties are 'sortable'. Ascending order is assumed for each property. If descending order is desired, the unary negative should prefix the property name. The sortable properties are listed in the documentation for each resource. Invalid property values will be ignored. Default is title.
     * @param int $start Get the next [limit] results starting with this number. Default is 0.
     * @param list<string> $stateCode a comma delimited list of 2 character state codes
     * @param RequestOpts|null $requestOptions
     *
     * @return list<LessonplanListResponseItem>
     *
     * @throws APIException
     */
    public function list(
        ?int $limit = null,
        ?array $parkCode = null,
        ?string $q = null,
        ?array $sort = null,
        ?int $start = null,
        ?array $stateCode = null,
        RequestOptions|array|null $requestOptions = null,
    ): array {
        $params = Util::removeNulls(
            [
                'limit' => $limit,
                'parkCode' => $parkCode,
                'q' => $q,
                'sort' => $sort,
                'start' => $start,
                'stateCode' => $stateCode,
            ],
        );

        // @phpstan-ignore-next-line argument.type
        $response = $this->raw->list(params: $params, requestOptions: $requestOptions);

        return $response->parse();
    }
}
