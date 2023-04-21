<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
      $pupil= Student ::all();
      return $pupil;

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
       $pupil = new Student;
       $pupil-> pupil_name = $request->pupil_name;
       $pupil-> pupil_lastname = $request->pupil_lastname;
       $pupil-> pupil_age = $request->pupil_age;
       $pupil-> pupil_address = $request->pupil_address;
       $pupil-> responsible_name = $request->responsible_name;
       $pupil-> phone_number = $request->phone_number;
       $pupil-> groups_id = $request->groups_id;
       $pupil-> school_id = $request->school_id;

         //GUARDAR DATOS EN NUESTRA TABLA 
         $pupil-> save();
         return $pupil;
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
        //buscamos los datos del estudiante si no existe fallamos y no seguimos la ejecucion
       $pupil = Student::findOrFail($id);
       // actualizar datos de la tabla
       $pupil-> pupil_name = $request->pupil_name;
       $pupil-> pupil_lastname = $request->pupil_lastname;
       $pupil-> pupil_age = $request->pupil_age;
       $pupil-> pupil_address = $request->pupil_address;
       $pupil-> responsible_name = $request->responsible_name;
       $pupil-> phone_number = $request->phone_number;
       $pupil-> groups_id = $request->groups_id;
       $pupil-> school_id = $request->school_id;
           //GUARDAR DATOS EN NUESTRA TABLA 
           $pupil-> save();
           return $pupil;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //eliminar datos de nuestra tabla
        Student::destroy($id);
        return"delete successfully";
    }
}
