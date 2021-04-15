<?php

use App\Http\Controllers\DaftarController;
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

Route::get('/admin/home', function () {
    return view('admin.home');
});


// ADMIN
Route::prefix('/admin')->name('admin.')->group(function () {
    Route::prefix('/daftar')->name('daftar.')->group(function () {
        Route::get('/index', [DaftarController::class, 'index'])->name('index');
        Route::post('/store', [DaftarController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [DaftarController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [DaftarController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [DaftarController::class, 'destroy'])->name('destroy');
    });
});