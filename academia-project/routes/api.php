<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchoolController;

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

// routes laravel 8
/*
Route::get('/school','App\Http\Controllers\ArticuloController@index');
Route::post('/school','App\Http\Controllers\ArticuloController@store');
Route::put('/school/{id}','App\Http\Controllers\ArticuloController@update');
Route::delete('/school/{id}','App\Http\Controllers\ArticuloController@destroy');
*/
// routes laravel 9-10

 
//Routes Laravel 9-10

Route::get('/school',[SchoolController::class,'index']);
Route::post('/school',[SchoolController::class,'store']);
Route::put('/school/{id}',[SchoolController::class,'update']);
Route::delete('/school/{id}',[SchoolController::class,'destroy']);

/*
Route::get('/',[ArticuloController::class,'index']);
Route::post('/',[ArticuloController::class,'store']);
Route::put('//{id}',[ArticuloController::class,'update']);
Route::delete('//{id}',[ArticuloController::class,'destroy']);

*/