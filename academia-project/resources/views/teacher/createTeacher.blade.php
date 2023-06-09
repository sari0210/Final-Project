@extends('teacher.teacher')

@section('content')

<link rel="stylesheet" href="{{ asset('css/formularios.css') }}">

<div class="card card-formulario">
    <div class="card-header">Add Teacher</div>
    <div class="card-body">
        <form action="{{url('maestros')}}" method="post">
            @csrf
            <label for="" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control">
            <label for="" class="form-label">Lastname</label>
            <input type="text" name="lastname" id="lastname" class="form-control">
            <label for="" class="form-label">Address</label>
            <input type="text" name="address" id="address" class="form-control">
            <label for="" class="form-label">Phone number</label>
            <input type="text" name="phone_number" id="phone_number" class="form-control">
            <label for="" class="form-label">Group Name</label>
            <br>
            <select name="groups_id" id="" class="form-select" aria-label="Default select example">
                <option value="" selected>Seleccionar Grupo </option>
                @foreach ($groups_id as $item1)
                <option value="{{$item1->id}}">{{$item1->groups_name}}</option>
                @endforeach
            </select>
            
            
           
            <input type="submit" value="Add Teacher" class="btn btn-success btn-add" >
            <br><br><br><br>
        </form>
    </div>
</div>
@stop