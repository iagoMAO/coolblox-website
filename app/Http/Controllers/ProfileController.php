<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function view($id)
    {
        $user = \App\User::where('id', '=', $id)->firstOrFail();
        $places = \App\Game::where('uid', '=', $id)->get();

        $favorited = collect($user->favorited_places);
        $favorites = \App\Game::whereIn('id', $favorited)->paginate(6);
        
        return view('user', ["user" => $user, "places" => $places, "favorites" => $favorites]);
    }
}
