<?php

use App\Http\Controllers\CalcoloController;
use App\Http\Controllers\PageController;
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
