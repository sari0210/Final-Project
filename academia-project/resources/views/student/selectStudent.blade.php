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
    @foreach  ($pupil as $item)
      <tr>
        
      
        <th scope="row">{{$item->id}}</th> 
        <td>{{$item->name}}</td>
      
        <td><a href="{{url('pupil/'.$item->id)}}" class="btn btn-warning">Edit</a>
           <form action="{{url('pupil/'.$item->id)}}" method="post">
            @csrf 
            @method("Delete")
            <button class="btn btn-danger" type="submit">Delete</button>
        </form>
     
      </tr>
       @endforeach
    </tbody>
  </table>
  <div>
    <a href="{{url('pupil/create')}}" values="Add Student" class="btn btn-success"> Add Student</a>

  </div>
    @endsection
   
