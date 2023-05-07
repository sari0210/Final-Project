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

            <label for="" class="form-label">Student Name</label>
            <br>
            <select name="student_name" id="">
                <option value="{{$tareas->id}}">{{$tareas->tareas_name}}</option>
                @foreach ($nombre_estudiante as $item1)
                <option value="{{$item1->id}}">{{$item1->name}}</option>
                @endforeach
            </select>
            <br>

            <label for="" class="form-label">Course Name</label>
            <br>
            <select name="course_name" id="">
                <option value="{{$tareas->id}}">{{$tareas->tareas_name}}</option>
                @foreach ($nombre_curso as $item1)
                <option value="{{$item1->id}}">{{$item1->course_name}}</option>
                @endforeach
            </select>
            <br>



            <label for="" class="form-label">Name</label>
            <input type="text" name="course_id" id="course_id" class="form-control" value="{{ $tareas->course_id}}">
            
            <input type="submit"  value="Update" class="btn btn-success btn-add" >
            
        </form>
    </div>
</div>
@stop