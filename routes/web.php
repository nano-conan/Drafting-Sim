<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Events\HeroSelected;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/draft', function () {
    return view('draft');
});

Route::get('/api/heros', function () {
    $end_point = 'https://mapi.mobilelegends.com/hero/list';

    $response = Http::get($end_point);

    $responseArray = json_decode($response, true);

	// Check if data key exists
	if (isset($responseArray['data']) && is_array($responseArray['data'])) {
	    // Loop through each item in the data array
	    foreach ($responseArray['data'] as &$item) {
		// Prepend "https:" to the key attribute
		$item['key'] = 'https:' . $item['key'];
	    }
	}

	// Encode back to JSON
	$response = json_encode($responseArray);

    return $response;
});

Route::get('/broadcast', function (){
    broadcast(new HeroSelected());
    return "Hero Selected event broadcasted";
});

