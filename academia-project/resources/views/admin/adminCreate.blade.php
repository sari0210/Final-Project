@extends('admin.admin')
@section('content')

<link rel="stylesheet" href="{{ asset('css/formularios.css') }}">

<div class="card card-formulario">
    <div class="card-header">Add Usuario</div>
    <div class="card-body">
        <form action="{{url('usuarios')}}" method="post">
            @csrf
            
            <label for="" class="form-label">Usuario</label>
            <input type="text" name="user" id="user" class="form-control">
            <label for="" class="form-label">Contraseña</label>
            <input type="text" name="pass" id="pass" class="form-control">
            <label for="" class="form-label">Estado</label>
            <input type="text" name="status" id="status" class="form-control">
        
            <input type="submit" value="Registrar" class="btn btn-success btn-add" >
           
        </form>
    </div>
</div>
@stop