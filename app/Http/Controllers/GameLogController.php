<?php

namespace App\Http\Controllers;
use App\Models\GameLog;

use Illuminate\Http\Request;

class GameLogController extends Controller
{
    public function index()
    {
        $games = GameLog::all();
        return view('games.index', compact('games'));
    }
}
