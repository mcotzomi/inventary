<?php

use App\Http\Controllers\BasuraController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\AltaController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
    //return 'hola mundo';
});
Route::get('area/{area}/ver', [AreaController::class, 'show'])->name('area.show');
Route::get('area/registrar', [AreaController::class, 'create'])->name('area.create');
Route::post('area/guardar', [AreaController::class, 'store'])->name('area.store');
Route::get('area/listar', [AreaController::class, 'index'])->name('area.index');
Route::get('area/{area}/editar', [AreaController::class, 'edit'])->name('area.edit');
Route::put('area/{area}/actualizar', [AreaController::class, 'update'])->name('area.update');
Route::delete('area/{area}/eliminar', [AreaController::class, 'destroy'])->name('area.destroy');

Route::get('basura/{basura}/ver', [BasuraController::class, 'show'])->name('basura.show');
Route::get('basura/registrar', [BasuraController::class, 'create'])->name('basura.create');
Route::post('basura/guardar', [BasuraController::class, 'store'])->name('basura.store');
Route::get('basura/listar', [BasuraController::class, 'index'])->name('basura.index');


Route::get('alta/registrar', [AltaController::class, 'create'])->name('alta.create');
Route::post('alta/guardar', [AltaController::class, 'store'])->name('alta.store');
Route::get('alta/listar', [AltaController::class, 'index'])->name('alta.index');


Route::get('user/registrar', [UserController::class, 'create'])->name('user.create');
Route::post('user/guardar', [UserController::class, 'store'])->name('user.store');
Route::get('user/listar', [UserController::class, 'index'])->name('user.index');


