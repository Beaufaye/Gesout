<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\EnseignantController;
use App\Http\Controllers\DemandeController;
use App\Http\Controllers\SoutenanceController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::resource('etudiant', EtudiantController::class);
Route::get('supprim-etudiant/{id}', [EtudiantController::class, 'destroy']);

Route::resource('enseignant', EnseignantController::class);
Route::get('supprim-enseignant/{id}', [EnseignantController::class, 'destroy']);

Route::resource('demande', DemandeController::class);
Route::get('supprim-demande/{id}', [DemandeController::class, 'destroy']);

Route::resource('soutenance', SoutenanceController::class);