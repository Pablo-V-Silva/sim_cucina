<?php

namespace App\Http\Controllers;

use App\Models\Combustibile;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        $combustibili = Combustibile::all();
        /* dd($combustibili); */
        $is_calc = false;
        return view('home', compact('combustibili', 'is_calc'));
    }

    public function redToConfrontoPage(){
        return view('vueConfronto');
    }

    public function profilo(){
        return view('authenticated.profile');
    }
}
