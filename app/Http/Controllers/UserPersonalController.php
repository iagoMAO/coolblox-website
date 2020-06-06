<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UserPersonalController extends Controller
{
    public function edit_profile()
    {
        return view('personal.edit');
    }

    public function edit_profile_post(Request $request)
    {
        $data = $request->validate([
            'blurb' => 'max:1000', // idk
        ]);

        $user = Auth::user();

        $user->update([
            'blurb' => $data['blurb'],
        ]);

        $updated = $user->updated_at->format("H:i:s A");
        return redirect()->back()->with('msg', 'Your changes to your profile have been saved. (' . $updated . ')');
    }
}
