<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ProfilSekolahController;
use App\Http\Controllers\FasilitasController;
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
    return view('home');
});
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/postlogin', [AuthController::class, 'postlogin']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/profile', [ProfilSekolahController::class, 'index']);
Route::get('/fasilitas', [FasilitasController::class, 'index']);

Route::group(['middleware' => ['auth', 'CheckRole:admin']], function(){

    Route::get('/siswa', [SiswaController::class, 'index']);
    Route::post('/siswa/create', [SiswaController::class, 'create']);
    Route::get('/siswa/{id}/edit', [SiswaController::class, 'edit']);
    Route::post('/siswa/{id}/update', [SiswaController::class, 'update']);
    Route::get('/siswa/{id}/delete', [SiswaController::class, 'delete']);
    Route::get('/siswa/{id}/profile', [SiswaController::class, 'profile']);
    Route::get('/guru', [GuruController::class, 'index']);
    Route::post('/guru/create', [GuruController::class, 'create']);
    Route::get('/guru/{id}/edit', [GuruController::class, 'edit']);
    Route::post('/guru/{id}/update', [GuruController::class, 'update']);
    Route::get('/guru/{id}/delete', [GuruController::class, 'delete']);
    Route::get('/guru/{id}/profile', [GuruController::class, 'profile']);
    Route::get('/mapel', [MapelController::class, 'index']);
    Route::post('/mapel/create', [MapelController::class, 'create']);
    Route::get('/mapel/{id}/edit', [MapelController::class, 'edit']);
    Route::post('/mapel/{id}/update', [MapelController::class, 'update']);
    Route::get('/mapel/{id}/delete', [MapelController::class, 'delete']);
    Route::get('/berita', [BeritaController::class, 'index']);
    Route::post('/berita/create', [BeritaController::class, 'create']);
    Route::get('/berita/{id}/edit', [BeritaController::class, 'edit']);
    Route::post('/berita/{id}/update', [BeritaController::class, 'update']);
    Route::get('/berita/{id}/delete', [BeritaController::class, 'delete']);
    Route::get('/berita/{id}/gambar', [BeritaController::class, 'gambar']);

});
Route::group(['middleware' => ['auth', 'CheckRole:admin,guru']], function(){
Route::get('/siswa', [SiswaController::class, 'index']);
Route::get('/siswa/{id}/profile', [SiswaController::class, 'profile']);
Route::post('/siswa/{id}/addnilai', [SiswaController::class, 'addnilai']);
Route::get('/siswa/{id}/{idmapel}/deletenilai', [SiswaController::class, 'deletenilai']);
});

Route::group(['middleware' => ['auth', 'CheckRole:admin,siswa,guru']], function(){
    Route::get('/dashboard', [DashboardController::class, 'index']);
});
