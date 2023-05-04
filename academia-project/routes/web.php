<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewCourseController;
use App\Http\Controllers\ViewStudentController;
use App\Http\Controllers\ViewGroupsController;
use App\Http\Controllers\ViewInscriptionController;
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
Route :: put("/update/{id}" , [ViewCourseController:: class, "update"]);
Route :: delete("/cursos/{id}" , [ViewCourseController:: class, "destroy"]);

//RUTAS PARA ESTUDIANTES
Route::get('/estudiantes', [ViewStudentController:: class, "index"]);
Route :: get('/estudiantes/create', [ViewStudentController:: class, "create"]);
Route :: post("/estudiantes" , [ViewStudentController:: class, "store"]);
Route :: get("/estudiantes/{id}" , [ViewStudentController:: class, "edit"]);
Route :: put("/updateEstudiante/{id}" , [ViewStudentController:: class, "update"]);
Route :: delete("estudiantes/{id}" , [ViewStudentController:: class, "destroy"]);
Route :: get("form" , [ViewStudentController:: class, "getForm"]);

// rutas para grupo

Route::get('/grupos', [ViewGroupsController:: class, "index"]);
Route :: get('/grupos/create', [ViewGroupsController:: class, "create"]);
Route :: post("/grupos" , [ViewGroupsController:: class, "store"]);
Route :: get("/grupos/{id}" , [ViewGroupsController:: class, "edit"]);
Route :: put("/updateGrupo/{id}" , [ViewGroupsController:: class, "update"]);
Route :: delete("grupos/{id}" , [ViewGroupsController:: class, "destroy"]);

//rutas para inscription 
Route::get('/inscripciones', [ViewInscriptionController:: class, "index"]);
Route::get('/inscripciones/create', [ViewInscriptionController:: class, "create"]);
Route::post('/inscripciones', [ViewInscriptionController:: class, "store"]);

?>