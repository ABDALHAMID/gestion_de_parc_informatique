<?php

use App\Http\Controllers\MaterielController;
use App\Http\Controllers\MarqueController;
use App\Http\Controllers\ModèleController;
use App\Http\Controllers\PortController;
use App\Models\Port;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('materiel.index');
// });
Route::resource('/', MaterielController::class);
Route::resource('dashboard', MaterielController::class);
Route::resource('Materiel', MaterielController::class);
Route::resource('PortController', PortController::class);

Route::put('/materiel/{materielid}/modify', [MaterielController::class,'modify'])->name('materiel.modify');

Route::get('/listMateriel', [MaterielController::class, 'listMateriel'])->name('listMateriel');
Route::post('/search', [MaterielController::class, 'search'])->name('materiel.search');


Route::get('/marques', [MarqueController::class, 'getMarquesByMaterielType']);
Route::get('/modeles', [ModèleController::class, 'getModelesByMarque']);
Route::delete('/port/{portID}/drop', [PortController::class, 'drop'])->name('port.drop');
Route::get('/materiel/drop/{ID}', [MaterielController::class, 'drop'])->name('materiel.drop');
