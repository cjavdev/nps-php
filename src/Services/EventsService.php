<?php

declare(strict_types=1);

namespace Nps\Services;

use Nps\Client;
use Nps\Core\Exceptions\APIException;
use Nps\Core\Util;
use Nps\Events\EventListResponse;
use Nps\LimitStartPagination;
use Nps\RequestOptions;
use Nps\ServiceContracts\EventsContract;

/**
 * @phpstan-import-type RequestOpts from \Nps\RequestOptions
 */
final class EventsService implements EventsContract
{
    /**
     * @api
     */
    public EventsRawService $raw;

    /**
     * @internal
     */
    public function __construct(private Client $client)
    {
        $this->raw = new EventsRawService($client);
    }

    /**
     * @api
     *
     * @param string $id a unique ID string for an event
     * @param string $dateEnd an ending date in the yyyy-mm-dd format to filter events by
     * @param string $dateStart a stating date in the yyyy-mm-dd format to filter events by
     * @param list<string> $eventType a comma delimited list of event types
     * @param bool $expandRecurring A flag to denote whether or not to expand the recurring events out into multiple records (one per event date). Default is false.
     * @param int $limit Number of results to return per request. Default is 50.
     * @param list<string> $organization a comma delimited list of organization site codes
     * @param int $pageNumber The current page number for the results. Default is 1.
     * @param int $pageSize The number of results per page. Default is 10.
     * @param list<string> $parkCode a comma delimited list of park codes (each 4 characters in length)
     * @param list<string> $portal a comma delimited list of portal site codes
     * @param string $q term to search on
     * @param int $start Number of results to return per request. Default is 50.
     * @param list<string> $stateCode a comma delimited list of 2 character state codes
     * @param list<string> $subject a comma delimited list of subject site codes
     * @param list<string> $tagsAll a comma delimited list of tags that must be included
     * @param list<string> $tagsNone a comma delimited list of tags that must not be included
     * @param list<string> $tagsOne a comma delimited list of tags that may be included
     * @param RequestOpts|null $requestOptions
     *
     * @return LimitStartPagination<EventListResponse>
     *
     * @throws APIException
     */
    public function list(
        ?string $id = null,
        ?string $dateEnd = null,
        ?string $dateStart = null,
        ?array $eventType = null,
        ?bool $expandRecurring = null,
        ?int $limit = null,
        ?array $organization = null,
        ?int $pageNumber = null,
        ?int $pageSize = null,
        ?array $parkCode = null,
        ?array $portal = null,
        ?string $q = null,
        ?int $start = null,
        ?array $stateCode = null,
        ?array $subject = null,
        ?array $tagsAll = null,
        ?array $tagsNone = null,
        ?array $tagsOne = null,
        RequestOptions|array|null $requestOptions = null,
    ): LimitStartPagination {
        $params = Util::removeNulls(
            [
                'id' => $id,
                'dateEnd' => $dateEnd,
                'dateStart' => $dateStart,
                'eventType' => $eventType,
                'expandRecurring' => $expandRecurring,
                'limit' => $limit,
                'organization' => $organization,
                'pageNumber' => $pageNumber,
                'pageSize' => $pageSize,
                'parkCode' => $parkCode,
                'portal' => $portal,
                'q' => $q,
                'start' => $start,
                'stateCode' => $stateCode,
                'subject' => $subject,
                'tagsAll' => $tagsAll,
                'tagsNone' => $tagsNone,
                'tagsOne' => $tagsOne,
            ],
        );

        // @phpstan-ignore-next-line argument.type
        $response = $this->raw->list(params: $params, requestOptions: $requestOptions);

        return $response->parse();
    }
}
