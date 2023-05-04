@extends('homework.homework')
@section('content_h')
<table class="table">
    <thead>

      <tr>
      <th scope="col">ID</th>
        <th scope="col">Status</th>
        <th scope="col">Student ID</th>
        <th scope="col">Course ID</th>
        
      </tr>
    </thead>
    <tbody>
    @foreach  ($tareas as $item)
      <tr>
        
      
        <th scope="row">{{$item->id}}</th> 
        <td >{{$item->status}}</td>
        <td >{{$item->student_id}}</td>
        <td >{{$item->course_id}}</td>
        
        
      
        <td><a href="{{url('tareas/'.$item->id)}}" class="btn btn-warning">Edit</a>
           <form action="{{url('tareas/'.$item->id)}}" method="post">
           
            @csrf 
            @method("Delete")
            <button class="btn btn-danger" type="submit">Delete</button>
        </form>
     
      </tr>
       @endforeach
    </tbody>
  </table>
  <div>
    <a href="{{url('tareas/create')}}" values="Add Group" class="btn btn-success"> Add Tarea</a>
  </div>
    @endsection

