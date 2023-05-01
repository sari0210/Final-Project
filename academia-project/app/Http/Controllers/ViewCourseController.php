<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Facades\Log;

class ViewCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $cursos = Course::all();
        return view("course.selectcourse" , ["cursos" =>$cursos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // crear un nuevo curso 
        return view('course.createcourse');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 
       $cursos = new Course;
       $cursos-> course_name = $request->course_name;
       //GUARDAR DATOS EN NUESTRA TABLA 
       if($cursos != null){
        $cursos-> save();
        return redirect("cursos");
       }else {
        return "error on save";
       }
      

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // para editar
        $curso = Course::find("$id");
        return view("course.editcourse" , ["curso" =>$curso]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        //
        $curso = Course::find($id);
       $curso-> course_name = $request->post("course_name");
       //GUARDAR DATOS EN NUESTRA TABLA 
       if($curso != null){
        $curso-> update();
        return redirect("cursos");
       }else {
        return "error on save";
       }


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //eliminar
        //$curso = Course::where("id","=",$id)->delete();
        //return redirect("cursos");
         
          try{
            $curso = Course::where("id","=",$id)->delete();
            return redirect("cursos");
        } catch (\Exception $e) {
            // Manejo de la excepción
            Log::error('Error al actualizar el usuario: ' . $e->getMessage());
            return response()->json(['error' => 'No se puede eliminar .'], 500);
            
        };
         
    }
}
