<?php

declare(strict_types=1);

namespace Nps\Services;

use Nps\Client;
use Nps\Core\Contracts\BaseResponse;
use Nps\Core\Conversion\ListOf;
use Nps\Core\Exceptions\APIException;
use Nps\Maps\MapGetParkBoundariesResponseItem;
use Nps\RequestOptions;
use Nps\ServiceContracts\MapsRawContract;

/**
 * @phpstan-import-type RequestOpts from \Nps\RequestOptions
 */
final class MapsRawService implements MapsRawContract
{
    // @phpstan-ignore-next-line
    /**
     * @internal
     */
    public function __construct(private Client $client) {}

    /**
     * @api
     *
     * @param string $sitecode park site code (e.g. abli)
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<list<MapGetParkBoundariesResponseItem>>
     *
     * @throws APIException
     */
    public function retrieveParkBoundaries(
        string $sitecode,
        RequestOptions|array|null $requestOptions = null
    ): BaseResponse {
        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'get',
            path: ['mapdata/parkboundaries/%1$s', $sitecode],
            options: $requestOptions,
            convert: new ListOf(MapGetParkBoundariesResponseItem::class),
        );
    }
}
