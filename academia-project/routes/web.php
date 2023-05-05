<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewCourseController;
use App\Http\Controllers\ViewStudentController;
use App\Http\Controllers\ViewGroupsController;
use App\Http\Controllers\ViewHomeworkController;
use App\Http\Controllers\ViewInscriptionController;
use App\Http\Controllers\ViewTeacherController;
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

Route::get('/tareas', [ViewHomeworkController:: class, "index"]);
Route :: get('/tareas/create', [ViewHomeworkController:: class, "create"]);
Route :: post("/tareas" , [ViewHomeworkController:: class, "store"]);
Route :: get("/tareas/{id}" , [ViewHomeworkController:: class, "edit"]);
Route :: put("/updateHomework/{id}" , [ViewHomeworkController:: class, "update"]);
Route :: delete("tareas/{id}" , [ViewHomeworkController:: class, "destroy"]);

Route::get('/maestros', [ViewTeacherController:: class, "index"]);
Route :: get('/maestros/create', [ViewTeacherController:: class, "create"]);
Route :: post("/maestros" , [ViewTeacherController:: class, "store"]);
Route :: get("/maestros/{id}" , [ViewTeacherController:: class, "edit"]);
Route :: put("/updateMaestros/{id}" , [ViewTeacherController:: class, "update"]);
Route :: delete("maestros/{id}" , [ViewTeacherController:: class, "destroy"]);


//rutas para inscription 
Route::get('/inscripciones', [ViewInscriptionController:: class, "index"]);
Route::get('/inscripciones/create', [ViewInscriptionController:: class, "create"]);
Route::post('/inscripciones', [ViewInscriptionController:: class, "store"]);
Route::get('/inscripcion/{id}', [ViewInscriptionController:: class, "edit"]);

Route::delete('/inscripciones/{id}', [ViewInscriptionController:: class, "destroy"]);

?>