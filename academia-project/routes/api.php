<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\GroupsController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeworkController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\InscriptionController;

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


Route::get('/grupo',[GroupsController::class,'index']);
Route::post('/grupo',[GroupsController::class,'store']);
Route::put('/grupo/{id}',[GroupsController::class,'update']);
Route::delete('/grupo/{id}',[GroupsController::class,'destroy']);

Route::get('/homework',[HomeworkController::class,'index']);
Route::post('/homework',[HomeworkController::class,'store']);
Route::put('/homework/{id}',[HomeworkController::class,'update']);
Route::delete('/homework/{id}',[HomeworkController::class,'destroy']);

Route::get('/curso',[CourseController::class,'index']);
Route::post('/curso',[CourseController::class,'store']);
Route::put('/curso/{id}',[CourseController::class,'update']);
Route::delete('/curso/{id}',[CourseController::class,'destroy']);

Route::get('/admin',[AdminController::class,'index']);
Route::post('/admin',[AdminController::class,'store']);
Route::put('/admin/{id}',[AdminController::class,'update']);
Route::delete('/admin/{id}',[AdminController::class,'destroy']);

Route::get('/pupil',[StudentController::class,'index']);
Route::post('/pupil',[StudentController::class,'store']);
Route::put('/pupil/{id}',[StudentController::class,'update']);
Route::delete('/pupil/{id}',[StudentController::class,'destroy']);


Route::get('/teacher',[TeacherController::class,'index']);
Route::post('/teacher',[TeacherController::class,'store']);
Route::put('/teacher/{id}',[TeacherController::class,'update']);
Route::delete('/teacher/{id}',[TeacherController::class,'destroy']);

//CONEXCION PARA INSCRPTIONS TABLE
Route::get('/inscrip',[InscriptionController::class,'index']);
Route::post('/inscrip',[InscriptionController::class,'store']);
Route::put('/inscrip/{id}',[InscriptionController::class,'update']);
Route::delete('/inscrip/{id}',[InscriptionController::class,'destroy']);