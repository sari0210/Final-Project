<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Homeworks;

class HomeworkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       //TRAER TODOS LOS DATOS DE LAS COLUMNAS SCHOOL  SELECT * from school;
       $homework = Homeworks::all();
       return $homework;
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
       $homework = new Homeworks;
       $homework-> status = $request->status;
       $homework-> student_id = $request->student_id;
       $homework-> course_id = $request->course_id;
        //GUARDAR DATOS EN NUESTRA TABLA 
       $homework-> save();
       return $homework;
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
       //buscamos la homework si no existe fallamos y no seguimos la ejecucion
       $homework = Homeworks::findOrFail($id);
       // ACTUALIZAR LOS DATOS 
       $homework-> status = $request->status;
      $homework-> student_id= $request->student_id;
      $homework-> course_id = $request->course_id;
         //GUARDAR DATOS EN NUESTRA TABLA 
         $homework-> save();
         return $homework;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         //eliminar datos de nuestra tabla
         Homeworks::destroy($id);
         return "delete successfully";
    }
}