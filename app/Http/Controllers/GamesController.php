<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class GamesController extends Controller
{
    public function index()
    {
        $games = \App\Game::paginate(18);
        return view('games', ["games" => $games]);
    }
}
