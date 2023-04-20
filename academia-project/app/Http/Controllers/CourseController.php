<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $curso = Course::all();
        //cources es el mismo nombre de se pondra para llamar a la vista
       
        return view("index", ["cursos" => $curso]);
        

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // creamos el objeto para guardarlo
       $curso = new Course;
       $curso-> course_name = $request->course_name;
         //GUARDAR DATOS EN NUESTRA TABLA 
         $curso-> save();
         return $curso;

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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //buscamos la escula si no existe fallamos y no seguimos la ejecucion
       $curso = Course::findOrFail($id);
     // actualizar datos de la tabla
       $curso-> course_name = $request->course_name;
         //GUARDAR DATOS EN NUESTRA TABLA 
         $curso-> save();
         return $curso;

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         //eliminar datos de nuestra tabla
         Course::destroy($id);
         return "delete succssfully";
    }
}
