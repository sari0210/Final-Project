@extends('course.course')
@section('content')

<div class="card">
    <div class="card-header">Edit Cursos</div>
    <div class="card-body">
        <form action="{{url('update',$curso->id) }}" method="post">
           
            @method('PUT')
            @csrf
            <label for="" class="form-label">Name</label>
            <input type="text" name="course_name" id="course_name" class="form-control" value="{{ $curso->course_name}}">
            
          
            <input type="submit"  value="Update" class="btn btn-success" >
            
        </form>
    </div>
</div>
@stop