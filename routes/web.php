<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BurgerController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\LavoratoriController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get('/lavoratori/chi-siamo', [LavoratoriController::class, 'burger'])->name('chi-siamo');

Route::get('/lavoratori/panini', [LavoratoriController::class, 'cibo'])->name('panini');


Route::post('/welcome', [LavoratoriController::class, 'vostriPanini'])->name('vostri.panini');



Route::get('/burger/create', [BurgerController::class, 'create'])->name('burger.create');
Route::post('/burger/store', [BurgerController::class, 'store'])->name('burger.store');
Route::get('/burger/index', [BurgerController::class, 'index'])->name('burger.index');
