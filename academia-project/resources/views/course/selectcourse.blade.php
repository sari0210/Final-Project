@extends('course.course')
@section('content')
<table class="table">
    <thead>

      <tr>
        <th scope="col">ID</th>
        <th scope="col">Course Name</th>
      </tr>
    </thead>
    <tbody>
        @foreach  ($cursos as $item)
      <tr>
        
      
        <th scope="row">{{$item->id}}</th> 
        <td>{{$item->course_name}}</td>
      
        <td><a href="{{url('cursos/'.$item->id)}}" class="btn btn-warning">Edit</a>
           <form action="{{url('cursos/'.$item->id)}}" method="post">
            @csrf 
            @method("Delete")
            <button class="btn btn-danger" type="submit">Delete</button>
        </form>
     
      </tr>
       @endforeach
    </tbody>
  </table>
  <div>
    <a href="{{url('cursos/create')}}" values="Add Course" class="btn btn-success"> Add Course</a>

  </div>
    @endsection
   
