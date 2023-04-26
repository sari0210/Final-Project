@extends('course.selectcourse')
@section('content')

<div class="card">
    <div class="card-header">Edit Cursos</div>
    <div class="card-body">
        <form action="{{url('cursos'. $curso->id) }}" method="post">
            @csrf
            @method('PUT')
            <label for="" class="form-label">Name</label>
            <input type="text" name="course_name" id="course_name" class="form-control" value="{{ $curso-> course_name}}">
            
          
            <input type="submit" value="Add Course" class="btn btn-success" >
        </form>
    </div>
</div>
@stop