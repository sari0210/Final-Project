<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Log;

class ViewAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     */
    public function getPlantilla()
    {
        return view('plantilla');
        //
    }

     public function getInicio()
    {
        return view('index');
        //
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function iniciarSesion(Request $request){
        $user=$request->post('user');
        $pass=$request->post('pass');
        $status=$request->post('status');

        $admin = Admin::where("user","=",$user)->where("pass","=",$pass)->where("status","=",$status)->get();

        foreach($admin as  $value){
            session(['usuario_id'=>$value->id]);
            session(['usuario_nombre' => $value->user]);
            
        return redirect()->route('home');
        }

        //
    }


     public function index()
     { $admin = Admin::all();
         return view('admin.selectAdmin', ["usuarios"=>$admin]);
         //
     }
     public function create()
     {  
         //crear un nuevo administrador
         $admin= Admin::all();
        
         return view("admin.adminCreate");
     }

     public function edit(string $id)
    {
        //
        $admin = Admin::find("$id");
        return view("admin.editAdmin" , ["usuarios"=>$admin]);
    }

    public function update(Request $request, string $id)
    {
        //
        $admin =Admin::find("$id");
        $admin-> user = $request-> post("user");
        $admin-> pass = $request-> post ("pass");
        $admin-> status = $request-> post ("status");
        $admin->update();
            return redirect()->route("usuarios");
    }





     
   
    

   

    public function store(Request $request)
    {
        //
        $admin = new Admin;
        $admin-> user = $request->user;
        $admin-> pass = $request->pass;
        $admin-> status = $request->status;
        
        
        //GUARDAR DATOS EN NUESTRA TABLA 
        if($admin != null){
         $admin-> save();
         return redirect("usuarios");
        }else {
         return "error on save";
        }
    }

    /*public function destroy(Request $request){
        //Session::destroy(['usuario_id','usuario_nombre']);
        $request->session()->forget(['usuario_id', 'usuario_nombre']);
        return redirect()->route('usuario.login');
    }*/

    
        public function destroy(string $id)
        {
            //
            try{
                $admin = Admin::where("id","=",$id)->delete();
                return redirect("usuarios");
            } catch (\Exception $e) {
                // Manejo de la excepción
                Log::error('Error al actualizar el usuario: ' . $e->getMessage());
                return response()->json(['error' => 'No se puede eliminar .'], 500);
                
            };
    }


 
    /**
     * Store a newly created resource in storage.
     */

    
    /**
     * Store a newly created resource in storage.
     */

    

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
    

    /**
     * Update the specified resource in storage.
     */
    
    /**
     * Remove the specified resource from storage.
     */
    
}
