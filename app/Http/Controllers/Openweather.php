<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Openweather extends Controller
{
    public function actualWeather(Request $request)
    {
        $location = $request->input('location');

        $response = Http::get('https://api.openweathermap.org/data/2.5/weather', [
            'q' => $request->input('location'),
            'appid' => config('services.openweather.key'),
            'units' => 'metric',
        ]);

        $json = $response->json();

        return view('openweather', [
            'actualWeather' => $json,
        ]);
    }

    public function forecastWeather(Request $request)
    {
        $location = $request->input('location');

        $response = Http::get('https://api.openweathermap.org/data/2.5/forecast/daily', [
            'q' => $request->input('location'),
            'appid' => config('services.openweather.key'),
            'units' => 'metric',
        ]);

        $json = $response->json();

        return view('openweather', [
            'forecastWeather' => $json,
        ]);
    }
}
