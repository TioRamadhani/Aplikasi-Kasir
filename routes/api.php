<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\BarangController;
use App\Http\Controllers\API\kategoriController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    Route::get('/home', function () {
        return "halo";
    });
    Route::get('/barang', [BarangController::class, 'semuaBarang']);
    Route::post('tambahkaryawan', [AuthController::class, 'tambahKaryawan']);
    Route::post('tambahbarang', [BarangController::class, 'tambahBarang']);
    Route::put('updateBarang/{barang}', [BarangController::class, 'updateBarang']);
    Route::delete('hapusBarang/{barang}', [BarangController::class, 'hapusBarang']);
    Route::post('tambahStok/{barang}', [BarangController::class, 'tambahStok']);
    Route::get('/kategori', [kategoriController::class, 'index']);
    Route::post('tambahkategori', [kategoriController::class, 'create']);
});
Route::post('login', [AuthController::class, 'login']);
