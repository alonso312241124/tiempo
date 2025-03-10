<?php

namespace App\Services;

use GuzzleHttp\Client;

class WeatherService
{
    protected $client;
    protected $apiKey;


    public function __construct()
    {
        $this->client = new Client();
        $this->apiKey = env('WEATHER_API_KEY'); // Asegúrate de tener esta variable en tu .env
    }


    public function getWeather($city)
    {
        $url = "http://api.weatherapi.com/v1/current.json?key={$this->apiKey}&q={$city}";
        //echo "url con ApiKey: $url";
        //$url = "https://api.openweathermap.org/data/2.5/weather?q={$city}&APPID={$this->apiKey}";
        // api = 25f0684e0f2aef84e31937e867a14417


        try {
            $response = $this->client->get($url);


            return json_decode($response->getBody(), true);
        } catch (\Exception $e) {
            // Manejo de errores
            echo "Error " . $e->getMessage();
            return null;
        }
    }
}
