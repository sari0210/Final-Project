@extends('teacher.teacher')

@section('content')


<div class="card">
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
            <label for="" class="form-label">Group id</label>
            <input type="text" name="groups_id" id="groups_id" class="form-control">
            <input type="submit" value="Add Teacher" class="btn btn-success" >
        </form>
    </div>
</div>
@stop