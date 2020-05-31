<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function view($id)
    {
        $user = \App\User::where('id', '=', $id)->firstOrFail();
        $places = \App\Game::where('uid', '=', $id)->get();
        return view('user', ["user" => $user, "places" => $places]);
    }
}
