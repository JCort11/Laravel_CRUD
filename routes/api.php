<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\VentasController;

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

//Laravel 8

/*
Route::get('/articulos','App\Http\Controllers\ArticuloController@index');
Route::post('/articulos','App\Http\Controllers\ArticuloController@store');
Route::put('/articulos/id','App\Http\Controllers\ArticuloController@update');
Route::delete('/articulos/id','App\Http\Controllers\ArticuloController@destroy');
*/

//Laravel 9

Route::get('/articulos',[ArticuloController::class,'index']);
Route::post('/articulos',[ArticuloController::class,'store']);
Route::put('/articulos/{id}',[ArticuloController::class,'update']);
Route::delete('/articulos/{id}',[ArticuloController::class,'destroy']);

//Ventas
Route::get('/ventas',[VentasController::class,'index']);
Route::post('/ventas',[VentasController::class,'store']);
Route::put('/ventas/{id}',[VentasController::class,'update']);
Route::delete('/ventas/{id}',[VentasController::class,'destroy']);