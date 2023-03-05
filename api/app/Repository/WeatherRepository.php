<?php

namespace App\Repository;

use Throwable;
use Exception;
use App\Models\User;
use App\Jobs\FetchWeatherFocusJob;
use App\Events\WeatherUpdateEvent;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Client\RequestException;

class WeatherRepository
{
    private const BASE_URL = "https://api.openweathermap.org/data/3.0/onecall?";
    private const CACHE_KEY = "weather_cache_key";
    private array $weatherData = [];

    /**
     * Returns a collection of user weather focus from cache
     * @return mixed
     */
    public function fetchWeatherFocus(): mixed
    {
        if (Cache::has(self::CACHE_KEY)) {
            $weatherCacheStore = Cache::get(self::CACHE_KEY);
            return collect($weatherCacheStore);
        } else {
            return FetchWeatherFocusJob::dispatch($this);
        }
    }

    /**
     * Gets user weather focus based on coordinates of the user
     */
    public function userExternalWeatherFocus()
    {
        try {
            //Get database users and store them in cache
            $users = Cache::rememberForever('users', function () {
                return User::all();
            });
            //Get weather focus for each user in cache
            $users->each(function ($user) {
                array_push($this->weatherData, $this->getUserWeatherFocus($user));
            });
            //store the response in cache
            $this->cacheUserWeatherResponse($this->weatherData);
            //get the cache data from cache store
            $weatherCacheStore = Cache::get(self::CACHE_KEY);
            Log::info(json_encode(["CACHE DATA STORE" => $weatherCacheStore]));
            //return collection from the weatherCacheStore array
            broadcast(new WeatherUpdateEvent($weatherCacheStore));
        } catch (Throwable $throwable) {
            Log::error($throwable->getMessage());
        }
    }

    /**
     * Makes external api call to fetch weather data
     * @param User $user
     * @return array
     * @throws RequestException
     * @throws Exception
     */
    public function getUserWeatherFocus(User $user): array
    {
        if (!$user->latitude && !$user->longitude) {
            throw new Exception("User with ID $user->id has no coordinates");
        }
        $response = Http::acceptJson()->get($this->weatherUrl($user->latitude, $user->longitude, $this->apiKey()));
        if ($response->status() !== 200) {
            $response->throw();
        }
        $responseBody = $response->json();
        Log::info(json_encode(["WEATHER RESPONSE" => $responseBody]));
        return [
            'user' => $user->getAttributes(),
            'weatherData' => $responseBody
        ];
    }

    /**
     * Cache the results from the api response
     */
    private function cacheUserWeatherResponse(array $weatherResponseData): void
    {
        //flush the previous cache data
        Cache::flush();
        //cache new data, add a duration greater that time interval for command that dispatches the job
        Cache::put(self::CACHE_KEY, $weatherResponseData, now()->addMinutes(60));
    }

    /**
     * Returns the weather api key
     * @return string
     */
    public function apiKey(): string
    {
        return config('services.weather.key');
    }

    /**
     * Returns weather external url
     * @param string $latitude
     * @param string $longitude
     * @param string $apiKey
     * @return string
     */
    public function weatherUrl(string $latitude, string $longitude, string $apiKey): string
    {
        return self::BASE_URL . "lat=$latitude&lon=$longitude&exclude=minutely,hourly,daily&appid=$apiKey";
    }
}
