<?php

namespace App\Http\Controllers;

use App\Models\Pos;
use App\Models\Team;
use App\Models\Puzzle;
use App\Models\GlobalTimer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LOController extends Controller
{
    public function index(){
        $lo = Auth::user();

        if ($lo->hasRole(['LO Puzzle Pos 1|LO Puzzle Pos 2a|LO Puzzle Pos 2b|LO Puzzle Pos 3a|LO Puzzle Pos 3b|LO Puzzle Pos 4a|LO Puzzle Pos 4b|LO Puzzle Pos 5'])) {
            return view('dashboard.lo_puzzle.index', [
                'pos' => Pos::all(),
                'puzzle' => Puzzle::all(),
                'teams' => Team::all()
            ]);
        }elseif ($lo->hasRole(['LO Rally Pos 1|LO Rally Pos 2|LO Rally Pos 3|LO Rally Pos 4|LO Rally Pos 5|LO Rally Pos 6|LO Rally Pos 7|LO Rally Pos 8|LO Rally Pos 9|LO Rally Pos 10|LO Rally Pos 11|LO Rally Pos 12|LO Rally Pos 13|LO Rally Pos 14|LO Rally Pos 15|LO Rally Pos 16|LO Rally Pos 17|LO Rally Pos 18'])) {
            return view('dashboard.lo_rally.index', [
                'pos' => Pos::all(),
                'puzzle' => Puzzle::all(),
                'teams' => Team::all()
            ]);
        }else{
            return redirect('/');
        }

    }

    public function globalTimer(){
        $lo = Auth::user();
        $globalTimer = GlobalTimer::orderBy('id', 'desc')->first();

        if (empty($globalTimer)) {
            if ($lo->hasRole(['LO Puzzle Pos 1|LO Puzzle Pos 2a|LO Puzzle Pos 2b|LO Puzzle Pos 3a|LO Puzzle Pos 3b|LO Puzzle Pos 4a|LO Puzzle Pos 4b|LO Puzzle Pos 5'])) {
                return view('dashboard.lo_puzzle.gamestart');
            }elseif ($lo->hasRole(['LO Rally Pos 1|LO Rally Pos 2|LO Rally Pos 3|LO Rally Pos 4|LO Rally Pos 5|LO Rally Pos 6|LO Rally Pos 7|LO Rally Pos 8|LO Rally Pos 9|LO Rally Pos 10|LO Rally Pos 11|LO Rally Pos 12|LO Rally Pos 13|LO Rally Pos 14|LO Rally Pos 15|LO Rally Pos 16|LO Rally Pos 17|LO Rally Pos 18'])) {
                return view('dashboard.lo_rally.gamestart');
            }else{
                return redirect('/');
            }
        }else{
            return redirect('/');
        }

    }

    public function globalTimerStop(){
        $lo = Auth::user();
        $globalTimer = GlobalTimer::orderBy('id', 'desc')->first();

        if (!empty($globalTimer)) {
            if ($lo->hasRole(['LO Puzzle Pos 1|LO Puzzle Pos 2a|LO Puzzle Pos 2b|LO Puzzle Pos 3a|LO Puzzle Pos 3b|LO Puzzle Pos 4a|LO Puzzle Pos 4b|LO Puzzle Pos 5'])) {
                return view('dashboard.lo_puzzle.gamestop');
            }elseif ($lo->hasRole(['LO Rally Pos 1|LO Rally Pos 2|LO Rally Pos 3|LO Rally Pos 4|LO Rally Pos 5|LO Rally Pos 6|LO Rally Pos 7|LO Rally Pos 8|LO Rally Pos 9|LO Rally Pos 10|LO Rally Pos 11|LO Rally Pos 12|LO Rally Pos 13|LO Rally Pos 14|LO Rally Pos 15|LO Rally Pos 16|LO Rally Pos 17|LO Rally Pos 18'])) {
                return view('dashboard.lo_rally.gamestop');
            }else{
                return redirect('/');
            }
        }else{
            return redirect('/');
        }

    }
}
