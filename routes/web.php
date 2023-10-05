<?php

use App\Http\Controllers\AuthenController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\EnseignantController;
use App\Http\Controllers\DemandeController;
use App\Http\Controllers\SoutenanceController;
use App\Http\Controllers\DmController;
use App\Http\Controllers\JuryController;
use App\Http\Controllers\MaitrestageController;
use App\Http\Controllers\SallesController;
use App\Http\Controllers\DashboardController;

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

Route::post('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

Route::post('login', [AuthenController::class, 'login'])
    ->name('login');

Route::post('authenticate', [AuthenController::class, 'authenticate'])->name('authenticate');

Route::post('logout', [AuthenController::class, 'logout'])
    ->name('logout');

Route::resource('etudiant', EtudiantController::class);
Route::get('supprim-etudiant/{id}', [EtudiantController::class, 'destroy']);

Route::resource('enseignant', EnseignantController::class);
Route::get('supprim-enseignant/{id}', [EnseignantController::class, 'destroy']);

Route::resource('demande', DemandeController::class);
Route::get('supprim-demande/{id}', [DemandeController::class, 'destroy']);

Route::resource('dm', DmController::class);
Route::get('supprim-dm/{id}', [DmController::class, 'destroy']);


Route::resource('jury', JuryController::class);
Route::get('supprim-jury/{id}', [JuryController::class, 'destroy']);

Route::resource('salle', SallesController::class);

Route::resource('ms', MaitrestageController::class);
Route::get('supprim-ms/{id}', [MaitrestageController::class, 'destroy']);

Route::resource('soutenance', SoutenanceController::class);
Route::get('supprim-sout/{id}', [SoutenanceController::class, 'destroy']);