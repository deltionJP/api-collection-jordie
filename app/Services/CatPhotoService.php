<?php

namespace App\Services;
use Cache;
use Carbon\Carbon;
use GuzzleHttp\Client;

class CatPhotoService
{
    public function getData()
    {
        // return 'false';
        // Welcome to The Cat API! 🐱
        // Your API Key: 1e0de257-310d-4080-a34d-c58a7c45428c
        return new Client([
            'base_uri' => 'https://api.thecatapi.com/v1/',
            'headers' => [
                'x-api-key' => '1e0de257-310d-4080-a34d-c58a7c45428c',
            ]
        ]);
    }
    
    public function getRandomPhoto() 
    {
        $client = self::getData();

        $result = $client->request('GET', 'images/search');
        $photo = json_decode($result->getBody(), true);

        return $photo[0]['url'];
    }
}