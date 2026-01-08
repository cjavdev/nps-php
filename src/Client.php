<?php

declare(strict_types=1);

namespace Nps;

use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\Psr18ClientDiscovery;
use Nps\Core\BaseClient;
use Nps\Core\Util;
use Nps\Services\ActivitiesService;
use Nps\Services\AlertsService;
use Nps\Services\AmenitiesService;
use Nps\Services\ArticlesService;
use Nps\Services\CampgroundsService;
use Nps\Services\EventsService;
use Nps\Services\FeespassesService;
use Nps\Services\LessonplansService;
use Nps\Services\MapsService;
use Nps\Services\MultimediaService;
use Nps\Services\NewsReleasesService;
use Nps\Services\ParkingLotsService;
use Nps\Services\ParksService;
use Nps\Services\PassportStampLocationsService;
use Nps\Services\PeopleService;
use Nps\Services\PlacesService;
use Nps\Services\RoadEventsService;
use Nps\Services\ThingsTodoService;
use Nps\Services\TopicsService;
use Nps\Services\ToursService;
use Nps\Services\VisitorCentersService;
use Nps\Services\WebcamsService;

/**
 * @phpstan-import-type NormalizedRequest from \Nps\Core\BaseClient
 * @phpstan-import-type RequestOpts from \Nps\RequestOptions
 */
class Client extends BaseClient
{
    public string $apiKey;

    /**
     * @api
     */
    public ActivitiesService $activities;

    /**
     * @api
     */
    public AlertsService $alerts;

    /**
     * @api
     */
    public AmenitiesService $amenities;

    /**
     * @api
     */
    public ArticlesService $articles;

    /**
     * @api
     */
    public CampgroundsService $campgrounds;

    /**
     * @api
     */
    public EventsService $events;

    /**
     * @api
     */
    public FeespassesService $feespasses;

    /**
     * @api
     */
    public LessonplansService $lessonplans;

    /**
     * @api
     */
    public MapsService $maps;

    /**
     * @api
     */
    public MultimediaService $multimedia;

    /**
     * @api
     */
    public NewsReleasesService $newsReleases;

    /**
     * @api
     */
    public ParkingLotsService $parkingLots;

    /**
     * @api
     */
    public ParksService $parks;

    /**
     * @api
     */
    public PassportStampLocationsService $passportStampLocations;

    /**
     * @api
     */
    public PeopleService $people;

    /**
     * @api
     */
    public PlacesService $places;

    /**
     * @api
     */
    public RoadEventsService $roadEvents;

    /**
     * @api
     */
    public ThingsTodoService $thingsTodo;

    /**
     * @api
     */
    public TopicsService $topics;

    /**
     * @api
     */
    public ToursService $tours;

    /**
     * @api
     */
    public VisitorCentersService $visitorCenters;

    /**
     * @api
     */
    public WebcamsService $webcams;

    /**
     * @param RequestOpts|null $requestOptions
     */
    public function __construct(
        ?string $apiKey = null,
        ?string $baseUrl = null,
        RequestOptions|array|null $requestOptions = null,
    ) {
        $this->apiKey = (string) ($apiKey ?? getenv('NATIONAL_PARK_KEY'));

        $baseUrl ??= getenv('NPS_BASE_URL') ?: 'https://developer.nps.gov/api/v1';

        $options = RequestOptions::parse(
            RequestOptions::with(
                uriFactory: Psr17FactoryDiscovery::findUriFactory(),
                streamFactory: Psr17FactoryDiscovery::findStreamFactory(),
                requestFactory: Psr17FactoryDiscovery::findRequestFactory(),
                transporter: Psr18ClientDiscovery::find(),
            ),
            $requestOptions,
        );

        parent::__construct(
            headers: [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
                'User-Agent' => sprintf('nps/PHP %s', VERSION),
                'X-Stainless-Lang' => 'php',
                'X-Stainless-Package-Version' => '0.0.1',
                'X-Stainless-Arch' => Util::machtype(),
                'X-Stainless-OS' => Util::ostype(),
                'X-Stainless-Runtime' => php_sapi_name(),
                'X-Stainless-Runtime-Version' => phpversion(),
            ],
            baseUrl: $baseUrl,
            options: $options
        );

        $this->activities = new ActivitiesService($this);
        $this->alerts = new AlertsService($this);
        $this->amenities = new AmenitiesService($this);
        $this->articles = new ArticlesService($this);
        $this->campgrounds = new CampgroundsService($this);
        $this->events = new EventsService($this);
        $this->feespasses = new FeespassesService($this);
        $this->lessonplans = new LessonplansService($this);
        $this->maps = new MapsService($this);
        $this->multimedia = new MultimediaService($this);
        $this->newsReleases = new NewsReleasesService($this);
        $this->parkingLots = new ParkingLotsService($this);
        $this->parks = new ParksService($this);
        $this->passportStampLocations = new PassportStampLocationsService($this);
        $this->people = new PeopleService($this);
        $this->places = new PlacesService($this);
        $this->roadEvents = new RoadEventsService($this);
        $this->thingsTodo = new ThingsTodoService($this);
        $this->topics = new TopicsService($this);
        $this->tours = new ToursService($this);
        $this->visitorCenters = new VisitorCentersService($this);
        $this->webcams = new WebcamsService($this);
    }

    /** @return array<string,string> */
    protected function authQuery(): array
    {
        return $this->apiKey ? ['api_key' => $this->apiKey] : [];
    }

    /**
     * @internal
     *
     * @param string|list<string> $path
     * @param array<string,mixed> $query
     * @param array<string,string|int|list<string|int>|null> $headers
     * @param RequestOpts|null $opts
     *
     * @return array{NormalizedRequest, RequestOptions}
     */
    protected function buildRequest(
        string $method,
        string|array $path,
        array $query,
        array $headers,
        mixed $body,
        RequestOptions|array|null $opts,
    ): array {
        return parent::buildRequest(
            method: $method,
            path: $path,
            query: [...$this->authQuery(), ...$query],
            headers: $headers,
            body: $body,
            opts: $opts,
        );
    }
}
