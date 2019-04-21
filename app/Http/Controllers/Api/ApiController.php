<?php
 namespace App\Http\Controllers\Api;
use App\Services\CatPhotoService;
use App\Services\QuoteService;
use App\Services\GifService;
use App\Services\IPService;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    public function cat(CatPhotoService $catPhotoService)
    {
        return $catPhotoService->getRandomPhoto();
    }

    public function getQuote(QuoteService $quoteService)
    {
        return $quoteService->getQuote();
    }

    public function developQuote(QuoteService $quoteService)
    {
        return $quoteService->developQuote();
    }
    
    public function getGif(GifService $gifService)
    {
        return $gifService->getGif();
    }

    public function ip(IPservice $ip)
    {
        return $ip;
    }
}