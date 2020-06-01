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
    $fgame = \App\Game::all()->random();
    $user = \App\User::where('id', '=', $fgame->uid)->first();
    return view('welcome', ["game" => $fgame, "user" => $user]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/games', 'GamesController@index');
Route::get('/place/{id}', 'PlaceController@view');
Route::get('/user/{id}', 'ProfileController@view');

Route::get('/place/{id}/edit', 'PlaceController@edit');
Route::post('/place/{id}/edit', 'PlaceController@doEdit');

Route::get('/api/games/{category}', 'GamesController@ajax_games');