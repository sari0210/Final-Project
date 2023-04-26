@extends('course.selectcourse')
@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Course Name</th>
      </tr>
    </thead>
    <tbody>
        @foreach  ($cursos as $curso)
      <tr>
        
      
        <th scope="row">{{$curso-> id}}</th> 
        <td>{{$curso->course_name}}</td>
      
        <td><a href="{{url('cursos/'.$curso-> id)}}" class="btn btn-warning">Edit</a>
           <form action="{{url('cursos/'.$curso->id)}}" method="post">
            @csrf 
            @method("Delete")
            <button class="btn btn-danger" type="submit">Delete</button>
        </form>
     
      </tr>
       @endforeach
    </tbody>
  </table>
  <div>
    <a href="{{url('cursos/createcourse') }}" values="Add " class="btn btn-success"> Add Articulos</a>

  </div>
    @endsection
   

