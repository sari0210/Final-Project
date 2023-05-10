<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Groups;

use Illuminate\Support\Facades\Log;

class ViewTeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() 
    {
        //
          //$teacher = Teacher::all();
          //$groups_id=Groups::all();
        $teacher = Teacher::join('groups','teachers.groups_id','groups.id')
        ->select('groups.groups_name as groups','teachers.id as id_teachers'
        ,'teachers.name','teachers.lastname','teachers.address',
        'teachers.phone_number','teachers.groups_id',
         'teachers.groups_id')->get();
      return view("teacher.selectTeacher" , array("maestros" =>$teacher));
      
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {  
        //crear un nuevo maestro
        $teacher = Teacher::all();
        $groups_id=Groups::all();
       
        return view("teacher.createTeacher", array("maestros"=>$teacher, "groups_id"=> $groups_id));
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
       // $teacher = Teacher::find("$id");
        $teacher = Teacher::join('groups','teachers.groups_id','groups.id')
        ->select('groups.groups_name as groups','teachers.id as id_teachers'
        ,'teachers.name','teachers.lastname','teachers.address',
        'teachers.phone_number','teachers.groups_id',
         'teachers.groups_id')->find($id);
        $groups_id=Groups::all();

        return view("teacher.editTeacher",array("maestros" =>$teacher, "groups_id"=> $groups_id));
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
        $teacher->update();
            return redirect()->route("maestros");
           
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
