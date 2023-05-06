@extends('inscription.inscription')
@section('content')
  <div class="container">
  <table class="table">
    <thead>

      <tr>
        <th scope="col">ID</th>
        <th scope="col">Course id</th>
        <th scope="col">Student id</th>
        <th scope="col">Teacher Id</th>
        <th scope="col">Fecha de inscripcion</th>
      </tr>
    </thead>
    <tbody>
        @foreach  ($inscripciones as $item)
      <tr>
        
      
        <th scope="row">{{$item->id}}</th> 
        <td>{{$item->course_id}}</td>
        <td>{{$item->student_id}}</td>
        <td>{{$item->teacher_id}}</td>
        <td>{{$item->inscrip_date}}</td>
      
        <td>
            <a href="{{url('inscripciones/'.$item->id)}}" class="btn btn-warning btn-edicion">Edit</a>
        </td>
        <td>
            <form action="{{url('inscripciones/'.$item->id)}}" method="post">
                @csrf 
                @method("Delete")
                <button class="btn btn-danger btn-edicion" type="submit">Delete</button>
            </form>
        </td>    
          
       
     
      </tr>
       @endforeach
    </tbody>
  </table>
  <div>
    <a href="{{url('cursos/create')}}" values="Add Course" class="btn btn-success"> Add Course</a>

  </div>
  </div>
    @endsection
   