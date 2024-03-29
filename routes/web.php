<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Facultades;
use App\Http\Controllers\Programas;
use App\Http\Controllers\Estudiantes;
use App\Http\Controllers\Calificaciones;
use App\Http\Controllers\Profesores;

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

Route::get('/dashboard', [HomeController::class, 'index']);
Route::get('/facultades/listado', [Facultades::class, 'index'])->name('listadoFac');
Route::get('/facultades/registrar', [Facultades::class, 'form_registro']);
Route::post('/facultades/registrar', [Facultades::class, 'registrar']);
Route::get('/facultades/{id}/editar',[Facultades::class, 'editar'])->name('editarFac');
Route::get('/facultades/eliminar/{id}', [Facultades::class, 'eliminar'])->name('eliminaFac');
Route::patch('/facultades/{id}', [Facultades::class, 'actualizar'])->name('facultades.actualizar');
#--------------------------------------------------------------------------------------------
Route::get('/programas/listado', [Programas::class, 'index'])->name('listadoProg');
Route::get('/programas/registrar',[Programas::class, 'form_registro'])->name('programas.regitrar');
Route::post('/programas/registrar',[Programas::class, 'registrar']);
Route::get('/programas/eliminar/{id}', [Programas::class, 'eliminar'])->name('eliminaProg');
#-----------------------------------------------------------------------------
Route::get('/estudiantes/listado', [Estudiantes::class, 'index'])->name('listadoEst');
Route::get('/estudiantes/registrar',[Estudiantes::class, 'form_registro'])->name('estudiantes.regitrar');
Route::post('/estudiantes/registrar',[Estudiantes::class, 'registrar']);
Route::get('/estudiantes/eliminar/{id}',[Estudiantes::class, 'eliminar'])->name('eliminaEst');
#-----------------------------------------------------------------------------
Route::get('/profesores/listado', [Profesores::class, 'index'])->name('listadoProf');
Route::get('/profesores/registrar',[Profesores::class, 'form_registro'])->name('profesores.regitrar');
Route::post('/profesores/registrar',[Profesores::class, 'registrar']);
Route::get('/profesores/eliminar/{id}',[Profesores::class, 'eliminar'])->name('eliminaProf');
#-----------------------------------------------------------------------------
Route::get('/regnotas/listado', [Calificaciones::class, 'index']);







