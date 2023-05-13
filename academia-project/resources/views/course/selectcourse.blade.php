@extends('course.course')
@section('content')
  <div class="container">
    <div>
      <a href="{{url('cursos/create')}}" values="Add Course" class="btn btn-success"> Add Course</a>
  
    </div>
  <table class="table">
   
    <thead>

      <tr>
        <th scope="col">ID</th>
        <td scope="col"> <b>Course Name</b></td>
        <th scope="col"></th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
        @foreach  ($cursos as $item)
      <tr>
        
      
        <th scope="row">{{$item->id}}</th> 
        <td>{{$item->course_name}}</td>
      
        <td>
          <a href="{{url('cursos/'.$item->id)}}" class="btn btn-warning btn-edicion">Edit</a>
        </td>
        <td>
          <form action="{{url('cursos/'.$item->id)}}" method="post">
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
   
