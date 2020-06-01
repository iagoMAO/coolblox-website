<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class PlaceController extends Controller
{
    public function view($id)
    {
        $place = \App\Game::where('id', '=', $id)->firstOrFail();
        $user = \App\User::where('id', '=', $place->uid)->firstOrFail();
        $owner = $place->uid == Auth::user()->id;
        return view('place', ["place" => $place,"user" => $user,"owner" => $owner]);
    }

    public function edit($id)
    {
        $place = \App\Game::where('id', '=', $id)->firstOrFail();
        $owner = $place->uid == Auth::user()->id;

        switch ($owner)
        {
            case true:
                return view('place-edit', ["place" => $place]);
                break;
            default:
                return abort(404);
                break;
        }
    }

    public function doEdit($id, Request $request)
    {
        $place = \App\Game::where(["id" => $id, "uid" => Auth::user()->id])->first();

        $data = $request->validate([
            "name" => "required|max:32",
            "desc" => "max:32",
            "ipv4" => "",
            "port" => "int",
        ]);

        $place->update([
            "name" => $data["name"],
            "desc" => $data["desc"],
            "ipv4" => $data["ipv4"],
            "port" => $data["port"],
        ]);

        return redirect('place/' . $id);
    }
}
