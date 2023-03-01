<?php

use App\Http\Controllers\ToutLesBateaux;
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
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/horaires', function () {
    return view('horaire');
});



    Route::get('/tarifs', function () {
    return view('tarifs');
});

Route::get('/toutLesBateaux', [ToutLesBateaux::class , 'Bateauxrecherche'])->name('Bateauxrecherche');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
