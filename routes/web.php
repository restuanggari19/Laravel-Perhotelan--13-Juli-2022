<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;

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

//sidebar
Route::get('/home', [App\Http\Controllers\Admin\AdminController::class, 'index']);
Route::get('tampilan', [App\Http\Controllers\Admin\AdminController::class, 'tampilan']);
Route::get('/kamar', [App\Http\Controllers\Admin\AdminController::class, 'dataPesanSidebar']);

//form input
Route::get('form-input', [App\Http\Controllers\Admin\AdminController::class, 'create']);
Route::post('/store-tamu', [App\Http\Controllers\Admin\AdminController::class, 'store']);

//delete
Route::get('/datatable/tamu', [App\Http\Controllers\Admin\AdminController::class, 'datatableTamu']);
Route::get('/delete/{id}', [App\Http\Controllers\Admin\AdminController::class, 'destroy']);

//form edit
Route::get('/edit/{id}', [App\Http\Controllers\Admin\AdminController::class, 'edit']);
Route::post('/update', [App\Http\Controllers\Admin\AdminController::class, 'update']);

//data pesan
Route::get('/tamu', [App\Http\Controllers\Admin\AdminController::class, 'tampilanData']);
Route::get('/datapesan/pesan', [App\Http\Controllers\Admin\AdminController::class, 'tampilanDataPesan']);

//Form sukses
// Route::get('/form-sukses', [App\Http\Controllers\PesanController::class, 'index']);

// //form pesan
// Route::get('/', [App\Http\Controllers\PesanController::class, 'pesan']);
// Route::get('/form-pesan', [App\Http\Controllers\PesanController::class, 'sukses']);
// Route::post('/form-pesan', [App\Http\Controllers\PesanController::class, 'store']);

// //edit tamu belum jalan
// Route::get('/edit-tamu/{id}', [App\Http\Controllers\PesanController::class, 'editTamu']);
// Route::post('/edit-tamu', [App\Http\Controllers\PesanController::class, 'updateTamu']);

// //edit pesanan belum jalan
// Route::get('/edit-pesanan/{id}', [App\Http\Controllers\PesanController::class, 'editPesanan']);
// Route::post('/edit-pesanan', [App\Http\Controllers\PesanController::class, 'updatePesan']);

//fasilitas
Route::get('/fasilitas', [App\Http\Controllers\FasilitasController::class, 'index']);
Route::get('/form-fasilitas', [App\Http\Controllers\FasilitasController::class, 'create']);
Route::post('/store-fasilitas', [App\Http\Controllers\FasilitasController::class, 'storefasilitas']);
Route::get('/datatable/fasilitas', [App\Http\Controllers\FasilitasController::class, 'datatableFasilitas']);

//booking
Route::get('/booking', [App\Http\Controllers\BookingController::class, 'index']);
Route::get('/datatable/booking', [BookingController::class, 'datatableBooking']);

//tamu
Route::get('/form-tamu', [App\Http\Controllers\TamuController::class, 'create']);
Route::post('/store-tamu', [App\Http\Controllers\TamuController::class, 'storetamu']);
Route::get('/datatable/tamu', [App\Http\Controllers\TamuController::class, 'datatabletamu']);
Route::get('/edit-tamu/{id}', [App\Http\Controllers\TamuController::class, 'editTamu']);
Route::post('/update', [App\Http\Controllers\TamuController::class, 'updateTamus']);

//kamar
Route::get('/form-kamar', [App\Http\Controllers\KamarController::class, 'create']);
Route::post('/store-kamar', [App\Http\Controllers\KamarController::class, 'storekamar']);
Route::get('/datatable/kamar', [App\Http\Controllers\KamarController::class, 'datatableKamar']);