<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Groups;
use Illuminate\Support\Facades\Log;

class ViewGroupsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $grupo = Groups :: all();
        return view("group.slectGroup", ["grupos"=> $grupo]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view ("group.createGroup");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $grupo = new Groups;
        $grupo-> groups_name = $request->groups_name;

        if ($grupo != null){
            $grupo-> save();
            return redirect("grupos");
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
        $grupo = Groups::find("$id");
        return view("group.editGroup",["grupos"=> $grupo]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $grupo = Groups::find($id);
        $grupo-> groups_name = $request-> post ("groups_name");
        if($grupo!= null){
            $grupo-> update();
            return redirect("grupos");
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
            $grupo = Groups::where("id","=",$id)->delete();
            return redirect("grupos");
        } catch (\Exception $e) {
            // Manejo de la excepción
            Log::error('Error al actualizar el usuario: ' . $e->getMessage());
            return response()->json(['error' => 'No se puede eliminar .'], 500);
            
        };
    }
}
