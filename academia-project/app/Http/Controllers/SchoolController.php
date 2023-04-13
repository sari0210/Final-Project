<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //TRAER TODOS LOS DATOS DE LAS COLUMNAS SCHOOL  SELECT * from school;
        $school = School::all();
        return $school;
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

   //REQUEST = 
     public function store(Request $request)
    {
      // creamos el objeto para guardarlo
       $school = new School;
       $school-> school_name = $request->school_name;
       $school-> director_name = $request->director_name;
       $school-> school_address = $request->school_address;
       $school-> phone_number = $request->phone_number;
        //GUARDAR DATOS EN NUESTRA TABLA 
       $school-> save();
       return $school;

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
        $school = School::findOrFail($id);
        // ACTUALIZAR LOS DATOS 
        $school-> school_name = $request->school_name;
       $school-> director_name = $request->director_name;
       $school-> school_address = $request->school_address;
       $school-> phone_number = $request->phone_number;
          //GUARDAR DATOS EN NUESTRA TABLA 
          $school-> save();
          return $school;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //eliminar datos de nuestra tabla
        School::destroy($id);
        return "delete succssfully";
    }
}
