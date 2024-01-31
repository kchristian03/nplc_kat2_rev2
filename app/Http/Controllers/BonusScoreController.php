<?php

namespace App\Http\Controllers;

use App\Models\BonusScore;
use App\Http\Requests\StoreBonusScoreRequest;
use App\Http\Requests\UpdateBonusScoreRequest;

class BonusScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //get all bonus score with serach
        $table_data = BonusScore::where('id', 'like', '%' . request('search') . '%')
            ->withTrashed()
            ->paginate(10);
        return view('dashboard.committee.bonus_score.index', compact('table_data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.committee.bonus_score.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBonusScoreRequest $request)
    {
        BonusScore::create([
            '1' => $request->pos1,
            '2' => $request->pos2,
            '3' => $request->pos3,
            '4' => $request->pos4,
            '5' => $request->pos5,
        ]);
        return redirect()->route('bonus_scores.index')->with('success', 'Bonus Score created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(BonusScore $data)
    {
        return view('dashboard.committee.bonus_score.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BonusScore $data)
    {
        return view('dashboard.committee.bonus_score.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBonusScoreRequest $request, BonusScore $data)
    {
        $data->update([
            '1' => $request->pos1,
            '2' => $request->pos2,
            '3' => $request->pos3,
            '4' => $request->pos4,
            '5' => $request->pos5,
        ]);
        return redirect()->route('bonus_scores.index')->with('success', 'Bonus Score updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BonusScore $data)
    {
        $data->delete();
        return redirect()->route('bonus_scores.index')->with('success', 'Bonus Score deleted successfully.');
    }

    /**
     * Restore the specified resource from storage.
     */
    public function restore($id)
    {
        BonusScore::onlyTrashed()->where('id', $id)->restore();
        return redirect()->route('bonus_scores.index')->with('success', 'Bonus Score restored successfully.');
    }
}
