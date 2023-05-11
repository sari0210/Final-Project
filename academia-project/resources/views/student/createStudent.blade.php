@extends('student.students')

@section('content')

<link rel="stylesheet" href="{{asset('css/formularios.css') }}">

<div class="card card-formulario">
    <div class="card-header">Add Students</div>
    <div class="card-body">
        <form action="{{url('estudiantes')}}" method="post">
            @csrf
            <label for="" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control">
            <label for="" class="form-label">Lastname</label>
            <input type="text" name="lastname" id="lastname" class="form-control">
            <label for="" class="form-label">Age</label>
            <input type="text" name="age" id="age" class="form-control">
            <label for="" class="form-label">Address</label>
            <input type="text" name="address" id="address" class="form-control">
            <label for="" class="form-label">Responsible name</label>
            <input type="text" name="responsible_name" id="responsible_name" class="form-control">
            <label for="" class="form-label">Phone number</label>
            <input type="text" name="phone_number" id="phone_number" class="form-control">
            <label for="" class="form-label">Group Name</label>
            <br>
            <select name="groups_id" id="" class="form-select" aria-label="Default select example">
                <option value="" selected>Seleccionar Grupo</option>
                @foreach ($groups_id as $item)
                <option value="{{$item->id}}">{{$item->groups_name}}</option>
                @endforeach
            </select>
            <br>

            <label for="" class="form-label">School Name</label>
            <br>
            <select name="school_id" id="" class="form-select" aria-label="Default select example">
                <option value="" selected>Seleccionar Escuela</option>
                @foreach ($school_id as $item1)
                <option value="{{$item1->id}}">{{$item1->school_name}}</option>
                @endforeach
            </select>
            <br>
            
            <input type="submit" value="Add Students" class="btn btn-success btn-add" >
        </form>
    </div>
</div>
@stop