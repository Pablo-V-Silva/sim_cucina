<?php

use App\Http\Controllers\CalcoloController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SessioneController;
use App\Http\Middleware\Admin;
use GuzzleHttp\Psr7\Request;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('/calcola', [CalcoloController::class, 'calcoloCucina'])->name('calcola_cucina');

Route::get('/confronta', [CalcoloController::class, 'confrontaCucina'])->name('confronta_cucina');

Route::get('/calcola-confronto', [CalcoloController::class, 'calcoloConfronta'])->name('calcola_confronto');

Route::get('/sethome', function(){
    return view('set.home');
})->name('layoutHome');

Route::get('/vuetest', function(){
    return view('vueTest');
});

Auth::routes();

Route::get('/confronto', [PageController::class, 'redToConfrontoPage'])->name('vueConfronto');

Route::middleware('auth')->group(function(){
    Route::get('/conf-start/{combustibile}/{persone}/{tipoCons}', [CalcoloController::class, 'startConfronto'])->name('start-confronto');

    Route::resource('sessioni', SessioneController::class);

    Route::get('/profilo', [PageController::class, 'profilo'])->name('profilo');

    Route::get('/confronto', [PageController::class, 'vueConfronto'])->name('vueConfronto');

    Route::get('/cucina/calcolo', function(){
        return view('vueTest');
    })->name('cucina');

    Route::get('/cucina/{any}', function(){
        $user = Auth::user()->id;
        return view('vueTest', compact('user'));
    })->missing(function(){
        return route('cucina');
    });

    Route::middleware(Admin::class)->group(function(){
        Route::get('/test', function(){
            return view('set.test');
        });
    });
});


Route::get('/session', function(){
    $session = session('_token');
    dd($session);
});

Route::get('/ustest', function(){
    dd(Auth::user(2));
});
