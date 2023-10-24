<?php

use App\Models\Event;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormularioExpedienteController;
use App\Http\Controllers\dbFormularioController;


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

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');

    Route::get('/events/create', function () {
        return view('events-create');
    })->name('events.create');
    
    Route::post('/formulario-expediente', [FormularioExpedienteController::class, 'guardarFormulario']);

    Route::get('/formulario-expediente', [FormularioExpedienteController::class, 'mostrarFormulario']);

    Route::get('/formulario-exito', function () {
        return view('formularios.formulario-exito');
    })->name('formularios.formulario-exito');


    Route::view('admin/settings', 'formularios.dbFormulario');

    Route::get('/visualizar-datos', [dbFormularioController::class, 'mostrarDatos'])->name('visualizar-datos');


});
