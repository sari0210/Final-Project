<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //TRAER TODOS LOS DATOS DE LAS COLUMNAS TEACHER SELECT * from teacher;
        $teacher = Teacher::all();
        return $teacher;
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
        $teacher = new Teacher;
        $teacher-> name = $request->name;
        $teacher-> lastname = $request->lastname;
        $teacher-> address = $request->address;
        $teacher-> phone_number = $request->phone_number;
        $teacher-> groups_id = $request->groups_id;
        //GUARDAR DATOS EN NUESTRA TABLA
        $teacher-> save();
        return $teacher;
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
        //buscamos al maestro, si no existe fallamos y no seguimos la ejecucion
        $teacher = Teacher::findOrFail($id);
        // ACTUALIZAR LOS DATOS
        $teacher-> name = $request->name;
        $teacher-> lastname = $request->lastname;
        $teacher-> address = $request->address;
        $teacher-> phone_number = $request->phone_number;
        $teacher-> groups_id = $request->groups_id;
        // GUARDAR DATOS EN NUESTRA TABLA
        $teacher-> save();
        return $teacher;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //eliminar datos de nuestra tabla
        Teacher::destroy($id);
        return "delete successfully";
    }
}
