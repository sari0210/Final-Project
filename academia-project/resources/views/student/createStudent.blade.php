@extends('student.students')
@extends('group.slectGroup')
@section('content')


<div class="card">
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

            <label for="">Grupos</label>
            <select name="groups_id" id="groups_id" class="form-control">
                <option value="">Seleccionar un grupo</option>
                @foreach  ($grupos as $item)
                <option >{{$item-> $groups_name}}</option>
                @endforeach
            </select>
            <label for="" class="form-label">Group id</label>
            <input type="text" name="groups_id" id="groups_id" class="form-control">
            <label for="" class="form-label">School id</label>
            <input type="text" name="school_id" id="school_id" class="form-control">
            <input type="submit" value="Add Students" class="btn btn-success" >
        </form>
    </div>
</div>
@stop