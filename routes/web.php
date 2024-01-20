<?php

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

Route::get('/login-admin', function () {
    return view('pages.admin.login');
});


Route::get('/login', function () {
    return view('pages.user.login');
});

Route::get('/register', function () {
    return view('pages.user.register');
});

Route::get('/beranda', function () {
    return view('pages.user.beranda');
});
Route::get('/konselor', function () {
    return view('pages.user.konselor');
});

Route::get('/artikel', function () {
    return view('pages.user.artikel');
});