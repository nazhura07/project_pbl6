<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArtikelController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KlienController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AuthKlienController;
use App\Http\Controllers\KonselorController;

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
Route::post('/login', [AuthKlienController::class, 'authlogin'])->name('login');
Route::get('/logout', [AuthKlienController::class, 'logout'])->name('logout');
Route::get('/register', [AuthKlienController::class, 'show'])->name('registerview');
Route::post('/register', [AuthKlienController::class, 'store'])->name('register');


// klien
Route::prefix('client')->group(function () {
    Route::get('/beranda', [KlienController::class, 'berandaKlien'])->name('klien.beranda');
    //artikel
    Route::get('/artikel', [KlienController::class, 'artikelKlien'])->name('klien.artikel');
    //konseling
    Route::get('/konselor', [KlienController::class, 'konselorKlien'])->name('klien.konselor');
    Route::get('/konselor/{id}', [KlienController::class, 'detailProfileKonselor'])->name('klien.konselor.detail');
    Route::get('/konselor/{id}/janji-temu', [KlienController::class, 'janjitamuKlien'])->name('klien.konselor.janjitemu');
    Route::post('/konselor/{id}/janji-temu', [KlienController::class, 'janjitamuKlienStore'])->name('klien.konselor.janjitemuStore');
    //scahdule
    Route::get('/jadwal', [KlienController::class, 'jadwal'])->name('klien.jadwal');
    Route::patch('/jadwal/{id}', [KlienController::class, 'ubahjadwal'])->name('klien.ubahjadwal');
    Route::get('/jadwal/{id}/rating',[KlienController::class,'ratingKlien'])->name('klien.rating');
    Route::post('/jadwal/{id}/rating',[KlienController::class,'ratingKlienStore'])->name('klien.ratingstore');
});

//admin
Route::prefix('admin')->group(function () {
    Route::get('/beranda', [AdminController::class, 'berandaAdmin'])->name('admin.beranda');
    //artikel
    Route::get('/artikel', [ArtikelController::class,'index'])->name('admin.artikel');
    Route::post('/artikel',[ArtikelController::class,'store'])->name('admin.artikel.store');
    Route::get('/artikel/create',[ArtikelController::class,'create'])->name('admin.artikel.create');
    Route::get('/artikel/edit/{id}', [ArtikelController::class, 'edit'])->name('admin.artikel.edit');
    Route::put('/artikel/update/{id}', [ArtikelController::class, 'update'])->name('admin.artikel.update');
    Route::delete('/artikel/delete/{id}', [ArtikelController::class, 'destroy'])->name('admin.artikel.delete');
    //konselor
    Route::get('/konselor', [AdminController::class,'konselorAdmin'])->name('admin.konselor');
    Route::get('/konselor/{konselor}/edit', [AdminController::class, 'konselorEdit'])->name('admin.konselor.edit');
    Route::patch('/konselor/{konselor}', [AdminController::class, 'konselorUpdate'])->name('admin.konselor.update');
    Route::post('/konselor',[AdminController::class,'konselorStore'])->name('admin.konselor.store');
    Route::get('/konselor/create',[AdminController::class,'konselorCreate'])->name('admin.konselor.create');
    Route::delete('/konselor/{konselor}', [AdminController::class, 'konselorDestroy'])->name('admin.konselor.destroy');

});

//konselor
Route::prefix('konselor')->group(function () {
    Route::get('/beranda', [KonselorController::class, 'berandaKonselor'])->name('konselor.beranda');
    Route::patch('/beranda/ubah-status', [KonselorController::class, 'ubahstatus'])->name('konselor.beranda.ubahstatus');
    //pengajuankonseling
    Route::get('/pengajuan-konseling', [KonselorController::class,'pengajuanKonselor'])->name('konselor.pengajuanKonselor');
    //jadwal
    Route::delete('/jadwal/{jadwal}', [KonselorController::class, 'jadwalKonselorDestroy'])->name('konselor.jadwal.destroy');
    Route::get('/jadwal', [KonselorController::class,'jadwalKonselor'])->name('konselor.jadwal');
    Route::get('/jadwal/create',[KonselorController::class,'jadwalKonselorCreate'])->name('konselor.jadwal.create');
    Route::post('/jadwal',[KonselorController::class,'jadwalKonselorStore'])->name('konselor.jadwal.store');
});

