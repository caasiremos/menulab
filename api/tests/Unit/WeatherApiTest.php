<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use App\Utils\ApiResponse;
use Illuminate\Support\Str;
use App\Jobs\FetchWeatherFocusJob;
use App\Events\WeatherUpdateEvent;
use Illuminate\Support\Facades\Bus;
use Illuminate\Support\Facades\Http;
use App\Repository\WeatherRepository;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Artisan;

class WeatherApiTest extends TestCase
{
    public WeatherRepository $weatherRepository;

    protected function setUp(): void
    {
        parent::setUp();
        $this->weatherRepository = new WeatherRepository();
    }

    /**
     * Returns the first five characters of the api key
     * @return string
     */
    private function firstFiveApiKeyCharacters(): string
    {
        return Str::substr($this->weatherRepository->apiKey(), 0, 5);
    }

    /**
     * Returns last 5 characters of the api key
     * @return string
     */
    private function lastFiveApiKeyCharacters(): string
    {
        return Str::substr($this->weatherRepository->apiKey(), -5);
    }

    function test_can_return_api_key_from_config_file()
    {
        $this->assertStringStartsWith($this->firstFiveApiKeyCharacters(), $this->weatherRepository->apiKey());
        $this->assertStringEndsWith($this->lastFiveApiKeyCharacters(), $this->weatherRepository->apiKey());
    }

    function test_can_return_url_with_coordinates()
    {
        $latitude = 61.03868400;
        $longitude = 81.13216900;
        $url = $this->weatherRepository->weatherUrl($latitude, $longitude, $this->weatherRepository->apiKey());
        $this->assertStringContainsString($latitude, $url);
        $this->assertStringContainsString($longitude, $url);
        $this->assertStringEndsWith($this->lastFiveApiKeyCharacters(), $url);
    }

    function test_can_make_external_weather_api_call()
    {
        $user = User::factory()->createOne();
        config(['services.weather.key' => 'testing']);
        $url = $this->weatherRepository->weatherUrl($user->latitude, $user->longitude, $this->weatherRepository->apiKey());

        Http::fake([$url => Http::response(ApiResponse::partialResponse(), 200)]);

        $this->assertEquals([
            "lat" => 39.2803,
            "lon" => 81.1322,
            "timezone" => "Asia/Shanghai",
            "timezone_offset" => 28800
        ], ApiResponse::partialResponse());
    }

    public function test_can_dispatch_weather_job()
    {
        Bus::fake();
        Artisan::call("fetch:weather-data");
        Bus::assertDispatched(FetchWeatherFocusJob::class);
    }

    public function test_can_broadcast_weather_event()
    {
        Bus::fake();
        Artisan::call("fetch:weather-data");
        Bus::assertDispatched(FetchWeatherFocusJob::class);
        Event::fake();
        (new WeatherRepository())->userExternalWeatherFocus();
        Event::assertDispatched(WeatherUpdateEvent::class);
    }
}
