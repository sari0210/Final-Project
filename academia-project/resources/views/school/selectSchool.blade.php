@extends('school.school')
@section('content_school')
<table class="table">
    <thead>

      <tr>
        <th scope="col">ID</th>
        <th scope="col">School Name</th>
        <th scope="col">Director Name</th>
        <th scope="col">School Address</th>
        <th scope="col">Phone Number</th>
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
      
        <td><a href="{{url('escuelas/'.$item->id)}}" class="btn btn-warning">Edit</a>
          
           <form action="{{url('escuelas/'.$item->id)}}" method="post">
            @csrf 
            @method("Delete")
            <button class="btn btn-danger" type="submit">Delete</button>
        </form>
     
      </tr>
       @endforeach
    </tbody>
  </table>
  <div>
    <a href="{{url('escuelas/create')}}" values="Add Course" class="btn btn-success"> Add Course</a>

  </div>
    @endsection
   
