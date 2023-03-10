<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeatherApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/', function () {
    return response()->json([
        'message' => 'all systems are a go',
        'users' => User::all(),
    ]);
});

Route::prefix('api')->group(function () {
    Route::get('user-weather', [WeatherApiController::class, 'getWeather']);
});
