<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    if(!\App\Game::all()->isEmpty()) {
        $game = \App\Game::all()->random();
        $user = \App\User::where('id', '=', $game->uid)->first();

        return view('welcome', ["game" => $game, "user" => $user]);
    }
    else {
        return view('welcome');
    }
});

Auth::routes();

Route::middleware(["auth"])->group(function() {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/games', 'GamesController@index');
    
    Route::get('/place/{id}', 'PlaceController@view');
    Route::get('/place/{id}/favorite', 'PlaceController@favorite');

    Route::get('/user/{id}', 'ProfileController@view');

    Route::get('/user/personal/edit', 'UserPersonalController@edit_profile');
    Route::post('/user/personal/edit', 'UserPersonalController@edit_profile_post');

    Route::get('/place/{id}/edit', 'PlaceController@edit');
    Route::post('/place/{id}/edit', 'PlaceController@doEdit');

    Route::get('/api/games/{category}', 'GamesController@ajax_games');
});