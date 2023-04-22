<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inscription;

class InscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $inscrip =Inscription::all();
        return $inscrip;
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
        //creamos un nuevo insert
        $inscrip =new Inscription;
        $inscrip->course_id = $request->course_id;
        $inscrip->student_id = $request->student_id;
        $inscrip->teacher_id = $request->teacher_id;
        $inscrip->inscrip_date = $request->inscrip_date;
        //GUARDAR DATOS 
        $inscrip-> save();
         return $inscrip;
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
        //
        $inscrip = Inscription::findOrFail($id);
        $inscrip->course_id = $request->course_id;
        $inscrip->student_id = $request->student_id;
        $inscrip->teacher_id = $request->teacher_id;
        $inscrip->inscrip_date = $request->inscrip_date;
        //GUARDAR DATOS 
        $inscrip-> save();
         return $inscrip;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Inscription::destroy($id);
        return "delete successfully";
    }
}
