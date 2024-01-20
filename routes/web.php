<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthKlienController;
use App\Http\Controllers\RegisterController;
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

Route::get('/login',  [AuthKlienController::class, 'index'])->name('loginview');
Route::post('/login', [AuthKlienController::class, 'AuthloginKlien'])->name('login');
Route::get('/logout', [AuthKlienController::class, 'logout'])->name('logout');
Route::get('/register', [AuthKlienController::class, 'show'])->name('registerView');
Route::post('/register', [AuthKlienController::class, 'store'])->name('register');


Route::get('/beranda', function () {
    return view('pages.user.beranda');
})->name('beranda');

Route::get('/konselor', function () {
    return view('pages.user.konselor');
});

Route::get('/artikel', function () {
    return view('pages.user.artikel');
});