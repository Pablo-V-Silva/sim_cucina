<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Sessione;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessioneApi extends Controller
{
    public function createSessione(Request $request){
        $validate = $request->validate([
            'userId' => 'required',
            'sessionToken' => 'required',
            'combustibile' => 'required',
            'persone' => 'required',
            'tipoCons' => 'required'
        ]);
        $user = Auth::user($validate['userId']);
        if($validate['sessionToken'] !== $user->remember_token) {
            return;
        }

        $sessione = new Sessione();
        $sessione->user_id = $user->id;
        $sessione->combustibile_id = $validate['combustibile'];
		$sessione->persone = $validate['persone'];
		$sessione->tipoconsumo = $validate['tipoCons'];
		/* dd($sessione); */
		$sessione->save();

        return;
    }
}
