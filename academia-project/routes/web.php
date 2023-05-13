<?php

use App\Http\Controllers\ViewAdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewCourseController;
use App\Http\Controllers\ViewStudentController;
use App\Http\Controllers\ViewGroupsController;
use App\Http\Controllers\ViewHomeworkController;
use App\Http\Controllers\ViewInscriptionController;
use App\Http\Controllers\ViewTeacherController;
use App\Http\Controllers\ViewSchoolController;
use App\Http\Controllers\userController;
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
    return view('index');
});
 
//rutas para CURSOS

Route ::get('/cursos', [ViewCourseController:: class, "index"]);
Route :: get("/cursos/create" , [ViewCourseController:: class, "create"]);
Route :: post("/cursos" , [ViewCourseController:: class, "store"]);
Route :: get("/cursos/{id}" , [ViewCourseController:: class, "edit"]);
Route :: put("/update/{id}" , [ViewCourseController:: class, "update"]);
Route :: delete("/cursos/{id}" , [ViewCourseController:: class, "destroy"]);

//RUTAS PARA ESTUDIANTES
Route::get('/estudiantes', [ViewStudentController:: class, "index"])->name('estudiantes');
Route :: get('/estudiantes/create', [ViewStudentController:: class, "create"])->name('registrar');
Route :: post("/estudiantes" , [ViewStudentController:: class, "store"]);
Route :: get("/estudiantes/{id}" , [ViewStudentController:: class, "edit"]);
Route :: put("/updateEstudiante/{id}" , [ViewStudentController:: class, "update"])->name('actualizar');
Route :: delete("estudiantes/{id}" , [ViewStudentController:: class, "destroy"]);
//Route :: get("form" , [ViewStudentController:: class, "getForm"]);

// rutas para grupo

Route::get('/grupos', [ViewGroupsController:: class, "index"]);
Route :: get('/grupos/create', [ViewGroupsController:: class, "create"]);
Route :: post("/grupos" , [ViewGroupsController:: class, "store"]);
Route :: get("/grupos/{id}" , [ViewGroupsController:: class, "edit"]);
Route :: put("/updateGrupo/{id}" , [ViewGroupsController:: class, "update"]);
Route :: delete("grupos/{id}" , [ViewGroupsController:: class, "destroy"]);

//rutas de Tareas
Route::get('/tareas', [ViewHomeworkController:: class, "index"]);
Route :: get('/tareas/create', [ViewHomeworkController:: class, "create"]);
Route :: post("/tareas" , [ViewHomeworkController:: class, "store"]);
Route :: get("/tareas/{id}" , [ViewHomeworkController:: class, "edit"]);
Route :: put("/updateHomework/{id}" , [ViewHomeworkController:: class, "update"]);
Route :: delete("tareas/{id}" , [ViewHomeworkController:: class, "destroy"]);

//rutas de maestros
Route::get('/maestros', [ViewTeacherController:: class, "index"])->name('maestros');
Route :: get('/maestros/create', [ViewTeacherController:: class, "create"])->name('registro');
Route :: post("/maestros" , [ViewTeacherController:: class, "store"]);
Route :: get("/maestros/{id}" , [ViewTeacherController:: class, "edit"]);
Route :: put("/updateMaestros/{id}" , [ViewTeacherController:: class, "update"])->name('actualizarMaestro');
Route :: delete("maestros/{id}" , [ViewTeacherController:: class, "destroy"]);


//rutas para inscription 
Route::get('/inscripciones', [ViewInscriptionController:: class, "index"])->name('all');
Route::get('/inscripciones/create', [ViewInscriptionController:: class, "create"]);
Route::post('/inscripciones', [ViewInscriptionController:: class, "store"]);
Route::get('/inscripciones/{id}', [ViewInscriptionController:: class, "edit"])->name('edit');
Route::put('/inscripUpdate/{id}', [ViewInscriptionController:: class, "update"])->name('updateInscrip');
Route::delete('/inscripciones/{id}', [ViewInscriptionController:: class, "destroy"])->name('deleteInscrip');



// RUTAS DE ESCUELA

Route::get('/escuelas', [ViewSchoolController:: class, "index"]);
Route :: get('/escuelas/create', [ViewSchoolController:: class, "create"]);
Route :: post("/escuelas" , [ViewSchoolController:: class, "store"]);
Route :: get("/escuelas/{id}" , [ViewSchoolController:: class, "edit"]);
Route :: put("/updateSchool/{id}" , [ViewSchoolController:: class, "update"]);
Route :: delete("escuelas/{id}" , [ViewSchoolController:: class, "destroy"]);

//RUTAS ADMIN

Route::get('/', function () {
    return view('login');
})->name('usuario.login');

Route::get('/plantilla', [userController::class, 'getPlantilla'])->name('template');
Route::get('/acceso', [userController::class, 'iniciarSesion'])->name('inicio_sesion');
Route::delete('/logout',[userController::class, 'destroy'])->name('cerrar_sesion');
/*Route::get('/plantilla', [ViewAdminController:: class, "index"]);
Route::get('/acceso', [UsuariosController::class, 'iniciarSesion'])->name('inicio_sesion');
Route::delete('/logout',[UsuariosController::class, 'destroy'])->name('cerrar_sesion');*/
Route::get('/index', [userController::class, 'getInicio'])->name('Home');


//RUTAS ADMIN
Route::get('/usuarios', [ViewAdminController::class, 'index'])->name('usuarios');
Route::get('/usuarios/create', [ViewAdminController::class, 'create']);
Route::post('/usuarios', [ViewAdminController::class,'store']);
Route::get('/usuarios/{id}', [ViewAdminController::class,'edit']);
Route :: put("/updateUsuario/{id}" , [ViewAdminController:: class, "update"])->name('administrador');
Route::delete('/usuarios/{id}', [ViewAdminController::class, 'destroy']);

?>