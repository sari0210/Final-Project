<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
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
        //
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
    }

    /**
     * Remove the specified resource from storage.
     */
   
       public function destroy(Request $request){
        //Session::destroy(['usuario_id','usuario_nombre']);
        $request->session()->forget(['usuario_id', 'usuario_nombre']);
        return redirect()->route('usuario.login');
    }

    
}
