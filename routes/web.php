<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;


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

Route::middleware(['auth'])->group(function(){
    Route::get('/siswa',[SiswaController::class, 'index']);
    Route::get('/siswa/create',[SiswaController::class, 'create']);
    Route::post('/siswa/store',[SiswaController::class, 'store']);
    Route::get('/siswa/{id}/edit',[SiswaController::class, 'edit']);
    Route::put('/siswa/{id}',[SiswaController::class, 'update']);
    Route::delete('/siswa/{id}',[SiswaController::class, 'destroy']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
