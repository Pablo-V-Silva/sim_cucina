<?php

namespace App\Http\Controllers;

use App\Models\Combustibile;
use App\Models\User as ModelsUser;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
  public function home()
  {
    $combustibili = Combustibile::all();

    /* dd($combustibili); */
    $is_calc = false;
    return view('home', compact('combustibili', 'is_calc'));
  }
}
