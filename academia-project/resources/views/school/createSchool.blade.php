@extends('school.school')
@section('content_school')


<div class="card">
    <div class="card-header">Add Escuela</div>
    <div class="card-body">
        <form action="{{url('escuelas')}}" method="post">
            @csrf
            <label for="" class="form-label">School Name</label>
            <input type="text" name="school_name" id="school_name" class="form-control">

            <label for="" class="form-label">Director Name</label>
            <input type="text" name="director_name" id="director_name" class="form-control">

            <label for="" class="form-label">School Address</label>
            <input type="text" name="school_address" id="school_address" class="form-control">

            <label for="" class="form-label">Phone Number</label>
            <input type="text" name="phone_number" id="phone_number" class="form-control">


            <input type="submit" value="Add Cursos" class="btn btn-success" >
        </form>
    </div>
</div>
@stop