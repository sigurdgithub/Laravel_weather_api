<!-- <?php

        //    namespace App\Http\Controllers;

        use GuzzleHttp\Promise\Create;
        use Illuminate\Http\Request;
        use RakibDevs\Weather\Weather;
        use Illuminate\Validation\Rules;


/* class WeatherController extends Controller
{
    public function save(Request $request)
    {
        $wt = new Weather();
        $genk_weather = $wt->getCurrentByCity('genk');

        /* $request->validate([
            'city' => ['required', 'string'],
            'temperature' => ['required', 'float'],
            'feels' => ['required', 'float'],
            'humidity' => ['required', 'integer'],
        ]); */
        // dd($genk_weather);
       /*  $weather = App\Http\Models\Weather::firstOrCreate([
            'city' => $request->$genk_weather->name,
            'temperature' => $request->$genk_weather->main->temp,
            'feels' => $request->$genk_weather->main->feels_like,
            'humidity' => $request->$genk_weather->main->humidity,

        ]);
        dd($weather);
    }
}  */
