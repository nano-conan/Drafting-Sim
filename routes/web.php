<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/draft', function () {
    return view('draft');
});

Route::get('/api/heros', function () {
    $end_point = 'https://mapi.mobilelegends.com/hero/list';

    $response = Http::get($end_point);

    return $response;
});

