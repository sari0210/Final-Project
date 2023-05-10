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
        
      
        <th scope="row">{{$item->inscript_id}}</th> 
        <td>{{$item->curso}}</td>
        <td>{{$item->alumno}}</td>
        <td>{{$item->maestro}}</td>
        <td>{{$item->inscrip_date}}</td>
      
        <td>
            <!-- hacemos referencia al nombre de la ruta para editar el curso -->
            <form action="{{route('edit', $item->inscript_id) }}" method="POST">
                <!-- especificando el tipo de peticion -->
                @method('GET')
                @csrf <!-- token para autorizar la peticion -->
                <button class="btn btn-warning"><i class="bi bi-pencil-fill"></i> Edit</button>
            </form>
        </td>

        <td>
            <form action="{{ route('deleteInscrip', $item->inscript_id) }}" method="POST">
            @method('DELETE')
            @csrf
            <button class="btn btn-danger"><i class="bi bi-trash-fill"></i> Delete</button>
        </form>
        </td>    
          
       
     
      </tr>
       @endforeach
    </tbody>
  </table>
  <div>
    <a href="{{url('inscripciones/create')}}" values="Add Course" class="btn btn-success"> Add Inscription</a>

  </div>
  </div>
    @endsection
   