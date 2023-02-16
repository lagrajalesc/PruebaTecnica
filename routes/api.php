<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('ejercicio1a',[TestController::class, 'ejercicio1A']);
Route::post('ejercicio1b',[TestController::class, 'ejercicio1B']);
Route::post('ejercicio2',[TestController::class, 'ejercicio2']);
Route::post('ejercicio3',[TestController::class, 'ejercicio3']);


