<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PeminjamController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JenisBukuController;

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
    return redirect('/login');
});

// login route
Route::get('/login',[LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class,'authentication']);
// ====================================================================

Route::middleware(['auth'])->group(function () {
    // add-buku route
    Route::get('/add-buku',[Bukucontroller::class,'jenis']);
    Route::post('/add-buku',[Bukucontroller::class,'create']);
    // daftar buku route
    Route::get('/daftar-buku',[BukuController::class,'index']);
    // edit buku route
    Route::get('/edit/{id}',[BukuController::class,'edit']);
    // update buku route
    Route::post('/update-buku',[BukuController::class,'update']);
    // delete buku route
    Route::get('/delete/{id}',[BukuController::class,'destroy']);
    // dashboard route
    Route::get('/dashboard',[DashboardController::class,'index']);
    // daftar jenis buku route
    Route::get('/daftar-jenis',[JenisBukuController::class,'index']);
    // add jenis buku route
    Route::get('/add-jenis',[JenisBukucontroller::class,'create']);
    // post add jenis buku route
    Route::post('/add-jenis',[JenisBukucontroller::class,'store']);
    // delete jenis buku route
    Route::get('/delete-jenis/{id}',[JenisBukucontroller::class,'destroy']);
    // daftar peminjam buku route
    Route::get('/daftar-peminjam',[PeminjamController::class,'index']);
    // add peminjam route
    Route::get('/add-peminjam',[PeminjamController::class,'create']);
    // post add peminjam route
    Route::post('/add-peminjam' ,[PeminjamController::class,'store']);
    // edit peminjam route
    Route::get('/peminjam-edit/{peminjam}' ,[PeminjamController::class,'edit']);
    // delete peminjam route
    Route::get('/peminjam-delete/{peminjam}' ,[PeminjamController::class,'destroy']);
    // update peminjam route
    Route::post('/update-peminjam' ,[PeminjamController::class,'update']);

    // logout route
    Route::get('/logout',[LoginController::class,'logout']);
});