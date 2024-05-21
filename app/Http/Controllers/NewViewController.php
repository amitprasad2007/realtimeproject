<?php

namespace App\Http\Controllers;

use App\Models\NewView;
use App\Http\Requests\StoreNewViewRequest;
use App\Http\Requests\UpdateNewViewRequest;

class NewViewController extends Controller
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
    public function store(StoreNewViewRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(NewView $newView)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NewView $newView)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNewViewRequest $request, NewView $newView)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NewView $newView)
    {
        //
    }
}
