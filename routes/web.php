<?php

use App\Http\Controllers\customerController;
use App\Http\Controllers\kendaraanController;
use App\Http\Controllers\sesiController;
use App\Http\Controllers\transaksiController;
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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', [sesiController::class, 'index']);
    // Route::post('/', [SesiController::class, 'login']);
Route::post('/', [sesiController::class, 'login'])->name('login');





// Route::post('/logout', [SesiController::class, 'logout'])->name('logout');
Route::group(['middleware' => 'auth'], function () {
    // Rute lain yang memerlukan autentikasi
    Route::get('/anggota', function(){
        return redirect('/customer');
    });
    Route::post('/logout', [SesiController::class, 'logout'])->name('logout');

Route::resource("/customer", customerController::class);

Route::delete('/customer/{id}', [customerController::class, 'destroy'])->name('customer.destroy');


Route::get('/customer/{id}/edit', [customerController::class, 'edit'])->name('customer.edit');
Route::put('/customer/{id}', [customerController::class, 'update'])->name('customer.update');



Route::resource("/kendaraan", kendaraanController::class);

Route::delete('/kendaraan/{id}', [kendaraanController::class, 'destroy'])->name('kendaraan.destroy');


Route::get('/kendaraan/{id}/edit', [kendaraanController::class, 'edit'])->name('kendaraan.edit');
Route::put('/kendaraan/{id}', [kendaraanController::class, 'update'])->name('kendaraan.update');


Route::resource("/transaksi", transaksiController::class);

Route::delete('/transaksi/{id}', [transaksiController::class, 'destroy'])->name('transaksi.destroy');


Route::get('/transaksi/{id}/edit', [transaksiController::class, 'edit'])->name('transaksi.edit');
Route::put('/transaksi/{id}', [transaksiController::class, 'update'])->name('transaksi.update');


});