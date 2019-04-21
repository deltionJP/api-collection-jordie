<?php

namespace App\Services;
use Cache;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class IPService
{
    public function getIp(Request $request) 
    {
        return $request->ip();
        // dd($request->ip());
    }
}