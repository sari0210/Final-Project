<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Groups;
use Illuminate\Support\Facades\Log;

class ViewStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $pupil= Student::all();
        $groups_id= Groups ::all();
      return view("student.selectStudent", array("estudiantes"=>$pupil, "groups_id"=> $groups_id));
     
    }
   

   

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // 
        
        return view('student.createStudent');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $pupil = new Student;
        $pupil-> name = $request->name;
        $pupil-> lastname = $request->lastname;
        $pupil-> age = $request->age;
        $pupil-> address = $request->address;
        $pupil-> responsible_name = $request->responsible_name;
        $pupil-> phone_number = $request->phone_number;
        $pupil-> groups_id = $request->groups_id;
        $pupil-> school_id = $request->school_id;
        
        //GUARDAR DATOS EN NUESTRA TABLA 
        if($pupil != null){
         $pupil-> save();
         return redirect("estudiantes");
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
       
        $pupil = Student::find("$id");
        $groups_id=Groups::all();
        
        
        return view("student.editStudent",array("estudiantes"=>$pupil,"groups_id"=> $groups_id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $pupil =Student::find($id);
        $pupil-> name = $request-> post("name");
        $pupil-> lastname = $request-> post ("lastname");
        $pupil-> age = $request->post("age");
        $pupil-> address = $request->post("address");
        $pupil-> responsible_name = $request->post("responsible_name");
        $pupil-> phone_number = $request->post("phone_number");
        $pupil-> groups_id = $request->post("groups_id");
        $pupil-> school_id = $request->post("school_id");
         return redirect("estudiantes");
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        try{
            $pupil = Student::where("id","=",$id)->delete();
            return redirect("estudiantes");
        } catch (\Exception $e) {
            // Manejo de la excepción
            Log::error('Error al actualizar el usuario: ' . $e->getMessage());
            return response()->json(['error' => 'No se puede eliminar .'], 500);
            
        };
    }
}
