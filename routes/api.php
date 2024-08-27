<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ReporteController;
use App\Http\Controllers\ServicioExtrasController;
use App\Http\Controllers\CarSelectionController;
use App\Http\Controllers\GoogleController;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\AppleController;
use App\Http\Controllers\FacebookController;
use App\Http\Controllers\UserController;



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

//Rutas autenticacion con apple

Route::get('apple/redirect', [AppleController::class, 'redirect']);
Route::get('apple/callback', [AppleController::class, 'callback']);

//Rutas autenticacion con facebook
Route::get('/facebook-auth/redirect', [FacebookController::class, 'redirect']);
Route::get('/facebook-auth/callback', [FacebookController::class, 'callback']);



// Rutas autenticacion convencional clasica
Route::middleware('api')->group(function () {
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum'); 
 
//Rutas autenticacion con apple





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


// rutas crud de usuario logueado
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', [UserController::class, 'show']);
    Route::put('/user', [UserController::class, 'update']);
    Route::delete('/user', [UserController::class, 'destroy']);
});
