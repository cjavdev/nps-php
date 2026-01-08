<?php

declare(strict_types=1);

namespace Nps\Services;

use Nps\Client;
use Nps\Core\Exceptions\APIException;
use Nps\Core\Util;
use Nps\RequestOptions;
use Nps\RoadEvents\RoadEventListResponseItem;
use Nps\ServiceContracts\RoadEventsContract;

/**
 * @phpstan-import-type RequestOpts from \Nps\RequestOptions
 */
final class RoadEventsService implements RoadEventsContract
{
    /**
     * @api
     */
    public RoadEventsRawService $raw;

    /**
     * @internal
     */
    public function __construct(private Client $client)
    {
        $this->raw = new RoadEventsRawService($client);
    }

    /**
     * @api
     *
     * @param string $parkCode a comma delimited list of 4 character park codes
     * @param string $type either 'incident' or 'workzone'
     * @param RequestOpts|null $requestOptions
     *
     * @return list<RoadEventListResponseItem>
     *
     * @throws APIException
     */
    public function list(
        ?string $parkCode = null,
        ?string $type = null,
        RequestOptions|array|null $requestOptions = null,
    ): array {
        $params = Util::removeNulls(['parkCode' => $parkCode, 'type' => $type]);

        // @phpstan-ignore-next-line argument.type
        $response = $this->raw->list(params: $params, requestOptions: $requestOptions);

        return $response->parse();
    }
}
