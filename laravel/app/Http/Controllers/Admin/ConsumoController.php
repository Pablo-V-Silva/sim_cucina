<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Combustibile;
use App\Models\Consumo;
use Illuminate\Http\Request;

class ConsumoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consumo = Consumo::all();
        return view('admin.consumo.index', compact('consumo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $combustibili = Combustibile::all();
        return view('admin.consumo.create', compact('combustibile'));
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
            'combustibile_id' => 'required',
            'unitaConsumate' => 'required',
            'tipoConsumo' => 'required',
        ]);

        $consumo = new Consumo();
        $consumo->combustibile_id = $validate['combustibile_id'];
        $consumo->unitaConsumate = $validate['unitaConsumate'];
        $consumo->tipoConsumo = $validate['tipoConsumo'];
        $consumo->save();

        return view('admin.consumo.index')->with(session()->flash('success', 'Consumo creato con successo'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Consumo $consumo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Consumo $consumo)
    {
        return view('admin.consumo.edit', compact('consumo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Consumo $consumo)
    {
        $validate = $request->validate([
            'combustibile_id' => 'required',
            'unitaConsumate' => 'required',
            'tipoConsumo' => 'required',
        ]);

        $consumo->update($validate);
        return redirect('admin.consumo.index')->with(session()->flash('success', 'Consumo aggiornato con successo'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Consumo $consumo)
    {
        $consumo->delete();
        return view('admin.consumo.index')->with(session()->flash('success', 'Consumo eliminato con successo'));
    }
}
