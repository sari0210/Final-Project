@extends('homework.homework')
@section('content_h')

<div class="card card-formulario">
    <div class="card-header">Edit Tarea</div>
    <div class="card-body">
        <form action="{{url('updateHomework',$tareas->homework_id) }}" method="post">
           
            @method('PUT')
            @csrf
            <label for="" class="form-label">Estado</label>
            <input type="text" name="status" id="status" class="form-control" value="{{ $tareas->status}}">
            <br>

            <label for="" class="form-label">Student Name</label>
            <br>
            <select name="student_id" id="" class="form-select" aria-label="Default select example">
                <option value="{{$tareas->student_id}}">{{$tareas->alumno}}</option>
                @foreach ($student_name as $item1)
                <option value="{{$item1->id}}">{{$item1->name}}</option>
                @endforeach
            </select>
            <br>

            <label for="" class="form-label">Course Name</label>
            <br>
            <select name="course_id" id="" class="form-select" aria-label="Default select example">
                <option value="{{$tareas->course_id}}">{{$tareas->curso}}</option>
                @foreach ($course_name as $item2)
                <option value={{$item2->id}}>{{$item2->course_name}}</option>
                @endforeach
            </select>
            <br>
            
            <input type="submit"  value="Update" class="btn btn-success btn-add" >
            
        </form>
    </div>
</div>
@stop