<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Homeworks;
use Illuminate\Support\Facades\Log;

class ViewHomeworkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $homework = Homeworks :: all();
        return view("homework.selectHomework", ["tareas"=> $homework]);
        
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view ("homework.createHomework");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $homework = new Homeworks;
        $homework->status = $request->status;
        $homework->student_id = $request->student_id;
        $homework->course_id= $request->course_id;

        if ($homework != null){
            $homework-> save();
            return redirect("tareas");
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
        $homework = Homeworks::find($id);
        return view("homework.editHomework",["tareas"=> $homework]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $homework = Homeworks::find($id);
        $homework-> status = $request-> post ("status");
        $homework->student_id = $request->post("student_id");
        $homework->course_id= $request->post("course_id");
        if($homework!= null){
            $homework-> update();
            return redirect("tareas");
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
            $homework = Homeworks::where("id","=",$id)->delete();
            return redirect("tareas");
        } catch (\Exception $e) {
            // Manejo de la excepción
            Log::error('Error al actualizar el usuario: ' . $e->getMessage());
            return response()->json(['error' => 'No se puede eliminar .'], 500);
            
        };
    }
}
