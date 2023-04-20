<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //TRAER TODOS LOS DATOS 
        $admin = Admin::all();
        return $admin;
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
        //creamos el objeto para guardarlo
        $admin = new Admin; 
        $admin->user = $request->user;
        $admin->pass = $request->pass;
        $admin->status = $request->status;
        //guardar datos en nuestra table
        $admin->save();
        return $admin;

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
        //actualizar datos
        $admin = Admin::findOrFail($id);
        $admin->user = $request->user;
        $admin->pass = $request->pass;
        $admin->status = $request->status;
        //guardar datos en nuestra table
        $admin->save();
        return $admin;

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //eliminar datos de nuestra tabla 
        Admin::destroy($id);
        return "delete successfully";
        
    }
}
