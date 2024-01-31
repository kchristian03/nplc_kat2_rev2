<?php

namespace App\Http\Controllers;

use App\Models\GlobalTimer;
use App\Http\Requests\StoreGlobalTimerRequest;
use App\Http\Requests\UpdateGlobalTimerRequest;

class GlobalTimerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGlobalTimerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(GlobalTimer $globalTimer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GlobalTimer $globalTimer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGlobalTimerRequest $request, GlobalTimer $globalTimer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GlobalTimer $globalTimer)
    {
        //
    }
}
