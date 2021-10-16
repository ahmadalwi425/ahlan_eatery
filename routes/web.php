<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\masakanController;
use App\Http\Controllers\jenis_masakanController;
use App\Http\Controllers\extraController;

use App\Http\Controllers\waiterController;
use App\Http\Controllers\mejaController;

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

Route::post('/pesanmeja', [App\Http\Controllers\orderController::class, 'pesanmeja']);
Route::get('/scan', [App\Http\Controllers\guessController::class, 'scan']);


Route::get('/pesan/meja/{id}', [App\Http\Controllers\orderController::class, 'pesanmeja']);
Route::post('/pesan', [App\Http\Controllers\orderController::class, 'dataPesanan']);
Route::post('/order/list', [App\Http\Controllers\orderController::class, 'orderList'])->name('orderList');
Route::resource('order', orderController::class);


Route::any('cekorder', [App\Http\Controllers\orderController::class, 'cekorder']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('/meja', [mejaController::class, 'index']);
//Route::post('/meja', [mejaController::class, 'store'])->name('store');
//Route::get('qrcode/{id}', [mejaController::class, 'generate'])->name('generate');



Route::middleware(['auth'])->group(function () {
    Route::resource('masakan', masakanController::class);
    Route::resource('jenis_masakan', jenis_masakanController::class);
    Route::resource('extra', extraController::class);
    Route::resource('waiter', waiterController::class);
});