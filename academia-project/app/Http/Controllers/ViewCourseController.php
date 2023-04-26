<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class ViewCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $curso = Course::all();
        return view("course.course" , ["cursos" =>$curso]);
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
       $curso = new Course;
       $curso-> course_name = $request->course_name;
       //GUARDAR DATOS EN NUESTRA TABLA 
       if($curso != null){
        $curso-> save();
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
    public function edit(string $id)
    {
        // para editar
        $curso = Course::find("$id");
        return view("course.course" , ["cursos" =>$curso]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $curso = Course::findOrFail($id);
       $curso-> course_name = $request->course_name;
       //GUARDAR DATOS EN NUESTRA TABLA 
       if($curso != null){
        $curso-> save();
        return redirect("cursos");
       }else {
        return "error on save";
       }


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //eliminar
        Course::destroy($id);
        return redirect("cursos");

    }
}
