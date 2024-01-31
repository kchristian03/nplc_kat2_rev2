<?php

namespace App\Http\Controllers;

use App\Events\Mid;
use App\Events\Won;
use App\Events\Lost;
use App\Models\Team;
use App\Models\User;
use App\Models\Puzzle;
use App\Events\StartTimer;
use App\Models\BonusScore;
use App\Events\StartPuzzle;
use App\Models\GlobalTimer;
use Illuminate\Http\Request;
use App\Models\PuzzleCompletion;
use App\Http\Requests\StorePuzzleRequest;
use App\Http\Requests\UpdatePuzzleRequest;

class PuzzleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //get all puzzle with search
        $table_data = Puzzle::where('pos_name', 'like', '%' . request('search') . '%')
            ->orWhere('room', 'like', '%' . request('search') . '%')
            ->orWhere('pos_code', 'like', '%' . request('search') . '%')
            ->withTrashed()
            ->paginate(10);
        return view('dashboard.committee.pos_puzzle.index', compact('table_data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.committee.pos_puzzle.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePuzzleRequest $request)
    {
        Puzzle::create([
            'pos_code' => $request->pos_code,
            'pos_name' => $request->pos_name,
            'room' => $request->room,
            'score_won' => $request->score_won,
            'score_lost' => $request->score_lost,
            'score_mid' => $request->score_mid,
            'code_won' => $request->code_won,
            'code_lost' => $request->code_lost,
            'code_mid' => $request->code_mid,
            'entry_coin' => $request->entry_coin,
            'entry_exp' => $request->entry_exp,
            'forfitable' => $request->forfitable,
            'max_team' => $request->max_team,
            'time' => $request->time,
            'pic_committee' => $request->pic_committee,
        ]);
        return redirect()->route('puzzle.index')->with('success', 'Puzzle created successfully');
    }

    /**
     * Display the specified resource.
     */

    public function show2(Puzzle $data)
    {
        return view('dashboard.committee.pos_puzzle.show', compact('data'));
    }

    public function show(Puzzle $puzzle)
    {
        return view('dashboard.lo_puzzle.puzzledetail',[
            'puzzle'=>$puzzle,
            'teams'=>Team::where('progress',$puzzle->pos_code)->get(),
            "gameDuration"=> GlobalTimer::orderBy('id','DESC')->first()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Puzzle $data)
    {
        return view('dashboard.committee.pos_puzzle.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePuzzleRequest $request, Puzzle $data)
    {
        $data->update([
            'pos_code' => $request->pos_code,
            'pos_name' => $request->pos_name,
            'room' => $request->room,
            'score_won' => $request->score_won,
            'score_lost' => $request->score_lost,
            'score_mid' => $request->score_mid,
            'code_won' => $request->code_won,
            'code_lost' => $request->code_lost,
            'code_mid' => $request->code_mid,
            'entry_coin' => $request->entry_coin,
            'entry_exp' => $request->entry_exp,
            'forfitable' => $request->forfitable,
            'max_team' => $request->max_team,
            'time' => $request->time,
            'pic_committee' => $request->pic_committee,
        ]);
        return redirect()->route('puzzle.index')->with('success', 'Puzzle updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Puzzle $data)
    {
        $data->delete();
        return redirect()->route('puzzle.index')->with('success', 'Puzzle deleted successfully');
    }

    /**
     * Restore the specified resource from storage.
     */
    public function restore($id)
    {
        Puzzle::withTrashed()->where('id', $id)->restore();
        return redirect()->route('puzzle.index')->with('success', 'Puzzle restored successfully');
    }

    public function startTimer(Request $request){
        broadcast(new StartTimer($request->userId))->toOthers();
        return response()->json(['message' => 'Timer started successfully']);;
    }

    public function play(Puzzle $puzzle, User $player)
    {

        if($player->team->coin >= $puzzle->entry_coin && $player->team->exp >= $puzzle->entry_exp){

            broadcast(new StartPuzzle($puzzle, $player));
            return view('dashboard.lo_puzzle.puzzle',[
                'puzzle'=> $puzzle,
                'player'=> $player
            ]);
        }
    }

    public function puzzleWon(Request $request){
        $puzzle = Puzzle::where('id',$request->puzzle)->first();
        $team = Team::where('user_id',$request->userId)->first();

        $pos = $request->puzzle;

        $newCoin = $team->coin - $puzzle->entry_coin;

        $progress_story = $puzzle->pos_code."GOOD";

        PuzzleCompletion::create([
            'team_id'=> $team->id,
            'puzzle'=> $puzzle->pos_code
        ]);

        $puzzlesection = preg_replace("/[^0-9]/", "", $puzzle->pos_code);
        if (!empty($puzzlesection)) {
            $code = (int) $puzzlesection;
            $completions = count(PuzzleCompletion::where('puzzle', 'LIKE', '%' . $code . '%')->get());
            $bonus = ($completions > 0) ? BonusScore::find($completions) : null;
        }

        $newScore = $team->score + $puzzle->score_won + (($bonus !== null) ? $bonus->$code : 0);

        $team->update([
            'score'=> $newScore,
            'progress'=> $puzzle->code_won,
            'coin'=>$newCoin,
            'progress_story'=>$progress_story
        ]);

        broadcast(new Won($request->userId, $pos))->toOthers();
        return response()->json(['message' => 'Puzzle won successfully']);
    }

    public function puzzleLost(Request $request){

        $puzzle = Puzzle::where('id',$request->puzzle)->first();
        $team = Team::where('user_id',$request->userId)->first();

        $pos = $request->puzzle;

        $newCoin = $team->coin - $puzzle->entry_coin;
        $progress_story = $puzzle->pos_code."BAD";

        PuzzleCompletion::create([
            'team_id'=> $team->id,
            'puzzle'=> $puzzle->pos_code
        ]);

        $puzzlesection = preg_replace("/[^0-9]/", "", $puzzle->pos_code);
        if (!empty($puzzlesection)) {
            $code = (int) $puzzlesection;
            $completions = count(PuzzleCompletion::where('puzzle', 'LIKE', '%' . $code . '%')->get());
            $bonus = ($completions > 0) ? BonusScore::find($completions) : null;
        }

        $newScore = $team->score + $puzzle->score_lost + (($bonus !== null) ? $bonus->$code : 0);

        $team->update([
            'score'=> $newScore,
            'progress'=> $puzzle->code_lost,
            'coin'=>$newCoin,
            'progress_story'=>$progress_story
        ]);

        broadcast(new Lost($request->userId, $pos))->toOthers();
        return response()->json(['message' => 'Puzzle lost successfully']);
    }

    public function puzzleMid(Request $request){

        $puzzle = Puzzle::where('id',$request->puzzle)->first();
        $team = Team::where('user_id',$request->userId)->first();

        $pos = $request->puzzle;

        $newCoin = $team->coin - $puzzle->entry_coin;
        $progress_story = $puzzle->pos_code."MID";

        PuzzleCompletion::create([
            'team_id'=> $team->id,
            'puzzle'=> $puzzle->pos_code
        ]);

        $puzzlesection = preg_replace("/[^0-9]/", "", $puzzle->pos_code);
        if (!empty($puzzlesection)) {
            $code = (int) $puzzlesection;
            $completions = count(PuzzleCompletion::where('puzzle', 'LIKE', '%' . $code . '%')->get());
            $bonus = ($completions > 0) ? BonusScore::find($completions) : null;
        }

        $newScore = $team->score + $puzzle->score_mid + (($bonus !== null) ? $bonus->$code : 0);

        $team->update([
            'score'=> $newScore,
            'progress'=> $puzzle->code_mid,
            'coin'=>$newCoin,
            'progress_story'=>$progress_story
        ]);

        broadcast(new Mid($request->userId, $pos))->toOthers();
        return response()->json(['message' => 'Puzzle mid successfully']);
    }
}


