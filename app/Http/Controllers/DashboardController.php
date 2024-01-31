<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        if ($user->hasRole(['Super Admin', 'Admin', 'Committee'])) {
            return view('dashboard.committee.dashboard');
        } elseif ($user->hasRole(['LO Puzzle Pos 1', 'LO Puzzle Pos 2a', 'LO Puzzle Pos 2b', 'LO Puzzle Pos 3', 'LO Puzzle Pos 4', 'LO Puzzle Pos 5'])) {
//            return view('dashboard.lo_puzzle.dashboard');
            return redirect('/pos');
        }elseif ($user->hasRole(['LO Rally Pos 1', 'LO Rally Pos 2', 'LO Rally Pos 3', 'LO Rally Pos 4', 'LO Rally Pos 5', 'LO Rally Pos 6', 'LO Rally Pos 7', 'LO Rally Pos 8', 'LO Rally Pos 9', 'LO Rally Pos 10', 'LO Rally Pos 11', 'LO Rally Pos 12', 'LO Rally Pos 13', 'LO Rally Pos 14', 'LO Rally Pos 15', 'LO Rally Pos 16', 'LO Rally Pos 17', 'LO Rally Pos 18'])) {
//            return view('dashboard.lo_rally.dashboard');
            return redirect('/pos');
        }elseif ($user->hasRole(['Player'])) {
//            return view('dashboard.player.dashboard');
            return redirect('/play');
        }else{
            return 401;
        }
    }
}
