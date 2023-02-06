<?php

namespace App\Http\Controllers;

use App\Models\Combustibile;
use App\Models\Consumo;
use Illuminate\Http\Request;

class CalcoloController extends Controller
{
    public function calcoloCucina(Request $request){
        /* dd($request->quantita); */
        $persone = $request->numeroPersone;
        $quantita = $request->quantita;
        $tipo = $request->tipoCombustibile;
        $consumo = Consumo::where([['combustibile_id', '=', $tipo],['tipoconsumo', '=', $quantita]])->first();
        $cons_giornaliero = $consumo->id;
        $cons_tot_giornaliero = $cons_giornaliero * $persone;
        $spesa_tot_giornaliera = $cons_tot_giornaliero * $consumo->combustibile->costo1kwhnetto;
        $is_calc = true;
        $combustibili = Combustibile::all();
        return view('home', compact('cons_tot_giornaliero', 'is_calc', 'combustibili', 'persone', 'spesa_tot_giornaliera'))->with(session()->flash('success', 'calcolo esegioto con successo'));
    }
}
