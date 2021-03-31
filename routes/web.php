<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CitaController;
use App\Http\Controllers\ConsultaController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/users/create', [UsuarioController::class, 'create'])->name('users.create');
Route::post('/users/store', [UsuarioController::class, 'store'])->name('users.store');
Route::get('/users', [UsuarioController::class, 'index'])->name('users.index');
Route::get('/users/show/{user}', [UsuarioController::class, 'show'])->name('users.show');
Route::get('/users/edit/{user}', [UsuarioController::class, 'edit'])->name('users.edit');
Route::put('/users/update/{user}', [UsuarioController::class, 'update'])->name('users.update');

//Route::resource('/persona', PersonaController::class);
//Route::get('/personas/index', [PersonaController::class, 'create'])->name('personas.index');

Route::get('/personas', [PersonaController::class, 'index'])->name('personas.index');
Route::get('/personas/create', [PersonaController::class, 'create'])->name('personas.create');
Route::post('/personas/store', [PersonaController::class, 'store'])->name('personas.store');
Route::get('/personas/show/{persona}', [PersonaController::class, 'show'])->name('personas.show');
Route::get('/personas/edit/{persona}', [PersonaController::class, 'edit'])->name('personas.edit');
Route::put('/personas/update/{persona}', [PersonaController::class, 'update'])->name('personas.update');

Route::get('/personas/consulta/{persona}', [ConsultaController::class, 'create'])->name('consulta.create');
Route::put('/personas/consulta/store/{persona}', [ConsultaController::class, 'store'])->name('consulta.store');

Route::get('/citas/pendientes', [ConsultaController::class, 'show'])->name('consulta.show');
Route::get('/citas/pendientes/receta/{cita}', [ConsultaController::class, 'edit'])->name('consulta.receta');
Route::post('/citas/pendientes/update/{cita}', [ConsultaController::class, 'update'])->name('consulta.update');


Route::get('/citas/pdf/{cita}', [ConsultaController::class, 'pdfReceta'])->name('consulta.pdfReceta');

Route::get('/citas/{persona}',[CitaController::class, 'create'])->name('citas.create');
Route::post('/citas/store/{persona}', [CitaController::class, 'store'])->name('citas.store');
Route::get('/citas', [CitaController::class, 'index'])->name('citas.index');
Route::get('/citas/cita/{cita}', [CitaController::class, 'show'])->name('citas.show');
 

/*Route::get('/pdf', function () {
    $pdf = PDF::loadView('citas.pdf');
    return $pdf->download('archivo.pdf');
})->name('create.pdf');*/
