<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\serviciosextras;
use App\Http\Controllers\mailController;
 
use App\Http\Controllers\ReporteController;
use App\Http\Controllers\ServicioExtrasController;

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

Route::middleware('api')->group(function () {
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/service-extras', [ServicioExtrasController::class, 'index']);
    Route::post('/booking', [BookingController::class, 'store']);
    Route::get('/email', [ReporteController::class, 'sendHelloMail']);
});
