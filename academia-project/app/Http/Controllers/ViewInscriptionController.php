<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inscription;
use App\Models\Course;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Support\Facades\Log;


class ViewInscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //obtener lista de inscripcion 
        $inscripciones = Inscription::all();
        $inscrip_curso = Course::all();
        $inscrip_alumno = Student::all();
        $inscrip_maestro = Teacher::all();
        return view ("inscription.selectInscription", array("inscripciones" =>$inscripciones, "inscrip_curso" => $inscrip_curso , "inscrip_alumno" => $inscrip_alumno , "inscrip_maestro" => $inscrip_maestro ));
    }

    /*public function getcurso()
    {
        //
        $inscrip_curso = Course::all();
        return view ("inscription.createInscription", ["inscrip_curso" => $inscrip_curso]);
    }
    public function getalumno()
    {
        //
        $inscrip_alumno = Student::all();
        return view ("inscription.createInscription", ["inscrip_alumno" => $inscrip_alumno]);
    }
    public function getmaestro()
    {
        //
        $inscrip_maestro = Teacher::all();
        return view ("inscription.createInscription", ["inscrip_maestro" => $inscrip_maestro]);
    }


     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $inscrip_curso = Course::all();
        $inscrip_alumno = Student::all();
        $inscrip_maestro = Teacher::all();
        return view("inscription.createInscription", array("inscrip_curso" => $inscrip_curso , "inscrip_alumno" => $inscrip_alumno , "inscrip_maestro" => $inscrip_maestro ));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $inscripciones = new Inscription;
        $inscripciones-> course_id = $request-> course_id;
        $inscripciones-> student_id = $request-> student_id;
        $inscripciones-> teacher_id = $request-> teacher_id;
        $inscripciones-> inscrip_date = $request-> inscrip_date;
        //guardar datos 
        if($inscripciones != null){
            $inscripciones-> save();
            return redirect("inscripciones");
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
    public function edit($id)
    {
        //
        $inscripciones = Inscription::find($id);
        $inscrip_curso = Course::all();
        $inscrip_alumno = Student::all();
        $inscrip_maestro = Teacher::all();
        
       return view("inscription.editinscription" , array("inscripciones" =>$inscripciones, "inscrip_curso" => $inscrip_curso , "inscrip_alumno" => $inscrip_alumno , "inscrip_maestro" => $inscrip_maestro ) );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //eliminar registro
        
            $inscripciones = Inscription::where("id","=",$id)->delete();
            return redirect("inscripciones");
      
         
    }
}
