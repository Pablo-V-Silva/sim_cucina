<?php

namespace App\Http\Controllers;

use App\Models\Combustibile;
use App\Http\Requests\StoreCombustibileRequest;
use App\Http\Requests\UpdateCombustibileRequest;

class CombustibileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCombustibileRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCombustibileRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Combustibile  $combustibile
     * @return \Illuminate\Http\Response
     */
    public function show(Combustibile $combustibile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Combustibile  $combustibile
     * @return \Illuminate\Http\Response
     */
    public function edit(Combustibile $combustibile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCombustibileRequest  $request
     * @param  \App\Models\Combustibile  $combustibile
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCombustibileRequest $request, Combustibile $combustibile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Combustibile  $combustibile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Combustibile $combustibile)
    {
        //
    }
}
