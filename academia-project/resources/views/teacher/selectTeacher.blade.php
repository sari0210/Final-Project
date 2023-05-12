@extends('teacher.teacher')
@section('content')

<div class="container">
<table class="table">
    <thead>

      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Lastname</th>
        <th scope="col">Address</th>
        <th scope="col">Phone number</th>
        <th scope="col">Groups Name</th>
      </tr>
    </thead>
    <tbody>
    @foreach  ($maestros as $item)
      <tr>
        
      
        <th scope="row">{{$item->id_teachers}}</th> 
        <td >{{$item->name}}</td>
        <td>{{$item->lastname}}</td>
        <td >{{$item->address}}</td>
        <td >{{$item->phone_number}}</td>
        <td >{{$item->groups}}</td>
        
      
        <td><a href="{{url('maestros/'.$item->id_teachers)}}" class="btn btn-warning btn-edicion">Edit</a>
           <form action="{{url('maestros/'.$item->id_teachers)}}" method="post">
           
            @csrf 
            @method("Delete")
            <button class="btn btn-danger btn-edicion" type="submit">Delete</button>
        </form>
     
      </tr>
       @endforeach
    </tbody>
  </table>
  <div>
    <a href="{{route('registro')}}" values="Add Teacher" class="btn btn-success"> Add Teacher</a>

  
</div>
    @endsection
   
