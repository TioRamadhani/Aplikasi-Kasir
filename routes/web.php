<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\barangwebController;
use App\Http\Controllers\kategoriController;
use App\Http\Controllers\produkController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Route::get('/verifikasi/{email}', [AuthController::class, 'verifikasi']);
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('kategori', kategoriController::class);
// Route::get('kategori', [kategoriController::class, 'index']);
Route::get('/carikategori', [kategoriController::class, 'search'])->name('carikategori');
Route::get('/caribarang', [barangwebController::class, 'search'])->name('caribarang');
Route::resource('barang', barangwebController::class);
