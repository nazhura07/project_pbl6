<?php

use App\Http\Controllers\api\ApiArtikelController;
use App\Http\Controllers\api\ApiAuthController;
use App\Http\Controllers\api\ApiDokterController;
use App\Http\Controllers\api\ApiHomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\YourController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/login',[ApiAuthController::class,'AuthLogin']);


Route::middleware('auth:sanctum')->group(function () {
    Route::get('/home', [ApiHomeController::class, 'index']);
    Route::get('/artikel', [ApiArtikelController::class, 'index']);
    Route::get('/konselor', [ApiDokterController::class, 'index']);
    Route::get('/konselor/{id}', [ApiDokterController::class, 'show']);
    Route::post('/logout',[ApiAuthController::class,'logout']);
});

