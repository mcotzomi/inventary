<?php

use App\Http\Controllers\AreaController;
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

Route::get('area/resgitrar', [AreaController::class, 'create'])->name('area.create');
Route::post('area/guardar', [AreaController::class, 'store'])->name('area.store');

Route::get('area/listar', [AreaController::class, 'index'])->name('area.index');
Route::get('area/{area}/editar', [AreaController::class, 'edit'])->name('area.edit');