@extends('school.school')
@section('content_school')

<div class="card card-formulario">
    <div class="card-header">Edit Cursos</div>
    <div class="card-body">
        <form action="{{url('updateSchool',$escuelas->id) }}" method="post">
           
            @method('PUT')
            @csrf
            <label for="" class="form-label">School Name</label>
            <input type="text" name="school_name" id="school_name" class="form-control" value ="{{$escuelas->school_name}}">

            <label for="" class="form-label">Director Name</label>
            <input type="text" name="director_name" id="director_name" class="form-control" value ="{{$escuelas->director_name}}">

            <label for="" class="form-label">School Address</label>
            <input type="text" name="school_address" id="school_address" class="form-control" value ="{{$escuelas->school_address}}">

            <label for="" class="form-label">Phone Number</label>
            <input type="text" name="phone_number" id="phone_number" class="form-control" value ="{{$escuelas->phone_number}}">
            
          
            <input type="submit"  value="Update" class="btn btn-success btn-add" >
            
        </form>
    </div>
</div>
@stop