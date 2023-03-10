<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use App\Repository\WeatherRepository;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class FetchWeatherFocusJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct(private WeatherRepository $weatherRepository)
    {
    }

    public function handle(): void
    {
        $this->weatherRepository->userExternalWeatherFocus();
    }
}
