@extends('homework.homework')
@section('content_h')
<div class="container">
  <div>
    <a href="{{url('tareas/create')}}" values="Add Group" class="btn btn-success "> Add Tarea</a>
  </div>
<table class="table">
    <thead>

      <tr>
      <th scope="col">ID</th>
        <th scope="col">Status</th>
        <th scope="col">Student Name</th>
        <th scope="col">Course Name</th>
        <th scope="col"></th>
        <th scope="col"></th>
        
      </tr>
    </thead>
    <tbody>
    @foreach  ($tareas as $item)
      <tr>
        
      
        <th scope="row">{{$item->homework_id}}</th> 
        <td >{{$item->status}}</td>
        <td >{{$item->alumno}}</td>
        <td >{{$item->curso}}</td>
        
        
      
        <td>
          <a href="{{url('tareas/'.$item->homework_id)}}" class="btn btn-warning btn-edicion">Edit</a>
        </td>
        <td>
          <form action="{{url('tareas/'.$item->homework_id)}}" method="post">
           
            @csrf 
            @method("Delete")
            <button class="btn btn-danger btn-edicion" type="submit">Delete</button>
        </form>
       </td>  
         
     
      </tr>
       @endforeach
    </tbody>
  </table>
 
</div>
    @endsection

