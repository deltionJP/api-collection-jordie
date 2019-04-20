<?php

namespace App\Services;
use Cache;
use Carbon\Carbon;
use GuzzleHttp\Client;

class GifService
{
    public function client()
    {
        //https://developers.giphy.com/dashboard/
        //9I1mQUtrk0itH8TKmvthbpDh5uzrnTwT
        // return new Client([
        //     'base_uri' => 'api.giphy.com',
        //     'headers' => [
        //         'api_key' => '9I1mQUtrk0itH8TKmvthbpDh5uzrnTwT',
        //         // 'fmt' => 'json'
        //     ]
        // ]);
        return new Client();
    }
    
    public function getGif() 
    {
        $client = self::client();

        // $result = $client->request('GET', '/v1/gifs/random');
        $result = $client->request('GET', 'http://api.giphy.com/v1/gifs/random?api_key=9I1mQUtrk0itH8TKmvthbpDh5uzrnTwT');
        $gif = json_decode($result->getBody(), true);

        return $gif;
    }
}