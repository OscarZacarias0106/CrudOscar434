<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\EstudianteController;
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

//Ruta de la lista
Route::get('/', [EstudianteController::class,'listaStuden']);

//Ruta de formulario
Route::get('/formStuden', [EstudianteController::class, 'formStuden']);

//Ruta para guardar
Route::post('/Estudiante/formStuden', [EstudianteController::class, 'saveStuden'])->name('Estudiante.saveStuden');

//Ruta de formulario de editar
Route::patch('/edit.form/{carne}', [EstudianteController::class, 'editFormS'])->name('editFormS');

//Ruta de edicion
Route::patch('/edit/{carne}', [EstudianteController::class, 'editStuden'])->name('editStuden');

//Ruta para eliminar
Route::delete('/delete/{carne}', [EstudianteController::class, 'destroy'])->name('delete');

//Ruta unica de la Tabla Categoria
Route::resource('categoria', CategoriaController::class);
