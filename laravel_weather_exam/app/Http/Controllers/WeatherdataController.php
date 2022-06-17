<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Promise\Create;
use RakibDevs\Weather\Weather;
use App\Http\Models\Weatherdata;
use App\Models\Weatherdata as ModelsWeatherdata;
use Illuminate\Validation\Rules;


class WeatherdataController extends Controller
{
    public function save(Request $request)
    {
        $wt = new Weather();
        $genk_weather = $wt->getCurrentByCity('genk');

        $request->validate([
            'city' => ['required', 'string'],
            'temperature' => ['required', 'numeric'],
            'feels' => ['required', 'numeric'],
            'humidity' => ['required', 'integer'],
        ]);
        // dd($genk_weather);
        $weather = ModelsWeatherdata::Create([
            'city' => $request->input('city'),
            'temperature' => $request->input('temperature'),
            'feels' => $request->input('feels'),
            'humidity' => $request->input('humidity'),

        ]);
        //dd($weather);
        return redirect('/')->with('status', 'Weather Data saved!');
    }

    public function calcAverage()
    {
        $avg_temp = ModelsWeatherdata::avg('temperature');
        $avg_temp = round($avg_temp, 1);

        $avg_feels = ModelsWeatherdata::avg('feels');
        $avg_feels = round($avg_feels, 1);

        $avg_hum = ModelsWeatherdata::avg('humidity');
        $avg_hum = round($avg_hum, 0);

        return view('weather', ['weather_data' => ModelsWeatherdata::all(), 'avg_temp' => $avg_temp, 'avg_feels' => $avg_feels, 'avg_hum' => $avg_hum]);
    }
}
