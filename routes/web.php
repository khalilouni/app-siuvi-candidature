<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CandidatureController;
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



Route::get('/', [CandidatureController::class , 'index'])->name('Candidatures');
Route::get('/home', [CandidatureController::class , 'index'])->name('Candidatures');


Route::get('/about-me', function () {
    return view('aboutMe');
});

Route::get('/ajout-candidature', function () {
    return view('ajoutCandidature');
});
