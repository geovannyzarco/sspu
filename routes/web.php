<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\CargoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CompesadoController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\EstadoCompesadoController;
use App\Http\Controllers\EstadoPermisoController;
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\PermisoController;
use App\Http\Controllers\TipoController;
use App\Http\Controllers\TipoPermisoController;
use App\Models\Categoria;
use App\Models\EstadoPermiso;
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

Route::get('/', function () {
    return view('welcome');
});


Route::resource('areas', AreaController::class);
Route::resource('cargos', CargoController::class);
Route::resource('categorias', CategoriaController::class);
Route::resource('tipo_permisos', TipoPermisoController::class);
Route::resource('estado_permiso', EstadoPermisoController::class);
Route::resource('estado_compensado', EstadoCompesadoController::class);
Route::resource('tipos', TipoController::class);
Route::resource('horarios', HorarioController::class);
Route::resource('empleados', EmpleadoController::class);
Route::resource('Compensados', CompesadoController::class);
Route::resource('Permisos', PermisoController::class);
