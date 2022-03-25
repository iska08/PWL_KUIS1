<?php

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
    return view('index');
});
Route::get('/index', function () {
    return view('index');
});

Auth::routes();
Route::get('/barang', [App\Http\Controllers\BarangController::class, 'index'])->name('barang');
Route::get('/pelanggan', [App\Http\Controllers\PelangganController::class, 'index'])->name('pelanggan');
Route::get('/pegawai', [App\Http\Controllers\PegawaiController::class, 'index'])->name('pegawai');
Route::get('/supplier', [App\Http\Controllers\SupplierController::class, 'index'])->name('supplier');
