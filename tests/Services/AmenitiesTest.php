<?php

namespace Tests\Services;

use Nps\Amenities\AmenityListParksPlacesResponse;
use Nps\Amenities\AmenityListParksVisitorCentersResponse;
use Nps\Amenities\AmenityListResponse;
use Nps\Client;
use Nps\LimitStartPagination;
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

        $page = $this->client->amenities->list();

        // @phpstan-ignore-next-line method.alreadyNarrowedType
        $this->assertInstanceOf(LimitStartPagination::class, $page);

        if ($item = $page->getItems()[0] ?? null) {
            // @phpstan-ignore-next-line method.alreadyNarrowedType
            $this->assertInstanceOf(AmenityListResponse::class, $item);
        }
    }

    #[Test]
    public function testListParksPlaces(): void
    {
        if (UnsupportedMockTests::$skip) {
            $this->markTestSkipped('Prism tests are disabled');
        }

        $page = $this->client->amenities->listParksPlaces();

        // @phpstan-ignore-next-line method.alreadyNarrowedType
        $this->assertInstanceOf(LimitStartPagination::class, $page);

        if ($item = $page->getItems()[0] ?? null) {
            // @phpstan-ignore-next-line method.alreadyNarrowedType
            $this->assertInstanceOf(AmenityListParksPlacesResponse::class, $item);
        }
    }

    #[Test]
    public function testListParksVisitorCenters(): void
    {
        if (UnsupportedMockTests::$skip) {
            $this->markTestSkipped('Prism tests are disabled');
        }

        $page = $this->client->amenities->listParksVisitorCenters();

        // @phpstan-ignore-next-line method.alreadyNarrowedType
        $this->assertInstanceOf(LimitStartPagination::class, $page);

        if ($item = $page->getItems()[0] ?? null) {
            // @phpstan-ignore-next-line method.alreadyNarrowedType
            $this->assertInstanceOf(
                AmenityListParksVisitorCentersResponse::class,
                $item
            );
        }
    }
}
