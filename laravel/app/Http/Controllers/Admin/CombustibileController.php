<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Combustibile;
use Illuminate\Http\Request;

class CombustibileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $combustibili = Combustibile::all();
        return view('admin.combustibile.index', compact('combustibili'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.combustibile.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'tipo' => 'required',
            'poterecalorifero' => 'required',
            'costounitario' => 'required',
            'unitadimisura' => 'required',
            'costo1kwhlordo' => 'required',
            'costo1kwhnetto' => 'required',
            'resaconversione' => 'required',
        ]);

        if($request->tecnologia){
            $validate['tecnologia'] = $request->validate([
                'tecnologia' => 'required',
            ]);
        }

        Combustibile::create($validate);

        return view('admin.combustibile.index')->with(session()->flash('success', 'Combustibile creato con successo'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  Combustibile $combustibile
     * @return \Illuminate\Http\Response
     */
    public function show(Combustibile $combustibile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  Combustibile $combustibile
     * @return \Illuminate\Http\Response
     */
    public function edit(Combustibile $combustibile)
    {
        return view('admin.combustibile.edit', compact('combustibile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Combustibile $combustibile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Combustibile $combustibile)
    {
        $validate = $request->validate([
            'tipo' => 'required',
            'poterecalorifero' => 'required',
            'costounitario' => 'required',
            'unitadimisura' => 'required',
            'costo1kwhlordo' => 'required',
            'costo1kwhnetto' => 'required',
            'resaconversione' => 'required',
        ]);

        if($request->tecnologia){
            $validate['tecnologia'] = $request->validate([
                'tecnologia' => 'required',
            ]);
        }

        $combustibile->update($validate);

        return view('admin.combustibile.index')->with(session()->flash('success', 'Combustibile aggiornato con successo'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  Combustibile $combustibile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Combustibile $combustibile)
    {
        $combustibile->delete();

        return view('admin.combustibile.index')->with(session()->flash('success', 'Combustibile eliminato con successo'));
    }
}
