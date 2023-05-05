@extends('inscription.inscription')
@section('content')
<div class="container">
  <table class="table">
    <thead>

      <tr>
        <th scope="col">ID</th>
        <th scope="col">Course Name</th>
        <th scope="col">Student Name</th>
        <th scope="col">Teacher Name</th>
        <th scope="col">Date</th>
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
      
        <td><a href="{{url('inscripcion/'.$item->id)}}" class="btn btn-warning btn-edicion">Edit</a>

           <form action="{{url('inscripciones/'.$item->id)}}" method="post">
            @csrf 
            @method("Delete")
            <button class="btn btn-danger btn-edicion" type="submit">Delete</button>
        </form>
     
      </tr>
       @endforeach
    </tbody>
  </table>
  <div>
    <a href="{{url('inscripciones/create')}}" values="Add Incripcion" class="btn btn-success"> Add Inscription</a>

  </div>
</div>
    @endsection
   