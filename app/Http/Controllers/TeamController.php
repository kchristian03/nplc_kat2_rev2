<?php

namespace App\Http\Controllers;

use App\Models\Puzzle;
use App\Models\Story;
use App\Models\Team;
use App\Http\Requests\StoreTeamRequest;
use App\Http\Requests\UpdateTeamRequest;
use App\Models\User;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //get all teams with search
        $table_data = Team::where('name', 'like', '%' . request('search') . '%')
            ->withTrashed()
            ->paginate(10);
        return view('dashboard.committee.team.index', compact('table_data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //get user data for select option, with role user
        $users = User::whereHas('roles', function ($query) {
            $query->where('name', 'Player');
        })->get();

        //get puzzle data for select option
        $puzzles = Puzzle::all();

        //get story data for select option
        $stories = Story::all();

        return view('dashboard.committee.team.create', compact('users', 'puzzles', 'stories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTeamRequest $request)
    {
        Team::create([
            'name' => $request->name,
            'user_id' => $request->user_id,
            'score' => 0,
            'exp' => 0,
            'coin' => 0,
            'school' => $request->school,
            'progress' => '1',
            'progress_story' => '0',
        ]);

        return redirect()->route('teams.index')->with('success', 'Team created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Team $data)
    {
        return view('dashboard.committee.team.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Team $data)
    {
        //get user data for select option, with role user
        $users = User::whereHas('roles', function ($query) {
            $query->where('name', 'Player');
        })->get();

        //get puzzle data for select option
        $puzzles = Puzzle::all();

        //get story data for select option
        $stories = Story::all();

        return view('dashboard.committee.team.edit', compact('data', 'users', 'puzzles', 'stories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTeamRequest $request, Team $data)
    {
        $data->update([
            'name' => $request->name,
            'user_id' => $request->user_id,
            'score' => $request->score,
            'exp' => $request->exp,
            'coin' => $request->coin,
            'school' => $request->school,
            'progress' => $request->progress,
            'progress_story' => $request->progress_story,
        ]);

        return redirect()->route('teams.index')->with('success', 'Team updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $data)
    {
        $data->delete();
        return redirect()->route('teams.index')->with('success', 'Team deleted successfully.');
    }

    /**
     * Restore the specified resource from storage.
     */
    public function restore($id)
    {
        $team = Team::withTrashed()->findOrFail($id);
        $team->restore();
        return redirect()->route('teams.index')->with('success', 'Team restored successfully.');
    }
}
