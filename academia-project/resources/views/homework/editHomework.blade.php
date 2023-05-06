@extends('homework.homework')
@section('content_h')

<div class="card card-formulario">
    <div class="card-header">Edit Tarea</div>
    <div class="card-body">
        <form action="{{url('updateHomework',$tareas->id) }}" method="post">
           
            @method('PUT')
            @csrf
            <label for="" class="form-label">Estado</label>
            <input type="text" name="status" id="status" class="form-control" value="{{ $tareas->status}}">

            <label for="" class="form-label">Estudiante</label>
            <input type="text" name="student_id" id="student_id" class="form-control" value="{{ $tareas->student_id}}">

            <label for="" class="form-label">Name</label>
            <input type="text" name="course_id" id="course_id" class="form-control" value="{{ $tareas->course_id}}">
            
            <input type="submit"  value="Update" class="btn btn-success btn-add" >
            
        </form>
    </div>
</div>
@stop