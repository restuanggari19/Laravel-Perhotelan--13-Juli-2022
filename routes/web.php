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
    return view('welcome');
});

//sidebar
Route::get('/dashboard', [App\Http\Controllers\Admin\AdminController::class, 'index']);
Route::get('tampilan', [App\Http\Controllers\Admin\AdminController::class, 'tampilan']);
Route::get('/dataPesan', [App\Http\Controllers\Admin\AdminController::class, 'dataPesanSidebar']);

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
Route::get('/user', [App\Http\Controllers\Admin\AdminController::class, 'tampilanData']);
Route::get('/datapesan/pesan', [App\Http\Controllers\Admin\AdminController::class, 'tampilanDataPesan']);

//form pesan
Route::get('/form-pesan', [App\Http\Controllers\PesanController::class, 'pesan']);