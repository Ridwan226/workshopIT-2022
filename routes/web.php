<?php

use App\Http\Controllers\FakultasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;
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


Route::group(['middleware' => ['auth']], function () {

  Route::get('/home', [HomeController::class, 'index'])->name('home');

  // Routes Mahasiswa
  Route::get('/mahasiswa', [MahasiswaController::class, 'viewMahasiswa']);
  Route::get('/mahasiswa/add', [MahasiswaController::class, 'addMahasiswa']);
  Route::post('/mahasiswa/add', [MahasiswaController::class, 'storeMahasiswa']);
  Route::get('/mahasiswa/edit/{id}', [MahasiswaController::class, 'editMahasiswa']);
  Route::post('/mahasiswa/edit/{id}', [MahasiswaController::class, 'updateMahasiswa']);
  Route::get('/mahasiswa/delete/{id}', [MahasiswaController::class, 'deleteMahasiswa']);
  Route::get('/mahasiswa/detail/{id}', [MahasiswaController::class, 'detailMahasiswa']);

  // Routes Fakultas
  Route::get('/fakultas', [FakultasController::class, 'viewFakultas']);
  Route::get('/fakultas/add', [FakultasController::class, 'addFakultas']);
  Route::post('/fakultas/add', [FakultasController::class, 'storeFakultas']);
  Route::get('/fakultas/edit/{id}', [FakultasController::class, 'editFakultas']);
  Route::post('/fakultas/edit/{id}', [FakultasController::class, 'updateFakultas']);
  Route::get('/fakultas/delete/{id}', [FakultasController::class, 'deleteFakultas']);
  Route::get('/fakultas/detail/{id}', [FakultasController::class, 'detailFakultas']);
});
