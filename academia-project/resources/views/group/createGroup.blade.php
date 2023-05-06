@extends('group.group')
@section('content')

<link rel="stylesheet" href="{{ asset('css/formularios.css') }}">

<div class="card card-formulario">
    <div class="card-header">Add Group</div>
    <div class="card-body">
        <form action="{{url('grupos')}}" method="post">
            @csrf
            
            <label for="" class="form-label">Name</label>
            <input type="text" name="groups_name" id="groups_name" class="form-control">
            <input type="submit" value="Add Groups" class="btn btn-success btn-add" >
           
        </form>
    </div>
</div>
@stop