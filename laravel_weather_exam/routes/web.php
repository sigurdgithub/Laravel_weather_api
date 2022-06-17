<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use RakibDevs\Weather\Weather;
use App\Http\Controllers\WeatherdataController;
use App\Http\Models\Weatherdata;
use App\Models\Weatherdata as ModelsWeatherdata;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/weather', function () {
    return view('weather', [
        'weather_data' => ModelsWeatherdata::all()
    ]);;
});

Route::get('/', function () {
    $wt = new Weather();
    $genk_weather = $wt->getCurrentByCity('genk');
    return view('home', ['weather' => $genk_weather]);
});

Route::post('', [WeatherdataController::class, 'save'])->name('save');

Route::get('/weather', [WeatherdataController::class, 'calcAverage'])->name('calcAverage');
