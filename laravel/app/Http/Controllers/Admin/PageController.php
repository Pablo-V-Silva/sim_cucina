<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function index(){
        $users = DB::table('users')->count();
        $sessioni = DB::table('sessiones')->count();
        return view('admin.admin', compact('users', 'sessioni'));
    }
}
