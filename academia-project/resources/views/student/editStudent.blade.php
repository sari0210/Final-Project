@extends('student.students')
@section('content')

<div class="card">
    <div class="card-header">Edit Cursos</div>
    <div class="card-body">
        <form action="{{url('update',$pupil->id) }}" method="post">
           
            @method('PUT')
            @csrf
            <label for="" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $pupil->name}}">
            
          
            <input type="submit"  value="Update" class="btn btn-success" >
            
        </form>
    </div>
</div>
@stop