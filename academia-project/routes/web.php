<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewCourseController;
use App\Http\Controllers\ViewStudentController;

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

Route::get('/', function () {
    return view('welcome');
});
 
//rutas para CURSOS

Route ::get('/cursos', [ViewCourseController:: class, "index"]);
Route :: get("/cursos/create" , [ViewCourseController:: class, "create"]);
Route :: post("/cursos" , [ViewCourseController:: class, "store"]);
Route :: get("/cursos/{id}" , [ViewCourseController:: class, "edit"]);
Route :: put("/cursos/{id}" , [ViewCourseController:: class, "update"]);
Route :: delete("/cursos/{id}" , [ViewCourseController:: class, "destroy"]);

//RUTAS PARA ESTUDIANTES
Route::get('/estudiantes', [ViewStudentController:: class, "index"]);




?>