<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Combustibile;
use App\Models\Consumo;
use Illuminate\Http\Request;

class CalcoloApi extends Controller
{
    public function getData(){
        $combustibili = Combustibile::all();
        return compact('combustibili');
    }


    public function calcCons($tipocomb, $persone, $tipo){
        $consumo = Consumo::where([['combustibile_id', '=', $tipocomb], ['tipoconsumo', '=', $tipo]])->first();
        $cons_giornaliero = number_format($consumo->unitaconsumate / 7, 2, '.', '');
        $cons_tot_giornaliero = number_format($cons_giornaliero * $persone, 2);
        $spesa_tot_giornaliera = number_format($cons_tot_giornaliero * $consumo->combustibile->costo1kwhnetto, 2);
        return compact('spesa_tot_giornaliera', 'cons_tot_giornaliero');
    }
}
