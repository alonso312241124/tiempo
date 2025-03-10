<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\WeatherService;


class WeatherController extends Controller
{
    protected $weatherService;

    public function __construct(WeatherService $weatherService)
    {
        $this->weatherService = $weatherService;
    }

    public function show($city)
    {
        $weather = $this->weatherService->getWeather($city);
    
        if ($weather) {
            return view('tiempo.pronostico', ['tiempo' => $weather]);
        } else {
            return response()->json(['error' => 'No se pudo obtener la información del clima'], 500);
        }
    }
}
