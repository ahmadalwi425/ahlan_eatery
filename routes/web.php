<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\masakanController;
use App\Http\Controllers\jenis_masakanController;
use App\Http\Controllers\extraController;
use App\Http\Controllers\orderController;
use Illuminate\Http\Request;

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


Auth::routes();

Route::get('/pesan/meja/{id}', [App\Http\Controllers\orderController::class, 'pesanmeja']);
Route::post('/pesan', [App\Http\Controllers\orderController::class, 'dataPesanan']);
Route::resource('order', orderController::class);



Route::middleware(['auth'])->group(function () {
    Route::resource('masakan', masakanController::class);
    Route::resource('jenis_masakan', jenis_masakanController::class);
    Route::resource('extra', extraController::class);
    Route::resource('waiter', waiterController::class);
});