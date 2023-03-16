<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    private function getWeatherData($city)
    {
        $apiKey = env('OPEN_WEATHER_MAP_API_KEY');
        $client = new Client();
        $url = "http://api.openweathermap.org/data/2.5/weather?q={$city}&appid={$apiKey}";
        $response = $client->get($url);
        return json_decode($response->getBody(), true);
    }


    public function getAllWeather()
    {
        $cities = DB::select('SELECT * FROM `Port`');
        $weatherData = [];
        foreach ($cities as $city) {
            $data = $this->getWeatherData($city->nom);
            $temperatureCelsius = round($data['main']['temp'] - 273.15); // convert to Celsius
            $temperatureFahrenheit = round(($temperatureCelsius * 1.8) + 32); // convert to Fahrenheit
            $weatherData[$city->nom] = [
                'data' => $data,
                'temperatureCelsius' => $temperatureCelsius,
                'temperatureFahrenheit' => $temperatureFahrenheit
            ];
        }
        return view('home', compact('weatherData'))->with('ports', $cities);
    }
}
