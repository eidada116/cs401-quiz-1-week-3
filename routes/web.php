<?php

use App\Http\Controllers\GamesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/get-csrf-token', function () {
    return response()->json(['_token' => csrf_token()]);
});
//Route::get('/', [GamesController::class,])->name('.index');
// Step 2. make the routes for the rest of the actions
Route::resource('games', GamesController::class);
