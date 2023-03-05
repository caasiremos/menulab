<?php

namespace App\Service;

use Illuminate\Support\Collection;
use App\Repository\WeatherRepository;

class WeatherService
{
    public function __construct(private WeatherRepository $weatherRepository)
    {
    }

    /**
     * Returns weather focus for all system user
     */
    public function getUsersWeatherFocus(): mixed
    {
        return $this->weatherRepository->fetchWeatherFocus();
    }
}
