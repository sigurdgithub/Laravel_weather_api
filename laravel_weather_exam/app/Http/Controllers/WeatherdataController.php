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
        $genk_weather = $wt->getCurrentByCity('westerlo');

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
}
