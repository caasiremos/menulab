<?php

namespace App\Http\Controllers;

use Throwable;
use App\Service\WeatherService;
use App\Http\Responses\ApiErrorResponse;
use App\Http\Responses\ApiSuccessResponse;

class WeatherApiController extends Controller
{
    public function __construct(private WeatherService $weatherService)
    {
    }

    /**
     * Returns weather focus
     * @return ApiSuccessResponse|ApiErrorResponse
     */
    public function getWeather(): ApiSuccessResponse|ApiErrorResponse
    {
        try {
            $response = $this->weatherService->getUsersWeatherFocus();
            return new ApiSuccessResponse($response, ["message" => "Data fetched"]);
        } catch (Throwable $throwable) {
            return new ApiErrorResponse($throwable, "Something went wrong on our side, please contact our help desk");
        }
    }
}
