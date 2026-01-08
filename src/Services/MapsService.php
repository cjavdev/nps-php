<?php

declare(strict_types=1);

namespace Nps\Services;

use Nps\Client;
use Nps\Core\Exceptions\APIException;
use Nps\Maps\MapGetParkBoundariesResponseItem;
use Nps\RequestOptions;
use Nps\ServiceContracts\MapsContract;

/**
 * @phpstan-import-type RequestOpts from \Nps\RequestOptions
 */
final class MapsService implements MapsContract
{
    /**
     * @api
     */
    public MapsRawService $raw;

    /**
     * @internal
     */
    public function __construct(private Client $client)
    {
        $this->raw = new MapsRawService($client);
    }

    /**
     * @api
     *
     * @param string $sitecode park site code (e.g. abli)
     * @param RequestOpts|null $requestOptions
     *
     * @return list<MapGetParkBoundariesResponseItem>
     *
     * @throws APIException
     */
    public function retrieveParkBoundaries(
        string $sitecode,
        RequestOptions|array|null $requestOptions = null
    ): array {
        // @phpstan-ignore-next-line argument.type
        $response = $this->raw->retrieveParkBoundaries($sitecode, requestOptions: $requestOptions);

        return $response->parse();
    }
}
