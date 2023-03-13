<?php

namespace App\Http\Controllers;

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
    public function index()
    {
        $ports = DB::select('SELECT * FROM `port`');
        return view('home')->with('ports', $ports);
    }

    public function getWeather($city)
    {
        $apiKey = env('OPEN_WEATHER_MAP_API_KEY');
        $client = new Client();
        $url = "http://api.openweathermap.org/data/2.5/weather?q={$city}&appid={$apiKey}";
        $response = $client->get($url);
        $data = json_decode($response->getBody(), true);
        return view('weather', compact('data'));
    }

}
