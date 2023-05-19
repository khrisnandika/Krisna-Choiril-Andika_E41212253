<?php

use App\Http\Controllers\NasabahController;
use App\Models\Nasabah;
use Illuminate\Support\Facades\Auth;
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
    return view('auth.login');
});

Auth::routes();

//route tampil frontend
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('ubahdata', [NasabahController::class, 'tampilUbah'])->name('ubahdata');

//route tambah data
Route::post('tambahNasabah', [NasabahController::class, 'tambahNasabah'])->name('tambahNasabah');

//route tampil data yang mau diupdate berdasarkan id
Route::get('tampilUbahData/{id}', [NasabahController::class, 'tampilUbahData'])->name('tampilUbahData');

//route untuk delete data berdasarkan id
Route::get('hapusData/{id}', [NasabahController::class, 'hapusData'])->name('hapusData');

//route update data berdasarkan id
Route::post('ubahData/{id}', [NasabahController::class, 'ubahData'])->name('ubahData');