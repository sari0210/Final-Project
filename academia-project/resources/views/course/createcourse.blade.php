@extends('course.selectcourse')
@section('content')


<div class="card">
    <div class="card-header">Add Cursos</div>
    <div class="card-body">
        <form action="{{url('cursos') }}" method="post">
            @csrf
            <label for="" class="form-label">Name</label>
            <input type="text" name="course_name" id="course_name" class="form-control">
            <input type="submit" value="Add Cursos" class="btn btn-success" >
        </form>
    </div>
</div>
@stop