@extends('teacher.teachers')
@section('content')
<table class="table">
    <thead>

      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Lastname</th>
        <th scope="col">Address</th>
        <th scope="col">Phone number</th>
        <th scope="col">Groups id</th>
      </tr>
    </thead>
    <tbody>
    @foreach  ($maestros as $item)
      <tr>
        
      
        <th scope="row">{{$item->id}}</th> 
        <td >{{$item->name}}</td>
        <td>{{$item->lastname}}</td>
        <td >{{$item->address}}</td>
        <td >{{$item->phone_number}}</td>
        <td >{{$item->groups_id}}</td>
        
      
        <td><a href="{{url('maestros/'.$item->id)}}" class="btn btn-warning">Edit</a>
           <form action="{{url('maestros/'.$item->id)}}" method="post">
           
            @csrf 
            @method("Delete")
            <button class="btn btn-danger" type="submit">Delete</button>
        </form>
     
      </tr>
       @endforeach
    </tbody>
  </table>
  <div>
    <a href="{{url('maestros/create')}}" values="Add Teacher" class="btn btn-success"> Add Teacher</a>

  </div>
    @endsection
   
