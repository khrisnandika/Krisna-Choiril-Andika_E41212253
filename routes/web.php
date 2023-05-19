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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('tambahNasabah', [NasabahController::class, 'tambahNasabah'])->name('tambahNasabah');


//route untuk delete data berdasarkan id
Route::get('hapusData/{id}', [NasabahController::class, 'hapusData'])->name('hapusData');