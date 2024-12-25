<?php

use App\Http\Controllers\GuruController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MuridController;
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

Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('login/', [LoginController::class, 'authenticate']);
Route::post('logout/', [LoginController::class, 'logout']);

Route::group(['middleware' => 'auth'], function () {
    Route::get('/kelas/data', [KelasController::class, 'data'])->name('kelas.data');
    Route::resource('/kelas', KelasController::class);

    Route::get('/guru/data', [GuruController::class, 'data'])->name('guru.data');
    Route::resource('/guru', GuruController::class);

    Route::get('/murid/data', [MuridController::class, 'data'])->name('murid.data');
    Route::resource('/murid',   MuridController::class);

    Route::get('/list', [ListController::class, 'index']);
    Route::get('/list/data-murid', [ListController::class, 'dataMurid'])->name('murid-guru.data-murid');
    Route::get('/list/data-guru', [ListController::class, 'dataGuru'])->name('murid-guru.data-guru');
});