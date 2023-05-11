@extends('teacher.teacher')
@section('content')

<div class="card card-formulario">
    <div class="card-header">Edit Maestros</div>
    <div class="card-body">
        <form action="{{route('actualizarMaestro',$maestros->id_teachers) }}" method="post">
           
            @method('PUT')
            @csrf
            <label for="" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{$maestros->name}}">
            <label for="" class="form-label">Lastname</label>
            <input type="text" name="lastname" id="lastname" class="form-control" value="{{$maestros->lastname}}">
            <label for="" class="form-label">Address</label>
            <input type="text" name="address" id="address" class="form-control" value="{{$maestros->address}}">
            <label for="" class="form-label">Phone number</label>
            <input type="text" name="phone_number" id="phone_number" class="form-control"value="{{$maestros->phone_number}}">

            <label for="" class="form-label">Group Name</label>
            <br>
            <select name="groups_id" id="" class="form-select" aria-label="Default select example">
                <option value="{{$maestros->groups_id}}">{{$maestros->groups}}</option>
                @foreach ($groups_id as $item1)
                <option value="{{$item1->id}}">{{$item1->groups_name}}</option>
                @endforeach
            </select>
            <br>

          
            <input type="submit"  value="Update" class="btn btn-success btn-add" >
            
           <br> <br><br><br>
            
        </form>
    </div>
</div>
@stop