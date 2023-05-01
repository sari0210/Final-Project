@extends('student.students')
@section('content')

<div class="card">
    <div class="card-header">Edit Cursos</div>
    <div class="card-body">
        <form action="{{url('update',$estudiantes->id) }}" method="post">
           
            @method('PUT')
            @csrf
            <label for="" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $estudiantes->name}}">
            <label for="" class="form-label">Lastname</label>
            <input type="text" name="lastname" id="lastname" class="form-control" value="{{ $estudiantes->lastname}}">
            <label for="" class="form-label">Age</label>
            <input type="text" name="age" id="age" class="form-control" value="{{ $estudiantes->age}}">
            <label for="" class="form-label">Address</label>
            <input type="text" name="address" id="address" class="form-control" value="{{ $estudiantes->address}}">
            <label for="" class="form-label">Responsible name</label>
            <input type="text" name="responsible_name" id="responsible_name" class="form-control"value="{{ $estudiantes->responsible_name}}">
            <label for="" class="form-label">Phone number</label>
            <input type="text" name="phone_number" id="phone_number" class="form-control"value="{{ $estudiantes->phone_number}}">
            <label for="" class="form-label">Group id</label>
            <input type="text" name="groups_id" id="groups_id" class="form-control" value="{{ $estudiantes->groups_id}}">
            <label for="" class="form-label">School id</label>
            <input type="text" name="school_id" id="school_id" class="form-control"value="{{ $estudiantes->school_id}}">
            
          
            <input type="submit"  value="Update" class="btn btn-success" >
            
        </form>
    </div>
</div>
@stop