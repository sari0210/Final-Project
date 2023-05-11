@extends('homework.homework')
@section('content_h')

<link rel="stylesheet" href="{{ asset('css/formularios.css') }}">

<div class="card card-formulario">
    <div class="card-header">Agregar Tareas</div>
    <div class="card-body">
        <form action="{{url('tareas')}}" method="post">
            @csrf
            
            <label for="" class="form-label">Status</label>
            <input type="text" name="status" id="status" class="form-control">
            <br>

            <label for="" class="form-label">Students</label>
            <br>
            <select name="student_id" class="form-select" aria-label="Default select example">
                <option selected>Seleccionar Estudiante</option>
                @foreach ($student_name as $item1)
                <option value="{{$item1->id}}">{{$item1->name}}</option>
                @endforeach
            </select>
            <br>

            <label for="" class="form-label">Course Name</label>
            <br>
            <select name="course_id" class="form-select" aria-label="Default select example">
                <option selected>Selecione el curso</option>
                @foreach ($course_name as $item2)
                <option value="{{$item2->id}}">{{$item2->course_name}}</option>
                @endforeach
            </select>
            <br>

            <input type="submit" value="Add Tarea" class="btn btn-success btn-add" >
           
        </form>
    </div>
</div>
@stop