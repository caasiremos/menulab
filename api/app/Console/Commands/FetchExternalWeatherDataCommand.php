<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Jobs\FetchWeatherFocusJob;
use Illuminate\Support\Facades\Log;
use App\Repository\WeatherRepository;

class FetchExternalWeatherDataCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fetch:weather-data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetches weather data of database users with coordinates';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        try {
            //Dispatch a job to fetch weather data
            $weatherRepository = app(WeatherRepository::class);
            FetchWeatherFocusJob::dispatch($weatherRepository);
        } catch (\Throwable $throwable) {
            Log::error("COMMAND ERROR: {$throwable->getMessage()}");
        }
    }
}
