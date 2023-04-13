<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Groups;

class GroupsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $grupo = Groups::all();
        return $grupo;
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
       $grupo = new Groups;
       $grupo-> groups_name = $request->groups_name;
         //GUARDAR DATOS EN NUESTRA TABLA 
         $grupo-> save();
         return $grupo;

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
         $grupo = Groups::findOrFail($id);
         // actualizar datos de la tabla
         $grupo-> groups_name = $request->groups_name;
         //GUARDAR DATOS EN NUESTRA TABLA 
         $grupo-> save();
         return $grupo;

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         //eliminar datos de nuestra tabla
         Groups::destroy($id);
         return "delete succssfully";
    }
}
