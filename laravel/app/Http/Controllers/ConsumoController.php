<?php

namespace App\Http\Controllers;

use App\Models\Consumo;
use App\Http\Requests\StoreConsumoRequest;
use App\Http\Requests\UpdateConsumoRequest;

class ConsumoController extends Controller
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
     * @param  \App\Http\Requests\StoreConsumoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreConsumoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Consumo  $consumo
     * @return \Illuminate\Http\Response
     */
    public function show(Consumo $consumo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Consumo  $consumo
     * @return \Illuminate\Http\Response
     */
    public function edit(Consumo $consumo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateConsumoRequest  $request
     * @param  \App\Models\Consumo  $consumo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateConsumoRequest $request, Consumo $consumo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Consumo  $consumo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Consumo $consumo)
    {
        //
    }
}
