<?php

namespace Tests\Services;

use Nps\Amenities\AmenityGetParksPlacesResponse;
use Nps\Amenities\AmenityGetParksVisitorCentersResponse;
use Nps\Amenities\AmenityListResponse;
use Nps\Client;
use PHPUnit\Framework\Attributes\CoversNothing;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Tests\UnsupportedMockTests;

/**
 * @internal
 */
#[CoversNothing]
final class AmenitiesTest extends TestCase
{
    protected Client $client;

    protected function setUp(): void
    {
        parent::setUp();

        $testUrl = getenv('TEST_API_BASE_URL') ?: 'http://127.0.0.1:4010';
        $client = new Client(apiKey: 'My API Key', baseUrl: $testUrl);

        $this->client = $client;
    }

    #[Test]
    public function testList(): void
    {
        if (UnsupportedMockTests::$skip) {
            $this->markTestSkipped('Prism tests are disabled');
        }

        $result = $this->client->amenities->list();

        // @phpstan-ignore-next-line method.alreadyNarrowedType
        $this->assertInstanceOf(AmenityListResponse::class, $result);
    }

    #[Test]
    public function testRetrieveParksPlaces(): void
    {
        if (UnsupportedMockTests::$skip) {
            $this->markTestSkipped('Prism tests are disabled');
        }

        $result = $this->client->amenities->retrieveParksPlaces();

        // @phpstan-ignore-next-line method.alreadyNarrowedType
        $this->assertInstanceOf(AmenityGetParksPlacesResponse::class, $result);
    }

    #[Test]
    public function testRetrieveParksVisitorCenters(): void
    {
        if (UnsupportedMockTests::$skip) {
            $this->markTestSkipped('Prism tests are disabled');
        }

        $result = $this->client->amenities->retrieveParksVisitorCenters();

        // @phpstan-ignore-next-line method.alreadyNarrowedType
        $this->assertInstanceOf(
            AmenityGetParksVisitorCentersResponse::class,
            $result
        );
    }
}
