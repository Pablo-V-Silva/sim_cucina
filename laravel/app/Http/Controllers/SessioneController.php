<?php

namespace App\Http\Controllers;

use App\Models\Sessione;
use App\Http\Requests\StoreSessioneRequest;
use App\Http\Requests\UpdateSessioneRequest;
use Illuminate\Support\Facades\Auth;

class SessioneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sessioni = Auth::user()->sessioni;
        /* dd($sessioni); */
        return view('authenticated.sessioni.index', compact('sessioni'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sessione  $sessione
     * @return \Illuminate\Http\Response
     */
    public function show(Sessione $sessione)
    {
        return view('authenticated.sessioni.show', compact('sessione'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sessione  $sessione
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sessione $sessione)
    {
        $sessione->delete();
        return redirect()->back()->with(session()->flash('success', 'La sessione è stata eliminata con successo'));
    }
}
