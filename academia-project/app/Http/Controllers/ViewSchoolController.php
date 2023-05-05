<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;
use Illuminate\Support\Facades\Log;
class ViewSchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $school= School::all();
        return view("school.selectSchool", ["escuelas" =>$school]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view ("school.createSchool");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $school = new School;
        $school->school_name=$request->school_name;
        $school->director_name= $request->director_name;
        $school->school_address= $request->school_address;
        $school->phone_number=$request->phone_number;
      
        if ($school != null){
            $school-> save();
            return redirect("escuelas");
        }else{
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
        //
        $school = School::find($id);
        return view("school.editSchool",["escuelas"=> $school]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $school = School::find($id);
        $school->school_name=$request->post("school_name");
        $school->director_name= $request->post("director_name");
        $school->school_address= $request->post("school_address");
        $school->phone_number=$request->post("phone_number");
      
        if ($school != null){
            $school-> save();
            return redirect("escuelas");
        }else{
            return "error on save";
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        try{
            $school = School::where("id","=",$id)->delete();
            return redirect("escuelas");
        } catch (\Exception $e) {
            // Manejo de la excepción
            Log::error('Error al actualizar el usuario: ' . $e->getMessage());
            return response()->json(['error' => 'No se puede eliminar .'], 500);
            
        };
    }
}
