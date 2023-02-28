<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Combustibile;
use Illuminate\Http\Request;

class CalcoloApi extends Controller
{
    public function getData(){
        $combustibili = Combustibile::all();
        return compact('combustibili');
    }
}
