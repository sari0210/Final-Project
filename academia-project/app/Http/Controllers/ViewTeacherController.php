<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class ViewTeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() 
    {
        //
        $teacher = Teacher::all();
        return view("teacher.selectTeacher" , ["maestros" =>$teacher]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //crear un nuevo maestro
        return view('teacher.createTeacher');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        // 
        $teacher = new Teacher;
        $teacher-> name = $request->name;
        $teacher-> lastname = $request->lastname;
        $teacher-> address = $request->address;
        $teacher-> phone_number = $request->phone_number;
        $teacher-> groups_id = $request->groups_id;
        
        //GUARDAR DATOS EN NUESTRA TABLA 
        if($teacher != null){
         $teacher-> save();
         return redirect("maestros");
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
        //
        $teacher = Teacher::find("$id");
        return view("teacher.editTeacher",["maestros"=>$teacher]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $teacher =Teacher::find("$id");
        $teacher-> name = $request-> post("name");
        $teacher-> lastname = $request-> post ("lastname");
        $teacher-> address = $request->post("address");
        $teacher-> phone_number = $request->post("phone_number");
        $teacher-> groups_id = $request->post("groups_id");
        if($teacher != null){
            $teacher-> update();
            return redirect("maestros");
           }else {
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
            $teacher = Teacher::where("id","=",$id)->delete();
            return redirect("maestros");
        } catch (\Exception $e) {
            // Manejo de la excepción
            Log::error('Error al actualizar el usuario: ' . $e->getMessage());
            return response()->json(['error' => 'No se puede eliminar .'], 500);
            
        };
    }
}
