<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BelajarController;

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

Route::get('/', [\App\Http\Controllers\LoginController::class, 'index']);
Route::get('login', [\App\Http\Controllers\LoginController::class, 'index'])->name('login');
Route::post('action-login', [\App\Http\Controllers\LoginController::class, 'actionLogin'])->name('action-login');
Route::get('sign-out', [\App\Http\Controllers\LoginController::class, 'logout'])->name('sign-out');

//resource -> get, post, put, delete
Route::prefix('admin')->group(function () {
    Route::resource('dashboard', \App\Http\Controllers\ADMIN\DashboardController::class);
});

// route get : melihat, membaca 
Route::get('belajar', [BelajarController::class, 'index']);
Route::get('aritmatika', [BelajarController::class, 'create']);
Route::get('aritmatika/tambah', [BelajarController::class, 'tambah']);
Route::get('aritmatika/kurang', [BelajarController::class, 'kurang']);
Route::get('aritmatika/bagi', [BelajarController::class, 'bagi'])->name('aritmatika.bagi');
Route::get('aritmatika/kali', [BelajarController::class, 'kali'])->name('aritmatika.kali');

Route::post('tambah-action', [BelajarController::class, 'tambahAction'])->name('tambah.action');
Route::post('kurang-action', [BelajarController::class, 'kurangAction'])->name('kurang.action');
Route::post('bagi-action', [BelajarController::class, 'bagiAction'])->name('bagi.action');
Route::post('kali-action', [BelajarController::class, 'kaliAction'])->name('kali.action');
