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
Route::get('/register', [AuthKlienController::class, 'show'])->name('registerview');
Route::post('/register', [AuthKlienController::class, 'store'])->name('register');
Route::get('/login-admin', [AuthKlienController::class, 'indexAdmin'])->name('loginviewAdmin');
Route::post('/login-admin', [AuthKlienController::class, 'AuthloginAdmin'])->name('loginAdmin');

// klien
Route::get('/beranda', function () {
    return view('pages.klien.beranda');
})->name('beranda');

Route::get('/konselor', function () {
    return view('pages.klien.konselor');
});

Route::get('/artikel', function () {
    return view('pages.klien.artikel');
});

Route::get('/detail-profile', function () {
    return view('pages.klien.detailprofile');
});


Route::get('/janji-temu', function () {
    return view('pages.klien.janjitemu');
});


Route::get('/jadwal', function () {
    return view('pages.klien.jadwal');
});


//admin

Route::get('/admin/konselor', function () {
    return view('pages.admin.konselor.konselor');
});

Route::get('/admin/beranda', function () {
    return view('pages.admin.beranda');
});

Route::get('/admin/konselor/add', function () {
    return view('pages.admin.konselor.createkonselor');
});

Route::get('/admin/artikel', function () {
    return view('pages.admin.artikel.artikel');
});

Route::get('/admin/artikel/add', function () {
    return view('pages.admin.artikel.createartikel');
});

//konselor
Route::get('/konselor/login', function () {
    return view('pages.konselor.login');
});


Route::get('/konselor/beranda', function () {
    return view('pages.konselor.beranda');
});

Route::get('/konselor/jadwal', function () {
    return view('pages.konselor.jadwal.jadwal');
});


Route::get('/konselor/create-jadwal', function () {
    return view('pages.konselor.jadwal.createjadwal');
});

Route::get('/konselor/pengajuan-konseling', function () {
    return view('pages.konselor.pengajuankonseling');
});