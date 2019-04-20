<?php

namespace App\Services;
use Cache;
use Carbon\Carbon;
use GuzzleHttp\Client;

class QuoteService
{
    public function getQuote() 
    {
        // https://theysaidso.com/api/#qod
        $client = new Client();
        $result = $client->get('http://quotes.rest/qod.json');
        $quote = json_decode($result->getBody(), true);

        
        $a = collect($quote)->map(function($content){
                return $content;
        });
        
        return $a;
    }

    public function developQuote() 
    {
        // http://quotes.stormconsultancy.co.uk/random.json

        $client = new Client();
        $result = $client->get('http://quotes.stormconsultancy.co.uk/random.json');
        $quote = json_decode($result->getBody(), true);

        
        $a = collect($quote)->map(function($content){
                return $content;
        });
        
        return $a;
    }
}