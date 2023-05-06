@extends('group.group')
@section('content')

<div class="card card-formulario">
    <div class="card-header">Edit Grupos</div>
    <div class="card-body">
        <form action="{{url('updateGrupo',$grupos->id) }}" method="post">
           
            @method('PUT')
            @csrf
            <label for="" class="form-label">Name</label>
            <input type="text" name="groups_name" id="groups_name" class="form-control" value="{{ $grupos->groups_name}}">
            
            <input type="submit"  value="Update" class="btn btn-success btn-add" >
            
        </form>
    </div>
</div>
@stop