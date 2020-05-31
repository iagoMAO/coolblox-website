<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlaceController extends Controller
{
    public function view($id)
    {
        $place = \App\Game::where('id', '=', $id)->firstOrFail();
        $user = \App\User::where('id', '=', $place->uid)->firstOrFail();
        return view('place', ["place" => $place,"user" => $user]);
    }
}
