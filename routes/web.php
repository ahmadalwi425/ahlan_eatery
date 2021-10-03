<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\masakanController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/pesan/{id}', [App\Http\Controllers\orderController::class, 'pesanmeja']);

Route::post('/pesan', [App\Http\Controllers\orderController::class, 'tampilpesan']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('masakan', masakanController::class);
