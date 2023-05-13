@extends('school.school')
@section('content_school')
<div class="container">

  <div>
    <a href="{{url('escuelas/create')}}" values="Add Course" class="btn btn-success"> Add Course</a>

  </div>
  <br>

<table class="table">
    <thead>

      <tr>
        <th scope="col">ID</th>
        <th scope="col">School Name</th>
        <th scope="col">Director Name</th>
        <th scope="col">School Address</th>
        <th scope="col">Phone Number</th>
        <th scope="col"></th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
        @foreach  ($escuelas as $item)
      <tr>
        
      
        <th scope="row">{{$item->id}}</th> 
        <td>{{$item->school_name}}</td>
        <td>{{$item->director_name}}</td>
        <td>{{$item->school_address}}</td>
        <td>{{$item->phone_number}}</td>
      
        <td>
          <a href="{{url('escuelas/'.$item->id)}}" class="btn btn-warning btn-edicion">Edit</a>
        </td>
        <td>
          <form action="{{url('escuelas/'.$item->id)}}" method="post">
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
   
