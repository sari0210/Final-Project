@extends('homework.homework')
@section('content_h')


<div class="card">
    <div class="card-header">Agregar Tareas</div>
    <div class="card-body">
        <form action="{{url('tareas')}}" method="post">
            @csrf
            
            <label for="" class="form-label">Status</label>
            <input type="text" name="status" id="status" class="form-control">

            <label for="" class="form-label">Estudiantes</label>
            <input type="text" name="students_id" id="students_id" class="form-control">

            <label for="" class="form-label">Curso</label>
            <input type="text" name="course_id" id="course_id" class="form-control">

            <input type="submit" value="Add Tarea" class="btn btn-success" >
           
        </form>
    </div>
</div>
@stop