@extends('student.students')
@section('content')



<div class="container">
  <div>
    <a href="{{route('registrar')}}" values="Add Student" class="btn btn-success"> Add Student</a>

  </div>
  <br>
<table class="table">
    <thead>

      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Lastname</th>
        <th scope="col">Age</th>
        <th scope="col">Address</th>
        <th scope="col">Responsible name</th>
        <th scope="col">Phone number</th>
        <th scope="col">Group Name</th>
        <th scope="col">School Name</th>
        <th scope="col"></th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
    @foreach  ($estudiantes as $item)
      <tr>
        
      
        <th scope="row">{{$item->id_students}}</th> 
        <td >{{$item->name}}</td>
        <td>{{$item->lastname}}</td>
        <td>{{$item->age}}</td>
        <td >{{$item->address}}</td>
        <td>{{$item->responsible_name}}</td>
        <td >{{$item->phone_number}}</td>
        <td >{{$item->groups}}</td>
        <td >{{$item->schools}}</td>
        
      
        <td>
          <a href="{{url('estudiantes/'.$item->id_students)}}" class="btn btn-warning btn-edicion">Edit</a>
        </td>  
        
        <td>
          <form action="{{url('estudiantes/'.$item->id_students)}}" method="post">
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
   
