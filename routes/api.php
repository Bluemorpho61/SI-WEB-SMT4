<?php

use App\Http\Controllers\MobileAuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login',[MobileAuthController::class,'login']);

Route::get('tes-api',[MobileAuthController::class, 'getUser']);

Route::post('register',[MobileAuthController::class,'Register']);
Route::get('get-proyek/{id}',[MobileAuthController::class,'GetProyekData']);

