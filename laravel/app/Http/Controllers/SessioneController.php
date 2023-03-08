<?php

namespace App\Http\Controllers;

use App\Models\Sessione;
use App\Http\Requests\StoreSessioneRequest;
use App\Http\Requests\UpdateSessioneRequest;

class SessioneController extends Controller
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
     * @param  \App\Http\Requests\StoreSessioneRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSessioneRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sessione  $sessione
     * @return \Illuminate\Http\Response
     */
    public function show(Sessione $sessione)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sessione  $sessione
     * @return \Illuminate\Http\Response
     */
    public function edit(Sessione $sessione)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSessioneRequest  $request
     * @param  \App\Models\Sessione  $sessione
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSessioneRequest $request, Sessione $sessione)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sessione  $sessione
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sessione $sessione)
    {
        //
    }
}
