<?php

namespace App\Http\Controllers;

use App\Models\Combustibile;
use App\Models\Consumo;
use App\Models\Sessione;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CalcoloController extends Controller
{
	public function calcoloCucina(Request $request)
	{
		/* dd($request->quantita); */
		$persone = $request->numeroPersone;
		$quantita = $request->quantita;
		$tipo = $request->tipoCombustibile;
		$consumo = Consumo::where([['combustibile_id', '=', $tipo], ['tipoconsumo', '=', $quantita]])->first();
		$cons_giornaliero = number_format($consumo->unitaconsumate / 7, 2, '.', '');
		$cons_tot_giornaliero = $cons_giornaliero * $persone;
		$spesa_tot_giornaliera = number_format($cons_tot_giornaliero * $consumo->combustibile->costo1kwhnetto, 2);
		/* $spesa_tot_giornaliera = $cons_tot_giornaliero * $consumo->combustibile->costo1kwhnetto; */ 

		$is_calc = true;
		$combustibili = Combustibile::all();
		return view('home', compact('cons_tot_giornaliero', 'is_calc', 'combustibili', 'persone', 'spesa_tot_giornaliera', 'consumo'))->with(session()->flash('success', 'calcolo esegioto con successo'));
	}

	public function confrontaCucina(Request $request)
	{
		/* dd($request); */

		$validate = $request->validate([
			'consumo' => 'required',
			'persone' => 'required',
			'spesa' => 'required',
			'object' => 'required'
		]);

		$combustibili = Combustibile::all();

		/* $consumo = $validate['consumo'];
        $persone = $validate['persone'];
        $spesa = $validate['spesa'];
        $object = $validate['object']; */
		$confrontando = false;

		return view('confronta', compact('validate', 'combustibili', 'confrontando'));
	}

	public function calcoloConfronta(Request $request)
	{
		if ($request->confronto == 0) {
			return redirect()->back()->with(session()->flash('error', 'missing parameters'));
		}
		$vecchioCon = Consumo::find($request->oldConsumo);
		/* dd($vecchioCon); */
		$confronto = $request->confronto;
		$persone = $request->persone;
		/* dd($confronto); */
		$combustibili = Combustibile::all();

		$confrontato = Consumo::where([['combustibile_id', '=', $confronto], ['tipoconsumo', '=', $vecchioCon->tipoconsumo]])->first();
		/* dd($confrontato); */
		$confrontando = true;
		return view('confronta', compact('confrontato', 'vecchioCon', 'persone', 'confrontando', 'combustibili'));
	}

	public function startConfronto($combustibile , $persone, $tipoCons){
		if(!Auth::check()){
			return redirect()->route('register')->with(session()->flash('error', 'Devi essere registrato per poter confrontare'));
		}
		$comb = Combustibile::find($combustibile)->first();
		$user = Auth::user()->id;
		if(!$user || !$comb){
			return redirect()->back()->with(session()->flash('error', 'Parametri non validi, riprova.'));
		}
		$sessione = new Sessione();
		$sessione->user_id = $user;
		$sessione->combustibile_id = $combustibile;
		$sessione->persone = $persone;
		$sessione->tipoconsumo = $tipoCons;
		/* dd($sessione); */
		$sessione->save();

		return redirect()->route('vueConfronto');
	}
}
