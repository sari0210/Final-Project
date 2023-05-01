@extends('students.students')
@section('content')


<div class="card">
    <div class="card-header">Add Students</div>
    <div class="card-body">
        <form action="{{url('pupil')}}" method="post">
            @csrf
            <label for="" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control">
            <input type="submit" value="Add Students" class="btn btn-success" >
        </form>
    </div>
</div>
@stop