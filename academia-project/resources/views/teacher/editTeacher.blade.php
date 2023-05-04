@extends('teacher.teachers')
@section('content')

<div class="card">
    <div class="card-header">Edit Maestros</div>
    <div class="card-body">
        <form action="{{url('updateMaestro',$maestros->id) }}" method="post">
           
            @method('PUT')
            @csrf
            <label for="" class="form-label">Name</label>
            <input type="text" name="-name" id="name" class="form-control" value="{{$maestros->name}}">
            <label for="" class="form-label">Lastname</label>
            <input type="text" name="lastname" id="lastname" class="form-control" value="{{$maestros->lastname}}">
            <label for="" class="form-label">Address</label>
            <input type="text" name="address" id="address" class="form-control" value="{{$maestros->address}}">
            <label for="" class="form-label">Phone number</label>
            <input type="text" name="phone_number" id="phone_number" class="form-control"value="{{$maestros->phone_number}}">
            <label for="" class="form-label">Group id</label>
            <input type="text" name="groups_id" id="groups_id" class="form-control" value="{{$maestros->groups_id}}">
            
          
            <input type="submit"  value="Update" class="btn btn-success" >
            
        </form>
    </div>
</div>
@stop