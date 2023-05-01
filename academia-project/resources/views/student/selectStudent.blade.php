@extends('student.students')
@section('content')
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
        <th scope="col">Groups id</th>
        <th scope="col">School id</th>
      </tr>
    </thead>
    <tbody>
    @foreach  ($estudiantes as $item)
      <tr>
        
      
        <th scope="row">{{$item->id}}</th> 
        <td style="">{{$item->name}}</td>
        <td>{{$item->lastname}}</td>
        <td>{{$item->age}}</td>
        <td style="">{{$item->address}}</td>
        <td style="">{{$item->responsible_name}}</td>
        <td style="">{{$item->phone_number}}</td>
        <td style="">{{$item->groups_id}}</td>
        <td style="">{{$item->school_id}}</td>
        
      
        <td><a href="{{url('estudiantes/'.$item->id)}}" class="btn btn-warning">Edit</a>
           <form action="{{url('estudiantes/'.$item->id)}}" method="post">
           
            @csrf 
            @method("Delete")
            <button class="btn btn-danger" type="submit">Delete</button>
        </form>
     
      </tr>
       @endforeach
    </tbody>
  </table>
  <div>
    <a href="{{url('estudiantes/create')}}" values="Add Student" class="btn btn-success"> Add Student</a>

  </div>
    @endsection
   
