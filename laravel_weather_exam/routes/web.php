<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use RakibDevs\Weather\Weather;
use App\Http\Controllers\WeatherdataController;

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
    return view('weather');
});

Route::get('/', function () {
    /*  $weather_genk = Http::get('https://api.openweathermap.org/data/2.5/weather?appid=5dd765a29b95b2e058dfd9f33a1dbd0d&q=genk');
    $weather_genk = json_decode($weather_genk); */
    $wt = new Weather();
    $genk_weather = $wt->getCurrentByCity('genk');
    dd($genk_weather);
    return view('home', ['weather' => $genk_weather]);
});

Route::post('', [WeatherdataController::class, 'save'])->name('save');
