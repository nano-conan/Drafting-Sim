<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Cache;
use App\Events\HeroSelected;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/blue', function () {
    return view('draft', ['user' => 'blue']);
});

Route::get('/red', function () {
    return view('draft', ['user' => 'red']);
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


Route::get('/api/game-state', function() {
    //How do I get the key? The key is the uuid made for the game
    //TODO: Implement uuid assignment and cachingA

    $gameState = Cache::get('key');
    $data = [];
    foreach ($gameState->all() as $key => $value) {
        $data[$key] = $value;
    }

    return Response::json($data);
});

Route::put('/api/game-state', function() {
    //Check the game state for legal move (??)
    $jsonBody = Request::json();
    Cache::put('key', $jsonBody, now()->addHour());

    broadcast(new HeroSelected());
});

