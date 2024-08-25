<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ReporteController;
use App\Http\Controllers\ServicioExtrasController;
use App\Http\Controllers\CarSelectionController;
use App\Http\Controllers\GoogleController;
use Laravel\Socialite\Facades\Socialite;



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
// Rutas de autenticación de Google
Route::get('/google-auth/redirect', [GoogleController::class, 'redirect']);
Route::get('/google-auth/callback', [GoogleController::class, 'callback']);



Route::middleware('api')->group(function () {
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);
 
 





    Route::get('/service-extras', [ServicioExtrasController::class, 'index']);
    Route::post('/booking', [BookingController::class, 'store']);
    Route::get('/email', [ReporteController::class, 'sendHelloMail']);
    // Rutas para obtener datos
    Route::get('/marcas', [CarSelectionController::class, 'getMarcas']); // Rutas para obtener marcas exelente
    Route::get('/categorias', [CarSelectionController::class, 'getCategorias']);  // Rutas para obtener modelos exelente
    Route::get('/modelos/{marca_id}', [CarSelectionController::class, 'Car_models']); // trae todos los modelos
    Route::get('/modelos-por-categoria/{categoria_id}/marca/{marca_id}', [CarSelectionController::class, 'getModelosPorCategoria']);
    Route::get('/colores', [CarSelectionController::class, 'getColores']); // trae todos los colores

    Route::post('/join-up', [BookingController::class, 'JoinUp']);
});
