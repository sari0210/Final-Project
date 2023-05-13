@extends('admin.admin')
@section('content')

<div class="card card-formulario">
    <div class="card-header">Edit Usuario</div>
    <div class="card-body">
        <form action="{{route('administrador',$usuarios->id)}}" method="post">
           
            @method('PUT')
            @csrf
            <label for="" class="form-label">Usuario</label>
            <input type="text" name="user" id="user" class="form-control" value="{{$usuarios->user}}">

            <label for="" class="form-label">Contraseña</label>
            <input type="text" name="pass" id="pass" class="form-control" value="{{$usuarios->pass}}">

            <label for="" class="form-label">Status</label>
            <input type="text" name="status" id="pass" class="form-control" value="{{$usuarios->status}}">
            
          
            <input type="submit"  value="Update" class="btn btn-success btn-add" >
            
        </form>
    </div>
</div>
@stop