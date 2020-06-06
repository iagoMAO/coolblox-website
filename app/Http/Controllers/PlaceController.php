<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class PlaceController extends Controller
{
    public function view($id)
    {
        $favorited = collect(Auth::user()->favorited_places)->contains($id);

        $place = \App\Game::where('id', '=', $id)->firstOrFail();
        $user = \App\User::where('id', '=', $place->uid)->firstOrFail();
        $owner = $place->uid == Auth::user()->id;
        return view('place', ["place" => $place,"user" => $user,"owner" => $owner,"favorited" => $favorited]);
    }

    public function favorite($id)
    {
        $place = \App\Game::where('id', '=', $id)->firstOrFail();

        switch($place)
        {
            case true:
                $user = Auth::user();
                $current = collect($user->favorited_places);
                $new = $current->push($place->id);

                if($current->has($place->id))
                {
                    return redirect()->back();
                }
                else {
                    $user->update([
                        'favorited_places' => $new,
                    ]);
                }

                return redirect()->back();
                break;
            default:
                return abort(404);
                break;
        }
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
        $owner = $place->uid == Auth::user()->id;

        switch ($owner)
        {
            case true:
                $data = $request->validate([
                    "name" => "required|max:32",
                    "desc" => "max:128",
                    "ipv4" => "",
                    "port" => "int",
                ]);
        
                $place->update([
                    "name" => $data["name"],
                    "desc" => $data["desc"],
                    "ipv4" => $data["ipv4"],
                    "port" => $data["port"],
                ]);
                
                $updated = $place->updated_at->format("H:i:s A");
                return redirect()->back()->with('msg', 'Your changes to the item have been saved. (' . $updated . ')');
                break;
            default:
                return abort(404);
                break;
        }
    }
}
