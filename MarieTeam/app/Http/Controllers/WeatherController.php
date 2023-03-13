<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class WeatherController extends Controller
{
    public function getWeather($city)
    {
        $apiKey = env('OPEN_WEATHER_MAP_API_KEY');
        $client = new Client();
        $url = "http://api.openweathermap.org/data/2.5/weather?q={$city}&appid={$apiKey}";
        $response = $client->get($url);
        $data = json_decode($response->getBody(), true);
        $temperatureCelsius = round($data['main']['temp'] - 273.15); // convert to Celsius
        $temperatureFahrenheit = round(($temperatureCelsius * 1.8) + 32); // convert to Fahrenheit
        return view('weather', compact('data', 'temperatureCelsius', 'temperatureFahrenheit'));
    }



}
